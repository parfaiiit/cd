<?php include mymps_tpl('inc_head');?>
<script language='javascript'>
	function CheckSubmit()
  {
     if(document.form1.focusorder.value==""){
	     alert("�õ�Ƭ˳����Ϊ�գ�");
	     document.form1.focusorder.focus();
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
     if(document.form1.vbm_img.value==""){
	     alert("���ϴ�ͼƬ��");
	     document.form1.vbm_img.focus();
	     return false;
     }
     return true;
 }
</script>
<script language="javascript" src="js/vbm.js"></script>
<form method="post" name="form1" action="focus.php?part=<?=$part?>" enctype="multipart/form-data"  onSubmit="return CheckSubmit();">
<input name="image" value="<?=$row[image]?>" type="hidden">
<input name="pre_image" value="<?=$row[pre_image]?>" type="hidden">
<input name=id type=hidden value="<?=$row[id]?>"/>
<input name="typename" value="<?=$row[typename]?>" type="hidden" />
<div id="<?=MPS_SOFTNAME?>">
<table width="100%"  border="0" cellspacing="0" cellpadding="0" class="vbm">
            <tbody>
              <tr bgcolor="#f5fbff" >
                <td width="15%">ͼƬԴ��ַ��</td>
                <td>
                <input name=image type=text class="text" style='background-color:#CCCCCC' value="<?=$row[image]?>" readonly="readonly"/> ���ɸ���
                </td>
              </tr>
              <tr bgcolor="#f5fbff" >
                <td width="15%">ԭͼƬ��</td>
                <td>
                <img src="<?=$row[pre_image]?>"/>
                </td>
              </tr>
            <tr bgcolor="#f5fbff">
                <td align="right" valign="top">ѡ���ϴ���ͼƬ��</td>
                <td><input type="file" name="mymps_focus" size="45" id="litpic"><br /><br />
                  ֧���ϴ������ͣ�<?=$mymps_global[cfg_upimg_type]?><br />
��վ��ҳ�õ�Ƭ�ߴ磺<?=$mymps_mymps[cfg_focus_limit][$tpl_index[banmian]][index][width]?> * <?=$mymps_mymps[cfg_focus_limit][$tpl_index[banmian]][index][height]?><br />
������ҳ�õ�Ƭ�ߴ磺<?=$mymps_mymps[cfg_focus_limit][news][width]?> * <?=$mymps_mymps[cfg_focus_limit][news][height]?><br />
</td>
              </tr>
              <tr bgcolor="#f5fbff" >
                <td width="15%">ͼƬ˳��</td>
                <td>
                <input name=focusorder type=text class="text" value="<?=$row[focusorder]?>"/>
                </td>
              </tr>
              <tr bgcolor="#f5fbff" >
                <td width="15%">ͼƬ˵����</td>
                <td>
                <input name=words type=text class="text" value="<?=$row[words]?>"/>
                </td>
              </tr>
              <tr bgcolor="#f5fbff" >
                <td width="15%">��ת��ַ��</td>
                <td>
                <input name=url type=text size=35 style='width:250px' value="<?=$row[url]?>"/>
                </td>
              </tr>
            </tbody>
            <tfoot>
              <tr bgcolor="#f5fbff" >
                <td height="45">&nbsp;</td>
                <td height="45">
                <input value="�� ��" type="submit" class="mymps mini" name="<?php echo CURSCRIPT; ?>_submit">��
                <input type="reset" onClick=history.back() value="�� ��" class="mymps mini">
                </td>
              </tr>
            </tfoot>
          </table>
</div>           
</form>
<?php mymps_admin_tpl_global_foot();?>