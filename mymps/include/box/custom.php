<?php
!defined('IN_MYMPS') && exit('FORBIDDEN');
$flag = isset($_GET['flag']) ? trim($_GET['flag']) : '';
$jscharset = isset($_GET['jscharset']) ? intval($_GET['jscharset']) : '';
empty($flag) && exit('�Ƿ��Ĳ�������');
echo '<style>body:font-size:12px</style><textarea style="width:520px; height:50px;"><!--{mympstag_'.$flag.'}--></textarea><br /><br /><font style="font-size:12px">���༭���ڵĴ��븴�Ƶ�ģ���ļ���Ӧλ�ü���</font>';
exit;
?>