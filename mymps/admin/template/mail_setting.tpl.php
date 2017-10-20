<?php include mymps_tpl('inc_head');?>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
  <tr class="firstr">
  	<td colspan="2">技巧提示</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td id="menu_tip">
  <li>如果你的服务器支持mail函数（具体信息请咨询你的空间提供商），我们建议你使用系统的mail函数</li>
  <li>当您的服务器不支持mail函数的时候，您也可以选择SMTP作为邮件服务器。</li>
    </td>
  </tr>
</table>
</div>
<form method="post" action="mail.php?part=<?=$part?>">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
<tr class="firstr"><td colspan="2">配置邮件服务器设置</td></tr>
<tr bgcolor="#ffffff">
<td width="25%">
邮件服务:  &nbsp;&nbsp;
</td>
<td>
<label for="mail"><input name="mail_service" type="radio" class="radio" id="mail" value="mail" onclick='document.getElementById("smtp_div").style.display = "none";document.getElementById("mail_div").style.display = "";' <?php if($mail_config[mail_service] != 'smtp'){?>checked="checked"<?}?>>采用服务器内置的mail服务</label> 
<label for="smtp"><input class="radio" name="mail_service" type="radio" id="smtp" value="smtp" onclick='document.getElementById("smtp_div").style.display = "";document.getElementById("mail_div").style.display = "none";' <?php if($mail_config[mail_service] == 'smtp'){?>checked="checked"<?}?>>采用其他的SMTP服务</label>
<label for="no"><input class="radio" name="mail_service" type="radio" id="no" value="no" onclick='document.getElementById("smtp_div").style.display = "none";document.getElementById("mail_div").style.display = "none";' <?php if($mail_config[mail_service] == 'no'){?>checked="checked"<?}?>>不采用邮件服务</label>
</td>
</tr>
<tbody id="smtp_div" <?php if($mail_config[mail_service] != 'smtp'){?> style="display:none"<?}?>>
</tbody>
</table>
</div>
<center><input type="submit" value="提 交" class="mymps large" name="mail_submit"/>  </center>
</form>
<div class="clear" style="height:10px;"></div>
<form method="post" action="mail.php?part=<?=$part?>">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
<tr class="firstr"><td colspan="2">测试邮件发送</td></tr>
<tr bgcolor="#ffffff">
<td width="25%">
对方邮件地址
</td>
<td><input class="text" type="text" name="test_mail" value=""></td>
</tr>
</table>
</div>
<center><input type="submit" value="提 交" class="mymps large" name="mail_submit"/>  </center>
</form>
<?php mymps_admin_tpl_global_foot();?>