<?php include mymps_tpl('inc_head');?>
<div id="<?=MPS_SOFTNAME?>" style=" padding-bottom:0">
    <div class="mpstopic-category">
        <div class="panel-tab">
            <ul class="clearfix tab-list">
                <li><a href="friendlink.php?part=list">��������������</a></li>
                <li><a href="friendlink.php?part=add">������������</a></li>
                <li><a href="friendlink.php?do=type">��վ���͹���</a></li>
				<li><a href="friendlink.php?part=edit&id=<?=$id?>" class="current">�༭����</a></li>
            </ul>
        </div>
    </div>
</div>
<form action="friendlink.php?part=update&id=<?=$link[id]?>" method="post" enctype="multipart/form-data" name="form1" onSubmit="return CheckSubmit();";>
    <input type="hidden" name="createtime" value="<?=date("Y-m-d H:i:s", time()) 
?>">
<div id="<?=MPS_SOFTNAME?>">
<table width="100%" cellspacing="0" cellpadding="0" class="vbm">
      <tr class="firstr">
        <td colspan="5">
        <div class="left"><a href="javascript:collapse_change('1')">��վ�ſ�</a></div>
        <div class="right"><a href="javascript:collapse_change('1')"><img id="menuimg_1" src="template/images/menu_reduce.gif"/></a></div>
        </td>
      </tr>
      <tbody id="menu_1">
	  <tr bgcolor="#f5fbff">
        <td width="19%" height="25">��ַ��</td>
        <td>
        	<input name="url" type=text class=text id="url" value="<?=$link[url]?>" size="30" />        </td>
      </tr>
      <tr bgcolor="#f5fbff">
        <td height="25">��վ���ƣ�</td>
        <td>
        	<input name="webname" type=text class=text id="webname" size="30" value="<?=$link[webname]?>"/>        </td>
      </tr>
      <tr bgcolor="#f5fbff">
        <td height="25">��վLOGO��</td>
        <td>
        	<input name="weblogo" type=text class=text id="webname" size="30" value="<?=$link[weblogo]?>"/> <br />�ߴ�80*35<br />
����ʾ���������������logo��ַ<br />
logo����ʾ�ڷ���ҳ��</td>
      </tr>
      <tr bgcolor="#f5fbff">
        <td width="19%" height="25">PRֵ</td>
        <td>
		<?=apply_flink_pr($link[pr]);?>	
        </td>
      </tr>
      <tr bgcolor="#f5fbff">
        <td width="19%" height="25">��IP</td>
        <td>
        <?=apply_flink_dayip($link[dayip]);?>	    
		</td>
      </tr>
      <tr bgcolor="#f5fbff">
        <td height="25">��վ�����</td>
        <td><textarea name="msg" cols="50" rows="5" id="msg"><?=de_textarea_post_change($link[msg])?></textarea></td>
      </tr>
      </tbody>
      </table>
</div>
<div id="<?=MPS_SOFTNAME?>">
<table width="100%" cellspacing="0" cellpadding="0" class="vbm">
      <tr class="firstr">
      <td colspan="3">
        <div class="left"><a href="javascript:collapse_change('2')">��ϵ��ʽ</a></div>
        <div class="right"><a href="javascript:collapse_change('2')"><img id="menuimg_2" src="template/images/menu_reduce.gif"/></a></div>
       </td>
      </tr>
      <tbody id="menu_2">
      <tr bgcolor="#f5fbff">
        <td height="25" width="19%">վ��������</td>
        <td>
        	<input name="name" type=text class=text id="name" size="30"  value="<?=$link[name]?>"/>        </td>
      </tr>
      <tr bgcolor="#f5fbff">
        <td height="25">վ��QQ��</td>
        <td>
        	<input name="qq" type=text class=text id="qq" size="30"  value="<?=$link[qq]?>"/>        </td>
      </tr>
      <tr bgcolor="#f5fbff">
        <td height="25">վ��Email��</td>
        <td>
        	<input name="email" type=text class=text id="email" size="30"  value="<?=$link[email]?>"/>        </td>
      </tr>
      </tbody>
      </table>
</div>
<div id="<?=MPS_SOFTNAME?>">
<table width="100%" cellspacing="0" cellpadding="0" class="vbm">
     <tr class="firstr">
        <td colspan="3">
         <div class="left"><a href="javascript:collapse_change('3')">��������</a></div>
         <div class="right"><a href="javascript:collapse_change('3')"><img id="menuimg_3" src="template/images/menu_reduce.gif"/></a></div>
        </td>
      </tr>
      <tbody id="menu_3">
      <tr bgcolor="#f5fbff">
        <td height="25">��վ���ͣ�</td>
        <td>
        <select name="typeid" id="typeid">
		<?php echo webtype_option($link[typeid]) ; ?>
        </select>
        </td>
      </tr>
      <tr bgcolor="#f5fbff">
        <td height="25">����״̬��</td>
        <td>
        <label><input class="radio" type='radio' name='ischeck' value="1" <?php if ($link[ischeck]=="1") echo"checked='checked'";?>> ����</label>
        <label><input type='radio' class="radio" name='ischeck' value="2" <? if ($link[ischeck]=="2") echo"checked='checked'";?>> ����</label>
                </td>
      </tr>
      <tr bgcolor="#f5fbff">
        <td width="19%" height="25">������ţ�</td>
        <td>
<input name="ordernumber" type=text class=txt id="order" value="<?=$link[ordernumber]?>"/>        
(��С��������)        
		</td>
      </tr>
</tbody>
    </table>
</div>
<div id="<?=MPS_SOFTNAME?>">
<table width="100%" cellspacing="0" cellpadding="0" class="vbm">
<tr class="firstr"><td colspan="2">��ʾλ��</td></tr>
  <tr bgcolor="#f5fbff">
    <td width="19%" height="25">��ʾ����վ��ҳ��</td>
    <td>
    <select name="ifindex" id="ifindex">
    <option value="2" <?php if($link[ifindex] == 2) echo 'selected';?>>��</option>
	<option value="1" <?php if($link[ifindex] == 1) echo 'selected';?>>��</option>
    </select>
    </td>
  </tr>
<tr bgcolor="#f5fbff">
    <td height="25">��ʾ�ڸ÷����£�</td>
    <td>
	<select name="catid">
	<option value="0" <?php if($link[catid] == 0) echo 'selected';?>>���ڷ�����ʾ</option>
	<?=cat_list('category',0,$link['catid'],true,3)?>
  </select>
    </td>
  </tr>
      </tbody>
    </table>
</div>
<center><input type="submit" name="submit" value="�� ��" class="mymps large" /></center>
</form>
<?php mymps_admin_tpl_global_foot();?>