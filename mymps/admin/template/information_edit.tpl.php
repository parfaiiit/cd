<?php include mymps_tpl('inc_head_jq');?>
<style>
.mymps_td td{ background-color:#ffffff}
tr{ background-color:#f5fbff}

/*�ϴ�ͼƬ*/
.onea_dd{ display:block; float:left; margin-right:15px; margin-left:15px; margin-bottom:5px; margin-top:5px;}
.onea_dd .viewarea{ margin-bottom:10px;}
.onea_dd .viewarea img{ width:108px; height:108px; border:1px #ddd solid;}
.onea_dd .a_ddarea{position: relative;float: left;width:110px;height:32px;text-align:center;overflow: hidden;display:block;}
.onea_dd .a_ddarea img{width: 110px;height: 32px;margin-left:auto;margin-right:auto;cursor:pointer;}
.onea_dd .comment-pic-upd{position: absolute;top: 0;left: 0;z-index: 100;width: 110px;height: 32px;filter: progid:DXImageTransform.Microsoft.Alpha(opacity=0);filter:alpha(opacity=0);-moz-opacity:0;-khtml-opacity: 0;opacity:0;background: none;border: none;cursor: pointer;}
</style>
<script type="text/javascript" src="../template/default/js/a_ddimgview.js"></script>
<form action="?action=edit" method="post" enctype="multipart/form-data" name="form1" onSubmit="return CheckSubmit();";>
	<input name="catid" value="<?=$post[catid]?>" type="hidden" />
    <input name="do" value="post" type="hidden">
    <input name="id" value="<?=$post[id]?>" type="hidden">
    <input name="ismember" value="<?=$post[ismember]?>" type="hidden">
    <input name="userid" value="<?=$post[userid]?>" type="hidden">
<div id="<?=MPS_SOFTNAME?>">
<table width="100%" cellspacing="0" cellpadding="0" class="vbm">
      <tr class="firstr">
        <td colspan="5">
        <div class="left"><a href="javascript:collapse_change('1')">������Ϣ</a></div>
        <div class="right"><a href="javascript:collapse_change('1')"><img id="menuimg_1" src="template/images/menu_reduce.gif"/></a></div>
        </td>
      </tr>
      <tbody id="menu_1" class="mymps_td">
	  <tr>
        <td width="100" height="25"><font color=red>(*)</font>��Ϣ���</td>
        <td>
        <select name="catid">
        <?=cat_list('category',0,$post[catid])?>
        </select>
		<���棺����Ҫ�����������ԭ���Ӧ�ò�ͬ����Ϣģ�ͣ������޸�>
        </td>
      </tr>
      <tr>
        <td height="25"><font color=red>(*)</font>����������</td>
        <td>
		<select name="areaid">
        <?=cat_list('area',0,$post[areaid],true,1)?>
        </select>
        </td>
      </tr>
      <tr>
        <td height="25"><font color=red>(*)</font>��Ϣ���⣺</td>
        <td>
        	<input type="text" name="title" class="text" value="<?=$post[title]?>" style="width:350px"/></td>
      </tr>
	  <?php if(is_array($post[mymps_extra_value])){
	  	foreach($post[mymps_extra_value] as $k => $v){
	  ?>
	  <tr>
        <td height="25"><?php echo $v['required'] == 1 ? '<font color=red>(*)</font>' : '';?><?php echo $v['title'];?>��</td>
        <td>
        	<?php echo $v['value'];?></td>
      </tr>
	  <?php }
	  }?>
      <?php if($cat[if_mappoint] == 1){?>
      <tr>
        <td height="25">��ͼ���꣺</td>
        <td><input name="mappoint" id="mappoint" type="text" class="text" value="<?=$post[mappoint]?>" style="width:125px"/><input name="markmap" type="button" value="�����ע" class="gray" onclick="javascript:setbg('��ͼ��ע',500,300,'../map.php?action=markpoint&width=500&height=300&p=<?=$post[mappoint]?>')"></td>
      </tr>
      <?}?>
      <tr>
        <td height="25">��Ч�ڣ�</td>
        <td>
        <?=$post[GetInfoLastTime]?>
        </td>
      </tr>
      </tbody>
      </table>
	  <div class="mymps_td" style="margin-top:3px">
	  <?=$acontent?>
	  </div>
</div>
<div id="<?=MPS_SOFTNAME?>">
<table width="100%" cellspacing="0" cellpadding="0" class="vbm">
      <tr class="firstr">
      <td colspan="3">
        <div class="left"><a href="javascript:collapse_change('2')">��ϵ��ʽ</a></div>
        <div class="right"><a href="javascript:collapse_change('2')"><img id="menuimg_2" src="template/images/menu_reduce.gif"/></a></div>
       </td>
      </tr>
      <tbody id="menu_2" class="mymps_td">
      <tr>
        <td height="25" width="100"><font color=red>(*)</font>��ϵ�ˣ�</td>
        <td>
        	<input type="text" name="contact_who" class="text" value="<?=$post[contact_who]?>"/>        </td>
      </tr>
      <tr>
        <td height="25"><font color=red>(*)</font>�ֻ���绰��</td>
        <td>
        	<input type="text" name="tel" class="text" value="<?=$post[tel]?>"/>        </td>
      </tr>
      <tr>
        <td height="25">�����ʼ���</td>
        <td>
        	<input type="text" class="text" value="<?=$post[email]?>" name="email"/>        </td>
      </tr>
      <tr>
        <td height="25">QQ��</td>
        <td>
        	<input type="text" class="text" value="<?=$post[qq]?>" name="qq"/>        </td>
      </tr>
      </tbody>
      </table>
</div>
<?php if($post[upload_img]){?>
<div id="<?=MPS_SOFTNAME?>">
<table width="100%" cellspacing="0" cellpadding="0" class="vbm">
     <tr class="firstr">
        <td colspan="3">
         <div class="left"><a href="javascript:collapse_change('3')">���ͼƬ</a></div>
         <div class="right"><a href="javascript:collapse_change('3')"><img id="menuimg_3" src="template/images/menu_reduce.gif"/></a></div>
        </td>
      </tr>
      <tbody id="menu_3" class="mymps_td">
      <tr class="mymps_td">
      <td colspan="2">
		<?=$post[upload_img]?>
      </td>
      </tr>
      </tbody>
    </table>
</div>
<?php }?>
<div id="<?=MPS_SOFTNAME?>">
<table width="100%" cellspacing="0" cellpadding="0" class="vbm">
     <tr class="firstr">
        <td colspan="3">
         <div class="left"><a href="javascript:collapse_change('4')">��������</a></div>
         <div class="right"><a href="javascript:collapse_change('4')"><img id="menuimg_4" src="template/images/menu_reduce.gif"/></a></div>
        </td>
      </tr>
      <tbody id="menu_4" class="mymps_td">
        <?=$post[manage_pwd]?>
        <tr>
        <td height="25" width="150">��Ϣ״̬��</td>
        <td>
        	<?=GetInfoLevel($post[info_level])?>
        </td>
        </tr>
        <tr>
        <td height="25" width="150">�����׺죺</td>
        <td>
        	<select name="ifred">
            	<option value="1" 
                <?php if($post[ifred] == 1){echo "style=\"background-color:#6EB00C;color:white\" selected";}?>
                >�׺�</option>
                <option value="0" 
                <?php 
                if($post[ifred] == 0){echo "style=\"background-color:#6EB00C;color:white\" selected";}
                ?>>���׺�</option>
            </select>
        </td>
        </tr>
        <tr>
        <td height="25" width="150">����Ӵ֣�</td>
        <td>
        	<select name="ifbold">
            	<option value="1" 
                <?php 
                if($post[ifbold] == 1){echo "style=\"background-color:#6EB00C;color:white\" selected";}
                ?>>�Ӵ�</option>
                <option value="0" 
                <?php 
                if($post[ifbold] == 0){echo "style=\"background-color:#6EB00C;color:white\" selected";}
                ?>>���Ӵ�</option>
            </select>
        </td>
        </tr>
        <tr>
        <td height="25">�Ƿ�����ö���</td>
        <td>
        	<?=$post[upgrade_type]?> <?=GetUpgradeTime($post[upgrade_time])?>����ѡ���ö����ɲ�ѡ�����Ŀ��
        </td>
        </tr>
        <tr>
        <td height="25">�Ƿ�С���ö���</td>
        <td>
        	<?=$post[upgrade_type_list]?> <?=GetUpgradeTime($post[upgrade_time_list],'upgrade_time_list')?>����ѡ���ö����ɲ�ѡ�����Ŀ��
        </td>
        </tr>
        <tr>
        <td height="25">�Ƿ���ҳ�ö���</td>
        <td>
        	<?=$post[upgrade_type_index]?> <?=GetUpgradeTime($post[upgrade_time_index],'upgrade_time_index')?>����ѡ���ö����ɲ�ѡ�����Ŀ��
        </td>
        </tr>
        <tr>
        <td height="25">����ʱ�䣺</td>
        <td>
        <input name="begintimestr" value="<?php echo GetTime($post['begintime']); ?>" class="text">
        <label for="refresh"><input name="refresh" value="1" type="checkbox" class="checkbox" id="refresh">ˢ��Ϊ��ǰʱ��?</label>
        </td>
        </tr>
      </tbody>
    </table>
</div>
<center><input type="button" onclick="window.open('<?=$post[uri]?>')" target=_blank value="Ԥ ��" class="gray large" />
&nbsp;
<input type="submit" name="mymps" value="�� ��" class="mymps large" />
&nbsp;&nbsp;<input type="button" onClick="location.href='?'" value="�� ��" class="gray large"> 
</center>
</form>
<?php mymps_admin_tpl_global_foot();?>