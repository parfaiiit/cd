<?php include mymps_tpl('inc_head');?>
<style>
label{float:left; display:block; height:20px;}
</style>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
<form name="form1" action="member.php?do=group&part=update" onSubmit="return checkSubmit();" method="post">
<input type="hidden" name="id" value="<?=$group[id]?>">
  <tr class="firstr">
  <td colspan="4">��Ա�û����������</td>
  </tr>
  <tr bgcolor="#f5fbff">
    <td width="80" height="30">�û������ƣ�</td>
    <td ><input name="levelname" type="text" class="text" id="levelname" size="16" style="width:200px;" value="<?=$group[levelname]?>" /></td>
  </tr>
  <tr class="firstr">
  <td colspan="4">�û���Ȩ������</td>
  </tr>
  <?=mymps_member_purview($purviews)?>
  <tr class="firstr">
  <td colspan="4">��������</td>
  </tr>
  <?php if($id == '1'){?>
  <tr bgcolor="#f5fbff">
    <td height="30">Ĭ��ӵ�н����</td>
    <td ><input name="money_own" type="text" class="txt" value="<?=$group['money_own']?>"/> <img src="../member/images/mymps_icon_incomes.gif" align="absmiddle"> </td>
  </tr>
  <?php }?>
  <tr bgcolor="#f5fbff">
    <td height="30">��ѡ��Ļ�Աģ��<br />
<font color="#006acd">��ֻ���̼һ�Ա��Ч��</font></td>
    <td>
    <select name="allow_tpl[]" multiple="multiple" style="width:100px; height:80px">
    <?=get_memtpl_options($group['allow_tpl'])?>
    </select>
    </td>
  </tr>
  <tr bgcolor="#f5fbff">
    <td height="30">ÿ�����෢����Ϣ</td>
    <td ><input name="perday_maxpost" type="text" class="text" size="16" style="width:200px;" value="<?=$group['perday_maxpost']?>"/></td>
  </tr>
  <?php if($group['id'] > 1) {?>
  <tr bgcolor="#f5fbff">
    <td height="30">��������ǰ��Ա��۳����<br /><font color="red">(������Ҫѡ������һ����������)</font></td>
    <td >
    <?php foreach(array('month'=>'һ����','halfyear'=>'����','year'=>'һ��','forever'=>'����') as $k => $v){?>
    <div style="width:100%; margin:5px auto; line-height:25px">
<input name="settings[ifopen][<?php echo $k; ?>]" type="checkbox" class="checkbox" value="1" <?php if($settings['ifopen'][$k] == 1){?>checked="checked"<?php }?>>���� <img src="../member/images/mymps_icon_incomes.gif" align="absmiddle"> <input name="settings[money][<?php echo $k; ?>]" class="txt" value="<?php echo $settings['money'][$k]?>"> <?php echo $v; ?>
    </div>
    <?php }?>
   </td>
  </tr>
  <?php }?>
  <tr bgcolor="#f5fbff">
    <td height="30">��Ա����ϵ��ʽ��ʾ<br />
<font color="#006acd">��ֻ���̼һ�Ա��Ч��</font></td>
    <td><select name="member_contact">
    	<option value="0" <?php if($group['member_contact'] == 0) echo 'selected style="background-color:#6EB00C;color:white"';?>>��ʾΪ��վ����ϵ��ʽ</option>
        <option value="1" <?php if($group['member_contact'] == 1) echo 'selected style="background-color:#6EB00C;color:white"';?>>��ʾΪ��Ա�Լ�����ϵ��ʽ</option>
        </select></td>
  </tr>
  <tr bgcolor="#f5fbff">
    <td height="60">&nbsp;</td>
    <td>
    <input type="submit" name="Submit" class="mymps mini" value="ȷ���ύ"/>
    ��<input type="button" onClick=history.back() class="mymps mini" value="�� ��">           </td>
  </tr>  
    </form>
    </table>
</div>
<?php mymps_admin_tpl_global_foot();?>