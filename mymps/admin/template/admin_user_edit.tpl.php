<?php include mymps_tpl('inc_head');?>
<script language='javascript'>
	function checkSubmit()
  {
     if(document.form1.uname.value==""){
	     alert("�û�������Ϊ�գ�");
	     document.form1.uname.focus();
	     return false;
     }
     return true;
 }
</script>
<form name="form1" action="?do=user" method="post" onSubmit="return checkSubmit();">
<div id="<?=MPS_SOFTNAME?>">
<table width="100%"  border="0" cellspacing="0" cellpadding="0" class="vbm">
<input type="hidden" name="part" value="update" />
  <input type="hidden" name="id" value="<?=$id?>" />
   	  <tr bgcolor="#f5fbff">
        <td width="16%" height="30">�û���¼ID��</td>
        <td width="84%"><input name="userid" class="text" type="text" id="userid" size="16" value="<?=$admin[userid]?>" style="width:200px" /></td>
    </tr>
    	  <tr bgcolor="#f5fbff">
      <td height="30">�û�������</td>
      <td><input name="uname" class="text" type="text" id="uname" size="16" value="<?=$admin[uname]?>" style="width:200px" />
        &nbsp;���ش���վ����ʱ��ʾ�����֣� </td>
    </tr>
    <tr bgcolor="#f5fbff">
    <td height="30">��ʵ������</td>
    <td><input name="tname" class="text" type="text" id="tname" size="16" style="width:200px" value="<?= $admin[tname]?>" />
    &nbsp;����������ʾ��ֻ���ڷ����̨��¼��ʾ�� </td>
    </tr>
    <tr bgcolor="#f5fbff">
      <td height="30">�û����룺</td>
      <td><input name="pwd" class="text" type="text" id="pwd" size="16" style="width:200px" />
        &nbsp;���������޸ģ�ֻ����'0-9a-zA-Z.@_-!'���ڷ�Χ���ַ��� </td>
    </tr>
<tr bgcolor="#f5fbff">
            <td height="30">�û��飺</td>
            <td>
			    <select name='typeid' style='width:200px'>
                <?php echo get_admin_group($admin[typeid]);?>
			  </select>
			    &nbsp;
			    ��<a href='admin.php?do=group'><u>�û����趨</u></a>��
            </td>
          </tr>
    	  <tr bgcolor="#f5fbff">
      <td height="30">�������䣺</td>
      <td><input name="email" class="text" type="text" id="email" size="16" style="width:200px" value="<?= $admin[email]?>" />
        &nbsp;</td>
    </tr>
</table>
</div>
<center><input type="submit" name="Submit" value="�� ��" class="mymps large" /><input type="button" onClick=history.back() value="�� ��" class="gray large"></center>
</form>
<?php mymps_admin_tpl_global_foot();?>