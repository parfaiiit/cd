<?php include mymps_tpl('inc_head');?>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
  <tr class="firstr">
  	<td colspan="2">���˵��</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td id="menu_tip">
 <li>����ٱ�����ʾ����ҳ�ĵ�һ���Ҳ࣬��ʾ���µ�24���������ӣ�ÿ���������ֽ���5����������</li>
 <li>��������ѡΪֱ����ת������ҳ��ʱ��������ת�������ӵ�ַ</li>
 <li>��дվ�����ӣ���ȷ�����ӵ�ַ����http://</li>
    </td>
  </tr>
</table>
</div>
<form action="?part=service" method="post">
<input name="forward_url" value="<?=GetUrl()?>" type="hidden"/>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
    <tr style="font-weight:bold; background-color:#dff6ff">
      <td><input class="checkbox" name="checkall" type="checkbox" id="checkall" onClick="CheckAll(this.form)"/> ɾ?</td>
      <td>��������</td>
      <td>����</td>
      <td>����URL��ַ</td>
      <td>��ʾ˳��</td>
      <td>����״̬</td>
    </tr>
    <?php foreach($lifebox as $k =>$value){?>
        <tr bgcolor="white">
          <td><input class="checkbox" type='checkbox' name='delids[]' value='<?=$value[id]?>' id="<?=$value[id]?>"></td>
          <td><input class="text" name="edit[<?=$value[id]?>][lifename]" value="<?=$value[lifename]?>" /> <a href="../lifebox.php?id=<?=$value['id']?>" target="_blank">Ԥ�� &raquo;</a></td>
          <td><select name="edit[<?=$value[id]?>][typeid]">
      <?php echo get_servtype_options($value[typeid]);?>
      </select></td>
          <td><input class="text" value="<?=$value[lifeurl]?>" name="edit[<?=$value[id]?>][lifeurl]"/></td>
          <td ><input name="edit[<?=$value[id]?>][displayorder]" value="<?=$value[displayorder]?>" type="text" class="txt"/></td>
          <td><select name="edit[<?=$value[id]?>][if_view]"><?=get_ifview_options($value[if_view])?></select></td>
        </tr>
    <?}?>
    <tr bgcolor="#f5fbff">
      <td align="center"><b>����</b></td>
      <td><input name="add[lifename]" value="" type="text" class="text"/></td>
      <td><select name="add[typeid]"><?php echo get_servtype_options($typeid);?></select></td>
      <td><input name="add[lifeurl]" value="" type="text" class="text"/></td>
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
<?php mymps_admin_tpl_global_foot();?>