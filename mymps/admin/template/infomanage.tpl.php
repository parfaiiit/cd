<?php include mymps_tpl('inc_head');?>
<script type='text/javascript' src='js/calendar.js'></script>
<script language="javascript">
ifcheck = false;
</script>
<form action="infomanage.php?" method="get">
<input name="action" value="viewresult" type="hidden"/>
<input name="return_url" value="<?php echo GetUrl(); ?>" type="hidden" />
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
  <tr class="firstr">
  	<td colspan="2">����������������Ϣ����</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8; width:40%">��ʾ��ϸ��Ϣ�б�</td>
    <td>&nbsp;<input type="checkbox" name="detail"  value="yes" class="checkbox" <?php if($detail == 'yes' || empty($detail)) echo 'checked'; ?>> <font color="red"><br />
    ��������ʾ��ϸ�б���ô����ƥ������ݽ�һ����ִ�в����������������<br />
    �ر��ǽ���ɾ������ʱ</font></td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8">�Ƿ��οͷ���:</td>
    <td>&nbsp;<select name="ismember">
    <option value="">>������</option>
    <option value="no" <?php if($ismember == 'no') echo 'selected="true" style="background-color:#6eb00c; color:white!important;"'?>>�οͷ���</option>
    <option value="yes" <?php if($ismember == 'yes') echo 'selected="true" style="background-color:#6eb00c; color:white!important;"'?>>��Ա����</option>
    </select></td>
  </tr>
    <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8">�Ƿ������Ϣ:</td>
    <td>&nbsp;<select name="istimed">
    <option value="">>������</option>
    <option value="no" <?php if($istimed == 'no') echo 'selected="true" style="background-color:#6eb00c; color:white!important;"'?>>δ������Ϣ</option>
    <option value="yes" <?php if($istimed == 'yes') echo 'selected="true" style="background-color:#6eb00c; color:white!important;"'?>>������Ϣ</option>
    </select></td>
  </tr>
    <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8">��Ϣ״̬:</td>
    <td>&nbsp;<select name="info_level">
    <option value="">>������</option>
    <option value="0" <?php if($info_level == '0') echo 'selected="true" style="background-color:#6eb00c; color:white!important;"'?>>����</option>
    <option value="1" <?php if($info_level == '1') echo 'selected="true" style="background-color:#6eb00c; color:white!important;"'?>>����</option>
	<option value="2" <?php if($info_level == '2') echo 'selected="true" style="background-color:#6eb00c; color:white!important;"'?>>�Ƽ�</option>
    </select></td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8; width:40%">���ڷ���</td>
    <td>&nbsp;<select name="catid">
    <option value="">>���޷���</option>
    <?=cat_list('category',0,$catid)?>
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
    <td style="background-color:#f1f5f8">����ʱ�䷶Χ(��ʽ yyyy-mm-dd�������������� 0):</td>
    <td>&nbsp;<input class="txt" style="width:100px" type="text" name="starttime" value="<?php echo $starttime; ?>" onclick="popUpCalendar(this, this, &quot;yyyy-mm-dd&quot;)"> -
