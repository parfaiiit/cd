<?php
if(!defined('IN_MYMPS')) exit('Forbidden');
$mymps_global['cfg_if_member_register'] != 1 && write_msg("操作失败！系统管理员关闭了新会员注册！");

if(!$mixcode || $mixcode != md5($cookiepre)){
	die('您请求的来路不正确');
	exit();
}

$userid 	= $userid ? mhtmlspecialchars($userid) : '';
$userpwd 	= trim($userpwd);
$reuserpwd 	= trim($reuserpwd);
$email	 	= $email  ? mhtmlspecialchars($email)  : '';
$tname		= $tname  ? mhtmlspecialchars($tname)  : '';
$cname		= $cname  ? mhtmlspecialchars($cname)  : '';
$sex		= $sex 	  ? mhtmlspecialchars($sex)    : '';
$tel		= $tel 	  ? mhtmlspecialchars($tel)	   : '';
$fax		= $fax 	  ? mhtmlspecialchars($fax)    : '';
$address	= $address? mhtmlspecialchars($address) : '';
$smscheckcode = $smscheckcode ? intval($smscheckcode) : '';
$areaid		= intval($areaid);
$streetid	= intval($streetid);
$qq			= mhtmlspecialchars($qq);
$mobile		= mhtmlspecialchars($mobile);
$introduce	= $introduce ? textarea_post_change($introduce) : '';
/*注册地限制*/
$ip = '';
$ip = GetIP();
$ip2area = $ipdata = '';
require_once MYMPS_INC.'/ip.class.php';
$ipdata  = new ip();
$ipaddress = $ipdata -> getaddress($ip);
$ip2area = $ipaddress['area1'].$ipaddress['area2'];
$i=1;
unset($ipdata,$ipaddress);
$mymps_global['cfg_member_regplace'] = $mymps_global['cfg_member_regplace'] ? str_replace('，',',',$mymps_global['cfg_member_regplace']) :'';
if(!empty($mymps_global['cfg_member_regplace']) && !empty($ip2area)){
	$allow_reg_area = array();
	$allow_reg_area = explode(',',$mymps_global['cfg_member_regplace']);
	foreach($allow_reg_area as $k => $v){
		if(strstr($ip2area,$v)) {
			$i=$i+1;
		}
	}
	if($i == 1){
		write_msg("系统管理员已限制为<b style='color:red'>".$mymps_global['cfg_member_regplace']."</b>本地IP，方能注册! <br />如果您要继续操作，请联系客服。","olmsg");
		exit;
	}
	unset($allow_reg_area,$ip2area,$i);
}

if(!empty($mymps_global['cfg_forbidden_reg_ip'])){
	foreach(explode(",", $mymps_global['cfg_forbidden_reg_ip']) as $ctrlip) {
		if(preg_match("/^(".preg_quote(($ctrlip = trim($ctrlip)), '/').")/", $ip)) {
			$ctrlip = $ctrlip.'%';
			write_msg("您当前的IP <b style='color:red'>".$ip."</b> 已被管理员加入黑名单，不允许注册网站会员！");
			exit;
		}
	}
	unset($ctrlip);
}

if($authcodesettings['register'] == 1 && empty($activation) && !$randcode = mymps_chk_randcode($checkcode)){
	write_msg('验证码输入错误，请返回重新输入');
}
($reuserpwd != $userpwd && empty($activation)) && write_msg("你两次输入的密码不一致！");

$data = '';
@include MYMPS_DATA.'/caches/checkanswer_settings.php';
if(is_array($data)){
	$whenregister = $data['whenregister'];
	$result = read_static_cache('checkanswer');
	if($whenregister == '1' && is_array($result)){
		if(!is_array($checkquestion) || empty($checkquestion['answer']) || empty($checkquestion['id'])) write_msg('您还没有输入验证问题！');
		if($result[$checkquestion['id']]['answer'] != $checkquestion['answer']){
			write_msg('您输入的验证问题答案不正确，请重新输入！');
		}
	}
	$result = $checkquestion = NULL;
}

/*手机验证码判断*/
if($mymps_global['cfg_member_verify'] == '4'){
	if(!$mobile) write_msg('请输入您的手机号码!');
	if(!is_mobile($mobile)) write_msg('手机号格式不正确!');
	if($db->getOne("SELECT COUNT(id) FROM `{$db_mymps}member` WHERE mobile = '$mobile'") > 0) write_msg('该手机号已被注册请换一个手机号！');
	if(!mymps_chk_smsrandcode($smscheckcode,$mobile)) write_msg('手机验证码输入不正确或与手机号不匹配！');
	$userid = 'sj_'.$timestamp.rand(0,100);
}
/**/


if($reg_corp == '1' && (empty($tname) || empty($catid) || empty($cname))) write_msg('带<font color=red>*</font>项为必填项，请认真填写！');

$rs	= CheckUserID($userid,'用户名');
$rs != 'ok' && write_msg($rs);
strlen($userid) > 20 && write_msg("您的用户名多于20个字符，不允许注册！");
(strlen($userid) < 3 || strlen($userpwd) < 5) && write_msg("你的用户名或密码过短(不能少于3个字符)，不允许注册！");

