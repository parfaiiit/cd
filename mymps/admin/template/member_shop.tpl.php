<?php include mymps_tpl('inc_head');?>
<script language='javascript'>
function checkSubmit()
{
	 if(document.form1.userid.value==""){
	     alert("�û�������Ϊ�գ�");
	     document.form1.userid.focus();
	     return false;
     }
     return true;
}
</script>
<div id="<?=MPS_SOFTNAME?>" style=" padding-bottom:0">
    <div class="mpstopic-category">
        <div class="panel-tab">
            <ul class="clearfix tab-list">
                <? if($part == 'add'){?>
                <li><a href="?part=add" <?php if(!$if_corp){?>class="current"<?php }?>>���Ӹ��˻�Ա</a></li>
                <li><a href="?part=add&if_corp=1" <?php if($if_corp == 1){?>class="current"<?php }?>>�����̼һ�Ա</a></li>
                <? }else{?>
                <li><a href="?if_corp=0" <?php if(!$if_corp){?>class="current"<?php }?>>���˻�Ա</a></li>
                <li><a href="?if_corp=1" <?php if($if_corp == 1){?>class="current"<?php }?>>�̼һ�Ա</a></li>
                <? }?>
            </ul>
        </div>
    </div>
</div>
<div style="display:none;">
<iframe width=0 height=0 src='' id="iframe_area" name="iframe_area"></iframe> 
<iframe width=0 height=0 src='' id="iframe_street" name="iframe_street"></iframe> 
<form method="post" target="iframe_area" id="form_area"></form>
</div>
<form name="form1" action="member.php?do=member&part=<?=$action?>" method="post" onSubmit="return checkSubmit();">
<?if ($part == 'edit'){ ?>
<input type="hidden" name="id" value="<?=$id?>" />
<input type="hidden" name="if_corp" value="1" />
<?} ?>
<input name="reg_corp" value="1" type="hidden"/>
<div id="<?=MPS_SOFTNAME?>">
<table width="100%"  border="0" cellspacing="0" cellpadding="0" class="vbm">
	<tr class="firstr">
		<td colspan="2">�ʺ���Ϣ</td>
	</tr>
     <tr bgcolor="#ffffff">
      <td height="30">�û��ʺţ�</td>
      <td><input name="userid" type="text" class="text" value="<?=$edit[userid]?>"/> <?php if($edit){?>���Ǳ�Ҫ�������޸�<font color="red"><b>�ر�����������ϵͳ���磺ucenter��֮��</b></font>��<?php }?></td>
     </tr>
      <tr bgcolor="#ffffff">
        <td width="16%" height="30">�û�������</td>
        <td width="84%">
        <input name="cname" type="text" class="text" value="<?=$edit[cname]?>"/>
        </td>
      </tr>

    <tr bgcolor="#ffffff">
        <td height="30">�������䣺</td>
        <td>
            <input name="email" type="text" class="text" value="<?=$edit[email]?>"/>
        </td>
    </tr>
    <tr bgcolor="#ffffff">
            <td height="30">�����û���</td>
            <td>
				<?php echo get_member_level($edit[levelid]);?>
                ��<a href="member.php?do=group">�����û���Ȩ��</a>��
		    </td>
        </tr>
    <tr bgcolor="#ffffff">
      <td height="30">��¼���룺</td>
      <td><input name="userpwd" type="text" class="text" /> <?if($part == 'edit'){?>�������޸������ա�<?}?></td>
    </tr>
    <tr class="firstr">
      <td height="30" colspan="2">��ϵ��ʽ</td>
    </tr>
  <tr bgcolor="#ffffff">
    <td>��������</td>
    <td>
		<select name="areaid">
            <?=cat_list('area',0,$edit[areaid])?>
            </select>
	</td>
  </tr>
     <tr bgcolor="#ffffff">
      <td height="30">��ϵ���Ա�</td>
      <td><select name="sex">
        <?php echo get_sex_option($edit['sex']);?>
        </select></td>
     </tr>
 	<tr bgcolor="#ffffff">
      <td height="30">�̶��绰��</td>
      <td><input name="tel" type="text" class="text" value="<?=$edit[tel]?>"/> </td>
     </tr>
 	<tr bgcolor="#ffffff">
      <td height="30">�ƶ��绰��</td>
      <td><input name="mobile" type="text" class="text" value="<?=$edit[mobile]?>"/> </td>
     </tr>
 	<tr bgcolor="#ffffff">
      <td height="30">QQ���룺</td>
      <td><input name="qq" type="text" class="text" value="<?=$edit[qq]?>"/> </td>
     </tr>
 	<tr bgcolor="#ffffff">
      <td height="30">MSN��</td>
      <td><input name="msn" type="text" class="text" value="<?=$edit[msn]?>"/> </td>
     </tr>
 	<tr bgcolor="#ffffff">
      <td height="30">������ַ��</td>
      <td><input name="web" type="text" class="text" value="<?=$edit[web]?>"/> ���� http:// ��ʼ</td>
     </tr>
 	<tr bgcolor="#ffffff">
      <td height="30">��ϸ��ַ��</td>
      <td><input name="address" type="text" class="text" value="<?=$edit[address]?>"/> </td>
     </tr>
 	<tr bgcolor="#ffffff">
      <td height="30">�˳�·�ߣ�</td>
      <td>
      <textarea name="busway" style="height:100px; width:300px"><?=$edit[busway]?></textarea></td>
     </tr>
 	<tr bgcolor="#ffffff">
      <td height="30">��ͼ��ע��</td>
      <td><input id='mappoint' name='mappoint' type='text' maxLength='50' value="<?=$edit['mappoint']?>" class="text"> <input type="button" class="gray mini" value="��Ҫ��ע" onclick="javascript:setbg('��ͼ��ע',500,300,'../map.php?action=markpoint&width=500&height=300')" />
	  </td>
	 </tr>
	<tr class="firstr">
	  <td height="30" colspan="2">������Ϣ</td>
	</tr>
    <tr bgcolor="#ffffff">
      <td height="30">�������֤��֤��</td>
      <td>
      <select name="per_certify">
      	<option value="1" <?php if($edit['per_certify'] == 1) echo 'selected style="background-color:#6EB00C;color:white"';?>>ͨ����֤</option>
        <option value="0" <?php if(empty($edit['per_certify'])) echo 'selected style="background-color:#6EB00C;color:white"';?>>δͨ����֤</option>
      </select></td>
    </tr>
    <tr bgcolor="#ffffff">
      <td height="30">Ӫҵִ����֤��</td>
      <td>
      <select name="com_certify">
      	<option value="1" <?php if($edit['com_certify'] == 1) echo 'selected style="background-color:#6EB00C;color:white"';?>>ͨ����֤</option>
        <option value="0" <?php if(empty($edit['com_certify'])) echo 'selected style="background-color:#6EB00C;color:white"';?>>δͨ����֤</option>
      </select></td>
    </tr>
    <tr bgcolor="#ffffff">
      <td height="30">ӵ�н�ң�</td>
      <td><input name="money_own" type="text" class="txt" value="<?=$edit[money_own]?>"/> <img src="../member/images/mymps_icon_incomes.gif" align="absmiddle"></td>
    </tr>
    <tr bgcolor="#ffffff">
      <td height="30">���֣�</td>
      <td><input name="score" type="text" class="txt" value="<?=$edit[score]?>"/></td>
    </tr>
    <tr bgcolor="#ffffff">
      <td height="30">����ֵ��</td>
      <td><input name="credit" type="text" class="txt" value="<?=$edit[credit]?>"/> 
	  <?php if($edit[credits]){?>
	  <img src="../images/credit/<?=$edit[credits]?>.gif" align="absmiddle">
	  <?} ?>
	  </td>
    </tr>
	<tr class="firstr">
		<td colspan="2">������Ϣ</td>
	</tr>
 	<tr bgcolor="#ffffff">
      <td height="30">�̼�/�������ƣ�</td>
      <td><input name="tname" type="text" class="text" value="<?=$edit[tname]?>"/> </td>
     </tr>
    <tr bgcolor="#ffffff">
        <td height="30">�̼�/�������ͣ�</td>
        <td>
            <?php echo get_member_cat(explode(',',$edit[catid]));?>
        </td>
    </tr>
	<tr bgcolor="#ffffff">
		<td>�ռ�ʹ��ģ��</td>
		<td>
		<select name="template">
		<?=get_shop_tpl($edit['template'],$edit['userid']);?>
		</select>
		</td>
	</tr>
	<tr class="firstr">
		<td colspan="2">�̼�/������飺</td>
	</tr>
</table>
<div style="margin-top:3px;">
	<?=$acontent?>
</div>
</div>
<center><input type="submit" class="mymps mini" value="�� ��">
                ��<input type="button" onClick="location.href='member.php?if_corp=1'"  class="mymps mini" value="�� ��"></center>
</form>
<?php mymps_admin_tpl_global_foot();?>