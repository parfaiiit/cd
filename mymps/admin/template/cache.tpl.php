<?php include mymps_tpl('inc_head');?>
<div id="<?=MPS_SOFTNAME?>" style="padding-bottom:0">
	<div class="mpstopic-category">
		<div class="panel-tab">
			<ul class="clearfix tab-list">
				<li><a href="?part=cache" class="current">ҳ�滺��</a></li>
				<li><a href="?part=cache_sys">���ݻ���</a></li>
                <li><a href="optimise.php">ϵͳ�Ż�</a></li>
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
 <li>ע�⣺���û��湦�ܺ������趨��ʱ���ڣ�ϵͳǰ̨ҳ����ʾ�����ᷢ���仯</li>
  <li>������δ���ϵͳ�����úͳ�ʼ����װ������ر�����ҳ��Ļ��湦��</li>
  <li>����ҳ�滺�湦�ܣ��ɴ�����ϵͳ��������������ʱ���������վ���������Լ��ⶨ </li>
  <li>����վ������������ʱ��ǿ�ҽ��鿪��ҳ�滺�� </li>
    </td>
  </tr>
</table>
</div>
<form action="?part=cache_update" method="post">
<input name="return_url" type="hidden" value="<?=$return_url?>">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
  <tr class="firstr">
  	<td colspan="2">���ҳ�滺��</td>
  </tr>
  <tr>
	<td class="altbg1" valign="center" style="text-align:center;width:15%"><b>ѡ���������</b></td>
	<td class="altbg2">
	
	<label for="smarty_caches"><input checked="checked" name="updatecache[]" value="tpl_caches" type="checkbox" class="checkbox" id="smarty_caches">�����ҳ�����ļ�</label><br />
	<label for="smarty_compiles"><input checked="checked" name="updatecache[]" value="tpl_compiles" type="checkbox" class="checkbox" id="smarty_compiles">���ģ������ļ�</label><br />

	</td>
  </tr>
</table>
</div>
<center><input type="submit" value="�� ��" class="mymps large"></center>
</form>
<div class="clear" style="height:10px;"></div>
<form action="?part=cacheupdate" method="post">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
    <tr class="firstr">
      <td width="200">����ǰ̨ҳ��</td>
      <td>����ʱ��</td>
    </tr>
    <? foreach ($admin_cache as $k =>$a)
    {
    ?>
<tr bgcolor="#f1f5f8">
      <td align="left">
        <b><?=$admin_cache_array[$k]?> (<?=$k?>)</b>
       </td>
      <td align="left">&nbsp;</td>
    </tr>
    <?
  	  foreach ($a as $q => $w)
      {
          if(is_array($w))
            {
    ?>
    <tr bgcolor="#ffffff">
      <td align="left">
        <?=$w["name"]?> (<?=$q?>)      </td>
      <td align="left" bgcolor="white">
      <select name="<?=$q."_time"?>">
      	<? foreach($time_cache as $c =>$d){?>
      	<option value="<?=$c?>" <? if($cache[$q][time] == $c) echo 'selected';?>><?=$d?></option>
        <? }?>
      </select>
      </td>
    </tr>
    <? }
    }}?>
</table>
</div>
<center>
<input class="mymps large" value="�� ��" type="submit" > 
</center>
</form>
<?php echo mymps_admin_tpl_global_foot();?>