<?php
!defined('IN_MYMPS') && exit('FORBIDDEN');
require_once MYMPS_DATA."/config.db.php";
require_once MYMPS_INC."/db.class.php";
$ip 		 = '';
$ip 		 = GetIP();
$infoid		 = isset($_POST['infoid']) 	  ? intval($_POST['infoid'])  : '';
$infotitle	 = isset($_POST['infotitle']) ? mhtmlspecialchars($_POST['infotitle']) : '';
$content	 = isset($_POST['content']) ? mhtmlspecialchars($_POST['content']) : '';
$report_type = isset($_POST['report_type']) ? intval($_POST['report_type']) : '';

if(mymps_count("info_report","WHERE infoid = '$infoid' AND ip = '$ip' AND pubtime > '".mktime(0,0,0)."'") > 0){
	echo "<center style=\"color:red; font-weight:bold\">����ʧ�ܣ�����Ϣ���Ѿ��ٱ����ˣ�</font>";
	exit;
}
$db->query("INSERT INTO `{$db_mymps}info_report` (report_type,content,infoid,infotitle,ip,pubtime)VALUES('$report_type','$content','$infoid','$infotitle','$ip','".$timestamp."')");
echo "<div style=\"margin:10px 15px\"><font style=\"color:red; font-size:12px\"><h1>��л���ľٱ� :)</h1><br />�� ��".$mymps_global[SiteName]."��ÿ������ǧ��Υ����Ϣͨ���û��ٱ���ɾ����<br /><br />�� ������ǲ�С�ĵ���˾ٱ���ť�����ġ�ֻ�е�һ����Ϣ�յ�һ�������ľٱ�ʱ�Żᱻɾ����</font></div>";
?>