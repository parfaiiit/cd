<?php include mymps_tpl('inc_head');?>
<div class="ccc2">
	<ul>
      <form action="announce.php?part=all" method="get">
      ���� 
        <input name="title" class="text" type="text" size="30" value="<?php echo $title; ?>"> 
        ���� 
        <input name="author" class="text" type="text" size="15" value="<?php echo $author; ?>">��<input type="submit" value="��������" class="gray mini"> &nbsp;&nbsp;<input type="button" class="mymps mini" onClick="location.href='announce.php?part=add'" value="��������">
       </form>
	</ul>
</div>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
  <form name='form1' method='post' action='announce.php' onSubmit='return checkSubmit();'>
    <input type='hidden' name='part' value='delall'/>
    <input type="hidden" name="url" value="<?=GetUrl()?>" />
    <tr class="firstr">
      <td width="30">ѡ��</td>
      <td width="30">���</td>
      <td>�������</td>
      <td>��������</td>
      <td>��ʼʱ��</td>
      <td>��ֹʱ��</td>
      <td>���ʱ��</td>
      <td>����</td>
    </tr>
    <tbody onmouseover="addMouseEvent(this);">
	<?php foreach($announce AS $announce){?>
	<tr bgcolor="white">
   	  <td><input type='checkbox' class="checkbox" name='id[]' value='<?=$announce[id]?>' id="<?=$announce[id]?>"></td>
	  <td><label><?=$announce[id]?></label></td>
	  <td align="left"><a href="../about.php?part=announce#<?=$announce[id]?>" target="_blank"><?=$announce[title]?></a></td>
      <td align="left"><?=$announce[author]?></td>
      <td align="left"><em><?=GetTime($announce[begintime])?></em></td>
      <td align="left"><em><?=GetTime($announce[endtime])?></em></td>
      <td align="left"><?=GetTime($announce[pubdate])?></td>
	  <td align="center"><a href="announce.php?part=edit&id=<?=$announce[id]?>">�༭</a> / <a href="announce.php?part=delete&id=<?=$announce[id]?>&url=<?=GetUrl()?>" onClick="if(!confirm('ȷ��Ҫɾ����\n\n�˲��������Իָ���'))return false;">ɾ��</a>
	  </td>
	</tr>
	<?}?>
    </tbody>
    <tr bgcolor="#ffffff" height="28">
    <td align="center" style="border-right:1px #fff solid;"><input name="checkall" type="checkbox" id="checkall" onClick="CheckAll(this.form)" class="checkbox"/></td>
    <td colspan="10">��
<input type="submit" onClick="if(!confirm('ȷ��Ҫ������\n\n�˲��������Իָ���'))return false;" value="����ɾ��" class="mymps mini"/>      
    </td>
    </tr>
  </form>
</table>
</div>
<div class="pagination"><?php echo page2()?></div>  
<?php mymps_admin_tpl_global_foot();?>