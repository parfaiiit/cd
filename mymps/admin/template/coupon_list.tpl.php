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
  	<td colspan="2">���������������Ż�ȯ</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8; width:40%">�Ż�ȯ����</td>
    <td>&nbsp;<input name="title" class="text" value="<?php echo $title; ?>"></td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8; width:40%">�û���(UserID)</td>
    <td>&nbsp;<input name="userid" class="text" value="<?php echo $userid; ?>"></td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8; width:40%">��������</td>
    <td>&nbsp;<select name="cate_id">
    <option value="">>���޷���</option>
    <?php echo get_couponclass_select('cate_id',$cate_id,'no'); ?>
    </select></td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8; width:40%">��������</td>
    <td>&nbsp;<select name="areaid">
    <option value="">>���޵���</option>
    <?=cat_list('area',0,$areaid)?>
    </select></td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8">�Ż���(��д��ʽ��yy-mm-dd):</td>
    <td>&nbsp;<input name="begindate" style="width:100px;" class="txt" value="<?php echo $begindate; ?>" onclick="popUpCalendar(this, this, &quot;yyyy-mm-dd&quot;)"> - <input name="enddate" style="width:100px;"  class="txt" value="<?php echo $enddate; ?>" onclick="popUpCalendar(this, this, &quot;yyyy-mm-dd&quot;)"></td>
  </tr>
  <tr bgcolor="#ffffff">
  	<td style="background:#f1f5f8">�Ż�ȯ״̬</td>
    <td>
    <label for="yes"><input class="radio" name="status" type="radio" value="yes" id="yes" <?php if($status == 'yes' || empty($status)) echo 'checked'; ?>>����</label> <label for="no"><input name="status" class="radio" type="radio" value="no" id="no" <?php if($status == 'no' ) echo 'checked'; ?>>ʧЧ</label></td>
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
    <td>Ԥ��ͼ</td>
    <td>����</td>
    <td width="100">�ϴ���Ա</td>
    <td>�ϴ�ʱ��</td>
    <td>���ã�</td>
    <td>��ӡ</td>
    <td>����</td>
    <td>״̬</td>
    <td>����</td>
  </tr>
<tbody onmouseover="addMouseEvent(this);">
<?php foreach($coupon AS $row){?>
    <tr bgcolor="white" >
    <td><input type='checkbox' name='selectedids[]' value="<?=$row['id']?>" class='checkbox' id="<?=$row['id']?>"></td>
    <td><img src="<?=$mymps_global['SiteUrl'].$row['pre_picture']?>" width="60"></td>
    <td><a href="../coupon.php?id=<?=$row[id]?>" target="_blank"><?=$row['title']?></a></td>
    <td><a href="javascript:void(0);" onclick="
setbg('<?=MPS_SOFTNAME?>��Ա����',400,110,'../box.php?part=member&userid=<?=$row[userid]?>&admindir=<?=$admindir?>')"><?=$row[userid]?></a></td>
    <td><em><?php echo GetTime($row['dateline']); ?></em></td>
    <td><?php echo $row['status'] == 1 ? '<font color=green>����</font>' : '<font color=red>ʧЧ</font>' ;?></td>
    <td><?=$row['prints']?></td>
    <td><?=$row['hit']?></td>
    <td>
    <?php 
    if($row['grade'] == 0){
   		echo '<font color=red>����</font>';
    }elseif($row['grade'] == 1){
    	echo '<font color=#006acd>����</font>';
    }elseif($row['grade'] == 2){
   		echo '<font color=green>�Ƽ�</font>';
    }?></td>
    <td><a href="?part=edit&id=<?=$row[id]?>">�༭</a></td>
  </tr>
<?}?>
</tbody>
<tr bgcolor="#ffffff" height="28">
    <td style="border-right:1px #fff solid;"><input name="checkall" type="checkbox" id="checkall" onClick="CheckAll(this.form)" class="checkbox"/></td>
    <td colspan="10">
	<label for="grade0"><input type="radio" value="grade0" id="grade0" name="action" class="radio">ת<font color=red>����</font></label> 
    <label for="grade1"><input type="radio" value="grade1" id="grade1" name="action" class="radio">ת<font color=#006acd>����</font></label> 
    <label for="grade2"><input type="radio" value="grade2" id="grade2" name="action" class="radio">ת<font color=green>�Ƽ�</font></label> 
     <hr style="height:1px; border:1px #c5d8e8 solid;"/>
     <label for="delall"><input type="radio" value="delall" id="delall" name="action" class="radio">����ɾ��</label> 
    </td>
</tr>
</table>
</div>
<center><input type="submit" value="�� ��" class="mymps large" name="coupon_submit"/></center>
</form>
<div class="pagination"><?php echo page2();?></div>
<?php mymps_admin_tpl_global_foot();?>