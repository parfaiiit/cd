<?php include mymps_tpl('inc_head');?>
<script language="javascript" src="js/vbm.js"></script>
<script language="javascript">
function check_sub(){
	if (document.form1.title.value=="") {
		alert('����д�Ż�ȯ����');
		document.form1.title.focus();
		return false;
	}
	if (document.form1.userid.value=="") {
		alert('����д�����̼һ�Ա�û���');
		document.form1.userid.focus();
		return false;
	}
	if (document.form1.des.value=="") {
		alert('����д���˵����');
		document.form1.des.focus();
		return false;
	}
	return true;
}
</script>
<style>
.vbm tr{ background:#ffffff}
.altbg1{ background-color:#f1f5f8}
</style>
<form action="?part=edit&id=<?=$id?>" method="post" enctype="multipart/form-data" name="form1" onSubmit="return check_sub();">
<input name="pre_picture" value="<?=$edit['pre_picture']?>" type="hidden">
<input name="picture" value="<?=$edit['picture']?>" type="hidden">
<div id="<?=MPS_SOFTNAME?>">
<table width="100%" cellspacing="0" cellpadding="0" class="vbm">
<tr class="firstr">
	<td colspan="2">������Ϣ</td>
</tr>
<tr>
    <td class="altbg1">�Ż�ȯ����:<font color="red">*</font></td>
    <td>
        <input type="text" name="title" value="<?=$edit['title']?>" class="text" />
    </td>
</tr>
<tr>
    <td class="altbg1" width="15%">�����̼�:<font color="red">*</font></td>
    <td width="75%">
        <input type="text" name="userid" id="userid" value="<?=$edit['userid']?>" class="text" style="background-color:#eee"/> <font color=red>�Ǳ�Ҫ�������޸�</font>
    </td>
</tr>
<tr>
    <td class="altbg1">�Ż�ȯ����:<font color="red">*</font></td>
    <td>
        <?php echo get_couponclass_select('cate_id',$edit['cate_id']); ?>
    </td>
</tr>
<tr>
    <td class="altbg1">��������:<font color="red">*</font></td>
    <td>
        <select name="areaid">
        <?=cat_list('area',0,$edit['areaid'])?>
        </select>
    </td>
</tr>
<tr>
    <td class="altbg1">��Ч��:</td>
    <td><input type="text" name="begindate" value="<?=$begindate?>" class="text" style="width:80px"/> - <input type="text" name="enddate" value="<?=$enddate?>" class="text" style="width:80px" />&nbsp;(YYYY-MM-DD)</td>
</tr>
<tr>
    <td class="altbg1">�Ż�˵��:<font color="red">*</font></td>
    <td><textarea name="des" style="height:60px; width:500px;"><?=de_textarea_post_change($edit['des'])?></textarea></td>
</tr>
<tr>
    <td class="altbg1">�Ż�ȯ����:</td>
    <td>
         <label for="1"><input name="ctype" type="radio" id="1" onclick='$("sup").style.display = "";' class="radio" <?php if($edit['ctype'] == '�ۿ�ȯ' || empty($edit['ctype'])) echo 'checked'; ?>>�ۿ�ȯ</label> <label for="2"><input name="ctype" class="radio" onclick='$("sup").style.display = "none";' value="2" id="2" type="radio" <?php if($edit['ctype'] == '�ּ�ȯ') echo 'checked'; ?>>�ּ�ȯ</label>
    </td>
</tr>
<tr id="sup" <?php if($edit['sup'] == '�ּ�ȯ') echo 'style="display:none"'?>>
	<td class="altbg1">�ۿ�</td>
    <td><input name="sup" class="txt" value="<?=$edit['sup']?>"> ��</td>
</tr>
<tr>
    <td class="altbg1">����:</td>
    <td>
        <input type="radio" name="status" value="1" id="radio_status_1"  checked="checked" class="radio"/><label for="radio_status_1">����</label>&nbsp;<input type="radio" name="status" value="2" id="radio_status_2" class="radio"/><label for="radio_status_2">ʧЧ</label>                </td>
</tr>
<tr>
	<td class="altbg1">״̬</td>
    <td>
    <select name="grade">
    	<option value="0" <?php if($edit['grade'] == 0) echo 'selected style=\'background-color:#6eb00c; color:white!important;\''; ?>>����</option>
        <option value="1" <?php if($edit['grade'] == 1) echo 'selected style=\'background-color:#6eb00c; color:white!important;\''; ?>>����</option>
        <option value="2" <?php if($edit['grade'] == 2) echo 'selected style=\'background-color:#6eb00c; color:white!important;\''; ?>>�Ƽ�</option>
    </select>
    </td>
</tr>
<tr class="firstr">
	<td colspan="2">Ԥ��ͼƬ</td>
</tr>
<tr>
    <td class="altbg1">�Ż�ȯͼƬ:</td>
    <td> 
    <?php
    echo "<img src=".$mymps_global[SiteUrl]."".$edit[pre_picture]." style='_margin-top:expression(( 180 - this.height ) / 2);' />\r\n";
    ?>
    </td>
</tr>
<tr>
    <td class="altbg1">����ͼƬ:</td>
    <td> 
    <input type="file" name="coupon_image" size="30" id="litpic" onChange="SeePic(document.picview,document.form1.litpic);">
    </td>
</tr>
<tr>
    <td class="altbg1">Ԥ��:</td>
    <td> 
    <img src="template/images/mpview.gif" width="150" id="picview" name="picview" />
    </td>
</tr>
</table>
<div style="margin-top:3px;">
<?php echo $acontent; ?>
</div>
</div>
<center><input type="submit" name="coupon_submit" value="�� ��" class="mymps large" /></center>
</form>
<?php mymps_admin_tpl_global_foot();?>