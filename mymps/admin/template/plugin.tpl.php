<?php include mymps_tpl('inc_head');?>
<!--<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
  <tr class="firstr">
  	<td colspan="2">���˵��</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td id="menu_tip">
 <li>���Ŀ¼�������/pluginĿ¼�£���װ�²��֮ǰ���뽫���Ŀ¼�ϴ���/pluginĿ¼��</li>
    </td>
  </tr>
</table>
</div>-->
<?php if($mymps_global['cfg_if_corp'] != 1){?>
<div class="ccc2">
    <ul>
        <img src="../images/warn.gif" align="absmiddle"> ��ʾ����ǰ���<font color="red">�̼ҹ����Ѿ��رգ��Ź�������Ż�ȯ�������Ʒ������Զ�������</font>����������<a href="config.php">ϵͳ���� -> ��Ա�������</a>�￪���̼ҹ���
    </ul>
</div>
<div class="clear"></div>
<?php }?>
<form action="?part=list" method="post">
<input name="url" type="hidden" value="<?=GetUrl()?>">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
    <tr style="font-weight:bold; background-color:#dff6ff">
      <td>���</td>
      <td>״̬</td>
      <td>����</td>
      <td>��ʶ</td>
      <td>Ŀ¼</td>
      <td>�汾</td>
	  <td>����</td>
      <td>����</td>
    </tr>
    <?php foreach($plugin as $list){?>
    <tr bgcolor="white">
     	<td><i><?=$list[id]?>.</i></td>
		<td><?php if($list[disable] == 1){?><font color="red">&times;</font><?php }else{?><font color="green">��</font><?}?></td>
        <td><b><?=$list[name]?></b></td>
        <td><?=$list[flag]?></td>
        <td><?=$list[directory]?></td>
		<td><?=$list[version]?></td>
        <td><?php echo $list[iscore] == 1 ? '��' : '��'; ?></td>
        <td align="left"><?php if($list[iscore] != 1){?><a href="plugin.php?op=edit&id=<?=$list[id]?>">����</a> | <a href="../<?=$list[flag]?>.php" target="_blank">Ԥ����ҳ</a> | <?php if($list[disable] == 0){?><a href="?op=disable&id=<?=$list[id]?>" style="color:red; text-decoration:underline;">����&raquo;</a><?}else{?><a href="?op=able&id=<?=$list[id]?>" style="color:green; text-decoration:underline;">����&raquo;</a><?}?> <?php } else {?>N/A<?php }?></td>
    </tr>
    <?php }?>
	<!--<tr bgcolor="#FFFFFF" valign="top">
      <td align="center"><b>��װ</b></td>
      <td bgcolor="#f5fbff" ><input name="add[name]" value="" type="text" class="text" style="width:100px"/></td>
      <td><input name="add[flag]" value="" type="text" class="text" style="width:100px"/></td>
      <td bgcolor="#f5fbff"><input name="add[directory]" type="text" class="text" style="width:100px; margin-bottom:2px"><br />���/pluginĿ¼</td>
      <td><input name="add[version]" type="text" class="text" style="width:100px"></td>
      <td bgcolor="#f5fbff"><input name="add[author]" type="text" class="text" style="width:100px"></td>
      <td colspan="3"> -> ���Ƚ����Ŀ¼�ϴ���/pluginĿ¼��</td>
    </tr>-->
</table>
</div>
<center><input type="submit" value="���²������" class="mymps large" name="<?php echo CURSCRIPT; ?>_submit"/></center>
</form>
<?php mymps_admin_tpl_global_foot();?>