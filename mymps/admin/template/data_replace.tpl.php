<?php include mymps_tpl('inc_head');?>
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
  <tr class="firstr">
  	<td colspan="2">������ʾ</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td id="menu_tip">
		<li>
	    ���ݱ��Ż�����ȥ�������ļ��е���Ƭ��ʹ��¼���н��ܣ���߶�д�ٶȡ�</li>
    </td>
  </tr>
</table>
</div>
<div id="<?=MPS_SOFTNAME?>" style="padding-bottom:0">
<div class="mpstopic-category">
	<div class="panel-tab">
		<ul class="clearfix tab-list">
			<li><a href="database.php?part=optimize">���ݿ��Ż�</a></li>
			<li><a href="database.php?part=check">���ݿ���</a></li>
			<li><a href="database.php?part=repair">���ݿ��޸�</a></li>
			<li><a href="data_replace.php" class="current">���ݿ������滻</a></li>
		</ul>
	</div>
</div>
</div>
<div id="<?=MPS_SOFTNAME?>">
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="vbm">
  <form action="data_replace.php" name="form1" method="post" target="stafrm" onSubmit="return CheckSubmit()">
  	<input type='hidden' name='part' value='do_action'>
    <tr class="firstr">
      <td colspan="2">
        ���ݿ������滻��
      </td>
    </tr>
    <tr bgcolor="#ffffff">
      <td bgcolor="#FFFFFF" colspan="2">
			�������������滻���ݿ���ĳ�ֶε����ݣ��˲�����ΪΣ�գ���С��ʹ�á�
            </td>
          </tr>

          <tr id='datasel' bgcolor="#ffffff">
            <td width="15%" style="background-color:#f1f5f8;" height="66">&nbsp;ѡ�����ݱ����ֶΣ�</td>
            <td> 
			<table width="98%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td id="tables">
                    <?php
  $mymps_tables = fetchtablelist($db_mymps);
  echo "<select name='exptable' id='exptable' size='10' style='width:60%' onchange='ShowFields()'>\r\n";
  foreach($mymps_tables as $key => $val){
	  echo "<option value='{$val[Name]}'>{$val[Name]}</option>\r\n";
  }
  echo "</select>\r\n";
	$db->Close();
				  ?>
                  </td>
                </tr>
                <tr>
                  <td height="28"> Ҫ�滻���ֶΣ�
                    <input name="rpfield" type="text" id="rpfield" class="alltxt" />
                  </td>
                </tr>
              </table></td>
          </tr>

          <tr bgcolor="#ffffff">
            <td style="background-color:#f1f5f8;">&nbsp;���滻���ݣ�</td>
            <td><textarea name="rpstring" id="rpstring" class="alltxt" style="width:60%;height:50px"></textarea></td>
          </tr>
          <tr bgcolor="#ffffff">
            <td style="background-color:#f1f5f8;">&nbsp;�滻Ϊ��</td>

            <td><textarea name="tostring" id="tostring" class="alltxt" style="width:60%;height:50px"></textarea></td>
          </tr>
    	<tr bgcolor="#ffffff">
			<td>&nbsp;</td>
      		<td height="31" bgcolor="#ffffff">
      		<input type="submit" name="Submit" value="��ʼ�滻����" class="mini gray" />
      	</td>
    </tr>
	<?php include mymps_tpl('html_runbox');?>
  </form>
</table>
</div>
<?php mymps_admin_tpl_global_foot();?>