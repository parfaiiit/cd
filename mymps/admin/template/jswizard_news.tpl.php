<?php 
include mymps_tpl('inc_head');
?>
<script language="javascript">
function isUndefined(variable) {
	return typeof variable == 'undefined' ? true : false;
}

function insertunit(text) {
	$obj('jstemplate').focus();
	if(!isUndefined($obj('jstemplate').selectionStart)) {
		var opn = $obj('jstemplate').selectionStart + 0;
		$obj('jstemplate').value = $obj('jstemplate').value.substr(0, $obj('jstemplate').selectionStart) + text + $obj('jstemplate').value.substr($obj('jstemplate').selectionEnd);
	} else if(document.selection && document.selection.createRange) {
		var sel = document.selection.createRange();
		sel.text = text.replace(/\r?\n/g, '\r\n');
		sel.moveStart('character', -strlen(text));
	} else {
		$obj('jstemplate').value += text;
	}
}
</script>
<style>
.jswizard{ padding:10px 0; line-height:22px}
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
<?php if($id){?>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
    <tr class="firstr"><td>Ԥ��</td></tr>
	<tbody style="display: yes; background-color:white">
	<tr><td><div class="jswizard"><script language="javascript" src="../javascript.php?flag=<?=$flag?>" <?php if($parameter['jscharset'] == 1) echo 'charset="utf-8"';?>></script></div>
    </td>
    </tr>
    </tbody>
</table>
</div>
<? }?>
<form action="?" method="post">
<input name="customtype" value="news" type="hidden">
<input name="id" value="<?=$id?>" type="hidden">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
    <tr class="firstr"><td colspan="3">��վ�������ݵ���ģ��</td></tr>
    <tbody>
    <tr>
    <td><a href="###" title="������" onclick="insertunit('{title}')">{title}</a>��<a href="###" title="��������" onclick="insertunit('{title_nolink}')">{title_nolink}</a> �������ű���</td>
    <td><a href="###" onclick="insertunit('{imgpath}')">{imgpath}</a> ������������ͼ��ַ</td>
    <td><a href="###" onclick="insertunit('{introduce}')">{introduce}</a> �������ż������</td>
    </tr>
    <tr>
    <td><a href="###" onclick="insertunit('{catname}')">{catname}</a> ��������������Ŀ������</td>
    <td><a href="###" onclick="insertunit('{begintime}')">{begintime}</a> �������ŷ���ʱ��</td>
    <td><a href="###" onclick="insertunit('{link}')">{link}</a> ������������</td>
    </tr>
    <tr>
    <td><a href="###" onclick="insertunit('{hit}')">{hit}</a> �����Ķ���</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
    <tr>
    <td colspan="3">
    <textarea cols="100" rows="5" id="jstemplate" name="parameter[jstemplate]" style="width: 95%;"><?php echo $parameter['jstemplate'] ? $parameter['jstemplate'] : '<li>{title}</li>'; ?></textarea>
    </td>
    </tr>
    </tbody>
</table>
</div>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
<tr class="firstr"><td colspan="2">�����б�</td></tr>
<tbody id="menu_4d4985d65fe805ed" style="display: yes; background-color:white">
<tr><td width="45%" class="altbg1" ><b>��ǩ��/���ݵ���Ψһ��ʶ:</b><br /><span class="smalltxt">������һ�����ڼ�����ܴ�������ݵ��ýű����õı�ʶ��������Ӣ�ļ����ֱ�ʾ</span></td><td class="altbg2"><input type="text" class="text" size="50" name="flag" value="<?php echo $flag; ?>" >
</td></tr>
<tr>
<td width="45%" class="altbg1" ><b>������Ŀ:</b><br /><span class="smalltxt">������������������õİ�飬���԰�ס CTRL ��ѡ��ȫѡ��ȫ��ѡ��Ϊ��������</span>
</td>
<td class="altbg2">
<select name="parameter[catid]">
<option value="" >&nbsp;> ȫ��������Ŀ</option>
<?php echo cat_list('channel',0,$parameter[catid],true); ?>
</select>
</td>
</tr>
<tr><td width="45%" class="altbg1" ><b>��ʾ��������:</b><br /><span class="smalltxt">����һ����ʾ������������������Ϊ���� 0 ������</span></td><td class="altbg2"><input type="text" class="text" size="50" name="parameter[items]" value="<?php echo $parameter[items]; ?>" >
</td></tr><tr><td width="45%" class="altbg1" ><b>��������ֽ���:</b><br /><span class="smalltxt">���õ����ⳤ�ȳ������趨ʱ���Ƿ񽫱����Զ����������趨�е��ֽ�����0 Ϊ���Զ�����</span></td><td class="altbg2"><input type="text" class="text" size="50" name="parameter[maxlength]" value="<?php echo $parameter[maxlength]; ?>" >
</td></tr>
<tr><td width="45%" class="altbg1" ><b>ֻ��ʾָ��������������:</b><br /><span class="smalltxt">�����ض������ⷶΧ��ע��: ȫѡ��ȫ��ѡ��Ϊ�������κι���</span></td>
<td class="altbg2">
<?php
 echo get_special_news($parameter['special']);?>
</td>
</tr>
<tr><td width="45%" class="altbg1" ><b>���Ӵ�λ��:</b><br /><span class="smalltxt">�������ӿ�����λ��</span></td><td class="altbg2"><label for="_self"><input class="radio" type="radio" name="parameter[newwindow]" value="0" id="_self" <?php if($parameter[newwindow] == 0) echo 'checked'; ?>> �ڵ�ǰ���ڴ�</label><br /><label for="_target"><input class="radio" type="radio" name="parameter[newwindow]" value="1" id="_target" <?php if($parameter[newwindow] == 1) echo 'checked'; ?>> ���´��ڴ�</label></td></tr><tr><td width="45%" class="altbg1" ><b>��������ʽ:</b><br /><span class="smalltxt">��������һ�ֶζ������������</span></td><td class="altbg2"><label for="dateline"><input class="radio" type="radio" name="parameter[orderby]" value="dateline" id="dateline" <?php if($parameter[orderby] == 'dateline' || !$parameter) echo 'checked'; ?>> ������ʱ�䵹������</label><br /><label for="views"><input class="radio" type="radio" name="parameter[orderby]" value="views" id="views" <?php if($parameter[orderby] == 'views') echo 'checked'; ?>> �����������������</label></td></tr>
<tr><td width="45%" class="altbg1" ><b>ǿ���ַ�ת��:</b><br /><span class="smalltxt">ǿ��ת�����ݵ������������Ϊ UTF-8 ����</span></td><td class="altbg2"><label for="jacharset"><input class="radio" type="radio" name="parameter[jscharset]" value="1" <?php if($parameter[jscharset] == 1) echo 'checked'; ?> id="jscharset"> ��</label> &nbsp; &nbsp; 
<label for="no_jscharset"><input class="radio" type="radio" name="parameter[jscharset]" value="0" id="no_jscharset" <?php if($parameter[jscharset] == 0) echo 'checked'; ?>> ��</label>
</td></tr>
</tbody>
</table>
</div>
<center>
<input class="mymps large" type="submit" name="<?=CURSCRIPT?>_submit" value="�� ��"><input name="preview" type="hidden" value="1"></center></form><br /></center>
</form>
<?php mymps_admin_tpl_global_foot();?>