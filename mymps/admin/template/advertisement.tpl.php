<?php include mymps_tpl('inc_head_jq');?>
<script type="text/javascript" src="../include/datepicker/datepicker.js"></script>
<link rel="stylesheet" href="../include/datepicker/ui.css">
<script language='javascript'>
$(function(){
	$("#datepicker1").datepicker();
	$("#datepicker2").datepicker();
});
</script>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
<tr class="firstr">
<td colspan="5">
    <div class="left">
    <a href="javascript:collapse_change('tip')">������ʾ</a></div>
    <div class="right"><a href="javascript:collapse_change('tip')"><img id="menuimg_tip" src="template/images/menu_reduce.gif"/></a></div>
</td>
</tr>
<tr>
    <td id="menu_tip" bgcolor="white">
    <?php echo $type ? $vbm_adv_type[$type][notice] : $vbm_adv_type[$edit[type]][notice];?>
    </td>
</tr>
</table>
</div>
<form method="post" name="settings" action="adv.php?advid=<?=$advid?>">
<input name="part" value="adv<?=$part?>" type="hidden"/>
<input name="type" value="<?php echo $type ? $type : $edit[type] ;?>" type="hidden"/>
<?php if($advid){?>
<input name="forward_url" value="<?php echo GetUrl(); ?>" type="hidden">
<?php }?>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
<tr class="firstr">
<td colspan="2">
    <div class="left">
    <a href="javascript:collapse_change('float')"><?php echo $type ? $vbm_adv_type[$type][name] : $vbm_adv_type[$edit[type]][name];?></a></div>
    <div class="right"><a href="javascript:collapse_change('float')"><img id="menuimg_float" src="template/images/menu_reduce.gif"/></a></div>
</td>
</tr>

<tbody id="menu_float" style="display: yes">
<tr>
<td width="45%" bgcolor="white" >չ�ַ�ʽ:<br /><i style="color:#666">��ѡ������Ĺ��չ�ַ�ʽ</i></td><td bgcolor="white"><?php echo $style ? get_adv_style($style,'advnew[style]') : get_adv_style($adv_style[style],'advnew[style]') ; ?></td></tr>
<tr><td width="45%" bgcolor="white" >������(<font color="red">*����</font>):<br /><i style="color:#666">ע��: ������ֻΪʶ����ϲ�ͬ�����Ŀ֮�ã������ڹ������ʾ</i></td><td bgcolor="white"><input class="text" type="text" size="50" name="advnew[title]" value="<?php echo $title ? $title : $edit[title] ; ?>" >
</td></tr>
<?php if($type != 'normalad' && $edit['type'] != 'normalad'){?>
<tr><td width="45%" bgcolor="white" >���Ͷ�ŷ�Χ(<font color="red">*��ѡ</font>):<br /><i style="color:#666">���ñ����Ͷ�ŵ�ҳ�����վ��Χ�����԰�ס CTRL ��ѡ��ѡ��ȫ����Ϊ������ѡ����Ͷ�ŵķ�Χ</i></td><td bgcolor="white">
<select name="advnew[targets][]" size="15" multiple="multiple">
<?php if($type == 'infoad' || $edit['type'] == 'infoad'){
	echo cat_list('category',0,$edit['targets'],true);
} else {?>
<?php if(in_array($type,array('intercatad','interlistad')) || in_array($edit['type'],array('intercatad','interlistad'))){
	$edit['targets'] = $edit['targets'] ? $edit['targets'] : array();
?>
	<option value="all" <?php if(in_array('all',$edit['targets'])) echo 'selected style="background-color:#6EB00C;color:white"';?>> > ȫ��</option>
    <option value=""> </option>
<?}elseif($type == 'indexcatad' || $edit['type'] == 'indexcatad'){?>
<optgroup label="<?=MPS_SOFTNAME?>��վ��ҳ">
<?}else{
foreach($adv_target as $kad => $vad){?>
<option value="<?=$vad?>" <?php if(is_array($edit['targets'])){
	if(in_array($vad,$edit['targets'])){
		echo 'selected style="background-color:#6EB00C;color:white"'; }
        }?>>&nbsp;&nbsp;> <?=$kad?></option>
<optgroup label="<?=MPS_SOFTNAME?>">
<?php 
	}}
}?>

<?php 
if($type == 'infoad' || $edit['type'] == 'infoad'){
	
} elseif($type == 'indexcatad' || $edit['type'] == 'indexcatad') {
	echo cat_list('category',0,$edit['targets'],true,1);
} else {
	echo cat_list('category',0,$edit['targets']);
}
?>
</optgroup>
</select>

</td></tr>
<?}?>
<?php if($type == 'interlistad' || $edit['type'] == 'interlistad'){?>
<tr><td width="45%" bgcolor="#FFFFFF">չʾλ��(<font color="red">*����</font>):<br /><i style="color:#666">������չʾλ����������Ŀҳ��Ϣ�б�ͷ��λ�û���β��λ��</i></td><td bgcolor="white">
<select name="advnew[position]" class="text">
<option value="top" <?php if($adv_style['position'] != 'bottom') echo 'selected';?>>ͷ��</option>
<option value="bottom" <?php if($adv_style['position'] == 'bottom') echo 'selected';?>>β��</option>
</select>
</td></tr>
<?php }?>
<?php if($type == 'floatad' || $edit['type'] == 'floatad'){?>
<tr><td width="45%" bgcolor="#FFFFFF">Ư���߶�(<font color="red">*����</font>):<br /><i style="color:#666">Ư��������ҳ��ײ��ĸ߶ȣ������Ư�����ĸ߶Ƚ����ʵ��ĵ��ڣ�����Χ�� 40��600 ֮�䣬Ĭ��ֵ 200</i></td><td bgcolor="white"><input type="text" name="advnew[floath]" value="<?php echo $adv_style['floath'] ? $adv_style['floath'] : '200'?>" class="text">
</td></tr>
<?php }?>
<tr><td width="45%" bgcolor="white" >�����ʼʱ��(ѡ��):<br /><i style="color:#666">���ù����ʼ��Ч��ʱ�䣬��ʽ yyyy-mm-dd������Ϊ��������ʼʱ��</i></td><td bgcolor="white"><input type="text" id="datepicker1" name="advnew[starttime]" value="<?php echo $edit[starttime] ?  GetTime($edit[starttime]) : ''?>" class="text">
</td></tr><tr><td width="45%" bgcolor="white" >������ʱ��(ѡ��):<br /><i style="color:#666">���ù���������ʱ�䣬��ʽ yyyy-mm-dd������Ϊ�����ƽ���ʱ��</i></td><td bgcolor="white"><input id="datepicker2" type="text" name="advnew[endtime]" class="text" value="<?php echo $edit[endtime] ?  GetTime($edit[endtime]) : ''?>">
</td></tr>
</table>
</div>

<div id="<?=MPS_SOFTNAME?>">
	<?php echo $style ? get_style_forminput('',$style) : get_style_forminput($edit[code],$adv_style); ?>
</div>
<center><input type="submit" name="<?php echo CURSCRIPT; ?>_submit" class="mymps large" value="�� ��"/><br /><br /><a href="adv.php?type=<?php echo $type?type:$edit[type]; ?>" class="back">����<?php echo $type ? $vbm_adv_type[$type][name] : $vbm_adv_type[$edit[type]][name];?>����</a><br />
<br /><a href="adv.php" class="back">���ع�������ҳ</a></center>
</form>
<?php mymps_admin_tpl_global_foot();?>