<?php include mymps_tpl('inc_head');?>

<style>
.smalltxt{ font-size:12px!important; color:#999!important; font-weight:100!important}
.altbg1{ background-color:#f1f5f8}
</style>
<div id="<?=MPS_SOFTNAME?>" style=" padding-bottom:0">
    <div class="mpstopic-category">
        <div class="panel-tab">
            <ul class="clearfix tab-list">
                <li><a href="?part=settings">��������</a></li>
                <li><a href="?" class="current">������Ŀ����</a></li>
            </ul>
        </div>
    </div>
</div>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
    <form method="get" action="?">
    <input name="part" value="add" type="hidden">
    <tr class="firstr"><td colspan="2">������ݵ���</td></tr>
    <tr>
    <td class="altbg1" width="160">�Զ����ǩ��<br><font color="gray">������һ�����ڼ�����ܴ�������ݵ��ýű����õı�ʶ��������Ӣ�Ļ����ֱ�ʾ</font></td>
    <td><input type="text" name="flag" value="<?=$randam?>" class="text" style="line-height:18px"/></td>
    </tr>
    <tr>
    <td class="altbg1">��������</td>
    <td>
    <select name="customtype">
    <? foreach($customtypearr as $k =>$v){?>
    <option value="<?=$k?>"><?=$v?></option>
	<? }?>
    </select>
    </td>
    </tr>
    <tr bgcolor="#ffffff">
    <td>
    </td>
    <td>
    <input type="submit" value="��ӵ�����Ŀ" class="mymps large"/>
    </td>
    </tr>
    </form>
</table>
</div>
<form name='form1' method='post' action='?'>
<input name="forward_url" value="<?=GetUrl()?>" type="hidden">
<input name="part" value="<?=$part?>" type="hidden"/>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
<tr class="firstr">
<td width="5%"><input class="checkbox" name="checkall" type="checkbox" id="checkall" onClick="CheckAll(this.form)"/>ɾ?</td>
<td width="15%">��ǩ��</td>
<td>��������</td>
<td width="15%">���ʱ��</td>
<td width="15%">���ô���</td>
</tr>

<?php 
if(is_array($jswizard)){
	foreach($jswizard as $key => $val){?>
<tr bgcolor="white">
  <td><input class="checkbox" type='checkbox' name='delids[]' value='<?=$val[id]?>' id="<?=$val[id]?>"></td>
  <td><a href="?part=detail&id=<?=$val['id']?>"><?=$val['flag']?></a></td>
  <td><?=$customtypearr[$val['customtype']] ? $customtypearr[$val['customtype']] : '������Ϣ'?></td>
  <td><?=GetTime($val['edittime'])?></td>
  <td>
  <a href="javascript:void(0);" onclick="setbg('վ�ڵ���',550,110,'../box.php?part=custom&flag=<?=$val[flag]?><?php if($val['jscharset'] == 1) echo '&jscharset=1'; ?>')">վ�ڵ���</a> 
  &nbsp;&nbsp;
  <a href="javascript:void(0);" onclick="setbg('վ�����',550,110,'../box.php?part=jswizard&flag=<?=$val[flag]?><?php if($val['jscharset'] == 1) echo '&jscharset=1'; ?>')">վ�����</a></td>
</tr>
<?php 
	}
}
?>

</table>
</div>
<center>
<input type="submit" value="�� ��" class="mymps large" name="<?=CURSCRIPT?>_submit"/>  
</center>
</form>
<div class="pagination"><?php echo page2();?></div>
<?php mymps_admin_tpl_global_foot();?>