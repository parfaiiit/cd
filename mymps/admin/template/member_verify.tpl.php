<?php include mymps_tpl('inc_head');
$admindir = getcwdOL();
?>
<div id="<?=MPS_SOFTNAME?>" style="padding-bottom:0">
	<div class="mpstopic-category">
		<div class="panel-tab">
			<ul class="clearfix tab-list">
                <li><a href="member.php?part=verify&type=person&do_action=default" <? if($type=='person'){?>class="current"<? }?>>���˻�Ա(<?=$count[person]?>)</a></li>
				<li><a href="member.php?part=verify&type=store&do_action=default" <? if($type=='store'){?>class="current"<? }?>>�̼һ�Ա(<?=$count[store]?>)</a></li>
			</ul>
		</div>
	</div>
</div>
<form name='form1' method='post' action='member.php' onSubmit='return checkSubmit();'>
<input type='hidden' name='part' value='verify'/>
<input name="url" type="hidden" value="<?=GetUrl()?>">
<input name="do_act" value="<?=$type?>" type="hidden">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
    <tr class="firstr">
      <td width="30">ѡ��</td>
      <td width="30">���</td>
      <td width="60">����</td>
      <td>�û���</td>
      <? if($type == 'store'){?>
      <td>��ϵ��</td><td>�̶��绰</td><td>��ϵ��ַ</td>
	  <? }else{?>
      <td>��������</td>
	  <? }?>
      <td>ע��ʱ��</td>
      <td>ע��IP</td>
      <td width="30">�༭</td>
    </tr>
    <tbody onmouseover="addMouseEvent(this);">
<?php if(is_array($member)){foreach($member AS $member){
if($admin_id != 1 && $member[userid] == 'admin'){}else{
?>
    <tr align="center" bgcolor="white">
      <td><input type='checkbox' name='id[]' value='<?=$member[id]?>' class='checkbox' id="<?=$member[id]?>"></td>
      <td><?=$member[id]?></td>
      <td><?=$member[if_corp] == 1 ? '�̼�' : '����'?></td>
	  <td><font color="red">[����]</font> <a href="javascript:void(0);" onclick="
setbg('<?=MPS_SOFTNAME?>��Ա����',400,110,'../box.php?part=member&userid=<?=$member[userid]?>&admindir=<?=$admindir?>')"><?php echo $member['if_corp'] ? $member['tname'].'('.$member[userid].')' : $member[userid]; ?></a></td>
	  <? if($type == 'store'){?><td><?=$member[cname]?></td><td><?=$member[tel]?></td><td><font title="<?=$member[address]?>"><?=cutstr($member[address],20)?></font></td><? }else{?>
      <td><?=$member[email]?></td>
	  <? }?>
      <td><em><?=GetTime($member[jointime])?></em></td>
      <td><a href="
javascript:setbg('�鿴IP���ڵ�',400,110,'../box.php?part=iptoarea&ip=<?=$member[joinip]?>&admindir=<?=$admindir?>')" title="����鿴ע���"><?=$member[joinip]=='wap'?'�ֻ���':$member[joinip]?></a></td>
      <td><a href="member.php?part=edit&id=<?=$member[id]?>">����</a></td>
    </tr>
<?php }}}?>
</tbody>
<tr bgcolor="#ffffff" height="28">
    <td style="border-right:1px #fff solid;"><input name="checkall" type="checkbox" id="checkall" onClick="CheckAll(this.form)" class="checkbox"/></td>
    <td colspan="10">
	  <label for="yes"><input type="radio" id="yes" value="yes" name="do_action" checked>ͨ�����</label>
      <? if($type == 'store'){?><label for="no"><input type="radio" id="no" value="no" name="do_action">������</label><? }?>
      <label for="del"><input type="radio" id="del" value="del" name="do_action">ɾ����Ա</label>
    </td>
</tr>
<tr>
<td colspan="10">
<input type="submit" value="�� ��" class="mymps large"/>&nbsp;&nbsp; <? if($type == 'person'){?>
<input class="gray large" onClick="window.location.href='?part=verify&do_action=yes&do_act=allperson'" value="ȫ�����˻�Աͨ�����" type="button"> &nbsp;&nbsp;
<input class="gray large" onClick="window.location.href='?part=verify&do_action=del&do_act=allperson'" value="ɾ��ȫ��������˻�Ա" type="button">
<? }else{?>
<input class="gray large" onClick="window.location.href='?part=verify&do_action=yes&do_act=allstore'" value="ȫ���̼�ͨ�����" type="button"> &nbsp;&nbsp;
<input class="gray large" onClick="window.location.href='?part=verify&do_action=no&do_act=allstore'" value="���ȫ�������̼�" type="button"> &nbsp;&nbsp;
<input class="gray large"  onClick="window.location.href='?part=verify&do_action=del&do_act=allstore'" value="ɾ��ȫ�������̼�" type="button">
<? }?>
</td>
</tr>
</table>
</div>
<div class="pagination"><?=page2()?></div>
</form>
<?php mymps_admin_tpl_global_foot();?>