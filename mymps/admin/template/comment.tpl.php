<?=mymps_admin_tpl_global_head();?>
<script type="text/javascript" src="../template/global/messagebox.js"></script>
<div class="ccc2">
<ul>
      <form action="?" method="get">
      <input name="part" value="<?=$part?>" type="hidden">
         �ؼ���
 		<input name="keywords" type="text" class="text" size="40" value="<?php echo $keywords; ?>">
        <label for="c0"><input name="comment_level" class="radio" type="radio" value="0" <?php if($_GET[comment_level]==0){echo "checked";}?> id=c0>���� </label>
        <label for="c1"><input name="comment_level" class="radio" type="radio" value="1" <?php if($_GET[comment_level]==1){echo "checked";}?> id=c1>���� </label>
         <input type="submit" class="mymps mini" value="��������">
       </form>
	</ul>
</div>
<form name='form1' method='post' action='?part=<?=$part?>' onSubmit='return checkSubmit();'>
<input name="url" type="hidden" value="<?=GetUrl()?>">
<input name="action" type="hidden" value="delall" />
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
    <tr class="firstr">
      <td width="30">ѡ��</td>
      <td width="30">���</td>
      <td>������</td>
      <td>���۶���</td>
	  <td>��������</td>
      <td width="150">����ʱ��</td>
      <td width="30">״̬</td>
      <td width="60">ɾ������</td>
    </tr>
    <tbody  onmouseover="addMouseEvent(this);">
	<?php foreach($comment AS $v){?>
    <tr align="center" bgcolor="white">
      <td><input type='checkbox' name='id[]' value='<?=$v[id]?>' class='checkbox' id="<?=$v[id]?>"></td>
      <td><?=$v[id]?></td>
	  <td><?=$v[userid]?></td>
	  <td><?=$v[title]?>&nbsp;</td>
	  <td><?=$v[content]?>&nbsp;</td>
	  <td><?=$v[pubtime]?></td>
      <td><?=$v[comment_level]?></td>
      <td><a href="?part=<?=$part?>&action=del&id=<?=$v[id]?>" onClick="return confirm('��ȷ��Ҫɾ�����粻ȷ�����ȡ��')">ɾ��</a></td>
    </tr>
<?php }?>
    </tbody>
    <tr bgcolor="#ffffff" height="28">
    <td align="center" style="border-right:1px #fff solid;"><input name="checkall" type="checkbox" id="checkall" onClick="CheckAll(this.form)" class="checkbox"/></td>
    <td colspan="10">
    <label for="delall"><input class="radio" type="radio" value="delall" id="delall" name="action">����ɾ��</label> 
    <label for="level0"><input class="radio" type="radio" value="level0" id="level0" name="action">תΪ����</label> 
    <label for="level1"><input class="radio" type="radio" value="level1" id="level1"name="action">תΪ����</label> 
    </td>
    </tr>

</table>
</div>
<center>
<input type="submit" onClick="if(!confirm('ȷ��Ҫ������'))return false;" value="�� ��" class="mymps large"/></center>
</form>
<div class="pagination"><?=page2()?></div>
<?=mymps_admin_tpl_global_foot();?>