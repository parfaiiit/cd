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
        <h3 class="ptitle"><span>�ҷ����ķ�����Ϣ</span></h3>
        <p class="pextra addwebsite"><a href="../<?php echo $mymps_global['cfg_postfile']; ?>" target="_blank"><span>����������Ϣ</span></a></p>
    </div></div></div>
    <div class="pbody">

        <div class="cleafix pagetab-wrap">
            <ul class="pagetab">                                                             
                <li><a href="?m=info&l=normal" <?php if($l == 'normal'){?>class="current"<?php }?>><span>�ҷ�������Ϣ</span></a></li>
                <li><a href="?m=info&l=inormal" <?php if($l == 'inormal'){?>class="current"<?php }?>><span>����е���Ϣ</span></a></li>
				<li><a href="?m=info&l=tuiguang" <?php if($l == 'tuiguang'){?>class="current"<?php }?>><span>�ƹ��е���Ϣ</span></a></li>
            </ul>
        </div>
        <div id="msg_success"></div>
        <div id="msg_error"></div>
		<div id="msg_alert"></div>
        <form method="post" action="?m=<?=$m?>&l=<?=$l?>&page=<?=$page?>" name="form1">
        <div class="datatablewrap">
			<div class="xinxi-guanli-box">
				<?php 
				if($rows_num > 0){
				$i=1; 
				foreach($list as $art){
				?>
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="xinfabu prico">
	  <tr class="xintit">
	    <td colspan="3">
			<span class="czfr"><?php if($art['info_level'] > 0){?><a href="<?php echo $mymps_global['cfg_postfile'] ? '../'.$mymps_global['cfg_postfile'] : '../post.php'?>?action=edit&id=<?=$art[id]?>" target="_blank">�޸�</a> | <?php }?>
			<a href="?m=info&ac=del&id=<?php echo $art['id']; ?>&l=<?php echo $l;?>&page=<?php echo $page;?>" onClick="if(!confirm('��ȷ��Ҫɾ��������Ϣ��?һ��ɾ�������ɻָ�'))return false;">ɾ��</a>
			</span>
 		   	<span class="xthpic"></span>
	    	<span>����ʱ��:<?php echo $art['begintime'];?></span>
			<span><?php echo get_info_life_time($art['endtime']); ?></span>
	    	<span>���:<?php echo $art['id']; ?></span>
	    	<span>��� <?php echo $art['hit']?> ��</span>
			</td>
		  </tr>
          <tr>
            <td class="t">
            	<div class="title">
	            	<a href="<?=$art['uri']?>" target="_blank" class="img">
	            		<img src="<?php echo $art['img_path'] ? $art['img_path'] : '../images/nophoto.gif'?>" />
	            	</a>
	            	<a href="<?=$art['uri']?>" target="_blank" style="float:left;"><?=$art['title']?></a><br> <?php if(mgetcookie('refreshed'.$art['id']) == 1) echo '<span class="refreshed">��ˢ��</span>'; ?> <?php if($art['ifred'] == 1) echo '<span class="fred">���׺�</span>'; ?> <?php if($art['ifbold'] == 1) echo '<span class="fbold">�ѼӴ�</span>'; ?>
	           	 	<p class="txq"><a target='_blank' href='<?php echo $art[uri_cat]?>' class="a_xq1"><?php echo $art['catname']?></a></p>
           	 	</div>
            </td>
            <td>
			<?php if($art['info_level'] < 1){?>
			<span class="examine"></span><b class="f14 red_f6">�����</b><br />
			<p class="xsitxt">���ͨ���󼴿��Զ�������ʾ���粻���Ŀ��Ժ�����ٿ�һ�¡�</p>
			<?}elseif($art['endtime'] < $timestamp && $art['endtime'] && $mymps_global['cfg_info_if_gq'] != 1){?>
			<span class="examine"></span><b class="f14 red_f6">��ʾ��</b><br />
			<p class="xsitxt" >��Ϣ��ϵ��ʽ�رգ���ʹ��ˢ�¹������·�����</p>
			<?php }else{?>
			<span class="xianshi"></span><b class="f14 green">��ʾ��</b><br />
			
			<?php if($art['upgrade_type_index']){?>
			<span class="examine"></span><b class="f14 red_f6">��ҳ�ö�<?php if($art['upgrade_time_index'] != 0){ echo '��'.date("Y-m-d",$art['upgrade_time_index']);}?></b><br /><?php }?>
			
			<?php if($art['upgrade_type']){?>
			<span class="examine"></span><b class="f14 red_f6">�����ö�<?php if($art['upgrade_time'] != 0){ echo '��'.date("Y-m-d",$art['upgrade_time']);}?></b><br /><?php }?>
			
			<?php if($art['upgrade_type_list']){?>
			<span class="examine"></span><b class="f14 red_f6">С���ö�<?php if($art['upgrade_time_list'] != 0){ echo '��'.date("Y-m-d",$art['upgrade_time_list']);}?></b><br /><?php }?>
			
			<?php }?>
			</td>
   			 <td class="w1">
			 <?php if($art['info_level'] > 0){?>
			 <span class="refresh">
			 <a  <?php if(mgetcookie('refreshed'.$art['id']) != 1){ ?> onClick="<?php if($mymps_global['cfg_member_info_refresh']>0){?>if(!confirm('����ǰӵ�н��<?php echo $money_own; ?>����ˢ�¸���Ϣ���۳���<?php echo $mymps_global['cfg_member_info_refresh']; ?>�����'))return false;<? }?>" <?php }else{?> onClick="alert('����Ϣ�ѱ�ˢ�¹��ˣ������ظ�ˢ�¡�');return false;" <?php }?> title='ˢ�º���Ϣ��ǰ��ʾ���൱���·�һ����' href="?m=info&ac=refresh&id=<?=$art[id]?>">ˢ��</a>
			 </span>
			 <span class="extension" >
			 <a <?php if($art['ifbold'] == 1){?>onClick="alert('����Ϣ����Ϣ�����ѱ��Ӵֹ��ˣ������ظ��Ӵ֡�');return false;"<?php }else{?> onClick="if(!confirm('����ǰӵ�н��<?php echo $money_own; ?>�����Ӵָ���Ϣ���⽫�۳���<?php echo $mymps_global['cfg_member_info_bold']; ?>�����'))return false;" <?php }?>href="?m=info&ac=bold&id=<?=$art[id]?>&page=<?=$page?>">�Ӵ�</a>
	</span><br />	
	<span class="sticky" >
		<a href="?m=info&ac=upgrade&id=<?=$art[id]?>">�ö�</a>
	</span>
	<span class="extension precision" >
		<a class="on" <?php if($art['ifred'] == 1){?>onClick="alert('����Ϣ����Ϣ�����ѱ��׺���ˣ������ظ��׺졣');return false;"<?php }else{?>onClick="if(!confirm('����ǰӵ�н��<?php echo $money_own; ?>�����׺����Ϣ���⽫�۳���<?php echo $mymps_global['cfg_member_info_red']; ?>�����'))return false;"<?php }?> href="?m=info&ac=red&id=<?=$art[id]?>&page=<?=$page?>">�׺�</a>
	</span>	
		  <?php }?>
		  </td>
          </tr>
          <tr class="infotdno">
          	<td colspan="3">
               
            </td>
          </tr>
	      </table>     
		  		<?php 
				}}
				?>
				 
			</div>				
			<?php if($rows_num > 0){?>
            <div class="clearfix datacontrol">
                <div class="dataaction">
                </div>
                <div class="pagination"><?php echo page2(); ?></div>
            </div>
			<?php }else{?>
			<div class="nodata">���޼�¼</div>
			<?php }?>
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