$db->getOne("SELECT id FROM `{$db_mymps}member` WHERE userid = '$userid' ") && write_msg("你指定的用户名 {$userid} 已存在，请使用别的用户名！");


if($userid) {
	require MYMPS_INC.'/email.fun.php';
	
	$score_change = get_credit_score();
	$score_changer = $score_change['score']['rank']['register'];
	$score_changer = $score_changer === 0 ? ' +0' : $score_changer;
	
	member_reg($userid,md5($userpwd),$email,$safequestion,$safeanswer,$openid,$cname);
	$uid = $db ->insert_id();
	
	$money_own	=	$db -> getOne("SELECT money_own FROM `{$db_mymps}member_level` WHERE id = '1'");
	$money_own	=	$money_own ? $money_own : 0;
	
	if($reg_corp == 1){
		if(is_array($catid)){
			foreach($catid as $kids => $vids){
				$db->query("INSERT INTO `{$db_mymps}member_category` (userid,catid)VALUES('$userid','$vids')");
			}
			$catids  = implode(',',$catid);
		}
		$db->query("UPDATE `{$db_mymps}member` SET tname = '$tname' , cname = '$cname', catid = '$catids',areaid = '$areaid',qq = '$qq' , if_corp = '1' ,tel = '$tel' , mobile = '$mobile', money_own = '$money_own' ,introduce = '$introduce',address = '$address' ,score = score".$score_changer."  WHERE userid = '$userid'");
	} else {
		$db->query("UPDATE `{$db_mymps}member` SET mobile='$mobile',money_own = '$money_own',score = score".$score_changer." WHERE userid = '$userid'");
	}
	
	$score_change = $score_changer = NULL;
	if($mymps_global['cfg_member_reg_title'] && $mymps_global['cfg_member_reg_content']){
		$title 	 = str_replace('{username}',$userid,$mymps_global['cfg_member_reg_title']);
		$content = str_replace('{sitename}',$mymps_global['SiteName'],$mymps_global['cfg_member_reg_content']);
		$content = str_replace('{time}',GetTime($timestamp),$content);
		$content = str_replace('{username}',$userid,$content);
		sendpm('admin',$userid,$title,$content,1);	
	}
	
	$fromuid = mgetcookie('fromuid');
	$fromip	 = mgetcookie('fromip');
	if($fromuid && $mymps_global['cfg_if_affiliate'] == 1){
		$fromuid = intval($fromuid);
		$fromip = trim($fromip);
		$score_changer = "+".$mymps_global['cfg_affiliate_score'];
		$db -> query("UPDATE `{$db_mymps}member` SET score = score".$score_changer." WHERE id = '$fromuid'");
	}
	
	if($mymps_global['cfg_member_verify'] == 3){
		$code = base64_encode($uid.".".md5($uid.'+'.md5($userpwd)).'.'.$timestamp);
		$webmail = NULL;
		if(send_validate_email($uid, $userid, $email, $code)){
			$error = '2';
			$mailweb = explode('@',$email);
			$mailweb = strtoupper($mailweb[1]);
			switch($mailweb){
				case 'QQ.COM': $webmail = 'http://mail.qq.com';$webname = 'QQ邮箱'; break;
				case '163.COM': $webmail = 'http://mail.163.com';$webname = '163邮箱'; break;
				case '126.COM': $webmail = 'http://www.126.com';$webname = '126邮箱'; break;
				case '188.COM': $webmail = 'http://www.188.com';$webname = '188邮箱'; break;
				case 'YEAH.NET': $webmail = 'http://www.yeah.net';$webname = '网易yeah邮箱'; break;
				case 'ALIYUN.COM': $webmail = 'http://mail.aliyun.com';$webname = '阿里云邮箱'; break;
				case 'GMAIL.COM': $webmail = 'http://www.gmail.com';$webname = 'Gmail邮箱'; break;
				case 'SOHU.COM': $webmail = 'http://mail.sohu.com';$webname = '搜狐邮箱'; break;
				case 'SINA.COM.CN': $webmail = 'http://mail.sina.com.cn';$webname = '新浪邮箱'; break;
				case 'SINA.NET': $webmail = 'http://mail.sina.net';$webname = '新浪邮箱'; break;
				case 'FOXMAIL.COM': $webmail = 'http://mail.foxmail.com';$webname = 'foxmail邮箱'; break;
				case 'HOTMAIL.COM': $webmail = 'http://mail.hotmail.com';$webname = '微软邮箱'; break;
				case 'LIVE.COM': $webmail = 'http://mail.live.com';$webname = '微软邮箱'; break;
			}
		}else{
			$error = '1';//邮件发送失败
		}
		
		globalassign();
		include mymps_tpl('register_2');
		
	}elseif($mymps_global['cfg_member_verify'] == 2){
		//人工审核
		//提示：账号待审，等待管理员审核，或致电客服：界面
		$error = '3';
		globalassign();
		include mymps_tpl('register_2');
	}else{
		//不审核
		$member_log -> in($userid,md5($userpwd),'off','noredirect');
		write_msg("恭喜！注册成功,现在正转入用户管理中心",$mymps_global['SiteUrl']."/member/index.php");
		
	}
}
?>