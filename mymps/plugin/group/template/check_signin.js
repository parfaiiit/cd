function qq_msn(value){
	window.clipboardData.setData("Text",value); 
	alert("����URL��ַ�ɹ�����ճ�������QQ/MSN���Ƽ�����ĺ���");
}
function checkbaoming(){
	if (document.form1.sname.value=="") {
		alert('����д������ʵ����!');
		document.form1.sname.focus();
		return false;
	}
	if (document.form1.tel.value=="") {
		alert('��������ϵ�绰��������д�ֻ���');
		document.form1.tel.focus();
		return false;
	}
	if (document.form1.checkcode.value=="") {
		alert('��������֤�룡');
		document.form1.checkcode.focus();
		return false;
	}
	return true;
}