function checkreply()
{if(document.form1.content.value=="")
{document.form1.content.focus();alert("����д�������ݣ�");return false;}
if(document.form1.checkcode.value=="")
{document.form1.checkcode.focus();alert("��������֤�룡");return false;}
document.form1.mymps.disabled=true;document.form1.mymps.value="�ύ��...";return true;}