<?php include mymps_tpl('inc_head');?>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
      <tr class="firstr">
      <td colspan="2">
       ��������
      </td>
      </tr>
      <tr bgcolor="#f5fbff">
        <td>��������Ʒ</td>
        <td bgcolor="white">
        <a href="../goods.php?id=<?php echo $view['goodsid']; ?>" target="_blank"><?php echo $view['goodsname']; ?></a>
        </td>
      </tr>
	  <tr bgcolor="#f5fbff">
        <td>��ʵ����</td>
        <td bgcolor="white">
        <?php echo $view['oname']; ?>
        </td>
      </tr>
      <tr bgcolor="#f5fbff">
        <td>�����绰</td>
        <td bgcolor="white">
        <?php echo $view['tel']; ?>
        </td>
      </tr>
      <tr bgcolor="#f5fbff">
        <td>��ϵ��ַ</td>
        <td bgcolor="white">
        <?php echo $view['address']; ?>
        </td>
      </tr>
      <tr bgcolor="#f5fbff">
        <td>�ֻ�����</td>
        <td bgcolor="white">
        <?php echo $view['mobile']; ?>
        </td>
      </tr>
      <tr bgcolor="#f5fbff">
        <td>QQ</td>
        <td bgcolor="white">
        <?php echo $view['qq']; ?>
        </td>
      </tr>
      <tr bgcolor="#f5fbff">
        <td>��������</td>
        <td bgcolor="white">
        <?php echo $view['ordernum']; ?>
        </td>
      </tr>
      <tr bgcolor="#f5fbff">
        <td>��̸���</td>
        <td bgcolor="white">
        <?php echo $view['msg']; ?>
        </td>
      </tr>
      <tr class="firstr">
      	<td colspan="2">��������</td>
      </tr>
      <tr bgcolor="#f5fbff">
        <td>�µ�ʱ��</td>
        <td bgcolor="white">
        <?php echo GetTime($view['dateline']); ?>
        </td>
      </tr>
      <tr bgcolor="#f5fbff">
        <td>�µ�IP</td>
        <td bgcolor="white">
        <?php echo $view['ip']; ?>
        </td>
      </tr>
</table>
</div>
<center><input type="submit" class="mymps large" value="�� ��" onClick="history.back();"></center>
<?php mymps_admin_tpl_global_foot();?>