<?php include mymps_tpl('inc_head');?>
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
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
    <tr class="firstr">
    <td align="center">��¼ID</td>
    <td width="100" align="center">����</td>
    <td width="100" align="center">����</td>
    <td width="110" align="center">�û���</td>
    <td align="center">�ϴε�½</td>
    <td align="center">������</td>
  </tr>
    <?
foreach($admin AS $row)
{
?>
    <tr align="center" bgcolor="white">
    <td><?=$row[userid]?></td>
    <td><?=$row[uname]?></td>
    <td>&nbsp;<?=$row[tname]?></td>
    <td ><?=$row[typename]?></td>
    <td><em>ʱ�䣺<?=GetTime($row[logintime])?>��IP��<?=$row[loginip]?></em></td>
    <td>
	  <a href='admin.php?do=user&part=edit&id=<?=$row[id]?>'><u>����</u></a> |
     <a href='admin.php?do=user&part=delete&id=<?=$row[id]?>' onClick="return confirm('��ȷ��Ҫɾ���ù���Ա���粻ȷ�����ȡ��')"><u>ɾ��</u></a>��
    </td>
  </tr>

    <?
}
?>
</table>
</div>
<?php mymps_admin_tpl_global_foot();?>