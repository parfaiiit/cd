<?php include mymps_tpl('inc_head');?>
<form name="form_mymps" action="?part=list" method="post">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
    <tr class="firstr">
      <td width="40">���</td>
      <td>��������</td>
      <td width="80">��������</td>
      <td>����</td>
    </tr>

<?php 
foreach($corp AS $corp)
{
?>
	  <tr <?php if($corp[level] == 0){?>bgcolor="#f5fbff" <?}else{?>  bgcolor="#ffffff" <?}?>>
	  <td width="40"><label><?=$corp[corpid]?></label></td>
	  <td width="60%" align="left">
      <li style="margin-left:<?=$corp[level]?>em;" <?php if($corp['parentid'] != '0') echo 'class="son"'?>><a href="../corporation.php?catid=<?=$corp[corpid]?>" <?php if($corp[level] == 0){?>style="font-weight:bold" <?}?> target="_blank"><?=$corp[corpname]?></a></li></td>
      <td width="40"><input name="corporder[<?=$corp[corpid]?>]" value="<?=$corp[corporder]?>" class="txt" type="text"/></td>
	  <td><a href="corp.php?part=edit&corpid=<?=$corp[corpid]?>">�༭</a> / <a href="corp.php?part=del&corpid=<?=$corp[corpid]?>" onClick="if(!confirm('ȷ��Ҫɾ�����̼ҷ�����\n\n�ò�����ɾ���������̼ҷ�����ӷ��࣡'))return false;">ɾ��</a></td>
	</tr>
<?
} 
?>
</table>
</div>
<center><input name="<?php echo CURSCRIPT; ?>_submit" type="submit" value="�ύ" class="mymps large"/></center>
</form>
<?php mymps_admin_tpl_global_foot();?>