<?php include mymps_tpl('inc_header');?>
<link rel="Stylesheet" type="text/css" href="template/css/new.dialog.css" />
<link rel="stylesheet" type="text/css" href="template/css/new.my.css" />
<script language="javascript" src="template/javascript.js"></script>
<script language="javascript">
function check_sub(){
	if (document.form1.goodsname.value=="") {
		alert('����д��Ʒ����');
		document.form1.goodsname.focus();
		return false;
	}
	if (document.form1.catid.value=="") {
		alert('��ѡ����Ʒ���������');
		document.form1.catid.focus();
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
                                    <h3 class="ptitle"><span><?php echo $id ? '�޸�' : '����'?>��Ʒ</span></h3>
                                    <p class="pextra"><a href="?m=goods&type=corp"><span>&laquo; �����ҷ�������Ʒ</span></a></p>
                                </div></div></div>
                                <div class="pbody">
                                    
                                    <div id="msg_success"></div>
<div id="msg_error"></div>
<div id="msg_alert"></div>
                                    
                                    <form action="?m=goods&ac=detail" enctype="multipart/form-data" method="post" name="form1" onSubmit="return check_sub();">
                                    <?php if(!empty($id)){?>
                                    	<input name="id" value="<?=$id?>" type="hidden">
                                        <input name="picture_old" value="<?=$edit['picture']?>" type="hidden">
                                        <input name="pre_picture_old" value="<?=$edit['pre_picture']?>" type="hidden">
                                    <?php }?>
                                    <div class="formgoods">
                                        <div class="formrow">
                                            <h3 class="label"><label>��Ʒ����<font color="red">*</font></label></h3>
                                            <div class="form-enter">
                                                <input name="goodsname" type="text" class="text" value="<?=$edit['goodsname']?>" style="width:300px">
                                            </div>
                                        </div>
                                        
                                        <div class="formrow">
                                            <h3 class="label">��Ʒ����<font color="red">*</font></h3>
                                            <div class="form-enter">
												<select name="catid">
												<option value="">==ѡ����Ʒ�����ķ���==</option>
												<?=goods_cat_list(0,$edit[catid])?>
												</select>
                                            </div>
                                        </div>
			
										<div class="formrow">
                                            <h3 class="label"><label>�г��۸�<font color="red">*</font></label></h3>
                                            <div class="form-enter">
                                                <input name="oldprice" type="text" class="text" value="<?=$edit['oldprice']?>" style="width:70px">
												<?php echo $moneytype; ?>
                                            </div>
                                        </div>
										
										<div class="formrow">
                                            <h3 class="label"><label>�Żݼ۸�<font color="red">*</font></label></h3>
                                            <div class="form-enter">
                                                <input name="nowprice" type="text" class="text" value="<?=$edit['nowprice']?>" style="width:70px"> 
												<?php echo $moneytype; ?>
                                            </div>
                                        </div>
										
										<div class="formrow">
                                            <h3 class="label"><label>��Դ���<font color="red">*</font></label></h3>
                                            <div class="form-enter">
											<input name="huoyuan" type="radio" class="radio" value="2" <?php if($edit['huoyuan'] != 1) echo 'checked';?>>ȱ��
                                            <input name="huoyuan" type="radio" class="radio" value="1" <?php if($edit['huoyuan'] == 1 || empty($edit)) echo 'checked';?>>�л�
												
                                            </div>
                                        </div>
										
										<div class="formrow">
                                            <h3 class="label"><label>��Ʒ����</label></h3>
                                            <div class="form-enter">
												<input name="tuihuan" type="checkbox" class="radio" value="1" <?php if($edit['tuihuan'] == 1 || !$id) echo 'checked';?>>�����˻�
												<input name="jiayi" type="checkbox" class="radio" value="1" <?php if($edit['jiayi'] == 1 || !$id) echo 'checked';?>>��һ����
												<input name="weixiu" type="checkbox" class="radio" value="1" <?php if($edit['weixiu'] == 1) echo 'checked';?>>30��ά��
												<input name="fahuo" type="checkbox" class="radio" value="1" <?php if($edit['fahuo'] == 1 || !$id) echo 'checked';?>>���緢��
                                            </div>
                                        </div>
										
										<div class="formrow">
                                            <h3 class="label"><label>��Ʒ״̬</label></h3>
                                            <div class="form-enter">
												<input name="cuxiao" type="checkbox" class="radio" value="1" <?php if($edit['cuxiao'] == 1) echo 'checked';?>>����
												<input name="baozhang" type="checkbox" class="radio" value="1" <?php if($edit['baozhang'] == 1 || !$id) echo 'checked';?>>���������߱��ϼƻ�
                                            </div>
                                        </div>
										
										<div class="formrow">
                                            <h3 class="label"><label>������Ʒ<font color="red">*</font></label></h3>
                                            <div class="form-enter">
                                                <input name="gift" type="text" class="text" value="<?php echo $edit['gift'] ? $edit['gift'] : '����Ʒ��������Ʒ'?>" style="width:300px">
                                            </div>
                                        </div>
										
										<div class="formrow">
                                            <h3 class="label"><label>�ͷ�QQ</label></h3>
                                            <div class="form-enter">
                                                <input name="oicq" type="text" class="text" value="<?php echo $edit['oicq'] ? $edit['oicq'] : $row[qq]?>" style="width:100px">
                                            </div>
                                        </div>
                                        
                                        <div class="formrow">
                                            <h3 class="label">��ϸ˵��<font color="red">*</font></h3>
                                           	<?php echo $acontent; ?>
                                        </div>
										
                                        <?php if($edit[pre_picture]){?>
                                        <div class="formrow">
                                            <h3 class="label">ԭ��ͼƬ</h3>
                                            <div class="form-enter">     
                                                <?php
                                                echo "<img src=".$mymps_global[SiteUrl]."".$edit[pre_picture]." style='_margin-top:expression(( 180 - this.height ) / 2);' />\r\n";
                                                ?>
                                            </div>
          								</div>
                                        <?php }?>
										
										<div class="formrow">
                                            <h3 class="label"><?php echo $id ? '����' : '�ϴ�'; ?>��ͼ</h3>
                                            <div class="form-enter">
                                                <input type="file" name="goods_image" size="30" id="litpic" onChange="SeePic(document.picview,document.form1.litpic);"> Ϊ��ǰ̨��ʾ���ۣ�������ø߿�Ϊ1.2��1��ͼƬ
                                            </div>
                                        </div>
                                        
                                        <div class="formrow formrow-action">
                                            <span class="minbtn-wrap"><span class="btn"><input type="submit" value="�ύ<?php echo empty($id) ? '����' : '����'; ?>" class="button" name="goods_submit" /></span></span>
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