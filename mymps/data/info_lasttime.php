<?php
if (!defined('IN_MYMPS'))
{
    die('FORBIDDEN');
}
/*��Ϣ�����ĳ���ʱ��������ѡ��*/
//ע�ⵥλΪ�죬һ����Ϊ7��һ������Ϊ30���Դ�����
//һ������£��뱣����Ĭ�ϣ����޸�
$info_lasttime = array();

$info_lasttime[0] = '������Ч';//������Ϊ��Ϣ�������޸�ʱ�Ƿ���������Ч������Ը����Լ������ɾ���������벻Ҫ�޸�

$info_lasttime[7] 	= 'һ��';
$info_lasttime[30] 	= 'һ����';
$info_lasttime[60] 	= '������';
$info_lasttime[365] = 'һ��';


//���²�Ҫ�޸�
function GetInfoLastTime($lasttime='',$formname='endtime',$type='pc'){
	global $info_lasttime;
	$info_lasttime_form = "<select name='$formname' id='$formname' ".($type == 'pc'? 'class="input" require="true" datatype="limit"':'')." msg=\"��ѡ����Ϣ����Ч����\">";
	$info_lasttime_form .= "<option value=''>��ѡ����Ч����</option>";
	foreach($info_lasttime as $k=>$v){
	 	if($k==$lasttime) $info_lasttime_form .= "<option value='$k' selected>$v</option>\r\n";
	 	else $info_lasttime_form .= "<option value='$k'>$v</option>\r\n";
	}
	$info_lasttime_form .= "</select>\r\n";
	return $info_lasttime_form;
}

?>