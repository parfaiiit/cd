<?php include mymps_tpl('inc_head_jq');?>
<script type="text/javascript" src="../include/colorpicker/jquery.colorpicker.js"></script>
<script language=javascript>
function chkform(){
	if(document.form1.catname.value==""){
		alert('��������Ŀ���⣡');
		document.form1.catname.focus();
		return false;
	}
	if(document.form1.cat.value==""){
		alert('��ѡ����Ŀ��');
		document.form1.cat.focus();
		return false;
	}
}
function do_copy(){
  ff = document.form1;
  ff.title.value=document.getElementById("catname").value;
  ff.keywords.value=document.getElementById("catname").value;
}

function isUndefined(variable) {
	return typeof variable == 'undefined' ? true : false;
}

function insertunit(text) {
	$obj('jstemplate').focus();
	$obj('jstemplate').value=text;
}

function insertunit2(text) {
	$obj('jstemplate2').focus();
	$obj('jstemplate2').value=text;
}
</script>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
  <tr class="firstr">
  	<td colspan="2">������ʾ</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td id="menu_tip">
  <li>��Ŀ������Ϊ����ʱ������Ϊһ�����෽�����棬����������õ�ʱ������</li>
    </td>
  </tr>
</table>
</div>
<form method=post onSubmit="return chkform()" name="form1" action="?part=edit">
<input name="catid" value="<?=$cat[catid]?>" type="hidden">
<div id="<?=MPS_SOFTNAME?>">
<table width="100%"  border="0" cellspacing="0" cellpadding="0" class="vbm">
<tr class="firstr">
<td colspan="2">
    <div class="left"><a href="javascript:collapse_change('1')">��Ŀ������Ϣ</a></div>
    <div class="right"><a href="javascript:collapse_change('1')"><img id="menuimg_1" src="template/images/menu_reduce.gif"/></a></div>
</td>
</tr>
<tbody id="menu_1">
<tr bgcolor="white">
  <td width="15%" bgcolor="#F1F5F8">��Ŀ���ƣ� </td>
  <td><input name="catname" type="text" class="text" id="catname" value="<?=$cat[catname]?>" size="30"> 
  		<font color="red">*</font></td>
</tr>
<tr bgcolor="white">
<td bgcolor="#F1F5F8">����(����)��ɫ��</td>
<td><input id="cp1" name="fontcolor" class="text" style="width:60px" value="<?php echo $cat[color]; ?>"></td>
</tr>
<script type="text/javascript">
 $(function() {
      
        $("#cp1").colorpicker({
            fillcolor: true
        });
        
    });
</script>

<tr bgcolor="white">
  <td bgcolor="#F1F5F8">������Ŀ�� </td>
  <td><select name="parentid" id="parentid" >
    <?php if(!$cat[parentid]){?><option value="0">��Ϊ����Ŀ...</option><?php }?>
	<?php echo $cat[parentid] ? cat_list('category',0,$cat[parentid],true,2) : ''; ?>
  </select>  </td>
</tr>
<?php if($cat[parentid] == 0){?>
<tr bgcolor="white">
  <td bgcolor="#F1F5F8">��Ŀͼ��·���� <br />�ߴ�/30*30</td>
  <td><input name="icon" type="text" class="text" id="icon" value="<?=$cat[icon]?>"> <?php if($cat[icon] != ''){?><img src="<?=$cat[icon]?>"><?php }?> &nbsp;&nbsp;&nbsp;&nbsp;��ʽ�磺/template/default/images/index/icon_fang.gif</td>
</tr>
<?php }?>
<tr bgcolor="white">
  <td bgcolor="#F1F5F8">��Ŀ���� </td>
  <td><input name="catorder" type="text" class="txt" id="catorder" value="<?=$cat[catorder]?>" size="13"></td>
</tr>
<tr bgcolor="white">
  <td bgcolor="#F1F5F8">����ģ�ͣ� <?php if(!$cat['parentid']){?><div style="margin-top:10px; color:#666"><label for="children_mod"><input name="children_mod" value="1" type="checkbox" class="checkbox" id="children_mod">ͬ��Ӧ�õ�����Ŀ</label></div><?php }?></td>
  <td><select name="modid"><?php echo info_typemodels($cat[modid])?></select> [<a href="info_type.php?part=mod">ģ�͹���</a>]</td>
