<?php include mymps_tpl('inc_head');?>
<script language=javascript>
function chkform(){
	if(document.form1.title.value==""){
		alert('���������ӱ��⣡');
		document.form1.title.focus();
		return false;
	}
	if(document.form1.cat.value==""){
		alert('��ѡ�����ӣ�');
		document.form1.cat.focus();
		return false;
	}
}
</script>
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
<input name="id" value="<?=$navurl[id]?>" type="hidden">
<div id="<?=MPS_SOFTNAME?>">
<table width="100%"  border="0" cellspacing="0" cellpadding="0" class="vbm">
<tr class="firstr">
<td colspan="2"><a href="javascript:collapse_change('1')">����������Ϣ</a>
</td>
</tr>
<tr bgcolor="#f5fbff">
  <td width="15%">�������֣� </td>
  <td><input name="title" type="text" class="text" id="title" value="<?=$navurl[title]?>" size="30"> 
  		<select name="showcolor">
          <option value="">Ĭ����ɫ</option>
          <?=get_color_options($navurl[color])?>
        </select>
  		<font color="red">*</font></td>
</tr>
<tr bgcolor="#f5fbff">
  <td width="15%">���ӵ�ַ�� </td>
  <td><input name="url" type="text" class="text" id="title" value="<?=$navurl[url]?>" size="30">
  		<font color="red">*</font></td>
</tr>
<tr bgcolor="#f5fbff">
    <td>�������ͣ� </td>
    <td>
    <select name="typeid">
    <?=get_navtype_options($navurl[typeid])?>
    </select>  
    </td>
</tr>
<tr bgcolor="#f5fbff">
    <td>���ڴ���ʽ�� </td>
    <td>
    <select name="target">
    <?=get_target_options($navurl[target])?>
    </select>  
    </td>
</tr>
<tr bgcolor="#f5fbff">
  <td>�Ƿ����ã� </td>
  <td>     <select name="isview">
    <?=get_ifview_options($navurl[isview])?>
    </select>  </td>
</tr>
<tr bgcolor="#f5fbff">
  <td>�������� </td>
  <td><input name="displayorder" type="text" class="txt" value="<?=$navurl[displayorder]?>" size="13"></td>
</tr>
</table>
</div>
<center>
<input type="submit" name="<?php echo CURSCRIPT; ?>_submit" value="�����޸�" class="mymps mini" />��
<input type="button" onclick="location.href='?'" value="�� ��" class="mymps mini">
</center>
</form>
<?php mymps_admin_tpl_global_foot();?>