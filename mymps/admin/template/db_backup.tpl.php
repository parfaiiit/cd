<?php include mymps_tpl('inc_head');?>
<script language="javascript" src="js/vbm.js"></script>
<script language="javascript">
function hide_backup_type(){
	var jumpTest = $Obj('isjump');
	var jtr = $Obj('redirecturltr');
	if(jumpTest.checked){
		jtr.style.display = "";
	} else {
		jtr.style.display = "none";
	}
}
ifcheck = false;
</script>
<style>
.dblist{ line-height:25px;}
.dblist li{ float:left; display:block; width:200px}
</style>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
  <tr class="firstr">
  	<td colspan="2">������ʾ</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td id="menu_tip">
      <li style="color:#FF6600;">����������Ŀ¼Ϊ <font color="#006acd"><b><? echo $mymps_global[cfg_backup_dir]?></b></font></li>
      <li>���ݱ��ݹ��ܸ�������ѡ�񱸷�ȫ��������Ϣ���������ݣ������������ļ����á����ݻ�ԭ������</li>
      <li>���ݱ���ѡ���е����ã������߼��û���������;ʹ�ã�������δ�����ݿ���ȫ��ϸ�µ��˽�֮ǰ����ʹ��Ĭ�ϲ������ݣ����򽫵��±������ݴ�����������⡣
      </li>
      <li>ʮ�����Ʒ�ʽ���Ա�֤�������ݵ������ԣ����Ǳ����ļ���ռ�ø���Ŀռ䡣
      </li>
      <li>ѹ�������ļ����������ı����ļ�ռ�ø�С�Ŀռ䡣
      </li>
    </td>
  </tr>
</table>
</div>
<form action="?part=backup&setup=1" method="post">
<input name="action" value="doaction" type="hidden">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
    <tr class="firstr">
    <td colspan="2">���ݱ�������</td>
    </tr>
    <tr bgcolor="#ffffff">
      <td width="100" class="bd_txt">���ݿ�</td>
      <td>
		<label for="mymps"><input id="mymps" name="type" type="radio" class="radio" value="mymps" checked="checked" onClick="hide_backup_type()"> Mympsȫ������</label>
      </td>
      </tr>
    <tr bgcolor="#ffffff">
      <td width="56" class="bd_txt">&nbsp;</td>
      <td>
<label for="isjump"><input name="type" type="radio" class="radio" value="custom" id="isjump" onClick="hide_backup_type()"> �Զ��屸��</label>
</td>
    </tr>
	<tr bgcolor="#ffffff" id="redirecturltr" style="display:none">
    	<td>
         <input class="checkbox" name="chkall" onclick="CheckAll(this.form)" checked="checked" type="checkbox" id="chkalltables" /><label for="chkalltables"> ȫѡ</label>
        </td>
        <td>
        <ul class="dblist" onmouseover="altStyle(this);">
        <?php foreach($mymps_tables as $key => $val){?>
        <li><label for="list_<?php echo $val['Name'];?>"><input type="checkbox" name="customtables[]" value="<?php echo $val['Name'];?>" class="checkbox" checked="checked" id="list_<?php echo $val['Name'];?>"/> <?php echo $val['Name'];?></label></li>
        <?php }?>
        </ul>
        </td>
     </tr>
    <tr class="firstr">
      <td class="bd_txt" colspan="2">���ݱ���ѡ��</td>
    </tr>
	<tr bgcolor="#ffffff">
    	<td>��������ʽ</td>
        <td>
<input class="radio" type="radio" name="sqlcompat" value="" checked>&nbsp;Ĭ��<br />
<input class="radio" type="radio" name="sqlcompat" value="MYSQL40">&nbsp;MySQL 3.23/4.0.x<br />
<input class="radio" type="radio" name="sqlcompat" value="MYSQL41">&nbsp;MySQL 4.1.x/5.x</td>
    </tr>
    <tr bgcolor="#ffffff">
    	<td>ǿ���ַ���</td>
        <td>
<input class="radio" type="radio" name="sqlcharset" value="" checked="checked">&nbsp;Ĭ��<br />
<input class="radio" type="radio" name="sqlcharset" value="gbk">&nbsp;GBK<br />
<input class="radio" type="radio" name="sqlcharset" value="utf8">&nbsp;UTF-8</td>
    </tr>
    <tr bgcolor="#ffffff">
    	<td>ʮ�����Ʒ�ʽ</td>
        <td>
<input class="radio" type="radio" name="extendins" value="1" >&nbsp;��<br />
<input class="radio" type="radio" name="extendins" value="0" checked>&nbsp;��</td>
    </tr>
    <tr bgcolor="#ffffff">
    	<td>�����ļ���</td>
        <td><input type="text" class="text" name="filename" value="<?php echo $defaultfilename; ?>" />.sql</td>
    </tr>
    <tr bgcolor="#ffffff">
    	<td>�����ļ���������</td>
        <td><input type="text" class="txt" name="sizelimit" value="4096" />KB</td>
    </tr>
</table>
</div>
<center><input type="submit" name="backup_submit" value="�� ��" class="mymps large"/></center>
</form>
<?php mymps_admin_tpl_global_foot();?>