</tr>
<tr bgcolor="white">
  <td bgcolor="#F1F5F8">�Ƿ����ã� </td>
  <td> <select name="isview">
      <?=get_ifview_options($cat[if_view])?>
      </select></td>
</tr>
<tr bgcolor="white">
  <td width="15%" bgcolor="#F1F5F8">�Ƿ���ͼƬ�ϴ��� <?php if(!$cat['parentid']){?><div style="margin-top:10px; color:#666"><label for="children_upload"><input checked="checked" name="children_upload" value="1" type="checkbox" class="checkbox" id="children_upload">ͬ��Ӧ�õ�����Ŀ</label></div><?php }?></td>
  <td>
  <label for="up1"><input class="radio" type="radio" value="1" id="up1" name="if_upimg" <?php if($cat[if_upimg]=='1'){?>checked="checked"<?}?>>����</label> 
  <label for="up0"><input class="radio" type="radio" value="0" id="up0" name="if_upimg" <?php if($cat[if_upimg]=='0'){?>checked="checked"<?}?>>�ر�</label></td>
</tr>
<tr bgcolor="white">
  <td width="15%" bgcolor="#F1F5F8">�Ƿ�����ͼ��ע�� <?php if(!$cat['parentid']){?><div style="margin-top:10px; color:#666"><label for="children_map"><input checked="checked" name="children_map" value="1" type="checkbox" class="checkbox" id="children_map">ͬ��Ӧ�õ�����Ŀ</label></div><?php }?></td>
  <td>
  <label for="map1"><input class="radio" type="radio" value="1" id="map1" name="if_mappoint" <?php if($cat[if_mappoint]=='1'){?>checked="checked"<?}?>>����</label> 
  <label for="map0"><input class="radio" type="radio" value="0" id="map0" name="if_mappoint" <?php if($cat[if_mappoint]=='0'){?>checked="checked"<?}?>>�ر�</label></td>
</tr>
</tbody>
</table>
</div>
<div id="<?=MPS_SOFTNAME?>">
<table cellpadding="0" cellspacing="0" class="vbm">
<tr class="firstr">
<td colspan="2">
    <div class="left"><a href="javascript:collapse_change('2')">SEO�Ż�����<font style="color:#FF6600; font-weight:100">(������Ŀ������ͬ��
<label for="copy">
���<input name="radio" id="copy" class="radio" type="radio" onClick="do_copy();" />����</label>
)</font></a></div>
    <div class="right"><a href="javascript:collapse_change('2')"><img id="menuimg_2" src="template/images/menu_reduce.gif"/></a></div>
</td>
</tr>
<tbody id="menu_2">
<tr bgcolor="white">
  <td width="15%" bgcolor="#F1F5F8">��ʾ����(title)�� </td>
  <td> <input name="title" type="text" id="title" class="text" value="<?=$cat[title]?>" size="50"> <font color="red">*</font>(<font style="color:#FF6600">���������ֳ���_���ֳ�����</font>,������15���ַ�)
  </td>
</tr>
<tr bgcolor="white">
  <td bgcolor="#F1F5F8">�ؼ���(keyword)�� </td>
  <td><input name="keywords" type="text" id="keywords" class="text" value="<?=$cat[keywords]?>" size="50">   (����ؼ�����","����)</td>
</tr>
<tr bgcolor="white">
  <td bgcolor="#F1F5F8">���˵���� <div style="margin-top:10px; color:#666"><label for="children_des"><input name="children_des" value="1" type="checkbox" class="checkbox" id="children_des">ͬ��Ӧ�õ�����Ŀ</label></div></td>
  <td><textarea name="description" cols="49" rows="5" id="description"><?=$cat[description]?></textarea> (�ʵ����ֹؼ��֣�����������ľ��ӣ�������200�ַ�)</td>
</tr>
<tr bgcolor="white">
  <td bgcolor="#F1F5F8">Ŀ¼/ƴ��α��̬<br />���Զ���������</td>
  <td><?=GetHtmlType($cat[dir_type],'dir_type','edit',$cat[dir_typename])?> <font style="color:#666">����д��ĸ�������֣�- ��_���ո��Լ��������ţ���ȷ������<span>fang</span></font></td>
