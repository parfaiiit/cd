<?php mymps_admin_tpl_global_head(); ?>
<div id="<?=MPS_SOFTNAME?>" style="padding-bottom:0">
	<div class="mpstopic-category">
		<div class="panel-tab">
			<ul class="clearfix tab-list">
				<li><a href="?do=group" <?php if($part == 'list'){?>class="current"<?php }?>>�û���</a></li>
				<li><a href="?do=group&part=add" <?php if($part == 'add'){?>class="current"<?php }?>>�����û���</a></li>
			</ul>
		</div>
	</div>
</div>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
    <tr class="firstr">
      <td width="60">����</td>
      <td width="80">������</td>
      <td width="80">����</td>
      <td>����</td>
    </tr>
<?
foreach($group AS $row)
{
?>
    <tr bgcolor="#f5fbff">
      <td height="24"> 
        <?=$row[id]?>
      </td>
      <td height="24">
      	<?=$row[typename]?>
      </td>
      <td height="24">
      	<?if($row[ifsystem]=="1"){echo "<font color=red>ϵͳ��</font>";}else{echo "<font color=green>�Զ�����</font>";}?>
      </td>
      <td>
        <a href='admin.php?do=group&part=edit&id=<?=$row[id]?>'>Ȩ���趨</a> / 
      	<a href='admin.php?do=user&typeid=<?=$row[id]?>'>���û�</a>
      <?php if($row[ifsystem]!="1"){ ?> / <a href='admin.php?do=group&part=delete&id=<?=$row[id]?>' onClick="return confirm('��ȷ��Ҫɾ�����û������粻ȷ�����ȡ��')">ɾ����</a><?php } ?>
      </td>
    </tr>
<?
}
?>
</table>
</div>
<?php mymps_admin_tpl_global_foot();?>