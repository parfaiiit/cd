<?php include mymps_tpl('inc_head');?>
<script language=javascript>
function chkform(){
	if(document.form1.catname.value==""){
		alert('��������Ŀ���⣡');
		document.form1.catname.focus();
		return false;
	}
	if(document.form1.cat.value==""){
		alert('��ѡ����Ŀ��');
		document.form1.cat.focus();
		return false;
	}
}
function do_copy(){
  ff = document.form1;
  ff.title.value=document.getElementById("catname").value;
  ff.keywords.value=document.getElementById("catname").value;
  ff.description.value=document.getElementById("catname").value;
}
function copyoption(s1, s2) {
	var s1 = $(s1);
	var s2 = $(s2);
	var len = s1.options.length;
	for(var i=0; i<len; i++) {
		op = s1.options[i];
		if(op.selected == true && !optionexists(s2, op.value)) {
			o = op.cloneNode(true);
			s2.appendChild(o);
		}
	}
}

function optionexists(s1, value) {
	var len = s1.options.length;
		for(var i=0; i<len; i++) {
			if(s1.options[i].value == value) {
				return true;
			}
		}
	return false;
}
</script>
<div id="<?=MPS_SOFTNAME?>" style=" padding-bottom:0">
    <div class="mpstopic-category">
        <div class="panel-tab">
            <ul class="clearfix tab-list">
                <li><a title="����ӵ��������" href="channel.php">����ӵ��������</a></li>
                <li><a title="�����������" href="channel.php?part=add">�����������</a></li>
				<li><a title="�༭�������" href="channel.php?part=edit&catid=<?=$catid?>" class="current">�༭�������</a></li>
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
    <td  id="menu_tip">
  <li>��Ŀ������Ϊ����ʱ������Ϊһ�����෽�����棬����������õ�ʱ������</li>
    </td>
  </tr>
</table>
</div>
<form method=post onSubmit="return chkform()" name="form1" action="?part=edit">
<input name="catid" value="<?=$cat[catid]?>" type="hidden">
<div id="<?=MPS_SOFTNAME?>">
<table width="100%"  border="0" cellspacing="0" cellpadding="0" class="vbm">
<tr class="firstr">
<td colspan="2">
    <div class="left"><a href="javascript:collapse_change('1')">��Ŀ������Ϣ</a></div>
    <div class="right"><a href="javascript:collapse_change('1')"><img id="menuimg_1" src="template/images/menu_reduce.gif"/></a></div>
</td>
</tr>
<tbody id="menu_1">
<tr bgcolor="#f5fbff">
  <td width="15%">��Ŀ���ƣ� </td>
  <td><input name="catname" type="text" class="text" id="catname" value="<?=$cat[catname]?>" size="30"> 
  		<select name="fontcolor">
          <option value="">Ĭ����ɫ</option>
          <?foreach ($cat_color as $k){?>
          <option value="<?=$k?>" style="background-color:<?=$k?>;" <?if($cat[color] == $k) echo 'selected';?>></option>
          <?}?>
        </select>
  		<font color="red">*</font></td>
</tr>
<tr bgcolor="#f5fbff">
  <td>������Ŀ�� </td>
  <td><select name="parentid" id="parentid" >
    <option value="0">��Ϊ����Ŀ...</option>
<?php echo cat_list('channel',0,$cat[parentid]);?>
  </select>  </td>
</tr>
<tr bgcolor="#f5fbff">
  <td>��Ŀ���� </td>
  <td><input name="catorder" type="text" class="text" id="catorder" value="<?=$cat[catorder]?>" size="13"></td>
</tr>
<tr bgcolor="#f5fbff">
  <td>�Ƿ����ã� </td>
  <td> <select name="isview">
      <?=get_ifview_options($cat[if_view])?>
      </select></td>
</tr>
</tbody>
</table>
</div>
<div id="<?=MPS_SOFTNAME?>">
<table cellpadding="0" cellspacing="0" class="vbm">
<tr class="firstr">
<td colspan="2">
    <div class="left"><a href="javascript:collapse_change('2')">SEO�Ż�����<font style="color:#FF6600; font-weight:100">(������Ŀ������ͬ��
<label for="copy">
���<input name="radio" id="copy" type="radio" onClick="do_copy();"  class="radio"/>����</label>
)</font></div>
    <div class="right"><a href="javascript:collapse_change('2')"><img id="menuimg_2" src="template/images/menu_reduce.gif"/></a></div>
</td>
</tr>
<tbody id="menu_2">
<tr bgcolor="#f5fbff">
  <td width="15%">��ʾ����(title)�� </td>
  <td> <input name="title" type="text" class="text" id="title" value="<?=$cat[title]?>" size="50"> <font color="red">*</font>(<font style="color:#FF6600">������֣�ݱ�������_֣�ݵ�������</font>,������15���ַ�)
  </td>
</tr>
<tr bgcolor="#f5fbff">
  <td>�ؼ���(keyword)�� </td>
  <td><input name="keywords" type="text" class="text" id="keywords" value="<?=$cat[keywords]?>" size="50">   (����ؼ�����","����;��վ���� <font color="red">{city}</font> ����)</td>
</tr>
<tr bgcolor="#f5fbff">
  <td>����(description)�� </td>
  <td><textarea name="description" cols="49" rows="5" id="description"><?=$cat[description]?></textarea> (��վ���� <font color="red">{city}</font> ����)</td>
</tr>
<tr bgcolor="#f5fbff">
  <td>Ŀ¼�����ʽ��<br /><i style="color:#666">���ɾ�̬Ŀ¼ʱ��Ч</i> </td>
  <td><?=GetHtmlType($cat[dir_type],'dir_type','edit',$cat[dir_typename])?> </td>
</tr>
</tbody>
</table>
</div>
<center>
<input type="submit" name="<?=CURSCRIPT?>_submit" value="�����޸�" class="mymps mini" />��
<input type="button" onClick="location.href='?part=list'" value="�� ��" class="mymps mini">
</center>
</form>
<?php mymps_admin_tpl_global_foot();?>