<?php include mymps_tpl('inc_head');?>
<div id="<?=MPS_SOFTNAME?>" style="padding-bottom:0">
	<div class="mpstopic-category">
		<div class="panel-tab">
			<ul class="clearfix tab-list">
			<li><a href="score.php">������������</a></li>
			<li><a href="credit.php">����ֵ��������</a></li>
			<li><a href="credit_set.php" class="current">���õȼ�����</a></li>
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
 		<li>�������޸� /images/credit Ŀ¼�µ�ͼƬ������ʺ��Լ�վ�����ͼ��</li>
    </td>
  </tr>
</table>
</div>
<div id="<?=MPS_SOFTNAME?>" style="margin-top:10px;">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
  <tr class="firstr">
  	<td colspan="2">ʵʱ���»�Ա����ֵ����</td>
  </tr>
 <tr bgcolor="#ffffff">
    	<td> 
        <li><input type="button" class="gray mini" onclick="location.href='?ac=update_credits';this.disabled='true'" value="���»�Ա����ͼ��"></li>
        </td>
        <td><div style="color:#333">
			1�������޸����������ö����ú���վ�Ļ�Ա���õȼ�ͼ�겻������Ӧ�ã����������»�Ա����ͼ�ꡱ
<br />
2�����������վ��Ա�ܶ࣬�ò�����ʱ���ܻ�ϳ�
<br />
3�����û�и������»����������ã��������������ͼ��
		</div></td>
    </tr>
</table>
</div>
<form action="?" method="post">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
<tr class="firstr"><td colspan="5">���õȼ�</td></tr> 
<tr bgcolor="#f5f8ff" style="font-weight:bold"><td>���õȼ�</td><td>���öȴ���</td><td>���ö�С��</td><td>�ȼ�ͼ��</td></tr> 
<?php for($i=1;$i<16;$i++){?>
<tr align="center" bgcolor="white"><td><?php echo $i; ?></td><td><input type="text" class="txt" name="credit_setnew[rank][<?php echo $i; ?>]" value="<?php echo $credit_set[rank][$i]?>"></td><td><?php echo $credit_set[rank][$i+1]?>&nbsp;</td><td><img src="../images/credit/<?php echo $i; ?>.gif" border="0"></td> 
<?php }?>
</table>
</div>
<center><input name="seoset_submit" value="�� ��" class="mymps large" type="submit"/></center>
</form>
<?php mymps_admin_tpl_global_foot();?>