<?php include mymps_tpl('inc_head');?>
<script type="text/javascript" src="../template/global/messagebox.js"></script>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
  <form name='form1' method='post' action='?do=<?=$do?>&part=<?=$part?>&type=<?=$type?>' onSubmit='return checkSubmit();'>
  <input name="url" type="hidden" value="<?=GetUrl()?>">
  <input name="action" type="hidden" value="delall">
   <tbody onmouseover="addMouseEvent(this);">
    <tr class="firstr">
      <td width="30">ѡ��</td>
      <td width="30">���</td>
   	  <td>�û���</td>
      <td>��Ŀ</td>
      <td>���仯</td>
      <td>����ʱ��</td>
    </tr>
<?php foreach($get AS $v){?>
    <tr align="center" bgcolor="white">
      <td><input type='checkbox' name='id[]' value='<?=$v[id]?>' class='checkbox' id="<?=$v[id]?>"></td>
      <td><?=$v[id]?></td>
      <td><a href="javascript:void(0);" onclick="
setbg('Mymps��Ա����',400,110,'/box.php?part=member&userid=<?=$v[userid]?>')"><?=$v[userid]?></a></td>
	  <td><?=$v[subject]?></td>
      <td><?=$v[paycost]?></td>
      <td><em><?=$v[pubtime]?></em></td>
    </tr>
<?php }?>
	</tbody>
    <tr bgcolor="#ffffff" height="28">
    <td align="center" style="border-right:1px #fff solid;"><input name="checkall" class="checkbox"  type="checkbox" id="checkall" onClick="CheckAll(this.form)"/></td>
    <td colspan="10">
      <input type="submit" onClick="if(!confirm('ȷ��Ҫɾ����'))return false;" value="ɾ����¼" class="mymps mini"/>
    </td>
    </tr>
  </form>
</table>
</div>
<div class="pagination"><?=page2()?></div>
<?php mymps_admin_tpl_global_foot();?>