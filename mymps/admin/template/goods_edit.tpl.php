<?php include mymps_tpl('inc_head');?>
<script language="javascript" src="js/vbm.js"></script>
<script language="javascript">
function check_sub(){
	if (document.form1.goodsname.value=="") {
		alert('����д��Ʒ����');
		document.form1.goodsname.focus();
		return false;
	}
	if (document.form1.userid.value=="") {
		alert('����д������Ʒ�Ļ�Ա�û���');
		document.form1.userid.focus();
		return false;
	}
	if (document.form1.content.value=="") {
		alert('����д��Ʒ��ϸ���ܣ�');
		document.form1.content.focus();
		return false;
	}
	return true;
}
</script>
<style>
.vbm tr{ background:#ffffff}
.altbg1{ background-color:#f1f5f8}
</style>
<form name="form1" action="?part=edit&id=<?=$id?>" method="post" enctype="multipart/form-data" onSubmit="return check_sub();">
<input name="pre_picture" value="<?=$edit['pre_picture']?>" type="hidden">
<input name="picture" value="<?=$edit['picture']?>" type="hidden">
<div id="<?=MPS_SOFTNAME?>">
<table width="100%" cellspacing="0" cellpadding="0" class="vbm">
<tr class="firstr">
	<td colspan="2">������Ϣ</td>
</tr>
<tr>
    <td class="altbg1">��Ʒ����:<font color="red">*</font></td>
    <td>
        <input type="text" name="goodsname" value="<?=$edit['goodsname']?>" class="text" />
    </td>
</tr>
<tr>
    <td class="altbg1" width="15%">�����̼��û���:<font color="red">*</font></td>
    <td width="75%">
        <input type="text" name="userid" id="userid" value="<?=$edit['userid']?>" class="text" style="background-color:#eee"/> <font color=red>�Ǳ�Ҫ�������޸�</font>
    </td>
</tr>
<tr>
    <td class="altbg1">�г��۸�:</td>
    <td>
	<input name="oldprice" value="<?=$edit['oldprice']?>" type="text" class="text" style="width:50px"/> <?php echo $moneytype; ?>
    </td>
</tr>
<tr>
    <td class="altbg1">�Żݼ۸�:</td>
    <td>
	<input name="nowprice" value="<?=$edit['nowprice']?>" type="text" class="text" style="width:50px"/> <?php echo $moneytype; ?>
    </td>
</tr>
<tr>
    <td class="altbg1">��Ʒ����:<font color="red">*</font></td>
    <td>
        <select name="catid">
	<option value="">==ѡ����Ʒ�����ķ���==</option>
	<?=goods_cat_list(0,$edit['catid'])?>
	</select>
    </td>
</tr>
<tr class="firstr">
	<td colspan="2">Ԥ��ͼƬ</td>
</tr>
<tr>
    <td class="altbg1">��ƷͼƬ:</td>
    <td> 
    <?php
    echo "<img src=".$mymps_global[SiteUrl]."".$edit[pre_picture]." style='_margin-top:expression(( 180 - this.height ) / 2);' />\r\n";
    ?>
    </td>
</tr>
<tr>
    <td class="altbg1">����ͼƬ:</td>
    <td> 
    <input type="file" name="goods_image" size="30" id="litpic" onChange="SeePic(document.picview,document.form1.litpic);">
    </td>
</tr>
<tr>
    <td class="altbg1">Ԥ��:</td>
    <td> 
    <img src="template/images/mpview.gif" width="150" id="picview" name="picview" />
    </td>
</tr>
<tr class="firstr">
	<td colspan="2">������Ϣ</td>
</tr>
<tr>
    <td class="altbg1">������Ʒ:</td>
    <td>
	<input name="gift" value="<?php if($edit['gift'] == ''){echo '����Ʒû��������Ʒ';}else{echo $edit['gift'];}?>" class="text">
    </td>
</tr>
<tr>
    <td class="altbg1">��Դ���:</td>
    <td>
	<input name="huoyuan" type="radio" class="radio" value="1" <?php if($edit['huoyuan'] == 1 || !$id) echo 'checked';?>>�л�
	<input name="huoyuan" type="radio" class="radio" value="2" <?php if($edit['huoyuan'] != 1) echo 'checked';?>>ȱ��
    </td>
</tr>
<tr>
    <td class="altbg1">��Ʒ����:</td>
    <td>
		<input name="rushi" type="checkbox" class="radio" value="1" <?php if($edit['rushi'] == 1 || !$id) echo 'checked';?>>��ʵ����
		<input name="tuihuan" type="checkbox" class="radio" value="1" <?php if($edit['tuihuan'] == 1 || !$id) echo 'checked';?>>�����˻�
		<input name="jiayi" type="checkbox" class="radio" value="1" <?php if($edit['jiayi'] == 1 || !$id) echo 'checked';?>>��һ����
		<input name="weixiu" type="checkbox" class="radio" value="1" <?php if($edit['weixiu'] == 1) echo 'checked';?>>30��ά��
		<input name="fahuo" type="checkbox" class="radio" value="1" <?php if($edit['fahuo'] == 1 || !$id) echo 'checked';?>>���緢��
		<input name="zhengpin" type="checkbox" class="radio" value="1" <?php if($edit['zhengpin'] == 1 || !$id) echo 'checked';?>>��Ʒ����
    </td>
</tr>
<tr>
    <td class="altbg1">��Ʒ״̬:</td>
    <td>
		<input name="onsale" type="checkbox" class="radio" value="1" <?php if($edit['onsale'] == 1) echo 'checked';?>>�ϼ�
		<input name="tuijian" type="checkbox" class="radio" value="1" <?php if($edit['tuijian'] == 1) echo 'checked';?>>�Ƽ�
		<input name="remai" type="checkbox" class="radio" value="1" <?php if($edit['remai'] == 1) echo 'checked';?>>����
		<input name="cuxiao" type="checkbox" class="radio" value="1" <?php if($edit['cuxiao'] == 1) echo 'checked';?>>����
		<input name="baozhang" type="checkbox" class="radio" value="1" <?php if($edit['baozhang'] == 1 || !$id) echo 'checked';?>>���������߱��ϼƻ�
    </td>
</tr>
</table>
<div style="margin-top:3px;"><?php echo $acontent; ?></div>
</div>
<div style="padding-left:18%; padding-top:10px; padding-bottom:10px;">
<input type="submit" name="goods_submit" value="�� ��" class="mymps large" style="margin-right:15px"/>
<input type="button" onclick="history.back();" value="����" class="mymps large" />
</div>
</form>
<?php mymps_admin_tpl_global_foot();?>