<?php include mymps_tpl('inc_head');?>
<script language=javascript>
function chkform(){
	if(document.form1.catname.value==""){
		alert('�����������⣡');
		document.form1.catname.focus();
		return false;
	}
	if(document.form.catname.value.length<2){
		alert('��������������2���ֽ�����!');
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
	$('jstemplate').focus();
	$('jstemplate').value=text;
}
</script>
<div id="<?=MPS_SOFTNAME?>" style=" padding-bottom:0">
    <div class="mpstopic-category">
        <div class="panel-tab">
            <ul class="clearfix tab-list">
                <li><a href="?part=list">��Ʒ����</a></li>
                <li><a href="?part=add" class="current">���ӷ���</a></li>
            </ul>
        </div>
    </div>
</div>
<form method=post onSubmit="return chkform()" name="form1" action="?part=add">
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
  <td><textarea rows="5" name="catname" cols="50"></textarea><br />
<div style="margin-top:3px">֧����Ʒ����������ӣ���������� | ���� <br />
<font color="red">����������1|����2|����3|����4|����5</font></div></td>
</tr>
<tr bgcolor="white">
  <td bgcolor="#F1F5F8">�������ࣺ </td>
  <td><select name="parentid" id="parentid" >
    <option value="0">��Ϊ������...</option>
	<?=goods_cat_list(1,0,true,1)?>
  </select>  </td>
</tr>
<tr bgcolor="white">
  <td bgcolor="#F1F5F8">�������� </td>
  <td><input name="catorder" type="text" id="catorder" value="<?=$maxorder?>" class="txt"></td>
</tr>
<tr bgcolor="white">
  <td bgcolor="#F1F5F8">�Ƿ����ã� </td>
  <td><select name="isview">
      <?=get_ifview_options()?>
      </select></td>
</tr>
</tbody>
</table>
</div>
<center>
<input type="submit" value="ȷ���ύ" name="<?php echo CURSCRIPT; ?>_submit" class="mymps mini" />��
<input type="button" onClick=history.back() value="�� ��" class="mymps mini">
</center>
</form>
<?php mymps_admin_tpl_global_foot();?>