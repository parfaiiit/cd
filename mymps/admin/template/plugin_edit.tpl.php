<?php include mymps_tpl('inc_head');?>
<form action="plugin.php" method="post" name="form1">
<input name="op" value="edit" type="hidden">
<input name="id" value="<?=$id?>" type="hidden">
<div id="<?=MPS_SOFTNAME?>">
<table width="100%" cellspacing="0" cellpadding="0" class="vbm">
      <tr class="firstr">
        <td colspan="5">
       		������� - <?php echo $edit['name']; ?>
        </td>
      </tr>
      <tbody id="menu_1">
	  <tr bgcolor="#f5fbff">
        <td width="19%" height="25">�������</td>
        <td><input name="name" value="<?php echo $edit[name]?>" class="text" type="text"></td>
      </tr>
      <tr bgcolor="#f5fbff">
        <td height="25">�����ʶ</td>
        <td><?php echo $edit['flag']; ?></td>
      </tr>
      <tr bgcolor="#f5fbff">
        <td height="25">���Ŀ¼</td>
        <td>/plugin/<?php echo $edit['directory']; ?></td>
      </tr>
      <tr bgcolor="#f5fbff">
        <td width="19%" height="25">�汾</td>
        <td><?php echo $edit['version']; ?></td>
      </tr>
      <tr bgcolor="#f5fbff">
        <td width="19%" height="25">����</td>
        <td><?php echo $edit['author']; ?>    
		</td>
      </tr>
      <tr bgcolor="#f5fbff">
        <td height="25">����ʱ��</td>
        <td><?php echo GetTime($edit['releasetime']); ?> </td>
      </tr>
      <tr class="firstr">
        <td colspan="5">
            ǰ̨����
        </td>
      </tr>
      <tr bgcolor="#f5fbff">
        <td height="25">��ʾ����</td>
        <td><input name="config[seotitle]" value="<?php echo $edit[config][seotitle]?>" class="text" type="text"></td>
      </tr>
      <tr bgcolor="#f5fbff">
        <td height="25">meta keywords���ؼ��ʣ�</td>
        <td><input name="config[seokeywords]" value="<?php echo $edit[config][seokeywords]?>" class="text" type="text"></td>
      </tr>
      <tr bgcolor="#f5fbff">
        <td height="25">meta description��������</td>
        <td><textarea name="config[seodescription]" style="width:300px; height:100px"><?php echo $edit[config][seodescription]?></textarea></td>
      </tr>
      <tr class="firstr">
        <td colspan="5">
            �˵�����
        </td>
      </tr>
      <tr bgcolor="#f5fbff">
        <td height="25">�������Ĳ˵�<br /><i style="color:#666">�Ǳ�Ҫ�������޸ģ�<font color="red">��Ҫ</font>��</i></td>
        <td><textarea name="config[adminmenu]" style="width:300px; height:100px"><?php echo $edit[config][adminmenu]?></textarea></td>
      </tr>
	  <?php if($edit['flag'] == 'goods'){?>
	  <tr class="firstr">
        <td colspan="5">
            ������Ϣ
        </td>
      </tr>
      <tr bgcolor="#f5fbff">
        <td height="25">������ȡ��</td>
        <td><textarea name="config[quhuo]" style="width:300px; height:100px"><?php echo $edit[config][quhuo]?></textarea></td>
      </tr>
	  <tr bgcolor="#f5fbff">
        <td height="25">���ʽ</td>
        <td><textarea name="config[fukuan]" style="width:300px; height:100px"><?php echo $edit[config][fukuan]?></textarea></td>
      </tr>
	  <tr bgcolor="#f5fbff">
        <td height="25">�ۺ����</td>
        <td><textarea name="config[service]" style="width:300px; height:100px"><?php echo $edit[config][service]?></textarea></td>
      </tr>
	  <?php }?>
      </tbody>
      </table>
</div>
<center><input type="submit" name="plugin_submit" value="�� ��" class="mymps large" /></center>
</form>
<?php mymps_admin_tpl_global_foot();?>