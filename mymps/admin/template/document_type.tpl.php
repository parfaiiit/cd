<?php include mymps_tpl('inc_head');?>
<div id="<?=MPS_SOFTNAME?>" style="padding-bottom:0">
	<div class="mpstopic-category">
		<div class="panel-tab">
			<ul class="clearfix tab-list">
				<li><a href="document.php?do=document" <?php if($do == 'document'){?>class="current"<?php }?>>�ѷ����ĵ�</a></li>
				<li><a href="document.php" <?php if($do == 'type'){?>class="current"<?php }?>>�ĵ�ģ�͹���</a></li>
			</ul>
		</div>
	</div>
</div>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
  <tr class="firstr">
  	<td colspan="2">������ʾ</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td id="menu_tip">
		<?=$notice?>
    </td>
  </tr>
</table>
</div>
<form name='form1' method='post' action='document.php'>
<input name="forward_url" value="<?=GetUrl()?>" type="hidden">
<input name="do" type="hidden" value="type">
<div id="<?=MPS_SOFTNAME?>">
    <table border="0" cellspacing="0" cellpadding="0" class="vbm">
    <tr class="firstr">
      <td><input class="checkbox" name="checkall" type="checkbox" id="checkall" onClick="CheckAll(this.form)"/> ɾ?</td>
      <td>�ĵ�ģ������</td>
      <td>�ĵ�����</td>
      <td>��ʾ˳��</td>
      <td>����״̬</td>
      <td>�༭</td>
    </tr>
    <?php foreach($docu as $k =>$value){?>
        <tr bgcolor="white">
          <td><input class="checkbox" type='checkbox' name='delids[]' value='<?=$value[typeid]?>' id="<?=$value[typeid]?>"></td>
          <td><?=$value[typename]?></td>
          <td><?=$docu_arr[$value[arrid]]?></td>
          <td ><input name="displayorder[<?=$value[typeid]?>]" value="<?=$value[displayorder]?>" type="text" class="txt"/></td>
          <td><?=$if_view[$value[ifview]]?></td>
          <td><a href="?part=edit&typeid=<?=$value[typeid]?>">����</a></td>
        </tr>
    <?}?>
    <tr bgcolor="#f5fbff">
      <td align="center"><b>����</b></td>
      <td><input name="add[typename]" value="" type="text" class="text"/></td>
      <td>
      <select name="add[arrid]">
      <?=get_docuarr_options($arrid)?>
      </select>
      </td>
      <td><input name="add[displayorder]" value="" type="text" class="txt"/></td>
      <td>
      <select name="add[ifview]">
      <?=get_ifview_options('1')?>
      </select>
      </td>
      <td>&nbsp;</td>
    </tr>
    </table>
</div>
<center>
<input type="submit" value="�� ��" class="mymps large" name="<?php echo CURSCRIPT; ?>_submit" style="margin-bottom:5px"/>  
</center>
</form>
<?php mymps_admin_tpl_global_foot();?>