<?php
$var_type = array(
	'text'=>'�ִ�',
	'textarea'=>'�༭��',
	'number'=>'����',
	'radio'=>'��ѡ',
	'checkbox'=>'��ѡ',
	'select'=>'ѡ��'
);

//user for option_edit
$mymps_admin_info_type=array(
	"text"=>'
		<tr>
		<td bgcolor="#f5fbff" width="45%" >
		<b>�ַ���󳤶�:</b>
		</td>
		<td bgcolor="#f5fbff">
		<input type="text" size="50" name="rules[text][maxlength]" value="'.$rules[text].'" >
		</td>
		</tr>
		',
	"textarea"=>'
		<tr>
		<td bgcolor="#f5fbff" width="45%" >
		<b>�ַ���󳤶�:</b>
		</td>
		<td bgcolor="#f5fbff">
		<input type="text" size="50" name="rules[textarea][maxlength]" value="'.$rules[textarea].'" >
		</td>
		</tr>
		',
	"radio"=>'
		<tr>
		<td bgcolor="#f5fbff" width="45%">
		<b>ѡ������:</b><br />ֻ����ĿΪ��ѡʱ��Ч��ÿ��һ��ѡ��Ⱥ�ǰ��Ϊѡ������(����������)������Ϊ���ݣ�����: <br /><i>1=���Ϸ�����Ϣϵͳ<br />2=mymps��ҵ��վϵͳ<br />3=my mpsB2B����ϵͳ</i><br />ע��: ѡ��ȷ���������޸����������ݵĶ�Ӧ��ϵ�����Կ�������ѡ����������ʾ˳�򣬿���ͨ���ƶ����е�ǰ��λ����ʵ��
		</td>
		<td bgcolor="#f5fbff">
		<textarea  rows="8" name="rules[radio][choices]" id="rules[radio][choices]" cols="50">'.$rules[radio].'</textarea>
		</td>
		</tr>
		',
	"checkbox"=>'
		<tr>
		<td bgcolor="#f5fbff" width="45%">
		<b>ѡ������:</b><br />ֻ����ĿΪ��ѡʱ��Ч��ÿ��һ��ѡ��Ⱥ�ǰ��Ϊѡ������(����������)������Ϊ���ݣ�����: <br /><i>1=���Ϸ�����Ϣϵͳ<br />2=mymps��ҵ��վϵͳ<br />3=my mpsB2B����ϵͳ</i><br />ע��: ѡ��ȷ���������޸����������ݵĶ�Ӧ��ϵ�����Կ�������ѡ����������ʾ˳�򣬿���ͨ���ƶ����е�ǰ��λ����ʵ��</td>
		<td bgcolor="#f5fbff">
		<textarea  rows="8" name="rules[checkbox][choices]" id="rules[checkbox][choices]" cols="50">'.$rules[checkbox].'</textarea>
		</td>
		</tr>
		',
	"select"=>'
		<tr>
		<td bgcolor="#f5fbff" width="25%">
		<b>ѡ������:</b><br />ֻ����ĿΪ��ѡʱ��Ч��ÿ��һ��ѡ��Ⱥ�ǰ��Ϊѡ������(����������)������Ϊ���ݣ�����: <br /><i>1=���Ϸ�����Ϣϵͳ<br />2=mymps��ҵ��վϵͳ<br />3=my mpsB2B����ϵͳ</i><br /><br />ע��: ѡ��ȷ���������޸����������ݵĶ�Ӧ��ϵ�����Կ�������ѡ����������ʾ˳�򣬿���ͨ���ƶ����е�ǰ��λ����ʵ��</td>
		<td bgcolor="#f5fbff">
	<textarea rows="8" name="rules[select][choices]" id="rules[select][choices]" cols="50">'.$rules[select].'</textarea>
		</td>
		</tr>
		',
	"number"=>'
		<tr>
		<td bgcolor="#f5fbff" width="45%" >
		<b>��λ����ѡ��:</b>
		</td>
		<td bgcolor="#f5fbff">
		<input type="text" size="50" name="rules[number][units]" value="'.$rules[number][units].'" >
		</td>
		</tr>
		<tr>
		<td bgcolor="#f5fbff" width="45%" >
		<b>������Χֵ����������˲��������������д��:</b>
		<br>ÿ��һ��ѡ��Ⱥ�ǰ��Ϊѡ����������Ϊ���ݣ�������д��λ������:<br /> <br /><i>1~1000=1000����<br />
1000~3000=1000~3000<br />
3000~5000=3000~5000<br />
5000~10000=5000~10000<br />
10000~=10000����</i><br /><br /><font color=red>ע��: ���ϸ��ո�ʽ��д</font><br> <b style=color:red>~</b> ǰ������ֱ�ʾ��Χ����Сֵ�� <b style=color:red>~</b> ��������ֱ�ʾ��Χ�����ֵ<br>ѡ��ȷ���������޸����������ݵĶ�Ӧ��ϵ�����Կ�������ѡ�<br>���������ʾ˳�򣬿���ͨ���ƶ����е�ǰ��λ����ʵ��</td>
		<td bgcolor="#f5fbff">
		<textarea rows="8" name="rules[number][choices]" id="rules[number][choices]" cols="50">'.$rules[number][choices].'</textarea>
		</td>
		</tr>
		'
);

