<?php include mymps_tpl('inc_head');?>
<script language=javascript>
function chkform(){
	if(document.form.corpname.value==""){
		alert('������������ƣ�');
		document.form.corpname.focus();
		return false;
	}
}
</script>
<form method=post onSubmit="return chkform()" name="form" action="?part=edit">
<div id="<?=MPS_SOFTNAME?>">
<table width="100%"  border="0" cellspacing="0" cellpadding="0" class="vbm">
<input name="part" value="update" type="hidden">
<input type="hidden" name="corpid" value="<?=$corp[corpid]?>">
<tr bgcolor="#f5fbff">
  <td>�̼ҷ�������</td>
  <td> 
  <input name="corpname" class="text" type="text" id="corpname" value="<?=$corp[corpname]?>" size="30">
   <font color="red">*</font></td>
</tr>
<tr bgcolor="#f5fbff">
  <td>��������</td>
  <td><select name="parentid" id="parentid" >
    	<option value="0">��Ϊ������...</option>
		<?=cat_list('corp',0,$corp[parentid],true,1)?>
  </select>
  </td>
</tr>
<tr bgcolor="#f5fbff">
  <td>��������</td>
  <td><input name="corporder" class="text" type="text" id="corporder" value="<?=$corp[corporder]?>" size="30"></td>
</tr>
</table>
</div>
<center>
<input type="submit" name="<?php echo CURSCRIPT; ?>_submit" value="�ύ����" class="mymps mini"/>
&nbsp;&nbsp;
<input type="button" onClick=history.back() value="�� ��" class="mymps mini">
</center>
</form>
<?php mymps_admin_tpl_global_foot();?>