<input class="txt" style="width:100px" type="text" name="endtime" value="<?php echo $endtime; ?>" onclick="popUpCalendar(this, this, &quot;yyyy-mm-dd&quot;)"></td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8">�����û���(���û����м����ð�Ƕ��� "," �ָ�):</td>
    <td>&nbsp;<input name="userid" class="text" value="<?php echo $userid; ?>"></td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8">��ϵ�绰(�û���������ϵ�绰):</td>
    <td>&nbsp;<input name="tel" class="text" value="<?php echo $tel; ?>"></td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8">��Ϣ�����ߵ�IP (ͨ��� "*" �� "127.0.*.*"����������):</td>
    <td>&nbsp;<input name="ip" class="text" value="<?php echo $ip; ?>"></td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8">���ݹؼ���(��ؼ����м����ð�Ƕ��� "," �ָ�ؼ��ʿ������޶��� {x}):</td>
    <td>&nbsp;<input name="keywords" class="text" value="<?php echo $keywords; ?>"></td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8">������С����:(�����ܻ���ط���������)</td>
    <td>&nbsp;<input name="lengthlimit" class="text" value="<?php echo $lengthlimit; ?>"></td>
  </tr>
  <tr bgcolor="#ffffff" id="searchresult" style="display:none">
  	<td colspan="2">
    	��Ϣ�б�
    </td>
  </tr>
  <?php if($action != 'viewresult'){?>
  <tr class="firstr">
  	<td colspan="2">��ѡ����Ҫ���еĲ���</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td colspan="2">
    <label for="delinfo"><input name="part" value="delinfo" type="radio" class="radio" id="delinfo" <?php if($part == 'delinfo') echo 'checked';?>/>ɾ����Ϣ</label> 	
    <label for="delcomment"><input name="part" value="delcomment" type="radio" class="radio" id="delcomment" <?php if($part == 'delcomment') echo 'checked';?>/>ɾ����Ϣ����</label>
    <label for="delattach"><input name="part" value="delattach" type="radio" class="radio" id="delattach" <?php if($part == 'delattach') echo 'checked';?>/>ɾ����ϢͼƬ</label>
    <label for="delhtml"><input name="part" value="delhtml" type="radio" class="radio" id="delhtml" <?php if($part == 'delhtml') echo 'checked';?>/>ɾ����ϢHTML�ļ�</label>
    <hr style="height:1px; border:1px #c5d8e8 solid;"/>
    <label for="refresh1"><input name="part" value="refresh" type="radio" class="radio" id="refresh1" <?php if($part == 'refresh') echo 'checked';?> />ˢ����Ϣ��������ʱ����Ϊ��ǰʱ�䣩</label>
    <hr style="height:1px; border:1px #c5d8e8 solid;"/>
<label for="level0"><input name="part" value="level0" type="radio" class="radio" id="level0" <?php if($part == 'level0') echo 'checked';?>/>תΪ����</label>
    <label for="level1"><input name="part" value="level1" type="radio" class="radio" id="level1" <?php if($part == 'level1') echo 'checked';?>/>תΪ����</label>
    <label for="level2"><input name="part" value="level2" type="radio" class="radio" id="level2" <?php if($part == 'level2') echo 'checked';?>/>תΪ�Ƽ�</label>
    <hr style="height:1px; border:1px #c5d8e8 solid;"/>
<label for="ifred"><input name="part" value="ifred" type="radio" class="radio" id="ifred" <?php if($part == 'ifred') echo 'checked';?>/>�����׺�</label>
    <label for="ifbold"><input name="part" value="ifbold" type="radio" class="radio" id="ifbold" <?php if($part == 'ifbold') echo 'checked';?>/>����Ӵ�</label>
    </td>
  </tr>
  <?}else{?>
  	<input name="part" value="<?=$part?>" type="hidden">
  <?}?>
