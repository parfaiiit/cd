<?php include mymps_tpl('inc_head');
$admindir = getcwdOL();
?>
<script type="text/javascript" src="../template/global/messagebox.js"></script>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
  <tr class="firstr">
  	<td colspan="2">����ָ���û����ĵ�¼��־</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td>
<form action="?" name="form1" method="get">
     	<input name="keywords" class="text" value="<?=$keywords?>">
        <input name="do" value="<?=$do?>" type="hidden">
        <input name="part" value="login" type="hidden">
        <input type="submit" value="�� ��" class="gray mini">&nbsp;&nbsp;
		<input type="button" value="ֻ������������µļ�¼" class="mymps mini" onclick="location.href='?do=member&part=login&action=savemonth'">&nbsp;&nbsp;  
		<input type="button" value="������excel" class="mymps mini" onclick="location.href='record.php?do=member&part=login&action=doexcel';">
     </form>
    </td>
  </tr>
</table>
</div>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
  <form name='form1' method='post' action='?do=<?=$do?>&part=<?=$part?>' onSubmit='return checkSubmit();'>
    <input type='hidden' name='action' value='delall'/>
    <input name="url" type="hidden" value="<?=GetUrl()?>">
    <tr class="firstr">
    <td width="30">ѡ��</td>
    <td align="center">�û���</td>
    <td align="center">IP��ַ</td>
	<td align="center">����λ��</td>
	<td align="center">�˿�</td>
	<td align="center">�����</td>
	<td align="center">����ϵͳ</td>
    <td align="center">��¼ʱ��</td>
	<td align="center">����ʱ��</td>
    </tr>
  	<tbody onmouseover="addMouseEvent(this);">
    <?
foreach($record AS $k)
{
?>
    <tr align="center" bgcolor="white">
    <td><input type='checkbox' class="checkbox" name='id[]' value='<?=$k[id]?>' id="<?=$k[id]?>"></td>
    <td><a href="javascript:
setbg('<?=MPS_SOFTNAME?>��Ա����',400,110,'../box.php?part=member&userid=<?=$k[userid]?>&admindir=<?=$admindir?>')"><?=$k[userid]?></a></td>
    <td><?=$k[ip]?></td>
	<td><?=$k[ip2area]?></td>
	<td><?=$k[port]?></td>
	<td><?=$k[browser]?></td>
	<td><?=$k[os]?></td>
    <td><em><?=$k[pubdate]?></em></td>
	<td><em><?=$k[outdate]?></em></td>
  </tr>
    <?
}
?>	</tbody>
    <tr bgcolor="#ffffff" height="28">
    <td align="center" style="border-right:1px #fff solid;"><input name="checkall" type="checkbox" class="checkbox" id="checkall" onClick="CheckAll(this.form)"/></td>
    <td colspan="10"><input type="submit" onClick="if(!confirm('ȷ��Ҫ������\n\n�˲��������Իָ���'))return false;" value="����ɾ��" class="mymps mini" <?php if($do == 'admin'){echo "disabled";}?>/>  
    </td>
    </tr>
    </form>
</table>
</div>
<div class="pagination"><?echo page2()?></div>
<?php mymps_admin_tpl_global_foot();?>