<?php include mymps_tpl('inc_head');?>

<form name="form1" action="member.php?do=member&part=payupdate" method="post">
<input name="userid" type="hidden" value="<?=$row['userid']?>"/>
<input name="id" type="hidden" value="<?=$id?>"/>
<div id="<?=MPS_SOFTNAME?>">
<table width="100%"  border="0" cellspacing="0" cellpadding="0" class="vbm">
	<tr class="firstr">
    	<td colspan="2">
        ��<?=$row['userid']?>��ֵ���
        </td>
    </tr>
	<tr bgcolor="#ffffff">
        <td class="altbg1" style="width:30%">�û���ţ�</td>
        <td>
            <b><?=$id?></b>
        </td>
    </tr>
    <tr bgcolor="#ffffff">
        <td class="altbg1">�û�����</td>
        <td>
            <b><?=$row['userid']?></b>
        </td>
    </tr>
    <? if($row['tname']){?>
    <tr bgcolor="#ffffff">
        <td class="altbg1">��������</td>
        <td>
            <b><?=$row['tname']?></b>
        </td>
    </tr>
    <? }?>
    <tr bgcolor="#ffffff">
        <td class="altbg1">��ǰ��</td>
        <td>
           <img src="../member/images/mymps_icon_incomes.gif" align="absmiddle"> <b><?=$row['money_own']?></b>
        </td>
    </tr>
    <tr bgcolor="#ffffff">
        <td class="altbg1">��ֵ�����(����д����)��</td>
        <td>
            <input name="paymoney" type="text" class="txt"/>
        </td>
    </tr>
    
</table>
</div>
<center><input type="submit" class="mymps mini" value="�� ��">
<input type="button" onClick="location.href='member.php?if_corp=<?=$row['if_corp']?>'"  class="mymps mini" value="�� ��"></center>
</form>
<div class="clear"></div>
<div class="clear"></div>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
	<tr class="firstr">
    <td colspan="7">
    <?=$row['userid']?>�ĳ�ֵ��¼
    </td>
    </tr>
    <tr style="font-weight:bold;">
      <td>������</td>
      <td>�����</td>
      <td>���</td>
      <td>���ʱ��</td>
      <td>���IP</td>
      <td>��ע</td>
      <td>�ӿ�</td>
    </tr>
    <?php if(!empty($list)){
	foreach($list as $list){
	?>
    <tr bgcolor="white">
        <td><?=$list[orderid]?></td>
        <td><a href="javascript:void(0);" onclick="setbg('<?=MPS_SOFTNAME?>��Ա����',400,110,'../box.php?part=member&userid=<?=$list[userid]?>&admindir=<?=$admindir?>')"><?=$list[userid]?></a></td>
        <td><em><font color="red"><?=$list[money]?></font></em></td>
        <td><?=GetTime($list[posttime])?></td>
        <td align="left"><?=$list[payip]?></td>
        <td align="left"><?=$list[paybz]?></td>
        <td align="left"><?=$list[type]?></td>
    </tr>
    <?php }}else{?>
    <tr bgcolor="white">
    	<td colspan="7">���û����޳�ֵ��¼��</td>
    </tr>
	<?php }?>

</table>
</div>
<?php mymps_admin_tpl_global_foot();?>