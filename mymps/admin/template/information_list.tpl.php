<?php include mymps_tpl('inc_head');?>
<style>
.text{ *height:16px!important;*padding-top:1px!important;*padding-bottom:1px!important;}
input.mymps{*height:24px!important;*padding-top:0px!important;*padding-bottom:0px!important;}
</style>
<script type="text/javascript" src="js/titlealt.js"></script>
<div id="<?=MPS_SOFTNAME?>" style="padding-bottom:0">
    <div class="mpstopic-category">
        <div class="panel-tab">
            <ul class="clearfix tab-list">
            	<li><a title="������Ϣ" href="information.php?info_level=0" <?php if($info_level==='0'){?>class="current"<?php }?>>����</a></li>
                <li><a title="������Ϣ" href="information.php?info_level=1" <?php if($info_level==1 || ($info_level=='' && $upgrade != 'index' && $upgrade != 'list' && $upgrade != 'category' && $ifred != '1' && $ifbold != '1')){?>class="current"<?php }?>>����</a></li>
                <li><a title="�Ƽ���Ϣ" href="information.php?info_level=2" <?php if($info_level==2){?>class="current"<?php }?>>�Ƽ�</a></li>
                <li><a title="��ҳ�ö���Ϣ" href="information.php?upgrade=index" <?php if($upgrade=='index'){?>class="current"<?php }?>>�׶�</a></li>
                <li><a title="�����ö���Ϣ" href="information.php?upgrade=category" <?php if($upgrade=='category'){?>class="current"<?php }?>>��</a></li>
				<li><a title="С���ö���Ϣ" href="information.php?upgrade=list" <?php if($upgrade=='list'){?>class="current"<?php }?>>С��</a></li>
                <li><a title="�����׺���Ϣ" href="information.php?ifred=1" <?php if($ifred==1){?>class="current"<?php }?>>�׺�</a></li>
                <li><a title="����Ӵ���Ϣ" href="information.php?ifbold=1" <?php if($ifbold==1){?>class="current"<?php }?>>�Ӵ�</a></li>
            </ul>
            <ul style="float:right; text-align:right">
				<form action="?" method="get">
				<select name="show" style="margin-top:-1px;">
				<option value="title" <?php if($show == 'title') echo 'selected'; ?>>��Ϣ����</option>
				<option value="idno" <?php if($show == 'idno') echo 'selected'; ?>>��ϢID���</option>
				<option value="catidno" <?php if($show == 'catidno') echo 'selected'; ?>>����catID���</option>
				<option value="userid" <?php if($show == 'userid') echo 'selected'; ?>>�û���</option>
				<option value="tel" <?php if($show == 'tel') echo 'selected'; ?>>��ϵ�绰</option>
				</select>
				<input name="keywords" value="<?=$keywords?>" type="text" class="text" style="width:60px">
				<input name="submit" type="submit" value="����" class="mymps"/>
				</form>
            </ul>
        </div>
    </div>
</div>
<form action="?action=pm" method="post">
<input name="url" type="hidden" value="<?=GetUrl()?>">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm" >
    <tr class="firstr">
    <td width="30">ѡ��</td>
    <td width="40">����ͼ</td>
	<td width="30">״̬</td>
    <td>��Ϣ����</td>
    <td width="50">��</td>
	<td width="50">С��</td>
    <td width="50">�׶�</td>
	<td width="50">������</td>
	<td width="60">���ڵ�</td>
	<td width="50">ʱ��</td>
    <td width="30">����</td>
  </tr>
