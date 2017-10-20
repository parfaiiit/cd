<?php
define('IN_SMT',true);
define('IN_MYMPS',true);
require_once dirname(__FILE__)."/include/global.php";
require_once dirname(__FILE__)."/data/config.php";
require_once MYMPS_DATA."/config.db.php";
require_once MYMPS_INC."/db.class.php";
require_once MYMPS_INC."/member.class.php";
$iflogin 	= $member_log -> chk_in();

$action  = isset($action)	? trim($action) 	: '';
$part 	 = isset($part)		? trim($part) 		: '';
$id   	 = isset($id) 		? intval($id) 		: '';
$inajax  = isset($inajax) 	? intval($inajax) 	: '';

if(empty($id)) exit('Access Denied!');
if(!in_array($part,array('information','news','store'))) write_msg('���ύ����������ģ�鲻��Ϊ��!');
$dotphpurlarray = array('information'=>'information.php','news'=>'news.php','coupon'=>'coupon.php','group'=>'group.php');

$commentsettings = get_commentsettings();
if(!$commentsettings[$part]){
	exit();
}

if($action == 'insert'){
	$_COOKIE['comment'.$part.$id] == 1 && write_msg('��������̫���ˣ�����Ϣһ���ٷ�������...');
	if(!$iflogin && !$randcode = mymps_chk_randcode($checkcode)){
		write_msg('��֤����������뷵����������');
		exit;
	}
	empty($content) && write_msg("�ύʧ��!�������ݲ���Ϊ��!");
	strlen($content)>255 && write_msg("�벻Ҫ��д����127������!");
	
	if(!$iflogin){
	
		switch($commentsettings[$part]){
			case 1:
				$userid = '';
			break;
			case 2:
				$loginuser	= $loginuser ? mhtmlspecialchars($loginuser) : '';
				$loginpwd	= $loginpwd	 ? mhtmlspecialchars($loginpwd)	 : '';
				if(empty($loginuser)) write_msg('����д����û��ʺ�!');
				if(empty($loginpwd)) write_msg('����д����û����룡');
				$loginpwd = md5($loginpwd);
				if(!$res = $db -> getOne("SELECT id FROM `{$db_mymps}member` WHERE userid = '$loginuser' AND userpwd = '$loginpwd'")){
					unset($res);
					write_msg('����ʺŻ�����������󣬻򲻴��ڸ��û���');
				} else {
					$userid		= $loginuser;
					$member_log -> in($loginuser,$loginpwd,'','noredirect');
				}
			break;
		}
		
	} else {
		$userid = $s_uid;
	}
	
	
	$result 		= verify_badwords_filter($mymps_global['cfg_if_comment_verify'],'',$content);
	$content 		= textarea_post_change($result['content']);
	$comment_level  = $result['level'];
	$db->query("INSERT INTO `{$db_mymps}comment` (typeid,content,pubtime,ip,comment_level,userid,type)VALUES('$id','$content','$timestamp','".GetIP()."','$comment_level','".$userid."','$part')");
	
	setcookie('comment'.$part.$id,1,$timestamp+30,'/');
	
	if($comment_level == 1){
		write_msg("",$dotphpurlarray[$part]."?id=".$id.'#comment_write');
	}else{
		define('IN_AJAX',true);
		write_msg("���ύ�����Կ��ܺ���Υ��������ͨ������ʾ��",$dotphpurlarray[$part]."?id=".$id);
	}
	unset($loginuser,$loginpwd,$comment_level,$id);
}

$res = $db->getAll("SELECT content,userid,pubtime,ip FROM `{$db_mymps}comment` WHERE typeid = '$id' AND comment_level = '1' AND type = '$part' ORDER BY pubtime ASC LIMIT 0,10");
foreach($res as $k => $row){
	$arr['content']    = $row['content'];
	$arr['pubtime']    = get_format_time($row['pubtime']);
	$arr['userid']     = $row['userid'];
	$arr['ip']     = $row['ip'];
	$comment_all[]     = $arr;
}
	
