<?php include mymps_tpl('inc_header');?>
<link rel="Stylesheet" type="text/css" href="template/css/new.dialog.css" />
<link rel="stylesheet" type="text/css" href="template/css/new.my.css" />
<script language="javascript" src="template/javascript.js"></script>
<script language="javascript">
function check_sub(){
	if (document.form1.gname.value=="") {
		alert('����д�����');
		document.form1.gname.focus();
		return false;
	}
	if (document.form1.gaddress.value=="") {
		alert('����д��ص㣡');
		document.form1.gaddress.focus();
		return false;
	}
	if (document.form1.meetdate.value=="") {
		alert('��ѡ�񼯺�ʱ�䣡');
		document.form1.meetdate.focus();
		return false;
	}
	if (document.form1.enddate.value=="") {
		alert('��ѡ�����ʱ�䣡');
		document.form1.enddate.focus();
		return false;
	}
	if (document.form1.des.value=="") {
		alert('����д���˵����');
		document.form1.des.focus();
		return false;
	}
	return true;
}
</script>
</head>
<body class="<?php echo $mymps_global['cfg_tpl_dir']; ?>">
<div class="container">
<?php include mymps_tpl('inc_head');?>
<div id="main" class="main section-setting">
        <div class="clearfix main-inner">
            <div class="content">
                <div class="clearfix content-inner">
                    <div class="content-main">
                        <div class="content-main-inner">
                            <div class="pwrap setting-userinfo">
                                <div class="phead"><div class="phead-inner"><div class="phead-inner">
                                    <h3 class="ptitle"><span><?php echo $id ? '�޸�' : '����'?>�Ź�</span></h3>
                                    <p class="pextra"><a href="?m=group&type=corp"><span>&laquo; �����ҷ�����Ź�</span></a></p>
                                </div></div></div>
                                <div class="pbody">
                                    
                                    <div id="msg_success"></div>
<div id="msg_error"></div>
<div id="msg_alert"></div>
                                    
                                    <form action="?m=group&ac=detail" enctype="multipart/form-data" method="post" name="form1" onSubmit="return check_sub();">
                                    <?php if(!empty($id)){?>
                                    	<input name="id" value="<?=$id?>" type="hidden">
                                        <input name="picture_old" value="<?=$edit['picture']?>" type="hidden">
                                        <input name="pre_picture_old" value="<?=$edit['pre_picture']?>" type="hidden">
                                    <?php }?>
                                    <input name="tid" value="<?=$tid?>" type="hidden">
                                    <div class="formgroup">
                                        <div class="formrow">
                                            <h3 class="label"><label>�Ź�����<font color="red">*</font></label></h3>
                                            <div class="form-enter">
                                                <input name="gname" type="text" class="text" value="<?=$edit['gname']?>" style="width:300px">
                                            </div>
                                        </div>
                                        
                                        <div class="formrow">
                                            <h3 class="label">�Ź�����<font color="red">*</font></h3>
                                            <div class="form-enter">
                                                <?php echo get_groupclass_select('cate_id',$edit['cate_id']); ?>
                                            </div>
                                        </div>
                                        
                                        <div class="formrow">
                                            <h3 class="label">��������<font color="red">*</font></h3>
                                            <div class="form-enter">
                                                <select name="areaid">
                                                <?=cat_list('area',0,$edit['areaid'])?>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="formrow">
                                            <h3 class="label">��ص�<font color="red">*</font></h3>
                                            <div class="form-enter">
                                                <input name="gaddress" value="<?php echo $edit['gaddress']; ?>" class="text" style="width:300px">
                                            </div>
                                        </div>
                                        
                                        <div class="formrow">
                                            <h3 class="label">����ʱ��<font color="red">*</font></h3>
                                            <div class="form-enter">
                                                <input name="meetdate" value="<?php echo $edit['meetdate']; ?>" class="text"> 
                                                �����ڸ�ʽ�磺2011-08-08��
                                            </div>
                                        </div>
                                        
                                        <div class="formrow">
                                            <h3 class="label">����ʱ��<font color="red">*</font></h3>
                                            <div class="form-enter">
                                                <input name="enddate" value="<?php echo $edit['enddate']; ?>" class="text"> �����ڸ�ʽ�磺2011-08-08��
                                            </div>
                                        </div>
                                        
                                        <?php if($edit[pre_picture]){?>
                                        <div class="formrow">
                                            <h3 class="label">ԭ����ͼƬ</h3>
                                            <div class="form-enter">     
                                                <?php
                                                echo "<img src=".$mymps_global[SiteUrl]."".$edit[pre_picture]." style='_margin-top:expression(( 180 - this.height ) / 2);' />\r\n";
                                                ?>
                                            </div>
          								</div>
                                        <?php }?>
                                        
                                        <div class="formrow">
                                            <h3 class="label"><?php echo $id ? '����' : '�ϴ�'; ?>ͼƬ</h3>
                                            <div class="form-enter">
                                                <input type="file" name="group_image" size="30" id="litpic" onChange="SeePic(document.picview,document.form1.litpic);">
                                            </div>
                                        </div>
                                        
                                        <div class="formrow">
                                            <h3 class="label">���˵��<font color="red">*</font></h3>
                                            <div class="form-enter">
                                            	<textarea name="des" class="texttarea" style="width:360px; height:100px"><?=$edit['des']?></textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="formrow">
                                            <h3 class="label">��ϸ˵��<font color="red">*</font></h3>
                                           	<?php echo $acontent; ?>
                                        </div>
                                        
                                        <div class="formrow formrow-action">
                                            <span class="minbtn-wrap"><span class="btn"><input type="submit" value="�ύ<?php echo empty($id) ? '����' : '����'; ?>" class="button" name="group_submit" /></span></span>
                                        </div>
                                        
                                    </div>
                                    </form>
                                    
                                </div>
                                <div class="pfoot"><p><b>-</b></p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include mymps_tpl('inc_sidebar');?>
        </div>
    </div>
<?php include mymps_tpl('inc_foot');?>
</div>
</body>
</html>