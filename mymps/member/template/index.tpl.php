<?php include mymps_tpl('inc_header');?>
<link rel="Stylesheet" type="text/css" href="template/css/new.dialog.css" />
<link rel="stylesheet" type="text/css" href="template/css/new.my.css" />
<link rel="stylesheet" type="text/css" href="template/css/new.contribute.css" />
<link rel="stylesheet" type="text/css" href="template/css/new.exchange.css" />
<script language="javascript" src="../template/global/messagebox.js"></script>
<script language="javascript" src="template/javascript.js"></script>
</head>
<body class="<?php echo $mymps_global['cfg_tpl_dir']; ?>">
<div class="container">

<?php include mymps_tpl('inc_head');?>

    <div id="main" class="main section-default">
        <div class="clearfix main-inner">
            <div class="content">
                <div class="clearfix content-inner">
                    <div class="content-main">
                        <div class="content-main-inner">
                            <div class="pwrap accountinfo">
                                <div class="phead"><div class="phead-inner"><div class="phead-inner">
                                    <h3 class="ptitle"><span style="color:red">[<?=$levelname?>]</span> &nbsp;&nbsp;<a style="font-size:14px" href="index.php?m=levelup">������</a></h3>
                                    
                                </div></div></div>
                                <div class="pbody">
                                    <div class="clearfix accountinfo-dock">
                                        <div class="account-avatar">
                                            <a href="index.php?t=index&m=avatar" title="����ͷ��">
                                                <img src="<?php echo $face != '' ? $face : '/images/noavatar_small.gif'?>" alt="����ͷ��" width="48" height="48" />
                                                <span class="avatar-change">����ͷ��</span>
                                            </a>
                                        </div>
                                        <div class="account-quicktools">
                                        	<?php if(!empty($score_changer)){?>
                                        	<?php if($qdtime != $nowtime){?>
                                            <a class="account-qiandao" onClick="this.className='account-qiandao-dis'" href="javascript:setbg('ÿ��ǩ��',520,270,'../box.php?part=qiandao');">ÿ��ǩ��</a>
                                            <?php }else{ ?>
                                            <a class="account-qiandao-dis">ÿ��ǩ��</a>
                                            <?php }?>
                                            <?php }?>
                                            <a class="account-topup" href="index.php?m=pay">��ҳ�ֵ</a>
                                            
                                            <span class="account-sum" title="������:<?php echo $row['money_own']?>"><strong><?php echo $row['money_own']?></strong></span>
                                            
                                        </div>
                                        <div class="account-uesrinfo">
                                            <span class="account-name"><?php echo $row['tname'].' ['.$s_uid.']'; ?> <a target="_blank" style="font-size:12px; font-weight:100;" href="<?php echo $mysite?>">�鿴�ҵ���վ</a> 
                                            <a style="font-size:12px; font-weight:100;" href="index.php?m=shop&ac=template&type=corp"><?php if($if_corp == 1){?>�ϴ�banner<?php }?></a> 
                                            
                                            </span>
                                            <span class="account-id">UID: <?php echo $uid; ?></span>
                                        </div>
                                        <div class="account-baseinfo">
                                            <span>Email��ַ: <?php echo $row['email'] ? $row['email']  : 'δ��д'; ?></span>
                                            <span>�ֻ�����: <?php echo $row['mobile'] ? $row['mobile']  : 'δ��д'; ?></span>
                                            <span>ע��ʱ��: <?php echo GetTime($row['jointime']); ?></span>
                                        </div>
                                        <div class="account-track">
                                            <span>�ϴη���ʱ��: <?php echo GetTime($row['logintime'])?></span>
                                            <span>�ϴη���IP: <?php echo $row['loginip']?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="pfoot"><p><b>-</b></p></div>
                            </div>
							
							<div id="msg_success"></div>
							<div id="msg_error"></div>
							<div id="msg_alert"></div>
							
                            <div class="pwrap pwrap-simple">
                            <div class="phead"><div class="phead-inner"><div class="phead-inner">
                                <h3 class="ptitle"><span>ͳ����Ϣ</span></h3>
                            </div></div></div>
                            <div class="pbody">
                            <ul class="clearfix statistics-list">
								<div class="clearfix counttable">
									<div class="cli"><span class="label">������Ϣ</span> <span class="value"><a href="index.php?m=info"><?=$info_total?>��</a></span> <input name="postinfo" value="������Ϣ&raquo;" type="button" class="postinfo" onClick="window.open('<?php echo (!$row['tel'] && !$row['qq']) ? '?m=base&error=41' : '../'.$mymps_global['cfg_postfile']; ?>')"></div>
									<div class="cli"><span class="label">����Ϣ</span> <span class="value"><a href="index.php?m=pm"><?=$pm_total?>��</a></span></div>
									<?php if($if_corp == 1){?>
									<div class="cli"><span class="label">������Ƭ</span> <span class="value"><a href="index.php?m=album&type=corp"><?=$album_total?>��</a></span><input name="postinfo" value="�ϴ���Ƭ&raquo;" type="button" class="postinfo" style="color:#12459c" onClick="location.href='index.php?m=album&ac=upload&type=corp'"></div>
									<div class="cli"><span class="label">�ҵĵ���</span> <span class="value"><a href="index.php?m=comment&type=corp"><?=$comment_total?>��</a></span></div>
									<div class="cli"><span class="label">��������</span> <span class="value"><a href="index.php?m=document&type=corp"><?=$document_total?>ƪ</a></span><input name="postinfo" value="��������&raquo;" type="button" class="postinfo" style="color:#12459c" onClick="location.href='index.php?m=document&ac=detail&type=corp'"></div>
									<?php if($coupon_total){?><div class="cli"><span class="label">�Ż�ȯ</span> <span class="value"><a href="index.php?m=coupon&type=corp"><?=$coupon_total?>��</a></span> <input name="postinfo" value="���Ż�ȯ&raquo;" type="button" class="postinfo" style="color:#12459c" onClick="location.href='index.php?m=coupon&ac=detail&type=corp'"></div><?php }?>
									<?php if($group_total){?><div class="cli"><span class="label">�Ź�</span> <span class="value"><a href="index.php?m=group&type=corp"><?=$group_total?>��</a></span> <input name="postinfo" value="�����Ź�&raquo;" type="button" class="postinfo" style="color:#12459c" onClick="location.href='index.php?m=group&ac=detail&type=corp'"></div><?php }?>
									<?php if($group_signin_total){?><div class="cli"><span class="label">�Ź�����</span> <span class="value"><a href="index.php?m=group&ac=signin&type=corp"><?=$group_signin_total?>��</a></span></div><?php }?>
									<div class="cli"><span class="label">��Ʒ</span> <span class="value"><a href="index.php?m=goods&type=corp"><?=$goods_total?>��</a></span><input name="postinfo" value="������Ʒ&raquo;" type="button" class="postinfo" style="color:#12459c" onClick="location.href='index.php?m=goods&ac=detail&type=corp'"></div>
									<?php if($goods_order_total){?><div class="cli"><span class="label">��Ʒ����</span> <span class="value"><a href="index.php?m=goods&ac=order&type=corp"><?=$goods_order_total?>��</a></span></div><?php }?>
									<?php }?>
                                </div>
                            </ul>
                            
                            </div>
                            <div class="pfoot"><p><b>-</b></p></div>
                            </div>
                            
                            <div class="pwrap pwrap-simple exchange-finance">
                            <div class="phead"><div class="phead-inner"><div class="phead-inner">
                                <h3 class="ptitle"><span>������Ϣ</span></h3>
                            </div></div></div>
                            <div class="pbody">
                                <ul class="financelist">
                                    <li>
                                        <span class="label">�˻����:</span>
                                        <span class="value"><strong><?php echo $money_own; ?></strong> ���</span>
                                        <a class="topup" href="index.php?m=pay">��ֵ</a>
                                        <a class="withdraw" href="index.php?m=pay&ac=use">������ϸ</a>
                                    </li>
									<li>
                                        <span class="label">���Ļ���:</span>
                                        <span class="value"><strong><?php echo $row['score']; ?></strong> ��</span>
										<a class="detail" href="javascript:setbg('�һ����',450,270,'../box.php?part=score_coin&userid=<?=$s_uid?>');">�һ����</a>
										<a style="color:#ff3300;" href="javascript:setbg('��λ�û���',350,270,'../box.php?part=howtogetscore');">��λ�û��֣�</a>
                                        
                                    </li>
									<li class="noborder">
                                        <span class="label">���õȼ�:</span>
                                        <span class="value"><strong><img src="../images/credit/<?php echo $row['credits']; ?>.gif" alt="����ֵ��<?php echo $row['credit']?>"></strong></span>
                                        <a class="detail" href="javascript:setbg('�������õȼ�',650,270,'../box.php?part=credits_up&userid=<?=$s_uid?>');">�������õȼ�</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pfoot"><p><b>-</b></p></div>
                            </div>
							<div class="pwrap pwrap-simple exchange-security">
                            <div class="phead"><div class="phead-inner"><div class="phead-inner">
                                <h3 class="ptitle"><span>��֤���</span></h3>
                            </div></div></div>
                            <div class="pbody">
                                <ul class="securitylist">
									<?php if($if_corp == 1){?>
                                    <li>
                                        <span class="label">Ӫҵִ����֤:</span>
                                        <span class="value">
											<?php if($row['com_certify'] == 1){?>
											<img align="absmiddle" src="../images/company1.gif" alt="��ͨ��Ӫҵִ����֤"/>
											<?}else{?>
											<img align="absmiddle" src="../images/company0.gif" alt="δͨ��Ӫҵִ����֤"/>
											<?}?>
										</span>
                                        <a href="?m=certify&ac=com">�ύִ����֤</a>
                                    </li>
									<?php }?>
                                    <li class="noborder">
                                        <span class="label">���֤��֤:</span>
                                        <span class="value">
											<?php if($row['per_certify'] == 1){?>
											<img align="absmiddle" src="../images/person1.gif" alt="��ͨ�����֤��֤"/>
											<?}else{?>
											<img align="absmiddle" src="../images/person0.gif" alt="δͨ�����֤��֤"/>
											<?}?></span>
                                        <a href="?m=certify&ac=per">�ύ���֤��֤</a>
                                    </li>
                                    </ul>
                            </div>
                            <div class="pfoot"><p><b>-</b></p></div>
                            </div>
							
							<?php if($mymps_global['cfg_if_affiliate'] == 1){?>
							<div class="pwrap pwrap-simple exchange-security">
                            <div class="phead"><div class="phead-inner"><div class="phead-inner">
                                <h3 class="ptitle"><span>ע���ƹ�</span></h3>
                            </div></div></div>
                            <div class="pbody">
                                <ul class="statistics-list clearfix">
                                    <li class="myurl">
                                        ��վΪ�����Ƽ����û�ע�ᣬ�ֿ�չ�Ƽ�ע��ֳɻ����������£�<br>

										1.���Ʊ�վ�ṩ�������Ƽ����룬ճ�����͵���̳�������ϻ���QQ���ѡ�<br>2.�����ߵ�����ӣ����ʱ�վ��<br>
										3.�ڷ����ߵ�����ӵ�24Сʱ�ڣ����÷������ڱ�վע�ᣬ������û��� <font color="#ff3300;"><?php echo $mymps_global['cfg_affiliate_score']?></font> �Ľ�����<br>
<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" style="margin-top:5px">
<tr>
<td width="20%" height="50" bgcolor="#ffffff">&nbsp;&nbsp;��ҳǩ������</td>
<td bgcolor="#ffffff">&nbsp;&nbsp;<input size="115" onClick="this.select();" type="text" value="&lt;a href=&quot;<?php echo $mymps_global['SiteUrl']?>/index.php?fromuid=<?=$row[id]?>&quot; target=&quot;_blank&quot;&gt;<?php echo $mymps_global['SiteName']?>&lt;/a&gt;" style="border:1px solid #ccc;padding:3px 5px" /></td>
</tr>
<tr>
<td bgcolor="#ffffff" height="50">&nbsp;&nbsp;��̳ǩ������</td>
<td bgcolor="#ffffff">&nbsp;&nbsp;<input size="115" onClick="this.select();" type="text" value="[url=<?php echo $mymps_global['SiteUrl']?>/index.php?fromuid=<?=$row[id]?>]<?php echo $mymps_global['SiteName']?>[/url]" style="border:1px solid #ccc;padding:3px 5px" /></td>
</tr>
<tr>
<td bgcolor="#ffffff" height="50">&nbsp;&nbsp;ֱ�ӽ����ӷ���QQ����</td>
<td bgcolor="#ffffff">&nbsp;&nbsp;<input size="115" onClick="this.select();" type="text" value="<?php echo $mymps_global['SiteUrl']?>/index.php?fromuid=<?=$row[id]?>" style="border:1px solid #ccc;padding:3px 5px" /></td>
</tr>
</table>
										
                                    </li>
                                   
                                 </ul>
                            </div>
                            <div class="pfoot"><p><b>-</b></p></div>
                            </div>
							<?php }?>
							
                            <!--<div class="pwrap pwrap-simple exchange-security">
                            <div class="phead"><div class="phead-inner"><div class="phead-inner">
                                <h3 class="ptitle"><span>��ȫ��Ϣ</span></h3>
                            </div></div></div>
                            <div class="pbody">
                                <ul class="securitylist">
                                    <li class="noborder">
                                        <span class="label">��¼����:</span>
                                        <span class="value">******</span>
                                        <a href="index.php?m=password">�޸ĵ�¼����</a>
                                    </li>
                                    </ul>
                            </div>
                            <div class="pfoot"><p><b>-</b></p></div>
                            </div>-->
                            
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