<?php if($box != 1){?>
<div class="toolbar">
    <div class="clearfix toolbar-inner">
        <div class="quicklink">
            <ul id="mymps_website_links" class="accesslink">
				<a href="../" target="_blank">����<?php echo $mymps_global['SiteName']?>��ҳ</a>
            </ul>
        </div>
        <div class="userbar">
            <a class="username" href="index.php"><?php echo $s_uid; ?></a>
            <a href="index.php?m=pm" style="margin-top:1px">����Ϣ<?php if($pm_total > 0){?><span class="counts"><?=$pm_total?></span><?php }?></a>
            <a href="../<?php echo $mymps_global['cfg_member_logfile']?>?mod=out" style="margin-top:1px">�˳�</a>
        </div>
    </div>
</div>
<div class="header">
    <div class="clearfix header-inner">
        <div class="brand">
            <h1><a href="<?php echo $mymps_global[SiteUrl]?>" title="<?php echo $mymps_global[SiteName]?>" target="_blank"><img src="<?php echo $mymps_global[SiteUrl]?><?php echo $mymps_global[SiteLogo]?>" max-height="100"/></a></h1>
            <h2><a href="?">�û�����</a></h2>
        </div>
    </div>
</div>

<div class="clearfix siteportalnav">
    <ul>
        <?php if($mymps_global['head_style'] == 'new'){?><li><a href="../" target="_blank"><span><strong>��վ��ҳ</strong></span></a></li><?php }?>
		<li class="usercenter"><a <?php if($type == 'user'){?>class="current"<?php }?> href="index.php?type=user"><span><strong>�û�����</strong></span></a></li>
        <?php if($if_corp == 1 && $mymps_global[cfg_if_corp] == 1){?><li><a <?php if($type == 'corp'){?>class="current"<?php }?> href="index.php?type=corp&m=shop"><span><strong><font color="<?php echo $mymps_global['head_style'] == 'new' ? "" : "red";?>">���̹���</font></strong></span></a></li><?php }?>
    </ul>
</div>

<div class="subnav">
    <div class="clearfix subnav-inner">
        <div class="crumbnav">
             <?php echo $location; ?>
        </div>
    </div>
</div>

<?php }?>