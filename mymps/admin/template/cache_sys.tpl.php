<?php include mymps_tpl('inc_head');?>
<script language="javascript">
ifcheck = false;
</script>
<div id="<?=MPS_SOFTNAME?>" style="padding-bottom:0">
	<div class="mpstopic-category">
		<div class="panel-tab">
			<ul class="clearfix tab-list">
            	<li><a href="?part=cache">ҳ�滺��</a></li>
				<li><a href="?part=cache_sys" class="current">���ݻ���</a></li>
				<li><a href="optimise.php">ϵͳ�Ż�</a></li>
			</ul>
		</div>
	</div>
</div>
<form action="?part=cache_sysupdate" method="post">
<input name="return_url" type="hidden" value="<?=$return_url?>">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
  <tr class="firstr">
  	<td colspan="2">����ϵͳ����ҳ��</td>
  </tr>

  <tr>
  	<td class="altbg1" valign="center" style="text-align:center;width:15%"><b><input class="checkbox" name="chkall" onclick="CheckAll(this.form)" checked="checked" type="checkbox" id="chkalltables" /><label for="chkalltables"> ȫѡ</label></b></td>
	<td class="altbg2">
	<?php foreach($cachearray as $k => $v){?>
	<label for="<?=$k?>"><input checked="checked" name="updatecache[]" value="<?=$k?>" type="checkbox" class="checkbox" id="<?=$k?>"><?=$v?></label><br />
    <?php }?>
	</td>
  </tr>

</table>
</div>
<center><input type="submit" value="�� ��" class="mymps large"></center>
</form>

<?php mymps_admin_tpl_global_foot();?>