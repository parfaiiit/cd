<?php include mymps_tpl('inc_head');?>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
  <tr class="firstr">
  	<td colspan="2">���˵��</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td id="menu_tip">
 <li>����ٱ�����ʾ����ҳ�ײ�����ʾ12������绰����</li>
    </td>
  </tr>
</table>
</div>
<form action="?" method="post">
<input name="forward_url" value="<?=GetUrl()?>" type="hidden"/>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
    <tr style="font-weight:bold; background-color:#dff6ff">
      <td><input class="checkbox" name="checkall" type="checkbox" id="checkall" onClick="CheckAll(this.form)"/> ɾ?</td>
      <td>�绰�����̼һ���ҵ</td>
      <td>�绰����</td>
      <td>��ɫ</td>
      <td>�Ƿ�Ӵ�</td>
      <td>��ʾ˳��</td>
      <td>����״̬</td>
    </tr>
    <?php foreach($telephone as $k =>$value){?>
        <tr bgcolor="white">
          <td><input class="checkbox" type='checkbox' name='delids[]' value='<?=$value[id]?>' id="<?=$value[id]?>"></td>
          <td><input class="text" name="edit[<?=$value[id]?>][telname]" value="<?=$value[telname]?>" /></td>
          <td><input class="text" value="<?=$value[telnumber]?>" name="edit[<?=$value[id]?>][telnumber]"/></td>
          <td><select name="edit[<?=$value[id]?>][color]">
                <option value="">Ĭ����ɫ</option>
                <?foreach ($color as $k){?>
                <option value="<?=$k?>" <?php if($k == $value[color]) echo 'selected';?> style="background-color:<?=$k?>;"></option>
                <?}?>
      		  </select>
          </td>
          <td><select name="edit[<?=$value[id]?>][if_bold]">
              <option value="0" <?php if($value['if_bold'] != 1){echo 'selected="selected"; style="background-color:#6EB00C;color:white"';}?>>���Ӵ�</option>
              <option value="1" <?php if($value['if_bold'] == 1){echo 'selected="selected"; style="background-color:#6EB00C;color:white"';}?>>�Ӵ�</option>
      		  </select>
          </td>
          <td><input name="edit[<?=$value[id]?>][displayorder]" value="<?=$value[displayorder]?>" type="text" class="txt"/></td>
          <td><select name="edit[<?=$value[id]?>][if_view]"><?=get_ifview_options($value[if_view])?></select></td>
        </tr>
    <?}?>
    <tr bgcolor="#f5fbff">
      <td align="center"><b>����</b></td>
      <td><input name="add[telname]" value="" type="text" class="text"/></td>
      <td><input name="add[telnumber]" value="" type="text" class="text"/></td>
      <td><select name="add[color]" style="float:left">
              <option value="">Ĭ����ɫ</option>
               <?php echo get_color_options(); ?>
      		  </select></td>
      <td><select name="add[if_bold]">
              <option value="0">���Ӵ�</option>
              <option value="1">�Ӵ�</option>
      		  </select></td>
      <td><input name="add[displayorder]" value="0" type="text" class="txt"/></td>
      <td><select name="add[if_view]">
      <?=get_ifview_options(2)?>
      </select></td>
    </tr>
</table>
</div>
<center>
<input class="mymps large" value="�� ��" name="<?php echo CURSCRIPT; ?>_submit" type="submit"> &nbsp;
</center>
</form>
<div class="pagination"><?php echo page2()?></div>  
<?php mymps_admin_tpl_global_foot();?>