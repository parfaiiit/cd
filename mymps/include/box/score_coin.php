<?php
!defined('IN_MYMPS') && exit('FORBIDDEN');
require_once MYMPS_DATA."/config.db.php";
require_once MYMPS_INC."/db.class.php";
require_once MYMPS_INC."/member.class.php";
if(!$member_log->chk_in()) write_msg("�Բ���,����û�е�¼��");

$row = $db -> getRow("SELECT score FROM `{$db_mymps}member` WHERE userid = '$s_uid'");

if($action == 'post'){
	$score = isset($_POST['score']) ? intval($_POST['score']) : '';
	if(!$score) write_msg('��������Ҫ�һ��Ļ������');
	
	if($score > $row['score']) write_msg('������Ļ��������Ѿ����������û�����');
	$coin = floor($score/$mymps_global['cfg_score_fee']);
	if(empty($coin)) write_msg('�һ�ʧ�ܣ�������������Ч�Ķһ�����');
	$truescore = $coin*$mymps_global['cfg_score_fee'];
	$db -> query("UPDATE `{$db_mymps}member` SET score = score - ".$truescore.",money_own=money_own + ".$coin." WHERE userid = '$s_uid'");
	
	write_msg('�һ��ɹ�! �����ʻ��ѳɹ�����<font color=red>'.$coin.'</font>���<br /><br /><input value="�رմ���" type="button" onclick=\'parent.window.location.reload();parent.closeopendiv();\' style="margin-left:auto;margin-right:auto;" class="blue">','olmsg');
} else {
	include MYMPS_ROOT.'/template/box/score_coin.html';
}
$row = $coin = $score = NULL;
?>