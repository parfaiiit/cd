<?php include mymps_tpl('inc_head');?>
<script language=javascript>
function chkform(){
	if(document.form.areaname.value==""){
		alert('������������ƣ���������� | ������');
		document.form.areaname.focus();
		return false;
	}
}
</script>
<form method=post onSubmit="return chkform()" name="form" action="?part=add">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
<tr bgcolor="#f5fbff">
  <td >�������ƣ� </td>
  <td>
  <textarea rows="5" name="areaname" cols="50"></textarea><br />
<div style="margin-top:3px">֧�ֵ���������ӣ���������� | ���� <br />
<font color="red">����������1|����2|����3|����4|����5</font></div></td>
</tr>
<tr bgcolor="#f5fbff">
  <td >����ѡ�� </td>
  <td><select name="parentid" id="parentid" >
    <option value="0">��Ϊ������...</option>
	<!--<?=cat_list('area',0,0,true,1)?>-->
  </select>  </td>
</tr>
<tr bgcolor="#f5fbff">
  <td >�������� </td>
  <td><input name="areaorder" class="text" type="text" id="areaorder" value="<?=$maxorder?>" size="14"></td>
</tr>
</table>
</div>
<center>
<input type="submit" name="<?php echo CURSCRIPT; ?>_submit" value="�ύ����" class="mymps mini"/>
&nbsp;&nbsp;
<input type="button" onClick=history.back() value="�� ��" class="mymps mini"></center>
</form>
<?php mymps_admin_tpl_global_foot();?>