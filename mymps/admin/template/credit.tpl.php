<?php include mymps_tpl('inc_head');?>
<div id="<?=MPS_SOFTNAME?>" style="padding-bottom:0">
<div class="mpstopic-category">
	<div class="panel-tab">
		<ul class="clearfix tab-list">
		<li><a href="score.php">������������</a></li>
		<li><a href="credit.php" class="current">����ֵ��������</a></li>
		<li><a href="credit_set.php">���õȼ�����</a></li>
		</ul>
	</div>
</div>
</div>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
  <tr class="firstr">
  	<td colspan="2">���˵��</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td id="menu_tip">
 <li>�۳�����ǰ��ӡ�-������۳�1������ֵ����д��-1�� </li>
 <li>��������ǰ��ӡ�+����������1������ֵ����д��+1�� </li>
    </td>
  </tr>
</table>
</div>
<form action="?" method="post">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
  <tr class="firstr">
  	<td colspan="2">����ֵ��������</td>
  </tr>
 <tr bgcolor="#f1f5f8">
 <td style="width:35%; line-height:22px">ͨ��Ӫҵִ����֤������ֵ�仯</td>
 <td bgcolor="#ffffff"><input name="credit_new[rank][com_certify]" value="<?php echo $credit[rank]['com_certify']?>" class="txt"/> <i> ��ʼֵ:<font color="red">+50</font></i></td>
 </tr>
 <tr bgcolor="#f1f5f8">
 <td style="width:35%; line-height:22px">ͨ�����֤��֤������ֵ�仯</td>
 <td bgcolor="#ffffff"><input name="credit_new[rank][per_certify]" value="<?php echo $credit[rank]['per_certify']?>" class="txt"/> <i> ��ʼֵ:<font color="red">+50</font></i></td>
 </tr>
  <tr class="firstr">
  	<td colspan="2">����ֵ��������</td>
  </tr>
 <tr bgcolor="#f1f5f8">
 <td style="width:35%; line-height:22px">����1����ң�����ֵ�仯</td>
 <td bgcolor="#ffffff"><input name="credit_new[rank][coin_credit]" value="<?php echo $credit[rank]['coin_credit']?>" class="txt"/> <i> ��ʼֵ:<font color="red">+10</font></i></td>
 </tr>
</table>
</div>
<center><input name="seoset_submit" value="�� ��" class="mymps large" type="submit"/></center>
</form>
<?php mymps_admin_tpl_global_foot();?>