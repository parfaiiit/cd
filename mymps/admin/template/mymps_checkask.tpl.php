<?php include mymps_tpl('inc_head');?>
<div id="<?=MPS_SOFTNAME?>" style="padding-bottom:0">
	<div class="mpstopic-category">
		<div class="panel-tab">
			<ul class="clearfix tab-list">
				<li><a href="config.php?part=imgcode" <?php if($part == 'imgcode'){?>class="current"<?php }?>>��֤�����</a></li>
				<li><a href="config.php?part=checkask" <?php if($part == 'checkask'){?>class="current"<?php }?>>��֤�ʴ�����</a></li>
				<li><a href="config.php?part=badwords" <?php if($part == 'badwords'){?>class="current"<?php }?>>��������</a></li>
				<li><a href="config.php?part=commentsettings" <?php if($part == 'commentsettings'){?>class="current"<?php }?>>���۵�������</a></li>
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
 <li>��֤����Ӧ���Լ����࣬û�����壬�����˶��ܹ���ȷ�����뾭��������֤�ʴ�����⼰���Է�ֹ���²⣡</li>
 <li>��֤�ʴ���Ҫ���Ա������ȷ�ش�ϵͳ<font color=red>�����ȡ</font>��������ܼ������������Ա������ע��򷢲���Ϣ����ѡ����Ҫ����֤�ʴ�Ĳ�����</li>
 <li>ע��: ���øù��ܻ�ʹ�ò��ֲ�����÷�����������ڱ���ʱ��</li>
    </td>
  </tr>
</table>
</div>
<div class="clear"></div>
<form action="?part=checkask" method="post">
<input name="action" type="hidden" value="do_post">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
    <tr class="firstr">
    	<td colspan="2">��֤�ʴ�����</td>
    </tr>
    <tr bgcolor="#ffffff">
        <td width="45%"><b>������֤�ʴ�:</td>
        <td><label for="whenregister"><input class="checkbox" type="checkbox" name="whenregister" id="whenregister" value="1" <?php if($when['whenregister'] == '1') echo 'checked';?>> ���û�ע��</label> <label for="whenpost"><input class="checkbox" type="checkbox" name="whenpost" value="1" <?php if($when['whenpost'] == '1') echo 'checked';?> id="whenpost"> ����������Ϣ</label></td>
    </tr>
</table>
</div>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
    <tr class="firstr">
      <td colspan="3">��֤�ʴ𼰴�����</td>
    </tr>
    <tr bgcolor="#f5f8ff" style="font-weight:bold">
      <td>ɾ��</td>
      <td>����</td>
      <td>��</td>
    </tr>
    <?php foreach($c as $key => $val){?>
    <tr align="center" bgcolor="white">
        <td><input class="checkbox" type="checkbox" name="delete[]" value="<?php echo $val['id']; ?>"></td>
        <td><textarea name="question[<?php echo $val['id']; ?>]" rows="3" cols="60"><?php echo $val['question']; ?></textarea></td>
        <td><input type="text" name="answer[<?php echo $val['id']; ?>]" size="30" maxlength="50" value="<?php echo $val['answer']; ?>"></td>
    </tr>
    <?php }?>
   <tbody id="secqaabody" bgcolor="white">
   <tr align="center">
       <td>����:<a href="###" onclick="newnode = $('secqaabodyhidden').firstChild.cloneNode(true); $('secqaabody').appendChild(newnode)">[+]</a></td>
       <td><textarea name="newquestion[]" rows="3" cols="60"></textarea></td>
       <td><input type="text" name="newanswer[]" size="30" maxlength="50"></td>
   </tr>
   </tbody>
   
   <tbody id="secqaabodyhidden" style="display:none">
       <tr align="center" bgcolor="white">
       <td>&nbsp;</td>
       <td><textarea name="newquestion[]" rows="3" cols="60"></textarea></td>
       <td><input type="text" name="newanswer[]" size="30" maxlength="50"></td>
       </tr>
   </tbody>
   
   <tr bgcolor="#f5f8ff">
   <td colspan=3>���������� 10 ��������֤���⼰�𰸣���֤����Խ�࣬��֤�ʴ��ֹ����ע��򷢲���Ϣ��Ч��Խ���ԡ�����֧�� HTML ���룬�𰸳��Ȳ����� 50 �ֽ�</td>
   </tr>
</table>
</div>
<center>
<input class="mymps large" value="�� ��" type="submit" > &nbsp;
</center>
</form>
<?php mymps_admin_tpl_global_foot();?>