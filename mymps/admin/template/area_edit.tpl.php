<?php include mymps_tpl('inc_head');?>
<script language=javascript>
function chkform(){
	if(document.form.areaname.value==""){
		alert('������������ƣ�');
		document.form.areaname.focus();
		return false;
	}
}
</script>
<form method=post onSubmit="return chkform()" name="form" action="?part=edit">
<div id="<?=MPS_SOFTNAME?>">
<table width="100%"  border="0" cellspacing="0" cellpadding="0" class="vbm">
<input name="part" value="update" type="hidden">
<input type="hidden" name="areaid" value="<?=$area[areaid]?>">
<tr bgcolor="#f5fbff">
  <td>��������</td>
  <td> 
  <input name="areaname" class="text" type="text" id="areaname" value="<?=$area[areaname]?>" size="30">
   <font color="red">*</font></td>
</tr>
<tr bgcolor="#f5fbff">
  <td>��������</td>
  <td><select name="parentid" id="parentid" >
    	<option value="0">��Ϊ������...</option>
  </select>
  </td>
</tr>
<tr bgcolor="#f5fbff">
  <td>��������</td>
  <td><input name="areaorder" class="text" type="text" id="areaorder" value="<?=$area[areaorder]?>" size="30"></td>
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