<?php include mymps_tpl('inc_head');?>
<div id="<?=MPS_SOFTNAME?>" style="padding-bottom:0">
	<div class="mpstopic-category">
		<div class="panel-tab">
			<ul class="clearfix tab-list">
				<li><a href="pm.php?part=send" <?php if($part == 'send'){?>class="current"<?php }?>>Ⱥ������Ϣ</a></li>
				<li><a href="pm.php?part=outbox" <?php if($part == 'outbox'){?>class="current"<?php }?>>�ѷ��Ͷ���Ϣ</a></li>
			</ul>
		</div>
	</div>
</div>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
  <tr class="firstr">
  	<td colspan="2">������ʾ</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td id="menu_tip">
  <li>���跢�Ͷ���Ϣ��ָ����Ա�飬��ָ����Աһ��������</li>
  <li>���뷢�Ͷ���Ϣ��ָ����Ա����ָ����Ա���벻Ҫѡ��ѡ��</li>
    </td>
  </tr>
</table>
</div>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
<form name="form1" action="pm.php?" method="post" target='stafrm'>
    <tr class="firstr">
      <td colspan="4">��д����Ϣ����</td>
      </tr>
      <tr bgcolor="#f5fbff" >
        <td width="80" >��Ա�飺</td>
        <td><select name="group[]" size="5"  style="width:100px" multiple="multiple">
        <?=member_groups()?>
        </select><br /><br />���뷢�Ͷ���Ϣ��ָ����Ա����Ҫѡ���Ա��ѡ��</td>
      </tr>
      <tr bgcolor="#f5fbff" >
        <td width="80" >ָ����Ա��</td>
        <td ><input name="touser" style="width:300px" class="text" type="text" value="<?=$userid?>"/> �����Ա�û����� , ����</td>
      </tr>
      <tr bgcolor="#f5fbff" >
        <td width="80" >���⣺</td>
        <td ><input name="title" style="width:300px" class="text" type="text" value="<?=$title?>"/></td>
      </tr>
      <tr bgcolor="#f5fbff" >
        <td width="80" >���ݣ�</td>
        <td ><textarea name="content" style="width:400px; height:200px"/><?=$content?></textarea></td>
      </tr>
    <tr> 
      <td bgcolor="#f5f8ff">&nbsp;</td>
      <td bgcolor="#f5f8ff"><input name="pm_submit" style="margin:10px;" class="mymps large" type="submit" value="�ύ����"></td>
    </tr>
    </form>
  <?php include mymps_tpl('html_runbox');?>
</table>
</div>
<?php mymps_admin_tpl_global_foot();?>