<?php include mymps_tpl('inc_head');?>
<style>
.smalltxt{ font-size:12px!important; color:#999!important; font-weight:100!important}
.altbg1{ background-color:#f1f5f8}
</style>
<script language="javascript" src="js/vbm.js"></script>
<div id="<?=MPS_SOFTNAME?>" style=" padding-bottom:0">
    <div class="mpstopic-category">
        <div class="panel-tab">
            <ul class="clearfix tab-list">
                <li><a href="?part=settings" class="current">��������</a></li>
                <li><a href="?">������Ŀ����</a></li>
            </ul>
        </div>
    </div>
</div>
<form method="post" action="?">
<input name="return_url" value="<?php echo GetUrl();?>" type="hidden">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
    <tr class="firstr"><td colspan="2">���ݵ���</td></tr>
    <tbody style="display: yes; background-color:white">
        <tr>
            <td width="45%" class="altbg1" ><b>�����ⲿ����:</b><br /><span class="smalltxt">�ⲿ���ý�ʹ�������Խ�<?=$mymps_global['SiteName']?>���·�����Ϣ���⡢���е�����Ƕ�뵽������ͨ��ҳ�У��������������<?=$mymps_global['SiteName']?>���ɻ�֪<?=$mymps_global['SiteName']?>������µ����</span></td><td class="altbg2"><label for="1"><input class="radio" type="radio" name="settingsnew[jsstatus]" value="1" id="1" <?php if($settings[jsstatus] == 1){echo 'checked';} ?> 
            onclick="$Obj('hidden_settings_jsstatus').style.display = '';" > ��</label> &nbsp; &nbsp; 
            <label for="0"><input class="radio" type="radio" name="settingsnew[jsstatus]" value="0" id="0" onclick="$Obj('hidden_settings_jsstatus').style.display = 'none';" <?php if($settings[jsstatus] == 0){echo 'checked';} ?>> ��</label>
            </td>
        </tr>
    <tbody>
    <tbody id="hidden_settings_jsstatus" style="background-color:white; <?php if($settings[jsstatus] == 0){echo 'display:none;';}?>">
    <tr>
        <td width="45%" class="altbg1" ><b>���ݵ��û���ʱ��(��):</b><br /><span class="smalltxt">����һЩ������������ȽϺķ���Դ�����ݵ��ó�����û��漼����ʵ�����ݵĶ��ڸ��£�Ĭ��ֵ 1800����������Ϊ 900 ����ֵ��0 Ϊ������(���ķ�ϵͳ��Դ)</span></td><td class="altbg2"><input type="text" size="50" name="settingsnew[jscachelife]" value="<?=$settings[jscachelife]?>" class="text">
        </td>
    </tr>
    <tr>
        <td width="45%" class="altbg1" ><b>�ⲿ�����������ڸ�ʽ:</b><br />
        <span class="smalltxt">ʹ�� Y ��ʾ�꣬m ��ʾ�£�d ��ʾ�졣�� Y/m/d ��ʾ 2010/12/31</span></td><td class="altbg2"><input type="text" size="50" name="settingsnew[jsdateformat]" value="<?=$settings[jsdateformat]?>" class="text">
        </td>
    </tr>
    <tr>
        <td width="45%" class="altbg1" valign="top"><b>�ⲿ����������·����:</b><br /><span class="smalltxt">Ϊ�˱���������վ�Ƿ�����<?=$mymps_global['SiteName']?>���ݣ��������ķ����������������������������<?=$mymps_global['SiteName']?>���ݵ���·�����б�ֻ�����б��е���������վ�����ܵ�����<?=$mymps_global['SiteName']?>����Ϣ��ÿ������һ�У���֧��ͨ������������ http:// ���������������ݣ�����Ϊ��������·�����κ���վ���ɵ���</span></td>
        <td class="altbg2"><textarea  rows="6" name="settingsnew[jsrefdomains]" id="settingsnew[jsrefdomains]" cols="50"><?php echo $settings[jsrefdomains]?></textarea></td></tr>
    </tbody>
</table>
</div>
<center><input class="mymps large" value="�� ��" name="<?=CURSCRIPT?>_submit" type="submit"></center>
</form>
<?php mymps_admin_tpl_global_foot();?>