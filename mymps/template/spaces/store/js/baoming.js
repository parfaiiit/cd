<!--
$().ready(function() {
$('form#bmform').checkForm(1);
});
var CusCheckForm = function()
{
var tel = $("input[name='tel']");
var mbl = $("input[name='mobile']");
if(tel.val() == "" && mbl.val() == "")
{
$("span#mbltips").addClass("no");
$("span#mbltips").html("�̶��绰���ֻ����������дһ��");
return false;
}
else return true;
}
//-->