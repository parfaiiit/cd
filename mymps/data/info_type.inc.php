<?php
if (!defined('IN_MYMPS'))
{
    die('FORBIDDEN');
}
//user for option_edit
$mymps_admin_info_type=array(
	"number"=>'
		<tr>
		<td bgcolor="#f5fbff" width="45%" ><b>��ֵ���ֵ����ѡ��:</b></td>
		<td bgcolor="#f5fbff"><input type="text" size="50" name="rules[number][maxnum]" value="'.$rules.'" >
		</td>
		</tr>
		<tr>
		<td bgcolor="#f5fbff" width="45%" ><b>��ֵ��Сֵ����ѡ��:</b></td>
		<td bgcolor="#f5fbff"><input type="text" size="50" name="rules[number][minnum]" value="'.$rules.'" >
		</td>
		</tr>
		',
	"text"=>'
		<tr>
		<td bgcolor="#f5fbff" width="45%" >
		<b>������󳤶ȣ���ѡ��:</b>
		</td>
		<td bgcolor="#f5fbff">
		<input type="text" size="50" name="rules[text][maxlength]" value="'.$rules.'" >
		</td>
		</tr>
		',
	"textarea"=>'
		<tr>
		<td bgcolor="#f5fbff" width="45%" >
		<b>������󳤶ȣ���ѡ��:</b>
		</td>
		<td bgcolor="#f5fbff">
		<input type="text" size="50" name="rules[textarea][maxlength]" value="'.$rules.'" >
		</td>
		</tr>
		',
	"select"=>'
		<tr>
		<td bgcolor="#f5fbff" width="25%">
		<b>ѡ������:</b><br />ֻ����ĿΪ��ѡʱ��Ч��ÿ��һ��ѡ��Ⱥ�ǰ��Ϊѡ������(����������)������Ϊ���ݣ�����: <br /><i>1 = ������<br />2 = ��е���<br />3 = û�����</i><br /><br />ע��: ѡ��ȷ���������޸����������ݵĶ�Ӧ��ϵ�����Կ�������ѡ����������ʾ˳�򣬿���ͨ���ƶ����е�����λ����ʵ��</td>
		<td bgcolor="#f5fbff">
	<textarea rows="8" name="rules[select][choices]" id="rules[select][choices]" cols="50">'.$rules.'</textarea>
		</td>
		</tr>
		',
	"radio"=>'
		<tr>
		<td bgcolor="#f5fbff" width="45%">
		<b>ѡ������:</b><br />ֻ����ĿΪ��ѡʱ��Ч��ÿ��һ��ѡ��Ⱥ�ǰ��Ϊѡ������(����������)������Ϊ���ݣ�����: <br /><i>1 = ������<br />2 = ��е���<br />3 = û�����</i><br />ע��: ѡ��ȷ���������޸����������ݵĶ�Ӧ��ϵ�����Կ�������ѡ����������ʾ˳�򣬿���ͨ���ƶ����е�����λ����ʵ��
		</td>
		<td bgcolor="#f5fbff">
		<textarea  rows="8" name="rules[radio][choices]" id="rules[radio][choices]" cols="50">'.$rules.'</textarea>
		</td>
		</tr>
		',
	"checkbox"=>'
		<tr>
		<td bgcolor="#f5fbff" width="45%">
		<b>ѡ������:</b><br />ֻ����ĿΪ��ѡʱ��Ч��ÿ��һ��ѡ��Ⱥ�ǰ��Ϊѡ������(����������)������Ϊ���ݣ�����: <br /><i>1 = ������<br />2 = ��е���<br />3 = û�����</i><br />ע��: ѡ��ȷ���������޸����������ݵĶ�Ӧ��ϵ�����Կ�������ѡ����������ʾ˳�򣬿���ͨ���ƶ����е�����λ����ʵ��</td>
		<td bgcolor="#f5fbff">
		<textarea  rows="8" name="rules[checkbox][choices]" id="rules[checkbox][choices]" cols="50">'.$rules.'</textarea>
		</td>
		</tr>
		',
	"image"=>'
		<tr>
		<td bgcolor="#f5fbff" width="45%" ><b>ͼƬ����ȣ���ѡ��:</b></td>
		<td bgcolor="#f5fbff"><input type="text" size="50" name="rules[image][maxwidth]" value="'.$rules.'" >
		</td>
		</tr>
		<tr>
		<td bgcolor="#f5fbff" width="45%" ><b>ͼƬ���߶ȣ���ѡ��:</b></td>
		<td bgcolor="#f5fbff"><input type="text" size="50" name="rules[image][maxheight]" value="'.$rules.'" >
		</td>
		</tr>
		'
);

$var_type= array(
	'text'=>'�ִ�',
	'number'=>'����',
	'textarea'=>'�ı�',
	'radio'=>'��ѡ',
	'checkbox'=>'��ѡ',
	'select'=>'ѡ��',
	'age'=>'����',
	'email'=>'�����ʼ�',
	'image'=>'ͼƬ',
	'url'=>'��������',
	'calendar'=>'����'
);


function get_info_var_type($type,$name,$value){
	switch($type){
		case 'text':
			$str.="<input name=\"".$name."\" value=\"".$value."\">";
		break; 
		case 'textarea':
			$str.="<textarea name=\"".$name."\">".$value."</textarea>";
		break;
		case 'radio':
			$str.="<input name=\"".$name."\" type=\"radio\">";
		break;
		case 'checkbox':
			$str.="<input name=\"".$name."\" type=\"checkbox\">";
		break;
		case 'select':
			$str.="<select name=\"".$name."\">";
			$str.="<option value=\"".$value."\"></option>";
			$str.="</select>";
		break;
	}
	return $str;
}
?>