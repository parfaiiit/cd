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
<form action="?config.php?" method="post">
<input name="part" type="hidden" value="commentsettings">
<input name="action" type="hidden" value="do_post">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
    <tr class="firstr">
      <td colspan="2" align="left">����/��������</td>
    </tr>
	<tr bgcolor="#ffffff">
      <td align="left" class="altbg1" width="250">
      ��Ϣ����/information
       </td>
      <td align="left" valign="top" style="line-height:25px;">
		<label for="information_0"><input type="radio" name="comment[information]" id="information_0" class="checkbox" value="0" <?php if($comment['information'] == 0) echo 'checked';?>>�ر�����</label><br />
		<label for="information_1"><input type="radio" name="comment[information]" id="information_1" class="checkbox" value="1" <?php if($comment['information'] == 1) echo 'checked';?>>������������</label><br />
		<label for="information_2"><input name="comment[information]" type="radio" id="information_2" class="checkbox" value="2" <?php if($comment['information'] == 2) echo 'checked';?>>������Ա����</label>
      </td>
    </tr>
	<tr bgcolor="#ffffff">
      <td align="left" class="altbg1">
      ��������/news
       </td>
      <td align="left" valign="top" style="line-height:25px;">
		<label for="news_0"><input type="radio" name="comment[news]" id="news_0" class="checkbox" value="0" <?php if($comment['news'] == 0) echo 'checked';?>>�ر�����</label><br />
		<label for="news_1"><input type="radio" name="comment[news]" id="news_1" class="checkbox" value="1" <?php if($comment['news'] == 1) echo 'checked';?>>������������</label><br />
		<label for="news_2"><input name="comment[news]" type="radio" id="news_2" class="checkbox" value="2" <?php if($comment['news'] == 2) echo 'checked';?>>������Ա����</label>
      </td>
    </tr>
	<tr bgcolor="#ffffff">
      <td align="left" class="altbg1">
      ���̵���/store
       </td>
      <td align="left" valign="top" style="line-height:25px;">
		<label for="store_0"><input type="radio" name="comment[store]" id="store_0" class="checkbox" value="0" <?php if($comment['store'] == 0) echo 'checked';?>>�ر�����</label><br />
		<label for="store_1"><input type="radio" name="comment[store]" id="store_1" class="checkbox" value="1" <?php if($comment['store'] == 1) echo 'checked';?>>������������</label><br />
		<label for="store_2"><input name="comment[store]" type="radio" id="store_2" class="checkbox" value="2" <?php if($comment['store'] == 2) echo 'checked';?>>������Ա����</label>
      </td>
    </tr>
</table>
</div>

<center>
<input class="mymps large" name="<?php echo CURSCRIPT; ?>_submit" value="�� ��" type="submit" > &nbsp;
</center>
</form>
<?php mymps_admin_tpl_global_foot();?>