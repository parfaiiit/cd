<?php
require_once MYMPS_ROOT.'/include/sms.fun.php';
if($action == 'sendmail'){
	
	$email = isset($email) ? mhtmlspecialchars($email): '';
	if($authcodesettings['forgetpass'] == 1 && !$randcode = mymps_chk_randcode($checkcode)){write_msg('��֤����������뷵����������');}
	empty($email)  && write_msg("����д���������ַ��");
	//if(mgetcookie('emailsended'.$email) == 1){write_msg("��Ϣһ���ٷ����ʼ�");}
	$user_info = $db ->getRow("SELECT * FROM `{$db_mymps}member` WHERE email = '$email'");
	if ($user_info['userid']){
		require MYMPS_INC.'/email.fun.php';
		$code = base64_encode($user_info['id'].".".md5($user_info['id'].'+'.$user_info['userpwd']).'.'.$timestamp);
		
		globalassign();
		if (send_pwd_email($user_info['id'], $user_info['userid'], $email, $code)){
			//msetcookie("emailsended".$userinfo['email'],1);
			include mymps_tpl($mod.'_2');
		}else{
			$status = 'error2';
			$msg = '�����ʼ�ʧ�ܣ�����ϵ�ͷ���'.$mymps_global["SiteTel"].'�������룡';
			include mymps_tpl($mod.'_4');
		}
	
	}else{
	
		$status = 'error2';
		$msg = '�õ���������û��������ڣ�����ϵ�ͷ���'.$mymps_global["SiteTel"].'��';
		globalassign();
		include mymps_tpl($mod.'_4');
	
	}
	
}elseif($action == 'sendsms'){
	
	$mobile = isset($mobile) ? mhtmlspecialchars($mobile) : '';
	if($authcodesettings['forgetpass'] == 1 && !$randcode = mymps_chk_randcode($checkcode)) write_msg('��֤����������뷵����������');
	empty($mobile)  && write_msg("����д�����ֻ����룡");
	$user_info = $db ->getRow("SELECT * FROM `{$db_mymps}member` WHERE mobile = '$mobile'");
	if ($user_info['userid']){
		
		//�����ֻ���֤��
		$smsconfig = get_sms_config();//���sms���� dxton ihuyi
		$smsconfig['sms_service'] && include MYMPS_ROOT.'/include/'.$smsconfig['sms_service'].'/mymps.php';
		
		if(!send_pwdsms($smsconfig['sms_user'],$smsconfig['sms_pwd'],$mobile,$smsconfig['sms_pwdtpl'])){
			//����ʧ��
			$status = 'error2';
			$msg = '��֤�뷢��ʧ�ܣ�����ϵ�ͷ���'.$mymps_global["SiteTel"].'��';
			globalassign();
			include mymps_tpl($mod.'_4');
		}else{
			$uid = $user_info['id'];
			$userid = $user_info['userid'];
			include mymps_tpl($mod.'_2');
		}
	}else{
	
		$status = 'error2';
		$msg = '���ֻ�����δע���û�������ϵ�ͷ���'.$mymps_global["SiteTel"].'��';
		globalassign();
		include mymps_tpl($mod.'_4');
	
	}
	
}elseif($action == 'resetpage'){

	globalassign();
	include mymps_tpl($mod.'_3');

}elseif($action == 'resetpwd'){
	$uid = $uid ? intval($uid) : '';
	$userid = $userid ? mhtmlspecialchars($userid) : '';
	$userpwd = $userpwd ? mhtmlspecialchars($userpwd) : '';
	$email = $email ? mhtmlspecialchars($email) : '';
	$mobile = $mobile ? mhtmlspecialchars($mobile) : '';
	$smscheckcode = $smscheckcode ? intval($smscheckcode) : '';
	if($mymps_global['cfg_member_verify'] == 4){
		if(!mymps_chk_smsrandcode($smscheckcode,$mobile)) write_msg('�����޸�ʧ�ܣ��ֻ���֤�����벻��ȷ�����ֻ��Ų�ƥ�䣡','?mod=forgetpass');
	}
	if(empty($userpwd)) write_msg('��������������룡');
	
	if (!empty($userpwd)){
		$db->query("UPDATE `{$db_mymps}member` SET userpwd='".md5($userpwd)."' WHERE id = '$uid'");
		$status = 'success';
	} else {
		$status = 'error';
		$msg = 'δ������������޸�ʧ�ܣ�';
	}
	
	globalassign();
	include mymps_tpl($mod.'_4');
}
?>