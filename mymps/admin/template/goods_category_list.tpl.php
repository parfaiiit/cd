<?php include mymps_tpl('inc_head');?>
<div id="<?=MPS_SOFTNAME?>" style=" padding-bottom:0">
    <div class="mpstopic-category">
        <div class="panel-tab">
            <ul class="clearfix tab-list">
                <li><a href="?part=list" class="current">��Ʒ����</a></li>
                <li><a href="?part=add">���ӷ���</a></li>
            </ul>
        </div>
    </div>
</div>
<form name="form_mymps" action="?part=list" method="post">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
    <tr class="firstr">
      <td>���</td>
      <td width="40">����?</td>
      <td>��������</td>
      <td width="80">����˳��</td>
      <td>����</td>
      <td>&nbsp;</td>
    </tr>
<?php
foreach($f_cat AS $cat)
{
?>
  <tr <?php if($cat['level'] == 0){?>bgcolor="#f5fbff" <?}else{?>  bgcolor="#ffffff" <?}?>>
  <td width="40"><?=$cat[catid]?></td>
  <td><input class="checkbox" name="if_viewids[]" value="<?=$cat[catid]?>" type="checkbox" <?if ($cat[if_view] == 2) echo 'checked';?> /></td>
  <td><li style="margin-left:<?=$cat['level']?>em!important; color:<?=$cat['color']?>" <?php if($cat['parentid'] != '0') echo 'class="son"'?>><a href="../goods.php?catid=<?=$cat[catid]?> "<?php if($cat['level'] == 0){?>style="font-weight:bold" <?}?> target="_blank"><?=$cat[catname]?></a></li></td>
  <td width="80"><input name="catorder[<?=$cat[catid]?>]" value="<?=$cat[catorder]?>" class="txt" type="text"/></td>
  <td><a href="goods_category.php?part=edit&catid=<?=$cat[catid]?>">�༭</a> / <a href="goods_category.php?part=del&catid=<?=$cat[catid]?>" onClick="if(!confirm('ȷ��Ҫɾ��������\n\n�ò�����ɾ�������÷�����ӷ����Լ���Ʒ��'))return false;">ɾ��</a>      </td>
  <td width="30">&nbsp;<?php if($cat['level'] == 0){?><a onclick="window.scrollTo(0,0);" style="cursor:pointer" title="��ҳ�涥��">TOP</a><?}?></td>
</tr>
<?}?>
</table>
</div>
<center><input name="<?php echo CURSCRIPT; ?>_submit" type="submit" value="�ύ" class="mymps large"/></center>
</form>
<?php mymps_admin_tpl_global_foot();?>