</tr>
</tbody>
</table>
</div>
<div id="<?=MPS_SOFTNAME?>">
<table cellpadding="0" cellspacing="0" class="vbm">
<tr class="firstr">
<td colspan="3">
    <div class="left"><a href="javascript:collapse_change('3')">��ĿӦ��ģ��</a></div>
    <div class="right"><a href="javascript:collapse_change('3')"><img id="menuimg_3" src="template/images/menu_reduce.gif"/></a></div>
</td>
</tr>
<tbody id="menu_3">
<tr bgcolor="white">
  <td bgcolor="#F1F5F8" width="15%">��Ŀ�б�ҳʹ��ģ�壺 <div style="margin-top:10px; color:#666"><label for="children_tpl"><input name="children_tpl" value="1" type="checkbox" class="checkbox" id="children_tpl">ͬ��Ӧ�õ�����Ŀ</label></div></td>
  <td width="300">/template/default/ <input name="template" class="text" style="width:100px;" id="jstemplate" value="<?php echo $cat['template'];?>"> .html   
  </td>
  <td>
  <?php foreach($category_tpl as $k => $v){?>
   <a href="###" title="���ʹ��<?=$v?>" onclick="insertunit('<?=$k?>')" class="temp <?php if($cat['template'] == $k) echo 'curtemp'?>"><?=$v?><br />��<?=$k?>��</a>
    <?php if($k == 'category') echo '<div class=clear></div>'?>
  <?php }?>
</td>
</tr>
<tr bgcolor="white">
  <td bgcolor="#F1F5F8">��Ŀ��Ϣ��ϸҳʹ��ģ�壺 <div style="margin-top:10px; color:#666"><label for="children_tplinfo"><input name="children_tplinfo" value="1" type="checkbox" checked="checked" class="checkbox" id="children_tplinfo">ͬ��Ӧ�õ�����Ŀ</label></div></td>
  <td>/template/default/ <input name="template_info" class="text" style="width:100px;" id="jstemplate2" value="<?php echo $cat['template_info'];?>"> .html 
  </td>
  <td>
  <?php foreach($information_tpl as $k => $v){?>
   <a href="###" title="���ʹ��<?=$v?>" onclick="insertunit2('<?=$k?>')" class="temp <?php if($cat['template_info'] == $k) echo 'curtemp'?>"><?=$v?><br />��<?=$k?>��</a>
  <?php }?>
</td>
</tr>
</tbody>
</table>
</div>
<div id="<?=MPS_SOFTNAME?>">
<table cellpadding="0" cellspacing="0" class="vbm">
<tr class="firstr">
<td colspan="3">
    <div class="left"><a href="javascript:collapse_change('4')">��Ŀ��Ϣ��ϵ��ʽ�鿴Ȩ��</a></div>
    <div class="right"><a href="javascript:collapse_change('4')"><img id="menuimg_4" src="template/images/menu_reduce.gif"/></a></div>
</td>
</tr>
<tbody id="menu_4">
<tr bgcolor="white">
  <td bgcolor="#F1F5F8" width="15%">�鿴��������Ŀ�µ���Ϣ��ϵ��ʽ�۳����������<div style="margin-top:10px; color:#666"><label for="children_usecoin"><input name="children_usecoin" checked="checked" value="1" type="checkbox" class="checkbox" id="children_usecoin">ͬ��Ӧ�õ�����Ŀ</label></div></td>
  <td>
  <input name="usecoin" class="txt" id="usecoin" value="<?php echo $cat['usecoin']; ?>"> <img src="../member/images/mymps_icon_incomes.gif" align="absmiddle"> <font color="red">����д������</font> <font style="color:#777; margin-left:10px;"><br>��д<font color="red">0</font>ʱ����ʾ��ϵ��ʽ��ȫ����<br>��д<font color="red">-1</font>ʱ����ʾ��ϵ��ʽֻ�Ե�¼�Ļ�Ա����<br>��д<font color="red">����0������</font>ʱ����ʾ�鿴��ϵ��ʽ��۳���Ա����Ӧ���</font>
  </td>
</tr>
</tbody>
</table>
</div>
<center>
<input type="submit" name="<?php echo CURSCRIPT; ?>_submit" value="�����޸�" class="mymps large" />��
<input type="button" onClick=history.back() value="�� ��" class="gray large">
</center>
</form>
<div style="display:none"><?=$cat[gid]?></div>
<?php mymps_admin_tpl_global_foot();?>