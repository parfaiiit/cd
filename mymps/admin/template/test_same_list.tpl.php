<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv='Content-Type' content='text/html; charset=gbk'>
<title><?=$here?>  - powered by <?=MPS_SOFTNAME?></title>
<link href='template/css/<?=MPS_SOFTNAME?>.css' rel='stylesheet' type='text/css'>
<script type='text/javascript' src='../template/global/mymps.js'></script>
<script type='text/javascript' src='../template/global/noerr.js'></script>
</head>

<body>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
<form name="form1" action="test_same.php?" method="post">
<input name="part" value="do_action" type="hidden">
<input type='hidden' name='pagesize' value='<?=$pagesize?>' />
<input name="deltype" value="<?=$deltype?>" type="hidden" />
  <tr class="firstr">
    <td width="10%"> <input name="chkall" type="checkbox" onclick="AllCheck('prefix', this.form, 'infoTitles')" class="checkbox"/></td>
    <td width="10%"> �ظ����� </td>
    <td> ��Ϣ���� </td>
  </tr>
 <?php
 while($row = $db->fetchRow($query))
 {
	 if($row['dd']==1 ) break;
 ?>
   <tr bgcolor="#FFFFFF" height="24" onMouseMove="javascript:this.bgColor='#EFEFEF';" onMouseOut="javascript:this.bgColor='#FFFFFF';">
    <td>
      <input name="infoTitles[]" type="checkbox" value="<?php echo urlencode($row['title'])?>" class="checkbox" />
    </td>
    <td>
	<?php
     $allinfo += $row['dd'];
     echo $row['dd'];
    ?>
	</td>
    <td><a href="information.php?keywords=<?php echo $row['title']; ?>&show=title"><?php echo $row['title']; ?></a></td>
  </tr>
  <?php }?>
  <tr bgcolor="#E5F9FF">
   <td height="28" colspan="3" bgcolor="#F8FBFB">
     <input class="gray mini" value="ɾ���ظ���Ϣ" type="submit" name="<?php echo CURSCRIPT; ?>_submit">
      (���� <font color="red"><?php echo $allinfo; ?></font> ƪ�ظ�����ķ�����Ϣ���⣡)<br /><br />&nbsp;&nbsp;��
ֻ<?php echo $deltype == 'delnew' ? '���������һ��' : '���������һ��'?>
   </td>
 </tr>
</form>
</table>
</div>
</body>
</html>
