<?php
!defined('IN_MYMPS') && exit('FORBIDDEN');
require_once MYMPS_DATA."/config.db.php";
require_once MYMPS_INC."/db.class.php";
require_once MYMPS_INC."/cache.fun.php";

/*���ֱ仯��������*/
$score_change = get_credit_score();
$array = array(
		'ע��ɹ�'=>'register',
		'��¼�ɹ�'=>'login',
		'����������Ϣ'=>'information',
		'Ӫҵִ����֤'=>'com_certify',
		'���֤��֤'=>'per_certify'
		
);

@include MYMPS_DATA.'/caches/plugin.php';
$pluginsettings = $data;
unset($data);

if(is_array($pluginsettings)){
	foreach($pluginsettings as $k => $v){
		if($v['disable'] != 1 && $v['flag'] != 'news'){
			$array['����'.$v['name']] = $v['flag'];
		}
	}
}

include MYMPS_ROOT.'/template/box/howtogetscore.html';
$score_change=$array=$pluginsettings=NULL;
?>