<?php 
include mymps_tpl('inc_head');
$admindir = getcwdOL();
?>
<script type="text/javascript" src="../template/global/messagebox.js"></script>
<form action="?" method="get">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
  <tr class="firstr">
  	<td colspan="2">���������������Ź��</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8; width:40%">�Ź������</td>
    <td>&nbsp;<input name="gname" class="text" value="<?php echo $gname; ?>"></td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8; width:40%">�û���(UserID)</td>
    <td>&nbsp;<input name="userid" class="text" value="<?php echo $userid; ?>"></td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8; width:40%">��������</td>
    <td>&nbsp;<select name="cate_id">
    <option value="">>���޷���</option>
    <?php echo get_groupclass_select('cate_id',$cate_id,'no'); ?>
    </select></td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8; width:40%">��������</td>
    <td>&nbsp;<select name="areaid">
    <option value="">>���޵���</option>
    <?=cat_list('area',0,$areaid)?>
    </select></td>
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
    <td>�����</td>
    <td width="100">�����̼�</td>
    <td>����ʱ��</td>
    <td>����</td>
    <td>����</td>
    <td>״̬</td>
    <td>����</td>
  </tr>
<tbody onmouseover="addMouseEvent(this);">
<?php foreach($group AS $row){?>
    <tr bgcolor="white" >
    <td><input type='checkbox' name='selectedids[]' value="<?=$row['groupid']?>" class='checkbox' id="<?=$row['groupid']?>"></td>
    <td><img src="<?=$mymps_global['SiteUrl'].$row['pre_picture']?>" width="60"></td>
    <td><a href="../group.php?id=<?=$row[groupid]?>" target="_blank"><?=$row['gname']?></a></td>
    <td><a href="javascript:void(0);" onclick="
setbg('<?=MPS_SOFTNAME?>��Ա����',400,110,'../box.php?part=member&userid=<?=$row[userid]?>&admindir=<?=$admindir?>')"><?=$row[userid]?></a></td>
    <td><em><?php echo GetTime($row['dateline']); ?></em></td>
    <td><?=$row['displayorder']?></td>
    <td>&nbsp;<?=$row['signintotal']?></td>
    <td>
    <?php echo $glevel[$row['glevel']] ?></td>
    <td><a href="?part=edit&id=<?=$row[groupid]?>">�༭</a></td>
  </tr>
<?}?>
</tbody>
<tr bgcolor="#ffffff" height="28">
    <td style="border-right:1px #fff solid;"><input name="checkall" type="checkbox" id="checkall" onClick="CheckAll(this.form)" class="checkbox"/></td>
    <td colspan="10">
    <?php foreach($glevel as $k => $v){?>
	<label for="glevel<?=$k?>"><input type="radio" value="glevel<?=$k?>" id="glevel<?=$k?>" name="action" class="radio">ת<?=$v?></label> 
    <?php }?>
     <hr style="height:1px; border:1px #c5d8e8 solid;"/>
     <label for="delall"><input type="radio" value="delall" id="delall" name="action" class="radio">����ɾ��</label> 
    </td>
</tr>
</table>
</div>
<center><input type="submit" value="�� ��" class="mymps large" name="group_submit"/></center>
</form>
<div class="pagination"><?php echo page2();?></div>
<?php mymps_admin_tpl_global_foot();?>