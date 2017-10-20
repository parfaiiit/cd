<?php
define('IN_SMT',true);
define('CURSCRIPT','group');
define('IN_MYMPS',TRUE);
define('DIR_NAV',dirname(__FILE__));

require_once DIR_NAV.'/include/global.php';
require_once MYMPS_DATA."/config.php";
require_once MYMPS_DATA."/config.db.php";
require_once MYMPS_INC."/db.class.php";
ifsiteopen();

$id 		= isset($id) 		? intval($id) 		: '';
$cate_id 	= isset($cate_id) 	? intval($cate_id) 	: 0;
$data 	 	= $pluginsettings	=	'';
$areaid 	= isset($areaid) 	? intval($areaid) 	: 0;
$page	 	= isset($page)	   	? intval($page)	  	: 1;

!ifplugin(CURSCRIPT) && exit('����Ա�ѽ��û�δ��װ�Ź����...');

if(!submit_check(CURSCRIPT.'_submit')){

	require_once DIR_NAV.'/plugin/group/include/functions.php';
	
	require_once MYMPS_DATA.'/grouplevel.inc.php';
	
	$group_class = get_group_class();
	
	if($id) {
		
		$group  = $db -> getRow("SELECT * FROM `{$db_mymps}group` WHERE groupid = '$id' AND glevel > '0'");
		if(!$group['groupid']) write_msg('���Ź�������ڻ�����δͨ����ˣ�',$mymps_global['SiteUrl']);
		
		$group['remaindate'] = intval(($group['enddate']-$timestamp)/(86400));
		
		$data = '';
		@include MYMPS_DATA.'/caches/area_option_static.php';
		$group['areaname'] = $data ? $data[$group['areaid']]['areaname'] : $db -> getOne("SELECT areaname FROM `{$db_mymps}area` WHERE areaid = '$group[areaid]'");
		$data = NULL;
		
		/*�Ź�������������*/
		$group['content'] = replace_insidelink($group['content'],'group');
		
		$share = array();
		$share['title'] = urlencode($group['gname']);
		$share['url']	= plugin_url(CURSCRIPT,array('id'=>$group['groupid']));
		
		$loc = get_group_location($group['cate_id'],$group['gname']);
		$page_title = $loc['page_title'];
		$location	= $loc['location'];

		$advertisement	= get_advertisement('other');//���ȫ�ֹ��
		$adveritems		= $city['advertisement'];
		$advertisement	= $advertisement['all'];
		
		$hotgroup = mymps_get_groups(15,1);
		globalassign();
		include mymps_tpl('view');
		
	} else {
	
		$area_class = cat_list('area',0,0,false,1);
		$area_class	= array_merge(array('0'=>array('areaid'=>'','areaname'=>'ȫ��')),$area_class);
		if(is_array($area_class)){
			foreach($area_class as $areakey => $areaval){
				$area_class[$areakey]['uri'] = plugin_url(CURSCRIPT,array('cate_id'=>$cate_id,'areaid'=>$areaval['areaid']));
				$area_class[$areakey]['select'] = $areaval['areaid'] == $areaid ? '1' : 0;
			}
		}
		
		$where = "WHERE glevel > '0'";
		if($cate_id) $where .= " AND cate_id = '$cate_id'";
		if($cityid) $where .= " AND cityid = '$cityid'";
		if($areaid) $where .= " AND areaid = '$areaid'";
		
		$rows_num = $db -> getOne("SELECT COUNT(groupid) FROM `{$db_mymps}group` $where");
		$param = setParam(array('cateid','areaid'));
		$group = page1("SELECT * FROM `{$db_mymps}group` $where ORDER BY displayorder DESC");
		$list = array();
		foreach($group as $k => $v){
			$list[$v['groupid']]['groupid'] = $v['groupid'];
			$list[$v['groupid']]['gname'] = $v['gname'];
			$list[$v['groupid']]['des'] = clear_html($v['des']);
			$list[$v['groupid']]['enddate'] = $v['enddate'];
			$list[$v['groupid']]['meetdate'] = $v['meetdate'];
			$list[$v['groupid']]['gaddress'] = $v['gaddress'];
			$list[$v['groupid']]['glevel'] = $v['glevel'];
			$list[$v['groupid']]['signintotal'] = $v['signintotal'];
			$list[$v['groupid']]['commenturl'] = $v['commenturl'];
			$list[$v['groupid']]['pre_picture'] = $v['pre_picture'];
			$list[$v['groupid']]['uri'] = plugin_url('group',array('id'=>$v['groupid']));
		}
		
		$page_view = page2();
		$hotgroup = mymps_get_groups('15',1);
		$hotgroup = $hotgroup ? $hotgroup : array();
		
		$loc = get_group_location($cate_id);
		$page_title = (empty($cate_id) && empty($areaid)) ? ($pluginsettings[CURSCRIPT]['seotitle'] ? $pluginsettings[CURSCRIPT]['seotitle'] : $loc['page_title']) : $loc['page_title'];
		$page_title = str_replace('{city}',$city['cityname'],$page_title);
		$location	= $loc['location'];
		
		$seo = array();
		$seo['keywords'] 	= str_replace('{city}',$city['cityname'],$pluginsettings[CURSCRIPT]['seokeywords']);
		$seo['description'] = str_replace('{city}',$city['cityname'],$pluginsettings[CURSCRIPT]['seodescription']);
		
		$advertisement	= get_advertisement('other');//���ȫ�ֹ��
		$adveritems		= $city['advertisement'];
		$advertisement	= $advertisement['all'];
		
		globalassign();
		include mymps_tpl('index');
	}

} else {
	
	$sname = $sname ? mhtmlspecialchars($sname) : '';
	$id = isset($id) ? intval($id) : '';
	$qqmsn = isset($qqmsn) ? mhtmlspecialchars($qqmsn) : '';
	$tel =  isset($tel) ? mhtmlspecialchars($tel) : '';
	$signinip = GetIP();
	$sex = isset($sex) ? mhtmlspecialchars($sex) : '';
	$message = isset($message) ? textarea_post_change($message) : '';
	$totalnumber = isset($totalnumber) ? intval($totalnumber) : '';
	$age = isset($age) ? mhtmlspecialchars($age) : '';
	
	if(empty($id)) write_msg('���������Ź�������ڣ�');
	if(empty($sname)) write_msg('��������Ϊ�գ�');
	if(!$randcode = mymps_chk_randcode($checkcode)){
		write_msg('��֤����������뷵����������');
	}
	
	$db -> query("UPDATE `{$db_mymps}group` SET signintotal = signintotal + 1 WHERE groupid = '$id'");
	$db -> query("INSERT INTO `{$db_mymps}group_signin` (groupid,sname,sex,tel,age,qqmsn,signinip,dateline,totalnumber,message) VALUES ('$id','$sname','$sex','$tel','$age','$qqmsn','$signinip','$timestamp','$totalnumber','$message')");
	write_msg('�����ύ�ɹ������ǻᾡ������ȡ����ϵ��',plugin_url(CURSCRIPT,array('id'=>$id)));
	
}

