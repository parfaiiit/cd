<?php include mymps_tpl('inc_head');?>
<script language='javascript'>
function CheckSubmit()
{
	if(document.form1.url.value=="http://"||document.form1.url.value=="")
	{
   		document.form1.url.focus();
   		alert("��ַ����Ϊ�գ�");
   		return false;
	}
	if(document.form1.webname.value=="")
	{
   		document.form1.webname.focus();
   		alert("��վ���Ʋ���Ϊ�գ�");
   		return false;
	}
	return true;
}
</script>
<div id="<?=MPS_SOFTNAME?>" style=" padding-bottom:0">
    <div class="mpstopic-category">
        <div class="panel-tab">
            <ul class="clearfix tab-list">
                <li><a href="friendlink.php?part=list" <?php if($part=='list'){?>class="current"<?php }?>>��������������</a></li>
                <li><a href="friendlink.php?part=add" <?php if($part=='add'){?>class="current"<?php }?>>������������</a></li>
                <li><a href="friendlink.php?do=type" <?php if($do=='type'){?>class="current"<?php }?>>��վ���͹���</a></li>
            </ul>
        </div>
    </div>
</div>

<form action="friendlink.php?part=insert" method="post" enctype="multipart/form-data" name="form1" onSubmit="return CheckSubmit();";>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
<input type="hidden" name="createtime" value="<?=date("Y-m-d H:i:s", time())?>">
<tr class="firstr">
<td colspan="2">��վ�ſ�</td>
</tr>
  <tr bgcolor="#f5fbff">
    <td width="19%" height="25">��ַ��</td>
    <td width="81%">
        <input name="url" type=text class=text id="url" value="#" size="30" />
    </td>
  </tr>
  <tr bgcolor="#f5fbff">
    <td height="25">��վ���ƣ�</td>
    <td>
        <input name="webname" type=text class=text id="webname" size="30" />
    </td>
  </tr>
  <tr bgcolor="#f5fbff">
    <td height="25">��վLOGO��</td>
    <td>
        <input name="weblogo" type=text class=text id="weblogo" size="30"/> <br />�ߴ�80*35<br />
����ʾ���������������logo��ַ<br />
logo����ʾ�ڷ���ҳ��
    </td>
  </tr>
<tr class="firstr"><td colspan="2">��ʾλ��</td></tr>
  <tr bgcolor="#f5fbff">
    <td height="25">��ʾ����վ��ҳ��</td>
    <td>
    <select name="ifindex" id="ifindex">
    <option value="2">��</option>
	<option value="1">��</option>
    </select> 
    </td>
  </tr>
<tr bgcolor="#f5fbff">
    <td height="25">��ʾ�ڸ÷����£�</td>
    <td>
	<select name="catid">
	<option value="0">���ڷ�����ʾ</option>
	<?=cat_list('category',0,0,true,1)?>
  </select>
    </td>
  </tr>
<tr class="firstr"><td colspan="2">��������</td></tr>
  <tr bgcolor="#f5fbff">
    <td height="25">��վ���ͣ�</td>
    <td>
    <select name="typeid" id="typeid">
<?php 
foreach($links AS $row){
?>
    <option value="<?=$row[id]?>"><?=$row[typename]?></option>
<?php
}
?>
    </select>
    </td>
  </tr>
  <tr bgcolor="#f5fbff">
    <td width="19%" height="25">����λ�ã�</td>
    <td width="81%">
    <input name="ordernumber" type=text class=txt id="order" size="10" />
    (��ֵԽС������Խ��ǰ)
    </td>
  </tr>
  <tr bgcolor="#f5fbff">
    <td height="25">����״̬��</td>
    <td>
    <label for="1"><input type='radio' name='ischeck' value="1" id="1" class="radio"/> ����</label>
    <label for="2"><input type='radio' name='ischeck' value="2" checked id="2" class="radio"/> ����</label>
    </td>
  </tr>

</table>
</div>
<center><input type="submit" name="Submit" value="�� ��" class="mymps large"/></center>
</form>
<?php mymps_admin_tpl_global_foot();?>