function get_info_var_type($type,$name="",$rules="",$value="",$forward='back',$title='',$require=''){
	
	$required = $require == 1 ? "require=\"true\" datatype=\"limit\" msg=\"".$title."����Ϊ��\"" : "";
	if($forward == 'back'){
		switch($type){
			case 'text':
				$mymps_rule_str = $rules[maxlength]?$rules[maxlength]."�ַ�����":"";
				$mymps .= "<input maxlength=\"".$rules[maxlength]."\" name=\"extra[".$name."]\" value=\"".$value."\"  class=\"input input-large\" type=\"text\" size=\"40\" ".$required."> ".$mymps_rule_str;
			break;
			case 'textarea':
				$mymps_rule_str = $rules[maxlength]?"<br />���ó���".$rules[maxlength]."���ַ�":"";
				$mymps = "<textarea  maxlength=\"".$rules[maxlength]."\" name=\"extra[".$name."]\"  cols=\"61\" rows=\"10\" class=\"input\" ".$required.">".$value."</textarea> ".$mymps_rule_str;
			break;
			case 'radio':
				$i = 0;
				foreach($rules as $k => $v){
					$i = $i + 1;
					$mymps .= "<label for=\"".$name.$k."\"><input id=\"".$name.$k."\" name=\"extra[".$name."]\" type=\"radio\" class=\"radio\" value=\"".$k."\"";
					$mymps .= ($k == $value || $i == 1)?"checked":"";
					$mymps .= ">".$v."</label> ";
				}
				$i = $endrules = NULL;
			break;
			case 'checkbox':
				$count = $require == 1 ? count($rules) : "";
				$new_value = explode(",",$value);
				$required = "min=1 max=$count require=\"true\" datatype=\"limit|group\" msgid = $title  msg=\"����Ҫѡ��һ��".$title."\"";
				$mymps = "<div class=\"checkboxinner style=float:left;\">";
				foreach($rules as $k => $v){
					$mymps .= "<label for=\"".$name.$k."\" style=\"margin:0 10px 0 0;\"><input $required id=\"".$name.$k."\" name=\"extra[".$name."][]\" type=\"checkbox\" class=\"checkbox\" value=\"".$k."\"";
					$mymps .= in_array($k,$new_value)?"checked":"";
					$mymps .=">".$v."</label>";
				}
				$mymps .= "</div>";
				$endrules = $required = NULL;
			break;
			case 'select':
				$mymps .= "<select name=\"extra[".$name."]\" class=\"input\" ".$required.">";
				$mymps .= "<option value=\"\">��ѡ��".$title."</option>";
				foreach($rules as $k => $v){
					$mymps .= "<option value=\"".$k."\"";
					$mymps .= ($k == $value)?"selected ":"";
					$mymps .=">".$v."</option> ";
				}
				$mymps .= "</select>";
			break;
			case 'number':
				$required = $require == 1 ? "require=\"true\" datatype=\"limit|double\" msg=\"����д��ȷ��".$title."\"" : "";
				$mymps .= "<input $required msgid=\"".$title."\" name=\"extra[".$name."]\" value=\"".$value."\" type=\"text\" style=\"width:50px\"  class=\"input\"> <span class=units>".$rules[units]."</span>";
			break;
		}
	} else {
		switch($type){
			case 'text':
				$mymps_rule_str = $rules[maxlength]?$rules[maxlength]."�ַ�����":"";
				$mymps .= "<input maxlength=\"".$rules[maxlength]."\" name=\"".$name."\" value=\"".$value."\"  class=\"input input-large\" type=\"text\" size=\"40\"> ".$mymps_rule_str;
			break;
			case 'textarea':
				$mymps_rule_str = $rules[maxlength]?"<br />���ó���".$rules[maxlength]."���ַ�":"";
				$mymps = "<textarea maxlength=\"".$rules[maxlength]."\" name=\"".$name."\"  cols=\"100\" rows=\"10\" class=\"input\">".$value."</textarea> ".$mymps_rule_str;
			break;
			case 'radio':
				foreach($rules as $k => $v){
					$mymps .= "<label for=\"".$name.$k."\"><input id=\"".$name.$k."\" name=\"extra[".$name."]\" type=\"radio\" class=\"radio\" value=\"".$k."\"";
					$mymps .= ($k == $value)?"checked":"";
					$mymps .= ">".$v."</label> ";
				}
				$endrules = NULL;
			break;
			case 'checkbox':
				$new_value = explode(",",$value);
				foreach($rules as $k => $v){
					$mymps .= "<label for=\"".$name.$k."\" style=\"margin:0 10px 0 0;\"><input id=\"".$name.$k."\" name=\"".$name."\" type=\"checkbox\"  class=\"checkbox\" value=\"".$k."\"";
					$mymps .= in_array($k,$new_value)?"checked":"";
					$mymps .=">".$v."</label>";
				}
			break;
			case 'select':
				$mymps .= "<select name=\"".$name."\" class=\"input\" >";
				$mymps .= "<option value=\"\">��ѡ��".$title."</option>";
				foreach($rules as $k => $v){
					$mymps .= "<option value=\"".$k."\"";
					$mymps .= ($k == $value)?"selected ":"";
					$mymps .=">".$v."</option> ";
				}
				$mymps .= "</select>";
			break;
			case 'number':
				$mymps .= "<input name=\"".$name."[min]\" class=\"input\" type=\"text\" style=\"width:50px\"> �� <input  name=\"".$name."[max]\" class=\"input\" type=\"text\" style=\"width:50px; float:none;\"> ";
			break;
		}
	}
	return $mymps;
}