<tbody onmouseover="addMouseEvent(this);">
<?php foreach($information AS $row){?>

     <tr bgcolor="white" >
    <td><input type='checkbox' name='id[]' value='<?=$row[id]?>' class='checkbox' id="<?=$row[id]?>"></td>
     <td><?php $row['img_path'] = $row['img_path'] ? $row['img_path'] : '/images/nophoto.gif';?><img src="<?=$row[img_path]?>" width="48" height="36" style="border:1px #dddddd solid; padding:1px"></td>
	<td><?=$row[info_level]?></td>
    <td><?php if($row['img_path']){?><font color="green">[<?=$row['img_count']?>ͼ]</font> <?php }?><a style="<?php if($row['ifred'] == 1) echo 'color:red;';?><?php if($row['ifbold'] == 1) echo 'font-weight:bold;';?>" href="<?=$row[uri]?>" target="_blank" title="<?=$row[id]?> - <?=$row[title]?>"><?php echo $row[title]; ?></a><a title="catID���:<?=$row[catid]?>" target="_blank" href="<?=$row[uri_cat]?>" style="color:#333; margin-left:10px"><?=$row[catname]?></a><?php if($row[certify] == 1){?> <img title="��֤��Ϣ" alt="��֤��Ϣ" align="absmiddle" src="../images/company1.gif"><?}?></td>
 
    <td><div class="signin_button"  onmouseover="wsug(event, '<?php echo $row['upgrade_time']; ?>')" onmouseout="wsug(event, 0)"><?=$row[upgrade_type]?></div></td>
    <td><div class="signin_button"  onmouseover="wsug(event, '<?php echo $row['upgrade_time_list']; ?>')" onmouseout="wsug(event, 0)"><?=$row[upgrade_type_list]?></div></td>
    <td><div class="signin_button"  onmouseover="wsug(event, '<?php echo $row['upgrade_time_index']; ?>')" onmouseout="wsug(event, 0)"><?=$row[upgrade_type_index]?></div></td>
	<td><?=$row[contact_who]?>
    </td>
	<td><div class="signin_button"  onmouseover="wsug(event, '<?php echo $row['ip2area'] == 'wap' ? '�ֻ���' : $row['ip2area']; ?>')" onmouseout="wsug(event, 0)"><i style="color:#585858"><?php echo $row['ip2area'] == 'wap' ? '�ֻ���' : $row['ip']; ?></i></div>
    </td>
	<td><div class="signin_button"  onmouseover="wsug(event, '����ʱ�䣺<?php echo GetTime($row['begintime']);?>')" onmouseout="wsug(event, 0)"><font style="color:#585858"><?php echo date("m-d",$row['begintime']);?></font></div></td>
	<td>
     <a href='?action=edit&id=<?=$row[id]?>'>�༭</a>
    </td>
  </tr>
<?}?>
</tbody>
<tr bgcolor="#ffffff" height="28">
    <td style="border-right:1px #fff solid;"><input name="checkall" type="checkbox" id="checkall" onClick="CheckAll(this.form)" class="checkbox"/></td>
    <td colspan="10">
    <label for="delall"><input type="radio" value="delall" id="delall" name="do_action" class="radio">ɾ��</label> 
    <label for="refresh"><input type="radio" value="refresh" id="refresh" name="do_action" class="radio">ˢ��</label>
    <?php foreach($information_level as $k => $v){?>
    <label for="level<?=$k?>"><input type="radio" value="level.<?=$k?>" id="level<?=$k?>" name="do_action" class="radio">תΪ<?=$v?></label> 
    <?php }?>
    <hr>
	<label for="certify_yes"><input type="radio" value="certify_yes" id="certify_yes" name="do_action" class="radio">ͨ����֤</label> 
	<label for="certify_no"><input type="radio" value="certify_no" id="certify_no" name="do_action" class="radio">ȡ����֤</label> 
    <hr>
    <label for="upgrade"><input type="radio" value="upgrade" id="upgrade" name="do_action" class="radio">ȡ��/�����ö�</label> 
	<label for="upgrade_list"><input type="radio" value="upgrade_list" id="upgrade_list" name="do_action" class="radio">ȡ��/С���ö�</label> 
    <label for="upgrade_index"><input type="radio" value="upgrade_index" id="upgrade_index" name="do_action" class="radio">ȡ��/��ҳ�ö�</label> 
    <hr>
    <label for="ifred"><input type="radio" value="ifred" id="ifred" name="do_action" class="radio">ȡ��/�����׺�</label> 
    <label for="ifbold"><input type="radio" value="ifbold" id="ifbold" name="do_action" class="radio">ȡ��/����Ӵ�</label> 
    </td>
</tr>
</table>
</div>
<center><input type="submit" value="�� ��" class="mymps large"/></center>
</form>
<div class="pagination"><?php echo page2();?></div>
<?php mymps_admin_tpl_global_foot();?>