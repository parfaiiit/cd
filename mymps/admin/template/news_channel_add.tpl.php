<?php include mymps_tpl('inc_head');?>
<script language=javascript>
function chkform(){
	if(document.form1.catname.value==""){
		alert('��������Ŀ���⣡');
		document.form1.catname.focus();
		return false;
	}
}
</script>
<div id="<?=MPS_SOFTNAME?>" style=" padding-bottom:0">
    <div class="mpstopic-category">
        <div class="panel-tab">
            <ul class="clearfix tab-list">
                <li><a title="����ӵ��������" href="channel.php" <?php if($part == 'list'){?>class="current"<?php }?>>����ӵ��������</a></li>
                <li><a title="�����������" href="channel.php?part=add" <?php if($part == 'add'){?>class="current"<?php }?>>�����������</a></li>
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
  <li>��Ŀ������Ϊ����ʱ������Ϊһ�����෽�����棬����������õ�ʱ������</li>
    </td>
  </tr>
</table>
</div>
<form method=post onSubmit="return chkform()" name="form1" action="?part=add">
<div id="<?=MPS_SOFTNAME?>">
<table width="100%"  border="0" cellspacing="0" cellpadding="0" class="vbm">
<tr class="firstr">
<td colspan="2">
��Ŀ������Ϣ
</td>
</tr>
<tbody id="menu_1">
<tr bgcolor="#f5fbff">
  <td width="15%">��Ŀ���ƣ� </td>
  <td><textarea rows="5" name="catname" cols="50"></textarea><br />
<div style="margin-top:3px">֧�����ŷ���������ӣ���������� | ���� <br />
<font color="red">����������1|����2|����3|����4|����5</font></div></td>
</tr>
<tr bgcolor="#f5fbff">
  <td>������Ŀ�� </td>
  <td><select name="parentid" id="parentid" >
    <option value="0">��Ϊ����Ŀ...</option>
<?php echo cat_list('channel');?>
  </select>  </td>
</tr>
<tr bgcolor="#f5fbff">
  <td>��Ŀ���� </td>
  <td><input name="catorder" type="text" class="txt" id="catorder" value="<?=$maxorder?>" size="13"></td>
</tr>
<tr bgcolor="#f5fbff">
  <td>�Ƿ����ã� </td>
  <td><select name="isview">
      <?=get_ifview_options($cat[if_view])?>
      </select></td>
</tr>
<tr bgcolor="#f5fbff">
  <td>Ŀ¼�����ʽ��<br /><i style="color:#666">���ɾ�̬Ŀ¼ʱ��Ч</i> </td>
  <td><?=GetHtmlType('3','dir_type','add')?></td>
</tr>
</tbody>
</table>
</div>
<center>
<input type="submit" value="ȷ���ύ" name="<?=CURSCRIPT?>_submit" class="mymps mini" />��
<input type="button" onClick=history.back() value="�� ��" class="mymps mini">
</center>
</form>
<?php mymps_admin_tpl_global_foot();?>