//get the category options when add and edit the information 
function return_category_info_options($modid = '',$edit_id = ''){
	global $db,$db_mymps,$charset;
	$return = array();
	if($modid > 1){
		$row = $db->getRow("SELECT id,options FROM `{$db_mymps}info_typemodels` WHERE id = '$modid'");
	
		if($row[options]){
			$resquery = $db->query("SELECT optionid,title,identifier,type,rules,required FROM `{$db_mymps}info_typeoptions` WHERE optionid IN ($row[options])");
			while($re = $db->fetchRow($resquery)){
				$r[$re[optionid]]['title'] = $re['title'];
				$r[$re[optionid]]['identifier'] = $re['identifier'];
				$r[$re[optionid]]['type'] = $re['type'];
				$r[$re[optionid]]['rules'] = $re['rules'];
				$r[$re[optionid]]['required'] = $re['required'];
			}
		}
		
		if(is_array($option = explode(',',$row[options]))){
			foreach($option as $w=>$u){
				$res = $r[$u];
				$required	= $res[required]=='on'? 1 : '';
				$extra		= ($charset == 'utf-8')	? utf8_unserialize($res[rules])	: unserialize($res[rules]);
				if(is_array($extra)){
					if($edit_id) $get = $db ->getRow("SELECT * FROM `{$db_mymps}information_{$modid}` WHERE id = '$edit_id'");
					$get_value = $get[$res[identifier]];
					foreach($extra as $k => $value){
						if($res[type] == 'radio' || $res[type] == 'select' || $res[type] == 'checkbox'){
							$extra = arraychange($value);
						}elseif($res[type] == 'number' && $k == 'units'){
							continue;
						}
						$returns['required']  =  $required;
						$returns['title']	  =  $res['title'];
						$returns['identifier']=  $res['identifier'];
						$returns['value']	  =  get_info_var_type($res[type],$res[identifier],$extra,$get_value,'back',$res['title'],$required);
						$return[] = $returns;
					}
				}
			}
		}
	}
	return $return ? $return : NULL;
}
?>