</table>
</div>
<center><input type="submit" value="�� ��" class="mymps large" /></center>
<div class="clear"></div>
</form>
<?php
if($action == 'viewresult'){
?>
<form action="infomanage.php?" method="post">
<input name="step" value="submit" type="hidden">
<input name="return_url" value="<?php echo GetUrl(); ?>" type="hidden" />
<div class="clear"></div>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm" >
<tr class="firstr">
  	<td colspan="8">��ѡ����Ҫ���еĲ���</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td colspan="8">
    <label for="delinfo"><input name="part" value="delinfo" type="radio" class="radio" id="delinfo" <?php if($part == 'delinfo') echo 'checked';?>/>ɾ����Ϣ</label> 	
    <label for="delcomment"><input name="part" value="delcomment" type="radio" class="radio" id="delcomment" <?php if($part == 'delcomment') echo 'checked';?>/>ɾ����Ϣ����</label>
    <label for="delattach"><input name="part" value="delattach" type="radio" class="radio" id="delattach" <?php if($part == 'delattach') echo 'checked';?>/>ɾ����ϢͼƬ</label>
    <label for="delhtml"><input name="part" value="delhtml" type="radio" class="radio" id="delhtml" <?php if($part == 'delhtml') echo 'checked';?>/>ɾ����ϢHTML�ļ�</label>
    <hr style="height:1px; border:1px #c5d8e8 solid;"/>
    <label for="refresh"><input name="part" value="refresh" type="radio" class="radio" id="refresh" <?php if($part == 'refresh') echo 'checked';?>/>ˢ����Ϣ��������ʱ����Ϊ��ǰʱ�䣩</label><hr style="height:1px; border:1px #c5d8e8 solid;"/>
<label for="level0"><input name="part" value="level0" type="radio" class="radio" id="level0" <?php if($part == 'level0') echo 'checked';?>/>תΪ����</label>
    <label for="level1"><input name="part" value="level1" type="radio" class="radio" id="level1" <?php if($part == 'level1') echo 'checked';?>/>תΪ����</label>
    <label for="level2"><input name="part" value="level2" type="radio" class="radio" id="level2" <?php if($part == 'level2') echo 'checked';?>/>תΪ�Ƽ�</label>
    <hr style="height:1px; border:1px #c5d8e8 solid;"/>
<label for="ifred"><input name="part" value="ifred" type="radio" class="radio" id="ifred" <?php if($part == 'ifred') echo 'checked';?>/>�����׺�</label>
    <label for="ifbold"><input name="part" value="ifbold" type="radio" class="radio" id="ifbold" <?php if($part == 'ifbold') echo 'checked';?>/>����Ӵ�</label>
    </td>
  </tr>
    <tr class="firstr">
    <td style="width:5%"><input name="checkall" type="checkbox" id="checkall" onClick="CheckAll(this.form)" class="checkbox" checked="checked"/> </td>
    <td style="width:6%">��ϢID</td>
    <td style="width:16%">��Ϣ����</td>
    <td style="width:30%">��Ϣ����</td>
    <td width="100">��ϵ��</td>
    <td width="100">��Ϣ״̬</td>
    <td>����ʱ��</td>
    <td>����ʱ��</td>
  </tr>
<?php 
foreach($information AS $row){?>
    <tr bgcolor="#ffffff" >
    <td><input type='checkbox' name='optionids[]' value='<?=$row[id]?>' class='checkbox' id="<?=$row[id]?>" checked="checked"></td>
    <td><?=$row[id]?></td>
    <td align="left" style="background:#ffffff"><a href="<?php echo Rewrite('info',array('id'=>$row[id],'catid'=>$row[catid],'html_path'=>$row[html_path]))?>" target="_blank" title="<?=$row[title]?>" style="<?php if($row['ifred'] == '1') echo 'color:red;';?> <?php if($row['ifbold'] == '1') echo 'font-weight:bold;';?>"><?=substring($row[title],0,18)?></a></td>
    <td align="left"><em><?=substring(clear_html($row[content]),0,80)?>...</em></td>
    <td><?php echo $row[contact_who] ? $row[contact_who] : '<em>'.$row[userid].'</em>';?></td>
    <td><?=$information_level[$row[info_level]]?></td>
    <td><em><?=GetTime($row[begintime])?></em></td>
    <td><em><?php echo empty($row[endtime]) ? '������Ч' : GetTime($row[endtime]); ?></em></td>
  </tr>
<?}?>
</table>
</div>
<?php if($action == 'viewresult'){?>
<center><input type="submit" value="�� ��" class="mymps large" name="<?php echo CURSCRIPT; ?>_submit" <?php if($rows_num == 0) echo 'disabled'?>/></center>
</form>
<?php }?>
<div class="pagination"><?php echo page2();?></div>
<?}?>
<?php mymps_admin_tpl_global_foot();?>