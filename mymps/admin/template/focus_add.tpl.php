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
     if(document.form1.mymps_focus.value==""){
	     alert("���ϴ�ͼƬ��");
	     document.form1.mymps_focus.focus();
	     return false;
     }
     return true;
 }
</script>
<script language="javascript" src="js/vbm.js"></script>
<form method="post" name="form1" action="?part=add" enctype="multipart/form-data" onSubmit="return CheckSubmit();">
<div id="<?=MPS_SOFTNAME?>">
<table width="100%"  border="0" cellspacing="0" cellpadding="0" class="vbm">
            <tbody>
              <tr bgcolor="#f5fbff" >
                <td width="15%" align="right" valign="top">ѡ��λ�ã�</td>
                <td>
                <select name="typename">
                	<option value="��վ��ҳ">��վ��ҳ</option>
                    <option value="������ҳ">������ҳ</option>
                </select>
                </td>
              </tr>
              <tr bgcolor="#f5fbff" >
                <td width="15%" align="right" valign="top">ͼƬ˳��</td>
                <td>
                <input name=focusorder type=text class="text" value="<?=$maxorder?>"/>
                </td>
              </tr>
              <tr bgcolor="#f5fbff" >
                <td width="15%" align="right" valign="top">ͼƬ˵����</td>
                <td>
                <input name=words type=text class="text" />
                </td>
              </tr>
              <tr bgcolor="#f5fbff" >
                <td width="15%" align="right" valign="top">��ת��ַ��</td>
                <td>
                <input name=url type=text class="text" value="http://"/>
                </td>
              </tr>
              <tr bgcolor="#f5fbff" >
                <td align="right" valign="top">ѡ���ϴ���ͼƬ��</td>
                <td><input type="file" name="mymps_focus" size="45" id="litpic"><br /><br />
                  ֧���ϴ������ͣ�<?=$mymps_global[cfg_upimg_type]?><br />
��վ��ҳ�õ�Ƭ�ߴ磺<?=$mymps_mymps[cfg_focus_limit][$tpl_index[banmian]][index][width]?> * <?=$mymps_mymps[cfg_focus_limit][$tpl_index[banmian]][index][height]?><br />
������ҳ�õ�Ƭ�ߴ磺<?=$mymps_mymps[cfg_focus_limit][news][width]?> * <?=$mymps_mymps[cfg_focus_limit][news][height]?><br />
</td>
              </tr>
            </tbody>
          </table>
</div> 
<center><input class="mymps large" type="submit" value="�� ��" name="focus_submit"></center>
</form>
<?php mymps_admin_tpl_global_foot();?>