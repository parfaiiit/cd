<?php include mymps_tpl('inc_head');?>
<script language='javascript'>
	function checkSubmit()
  {
     if(document.form1.userid.value==""){
	     alert("�û�ID����Ϊ�գ�");
	     document.form1.userid.focus();
	     return false;
     }
     if(document.form1.uname.value==""){
	     alert("�û�������Ϊ�գ�");
	     document.form1.uname.focus();
	     return false;
     }
     if(document.form1.pwd.value==""){
	     alert("�û����벻��Ϊ�գ�");
	     document.form1.pwd.focus();
	     return false;
     }
     return true;
 }
</script>
<div id="<?=MPS_SOFTNAME?>" style="padding-bottom:0">
	<div class="mpstopic-category">
		<div class="panel-tab">
			<ul class="clearfix tab-list">
				<li><a href="?do=user" <?php if($part == 'list'){?>class="current"<?php }?>>�û��б�</a></li>
				<li><a href="?do=user&part=add" <?php if($part == 'add'){?>class="current"<?php }?>>�����û�</a></li>
			</ul>
		</div>
	</div>
</div>
<form name="form1" action="?do=user&part=insert" onSubmit="return checkSubmit();" method="post">
<div id="<?=MPS_SOFTNAME?>">
<table width="100%"  border="0" cellspacing="0" cellpadding="0" class="vbm">
	  <tr bgcolor="#f5fbff" >
            <td width="16%" height="30">�û���¼ID��</td>
            <td width="84%"><input name="userid" class="text" type="text" id="userid" size="16" style="width:200px" />
              ��ֻ����'0-9'��'a-z'��'A-Z'��'.'��'@'��'_'��'-'��'!'���ڷ�Χ���ַ���</td>
          </tr>
	  <tr bgcolor="#f5fbff" >
            <td height="30">�û�������</td>
            <td><input name="uname" class="text" type="text" id="uname" size="16" style="width:200px" /> &nbsp;���������º���ʾ���α༭�����֣�</td>
          </tr>
	  <tr bgcolor="#f5fbff" >
            <td height="30">�û����룺</td>
            <td><input name="pwd" type="password" id="pwd" size="16" style="width:200px" class="text"/> &nbsp;��ֻ����'0-9'��'a-z'��'A-Z'��'.'��'@'��'_'��'-'��'!'���ڷ�Χ���ַ���</td>
          </tr>
	  <tr bgcolor="#f5fbff" >
            <td height="30">�û��飺</td>
            <td>
			  <select name='typeid' style='width:200px'>
				<?php echo get_admin_group();?>
			  </select>
			    &nbsp;
			    ��<a href='admin.php?do=group'><u>�û����趨</u></a>��
            </td>
          </tr>
	  <tr bgcolor="#f5fbff" >
            <td height="30">��ʵ������</td>
            <td><input name="tname" class="text" type="text" id="tname" size="16" style="width:200px" /> &nbsp;</td>
          </tr>
	  <tr bgcolor="#f5fbff" >
            <td height="30">�������䣺</td>
            <td><input name="email" class="text" type="text" id="email" size="16" style="width:200px" /> &nbsp;</td>
          </tr>
       </table>
</div>
<center><input type="submit" name="Submit" value="�� ��" class="mymps large" />
            ��<input type="button" onClick=history.back() value="�� ��" class="gray large"></center>
</form>
<?php mymps_admin_tpl_global_foot();?>