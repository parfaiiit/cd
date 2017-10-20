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
        <h3 class="ptitle"><span>��������</span></h3>
        <p class="pextra addwebsite"><a href="?m=document&ac=new&tid=<?=$tid?>&type=corp"><span>����<?=$documenttype[$tid]['typename']?></span></a></p>
    </div></div></div>
    <div class="pbody">

        <div class="cleafix pagetab-wrap">
            <ul class="pagetab">
            <?php foreach($documenttype as $key => $val){?>
                <li><a href="?m=document&tid=<?=$val['typeid']?>&type=corp" <?php if($tid == $val['typeid']){?>class="current"<?php }?>><span><?=$val['typename']?></span></a></li>
            <?php }?>
            </ul>
        </div>
		<div id="msg_success"></div>
<div id="msg_error"></div>
<div id="msg_alert"></div>
        <form method="post" action="?m=<?=$m?>&tid=<?=$tid?>&page=<?=$page?>">
        <div class="datatablewrap">
            <table class="datatable">
                <thead>
                    <tr>
                        <td width="30">
                            <input class="checkall" name="checkall" type="checkbox" id="checkall" onClick="CheckAll(this.form)"/>
                        </td>
						<td width="40">״̬</td>
                        <td width="700">����</td>
                        <td>����ʱ��</td>
                        <td>����</td>
                    </tr>
                </thead>
                <tbody>
                <?php if($rows_num == 0 ){?>
                    <tr>
                        <td colspan="5">
                        <div class="nodata">����δ���<?=$documenttype[$tid]['typename']?></div>
                        </td>
                    </tr>
                <?php } else {
                $i = 1;
                foreach($document as $d){
                ?>
                	<tr <?php if($i%2 == 0) echo 'class="row-even"'?>>
                        <td><input class="checkbox" type='checkbox' name='selectedids[]' value='<?=$d[id]?>' id="<?=$d[id]?>'"></td>
						<td>
                        <?=$ifcheck_arr[$d['if_check']]?>
                        </td>
                        <td>
                        <a href="../store.php?uid=<?=$uid?>&part=document&id=<?=$d['id']?>" target="_blank" title="<?=$d['title']?>"><?=substring($d['title'],0,46)?></a>
                        <?php if($d['imgpath']) echo '<span class="imgnum">ͼ</span>'?>
                        </td>
                        <td>
                        <?=GetTime($d['pubtime'])?>
                        </td>
                        <td>
                        <a href="?m=document&ac=edit&id=<?=$d['id']?>&type=corp">�༭</a>
                        </td>
                    </tr>
                <?php 
                	$i++;
                    }
                    unset($i);
                }
                ?>
                </tbody>
            </table>
            <div class="clearfix datacontrol">
                <div class="dataaction">
                    <span class="minbtn-wrap"><span class="btn"><input type="submit" value="ɾ��" class="button" name="document_submit" onClick="if(!confirm('��ȷ��Ҫɾ����Щ<?=$documenttype[$tid]['typename']?>��?һ��ɾ�������ɻָ�'))return false;"/></span></span> 
                </div>
                <div class="pagination"><?php echo page2(); ?></div>
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