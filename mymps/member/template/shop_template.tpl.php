<?php include mymps_tpl('inc_header');?>
<link rel="Stylesheet" type="text/css" href="template/css/new.dialog.css" />
<link rel="stylesheet" type="text/css" href="template/css/new.my.css" />
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
                                            <li><a href="?m=shop&type=corp&ac=base" <?php if($ac == 'base'){?>class="current"<?php }?>><span><?php echo $if_corp != 1 ? '���뿪ͨ���ϵ���' : '������Ϣ�޸�'; ?></span></a></li>
                                            <li><a href="?m=shop&type=corp&ac=template" <?php if($ac == 'template'){?>class="current"<?php }?>><span>����ģ���޸�</span></a></li>
                                        </ul>
                                    </div>
									
									<div id="msg_success"></div>
									<div id="msg_error"></div>
									<div id="msg_alert"></div>
                                    
                                    <form action="?m=shop" method="post" name="form1" enctype="multipart/form-data" >
									<input name="ac" value="template" type="hidden">
									<input name="oldbanner" value="<?=$row[banner]?>" type="hidden">
                                    <div class="formgroup">
                                        
                                        <div class="formrow">
                                            <h3 class="label">�ռ���</h3>
                                            <div class="form-enter">     
                                            <select name="template">
                                            <?=get_shop_tpl($row['template'],$s_uid);?>
                                            </select>
                                            </div>
                                        </div>
										
										<div class="formrow">
										<h3 class="label">��������</h3>
										<div class="form-enter">
											 <?php if($row['banner'] != ''){?><img src="<?=$row[banner]?>" onload="if(this.width > 728) this.width = 728"><br><font style="color:#666">���¸����ϴ�����ͼƬ����<a href="javascript:window.location.reload();">ˢ��</a>�����</font><br>
<?php }else{?>��δ�ϴ�<?php }?> 
										</div>
										</div>
										
										<div class="formrow">
										<h3 class="label"><?php echo $row[banner] ? '����' : '�ϴ�'; ?>����</h3>
										<div class="form-enter">
											 <input name="banner" type="file" style="width:250px;"/> 
											 ͼƬ�ߴ�<?php echo $mymps_mymps['cfg_banner_limit']['width'];?>��<?php echo $mymps_mymps['cfg_banner_limit']['height'];?>, 
										֧���ϴ�������<?=$mymps_global[cfg_upimg_type]?>
										</div>
										</div>
                                        <div class="formrow formrow-action">
                                            <span class="minbtn-wrap"><span class="btn"><input type="submit" value="�ύ" class="button" name="shop_submit" /></span></span>
                                        </div>
                                    </div>
                                    </form>
									<div class="formrow">
									<h3 class="label">ע������</h3>
									<div class="form-enter">
									 ��ȷ��ͼƬ������ͼƬ��ʽΪ <?=$mymps_global['cfg_upimg_type']?> �������� <?=$mymps_global[cfg_upimg_size]?>KB ��<br />
									���ϴ������У������ʱ��ֹͣ����ȡ���ش�����ͼƬ��С���ش���
									</div>
									</div>
                                    
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