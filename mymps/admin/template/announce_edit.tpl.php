<?php include mymps_tpl('inc_head_jq');?>
<script type="text/javascript" src="../include/colorpicker/jquery.colorpicker.js"></script>
<script language='javascript'>
function CheckSubmit()
{
	if(document.form1.title.value=="")
	{
   		document.form1.title.focus();
   		alert("����д������⣡");
   		return false;
	}
	if(document.form1.author.value=="")
	{
   		document.form1.author.focus();
   		alert("����д���ߣ�");
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
<form method=post  name="form1" action="announce.php?part=edit" onSubmit="return CheckSubmit();">
<input name="id" value="<?=$edit[id]?>" type="hidden" />
<input name="action" value="dopost" type="hidden" />
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">

<tr class="firstr">
<td colspan="2"><b>�༭��վ����</b></td>
</tr>
<tr bgcolor="#f5fbff" >
  <td width="12%" align="right">������⣺ </td>
  <td colspan="3"> <input name="title" class="text" type="text" value="<?=$edit[title]?>" size="50"> 
  <font color="red">*</font></td>
</tr>
<tr  bgcolor="#f5fbff">
<td width="12%" align="right">������ɫ��</td>
<td colspan="3"><input id="cp1" name="titlecolor" class="text" style="width:60px" value="<?=$edit[titlecolor]?>"></td>
</tr>
<script type="text/javascript">
 $(function() {
      
        $("#cp1").colorpicker({
            fillcolor: true
        });
        
    });
</script>
<tr bgcolor="#f5fbff" >
  <td width="12%" align="right">��ʼʱ�䣺</td>
  <td><input name="begintime" class="text" type="text" value="<?=GetTime($edit[begintime])?>"/> �޿�ʼʱ�������գ����ڸ�ʽ�磺2011-08-08��</td>
</tr>
<tr bgcolor="#f5fbff" >
  <td width="12%" align="right">��ֹʱ�䣺</td>
  <td><input name="endtime" class="text" type="text" value="<?=GetTime($edit[endtime])?>"/> �޽�ֹʱ�������գ����ڸ�ʽ�磺2011-08-08��</td>
</tr>
<tr bgcolor="#f5fbff" >
  <td width="12%" align="right">��ת��ַ��</td>
  <td>
    <input name="redirecturl" class="text" type="text" value="<?=$edit[redirecturl]?>" size="50"> ����д�˴˴������²���������д
  </td>
</tr>
<tr bgcolor="#f5fbff" >
  <td width="12%" align="right">���ߣ�</td>
  <td><input name="author" class="text" type="text" style="width:100px" value="<?=$edit[author]?>"><font color="red">*</font></td>
</tr>
</table>
<div style="margin-top:3px;">
<?php echo $acontent?>
</div>
</div>
<center><input type="submit" value="�� ��" class="mymps large"/></center>
</form>
<?php mymps_admin_tpl_global_foot();?>