$ajax_content ='
<script type="text/javascript" src="'.$mymps_global[SiteUrl].'/template/default/js/comment.js"></script>
<div class="box specialpostcontainer">';
if(is_array($comment_all)){
	$i = 0;
	foreach($comment_all as $key => $val){
	$i++;
	$ajax_content.='
		<div class="specialpost">
		<div class="postinfo">
		<h2>';
	$ajax_content.= $val['userid'] ? '<a class="dropmenu" style="font-weight: normal;" href="'.Rewrite("space",array("user"=>$val["userid"])).'" target="_blank" >'.$val["userid"].'</a>' : '<a class="dropmenu" style="font-weight: normal;">'.part_ip($val['ip']).'</a>';
	$ajax_content.='
		'.$val["pubtime"].' </h2>
		<strong>'.$i.'<sup>¥</sup></strong>
		</div>
		<div class="postmessage">
		<div class="t_msgfont">'.$val["content"].'
		</div>
		</div>
		</div>';
	}
} else {
	
	$ajax_content.='
	<div class="specialpost"></div>
	<div class="clear"></div>';
	
}

$ajax_content.=' 
	<div id="postleave">
		<a name="comment_write"></a>
		<form action="'.$mymps_global["SiteUrl"].'/comment.php?part='.$part.'&amp;action=insert" method="post" id="CommentForm" name="CommentForm" onsubmit="return CommentCheckForm();">
		<input name="id" value="'.$id.'" type="hidden">
		<dl><dt>�������ݣ�</dt><dd><textarea name="content" class="commenttextarea"></textarea></dd></dl>
		';
		
		
if($iflogin){
	$ajax_content .= '<div class=clearfix></div><dl><dt>&nbsp;</dt><dd><div style="margin-top:5px">'.$s_uid.' &nbsp;<a href="'.$mymps_global[SiteUrl].'/'.$mymps_global[cfg_member_logfile].'?part=out&url='.urlencode($mymps_global["SiteUrl"].'/'.$dotphpurlarray[$part].'?id='.$id).'">�˳�</a></div></dd></dl>';
} else {

	if($commentsettings[$part] == 2){
		$ajax_content .= '
			<div class="clearfix"></div>
			<dl>
			<dt>��¼�ʺţ�</dt>
			<dd>
			<input name="loginuser" class="commenttxt" style="width:100px;">
			&nbsp;&nbsp;&nbsp;&nbsp; 
			���룺<input name="loginpwd" type="password" class="commenttxt" style="width:100px;">&nbsp;&nbsp;&nbsp;&nbsp;<a href="'.$mymps_global[SiteUrl].'/'.$mymps_global[cfg_member_logfile].'?mod=register" target="_blank">ע���ʺ� &raquo;</a>
			</dd>
			</dl>
		';
	}
	
	$ajax_content .='<div class="clearfix"></div>';
	
	$ajax_content .= '<dl><dt>�� ֤ �룺</dt><dd><input name="checkcode" class="commenttxt" type="text" style="width:74px"/></dd></dl>';
	
	$ajax_content .='<div class="clearfix"></div>';
	
	$ajax_content .= '<dl><dt>&nbsp;</dt><dd><img src="'.$mymps_global["SiteUrl"].'/'.$mymps_global[cfg_authcodefile].'" alt="�����壬����ˢ��" class="authcode" align="absmiddle" onClick="this.src=this.src+\'?\'"/></dd></dl>';
}
		
$ajax_content .= '
		<div class="clearfix"></div>
		<dl><dt>&nbsp;</dt><dd><input type="submit" class="commentsubmit" value="�ύ����" style="line-height:18px" name="mymps"></dd></dl>
		</form> 
	</div>
</div>
';

is_object($db) && $db -> Close();
unset($ajax_concotent,$iflogin,$mymps_global,$member_log,$comment_all,$rows_num,$param,$page,$userid,$content,$inajax,$id,$part,$action,$userid,$s_uid,$db,$timestamp,$dotphpurlarray,$commentsettings);
?>