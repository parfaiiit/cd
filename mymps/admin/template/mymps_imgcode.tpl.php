<?php include mymps_tpl('inc_head');?>
<style>
.vbm td li{ margin:10px 0!important;}
</style>
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
 <li>Ϊ����ϵͳ�и�ǿ�ļ����ԣ������Ŀռ䲻֧��GD�⣬��ر����ҳ�����֤����ʾ</li>
 <li>��Ա��¼�󷢲���Ϣ���޸���Ϣ�ǲ���Ҫ��д��֤��ģ������޷��Ըù����޸�</li>
 <li>���������֤�뱳��ͼ���ɽ����jpg����ͼ�滻��·��Ϊ<font color="#666">/images/authcode/background1.jpg</font>��jpg�ļ�</li>
    </td>
  </tr>
</table>
</div>
<form action="?part=imgcode" method="post">
<input name="action" type="hidden" value="do_post">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
    <tr class="firstr">
      <td colspan="2" align="left">������֤��</td>
    </tr>
	<tr bgcolor="#ffffff">
      <td align="left" width="200">
      <?php foreach(array('login'=>'�û���¼/login','register'=>'�û�ע��/register','forgetpass'=>'�һ�����/forgetpass','post'=>'�οͷ�����Ϣ/post','memberpost'=>'��Ա������Ϣ/memberpost','adminlogin'=>'��̨����Ա��¼/adminlogin') as $key => $val){?>
        <li><label for="<?php echo $key; ?>"><input class="checkbox" type="checkbox" name="settingsnew[open][<?php echo $key; ?>]" value="1" id="<?php echo $key; ?>" <?php if($res[$key] == 1) echo 'checked'; ?>><?php echo $val; ?></label></li>
	  <?php }?>
       </td>
      <td align="left" valign="top">
      <div style="margin-top:20px; color:#999">
��֤����Ա������ע�ἰ���ⷢ����Ϣ���⣬��ѡ����Ҫ����֤��Ĳ�����ע��: ������֤���ʹ�ò��ֲ�����÷�����������ڱ���ʱ��<br /><br />
<img src="../<?php echo $mymps_global['cfg_authcodefile']?>?action=preview" id="authcode" style="border:1px #ddd solid;"><br /><br />
<a href="#" onClick="$obj('authcode').src=$obj('authcode').src+'&'">[ˢ��]</a>
	  </div>
      </td>
    </tr>

</table>
</div>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
    <tr class="firstr">
      <td colspan="2" align="left">��֤������</td>
    </tr>
	<tr bgcolor="#ffffff">
      <td align="left" width="200">
      	<?php foreach(array('engber'=>'Ӣ���������','english'=>'��Ӣ��','number'=>'���������','plus'=>'�������') as $key => $val){?>
           <li><label for="<?php echo $key; ?>"><input <?php if($key == 'plus'){?>onClick="$obj('show').style.display='none';"<?php }else{?>onClick="$obj('show').style.display='';"<?php }?> class="radio" type="radio" name="settingsnew[type]" value="<?php echo $key; ?>" <?php if($res[type] == $key) echo 'checked'; ?> id="<?php echo $key; ?>"><?php echo $val; ?></label></li>
        <?php }?>
		<div class="clear"></div>
		</td>
      <td align="left" valign="top">
      <div style="margin-top:10px; color:#999">
      	������֤������ͣ��������ֹ�������֤�����ͣ�����Ч��ֹע�����<br /><br />
ѡ������������ͣ������Ч�ž�ע�����������
      </div>
      </td>
    </tr>
    <tr bgcolor="#ffffff" id="show" <?if ($res['type']=='plus') echo 'style="display:none;"';?>>
    	<td> 
        <li>��֤���ַ���ʾ����</li>
        <li><input name="settingsnew[number]" type="text" class="txt" value="<?php echo $res['number']; ?>"></li>
        </td>
        <td><div style="margin-top:10px; color:#999">����1-5֮��<br>��ֵԽ�󣬷���ע�����������Ч��Խ��</div></td>
    </tr>
    <tr bgcolor="#ffffff">
    	<td> 
        <li>�������ŵ���ֵ</li>
        <li><input name="settingsnew[noise]" type="text" class="txt" value="<?php echo $res['noise']; ?>"></li>
        </td>
        <td><div style="margin-top:10px; color:#999">��ֵԽ�󱳾����ֵ��ӵ�Խ�࣬����������Ч��Խ�ã����Ǹ���ͨ�û���������<br /><br />һ����Ϊ0-30֮�䣬����0�����ӵ����</div></td>
    </tr>
    <tr bgcolor="#ffffff">
    	<td> 
        <li>��������б����ֵ</li>
        <li><input name="settingsnew[line]" type="text" class="txt" value="<?php echo $res['line']; ?>"></li>
        </td>
        <td><div style="margin-top:10px; color:#999">��Ϊ0-3������3ʱ����������Ч���Ϻõ�Ҳ�����ͨ�û��������㣬����0����б�߸���</div></td>
    </tr>
    <tr bgcolor="#ffffff">
    	<td> 
        <li>��֤����бֵ</li>
        <li><input name="settingsnew[incline]" type="text" class="txt" value="<?php echo $res['incline']; ?>"></li>
        </td>
        <td><div style="margin-top:10px; color:#999">��Ϊ0-50������50ʱ����������Ч����õ�Ҳ�����ͨ�û��������㣬����0����б</div></td>
    </tr>
    <tr bgcolor="#ffffff">
    	<td> 
        <li>��֤��Ť��ֵ</li>
        <li><input name="settingsnew[distort]" type="text" class="txt" value="<?php echo $res['distort']; ?>"></li>
        </td>
        <td><div style="margin-top:10px; color:#999">��Ϊ0-10������10ʱ����������Ч����õ�Ҳ�����ͨ�û��������㣬����0��Ť��</div></td>
    </tr>
    <tr bgcolor="#ffffff">
    	<td> 
        <li>��֤�뿿£ָ��</li>
        <li><input name="settingsnew[close]" type="text" class="txt" value="<?php echo $res['close']; ?>"></li>
        </td>
        <td><div style="margin-top:10px; color:#999">��Ϊ0-8����ֵԽ������Խ���ܣ�����8ʱ����������Ч����õ�Ҳ�����ͨ�û��������㣬����0�򲻿�£</div></td>
    </tr>
</table>
</div>

<center>
<input class="mymps large" value="�� ��" type="submit" > &nbsp;
</center>
</form>
<?php mymps_admin_tpl_global_foot();?>