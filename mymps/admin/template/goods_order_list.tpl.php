<?php 
include mymps_tpl('inc_head');
$admindir = getcwdOL();
?>
<script type="text/javascript" src="../template/global/messagebox.js"></script>
<script type='text/javascript' src='js/calendar.js'></script>
<form action="?" method="get">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
  <tr class="firstr">
  	<td colspan="2">���������������µ���Ϣ</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8; width:40%">��ϵ��</td>
    <td>&nbsp;<input name="oname" class="text" value="<?php echo $oname; ?>"></td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8; width:40%">�̼��û���</td>
    <td>&nbsp;<input name="userid" class="text" value="<?php echo $userid; ?>"></td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8">�µ�ʱ��(��д��ʽ��yy-mm-dd):</td>
    <td>&nbsp;<input name="begindate" style="width:100px;" class="txt" value="<?php echo $begindate; ?>" onclick="popUpCalendar(this, this, &quot;yyyy-mm-dd&quot;)"> - <input name="enddate" style="width:100px;"  class="txt" value="<?php echo $enddate; ?>" onclick="popUpCalendar(this, this, &quot;yyyy-mm-dd&quot;)"></td>
  </tr>
</table>
</div>
<center><input type="submit" value="�� ��" class="mymps large" /></center>
<div class="clear" style="margin-bottom:5px"></div>
</form>
<form action="?part=list" method="post">
<input name="url" type="hidden" value="<?=GetUrl()?>">
<input name="action" value="delall" type="hidden">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm" >
    <tr class="firstr">
	<td width="50">
	<input name="checkall" type="checkbox" id="checkall" onClick="CheckAll(this.form)" class="checkbox"/>ɾ?</td>
    <td>��ϵ��</td>
    <td>�̼��û���</td>
    <td>�µ���Ʒ</td>
    <td width="100">��ϵ�绰</td>
    <td>�µ�ʱ��</td>
    <td>IP</td>
    <td>����</td>
    <td>����</td>
  </tr>
<tbody onmouseover="addMouseEvent(this);">
<?php foreach($goods AS $row){?>
    <tr bgcolor="white" >
    <td><input type='checkbox' name='selectedids[]' value="<?=$row['id']?>" class='checkbox' id="<?=$row['id']?>"></td>
    <td><?=$row['oname']?></td>
    <td><a href="javascript:void(0);" onclick="
setbg('<?=MPS_SOFTNAME?>��Ա����',400,110,'../box.php?part=member&userid=<?=$row[userid]?>&admindir=<?=$admindir?>')"><?=$row[userid]?></a></td>
    <td><a href="../goods.php?id=<?=$row['goodsid']?>" target="_blank"><?=$row['goodsname']?></a></td>
    <td><?=$row['tel']?></td>
    <td><em><?php echo GetTime($row['dateline']); ?></em></td>
    <td><?=$row['ip']?></td>
    <td>&nbsp;<?=$row['ordernum']?></td>
    <td><a href="?part=view&id=<?=$row[id]?>">��ϸ</a></td>
  </tr>
<?}?>
</tbody>
</table>
</div>
<center><input type="submit" value="�� ��" class="mymps large" name="<?php echo CURSCRIPT; ?>_submit"/></center>
</form>
<div class="pagination"><?php echo page2();?></div>
<?php mymps_admin_tpl_global_foot();?>