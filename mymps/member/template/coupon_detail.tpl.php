<?php include mymps_tpl('inc_header');?>
<link rel="Stylesheet" type="text/css" href="template/css/new.dialog.css" />
<link rel="stylesheet" type="text/css" href="template/css/new.my.css" />
<script language="javascript" src="template/javascript.js"></script>
<script language="javascript">
function check_sub(){
	<?php if(!$id){?>
	if (document.form1.coupon_image.value=="") {
		alert('���ϴ��Ż�ȯͼƬ��');
		document.form1.coupon_image.focus();
		return false;
	}
	<?php }?>
	if (document.form1.title.value=="") {
		alert('����д�Ż�ȯ����');
		document.form1.title.focus();
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
                                    <h3 class="ptitle"><span><?php echo $id ? '�޸�' : '����'?>�Ż�ȯ</span></h3>
                                    <p class="pextra"><a href="?m=coupon&type=corp"><span>&laquo; �������ϴ����Ż�ȯ</span></a></p>
                                </div></div></div>
                                <div class="pbody">
                                    
                                    <div id="msg_success"></div>
<div id="msg_error"></div>
<div id="msg_alert"></div>
                                    
                                    <form action="?m=coupon&ac=detail" enctype="multipart/form-data" method="post" name="form1" onSubmit="return check_sub();">
                                    <?php if(!empty($id)){?>
                                    	<input name="id" value="<?=$id?>" type="hidden">
                                        <input name="picture_old" value="<?=$edit['picture']?>" type="hidden">
                                        <input name="pre_picture_old" value="<?=$edit['pre_picture']?>" type="hidden">
                                    <?php }?>
                                    <input name="tid" value="<?=$tid?>" type="hidden">
                                    <div class="formgroup">
                                        <div class="formrow">
                                            <h3 class="label"><label>�Ż�ȯ����<font color="red">*</font></label></h3>
                                            <div class="form-enter">
                                                <input name="title" type="text" class="text" value="<?=$edit['title']?>" style="width:300px">
                                            </div>
                                        </div>
                                        
                                        <div class="formrow">
                                            <h3 class="label">�Ż�ȯ����<font color="red">*</font></h3>
                                            <div class="form-enter">
                                                <?php echo get_couponclass_select('cate_id',$edit['cate_id']); ?>
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
                                            <h3 class="label"><?php echo $id ? '����ͼƬ' : '�ϴ�ͼƬ<font color=red>*</font>'; ?></h3>
                                            <div class="form-enter">
                                                <input type="file" name="coupon_image" size="30" id="litpic" onChange="SeePic(document.picview,document.form1.litpic);">
                                            </div>
                                        </div>
                                        
                                        <div class="formrow">
                                            <h3 class="label">��Ч��</h3>
                                            <input name="begindate" id="begindate" type="text" class="text" value="<?php echo $begindate; ?>" style="width:100px"/> - <input name="enddate" id="begindate" type="text" class="text" value="<?php echo $enddate; ?>" style="width:100px" /> �����ڸ�ʽ�磺2011-08-08��
                                        </div>
                                        
                                        <div class="formrow">
                                            <h3 class="label">���˵��<font color="red">*</font></h3>
                                            <div class="form-enter">
                                            	<textarea name="des" class="texttarea" style="width:360px; height:100px"><?=$edit['des']?></textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="formrow">
                                            <h3 class="label">��ϸ˵��</h3>
                                           	<?php echo $acontent; ?>
                                        </div>
                                        
                                        <div class="formrow">
                                            <h3 class="label">���ã�</h3>
                                            <div class="form-enter">
                                            	<input type="radio" name="status" value="1" id="radio_status_1"  checked="checked" class="radio"/><label for="radio_status_1">����</label>&nbsp;<input type="radio" name="status" value="2" id="radio_status_2" class="radio"/><label for="radio_status_2">ʧЧ</label>
                                            </div>
                                        </div>
                                        
                                        <div class="formrow">
                                            <h3 class="label">�Ż�ȯ����</h3>
                                            <label for="1"><input name="ctype" type="radio" id="1" onclick='$("sup").style.display = "block";' class="radio" <?php if($edit['ctype'] == '�ۿ�ȯ' || empty($edit['ctype'])) echo 'checked'; ?>>�ۿ�ȯ</label> <label for="2"><input name="ctype" onclick='$("sup").style.display = "none";' value="2" id="2" type="radio" <?php if($edit['ctype'] == '�ּ�ȯ') echo 'checked'; ?>>�ּ�ȯ</label>
                                        </div>
                                        
                                        
                                         <div class="formrow" id="sup" <?php if($edit['sup'] == '�ּ�ȯ') echo 'style="display:none"'?>>
                                            <h3 class="label">�ۿ�</h3>
                                            <input name="sup" type="text" class="text" style="width:60px" value="<?=$edit['sup']?>"> ��
                                        </div>

                                        <div class="formrow formrow-action">
                                            <span class="minbtn-wrap"><span class="btn"><input type="submit" value="�ύ<?php echo empty($id) ? '�ϴ�' : '����'; ?>" class="button" name="coupon_submit" /></span></span>
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