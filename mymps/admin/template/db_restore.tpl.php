<?php include mymps_tpl('inc_head');?>
<script type='text/javascript' src='js/vbm.js'></script>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
  <tr class="firstr">
  	<td colspan="2">������ʾ</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td id="menu_tip">
<li>�ָ��������ݵ�ͬʱ������ԭ�����ݣ�������</li>
<li>���ݻָ�����ֻ�ָܻ��ɱ�ϵͳ�����������ļ�</li>
<li>�ӱ��ػָ�������Ҫ������֧���ϴ�����֤����С���ϴ�����</li>
<li>�����ʹ���˷־��ݵ����ļ���1���������ļ����Զ�����</li>
    </td>
  </tr>
</table>
</div>
<form name="cpform" method="post" action="?part=restore&action=dodelete">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
<tr class="firstr">
<td width="50"><input type="checkbox" name="chkall" id="chkall" class="checkbox" onclick="CheckAll(this.form)" /><label for="chkall">ɾ?</label></td>
<td>�ļ���</td>
<td>�汾</td>
<td>ʱ��</td>
<td>����</td>
<td>�ߴ�</td>
<td>����</td>
<td>&nbsp;</td>
</tr>

<?php
foreach($exportlog as $key => $val) {
    $info = $val[1];
    $info['dateline'] = is_int($info['dateline']) ? GetTime($info['dateline']): 'δ֪';
    $info['size'] = sizecount($exportsize[$key]);
    $info['volume'] = count($val);
    $info['method'] = $info['method'] == 'multivol' ? $lang['db_multivol'] : $lang['db_shell'];
?>
<tr bgcolor="#ffffff">
<td  width="40"><input class="checkbox" type="checkbox" name="delete[]" value="<?=$key?>"></td>
<td><a href="javascript:;" onclick="javascript:blocknone('exportlog_<?=$key?>')"><img id="menuimg_1" src="template/images/menu_add.gif" align="absmiddle"/> <?=$key?></a></td>
<td><?=$info['version']?></td>
<td><?=$info['dateline']?></td>
<td><?=$backuptype[$info['type']]?></td>
<td><?=$info['size']?></td>
<td><?=$info['volume']?></td>
<td><?php echo "<a class=\"act\" href=\"?part=restore&from=server&datafile_server=$info[filename]&action=dorestore\"".($info['version'] != $version ? " onclick=\"return confirm('�ñ����ļ���ϵͳ�汾���㵱ǰʹ�õ�mymps�汾��ͬ');\"" : '')." class=\"act\">����</a>"?></td>
</tr>
<tbody id="exportlog_<?=$key?>" style="display:none">
<?php foreach($val as $v) {
 $v['dateline'] = is_int($v['dateline']) ? GetTime($v['dateline']) : 'δ֪';
 $v['size'] = sizecount($v['size']);
?>
<tr bgcolor="#ffffff"><td>&nbsp;</td><td><i style="color:#666"><?=substr(strrchr($v['filename'], "/"), 1)?></i></td><td><i style="color:#666"><?=$v['version']?></i></td><td><i style="color:#666"><?=$v['dateline']?></i></td><td><i style="color:#666"><?=$backuptype[$v['type']]?></i></td><td><i style="color:#666"><?=$v['size']?></i></td><td><i style="color:#666"><?=$v['volume']?>#</i></td><td>&nbsp;</td></tr>
<?
	}
?>
</tbody>
<?
}
?>
</table>
</div>
<center>
  <input type="submit" name="submit" value="�� ��" class="mymps large"/>
</center>
</form>
<?php mymps_admin_tpl_global_foot();?>