<?php include mymps_tpl('inc_head');?>
<script language=javascript>
function chkform(){
	if(document.form1.catname.value==""){
		alert('�����������⣡');
		document.form1.catname.focus();
		return false;
	}
	if(document.form1.cat.value==""){
		alert('��ѡ����࣡');
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
	$('jstemplate').focus();
	$('jstemplate').value=text;
}
</script>
<div id="<?=MPS_SOFTNAME?>" style=" padding-bottom:0">
    <div class="mpstopic-category">
        <div class="panel-tab">
            <ul class="clearfix tab-list">
                <li><a href="?part=list">��Ʒ����</a></li>
                <li><a href="?part=add">���ӷ���</a></li>
			    <li><a href="?part=edit&catid=<?=$catid?>" class="current">�༭����</a></li>
            </ul>
        </div>
    </div>
</div>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
  <tr class="firstr">
  	<td colspan="2">������ʾ</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td id="menu_tip">
  <li>���಻����Ϊ����ʱ������Ϊһ�����෽�����棬����������õ�ʱ������</li>
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
    <div class="left"><a href="javascript:collapse_change('1')">���������Ϣ</a></div>
    <div class="right"><a href="javascript:collapse_change('1')"><img id="menuimg_1" src="template/images/menu_reduce.gif"/></a></div>
</td>
</tr>
<tbody id="menu_1">
<tr bgcolor="white">
  <td width="15%" bgcolor="#F1F5F8">�������ƣ� </td>
  <td><input name="catname" type="text" class="text" id="catname" value="<?=$cat[catname]?>" size="30"> 
  		<select name="fontcolor">
          <option value="">Ĭ����ɫ</option>
          <?foreach ($cat_color as $k){?>
          <option value="<?=$k?>" style="background-color:<?=$k?>;" <?if($cat[color] == $k) echo 'selected';?>></option>
          <?}?>
        </select>
  		<font color="red">*</font></td>
</tr>
<tr bgcolor="white">
  <td bgcolor="#F1F5F8">�������ࣺ </td>
  <td><select name="parentid" id="parentid" >
    <option value="0">��Ϊ������...</option>
	<?=goods_cat_list(1,$cat[parentid],true,1)?>
  </select>  </td>
</tr>
<tr bgcolor="white">
  <td bgcolor="#F1F5F8">�������� </td>
  <td><input name="catorder" type="text" class="txt" id="catorder" value="<?=$cat[catorder]?>" size="13"></td>
</tr>
<tr bgcolor="white">
  <td bgcolor="#F1F5F8">�Ƿ����ã� </td>
  <td> <select name="isview">
      <?=get_ifview_options($cat[if_view])?>
      </select></td>
</tr>
</tbody>
</table>
</div>
<div id="<?=MPS_SOFTNAME?>">
<table cellpadding="0" cellspacing="0" class="vbm">
<tr class="firstr">
<td colspan="2">
    <div class="left"><a href="javascript:collapse_change('2')">SEO�Ż�����<font style="color:#FF6600; font-weight:100">(�������������ͬ��
<label for="copy">
���<input name="radio" id="copy" class="radio" type="radio" onClick="do_copy();" />����</label>
)</font></a></div>
    <div class="right"><a href="javascript:collapse_change('2')"><img id="menuimg_2" src="template/images/menu_reduce.gif"/></a></div>
</td>
</tr>
<tbody id="menu_2">
<tr bgcolor="white">
  <td width="15%" bgcolor="#F1F5F8">��ʾ����(title)�� </td>
  <td> <input name="title" type="text" id="title" class="text" value="<?=$cat[title]?>" size="50"> <font color="red">*</font>(<font style="color:#FF6600">�������˶�/����/������Ʒ</font>,������15���ַ�)
  </td>
</tr>
<tr bgcolor="white">
  <td bgcolor="#F1F5F8">�ؼ���(keyword)�� </td>
  <td><input name="keywords" type="text" id="keywords" class="text" value="<?=$cat[keywords]?>" size="50">   (����ؼ�����","����)</td>
</tr>
<tr bgcolor="white">
  <td bgcolor="#F1F5F8">����(description)�� </td>
  <td><textarea name="description" cols="49" rows="5" id="description"><?=$cat[description]?></textarea> (�ʵ����ֹؼ��֣�����������ľ��ӣ�������200�ַ�)</td>
</tr>
</tbody>
</table>
</div>
<center>
<input type="submit" name="<?php echo CURSCRIPT; ?>_submit" value="�����޸�" class="mymps mini" />��
<input type="button" onClick=history.back() value="�� ��" class="mymps mini">
</center>
</form>
<?php mymps_admin_tpl_global_foot();?>