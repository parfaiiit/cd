<?php include mymps_tpl('inc_head');?>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
    <tr style="font-weight:bold; background-color:#dff6ff">
      <td style="width:15%">�ӿ�����</td>
      <td style="width:40%">�ӿ�����</td>
      <td>����״̬</td>
      <td>�ӿ�����</td>
      <td>�༭</td>
    </tr>
    <?php foreach($payapi as $k =>$value){?>
        <tr bgcolor="#ffffff">
          <td><b><?=$value[payname]?></b></td>
          <td><em><?=$value[paysay]?></em></td>
          <td><?=$value[isclose] == '0' ? '<font color=green>����</font>' : '<font color=red>�ر�</font>'?></td>
          <td><?=$value[paytype]?></td>
          <td><a href="?payid=<?=$value[payid]?>">����</a></td>
        </tr>
    <?}?>
</table>
</div>
<?php if(!empty($payid)){?>
<form action="?" method="post">
<input type="hidden" name="payid" value="<?=$payid?>">
<input name="return_url" value="<?php echo GetUrl(); ?>" type="hidden" />
<div id="<?=MPS_SOFTNAME?>" style="margin-top:10px; clear:both">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
<tr class="firstr">
<td colspan="2">����֧���ӿ�</td>
</tr>
  <tr bgcolor="#f5fbff">
    <td width="15%" height="25">�ӿ����ͣ�</td>
    <td bgcolor="white">
    <input name="paytype" value="<?=$paydetail[paytype]?>" readonly class="text"/>
    </td>
  </tr>
  <?php if($paydetail[paytype] == 'alipay'){?>
  <tr bgcolor="#f5fbff">
    <td width="15%" height="25">�տ����ͣ�</td>
    <td bgcolor="white">
    <label for="r1"><input type="radio" name="buytype" value="1" id="r1" <?php if($paydetail[buytype] == 1) echo 'checked';?>>��ʱ�����տ�</label>
	<label for="r3"><input type="radio" name="buytype" value="3" id="r3" <?php if($paydetail[buytype] == 3) echo 'checked';?>>���������տ�</label>
    <label for="r2"><input type="radio" name="buytype" value="2" id="r2" <?php if($paydetail[buytype] == 2) echo 'checked';?>>˫�����տ�</label>
    </td>
  </tr>
  <?php }?>
  <tr bgcolor="#f5fbff">
    <td width="15%" height="25">�ӿ����ƣ�</td>
    <td bgcolor="white">
    <input name="payname" value="<?=$paydetail[payname]?>" class="text"/>
    </td>
  </tr>
 
  <tr bgcolor="#f5fbff">
    <td width="15%" height="25">��ͨ����֧����</td>
    <td bgcolor="white">
    <a href="http://www.mymps.com.cn/buy.html" target="_blank" style="color:red;">��ͨ����֧������ >></a>
    </td>
  </tr>
  <tr bgcolor="#f5fbff">
    <td width="15%" height="25">�ӿ�״̬��</td>
    <td bgcolor="white">
    <label for="0"><input name="isclose" type="radio" value="0" class="radio" id="0" <?php if($paydetail['isclose'] == '0') echo 'checked'; ?>/>����</label>
    <label for="1"><input name="isclose" type="radio" value="1" class="radio" id="1" <?php if($paydetail['isclose'] == '1') echo 'checked'; ?>/>�ر�</label>
    </td>
  </tr>
  <tr bgcolor="#f5fbff">
    <td width="15%" height="25">�ӿ�������</td>
    <td bgcolor="white">
    <textarea name="paysay" style="width:320px; height:100px">
    <?=clear_html($paydetail[paysay])?>
    </textarea>
    </td>
  </tr>
</table>
</div>
<center><input type="submit" name="<?=CURSCRIPT?>_submit" value="�� ��" class="mymps large"/></center>
  </form>
<?php }?>
<?php mymps_admin_tpl_global_foot();?>