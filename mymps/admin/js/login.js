function CheckForm()
{
	if(document.Login.username.value=="")
	{
		alert("�������û�����");
		document.Login.username.focus();
		return false;
	}
	if(document.Login.password.value == "")
	{
		alert("���������룡");
		document.Login.password.focus();
		return false;
	}
}
// JavaScript Document