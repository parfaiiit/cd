<?php include mymps_tpl('inc_header');?>
<link rel="Stylesheet" type="text/css" href="template/css/new.dialog.css" />
<link rel="stylesheet" type="text/css" href="template/css/new.my.css" />
<script language="javascript">
var current_domain = '<?php echo $mymps_global[SiteUrl]?>';
</script>
<script language="javascript" src="template/javascript.js"></script>
<script type="text/javascript" src="../template/global/messagebox.js"></script>
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
                                    <h3 class="ptitle"><span>�̼ҵ������� <?php if($if_corp == 1){?><a target="_blank" style="font-size:12px; font-weight:100;" href="<?php echo $mysite;?>">�鿴�ҵ���վ</a><? }?></span></h3>
                                </div></div></div>
                                <div class="pbody">
                                    <div class="cleafix pagetab-wrap">
                                        <ul class="pagetab">
                                            <li><a href="?m=shop&type=<?php echo $type; ?>&ac=base" <?php if($ac == 'base'){?>class="current"<?php }?>><span><?php echo $if_corp != 1 ? '���뿪ͨ���ϵ���' : '������Ϣ�޸�'; ?></span></a></li>
											<?php if($if_corp == 1){?>
                                            <li><a href="?m=shop&type=corp&ac=template" <?php if($ac == 'contact'){?>class="current"<?php }?>><span>����ģ���޸�</span></a></li>
											<?php }?>
                                        </ul>
                                    </div>
									
									<div id="msg_success"></div>
									<div id="msg_error"></div>
									<div id="msg_alert"></div>
                                    
                                    <form action="?m=shop" method="post" name="form1">
                                    <div class="formgroup">
                                        <div class="formrow">
                                            <h3 class="label"><label>�̻�����</label></h3>
                                            <div class="form-enter">
                                                <input type="text" name="tname" class="text" value="<?php echo $row['tname']; ?>" <? if($row['com_certify'] == 1) echo 'readonly';?>/> <?php if($row['com_certify'] == 1){?><font style="font-size:10px!important; color:red">ͨ��Ӫҵִ����֤�󣬲������޸�</font><?php }?>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="formrow">
                                            <h3 class="label">�������</h3>
                                            <div class="form-enter">
                                               <?=$get_member_cat?>
                                            </div>
                                        </div>
                                        
                                        <div class="formrow">
                                            <h3 class="label">�������� </h3>
                                            <div class="form-enter">
                                                <select name="areaid">
                                                <?=cat_list('area',0,$row[areaid])?>
                                                </select></div>
                                        </div>
                                        
                                        <div class="formrow">
                                            <h3 class="label">��ϸ��ַ</h3>
                                            <div class="form-enter">     
												<input type="text" class="text" name="address" value="<?php echo $row['address']?>" /></div>
                                        </div>
                                        
                                        <div class="formrow">
                                            <h3 class="label">�˳�·��</h3>
                                            <div class="form-enter">     
											<textarea name="busway" style="width:300px; height:100px"><?php echo $row['busway']; ?></textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="formrow">
                                            <h3 class="label">��������</h3>
                                            <div class="form-enter">     
											<input id='mappoint' name='mappoint' type='text' value="<?=$row['mappoint']?>" class="text"> <input type="button" class="gray mini" value="��Ҫ��ע" onClick="javascript:setbg('��ͼ��ע',500,250,'../map.php?action=markpoint&width=500&height=250&p=<?=$row['mappoint']?>')"/>
                                            </div>
                                        </div>
                                        
                                        <div class="formrow">
                                        <h3 class="label">�̻�����</h3>
                                        <?php echo $acontent; ?>
                                        </div>
                                        
                                        <div class="formrow">
                                            <h3 class="label">��վ��ַ</h3>
                                            <div class="form-enter">     
												<input type="text" class="text" name="web" value="<?php echo $row['web']?>" /></div>
                                        </div>

                                        <div class="formrow formrow-action">
                                            <span class="minbtn-wrap"><span class="btn"><input type="submit" value="��д���ˣ���Ҫ�ύ<?php echo $if_corp == 1 ? '����' : '����'; ?>" class="button" name="shop_submit" /></span></span>
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