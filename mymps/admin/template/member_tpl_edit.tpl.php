<?php include mymps_tpl('inc_head');?>
<script language=javascript>
function chkform(){
	if(document.form1.tpl_name.value==""){
		alert('������ģ�����ƣ�');
		document.form1.tpl_name.focus();
		return false;
	}
	if(document.form1.tpl_path.value==""){
		alert('������ģ��·����');
		document.form1.tpl_path.focus();
		return false;
	}
}
</script>
<div id="<?=MPS_SOFTNAME?>" style="padding-bottom:0">
	<div class="mpstopic-category">
		<div class="panel-tab">
			<ul class="clearfix tab-list">
				<li><a href="member_tpl.php" class="current">�ռ�ģ��</a></li>
				<li><a href="member_comment.php">�ռ����</a></li>
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
  <li>����״̬������Ϊ����ʱ������Ϊһ�����ӷ������棬����������õ�ʱ������</li>
    </td>
  </tr>
</table>
</div>
<form method=post onSubmit="return chkform()" name="form1" action="?part=edit">
<input name="id" value="<?=$edit[id]?>" type="hidden">
<div id="<?=MPS_SOFTNAME?>">
<table width="100%"  border="0" cellspacing="0" cellpadding="0" class="vbm">
<tr class="firstr">
<td colspan="2"><a href="javascript:collapse_change('1')">����������Ϣ</a>
</td>
</tr>
<tr bgcolor="#f5fbff">
  <td width="15%">ģ�����ƣ� </td>
  <td><input name="tpl_name" type="text" class="text" id="title" value="<?=$edit[tpl_name]?>" size="30"> 
  		<font color="red">*</font></td>
</tr>
<tr bgcolor="#f5fbff">
  <td width="15%">ģ��·��/��ʶ�� </td>
  <td><input name="tpl_path" type="text" class="text" id="title" value="<?=$edit[tpl_path]?>" size="30">
  		<font color="red">*</font></td>
</tr>
<tr bgcolor="#f5fbff">
  <td>�Ƿ����ã� </td>
  <td><select name="isview">
    <?=get_ifview_options($edit[if_view])?>
    </select>  </td>
</tr>
<tr bgcolor="#f5fbff">
  <td>�������� </td>
  <td><input name="displayorder" type="text" class="txt" value="<?=$edit[displayorder]?>" size="13"></td>
</tr>
</table>
</div>
<center>
<input type="submit" name="<?php echo CURSCRIPT; ?>_submit" value="�����޸�" class="mymps mini" />��
<input type="button" onclick="location.href='?'" value="�� ��" class="mymps mini">
</center>
</form>
<?php mymps_admin_tpl_global_foot();?>