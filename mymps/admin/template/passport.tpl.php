<?php include mymps_tpl('inc_head');?>
<style>
.ttip{ color:#666; margin-top:5px; text-align:left}
</style>
<div id="<?=MPS_SOFTNAME?>" style="padding-bottom:0">
<div class="mpstopic-category">
	<div class="panel-tab">
		<ul class="clearfix tab-list">
			<li><a href="?part=bbs" <?php if($part == 'bbs'){?>class="current"<?php }?>>论坛整合</a></li>
		</ul>
	</div>
</div>
</div>

<form method="post" action="?">
<input name="part" value="<?=$part?>" type="hidden">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
<tr class="firstr"><td colspan="2">配置<?php echo $here; ?></td></tr>
<tr bgcolor="#ffffff" style="font-weight:bold">
<td width="25%" style=" text-align:right;">
选择整合服务:  &nbsp;&nbsp;
</td>
<td>
<label for="none"><input name="passport_type" type="radio" class="radio" id="none" value="none" onclick='$obj("uc_div").style.display = "none";' <?php if($selected == 'none'){echo 'checked';}?>>不整合第三方论坛</label> 
<label for="ucenter"><input class="radio" name="passport_type" type="radio" id="ucenter" value="ucenter" onclick='$obj("uc_div").style.display = "";$obj("client").innerHTML=$obj("server").innerHTML="ucenter";' <?php if($selected == 'ucenter'){echo 'checked';}?>>整合ucenter1.6</label>
<label for="phpwind"><input class="radio" name="passport_type" type="radio" id="phpwind" value="phpwind" onclick='$obj("uc_div").style.display = "";$obj("client").innerHTML=$obj("server").innerHTML="phpwind";' <?php if($selected == 'phpwind'){echo 'checked';}?>>整合phpwind 8.x</label>
</td>
</tr>
<tbody id="uc_div" <?php if($selected == 'none'){echo 'style="display:none"';}?>>
<tr style="background-color:#f1f5f8;">
  <td height=25 style="text-align:right"><b><span id="client"><?php echo $selected; ?></span>应用设置：</b></td>
  <td>&nbsp;</td>
</tr>
<tr bgcolor=#FFFFFF>
  <td height="25" style="text-align:right">服务端API URL：</td>
  <td><input name="ucsettings[uc_api]" type=text id="uc_api" value="<?=$ucsettings[uc_api]?>" class="text">
  <font color="red"> *</font></td>
</tr>
<tr bgcolor=#FFFFFF>
  <td height=25><div align="right">通信密钥：</div>
  </td>
  <td><input name="ucsettings[uc_key]" type=text id="uc_key" value="<?=$ucsettings[uc_key]?>" class="text">
    <font color="red"> *</font></td>
</tr>
<tr bgcolor=#FFFFFF>
	<td height=25><div align="right">ucenter和mymps在：</div></td>
    <td>      
    <select name="ucsettings[uc_connect]">
        <option value="mysql" selected="selected"> 同一服务器 </option>
		<option value="NULL" selected="selected"> 不同服务器 </option>
    </select>
    <font color="red">*</font>    </td>
</tr>
<tr bgcolor=#FFFFFF>
  <td height=25><div align="right">本地客户端应用ID：</div></td>
  <td><input name="ucsettings[uc_appid]" type=text id="uc_appid" value="<?=$ucsettings[uc_appid]?>" class="text"> <font color="red">*</font></td>
</tr>
<tr bgcolor=#FFFFFF>
  <td height=25><div align="right">本地客户端IP：</div>
  </td>
  <td><input name="ucsettings[uc_ip]" type=text id="uc_ip" value="<?=$ucsettings[uc_ip]?>" class="text"></td>
</tr>
<tr style="background-color:#f1f5f8;">
  <td height=25 style="text-align:right"><b><span id="server"><?php echo $selected; ?></span>数据库参数设置：</b></td>
  <td>&nbsp;</td>
</tr>
<tr bgcolor=#FFFFFF>
  <td height=25><div align="right">数据库主机名：</div>
    </td>
  <td><input name="ucsettings[uc_dbhost]" type=text id="uc_dbhost" value="<?=$ucsettings[uc_dbhost]?>" class="text">
    <font color="red">*</font><div class="ttip"></div></td>
</tr>
<tr bgcolor=#FFFFFF>
  <td height=25><div align="right">数据库名：</div></td>
  <td><input name="ucsettings[uc_dbname]" type=text id="uc_dbname" value="<?=$ucsettings[uc_dbname]?>" class="text">
    <font color="red">*</font></td>
</tr>
<tr bgcolor=#FFFFFF>
  <td height=25><div align="right">数据库用户名：</div></td>
  <td><input name="ucsettings[uc_dbuser]" type=text id="uc_dbuser" value="<?=$ucsettings[uc_dbuser]?>" class="text">
    <font color="red">*</font></td>
</tr>
<tr bgcolor=#FFFFFF>
  <td height=25><div align="right">数据库密码：</div></td>
  <td><input name="ucsettings[uc_dbpwd]" type=password id="uc_dbpwd" value="<?=$ucsettings[uc_dbpwd]?>" class="text">
    <font color="red">*</font></td>
</tr>
<tr bgcolor=#FFFFFF>
  <td height=25><div align="right">数据表前缀：</div></td>
  <td><input name="ucsettings[uc_dbpre]" type=text id="uc_dbpre" value="<?=$ucsettings[uc_dbpre]?>" class="text">
    <font color="red">*</font>
</tr>
<tr bgcolor=#FFFFFF>
  <td height=25><div align="right">论坛的字符编码：</div></td>
  <td><input name="ucsettings[uc_charset]" type=text id="uc_charset" value="<?=$ucsettings[uc_charset]?>" class="text">
    <font color="red">*</font></td>
</tr>
<tr bgcolor=#FFFFFF>
  <td height=25><div align="right">论坛数据库字符编码：</div></td>
  <td><input name="ucsettings[uc_dbcharset]" type=text id="uc_dbcharset" value="<?=$ucsettings[uc_dbcharset]?>" class="text">
    <font color="red">*</font></td>
</tr>
</tbody>
</table>
</div>
<center><input type="submit" value="提 交" class="mymps large" name="passport_submit"/>  </center>
</form>
<?php mymps_admin_tpl_global_foot();?>