<?php
if (!defined('IN_MYMPS'))
{
    die('FORBIDDEN');
}
$report_type_arr = array();
$report_type_arr[1] = 'Υ����Ϣ';
$report_type_arr[2] = '�������';
$report_type_arr[3] = '�����Ϣ';

$report_type_arr[4] = '����ԭ��';

function get_report_type()
{
	global $report_type_arr;
	$mymps .="<select name='report_type'>";
	foreach($report_type_arr as $k => $value)
	{
		$mymps .= "<option value=\"".$k."\">".$value."</option>";
	}
	$mymps .="</select>";
	return $mymps;
}
?>