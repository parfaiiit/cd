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
  	<td colspan="2">�������������ı�����Ϣ</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8; width:40%">����</td>
    <td>&nbsp;<input name="name" class="text" value="<?php echo $name; ?>"></td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8; width:40%">�̼��û���</td>
    <td>&nbsp;<input name="userid" class="text" value="<?php echo $userid; ?>"></td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8">����ʱ��(��д��ʽ��yy-mm-dd):</td>
    <td>&nbsp;<input name="begindate" style="width:100px;" class="txt" value="<?php echo $begindate; ?>" onclick="popUpCalendar(this, this, &quot;yyyy-mm-dd&quot;)"> - <input name="enddate" style="width:100px;"  class="txt" value="<?php echo $enddate; ?>" onclick="popUpCalendar(this, this, &quot;yyyy-mm-dd&quot;)"></td>
  </tr>
</table>
</div>
<center><input type="submit" value="�� ��" class="mymps large" /></center>
<div class="clear" style="margin-bottom:5px"></div>
</form>
<form action="?part=list" method="post">
<input name="url" type="hidden" value="<?=GetUrl()?>">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm" >
    <tr class="firstr">
    <td width="30">&nbsp;</td>
    <td>��ʵ����</td>
    <td>�̼��û���</td>
    <td>�����</td>
    <td width="100">��ϵ�绰</td>
    <td>����ʱ��</td>
    <td>IP</td>
    <td>����</td>
    <td>״̬</td>
    <td>����</td>
  </tr>
<tbody onmouseover="addMouseEvent(this);">
<?php foreach($group AS $row){?>
    <tr bgcolor="white" >
    <td><input type='checkbox' name='selectedids[]' value="<?=$row['signid']?>" class='checkbox' id="<?=$row['signid']?>"></td>
    <td><a href="?part=view&id=<?=$row[signid]?>"><?=$row['sname']?></a></td>
    <td><a href="javascript:void(0);" onclick="
setbg('<?=MPS_SOFTNAME?>��Ա����',400,110,'../box.php?part=member&userid=<?=$row[userid]?>&admindir=<?=$admindir?>')"><?=$row[userid]?></a></td>
    <td><a href="../group.php?id=<?=$row['groupid']?>" target="_blank"><?=$row['gname']?></a></td>
    <td><?=$row['tel']?></td>
    <td><em><?php echo GetTime($row['dateline']); ?></em></td>
    <td><?=$row['signinip']?></td>
    <td>&nbsp;<?=$row['totalnumber']?></td>
    <td>
    <?php echo $status[$row['status']] ?></td>
    <td><a href="?part=view&id=<?=$row[signid]?>">��ϸ</a></td>
  </tr>
<?}?>
</tbody>
<tr bgcolor="#ffffff" height="28">
    <td style="border-right:1px #fff solid;"><input name="checkall" type="checkbox" id="checkall" onClick="CheckAll(this.form)" class="checkbox"/></td>
    <td colspan="10">
    <?php foreach($status as $k => $v){?>
	<label for="status<?=$k?>"><input type="radio" value="status<?=$k?>" id="status<?=$k?>" name="action" class="radio">ת<?=$v?></label> 
    <?php }?>
     <hr style="height:1px; border:1px #c5d8e8 solid;"/>
     <label for="delall"><input type="radio" value="delall" id="delall" name="action" class="radio">����ɾ��</label> 
    </td>
</tr>
</table>
</div>
<center><input type="submit" value="�� ��" class="mymps large" name="<?php echo CURSCRIPT; ?>_submit"/></center>
</form>
<div class="pagination"><?php echo page2();?></div>
<?php mymps_admin_tpl_global_foot();?>