is_object($db) && $db->Close();
$city = $maincity = NULL;
unset($city,$maincity);

function get_group_location($cate_id=0,$str=''){
	global $db,$db_mymps,$group_class,$city;
	
	$raquo = $GLOBALS['mymps_global']['cfg_raquo'];
	$location   = '��ǰλ�ã�<a href="'.($city['domain'] ? $city['domain'] : $GLOBALS['mymps_global']['SiteUrl']).'">'.$city['cityname'].$GLOBALS['mymps_global']['SiteName'].'</a>'.' <code>'.$raquo.'</code> '.' <a href="'.$city['domain'].plugin_url(CURSCRIPT,array('cate_id'=>0)).'">'.$city[cityname].'�Ź��</a>';
	$page_title = $city['cityname'].'�Ź��-'.$GLOBALS['mymps_global']['SiteName'];
	
	if(!empty($cate_id)){
		$page_title =  htmlspecialchars($group_class[$cate_id]['cate_name']) . '-' . $page_title;
		$location   .= ' <code> '.$raquo.' </code> <a href="' .$city['domain'].$group_class[$cate_id]['cate_uri'] . '">' .
		htmlspecialchars($group_class[$cate_id]['cate_name']).'</a>';
	}
	
	$page_title = $GLOBALS['mymps_global']['SiteCity'].($GLOBALS['areaid'] ? get_areaname($GLOBALS['areaid']) : '').$page_title;
	
	if (!empty($str)){
        $page_title = $str.'-'.$page_title;
        $location   .= ' <code>'.$raquo.'</code> &nbsp;' .$str;
    }
	
	$cur = array('page_title'=>$page_title,'location'=>$location);
	unset($page_title,$cat,$location,$type,$group_class);
    return $cur;
}
?>