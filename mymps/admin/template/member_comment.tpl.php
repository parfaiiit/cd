<?php include mymps_tpl('inc_head');?>
<style>
.start0 { background:url('images/review_start.gif') no-repeat 0 -1px;  width:58px; height:15px; }
.start1 { background:url('images/review_start.gif') no-repeat 0 -15px; width:58px; height:15px; }
.start2 { background:url('images/review_start.gif') no-repeat 0 -29px; width:58px; height:15px; }
.start3 { background:url('images/review_start.gif') no-repeat 0 -43px; width:58px; height:15px; }
.start4 { background:url('images/review_start.gif') no-repeat 0 -57px; width:58px; height:15px; }
.start5 { background:url('images/review_start.gif') no-repeat 0 -71px; width:58px; height:15px; }
</style>
<script type="text/javascript" src="../template/global/messagebox.js"></script>
<script type="text/javascript" src="js/vbm.js"></script>
<div id="<?=MPS_SOFTNAME?>" style="padding-bottom:0">
	<div class="mpstopic-category">
		<div class="panel-tab">
			<ul class="clearfix tab-list">
				<li><a href="member_tpl.php">�ռ�ģ��</a></li>
				<li><a href="member_comment.php" class="current">�ռ����</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="ccc2">
	<ul>
    <form action="?part=list" method="get">
    <select name="commentlevel">
    <option value="">���״̬</option>
    <option value="0" <?php if($_GET[commentlevel] == 0){echo "selected"; }?>>����</option>
    <option value="1" <?php if($_GET[commentlevel] == 1){echo "selected"; }?>>����</option>
    </select>
    <input name="keywords" type="text" class='text' value="<?=$keywords?>">
     &nbsp;&nbsp;<input type="submit" value="��������" class="gray mini">&nbsp;&nbsp; 
    </form>
	</ul>
</div>
<form name='form1' method='post' action='?'>
<input name="url" type="hidden" value="<?=GetUrl()?>">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
    <tr class="firstr">
      <td width="40">ѡ��</td>
        <td>����</td>
        <td>����</td>
        <td>����</td>
        <td>����</td>
        <td>�Լ۱�</td>
        <td>�����Ŀռ�</td>
        <td>״̬</td>
        <td>����ʱ��</td>
    </tr>
    <?
foreach($comment AS $list)
{
?>
    <tr align="center" bgcolor="#f5fbff" >
      <td><input type='checkbox' name='ids[]' id='<?=$list[id]?>' value='<?=$list[id]?>' class='checkbox'></td>
      <td><a href="javascript:blocknone('pm_<?=$list[id]?>');"><?=$list[fromuser]?>+</a></td>
        <td><div class="start<?=$list[quality]?>"></div></td>
        <td><div class="start<?=$list[service]?>"></div></td>
        <td><div class="start<?=$list[environment]?>"></div></td>
        <td><div class="start<?=$list[price]?>"></div></td>
        <td><a href="javascript:setbg('<?=MPS_SOFTNAME?>��Ա����',400,110,'../box.php?part=member&userid=<?=$list[userid]?>')"><?=$list[userid]?></a></td>
        <td>
        <?php if (empty($list['commentlevel'])) echo '<font color=red>����</font>'; else echo '<font color=green>����</font>'?>
        </td>
      <td>
      <?=GetTime($list[pubtime])?></td>
    </tr>
    <tr style="background-color:white; display:none" id="pm_<?=$list[id]?>">
        <td>&nbsp;</td>
        <td colspan="8">
        <div class="pm_view">
        <?=$list[content]?>
        </div>
        <div style="margin:0 5px 10px 5px; padding:10px; background-color:#f2f2f2"><b>ϲ���̶ȣ�</b>
            <?php if($list[enjoy] == '0'){echo '��ϲ��';}elseif($list[enjoy] == '1'){echo '����ν';}elseif($list[enjoy] == '2'){echo 'ϲ��';}elseif($list[enjoy] == '3'){echo '��ϲ��';}?>
            <hr style="height:1px; color:#dedede"/>
            <?php if($list[reply]){?>
            <div style="margin:0 5px 10px 5px; padding:10px; background-color:#f2f2f2">
            <b>�ظ����ݣ�</b><?=$list[reply]?><hr style="height:1px; color:#dedede"/><b>�ظ�ʱ�䣺</b><?=GetTime($list[retime])?>
            </div>
            <?php }?>
        </div>
        </td>
    </tr>
    <?
}
?>
    <tr bgcolor="#ffffff" height="28">
    <td align="center" style="border-right:1px #fff solid;"><input name="checkall" type="checkbox" class='checkbox' id="checkall" onClick="CheckAll(this.form)"/></td>
    <td colspan="9">
    <label for="delall"><input type="radio" value="delall" id="delall" name="part" class="radio">����ɾ��</label>
    <?php foreach($mlevel as $k => $v){?>
    <label for="level<?=$k?>"><input type="radio" value="level.<?=$k?>" id="level<?=$k?>" name="part" class="radio">תΪ<?=$v?></label> 
    <?php }?>��
    </td>
    </tr>
</table>
</div>
<center><input type="submit" value="�� ��" class="mymps large" name="member_comment_submit"/></center>
</form>
<div class="pagination"><?echo page2()?></div>
<?php mymps_admin_tpl_global_foot();?>