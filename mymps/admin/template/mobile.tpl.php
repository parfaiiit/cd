<?php include mymps_tpl('inc_head');?>
<style>
.vtop{ background-color:#ffffff}
.smalltxt{ font-size:12px!important; color:#999!important; font-weight:100!important}
.altbg1{ background-color:#f1f5f8; width:45%;}
</style>
<div id="<?=MPS_SOFTNAME?>" style=" padding-bottom:0">
    <div class="mpstopic-category">
        <div class="panel-tab">
            <ul class="clearfix tab-list">
                <li><a href="?" class="current">��������</a></li>
                <li><a href="?type=nav">���ֵ�������</a></li>
                <li><a href="?type=nav_ico">ͼ�굼������(��ҳ)</a></li>
                <li><a href="?type=gg">�õ�Ƭ�������</a></li>
            </ul>
        </div>
    </div>
</div>
<form method="post" action="?">
<input type="hidden" name="type" value="<?=$type?>">
<input name="return_url" value="<?php echo GetUrl();?>" type="hidden">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
    <tr class="firstr"><td colspan="2">�ֻ���ȫ������</td></tr>
    <tbody style="display: yes; background-color:white">
        <tr>
            <td class="altbg1" ><b>�����ֻ���:</b><br /><span class="smalltxt">���������ܣ��û����ܷ����ֻ���</span></td><td class="altbg2">
			<label for="allowmobile1"><input class="radio" type="radio" name="settings[allowmobile]" value="1" id="allowmobile1" onclick="$('hidden_settings_mobile').style.display = '';" <? if($mobile[allowmobile] == 1) echo 'checked';?>> ��</label> &nbsp; &nbsp; 
            <label for="allowmobile0"><input class="radio" type="radio"  name="settings[allowmobile]" value="0" id="allowmobile0" onclick="$('hidden_settings_mobile').style.display = 'none';" <? if(empty($mobile[allowmobile])) echo 'checked';?>> ��</label>
            </td>
        </tr>
    <tbody>
    <tbody id="hidden_settings_mobile" style="background-color:white;<?php if(empty($mobile[allowmobile])) echo 'display:none;'?>">
		<!--<tr>
			<td class="altbg1" ><b>�����ֻ�������Զ���ת:</b><br /><span class="smalltxt">�������û�ʹ���ֻ������������վ����ҳ����ҳ��ʱ�Զ���ת����վ��ҳ���з��ʡ�</span></td><td class="altbg2"><label for="autorefresh1"><input class="radio" type="radio" name="settings[autorefresh]" value="1" id="autorefresh1" <?php if($mobile[autorefresh] == 1){echo 'checked';} ?>> ��</label> &nbsp; &nbsp; 
			<label for="autorefresh0"><input class="radio" type="radio"  name="settings[autorefresh]" value="0" id="autorefresh0" <?php if(empty($mobile[autorefresh])){echo 'checked';} ?>> ��</label>
			</td>
		</tr>-->
		<tr>
			<td class="altbg1" ><b>�Ƿ������ֻ���ע��:</b><br /><span class="smalltxt">�Ƿ����ֻ���ע�Ṧ�ܣ��ֻ�ע�᲻����û���Ŀ�е�ע��ҳ��������м��<br />���������</span></td><td class="altbg2"><label for="register1"><input class="radio" type="radio" name="settings[register]" value="1" id="register1" <?php if($mobile[register] == 1){echo 'checked';} ?>> ��</label> &nbsp; &nbsp; 
			<label for="register0"><input class="radio" type="radio"  name="settings[register]" value="0" id="register0" <?php if(empty($mobile[register])){echo 'checked';} ?>> ��</label>
			</td>
		</tr>
		<tr>
			<td class="altbg1" ><b>�Ƿ������ֻ��淢����Ϣ:</b><br /><span class="smalltxt">�Ƿ����ֻ��淢����Ϣ����<br />���������</span></td><td class="altbg2"><label for="post1"><input class="radio" type="radio" name="settings[post]" value="1" id="post1" <?php if($mobile[post] == 1){echo 'checked';} ?>> ��</label> &nbsp; &nbsp; 
			<label for="post0"><input class="radio" type="radio"  name="settings[post]" value="0" id="post0" <?php if(empty($mobile[post])){echo 'checked';} ?>> ��</label>
			</td>
		</tr>
		<tr>
			<td class="altbg1" ><b>ÿҳ��ʾ������:</b><br /><span class="smalltxt">�����б�ҳÿҳ��ʾ����������Ƽ�ֵΪ10</span></td><td class="altbg2"><input name="settings[mobiletopicperpage]" value="<?php echo $mobile[mobiletopicperpage] ? $mobile[mobiletopicperpage] : 10 ;?>" type="text" class="txt"   />
			</td>
		</tr>
		<tr>
			<td class="altbg1" ><b>�ֻ����������:</b><br /><span class="smalltxt">��http://wap.mymps.com.cn<br />�轫��ָ���Ķ���������/wapĿ¼</span></td><td class="altbg2"><input name="settings[mobiledomain]" type="text" class="text" value="<?php echo $mobile[mobiledomain]; ?>"/>
			</td>
		</tr>
        <!--<tr>
			<td class="altbg1" ><b>�ֻ���logo·��:</b><br /><span class="smalltxt">Ĭ��<font color="red">/logowap.png</font><br />����ߴ�111*26<br /><font color="blue">��û�п�����</font></span></td><td class="altbg2"><input name="settings[mobilelogo]" type="text" class="text" value="<?php echo $mobile[mobilelogo]; ?>"/>
			</td>
		</tr>-->
    </tbody>
</table>
</div>
<center><input name="<?=CURSCRIPT?>_submit" type="submit" value="�� ��" class="mymps large"/></center>
</form>
<?php mymps_admin_tpl_global_foot();?>