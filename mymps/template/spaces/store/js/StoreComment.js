function StoreCommentFormCheck(){
	if (document.StoreCommentForm.content.value=="") {
		alert('����/�������ݲ���Ϊ�գ�');
		document.StoreCommentForm.content.focus();
		return false;
	}
	return true;
}