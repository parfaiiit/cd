<?php include mymps_tpl('inc_head');?>
<script language='javascript'>
function CheckSubmit()
{
	if(document.form1.typeid.value=="")
	{
   		document.form1.typeid.focus();
   		alert("��ѡ��������࣡");
   		return false;
	}
	if(document.form1.title.value=="")
	{
   		document.form1.title.focus();
   		alert("����д������⣡");
   		return false;
	}

	if(document.form1.content.value=="")
	{
   		document.form1.content.focus();
   		alert("����д�������ݣ�");
   		return false;
	}

	return true;
}
</script>
<form method=post  name="form1" action="faq.php?part=insert" onSubmit="return CheckSubmit();">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
<tr bgcolor="#f5fbff" >
  <td width="12%" align="right">������� </td>
  <td colspan="3">
  <select name="typeid">
  	<?php foreach($faq_type as $k){?>
    <option value="<?=$k[id]?>"><?=$k[typename]?></option>
    <?}?>
  </select> <font color="red">*</font></td>
</tr>
<tr bgcolor="#f5fbff" >
  <td width="12%" align="right">������⣺ </td>
  <td colspan="3"> <input name="title" type="text" class="text" value="" size="50"> <font color="red">*</font></td>
</tr>
</table>
<div style="margin-top:3px;">
<?php echo $acontent?>
</div>
</div>
<center><input type="submit" value="�� ��" class="mymps large"/></center>
</form>
<?php mymps_admin_tpl_global_foot();?>