<?php
if(!defined('IN_MYMPS')) exit('Forbidden');
$mymps_global['cfg_if_member_register'] != 1 && write_msg("����ʧ�ܣ�ϵͳ����Ա�ر����»�Աע�ᣡ");

if(!$mixcode || $mixcode != md5($cookiepre)){
	die('���������·����ȷ');
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
/*ע�������*/
$ip = '';
$ip = GetIP();
$ip2area = $ipdata = '';
require_once MYMPS_INC.'/ip.class.php';
$ipdata  = new ip();
$ipaddress = $ipdata -> getaddress($ip);
$ip2area = $ipaddress['area1'].$ipaddress['area2'];
$i=1;
unset($ipdata,$ipaddress);
$mymps_global['cfg_member_regplace'] = $mymps_global['cfg_member_regplace'] ? str_replace('��',',',$mymps_global['cfg_member_regplace']) :'';
if(!empty($mymps_global['cfg_member_regplace']) && !empty($ip2area)){
	$allow_reg_area = array();
	$allow_reg_area = explode(',',$mymps_global['cfg_member_regplace']);
	foreach($allow_reg_area as $k => $v){
		if(strstr($ip2area,$v)) {
			$i=$i+1;
		}
	}
	if($i == 1){
		write_msg("ϵͳ����Ա������Ϊ<b style='color:red'>".$mymps_global['cfg_member_regplace']."</b>����IP������ע��! <br />�����Ҫ��������������ϵ�ͷ���","olmsg");
		exit;
	}
	unset($allow_reg_area,$ip2area,$i);
}

if(!empty($mymps_global['cfg_forbidden_reg_ip'])){
	foreach(explode(",", $mymps_global['cfg_forbidden_reg_ip']) as $ctrlip) {
		if(preg_match("/^(".preg_quote(($ctrlip = trim($ctrlip)), '/').")/", $ip)) {
			$ctrlip = $ctrlip.'%';
			write_msg("����ǰ��IP <b style='color:red'>".$ip."</b> �ѱ�����Ա�����������������ע����վ��Ա��");
			exit;
		}
	}
	unset($ctrlip);
}

if($authcodesettings['register'] == 1 && empty($activation) && !$randcode = mymps_chk_randcode($checkcode)){
	write_msg('��֤����������뷵����������');
}
($reuserpwd != $userpwd && empty($activation)) && write_msg("��������������벻һ�£�");

$data = '';
@include MYMPS_DATA.'/caches/checkanswer_settings.php';
if(is_array($data)){
	$whenregister = $data['whenregister'];
	$result = read_static_cache('checkanswer');
	if($whenregister == '1' && is_array($result)){
		if(!is_array($checkquestion) || empty($checkquestion['answer']) || empty($checkquestion['id'])) write_msg('����û��������֤���⣡');
		if($result[$checkquestion['id']]['answer'] != $checkquestion['answer']){
			write_msg('���������֤����𰸲���ȷ�����������룡');
		}
	}
	$result = $checkquestion = NULL;
}

/*�ֻ���֤���ж�*/
if($mymps_global['cfg_member_verify'] == '4'){
	if(!$mobile) write_msg('�����������ֻ�����!');
	if(!is_mobile($mobile)) write_msg('�ֻ��Ÿ�ʽ����ȷ!');
	if($db->getOne("SELECT COUNT(id) FROM `{$db_mymps}member` WHERE mobile = '$mobile'") > 0) write_msg('���ֻ����ѱ�ע���뻻һ���ֻ��ţ�');
	if(!mymps_chk_smsrandcode($smscheckcode,$mobile)) write_msg('�ֻ���֤�����벻��ȷ�����ֻ��Ų�ƥ�䣡');
	$userid = 'sj_'.$timestamp.rand(0,100);
}
/**/


if($reg_corp == '1' && (empty($tname) || empty($catid) || empty($cname))) write_msg('��<font color=red>*</font>��Ϊ�������������д��');

$rs	= CheckUserID($userid,'�û���');
$rs != 'ok' && write_msg($rs);
strlen($userid) > 20 && write_msg("�����û�������20���ַ���������ע�ᣡ");
(strlen($userid) < 3 || strlen($userpwd) < 5) && write_msg("����û������������(��������3���ַ�)��������ע�ᣡ");

$db->getOne("SELECT id FROM `{$db_mymps}member` WHERE userid = '$userid' ") && write_msg("��ָ�����û��� {$userid} �Ѵ��ڣ���ʹ�ñ���û�����");


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
				case 'QQ.COM': $webmail = 'http://mail.qq.com';$webname = 'QQ����'; break;
				case '163.COM': $webmail = 'http://mail.163.com';$webname = '163����'; break;
				case '126.COM': $webmail = 'http://www.126.com';$webname = '126����'; break;
				case '188.COM': $webmail = 'http://www.188.com';$webname = '188����'; break;
				case 'YEAH.NET': $webmail = 'http://www.yeah.net';$webname = '����yeah����'; break;
				case 'ALIYUN.COM': $webmail = 'http://mail.aliyun.com';$webname = '����������'; break;
				case 'GMAIL.COM': $webmail = 'http://www.gmail.com';$webname = 'Gmail����'; break;
				case 'SOHU.COM': $webmail = 'http://mail.sohu.com';$webname = '�Ѻ�����'; break;
				case 'SINA.COM.CN': $webmail = 'http://mail.sina.com.cn';$webname = '��������'; break;
				case 'SINA.NET': $webmail = 'http://mail.sina.net';$webname = '��������'; break;
				case 'FOXMAIL.COM': $webmail = 'http://mail.foxmail.com';$webname = 'foxmail����'; break;
				case 'HOTMAIL.COM': $webmail = 'http://mail.hotmail.com';$webname = '΢������'; break;
				case 'LIVE.COM': $webmail = 'http://mail.live.com';$webname = '΢������'; break;
			}
		}else{
			$error = '1';//�ʼ�����ʧ��
		}
		
		globalassign();
		include mymps_tpl('register_2');
		
	}elseif($mymps_global['cfg_member_verify'] == 2){
		//�˹����
		//��ʾ���˺Ŵ��󣬵ȴ�����Ա��ˣ����µ�ͷ�������
		$error = '3';
		globalassign();
		include mymps_tpl('register_2');
	}else{
		//�����
		$member_log -> in($userid,md5($userpwd),'off','noredirect');
		write_msg("��ϲ��ע��ɹ�,������ת���û���������",$mymps_global['SiteUrl']."/member/index.php");
		
	}
}
?>