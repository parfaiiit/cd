<?php
CURSCRIPT != 'wap' && exit('FORBIDDEN');

$mobile_settings['register'] != 1 && redirectmsg('��վ�ֻ����ѹر�ע�Ṧ�ܣ�����ע�ᣬ��� '.$mymps_global[SiteUrl].' ��ҳ���ٽ���ע�ᣡ','javascript:history.back();');
$authcodesettings = read_static_cache('authcodesettings');
if($action == 'register'){

	include MYMPS_ROOT.'/member/include/common.func.php';
	
	if(!$mixcode || $mixcode != md5($cookiepre)){
		redirectmsg('ϵͳ�ж�������·����ȷ��','javascript:history.back();');
	}

	if($authcodesettings['register'] == 1 && !mymps_chk_randcode($checkcode)){
		redirectmsg('��֤����������뷵����������','javascript:history.back();');
	}
	
	if($mymps_global['cfg_member_verify'] == 4){
		if(!$mobile) write_msg('�����������ֻ�����!');
		if(!is_mobile($mobile)) write_msg('�ֻ��Ÿ�ʽ����ȷ!');
		if($db->getOne("SELECT COUNT(id) FROM `{$db_mymps}member` WHERE mobile = '$mobile'") > 0) redirectmsg('���ֻ����ѱ�ע���뻻һ���ֻ��ţ�','javascript:history.back();');
		if(!mymps_chk_smsrandcode($smscheckcode,$mobile)) redirectmsg('�ֻ���֤�����벻��ȷ�����ֻ��Ų�ƥ�䣡','javascript:history.back();');
		$userid = 'sj_'.$timestamp.rand(0,100);
	}else{
		strlen($userid) > 20 && redirectmsg('�����û�������20���ַ���������ע��!','javascript:history.back();');
		$rs	= CheckUserID($userid,'�û���');
		$rs != 'ok' && redirectmsg($rs,'index.php?mod=register');
		!is_email($email) && redirectmsg('Email��ʽ����ȷ��','javascript:history.back();');
	}
	
	if($userpwd != $reuserpwd) redirectmsg('��������������벻��ͬ���뷵����������','javascript:history.back();');
	(strlen($userid) < 3 || strlen($userpwd) < 5) && redirectmsg('����û������������(��������3���ַ�)��������ע��!','javascript:history.back();');
	$db->getOne("SELECT id FROM `{$db_mymps}member` WHERE userid = '$userid' ") && redirectmsg('��ָ�����û��� '.$userid.' �Ѵ��ڣ���ʹ�ñ���û���!','javascript:history.back();');
	
	$score_change = get_credit_score();
	$score_changer = $score_change['score']['rank']['register'];
	$score_changer = $score_changer === 0 ? ' +0' : $score_changer;
	$money_own	=	$db -> getOne("SELECT money_own FROM `{$db_mymps}member_level` WHERE id = '1'");
	$money_own	=	$money_own ? $money_own : 0;
	
	member_reg($userid,md5($userpwd),$email);
	$uid = $db->insert_id();
	
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
	
	if($mymps_global['cfg_member_verify'] == 1 || $mymps_global['cfg_member_verify'] == 4){
		$member_log -> in($userid,md5($userpwd),'off','noredirect');
		if($reg_corp == 1){
			redirectmsg('�����ƻ���������Ϣ�����ע�ᣡ','index.php?mod=member&action=editbase&type=reg');
		}else{
			redirectmsg('��ϲ! ���Ѿ�ע��ɹ�','index.php?mod=member');
		}
		
	}else{
		redirectmsg('�����˺���������У�����ϵ�ͷ���Ա��ͨ��','index.php?mod=index');
	}
} else {
	$mixcode = md5($cookiepre);
	include mymps_tpl('member_register');
}
?>