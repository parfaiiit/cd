<?php include mymps_tpl('inc_head');?>

<div id="<?=MPS_SOFTNAME?>" style="padding-bottom:0">
	<div class="mpstopic-category">
		<div class="panel-tab">
			<ul class="clearfix tab-list">
				<li><a href="news.php" <?php if($part == 'list'){?>class="current"<?php }?>>�����б�</a></li>
				<li><a href="news.php?part=add" <?php if($part == 'add'){?>class="current"<?php }?>>�������</a></li>
			</ul>
			<ul style="float:right; margin-right:10px">
			<form action="?" method="get">
<input name="cityid" value="<?=$cityid?>" type="hidden">
<input name="title" type="input" value="<?php echo $title; ?>" class="text" style="width:120px;"/>
<select name="catid">
<option value="">��ѡ����������</option>
<?=cat_list('channel',0,$catid)?>
</select> 
<input type="submit" class="gray mini" value="��������"> 
</form>
			</ul>
		</div>
	</div>
</div>
<form action="?part=list" method="post">
<input name="url" type="hidden" value="<?=GetUrl()?>">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm" >
    <tr class="firstr">
    <td width="60"><input class="checkbox" name="checkall" type="checkbox" id="checkall" onClick="CheckAll(this.form)"/>ɾ?</td>
    <td>ID</td>
    <td>���ű���</td>
    <td width="100">������</td>
    <td width="100">��Դ</td>
    <td>�������</td>
    <td>����״̬</td>
    <td>�������</td>
    <td>����ʱ��</td>
    <td>������</td>
  </tr>
<tbody onmouseover="addMouseEvent(this);">
<?php foreach($news AS $row){?>
    <tr bgcolor="white" >
    <td><input type='checkbox' name='delids[]' value="<?=$row['id']?>" class='checkbox' id="<?=$row['id']?>"></td>
    <td><?=$row['id']?></td>
    <td align="left"  width="120"><a href="../news.php?id=<?=$row[id]?>" target="_blank" title="<?=$row['title']?>"><?=substring($row['title'],0,15)?></a></td>
    <td><?=$row['author']?></td>
    <td><?=$row['source']?></td>
    <td><a href="../news.php?catid=<?=$row['catid']?>"><?=$row['catname']?></a></td>
    <td><?=$iscommend_arr[$row['iscommend']]?></td>
    <td><?=$row['hit']?> ��</td>
    <td><em><?=GetTime($row['begintime'])?></em></td>
    <td>
     <a href="?part=edit&id=<?=$row['id']?>">�༭</a>
    </td>
  </tr>
<?}?>
</tbody>
</table>
</div>
<center><input type="submit" value="�� ��" class="mymps large" name="news_submit"/></center>
</form>
<div class="clear"></div>
<div class="pagination"><?php echo page2();?></div>
<?php mymps_admin_tpl_global_foot();?>