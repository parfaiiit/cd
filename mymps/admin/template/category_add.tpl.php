<?php include mymps_tpl('inc_head');?>
<script language=javascript>
function chkform(){
	if(document.form1.catname.value==""){
		alert('��������Ŀ���⣡');
		document.form1.catname.focus();
		return false;
	}
	if(document.form.catname.value.length<2){
		alert('��Ŀ�����������2���ֽ�����!');
		document.form1.catname.focus();
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
<form method=post onSubmit="return chkform()" name="form1" action="?part=add">
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
  <td><textarea rows="20" name="catname" cols="20" style="float:left"></textarea>
<div style="margin-top:3px; float:left; margin-left:10px;">֧����ҵ����������ӣ�������໻�и��� <br />
<font color="red">������<br />��ҵ1<br />��ҵ2<br />��ҵ3<br />��ҵ4<br />��ҵ5</font></div></td>
</tr>
<tr bgcolor="white">
  <td bgcolor="#F1F5F8">������Ŀ�� </td>
  <td><select name="parentid" id="parentid" >
    <option value="0">��Ϊ����Ŀ...</option>
	<?=cat_list('category',0,0,true,2)?>
  </select>  </td>
</tr>
<tr bgcolor="white">
  <td bgcolor="#F1F5F8">��Ŀ���� </td>
  <td><input name="catorder" type="text" id="catorder" value="<?=$maxorder?>" class="txt"></td>
</tr>
<tr bgcolor="white">
  <td bgcolor="#F1F5F8">����ģ�ͣ� </td>
  <td><select name="modid"><?php echo info_typemodels(); ?></select> [<a href="info_type.php?part=mod">ģ�͹���</a>]</td>
</tr>
<tr bgcolor="white">
  <td bgcolor="#F1F5F8">�Ƿ����ã� </td>
  <td><select name="isview">
      <?=get_ifview_options()?>
      </select></td>
</tr>
<tr bgcolor="white">
  <td width="15%" bgcolor="#F1F5F8">�Ƿ���ͼƬ�ϴ�ģ�飺 </td>
  <td>
  <label for="1"><input class="radio" type="radio" value="1" name="if_upimg" checked="checked">����</label> 
  <label for="0"><input class="radio" type="radio" value="0" name="if_upimg">�ر�</label></td>
</tr>
<tr bgcolor="white">
  <td width="15%" bgcolor="#F1F5F8">�Ƿ�����ͼ��ע�� </td>
  <td>
  <label for="1"><input class="radio" type="radio" value="1" name="if_mappoint">����</label> 
  <label for="0"><input class="radio" type="radio" value="0" name="if_mappoint" checked="checked">�ر�</label></td>
</tr>
<tr bgcolor="white">
  <td bgcolor="#F1F5F8">Ŀ¼�����ʽ��<br /><i style="color:#666">���ɾ�̬Ŀ¼ʱ��Ч</i> </td>
  <td><?=GetHtmlType('2','dir_type','add')?></td>
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
  <td bgcolor="#F1F5F8" width="15%">��Ŀ�б�ʹ��ģ�壺 </td>
  <td width="300">
  /template/default/ <input name="template" class="text" style="width:100px;" id="jstemplate" value="list"> .html <br />
  </td>
  <td><?php foreach($category_tpl as $k => $v){?>
   <a href="###" title="���ʹ��<?=$v?>" onclick="insertunit('<?=$k?>')" class="temp"><?=$v?><br />��<?=$k?>��</a>
   <?php if($k == 'category') echo '<div class=clear></div>'?>
  	 <?php }?>
	</td>
</tr>
<tr bgcolor="white">
  <td bgcolor="#F1F5F8">��Ŀ��Ϣ��ϸҳʹ��ģ�壺</td>
  <td>/template/default/ <input name="template_info" class="text" style="width:100px;" id="jstemplate2" value="info"> .html </td>
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
  <td bgcolor="#F1F5F8" width="15%">�鿴��������Ŀ�µ���Ϣ��ϵ��ʽ�۳��������</td>
  <td>
  <input name="usecoin" class="txt" id="usecoin" value="0"> <img src="../member/images/mymps_icon_incomes.gif" align="absmiddle"> <font color="red">����д������</font> <font style="color:#777; margin-left:10px;"><br>��д<font color="red">0</font>ʱ����ʾ��ϵ��ʽ��ȫ����<br>��д<font color="red">-1</font>ʱ����ʾ��ϵ��ʽֻ�Ե�¼�Ļ�Ա����<br>��д<font color="red">����0������</font>ʱ����ʾ�鿴��ϵ��ʽ��۳���Ա����Ӧ���</font>
  </td>
</tr>
</tbody>
</table>
</div>
<center>
<input type="submit" value="ȷ���ύ" name="<?php echo CURSCRIPT; ?>_submit" class="mymps large" />��
<input type="button" onClick=history.back() value="�� ��" class="gray large">
</center>
</form>
<?php mymps_admin_tpl_global_foot();?>