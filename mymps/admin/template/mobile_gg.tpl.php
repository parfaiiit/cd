<?php include mymps_tpl('inc_head');?>
<script language='javascript'>
	function CheckSubmit()
  {
     if(document.form1.displayorder.value==""){
	     alert("�õ�Ƭ˳����Ϊ�գ�");
	     document.form1.displayorder.focus();
	     return false;
     }
     if(document.form1.words.value==""){
	     alert("ͼƬ˵������Ϊ�գ�");
	     document.form1.words.focus();
	     return false;
     }
     if(document.form1.url.value==""){
	     alert("��ת��ַ����Ϊ�գ�");
	     document.form1.url.focus();
	     return false;
     }
	 <? if(!$id){?>
     if(document.form1.mymps_focus.value==""){
	     alert("���ϴ�ͼƬ��");
	     document.form1.mymps_focus.focus();
	     return false;
     }
	 <? }?>
     return true;
 }
</script>
<script type='text/javascript' src='js/vbm.js'></script>
<style>
.vtop{ background-color:#ffffff}
.smalltxt{ font-size:12px!important; color:#999!important; font-weight:100!important}
.altbg1{ background-color:#f1f5f8; width:45%;}
</style>
<div id="<?=MPS_SOFTNAME?>" style=" padding-bottom:0">
    <div class="mpstopic-category">
        <div class="panel-tab">
            <ul class="clearfix tab-list">
                <li><a href="?">��������</a></li>
                <li><a href="?type=nav">���ֵ�������</a></li>
                <li><a href="?type=nav_ico">ͼ�굼������(��ҳ)</a></li>
                <li><a href="?type=gg" class="current">�õ�Ƭ�������</a></li>
            </ul>
        </div>
    </div>
</div>

<?php if(!$id){?>
<form method="post" action="?">
<input name="type" value="<?=$type?>" type="hidden">
<input name="return_url" value="<?php echo GetUrl();?>" type="hidden">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
    <tr class="firstr">
    <td width="50"><input name="checkall" type="checkbox" class="checkbox" id="checkall" onClick="CheckAll(this.form)"/> ɾ?</td>
    <td align="center">��ʾλ��</td>
    <td align="center">�õ�Ƭ·��</td>
    <td width="160" align="center">˵������</td>
    <td align="center">���ʱ��</td>
    <td width="100" align="center">˳��</td>
    <td align="center">�༭</td>
  </tr>
<?php foreach($row AS $row){?>
    <tr align="center" bgcolor="white">
    <td><input type='checkbox' name='delids[]' value='<?=$row[id]?>' class="checkbox" id="<?=$row[id]?>"></td>
    <td><a href="?type=gg&typeid=<?=$row['typeid']?>"><?php echo $target[$row['typeid']]; ?></a></td>
    <td><a href='javascript:blocknone("pm_<?=$row[id]?>");'><?=$row[image]?></a></td>
    <td><?=$row[words]?></td>
    <td><em><?=GetTime($row[pubdate])?></em></td>
    <td><input name="displayorder[<?=$row[id]?>]" value="<?=$row[displayorder]?>" class="txt"/></td>
    <td>
      <a href='?type=gg&id=<?=$row[id]?>'>����</a>
    </td>
  </tr>
  <tr style="background-color:white; display:none" id="pm_<?=$row[id]?>">
    <td>&nbsp;</td>
    <td colspan="6"><img src="<?=$row[image]?>" style="height:110px;"/></td>
    </tr>
    <? }?>
</table>
</div>
<center><input name="<?=CURSCRIPT?>_submit" type="submit" value="�� ��" class="mymps large"/></center>
</form>
<div class="pagination"><?=page2()?></div>
<div class="clear"></div>
<?php }?>

<form method="post" id="form1" name="form1" action="?" enctype="multipart/form-data" onSubmit="return CheckSubmit();">
<input name="type" value="<?=$type?>" type="hidden">
<input name="id" value="<?=$id?>" type="hidden">
<div id="<?=MPS_SOFTNAME?>">
<table width="100%"  border="0" cellspacing="0" cellpadding="0" class="vbm">
<tbody>
 <tr class="firstr">
    <td colspan="3"><?php echo $id?'����':'�ϴ�';?>�ֻ���õ�Ƭ���</td>
 </tr>
  <tr bgcolor="#FFFFFF">
    <td width="15%" align="right" valign="top">ѡ��λ�ã�</td>
    <td>
    <select name="typeid">
        <?php foreach($target as $k=>$v){?>
        <option value="<?=$k?>"<?php if($typeid == $k) echo ' selected ';?>><?=$v?></option>
        <?php }?>
    </select>
    </td>
  </tr>
  <tr bgcolor="#FFFFFF" >
    <td width="15%" align="right" valign="top">ͼƬ˳��</td>
    <td>
    <input name=displayorder type=text class="txt" value="<?=$edit['displayorder']?>"/>
    </td>
  </tr>
  <tr bgcolor="#FFFFFF" >
    <td width="15%" align="right" valign="top">ͼƬ˵����</td>
    <td>
    <input name=words type=text class="text" value="<?=$edit['words']?>"/>
    </td>
  </tr>
  <tr bgcolor="#FFFFFF" >
    <td width="15%" align="right" valign="top">��ת��ַ��</td>
    <td>
    <input name=url type=text class="text" value="<?=$edit['url']?>"/>
    </td>
  </tr>
  <?php if($edit['image']){?>
  <input name="image" value="<?=$edit['image']?>" type="hidden">
  <tr bgcolor="#FFFFFF" >
    <td width="15%" align="right" valign="top">ԭͼƬ��</td>
    <td>
    <img src="<?=$edit['image']?>" width="640" height="110">
    </td>
  </tr>
  <?php }?>
  <tr bgcolor="#FFFFFF" >
    <td align="right" valign="top">ѡ���ϴ���ͼƬ��</td>
    <td><input type="file" name="mymps_focus" size="45" id="litpic"><br /><br />
      ֧���ϴ������ͣ�<?=$mymps_global[cfg_upimg_type]?><br />
�ֻ�����ҳ�õ�Ƭ�ߴ磺<?=$mymps_mymps[cfg_hdp_limit][width]?> * <?=$mymps_mymps[cfg_hdp_limit][height]?><br />
�ֻ���������ҳ�õ�Ƭ�ߴ磺<?=$mymps_mymps[cfg_hdp_limit][width]?> * <?=$mymps_mymps[cfg_hdp_limit][height]?><br />
</td>
  </tr>
</tbody>
</table>
</div> 
<center><input class="mymps large" type="submit" value="�� ��" name="focus_submit"> <input onClick="history.back(-1);" class="gray large" type="button" value="�� ��"></center>
</form>
<?php mymps_admin_tpl_global_foot();?>