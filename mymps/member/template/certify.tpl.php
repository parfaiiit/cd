<?php include mymps_tpl('inc_header');?>
<link rel="stylesheet" type="text/css" href="template/css/new.exchange.css" />
<script language="javascript" src="template/javascript.js"></script>

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
                            
                            <div class="pwrap">
    <div class="phead"><div class="phead-inner"><div class="phead-inner">
        <h3 class="ptitle"><span>������֤</span></h3>
    </div></div></div>
    <div class="pbody">

        <div class="cleafix pagetab-wrap">
            <ul class="pagetab">
                <li><a href="?m=certify&ac=person" <?php if($ac == 'person') echo 'class="current"'; ?>><span>���֤��֤</span></a></li>
                <?php if($if_corp == 1){?><li><a href="?m=certify&ac=com" <?php if($ac == 'com') echo 'class="current"'; ?>><span>ִ����֤</span></a></li><?php }?>
            </ul>
        </div>
        <div id="msg_success"></div>
        <?php if($certifylang){?><div id="msg_error" class="errormsg"><?php echo $certifylang; ?></div><?php } else {?>
        <div id="msg_error"></div>
        <?php }?>
        <form method="post" name="form1" action="?m=certify&ac=<?=$ac?>" enctype="multipart/form-data" onSubmit="return CertifySubmit();">
        <div class="formgroup section-setting">
        	<div class="formrow">
                <h3 class="label">��ǰ״̬��</h3>
                <div class="form-enter">
                    <?php if($per_certify == 1){?>
                    <img src="../images/person1.gif" alt="��ͨ�����֤��֤"/>
                    <?}else{?>
                    <img src="../images/person0.gif" alt="δͨ�����֤��֤"/>
                    <?}?>
                    <?php if($com_certify == 1 && $if_corp == '1'){?>
                    <img src="../images/company1.gif" alt="��ͨ��Ӫҵִ����֤"/>
                    <?}else{?>
                    <img src="../images/company0.gif" alt="δͨ��Ӫҵִ����֤"/>
                    <?}?>
                </div>
            </div>
            <div class="formrow">
                <h3 class="label">ѡ���ļ���</h3>
                <div class="form-enter">
                     <input name="certify_image" type="file" id="litpic"/><br />
        ֧���ϴ������ͣ�<?=$mymps_global[cfg_upimg_type]?>
                </div>
            </div>
            
            <div class="formrow">
                <h3 class="label">ע�����</h3>
                <div class="form-enter">
                 ��ȷ��ͼƬ������ͼƬ��ʽΪ <?=$mymps_global[cfg_upimg_type]?> �������� <?=$mymps_global[cfg_upimg_size]?>KB ��<br />
���ϴ������У������ʱ��ֹͣ����ȡ���ش�����ͼƬ��С���ش���
                </div>
            </div>
        
            <div class="formrow formrow-action"><span class="minbtn-wrap"><span class="btn">
              <input type="submit" value="�� ��" class="button" name="certify_submit" />
            </span></span></div>
        </div>
        </form>
        <?php if($ac == 'com'){ ?>
        <div class="topup-note">
            <p>
                <strong>Ӫҵִ�����ע����� </strong>
            </p>
            <p>
                ��1�� �ϴ���Ӫҵִ����Ϊ�Ӹǹ�˾���µĸ�����ӡ����ɨ����� 
            </p>
            <p>
                ��2�� ֤��Ҫ�������������� 
            </p>
            <p>
                ��3�� ֤���ϱ����й��̲��ŵ���Ч���£�
            </p>
            <p>
                ��4�� ֤����������Ч���ڣ����������£� 
            </p>
            <p>
                ��5�� �û���д��ϵ������Ҫ������ʵ��������˾����Ҫ����֤����Ϣһ�¡�
            </p>
            <p>
                ������κ���������ϵ<?=$mymps_global[SiteName]?>�ͷ�(��һ������9:00 ~ 18:00 ��������10:00 ~ 18:00)
            </p>
            <p>�绰��<?=$mymps_global[SiteTel]?></p>
            <p>�������䣺<?=$mymps_global[SiteEmail]?></p>
        </div>
        <?php }?>
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