<?php include mymps_tpl('inc_head');?>
<div id="<?=MPS_SOFTNAME?>" style=" padding-bottom:0">
    <div class="mpstopic-category">
        <div class="panel-tab">
            <ul class="clearfix tab-list">
                <li><a href="friendlink.php?part=list" <?php if($part=='list'){?>class="current"<?php }?>>��������������</a></li>
                <li><a href="friendlink.php?part=add" <?php if($part=='add'){?>class="current"<?php }?>>������������</a></li>
                <li><a href="friendlink.php?do=type" <?php if($do=='type'){?>class="current"<?php }?>>��վ���͹���</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<div class="small-section">
	<a href="?"  <?php if(empty($ifindex) && empty($catid)) echo 'class="current"'; ?>>ȫ��</a>
	<a href="friendlink.php?ifindex=2" <?php if($ifindex == 2) echo 'class="current"'; ?>>��ҳ</a>
	<?php foreach($cats as $k => $v){?>
	<a href="friendlink.php?catid=<?=$v['catid']?>" <?php if($catid == $v['catid']) echo 'class="current"'; ?>><?=$v['catname']?></a>
	<?php }?>
</div>
<div class="clearfix"></div>
<form method='post' action='?part=doall'>
<input name="return_url" type="hidden" value="<?=GetUrl()?>">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
    <tr class="firstr">
      <td width="30">ѡ��</td>
      <td width="40">״̬</td>
	  <td width="80">˳��</td>
      <td width="140">��վ����</td>
      <td>��վ��ַ</td>
	  <?php if(!$catid){?>
      <td>��վlogo</td>
	  <?php }?>
      <td>���ʱ��</td>
      <td width="100">����</td>
    </tr>
    <?php foreach($links AS $row){?>
    <tr align="center" bgcolor="white">
      <td><input type='checkbox' name='ids[]' value='<?=$row[id]?>' class="checkbox" id="<?=$row[id]?>"></td>
	  <td><? if ($row[ischeck]=="1") echo"<font color=red>����</font>";elseif($row[ischeck]=="2") echo"<font color=green>����</font>";?></td>
      <td><input name="ordernumber[<?=$row[id]?>]" value="<?=$row[ordernumber]?>" class="txt"/></td>
      <td><?=$row[webname]?></td>
      <td align="left"><a href="<?=$row[url]?>" target="_blank" style="text-decoration:underline;"><?=$row[url]?></a></td>
	  <?php if(!$catid){?>
      <td><?if (!empty($row[weblogo])){?><a href="<?=$row[weblogo]?>"><img src="<?=$row[weblogo]?>" width="85" height="35" border="0" alt="����鿴ͼƬ������С"/></a><?}else{?>��<?}?></td>
	  <?php }?>
      <td><em><?=GetTime($row[createtime])?></em></td>
      <td><a href='friendlink.php?id=<?=$row[id]?>&part=edit'>����</a> / <a href='friendlink.php?id=<?=$row[id]?>&part=delete' onClick="return confirm('��ȷ��Ҫɾ�����������粻ȷ�����ȡ��')">ɾ��</a> </td>
    </tr>
    <?}?>
<tr bgcolor="#ffffff" height="28">
    <td style="border-right:1px #fff solid;"><input name="checkall" type="checkbox" id="checkall" onClick="CheckAll(this.form)" class="checkbox"/></td>
    <td colspan="10">
	<b>תΪ-></b> 
	<label for="index"><input name="do_action" class="radio" id="index" value="index" type="radio">��ҳ��ʾ</label> 
	<label for="inside"><input name="do_action" class="radio" id="inside" value="inside" type="radio">ȡ����ҳ��ʾ</label>
	<label for="check2"><input name="do_action" class="radio" id="check2" value="check2" type="radio">����</label>
	<label for="check1"><input name="do_action" class="radio" id="check1" value="check1" type="radio">����</label>
	<hr style="height:1px; border:1px #c5d8e8 solid;"/>
	<b>ɾ��-></b> 
	<label for="del"><input name="do_action" class="radio" id="del" value="del" type="radio">ɾ��</label> 
    </td>
</tr>
</table>
</div>
<center style='margin:10px'><input type="submit" value="�� ��"  class="mymps large"/> </center>
</form>
<div class="pagination"><?php echo page2()?></div>  
<?php mymps_admin_tpl_global_foot();?>