<?php include mymps_tpl('inc_head');?>
<div id="<?=MPS_SOFTNAME?>" style="padding-bottom:0">
<div class="mpstopic-category">
	<div class="panel-tab">
		<ul class="clearfix tab-list">
		<li><a href="score.php" class="current">������������</a></li>
		<li><a href="credit.php">����ֵ��������</a></li>
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
 <li>�۳�����ǰ��ӡ�-������۳�1���������д��-1�� </li>
 <li>��������ǰ��ӡ�+����������1���������д��+1�� </li>
 <li>���еĻ��ֲ��������������������֮������֤���ӻ��֣���Ҫ��̨���ͨ����Ż����� </li>
    </td>
  </tr>
</table>
</div>
<form action="?" method="post">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
  <tr class="firstr">
  	<td colspan="2">��Ա�������ù���</td>
  </tr>
 <tr bgcolor="#f1f5f8">
 <td style="width:35%; line-height:22px">ע��ɹ�</td>
 <td bgcolor="#ffffff"><input name="score_new[rank][register]" value="<?php echo $score[rank]['register']?>" class="txt"/>
 <i> ��ʼֵ:<font color="red">+10</font></i></td>
 </tr>
 <tr bgcolor="#f1f5f8">
 <td style="width:35%; line-height:22px">��¼ǩ��</td>
 <td bgcolor="#ffffff"><input name="score_new[rank][login]" value="<?php echo $score[rank]['login']?>" class="txt"/>
 <i> ��ʼֵ:<font color="red">+2</font></i></td>
 </tr>
 <tr bgcolor="#f1f5f8">
 <td style="width:35%; line-height:22px">����������Ϣ</td>
 <td bgcolor="#ffffff"><input name="score_new[rank][information]" value="<?php echo $score[rank]['information']?>" class="txt"/>
 <i> ��ʼֵ:<font color="red">+2</font></i></td>
 </tr>
 <tr bgcolor="#f1f5f8">
 <td style="width:35%; line-height:22px">�����Ż�ȯ</td>
 <td bgcolor="#ffffff"><input name="score_new[rank][coupon]" value="<?php echo $score[rank]['coupon']?>" class="txt"/>
 <i> ��ʼֵ:<font color="red">+2</font></i></td>
 </tr>
 <tr bgcolor="#f1f5f8">
 <td style="width:35%; line-height:22px">�����Ź�</td>
 <td bgcolor="#ffffff"><input name="score_new[rank][group]" value="<?php echo $score[rank]['group']?>" class="txt"/>
 <i> ��ʼֵ:<font color="red">+2</font></i></td>
 </tr>
 <tr bgcolor="#f1f5f8">
 <td style="width:35%; line-height:22px">������Ʒ</td>
 <td bgcolor="#ffffff"><input name="score_new[rank][goods]" value="<?php echo $score[rank]['goods']?>" class="txt"/>
 <i> ��ʼֵ:<font color="red">+2</font></i></td>
 </tr>
  <tr bgcolor="#f1f5f8">
 <td style="width:35%; line-height:22px">Ӫҵִ����֤</td>
 <td bgcolor="#ffffff"><input name="score_new[rank][com_certify]" value="<?php echo $score[rank]['com_certify']?>" class="txt"/>
 <i> ��ʼֵ:<font color="red">+10</font></i></td>
 </tr>
  <tr bgcolor="#f1f5f8">
 <td style="width:35%; line-height:22px">�������֤��֤</td>
 <td bgcolor="#ffffff"><input name="score_new[rank][per_certify]" value="<?php echo $score[rank]['per_certify']?>" class="txt"/>
 <i> ��ʼֵ:<font color="red">+10</font></i></td>
 </tr>
</table>
</div>
<center><input name="seoset_submit" value="�� ��" class="mymps large" type="submit"/></center>
</form>
<?php mymps_admin_tpl_global_foot();?>