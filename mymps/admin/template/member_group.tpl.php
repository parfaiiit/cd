<?php include mymps_tpl('inc_head');?>
<div id="<?=MPS_SOFTNAME?>" style="padding-bottom:0">
	<div class="mpstopic-category">
		<div class="panel-tab">
			<ul class="clearfix tab-list">
				<li><a href="?do=group" <?php if($part == 'list'){?>class="current"<?php }?>>��Ա������</a></li>
				<li><a href="?do=group&part=add" <?php if($part == 'add'){?>class="current"<?php }?>>���ӻ�Ա��</a></li>
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
    <tr align="center" bgcolor="#f5fbff">
      <td> 
        <?=$row[id]?>
      </td>
      <td>
      	<?=$row[levelname]?>
      </td>
      <td>
      	<?if($row[ifsystem] == "1"){echo"<font color=red>ϵͳ��</font>";}else{echo "<font color=green>�Զ�����</font>";}?>
      </td>
      <td>
        <a href='member.php?do=group&part=edit&id=<?=$row[id]?>'>�༭</a> / 
      	<a href='member.php?do=member&levelid=<?=$row[id]?>'>���û�</a>
      <?php if($row[ifsystem]!=1){ ?> / <a href='?do=group&part=delete&id=<?=$row[id]?>' onClick="return confirm('��ȷ��Ҫɾ�����û������粻ȷ�����ȡ��')">ɾ����</a><?php } ?>
      </td>
    </tr>
<?
}
?>
</table>
</div>
<form action="member.php?part=levelup" method="post">
<div id="<?=MPS_SOFTNAME?>" style="margin-top:10px; clear:both">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
<tr class="firstr">
<td colspan="2">��Ա��������ҳ����ʾ��Ϣ</td>
</tr>
  <tr bgcolor="#f5fbff">
    <td width="12%" height="25">��ʾ���ݣ�</td>
    <td>
   	<textarea name="levelup_notice" style="width:250px; height:120px"><?php echo $levelup_notice; ?></textarea>
    </td>
  </tr>
</table>
</div>
<center><input type="submit" name="member_submit" value="�� ��" class="mymps large"/></center>
  </form>
<?php mymps_admin_tpl_global_foot();?>