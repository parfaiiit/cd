<?php include mymps_tpl('inc_head');?>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
  <tr class="firstr">
  	<td colspan="2">������ʾ</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td id="menu_tip">
		<li>
	    ���ݱ��Ż�����ȥ�������ļ��е���Ƭ��ʹ��¼���н��ܣ���߶�д�ٶȡ�</li>
    </td>
  </tr>
</table>
</div>
<div id="<?=MPS_SOFTNAME?>" style="padding-bottom:0">
<div class="mpstopic-category">
	<div class="panel-tab">
		<ul class="clearfix tab-list">
			<li><a href="?part=optimize" <?php if($part == 'optimize'){?>class="current"<?php }?>>���ݿ��Ż�</a></li>
			<li><a href="?part=check" <?php if($part == 'check'){?>class="current"<?php }?>>���ݿ���</a></li>
			<li><a href="?part=repair" <?php if($part == 'repair'){?>class="current"<?php }?>>���ݿ��޸�</a></li>
			<li><a href="data_replace.php">���ݿ������滻</a></li>
		</ul>
	</div>
</div>
</div>
<form action="?part=optimize" method="post">
<input name="action" value="do_action" type="hidden" />
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
<tr class="firstr">
  <td><label for="chkall"><input name="chkall" id="chkall" class="checkbox" onclick="checkAll('prefix', this.form)" checked="checked" type="checkbox" />�Ż�?</label></td><td>���ݱ�</td><td>����</td><td>��¼��</td><td>����</td><td>����</td><td>��Ƭ</td></tr>
<?php
foreach($tablearray as $tp) {
    $query = $db->query("SHOW TABLE STATUS LIKE '$tp%'", 'SILENT');
    while($table = $db->fetchRow($query)) {
        if($table['Data_free'] && $table[$tabletype] == 'MyISAM') {
            $checked = $table[$tabletype] == 'MyISAM' ? 'checked' : 'disabled';
?>
<tr bgcolor="#ffffff"><td><input class="checkbox" type="checkbox" name="optimizetables[]" value="<?=$table[Name]?>" <?=$checked?>></td><td><?=$table[Name]?></td><td><?=$table[$tabletype]?></td><td><?=$table[Rows]?></td><td><?=$table[Data_length]?></td><td><?=$table[Index_length]?></td><td><?=$table[Data_free]?></td></tr>
<?php
            $totalsize += $table['Data_length'] + $table['Index_length'];
        }
    }
}

if(!empty($totalsize)){
?>
<tr bgcolor="#ffffff">
	<td colspan="7"><?=sizecount($totalsize)?></td>
</tr>
</table>
</div>

<center><input type="submit" name="optimize_submit" value="�� ��" class="mymps large" <?php if(empty($totalsize)) echo 'disabled'; ?>/></center>
<?php } else {?>
<tr bgcolor="#ffffff">
<td colspan="7" bgcolor="#ffffff"><div class="nodata">���ݱ�û����Ƭ������Ҫ���Ż���</div></td>
</tr>
</table>
</div>
<?}?>
</form>
<?php mymps_admin_tpl_global_foot();?>