<?php
if(!defined('IN_MYMPS')) exit('Forbidden');

$userid	 	= mhtmlspecialchars($userid);
$userpwd 	= trim($userpwd);
$loginip 	= GetIP();
$logintime  = $timestamp ? $timestamp : time();
$memory 	= isset($memory) ? trim($memory) : '';
$url 		= $url ? urldecode($url) : '';

if($authcodesettings['login'] == 1 && !$randcode = mymps_chk_randcode($checkcode)){
	write_msg('��֤����������뷵����������');
}

($userid == '' || $userpwd == '') && write_msg("�û��ʺŻ����벻��Ϊ��");

$user_id = $db->getOne("SELECT userid FROM `{$db_mymps}member` WHERE userid='$userid' OR mobile='$userid' OR email='$userid'");
$row  = $db -> getRow("SELECT userid,status FROM `{$db_mymps}member` WHERE userid='$user_id' AND userpwd='".md5($userpwd)."'");
$s_uid = $row['userid'];
$row['status'] = in_array(PASSPORT_TYPE,array('ucenter','phpwind')) ? 1 : $row['status']; 

$userid = $s_uid;

if($s_uid){
	
	if(empty($row['status'])){
		write_msg('�����˺� [<b>'.$s_uid.'</b>] Ŀǰ����<font color=red>����״̬</font>��<br>��������������֤�ʼ���ȴ��ͷ���Ա��ͨ�˺ţ�');
	} else {
		$db -> query("UPDATE `{$db_mymps}member` SET logintime='$timestamp',loginip='$loginip'  WHERE userid = '$userid' ");
		$member_log -> in($s_uid,md5($userpwd),$memory,'noredirect');
	}
	
	if(PASSPORT_TYPE == 'phpwind' && $user_login['synlogin']){
		echo $user_login['synlogin'];
	} elseif(PASSPORT_TYPE == 'ucenter'){
		echo uc_user_synlogin($uid);
	}
	
	echo mymps_goto($url ? $url : $mymps_global['SiteUrl'].'/member/index.php');
	
}else{
	//$db->query("INSERT INTO `{$db_mymps}member_record_login` (id,userid,userpwd,pubdate,ip,result) VALUES ('','$userid','$userpwd','$logintime','$loginip','0')");
	write_msg("��¼ʧ�ܣ��������˴�����˺Ż����룡");
}
?>