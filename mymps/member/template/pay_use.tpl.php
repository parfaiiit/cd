<?php include mymps_tpl('inc_header');?>
<link rel="stylesheet" type="text/css" href="template/css/new.my.css" />
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
                                    <h3 class="ptitle"><span>��ҳ�ֵ</span></h3>
                                </div></div></div>
                                <div class="pbody">

                                    <div class="clearfix pagetab-wrap">
                                        <ul class="pagetab">
                                            <li><a href="?m=pay&ac=pay" <?php if($ac == 'pay') echo 'class="current"'; ?>><span>��ҳ�ֵ</span></a></li>
                                            <li><a href="?m=pay&ac=record" <?php if($ac == 'record') echo 'class="current"'; ?>><span>��ֵ��ϸ</span></a></li>
                                            <li><a href="?m=pay&ac=use" <?php if($ac == 'use') echo 'class="current"'; ?>><span>���Ѽ�¼</span></a></li>
                                        </ul>
                                    </div>

                                    <!--<div class="clearfix topuplogcaption">
                                        <div class="topuplog-inquire">
                                        <form action="?m=pay&ac=record" method="get">
                                        <input name="m" value="pay" type="hidden">
                                        <input name="ac" value="use" type="hidden">
                                            <div class="topuplog-inquire-form">
                                                ��ʼ����
                                                <input name="begindate" id="begindate" type="text" class="text" value="<?php echo $begindate; ?>" onClick="popUpCalendar(this, this, &quot;yyyy-mm-dd&quot;)" />
                                                ��ֹ����
                                                <input name="enddate" id="enddate" type="text" class="text" value="<?php echo $enddate; ?>" onClick="popUpCalendar(this, this, &quot;yyyy-mm-dd&quot;)" />
                                            </div>
                                            <span class="minbtn-wrap"><span class="btn"><input class="button" type="submit" value="��ѯ" /></span></span>
                                        </form>
                                        </div>
                                    </div>-->
                                    
                                    
                                    <div id="msg_success"></div>
<div id="msg_error"></div>
<div id="msg_alert"></div>
                                    
                                    <form method="post" action="?m=<?=$m?>&ac=<?=$ac?>&page=<?=$page?>">
                                    <div class="datatablewrap">
                                        <table class="datatable">
                                                <thead>
                                                    <tr>
                                                        <td>&nbsp;<input class="checkall" name="checkall" type="checkbox" id="checkall" onClick="CheckAll(this.form)"/></td>
                                                        <td>���</td>
                                                        <td>�۳����</td>
                                                        <td>��ע</td>
                                                        <td>�۳�ʱ��</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php 
                                                if($rows_num > 0){
                                                $i=1; 
                                                foreach($record as $record){
                                                ?>
                                                <tr <?php if($i%2 == 0) echo 'class="row-even"'?>>
                                                    <td>&nbsp;<input class="checkbox" type='checkbox' name='useids[]' value='<?=$record[id]?>' id="<?=$record[id]?>'"></td>
                                                        <td><?php echo $record['id']; ?></td>
                                                        <td><?php echo $record['paycost']; ?></td>
                                                        <td><?php echo $record['subject']; ?></td>
                                                        <td><?php echo GetTime($record['pubtime']); ?></td>
                                                </tr>
                                                <?php 
                                                    $i=$i+1;
                                                 }
                                                } else {
                                                ?>
                                               <tr>
                                                    <td height="15" colspan="10">
                                                        <div class="nodata">û�м�¼</div>
                                                    </td>
                                                </tr>
                                                <?}?>
                                                </tbody>
                                            </table>
                                        <div class="clearfix datacontrol">
                                            <div class="dataaction">
                                                <span class="minbtn-wrap"><span class="btn"><input type="submit" value="ɾ��" class="button" name="pay_submit" onClick="if(!confirm('��ȷ��Ҫɾ����Щ���Ѽ�¼��?һ��ɾ�������ɻָ�'))return false;"/></span></span> 
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