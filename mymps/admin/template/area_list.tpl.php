<?php include mymps_tpl('inc_head');?>
<form name="form_mymps" action="?part=list" method="post">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
    <tr class="firstr">
      <td width="40">���</td>
      <td>����</td>
      <td width="80">��������</td>
      <td>����</td>
    </tr>

<?php 
foreach($area AS $area)
{
?>
	  <tr <?php if($area[level] == 0){?>bgcolor="#f5fbff" <?}else{?>  bgcolor="#ffffff" <?}?>>
	  <td width="40"><label><?=$area[areaid]?></label></td>
	  <td width="60%" align="left">
      <li style="margin-left:<?=$area[level]?>em;" <?php if($area['parentid'] != '0') echo 'class="son"'?>><input name="areaorder[<?=$area[areaid]?>][areaname]" value="<?=$area[areaname]?>" class="text"></li></td>
      <td width="40"><input name="areaorder[<?=$area[areaid]?>][areaorder]" value="<?=$area[areaorder]?>" class="txt" type="text"/></td>
	  <td><a href="area.php?part=edit&areaid=<?=$area[areaid]?>">�༭</a> / <a href="area.php?part=del&areaid=<?=$area[areaid]?>" onClick="if(!confirm('ȷ��Ҫɾ����\n\n�ò�����ͬʱɾ�������õ���������ӷ��࣡'))return false;">ɾ��</a></td>
	</tr>
<?
} 
?>
</table>
</div>
<center><input name="<?php echo CURSCRIPT; ?>_submit" type="submit" value="�ύ" class="mymps large"/></center>
</form>
<?php mymps_admin_tpl_global_foot();?>