<?php
!defined('IN_MYMPS') && die('FORBIDDEN');

$member_menu = array();
$member_menu['user']['info']		= '������Ϣ';
$member_menu['user']['pay']			= '��ֵ���';
if($if_corp == 1){
	$member_menu['corp']['avatar']	= '����ͷ��';
}else{
	$member_menu['user']['avatar']	= '����ͷ��';
}
$member_menu['user']['shoucang']	= '�ҵ��ղ�';
$member_menu['user']['base']		= '��ϵ��ʽ';
$member_menu['user']['certify']		= 'ʵ����֤';
$member_menu['user']['pm']			= '����Ϣ';
if($if_corp == 1){
	$member_menu['corp']['levelup']	= '��������';
}else{
	$member_menu['user']['levelup']	= '�ʺ�����';
}
$member_menu['user']['password']	= '����';

/*corp menu*/
if($mymps_global['cfg_if_corp'] == 1){
	$member_menu['corp']['shop']		= '��������';
	$member_menu['corp']['comment']		= '���̵���';
	$member_menu['corp']['album']		= '�������';
	$member_menu['corp']['document']	= '��������';
	/*plugin menu*/
	@include MYMPS_DATA.'/caches/pluginmenu_member.php';
	if(is_array($data)){
		foreach($data as $key => $val){
			$key != 'news' && $member_menu['corp'][$key]  = $val;
		}
	}
}

function mymps_member_purview($purview='')
{
	global $member_menu;
	$member_menu['corp']['banner']		= '�ϴ�����banner';
    foreach($member_menu as $k => $v){
		$mymps_member_purview .="<tr bgcolor=\"#f5fbff\"><td>".($k=='user'?'���˻�Ա�˵�':'�̼һ�Ա�˵�')."</td><td>";
		foreach($member_menu[$k] as $w => $y){
			$mymps_member_purview .= "<label for=\"purview_".$w."\" style=\"width:110px\"><input type=\"checkbox\" class=\"checkbox\" name=\"purview[]\" id=\"purview_".$w."\" value=\"purview_".$w."\"";
			$mymps_member_purview .= ((is_array($purview)&&in_array('purview_'.$w,$purview))||empty($purview))? "checked":"";
			$mymps_member_purview .= ">".$y."</label> ";
		}
		$mymps_member_purview .="</td></tr>";
	}
	return $mymps_member_purview;
}

function cur_purviews($purview = ''){
	global $member_menu;
    foreach($member_menu as $k => $v){
		$mymps_member_purview .="<tr><td align=\"center\" width=\"10%\">".($k=='user'?'���˻�Ա�˵�':'�̼һ�Ա�˵�')."</td><td>";
		foreach($member_menu[$k] as $w => $y){
			$mymps_member_purview .= "<label for=\"purview_".$w."\" style=\"width:110px\"><input type=\"checkbox\" class=\"checkbox\" name=\"purview[]\" id=\"purview_".$w."\" value=\"purview_".$w."\"";
			$mymps_member_purview .= ((is_array($purview)&&in_array('purview_'.$w,$purview))||empty($purview))? "checked":"";
			$mymps_member_purview .= ">".$y."</label> ";
		}
		$mymps_member_purview .="</td></tr>";
	}
	return $mymps_member_purview;
}
?>