<?php
!defined('IN_MYMPS') && exit('FORBIDDEN');
$flag = isset($_GET['flag']) ? trim($_GET['flag']) : '';
$jscharset = isset($_GET['jscharset']) ? intval($_GET['jscharset']) : '';
empty($flag) && exit('�Ƿ��Ĳ�������');
echo '<style>body{font-size:12px}</style><textarea style="width:520px; height:50px;">'.mhtmlspecialchars('<script language="javascript" src="'.$mymps_global["SiteUrl"].'/javascript.php?flag='.$flag.'" '.($jscharset==1?'charset="utf-8"':'').'></script>').'</textarea><br /><br /><font style="font-size:12px">���༭���ڵĴ��븴�Ƶ�����HTML��Ӧλ�ü���</font>';
exit;
?>