<?php
CURSCRIPT != 'wap' && exit('FORBIDDEN');
$action =  isset($action) ? trim($action) : '';
$id = isset($id) ? intval($id) : '';
$navi = array('index'=>'��ҳ','aboutus'=>'���','info'=>'��Ϣ','album'=>'���','docu'=>'��̬','goods'=>'��Ʒ','contact'=>'λ��');
if(!in_array($action,array_keys($navi))) $action = 'index';

$store = $db ->getRow("SELECT * FROM `{$db_mymps}member` WHERE if_corp = 1 AND status = 1 AND id = '$id'");
$store[tel]=$store[tel]?$store[tel]:$store[mobile];
if(!$store) errormsg('�û��������ڻ���δͨ����ˣ�');

if($action == 'index'){
	$info_list = mymps_get_infos('5','','',$store['userid']);
	$docu_list = get_member_docu('5',$store['userid']);
	$album = $db -> getAll("SELECT a.* FROM `{$db_mymps}member_album` AS a  WHERE a.userid='$store[userid]' ORDER BY a.id DESC LIMIT 0,2");
	include mymps_tpl('store');
	exit;
}elseif($action == 'info'){
	
	$where = " WHERE userid = '$store[userid]' AND (info_level = 1 OR info_level = 2)";
	$perpage = $mobile_settings['mobiletopicperpage'] ? $mobile_settings['mobiletopicperpage'] : 10;
	$param		= setparams(array('mod','action','id'));
	$rows_num = $db->getOne("SELECT COUNT(id) FROM `{$db_mymps}information` $where");
	$totalpage = ceil($rows_num/$perpage);
	$num = intval($page-1)*$perpage;
	
	$info_list = page1("SELECT * FROM `{$db_mymps}information` $where ORDER BY id DESC",$perpage);
	$pageview = pager();
	
}elseif($action == 'docu'){
	
	if($docuid){
		if(!$docu = $db->getRow("SELECT * FROM `{$db_mymps}member_docu` WHERE id = '$docuid' AND userid = '$store[userid]'")){
			redirectmsg('�û�����̬�����ڣ�','javascript:history.back();');
		}
		$db->query("UPDATE `{$db_mymps}member_docu` SET hit = hit + 1 WHERE id = '$docuid' AND userid = '$store[userid]'");
	}else{
		$where = " WHERE userid = '$store[userid]'";
		$perpage = $mobile_settings['mobiletopicperpage'] ? $mobile_settings['mobiletopicperpage'] : 10;
		$param		= setparams(array('mod','action','id'));
		$rows_num = $db->getOne("SELECT COUNT(id) FROM `{$db_mymps}member_docu` $where");
		$totalpage = ceil($rows_num/$perpage);
		$num = intval($page-1)*$perpage;
		
		$list = page1("SELECT * FROM `{$db_mymps}member_docu` $where ORDER BY id DESC",$perpage);
		$pageview = pager();
	}
	
}elseif($action == 'goods'){
	
	$where = " WHERE userid = '$store[userid]'";
	$perpage = $mobile_settings['mobiletopicperpage'] ? $mobile_settings['mobiletopicperpage'] : 10;
	$param		= setparams(array('mod','id','action','goodsid'));
	$rows_num = $db->getOne("SELECT COUNT(goodsid) FROM `{$db_mymps}goods` $where");
	$totalpage = ceil($rows_num/$perpage);
	$num = intval($page-1)*$perpage;
	
	$list = page1("SELECT * FROM `{$db_mymps}goods` $where ORDER BY goodsid DESC",$perpage);
	$pageview = pager();
	
}elseif($action == 'album'){
	
    $where = " WHERE userid = '$store[userid]'";
	$perpage = $mobile_settings['mobiletopicperpage'] ? $mobile_settings['mobiletopicperpage'] : 10;
	$param		= setparams(array('mod','action','id'));
	$rows_num = $db->getOne("SELECT COUNT(id) FROM `{$db_mymps}member_album` $where");
	$totalpage = ceil($rows_num/$perpage);
	$num = intval($page-1)*$perpage;
	
	$album = page1("SELECT * FROM `{$db_mymps}member_album` $where ORDER BY id DESC",$perpage);
	$pageview = pager();
	
}

include mymps_tpl('store_'.$action);


?>