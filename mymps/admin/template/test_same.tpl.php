<?php include mymps_tpl('inc_head');?>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
<form name="form1" action="test_same.php?" method="get" target='stafrm'>
<input name="part" value="do_list" type="hidden">
  <tr class="firstr">
  	<td colspan="2">�����ظ��ķ�����Ϣ����</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8; width:100px">ɾ��ѡ��:</td>
    <td>&nbsp;<select name="deltype">
    <option value="delold">���������һ��</option>
    <option value="delnew" selected="selected">���������һ��</option>
    </select></td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8">ÿ���г���¼:</td>
    <td>&nbsp;<input name="pagesize" type="text" class="txt" value="100">��</td>
  </tr>
 <tr bgcolor="#ffffff">
 	<td>&nbsp;</td>
    <td colspan="2">&nbsp;<input name="test_same_submit" type="submit" value="�����ظ�����Ϣ����" class="gray mini"></td>
  </tr>
</form>
<?php include mymps_tpl('html_runbox');?>
</table>
</div>
<div class="clear"></div>
<?php mymps_admin_tpl_global_foot();?>