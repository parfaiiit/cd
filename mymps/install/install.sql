DROP TABLE IF EXISTS `my_about`;
CREATE TABLE IF NOT EXISTS `my_about` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `typename` char(25) NOT NULL,
  `content` mediumtext NOT NULL,
  `displayorder` smallint(3) NOT NULL,
  `pubdate` int(10) NOT NULL,
  `dir_type` tinyint(1) NOT NULL,
  `dir_typename` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) TYPE=MyISAM;

INSERT INTO `my_about` (`id`, `typename`, `content`, `displayorder`, `pubdate`, `dir_type`, `dir_typename`) VALUES
(1, '��վ���', '<p>\r\n	mymps�����Ϸ�����Ϣ/�ط��Ż�ϵͳ����һ�����php mysql�Ľ�վϵͳ.Ϊ�ڸ��ַ������ϼ��������Ϣ�Լ��ط��Ż���վ�ṩ�����Ľ�������� mymps,��վ���ɾ�̬��ӵ������һ�����û����飬׿Խ�ķ����ٶȺ͸���������\r\n</p>\r\n<p>\r\n	mymps(php������Ϣϵͳ/php�ط��Ż�ϵͳ)����������̵�ʱ�����һ��רҵ�ķ�����Ϣ/�ط��Ż���վ����һ��רע������Ϣ�����CMS���ݹ���ϵͳ��������͵ĳɱ������ٵ�����Ͷ�룬����̵�ʱ���ڼ���һ��������ȫ�����������ģ�Ӵ�������ά������վƽ̨��\r\n</p>\r\n<p>\r\n	�ͻ�ָ�����������������ڿͻ���Ҫ <br />\r\n	���ͻ�������Ҫ����վϵͳ�������������ͼ�ֵ�һ��ԭ�� <br />\r\n	������ϵͳ��������ѭ���Ի���ơ�ʵ�á����¡���������\r\n</p>', 1, 0, 2, 'wangzhanjianjie'),
(2, '������', '��������д��������д��ɺ󱣴��ύ����', 2, 1263483208, 4, 'advertisement'),
(3, '��ϵ����', '��������д��ϵ��ʽ����д��ɺ󱣴��ύ����', 3, 1259399384, 4, 'contactus');


DROP TABLE IF EXISTS `my_admin`;
CREATE TABLE IF NOT EXISTS `my_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` char(30) NOT NULL DEFAULT '',
  `pwd` char(32) NOT NULL DEFAULT '',
  `uname` char(20) NOT NULL DEFAULT '',
  `tname` char(30) NOT NULL DEFAULT '',
  `email` char(30) NOT NULL DEFAULT '',
  `typeid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `logintime` int(10) unsigned NOT NULL DEFAULT '0',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_admin_record_action`;
CREATE TABLE IF NOT EXISTS `my_admin_record_action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adminid` char(30) NOT NULL,
  `pubdate` int(10) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `action` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) TYPE=MyISAM;


DROP TABLE IF EXISTS `my_admin_record_login`;
CREATE TABLE IF NOT EXISTS `my_admin_record_login` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `adminid` char(32) NOT NULL,
  `adminpwd` char(30) NOT NULL,
  `pubdate` int(10) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `result` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) TYPE=MyISAM;


DROP TABLE IF EXISTS `my_admin_type`;
CREATE TABLE IF NOT EXISTS `my_admin_type` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `typename` varchar(30) NOT NULL,
  `ifsystem` tinyint(1) NOT NULL,
  `purviews` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) TYPE=MyISAM;

INSERT INTO `my_admin_type` (`id`, `typename`, `ifsystem`, `purviews`) VALUES
(1, '��������Ա', 1, 'purview_�õ�Ƭ�б�,purview_�ϴ��õ�Ƭ,purview_��Ŀ����,purview_�ѷ�������,purview_��������,purview_�������,purview_������������,purview_��������,purview_��������,purview_���ӵ���,purview_����ٱ���,purview_����绰,purview_������Ϣ,purview_ɾ���ظ�,purview_��������,purview_��Ϣ����,purview_��Ϣ�ٱ�,purview_ģ�͹���,purview_�ֶι���,purview_��վ��Ա,purview_��˻�Ա,purview_���ӻ�Ա,purview_��Ա��,purview_ʵ����֤,purview_��Ա�ĵ�,purview_վ�ڶ���Ϣ,purview_ģ�����,purview_��Ա��¼��¼,purview_��Ա֧����¼,purview_��Ա���Ѽ�¼,purview_��Ϣ����,purview_��ӷ���,purview_��������,purview_���ӵ���,purview_�̼ҷ���,purview_���ӷ���,purview_�û��б�,purview_�û���,purview_�����¼,purview_���ݿⱸ��,purview_���ݿ⻹ԭ,purview_���ݿ�ά��,purview_ϵͳ����,purview_ģ�����,purview_SEOα��̬,purview_��֤���˵���,purview_�������õȼ�,purview_��������,purview_ϵͳ�Ż�,purview_������������,purview_��������,purview_�ֻ���������,purview_�Ѱ�װ���,purview_���Ź���,purview_�������,purview_��������,purview_��Ʒ����,purview_��Ʒ����,purview_��������,purview_�ʼ�������,purview_�ʼ�ģ��,purview_�ʼ����ͼ�¼,purview_���Žӿ�,purview_���ŷ��ͼ�¼,purview_����֧���ӿ�,purview_������λ,purview_���ݵ���,purview_�������˺�����');


DROP TABLE IF EXISTS `my_advertisement`;
CREATE TABLE IF NOT EXISTS `my_advertisement` (
  `advid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `available` tinyint(1) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '0',
  `displayorder` tinyint(3) NOT NULL DEFAULT '0',
  `title` varchar(50) NOT NULL DEFAULT '',
  `targets` mediumtext NOT NULL,
  `parameters` mediumtext NOT NULL,
  `code` mediumtext NOT NULL,
  `starttime` int(10) unsigned NOT NULL DEFAULT '0',
  `endtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`advid`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_announce`;
CREATE TABLE IF NOT EXISTS `my_announce` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `redirecturl` varchar(250) NOT NULL,
  `titlecolor` char(10) NOT NULL,
  `content` mediumtext NOT NULL,
  `author` varchar(20) NOT NULL,
  `pubdate` int(10) NOT NULL,
  `begintime` int(10) NOT NULL,
  `endtime` int(10) NOT NULL,
  `hits` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_area`;
CREATE TABLE IF NOT EXISTS `my_area` (
  `areaid` mediumint(6) NOT NULL AUTO_INCREMENT,
  `areaname` varchar(32) NOT NULL,
  `parentid` int(11) unsigned NOT NULL,
  `areaorder` smallint(6) NOT NULL,
  PRIMARY KEY (`areaid`)
) TYPE=MyISAM;

INSERT INTO `my_area` (`areaid`, `areaname`, `parentid`, `areaorder`) VALUES
(1, '����1', 0, 1);

DROP TABLE IF EXISTS `my_badwords`;
CREATE TABLE IF NOT EXISTS `my_badwords` (
  `words` mediumtext NOT NULL,
  `view` varchar(100) NOT NULL,
  `ifcheck` tinyint(1) NOT NULL
) TYPE=MyISAM;


INSERT INTO `my_badwords` (`words`, `view`, `ifcheck`) VALUES
('�ֹ�', '**', 1);


DROP TABLE IF EXISTS `my_cache`;
CREATE TABLE IF NOT EXISTS `my_cache` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `page` varchar(20) NOT NULL,
  `time` int(10) NOT NULL,
  `open` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) TYPE=MyISAM;


INSERT INTO `my_cache` (`id`, `page`, `time`, `open`) VALUES
(318, 'site', 0, 0),
(319, 'list', 0, 0),
(320, 'info', 0, 0),
(321, 'aboutus', 0, 0),
(322, 'announce', 0, 0),
(323, 'faq', 0, 0),
(324, 'friendlink', 0, 0),
(325, 'sitemap', 0, 0),
(326, 'changecity', 0, 0);


DROP TABLE IF EXISTS `my_category`;
CREATE TABLE IF NOT EXISTS `my_category` (
  `catid` mediumint(6) NOT NULL AUTO_INCREMENT,
  `if_view` tinyint(1) NOT NULL DEFAULT '1',
  `color` char(10) NOT NULL,
  `catname` varchar(32) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `usecoin` mediumint(8) NOT NULL DEFAULT '0',
  `title` varchar(250) NOT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `parentid` int(11) DEFAULT NULL,
  `gid` smallint(5) NOT NULL,
  `modid` smallint(5) NOT NULL,
  `catorder` smallint(6) NOT NULL,
  `if_upimg` tinyint(1) NOT NULL DEFAULT '1',
  `if_mappoint` tinyint(1) NOT NULL DEFAULT '0',
  `dir_type` tinyint(1) NOT NULL,
  `dir_typename` varchar(100) NOT NULL,
  `template` varchar(20) NOT NULL DEFAULT 'list',
  `template_info` varchar(20) NOT NULL DEFAULT 'info',
  `html_dir` varchar(200) NOT NULL,
  `htmlpath` varchar(200) NOT NULL,
  PRIMARY KEY (`catid`),
  KEY `parentid` (`parentid`),
  KEY `catname` (`catname`),
  KEY `catorder` (`catorder`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_certification`;
CREATE TABLE IF NOT EXISTS `my_certification` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `typeid` tinyint(1) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `img_path` varchar(250) NOT NULL,
  `pubtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_channel`;
CREATE TABLE IF NOT EXISTS `my_channel` (
  `catid` mediumint(6) NOT NULL AUTO_INCREMENT,
  `if_view` tinyint(1) NOT NULL DEFAULT '1',
  `color` char(10) NOT NULL,
  `catname` varchar(32) NOT NULL,
  `title` varchar(250) NOT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `parentid` int(11) DEFAULT NULL,
  `catorder` smallint(6) NOT NULL,
  `dir_type` tinyint(1) NOT NULL,
  `dir_typename` varchar(100) NOT NULL,
  `html_dir` varchar(200) NOT NULL,
  `htmlpath` varchar(200) NOT NULL,
  PRIMARY KEY (`catid`),
  KEY `parentid` (`parentid`),
  KEY `catname` (`catname`),
  KEY `catorder` (`catorder`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_checkanswer`;
CREATE TABLE IF NOT EXISTS `my_checkanswer` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `question` varchar(250) NOT NULL,
  `answer` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) TYPE=MyISAM;

INSERT INTO `my_checkanswer` (`id`, `question`, `answer`) VALUES
(1, '2+3=?', '5'),
(2, '��վ����[��:���Ϸ�����Ϣ]', '���Ϸ�����Ϣ'),
(6, '5+8=?', '13'),
(5, '2+5=?', '7');

DROP TABLE IF EXISTS `my_comment`;
CREATE TABLE IF NOT EXISTS `my_comment` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `userid` varchar(20) NOT NULL,
  `content` varchar(255) NOT NULL,
  `pubtime` int(10) NOT NULL,
  `ip` char(16) NOT NULL,
  `comment_level` tinyint(1) NOT NULL,
  `typeid` int(8) NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'information',
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `typeid` (`typeid`,`comment_level`,`type`),
  KEY `comment_level` (`comment_level`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_config`;
CREATE TABLE IF NOT EXISTS `my_config` (
  `description` varchar(100) NOT NULL,
  `value` mediumtext NOT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'config',
  KEY `type` (`type`),
  KEY `description` (`description`)
) TYPE=MyISAM;

INSERT INTO `my_config` (`description`, `value`, `type`) VALUES
('latestbackup', '', 'database'),
('whenpost', '', 'checkanswe'),
('whenregister', '', 'checkanswe'),
('jsrefdomains', '', 'jswizard'),
('jsdateformat', 'Y/m/d', 'jswizard'),
('levelup_notice', '�������ƽ��Ա�������ܹ����ϴ����̱���bannerͼƬ�����л�ʹ�ø���ĵ���ģ���񣬲�ӵ�и���������Ŀ�Ĳ���Ȩ�ޡ�', 'levelup'),
('credit_set', 'a:1:{s:4:"rank";a:15:{i:1;i:10;i:2;i:20;i:3;i:40;i:4;i:70;i:5;i:120;i:6;i:200;i:7;i:400;i:8;i:700;i:9;i:1200;i:10;i:1800;i:11;i:2600;i:12;i:4000;i:13;i:10000;i:14;i:30000;i:15;i:60000;}}', 'credit_sco'),
('score', 'a:1:{s:4:"rank";a:8:{s:8:"register";s:3:"+10";s:5:"login";s:2:"+2";s:11:"information";s:2:"+2";s:6:"coupon";s:2:"+2";s:5:"group";s:2:"+2";s:5:"goods";s:2:"+2";s:11:"com_certify";s:3:"+10";s:11:"per_certify";s:3:"+10";}}', 'credit_sco'),
('credit', 'a:1:{s:4:"rank";a:3:{s:11:"com_certify";s:3:"+50";s:11:"per_certify";s:3:"+50";s:11:"coin_credit";s:3:"+10";}}', 'credit_sco'),
('distort', '5', 'authcode'),
('insidelink', 'a:1:{s:7:"forward";a:5:{s:11:"information";s:1:"1";s:4:"news";s:1:"1";s:5:"goods";s:1:"1";s:5:"group";s:1:"1";s:6:"coupon";s:1:"1";}}', 'insidelink'),
('comment', 'a:3:{s:11:"information";s:1:"2";s:4:"news";s:1:"2";s:5:"store";s:1:"2";}', 'comment'),
('snow', '', 'authcode'),
('jscachelife', '0', 'jswizard'),
('jsstatus', '1', 'jswizard'),
('custombackup', 'a:1:{i:0;s:11:"my_category";}', 'database'),
('seo_force_store', 'active', 'seo'),
('seo_force_space', 'active', 'seo'),
('seo_force_yp', 'active', 'seo'),
('seo_force_news', 'active', 'seo'),
('tpl_set', 'a:15:{s:7:"banmian";s:7:"classic";s:8:"smp_cats";a:4:{s:5:"first";a:3:{i:0;s:1:"3";i:1;s:1:"1";i:2;s:1:"7";}s:6:"second";a:3:{i:0;s:1:"2";i:1;s:1:"5";i:2;s:2:"10";}s:5:"third";a:2:{i:0;s:1:"4";i:1;s:1:"6";}s:6:"fourth";a:3:{i:0;s:1:"8";i:1;s:1:"9";i:2;s:3:"189";}}s:9:"showstyle";a:11:{i:3;s:1:"2";i:1;s:1:"2";i:2;s:1:"2";i:4;s:1:"2";i:5;s:1:"2";i:6;s:1:"2";i:7;s:1:"2";i:8;s:1:"2";i:9;s:1:"3";i:189;s:1:"3";i:10;s:1:"2";}s:7:"classic";a:1:{s:4:"cats";s:2:"10";}s:6:"portal";a:10:{s:6:"ershou";s:1:"1";s:9:"ershoumod";s:1:"2";s:6:"zufang";s:2:"41";s:9:"zufangmod";s:2:"23";s:10:"ershoufang";s:2:"43";s:13:"ershoufangmod";s:2:"22";s:7:"zhaopin";s:1:"4";s:10:"zhaopinmod";s:1:"7";s:6:"jianli";s:1:"6";s:9:"jianlimod";s:1:"9";}s:7:"portali";a:3:{s:7:"acreage";s:7:"acreage";s:6:"prices";s:6:"prices";s:7:"company";s:7:"company";}s:12:"indextopinfo";s:2:"12";s:7:"newinfo";s:1:"0";s:8:"announce";s:1:"8";s:3:"faq";s:1:"0";s:4:"news";s:1:"7";s:11:"foreachinfo";s:1:"6";s:5:"goods";s:1:"8";s:9:"telephone";s:2:"12";s:7:"lifebox";s:2:"24";}', 'tpl'),
('seo_force_info', 'active', 'seo'),
('seo_force_about', 'active', 'seo'),
('seo_force_category', 'active', 'seo'),
('seo_description', '', 'seo'),
('mobile', 'a:8:{s:11:"allowmobile";s:1:"1";s:11:"autorefresh";s:1:"1";s:8:"register";s:1:"1";s:4:"post";s:1:"0";s:8:"authcode";s:1:"1";s:18:"mobiletopicperpage";s:2:"10";s:12:"mobiledomain";s:0:"";s:10:"mobilelogo";s:0:"";}', 'mobile'),
('line', '1', 'authcode'),
('mail_user', '', 'mail'),
('smtp_mail', '', 'mail'),
('smtp_serverport', '', 'mail'),
('smtp_server', '', 'mail'),
('noise', '12', 'authcode'),
('screen_info', 'full', 'config'),
('cfg_upimg_number', '4', 'config'),
('callback', '', 'qqlogin'),
('appkey', '', 'qqlogin'),
('callback', '', 'wxlogin'),
('appsecret', '', 'wxlogin'),
('appid', '', 'wxlogin'),
('open', '', 'wxlogin'),
('appid', '', 'qqlogin'),
('open', '', 'qqlogin'),
('seo_keywords', '��վ�ؼ���', 'seo'),
('sms_pwdtpl', '', 'sms'),
('mail_service', 'smtp', 'mail'),
('sms_regtpl', '', 'sms'),
('sms_service', 'no', 'sms'),
('sms_pwd', '', 'sms'),
('sms_user', '', 'sms'),
('type', 'english', 'authcode'),
('post', '1', 'authcode'),
('forgetpass', '1', 'authcode'),
('cfg_if_nonmember_info', '1', 'config'),
('cfg_forbidden_post_ip', '', 'config'),
('cfg_allow_post_area', '', 'config'),
('cfg_disallow_post_tel', '', 'config'),
('cfg_info_if_img', '0', 'config'),
('screen_cat', 'full', 'config'),
('cfg_info_if_gq', '0', 'config'),
('cfg_post_editor', '0', 'config'),
('cfg_if_info_verify', '0', 'config'),
('cfg_postfile', 'publish.php', 'config'),
('cfg_upimg_watermark_position', '9', 'config'),
('register', '1', 'authcode'),
('login', '1', 'authcode'),
('screen_search', 'full', 'config'),
('cfg_upimg_watermark_diaphaneity', '60', 'config'),
('cfg_upimg_watermark_size', '12', 'config'),
('cfg_upimg_watermark_color', '#FFFFFF', 'config'),
('cfg_upimg_watermark_text', 'http://www.mymps.com.cn', 'config'),
('cfg_upimg_watermark_img', '', 'config'),
('cfg_upimg_watermark_height', '50', 'config'),
('cfg_upimg_watermark_width', '180', 'config'),
('cfg_upimg_watermark', '1', 'config'),
('cfg_member_info_bold', '1', 'config'),
('cfg_member_info_refresh', '0', 'config'),
('cfg_upimg_type', 'png,jpg,gif,jpeg', 'config'),
('cfg_upimg_size', '1024', 'config'),
('cfg_member_upgrade_list_top', '1', 'config'),
('incline', '5', 'authcode'),
('close', '3', 'authcode'),
('number', '4', 'authcode'),
('cfg_member_info_red', '1', 'config'),
('cfg_member_upgrade_top', '2', 'config'),
('cfg_member_upgrade_index_top', '3', 'config'),
('cfg_tpl_dir', 'blue', 'config'),
('cfg_score_fee', '8', 'config'),
('cfg_coin_fee', '2', 'config'),
('cfg_member_perpost_consume', '0', 'config'),
('cfg_if_affiliate', '1', 'config'),
('cfg_affiliate_score', '5', 'config'),
('cfg_pay_min', '10', 'config'),
('screen_index', 'full', 'config'),
('cfg_member_reg_content', '�𾴵�{username},���Ѿ�ע���Ϊ{sitename}�Ļ�Ա,�����ڷ�������ʱ,���ص��ط��ɷ��档\r\n�������ʲô���ʿ�����ϵ����Ա��\r\n\r\n\r\n{sitename}\r\n{time}', 'config'),
('cfg_member_reg_title', '{username},����,��л����ע��,���Ķ��������ݡ�', 'config'),
('cfg_forbidden_reg_ip', '', 'config'),
('cfg_member_regplace', '', 'config'),
('cfg_if_corp', '1', 'config'),
('cfg_if_member_log_in', '1', 'config'),
('cfg_if_member_register', '1', 'config'),
('cfg_member_verify', '2', 'config'),
('cfg_member_logfile', 'member.php', 'config'),
('bodybg', '0', 'config'),
('seo_sitename', '������Ϣ��', 'seo'),
('cfg_raquo', '&gt;', 'config'),
('cfg_backup_dir', '/backup', 'config'),
('cfg_page_line', '15', 'config'),
('cfg_list_page_line', '16', 'config'),
('cfg_site_open_reason', '', 'config'),
('mail_pass', '', 'mail'),
('seo_force_goods', 'active', 'seo'),
('seo_html_make', '', 'seo'),
('cfg_authcodefile', 'randcode.php', 'config'),
('cfg_if_site_open', '1', 'config'),
('SiteStat', '', 'config'),
('SiteCity', '����', 'config'),
('SiteLogo', '/logo.gif', 'config'),
('SiteBeian', '', 'config'),
('SiteTel', '010-00000000', 'config'),
('SiteEmail', '', 'config'),
('SiteQQ', '', 'config'),
('SiteUrl', '', 'config'),
('SiteName', '�ҵ���վ', 'config'),
('cfg_nonmember_perday_post', '', 'config'),
('mapapi', '', 'config'),
('mapflag', '', 'config'),
('mapapi_charset', '', 'config'),
('mapview_level', '14', 'config'),
('cfg_mappoint', '', 'config'),
('head_style', 'new', 'config');

DROP TABLE IF EXISTS `my_corp`;
CREATE TABLE IF NOT EXISTS `my_corp` (
  `corpid` mediumint(6) NOT NULL AUTO_INCREMENT,
  `corpname` varchar(32) NOT NULL,
  `parentid` int(11) unsigned NOT NULL,
  `corporder` smallint(6) NOT NULL,
  PRIMARY KEY (`corpid`),
  KEY `areaname` (`corpname`),
  KEY `parentid` (`parentid`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_coupon`;
CREATE TABLE IF NOT EXISTS `my_coupon` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cate_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `areaid` smallint(5) NOT NULL DEFAULT '0',
  `userid` varchar(30) NOT NULL,
  `pre_picture` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL DEFAULT '',
  `begindate` int(10) NOT NULL DEFAULT '0',
  `enddate` int(10) NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL,
  `des` varchar(50) NOT NULL DEFAULT '',
  `content` mediumtext NOT NULL,
  `ctype` enum('�ۿ�ȯ','�ּ�ȯ') NOT NULL DEFAULT '�ۿ�ȯ',
  `sup` varchar(3) NOT NULL,
  `prints` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `comments` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `grade` smallint(5) unsigned NOT NULL DEFAULT '1',
  `flag` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `hit` int(10) NOT NULL DEFAULT '0',
  `qq` int(8) NOT NULL,
  `web_address` char(100) NOT NULL,
  `qq_qun` int(8) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cate_id` (`cate_id`),
  KEY `areaid` (`areaid`),
  KEY `userid` (`userid`),
  KEY `status` (`status`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_coupon_category`;
CREATE TABLE IF NOT EXISTS `my_coupon_category` (
  `cate_id` smallint(3) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(100) NOT NULL,
  `cate_view` tinyint(1) NOT NULL DEFAULT '1',
  `cate_order` smallint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cate_id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_crons`;
CREATE TABLE IF NOT EXISTS `my_crons` (
  `cronid` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL DEFAULT '',
  `lastrun` int(10) unsigned NOT NULL DEFAULT '0',
  `nextrun` int(10) unsigned NOT NULL DEFAULT '0',
  `day` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cronid`),
  KEY `nextrun` (`nextrun`)
) TYPE=MyISAM;

INSERT INTO `my_crons` (`cronid`, `name`, `lastrun`, `nextrun`, `day`) VALUES
(1, 'information', 1471622409, 1471708800, 1),
(16, 'advertisement', 1471622409, 1471708800, 1),
(17, 'levelup', 1471622409, 1471708800, 1);

DROP TABLE IF EXISTS `my_faq`;
CREATE TABLE IF NOT EXISTS `my_faq` (
  `id` tinyint(5) NOT NULL AUTO_INCREMENT,
  `typeid` tinyint(5) NOT NULL,
  `title` char(100) NOT NULL,
  `content` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) TYPE=MyISAM;

INSERT INTO `my_faq` (`id`, `typeid`, `title`, `content`) VALUES
(2, 5, '��γ�Ϊ��վ��ע���û���', 'ע����ʵ�ܼ򵥣�ֻҪ����������ʾ������ɡ� <br />\r\n<br />\r\n1��������վ��ҳ��������Ͻǡ�ע�ᡱ��ť�� <br />\r\n<br />\r\n2�����뵽��ע�ᡱҳ�棬������ʾ��Ϣ����д�����ǳơ����롢����֮�󣬵����ע�ᡱ���ɡ� <br />\r\n<br />\r\n3�������Ҫ������Ϣ���ڻ�Ա�����У�����ֱ�ӵ����������ѷ�����Ϣ����ť�������Ͻǵġ���ѷ�����Ϣ��ͼ�ꡣ <br />\r\n<br />'),
(3, 5, '�ǳ���ʲô�ã����Ը�����', '1���ǳ������½������ͨ��֤��ÿ���˶�����һ��Ψһ��ʶ���ǳƣ�����������ÿһ����Ϣ��Ҳ����ʾ�������������ڱ���վ��ݵı�־��Ŀǰ����վ�ϵ��ǳ�(�˺�)�ǲ������޸ĵġ������û�ע��ʱ��ѡ����ϲ�������μǵ��˺š� <br />\r\n<br />\r\n2���ǳ��ǲ��ܹ��޸ĵģ��ͺ�����ʵ�����������һ���� <br />\r\n<br />\r\n3���ǳƽ�������ȹ��ڱ���վ�Ŀ���ÿһ�졣 <br />'),
(4, 5, '��ô��¼��Ա�������ģ�', '��ע���Ϊ����վ�û�����Ϳ���ʹ���˺�(���ǳ�)��¼��Ա���������ˣ�����������������ϸ��������ɣ� <br />\r\n<br />\r\n1�����뱾����ҳ����������Ͻǡ���¼�� <br />\r\n<br />\r\n2�����������ǳ������룬�������¼���� <br />\r\n<br />\r\n3����ϲ����½�ɹ�������Է�����Ϣ�������Ϣ�����㿪�ġ� <br />\r\n<br />'),
(6, 5, '�ҵ�������������ô�죿', '������������˺����룬���ģ�������ͨ���������¼��������ٵ�¼ҳ��,�����ҳ����С���еġ��������� ��Ҫ�һء���ť��á�<br />\r\n<br />\r\n1�����뵽�һ�����ҳ���,��������������ܱ�����ôֱ����ҳ���������ܱ�������𰸱���һء� <br />\r\n<br />\r\n2�������û�������ܱ�����Ҳ������ϵ�ͷ������������롣'),
(7, 2, '�ڱ�վ������ϢҪ�շ���', '1����վ��һ����ѵ�������Ϣ����ƽ̨�� <br /><br />2������Ϊ�����ͨ�û��ṩ������ѷ���������Ϣ�ķ���'),
(22, 4, '������֤����', 'һ����֤Ŀ�� <br /><br />������֤�������������֤���̼�Ӫҵִ����֤������վ�Ƴ�������֤��Ϊ�淶��վ�������򣬽��������������١�Υ���Ȳ�����Ϣ�������Ϣ��ʵ������Ŷȣ�Ҳ��һ���̶��ϱ�֤��֤�û�����Ϣ�������ڷ���֤�û�����Ϣ���������û���ѯʹ����Ϣ�����ģ����û�һ�����õĳ������罻��������ͬʱ���Դ�������Υ����ϢҲ���кܴ���������������ݣ�ÿλ��֤����û�Ӧ������������Ϣ���г��źͷ������Ρ� <br /><br />������֤���� <br /><br />�û���Ը�������֤��ԭ�� <br />1. ���������֤��һ�����ֻ֤����֤һ���û������û����ϴ���ʵ�ĸ���������ϣ� <br />2. �̼�Ӫҵִ����֤�й�˾��������Ӫҵִ������ȫһ�£���������˲��ǹ�˾���������ˣ�������ί���飬��д�����ϴ����֤��ɫԭ��ɨ����� <br /><br />������֤��ʽ <br /><br />1. �������룬�봫�����֤����Ӫҵִ�ո�ӡ�� <br />2. �������룬����д�����֤��Ϣ��ͬʱ�ϴ���ɫԭ��ɨ����� <br />���б���վ�û����������ʹ����֤������֤���̼򵥣�ͨ����֤������ʵ�Ժͳ��Ŷȣ�����ѻ��������ֵ����������֤�û���ݱ�ʶ ��ͬʱ����������Ϣ�������Ѹ���չʾ�뷴������Ϣ�����չʾ���б�ҳ&ldquo;�����û�ר��&rdquo;�� <br /><br /><br />�ġ���֤��˱�׼ <br /><br />1.���������֤��һ�����ֻ֤����֤һ���û������̼�Ӫҵִ����֤�й�˾��������Ӫҵִ������ȫһ�£���������˲��ǹ�˾���������ˣ�������ί���飬��д�����ϴ����֤��ɫԭ��ɨ����� <br /><br />2. ��֤ʱ�˺ű�����ʹ�� <br />���ύ�������֤ԭ����ӡ���ͻ��ڸ�ӡ�������ͨ����ʹ���˺ŷ��������Ҹ����֤����������֤��ȷ���˺Ű�ȫ�� <br /><br /><br />3. ��ʵ�����ϵı��ܳ�ŵ <br />ͨ����֤���ʵ�����Ͻ�����ȡ������ģ�����վ����������ʵ���������֤�������Ϣ���ϣ���ȡ�ϸ�ı��ܴ�ʩ�������ṫ�������ṩ����������������κ������������� <br /><br /><br />�塢��֤�û����� <br /><br />1. ��֤����̼��û��뱣֤��Ϣ����ʵ�ԣ���������١�Υ����������Ϣ��Ҫ���ذ�淢����Ϣ�����ڱ��û�Ͷ�ߵ��̼ң�����Ա�������������ȡ���桢ȡ���̼��ʸ񡢴���˻�������˺ŵȴ�����ʽ����������߽�����û�׷������̼ҷ������Ρ� <br /><br />2. ���̼�֮��Ҫ�����ദ��������ڮ�١�á�����������Ϊ������Ա���̼������������ͨ��վ�ڶ���Ϣ��������Ҿ����ܵ�������ƽ��顣���ڶ��⹥����Ϊ����������׹�����������Ա������ڲ�ȡ���澯�桢ȡ���̼��ʸ񡢴���˻�������˺ŵȴ�����ʽ��'),
(23, 2, 'Ϊʲô�ҵ���Ϣ�ǡ�����ˡ���', '<div>Ϊ�˱�֤��վ����Ϣ���������ǶԲ�����Ϣ�����ˡ�����ˡ�״̬��������ˡ�����Ϣ�����¼����������������������������Ǳ༭���ἰʱ���� <br />\r\n<br />\r\n1��Ϊ�˱�֤��վ�ϵľ��������Ϣ�Ϸ����淶�����ǻ��ں�̨���ùؼ��ֵ����εĹ��ܣ���������Ϣ����Υ��������Υ��������Դ��ײ��š��������ˡ�������������ݣ�ϵͳ�����������Ϣ�Զ����롰����ˡ����С� <br />\r\n<br />\r\n2�����������Ϣ�ظ������������ϡ���ϵ��ʽΪ��ء���Ϣȱ�ٹؼ����ݵ�����£�Ҳ��ᱻ��վ���롰����ˡ����С� <br />\r\n<br />\r\n3��������ϵ��ʽ��֮ǰ�������˺�ʹ�÷�������Ϣ����ô������ϢҲ���Զ����롰����ˡ�״̬�У������������������������ϵ���ǽ���ȷ�ϣ��Ա�������ʹ��������ϵ��ʽ�� <br />\r\n<br />\r\n4����Ȼ����������ḻ��Ҳ������ĳЩ�������������Ե����ݷ���ʱͬ����������������δ�ܽ�����������뱾վ�ͷ�ȡ����ϵ�� <br />\r\n<br />\r\n5�� ������ˡ�����Ϣ24Сʱ�ڻ�����꣬ͨ����˺����Ϣ�ṫ��������ûͨ����˵���Ϣ�������롰����վ����</div>'),
(24, 1, '�ö����ļ�����ʽ��', '<p>\r\n	�ö���3����ʽ�������ö���С���ö�����ҳ�ö���\r\n</p>\r\n<p>\r\n	�����ö�������С�������ö���Ϣ�����Բ��÷�����Ϣ��ҳ����ʽ��\r\n</p>\r\n<p>\r\n	С���ö�������С�������ö���Ϣ�����Բ��÷�����Ϣ��ҳ����ʽ��\r\n</p>\r\n<p>\r\n	��ҳ�ö���������ҳ�ö���Ϣ�����Բ��÷�����Ϣ��ҳ����ʽ��\r\n</p>'),
(25, 1, '�ö���ʲô�ô���', '<p>\r\n	��Ϣ�ö��󣬾��ܹ������ױ�������˹�ע������Ϊ�����������Ϣʱ�����������ǰ�����ݣ�������������Ϣ����Ч�Ծ͵õ��˱��ϡ��ö���Ϣ��õĹ�ע����ͨ��Ϣ��20����\r\n</p>'),
(26, 1, '�ö���ʲô��', '<p>\r\n	��Ϣ�ö��Ǳ�վΪ�û��ṩ����ֵ���񣬶��Լ��Ѿ������ɹ�����Ϣ����������ϵ��վ������Ա��ѯ�ö�ҵ���ö������Ϣ�ͻ��ڸ������б�ҳ�г�ʱ�䴦�ڿ�ǰ�Ĺ̶�λ�ã�������Ŀͼ�� \r\n���ö���Ϣ�������û������ע��������Ϊ���µ����ӷ�������ʹ�������ӱ�������ߣ��������޷�����ע����\r\n</p>'),
(27, 1, 'ˢ����ʲô��', 'ˢ����Ϣ�൱�����������Ϣ���·���һ�Σ���Ϣ���ٴ��ŵ�������б�ҳ��Ŀ�ǰλ�á�&nbsp;<br />'),
(28, 2, 'Ϊʲô�ҷ���������Ϣ��', '<p>\r\n	<strong>Ϊ��Ӫ�����õ������Χ�������˺ŷ���������Ϣ���ߵ�¼���ˣ�����������ԭ��<br />\r\n<br />\r\n</strong> \r\n</p>\r\n1�����Ǹ���ÿ�������������˷������������Ѿ��ڸ÷����´ﵽ�˷����������ޣ� <br />\r\n<p>\r\n	<br />\r\n</p>\r\n2��Ϊʲô�ҷ�����Ϣʱ��ʾ�ҡ���Ϣ�ڰ����Ƿ��ʡ��� <br />\r\n�Ƿ�����ָ��˾�����ء����ܲ��š������ṩ�Ĵʻ�����Ҳ�Ҫ����Υ����Ϣ����д�����һ�·������ݱ���������Ϊ��<br />\r\n<p>\r\n	<br />\r\n</p>\r\n3��Ϊʲô��Ϣ�����ɹ�����ʾ������С��� <br />\r\n���з�������Ϣ�������Ƚ���������ȹ�����Ա���ͨ����ŻῪ�ų�������վ�����Ա��24Сʱ�ڻ��ṩ������˽����<br />\r\n<p>\r\n	<br />\r\n</p>\r\n4��Ϊʲô������Ϣʱ��ʾ�ҡ�������Ϣ̫��Ƶ������ <br />\r\nΪ�˷�ֹ�����û��Ķ��ⷢ����Ϊ�����ǶԷ����ٶȽ��������ƣ���ʱ��������΢��Ϣһ���ٷ����� <br />\r\n<p>\r\n	<br />\r\n</p>\r\n5��Ϊʲô������Ϣʱ��ʾ�� ����Ϣ�ظ����� <br />\r\n��ͬ����Ϣ�������ظ��������������ڷ���ʱ����Ϣ�����޸ġ���������ѡ�����û������еġ�ˢ�¡������淢���� <br />\r\n<p>\r\n	<br />\r\n</p>\r\n6��Ϊʲô�ҷ����������ӣ���ô�����������棩�� <br />\r\n����������������ʱ�����Գ�����������IE��ʱ�ļ������������ѡ�������: <br />\r\n1. �������������ť�޷�Ӧ��<br />\r\n2. �������������ť�󣬰�ťΪ��ɫ��ҳ�治��ת��<br />\r\n3. ��ʾ���Է���0����Ϣ��<br />\r\n4. �޷��ϴ�ͼƬ�����·���������Ϣ <br />'),
(29, 6, '���������վ', '<p>\r\n	<strong>ʲô�ǵ�����վ��</strong><br />\r\n������վͨ��αװ��Ϊ������վ���Ա����̵���Щ�����������Ͻ��ײ����������û��������� \r\nΪ����վ����ȡ�������ύ���˺ź�������Ϣ����һ��ͨ�������ʼ������������ʼ���һ������αװ�����ӽ��ռ�������������վ������ͨ \r\n����Ϣ�����������վ���ӵ���Ϊ���ջ��û���������վ�С�\r\n</p>\r\n<p>\r\n	<strong>������վ�ĳ���������</strong><br />\r\n������վ��ҳ������ʵ��վ������ȫһ�£�Ҫ��������ύ�˺ź����롣һ����˵������ \r\nվ�ṹ�ܼ򵥣�ֻ��һ���򼸸�ҳ�棬URL����ʵ��վ��ϸ΢��𣬵�������ģ�һ����˵��������Ա��ıȽ϶ࡣ<br />\r\n����ʵ�Ĺ�����վ \r\nΪwww.icbc.com.cn����Թ��еĵ�����վ���п���Ϊwww.1cbc.com.cn��<br />\r\n��ʵ���Ա����̵���ַΪhttp://www.taobao.com/������Ա� \r\n�ĵ�����վ���п����� \r\nhttp://list.taobao.com/<br />\r\nhttp://ship.36165279taobao.com/<br />\r\nhttp://taobao.gegecn.com.cn<br />\r\nhttp://taobao0.com<br />\r\nhttp://w \r\nww.taobaoxaq.com.cn/<br />\r\nhttp://www.Taobaveng.cn<br />\r\nhttp://www.paokn.com/taobao<br />\r\nhttp://www.teobao.com<br />\r\nhttp://www.taoob \r\nao.com<br />\r\nhttp://taobaoa.w31.100dns.com/<br />\r\nhttp://www.taobaoy.com<br />\r\nhttp://taobao-hb.cn/<br />\r\nӦ���ر�С���ɲ��淶����ĸ�� \r\n����ɵ�CN����ַ����ý�ֹ���������JavaScript��ActiveX���룬��Ҫ��һЩ��̫�˽����վ��\r\n</p>\r\n<p>\r\n	<strong>��η�ֹ��ƭ</strong><br />\r\n������Щ����ֱ�����ӵ��Ա�������ַ�ģ����˵�¼��֧��������ҳ�����������ģ����������ӵ� \r\n����Ա���ַ�������̼Ҿ��������˹˿Ͷ��Ա����������Σ�ͨ���ڹٷ���ע����ʽ�����꣬����QQ�����˿͵�¼������ͬ�ļ��Ա������� \r\nַ����ȡ�˿͵�֧�����˺������벢�������ƻ�������������������ܶ࣬�����������Ѵ�ҵ��ǣ��Ա����׵ı任��ʽ���ֶ����������� \r\n���й��ɵģ�ǰ׺���ǡ�taobao����ֻ�ں�׺����СС���𣬻����෴���˿��粻����ȶԺ��ѿ��������������������Ա��������м��� \r\n������ʵ��վ������������Ƶ���Ҫ�Ա����׵���վ�����������ṩ�Ա��ĵ������ƣ�Ȼ���http://www.taobao.com/�����ʵ���Ա�������á��������������Ա�����������ף���Ϊ����������ʶ������Ա��Ĺ��ܣ�����ַ����ʾ��ȫ���ٵĻ�����ʾ��롣\r\n</p>'),
(30, 6, '����ƭ���ַ�����', '<div>\r\n	<h3>\r\n		ƭ�ӵĻ����ֶ�\r\n	</h3>\r\n	<p>\r\n		һֱ����������ƭ�Ӳ���������䲻�����ڣ����ǻ�������ҩ�ķ����������������Ϣͨ����ƭ�ӵ���ϸ�о���Ϊ����û��ܽ�һЩ������ �Ķ�����\r\n	</p>\r\n	<p>\r\n		<strong>1��</strong>������Ʒ���ԡ�����XXXX,�۸�XXX������ļ�Q���ġ���Щ���Ӵ�Ҷ�ҪС������һ�£�������Щ���ӳ����۵��� \r\nƷ�۸񶼻�������ϱ�����࣬��͵������ˣ���Ҫ̰ͼС���ˣ�̰��� ʧ��\r\n	</p>\r\n	<p>\r\n		<strong>2��</strong>ƭ��ͨ��������֧�ֵ�������ֻ���ȴ���������Ʒ���ᵽ֧�������߲ƻ�ͨʲô�ĵ����������˵�����ã���ʱ \r\n���Ҫע���ˣ�������Ѱ��һ̨��Ҳ��Ҫ�������ţ�������һ�µ�������<br />\r\n�ҵ���Ʒ����Ҫ�����Լ�������Ǯ��Ҫ��\r\n	</p>\r\n	<p>\r\n		<strong>3��</strong>ĳЩƭ�ӵ��ַ���һ���ߣ���ʵҲһ�۾��ܿ����ģ�����������ȷʵ������Ʒ�������������������ֻ�������ն����Ȱ���Ʒ����Ƭ����������Ȼ�󾲵ȴ����ϵ������׵�ʱ��Ҫ���ȿ�һ�룬Ȼ��˵�����Ʒ�ʸ��㣬û�������ٰ�����һ���Ǯ�� \r\n�Ĵ�����������������»��ˣ���Ҫ��Ϊ�Լ���Ȩ�����˱��ϣ���һ���Լ���ʲô������԰ɣ����Ǳ�ƭ��ȫ�������Ǳ�ƭ��һ�룡\r\n	</p>\r\n	<p>\r\n		<strong>4��</strong>����Ʒ��������Ʒ������ƭ��Ҳ��������ϵķ�����Ȼ��˵���׷�ʽ��ʱ��ȻҲ������õ�����֧��������Ҫ�� \r\n����Ʒ���ȿ�оͻ�˵���Դ��ͬʱ����Ʒ�ʼĳ�ȥ�����Ҫ����<br />\r\n����ʼĹ�˾�����ˣ��������ַ���ȷʵ���У�ֻ���ϵ����� Ӧ�ò���ܶ��~\r\n	</p>\r\n	<p>\r\n		<strong>5��</strong>����һ�־���ƭ��˵��ݹ�˾���յ�ҵ����Ҳ�ǲ����ŵģ�����Ŀ�ݹ�˾����û������ҵ��\r\n	</p>\r\n	<h3>\r\n		��ʵ�õķ�ƭ����\r\n	</h3>\r\n	<p>\r\n		<strong>1��</strong>���һ��Ҫ���潻�ף�������õĽ��׷�ʽ��ƭ����ʵ��֪�����������һ���ط��ģ�����ƭ��һ��������Ҫ���ɽ��ף������������������һ�£��������������ϵģ���ʵ�������� \r\n֪���㲻���ܸ������ɽ��ף�Ȼ�󻹻�������û����������ʲô�� ���Ǳߣ��мǣ����������ģ�ֱ�����ڰɡ�\r\n	</p>\r\n	<p>\r\n		<strong>2��</strong>����һ��Ҫ�õ�����֧��ƽ̨��������Ҷ��б��ϣ���֧�ֵ������Ļ��߲��ܼ��潻�׵ľ͸�����Ҫ��ᣬ������ \r\n�Ұɣ���϶���ƭ�ӡ�\r\n	</p>\r\n	<p>\r\n		<strong>3��</strong>�ڽ���ǰ����Ȱٶ�һ�¶Է���QQ��������ֻ����룬������һ�㶼����ƭ�ӵ���Ϣ�ġ�\r\n	</p>\r\n	<p>\r\n		<strong>4��</strong>��Ҫ�ͶԷ��ĵĿ��ľͳ��ֵ��ܶ��������Լ������棬�е�ƭ�Ӿͻ���������ս���������������������������� \r\n��������������һ��Ҫ��ס�������ڽ��ף��������ڽ����ѣ�ʱ��Ҫ���� ����ڵ�һλ����ȫ���ײ���Ӳ����\r\n	</p>\r\n	<p>\r\n		<strong>5��</strong>��Ҫ��Ϊ��Уѧ���Ͳ�����ƭ�ӣ����ںܶ�ƭ�Ӷ��Ǵ�ѧ���أ�����С�Ľ�����\r\n	</p>\r\n	<p>\r\n		<strong>5��</strong>�ʵݷ�ʽһ��Ҫ��������ʵݹ�˾������EMS��˳�ᡢ��ͨ�ȵȡ�\r\n	</p>\r\n	<p>\r\n		<strong>6��</strong>������������Ʒ��Ȼ�鷳�������ǳ����潻֮����ȫ�Ľ��׷�������ΪҪ�߷��ɳ�������һ������ʱ���ϵ� \r\n���󣬵�һ���мǣ������Ų��ᱻƭ��\r\n	</p>\r\n</div>'),
(31, 6, '��������ƭָ��', '<div>\r\n	�ʼ����ż�����<br />\r\n<br />\r\n1.����թƭˣ���� \r\n��֤�ֻ�͵����<br />\r\nͻȻ�յ�����ϵͳ������˵��֤�ֻ�����δ��֤��Ҫ��֤��Ҫ�ظ��˻�������û���Ҫע���ˣ������������Ϣ�ǲ��ᷢ���κ�Ҫ���û��ظ��˻�������Ķ��ŵġ�<br />\r\n<br />\r\n2.�ؼۻ�Ʊ����� \r\nת����Ǯ��ԭ��<br />\r\n���Ŵ��˴�Ļ�����������ؼۻ�Ʊ����Ȼ��Ϊ�������Ŵʻ㣬���ٻ�Ʊ����Ҳӭ���� \r\n�Լ��ġ����������������ӳ��Գ����ۿ����������߶�Ʊ��ƭȡǮ�ƣ�����ֱ����ȡ�û��������˻������롣��ҪΪ̰ͼһ��С���˵��¼� \r\n��ʧ��Ǯ�ƣ�Ҳ�򲻵��ؼҹ�������š�ͨ��֤����Ϊ�˴�ҿ��Կ�����ֵĹ�һ����������꣬���Ҷ��ע���ˡ�<br />\r\n<br />\r\n3.˭˵�˺����쳣 \r\nԭ��ƭ�������<br />\r\n��������ƭ�ӶԻ�����Խ��Խ��Ϥ����������ʽ������ð�仯���������Ϣ���ͻ����͵����ʼ�����һ \r\n�������ӣ����Ҳ�Ҫ����Ҫ������д�������˻��������Щ�ʼ��������������Ϣ�ǲ���Ҫ�������ʼ�����д��Щ��Ϣ�ģ���Щ����ƭ�ӵ��ʼ���ֻҪ \r\n����д��ȥ�ͻᱻ�Ǹ�������ʼ������޸���������ģ��˻������Ŀͻ�����Ҫע���ˡ�<br />\r\n<br />\r\n4.������䱻���� \r\n�н���թҪ���<br />\r\n�����������Ϣ������û������ʼ����û�ȥ�μ���ν �ġ��񻶡������Դ��Ҫע�������ʼ���Ŷ��\r\n</div>'),
(32, 2, '�绰��ð��', '<div>\r\n	���ṩ��ð�õģ���Ϣ��š�ð�ú��룩����ϵ��վ������Ա��\r\n</div>'),
(33, 2, '��Ҫɾ����Ϣ', '<p>\r\n	<span style="font-family:����;">1���ڶ���������޸�</span><span>/</span><span style="font-family:����;">ɾ����Ϣ����</span>\r\n</p>\r\n<p>\r\n	<span style="font-family:����;">2����¼</span><span style="font-family:����;">�û����ģ��ҷ�������Ϣ�ڣ�������ѡ���޸ġ�ɾ����ˢ�µȲ�����</span>\r\n</p>'),
(34, 2, '��ϢΪʲô����ʾ��', '<div>\r\n	1�������Ϣ�������дʻ㡢�����ַ��������Ƶ����ݣ�����Ҫ������Ա���ͨ������ܹ�����ʾ�����ʱ��Ϊ24Сʱ֮�ڣ���\r\n</div>\r\n<div>\r\n</div>\r\n<div>\r\n	2����Ϣ״̬�����ƣ�������Ϣ��Ҫ���޸����ƺ���ܹ���չʾ������Ҫ���޸�������Ϣ����ͨ����վ������Ա��˳ɹ��󣬲��ܹ���չʾ�����ʱ��Ϊ24Сʱ֮�ڣ���\r\n</div>\r\n<div>\r\n</div>\r\n<div>\r\n	3���޸Ĺ�����Ϣʱ�����µ����б��е�λ�ò���䡣�������Ϣ�ٴ��ŵ�������б�ҳ��Ŀ�ǰλ�ã������Ե����ˢ�¡���\r\n</div>');

DROP TABLE IF EXISTS `my_faq_type`;
CREATE TABLE IF NOT EXISTS `my_faq_type` (
  `id` tinyint(5) NOT NULL AUTO_INCREMENT,
  `typename` char(50) NOT NULL,
  PRIMARY KEY (`id`)
) TYPE=MyISAM;

INSERT INTO `my_faq_type` (`id`, `typename`) VALUES
(1, '�ö���ˢ��'),
(2, '��Ϣ������ɾ��'),
(4, '��֤����'),
(5, '�û�ע�����¼'),
(6, '��ƭ��ʶ');

DROP TABLE IF EXISTS `my_flink`;
CREATE TABLE IF NOT EXISTS `my_flink` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `ifindex` tinyint(1) NOT NULL DEFAULT '1',
  `catid` mediumint(6) NOT NULL DEFAULT '0',
  `url` varchar(200) NOT NULL,
  `webname` char(30) NOT NULL DEFAULT '',
  `weblogo` char(250) NOT NULL DEFAULT '',
  `dayip` char(20) NOT NULL,
  `pr` smallint(1) NOT NULL,
  `msg` char(200) NOT NULL DEFAULT '',
  `name` varchar(10) NOT NULL,
  `qq` varchar(11) NOT NULL,
  `email` char(50) NOT NULL DEFAULT '',
  `typeid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ischeck` smallint(1) NOT NULL DEFAULT '1',
  `ordernumber` int(8) NOT NULL,
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ordernumber` (`ordernumber`),
  KEY `ischeck` (`ischeck`),
  KEY `weblogo` (`weblogo`),
  KEY `ifindex` (`ifindex`),
  KEY `catid` (`catid`)
) TYPE=MyISAM;

INSERT INTO `my_flink` (`id`, `ifindex`, `catid`, `url`, `webname`, `weblogo`, `dayip`, `pr`, `msg`, `name`, `qq`, `email`, `typeid`, `ischeck`, `ordernumber`, `createtime`) VALUES
(1, 2, 0, 'http://www.mymps.com.cn', '���Ϸ�����Ϣϵͳ', '', '1000����', 0, '�������', '�峤', '3388888888', 'mymps@qq.com', 1, 2, 2, 1267535588);

DROP TABLE IF EXISTS `my_flink_type`;
CREATE TABLE IF NOT EXISTS `my_flink_type` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `typename` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) TYPE=MyISAM;

INSERT INTO `my_flink_type` (`id`, `typename`) VALUES
(1, '�Ż���վ'),
(2, '������Ϣ'),
(4, '��̳����'),
(8, '�������');

DROP TABLE IF EXISTS `my_focus`;
CREATE TABLE IF NOT EXISTS `my_focus` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `pre_image` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `words` varchar(50) NOT NULL,
  `pubdate` int(11) NOT NULL,
  `focusorder` smallint(5) unsigned NOT NULL,
  `typename` enum('��վ��ҳ','������ҳ') NOT NULL DEFAULT '��վ��ҳ',
  PRIMARY KEY (`id`),
  KEY `image` (`image`),
  KEY `url` (`url`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_goods`;
CREATE TABLE IF NOT EXISTS `my_goods` (
  `goodsid` int(10) NOT NULL AUTO_INCREMENT,
  `goodsbh` varchar(11) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `goodsname` varchar(100) NOT NULL,
  `catid` smallint(3) NOT NULL,
  `oldprice` varchar(8) NOT NULL,
  `nowprice` varchar(8) NOT NULL,
  `huoyuan` tinyint(1) NOT NULL,
  `gift` varchar(100) NOT NULL,
  `oicq` varchar(11) NOT NULL,
  `content` mediumtext NOT NULL,
  `picture` varchar(255) NOT NULL,
  `pre_picture` varchar(255) NOT NULL,
  `rushi` tinyint(1) NOT NULL,
  `tuihuan` tinyint(1) NOT NULL,
  `jiayi` tinyint(1) NOT NULL,
  `weixiu` tinyint(1) NOT NULL,
  `fahuo` tinyint(1) NOT NULL,
  `zhengpin` tinyint(1) NOT NULL,
  `tuijian` tinyint(1) NOT NULL,
  `cuxiao` tinyint(1) NOT NULL,
  `remai` tinyint(1) NOT NULL,
  `baozhang` tinyint(1) NOT NULL,
  `onsale` tinyint(1) NOT NULL DEFAULT '1',
  `hit` int(10) NOT NULL,
  `dateline` int(10) NOT NULL,
  PRIMARY KEY (`goodsid`),
  KEY `userid` (`userid`,`catid`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_goods_category`;
CREATE TABLE IF NOT EXISTS `my_goods_category` (
  `catid` mediumint(6) NOT NULL AUTO_INCREMENT,
  `if_view` tinyint(1) NOT NULL DEFAULT '1',
  `color` char(10) NOT NULL,
  `catname` varchar(32) NOT NULL,
  `title` varchar(250) NOT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `parentid` int(11) DEFAULT NULL,
  `catorder` smallint(6) NOT NULL,
  PRIMARY KEY (`catid`),
  KEY `parentid` (`parentid`),
  KEY `catname` (`catname`),
  KEY `catorder` (`catorder`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_goods_order`;
CREATE TABLE IF NOT EXISTS `my_goods_order` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `goodsid` int(10) NOT NULL,
  `ordernum` smallint(5) NOT NULL,
  `oname` varchar(100) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `qq` varchar(11) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `dateline` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `goodsid` (`goodsid`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_group`;
CREATE TABLE IF NOT EXISTS `my_group` (
  `groupid` int(10) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL,
  `gname` varchar(250) NOT NULL,
  `cate_id` smallint(3) NOT NULL,
  `areaid` smallint(5) NOT NULL,
  `dateline` int(10) NOT NULL,
  `displayorder` int(10) NOT NULL,
  `signintotal` smallint(5) NOT NULL DEFAULT '0',
  `glevel` tinyint(1) NOT NULL DEFAULT '0',
  `message` varchar(250) NOT NULL,
  `gaddress` varchar(250) NOT NULL,
  `meetdate` int(10) NOT NULL,
  `enddate` int(10) NOT NULL,
  `mastername` varchar(100) NOT NULL,
  `masterqq` int(11) NOT NULL,
  `des` varchar(250) NOT NULL,
  `content` mediumtext NOT NULL,
  `picture` varchar(255) NOT NULL,
  `pre_picture` varchar(255) NOT NULL,
  `commenturl` varchar(100) NOT NULL,
  `biztype` varchar(100) NOT NULL,
  `othercontent` mediumtext NOT NULL,
  `web_address` char(100) NOT NULL,
  PRIMARY KEY (`groupid`),
  KEY `areaid` (`areaid`),
  KEY `cate_id` (`cate_id`),
  KEY `userid` (`userid`),
  KEY `glevel` (`glevel`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_group_category`;
CREATE TABLE IF NOT EXISTS `my_group_category` (
  `cate_id` smallint(3) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(100) NOT NULL,
  `cate_view` tinyint(1) NOT NULL DEFAULT '1',
  `cate_order` smallint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cate_id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_group_signin`;
CREATE TABLE IF NOT EXISTS `my_group_signin` (
  `signid` int(10) NOT NULL AUTO_INCREMENT,
  `sname` varchar(100) NOT NULL,
  `sex` enum('��','Ů') NOT NULL,
  `age` varchar(50) NOT NULL,
  `groupid` int(10) NOT NULL,
  `qqmsn` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `dateline` int(10) NOT NULL,
  `totalnumber` smallint(5) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `signinip` varchar(20) NOT NULL,
  `message` varchar(250) NOT NULL,
  PRIMARY KEY (`signid`),
  KEY `groupid` (`groupid`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_information`;
CREATE TABLE IF NOT EXISTS `my_information` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `gid` smallint(5) NOT NULL,
  `catid` int(8) NOT NULL,
  `catname` varchar(32) NOT NULL,
  `areaid` int(8) NOT NULL,
  `begintime` int(11) NOT NULL,
  `activetime` smallint(3) NOT NULL,
  `endtime` int(11) NOT NULL,
  `content` mediumtext NOT NULL,
  `userid` varchar(30) NOT NULL,
  `contact_who` char(10) NOT NULL,
  `qq` char(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `updatetime` int(11) NOT NULL,
  `hit` int(10) NOT NULL DEFAULT '0',
  `ismember` tinyint(1) NOT NULL,
  `manage_pwd` char(32) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `ip2area` varchar(32) NOT NULL,
  `info_level` tinyint(1) NOT NULL,
  `img_path` varchar(200) NOT NULL,
  `img_count` smallint(3) NOT NULL DEFAULT '0',
  `upgrade_type` tinyint(1) NOT NULL DEFAULT '1',
  `upgrade_time` int(10) NOT NULL,
  `upgrade_type_list` tinyint(1) NOT NULL DEFAULT '1',
  `upgrade_time_list` int(10) NOT NULL,
  `ifred` tinyint(1) NOT NULL DEFAULT '0',
  `ifbold` tinyint(1) NOT NULL DEFAULT '0',
  `certify` tinyint(1) NOT NULL DEFAULT '0',
  `dir_typename` varchar(100) NOT NULL,
  `html_path` varchar(100) NOT NULL,
  `upgrade_type_index` tinyint(1) NOT NULL,
  `upgrade_time_index` int(10) NOT NULL,
  `mappoint` varchar(100) NOT NULL,
  `web_address` char(100) NOT NULL,
  `latitude` decimal(20,17) NOT NULL,
  `longitude` decimal(20,17) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `ifred` (`ifred`),
  KEY `ifbold` (`ifbold`),
  KEY `tel` (`tel`),
  KEY `begintime` (`begintime`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_info_img`;
CREATE TABLE IF NOT EXISTS `my_info_img` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `image_id` tinyint(1) NOT NULL,
  `path` varchar(250) NOT NULL,
  `prepath` varchar(250) NOT NULL,
  `infoid` int(11) NOT NULL,
  `uptime` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `infoid` (`infoid`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_info_report`;
CREATE TABLE IF NOT EXISTS `my_info_report` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `infoid` int(8) NOT NULL,
  `infotitle` char(50) NOT NULL,
  `report_type` smallint(3) NOT NULL,
  `content` varchar(255) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `pubtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_info_typemodels`;
CREATE TABLE IF NOT EXISTS `my_info_typemodels` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `displayorder` int(8) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `options` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_info_typeoptions`;
CREATE TABLE IF NOT EXISTS `my_info_typeoptions` (
  `optionid` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `displayorder` tinyint(3) NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `identifier` varchar(40) NOT NULL DEFAULT '',
  `type` varchar(20) NOT NULL DEFAULT '',
  `rules` mediumtext NOT NULL,
  `available` char(2) NOT NULL,
  `required` char(2) NOT NULL,
  `search` char(2) NOT NULL,
  PRIMARY KEY (`optionid`),
  KEY `classid` (`classid`),
  KEY `available` (`available`),
  KEY `search` (`search`),
  KEY `displayorder` (`displayorder`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_insidelink`;
CREATE TABLE IF NOT EXISTS `my_insidelink` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `word` char(16) NOT NULL,
  `url` char(60) NOT NULL,
  PRIMARY KEY (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_jswizard`;
CREATE TABLE IF NOT EXISTS `my_jswizard` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `flag` varchar(50) NOT NULL,
  `parameter` mediumtext NOT NULL,
  `edittime` int(10) NOT NULL,
  `customtype` char(8) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `flag` (`flag`)
) TYPE=MyISAM;

INSERT INTO `my_jswizard` (`id`, `flag`, `parameter`, `edittime`, `customtype`) VALUES
(5, '5umb', 'a:8:{s:10:"jstemplate";s:25:"<li>{title} - {link}</li>";s:5:"items";s:0:"";s:9:"maxlength";s:0:"";s:3:"ids";s:0:"";s:7:"keyword";s:0:"";s:9:"newwindow";s:1:"0";s:7:"orderby";s:8:"dateline";s:9:"jscharset";s:1:"0";}', 1441594018, 'info'),
(2, 'asdqwe', 'a:7:{s:10:"jstemplate";s:22:"<li>{title}{link}</li>";s:5:"catid";s:0:"";s:5:"items";s:0:"";s:9:"maxlength";s:0:"";s:9:"newwindow";s:1:"0";s:7:"orderby";s:8:"dateline";s:9:"jscharset";s:1:"0";}', 1441596141, 'news'),
(3, '329e', 'a:8:{s:10:"jstemplate";s:22:"<li>{tname}{link}</li>";s:5:"catid";s:0:"";s:7:"levelid";s:0:"";s:5:"items";s:0:"";s:9:"maxlength";s:0:"";s:9:"newwindow";s:1:"0";s:7:"orderby";s:8:"dateline";s:9:"jscharset";s:1:"0";}', 1441595310, 'store'),
(4, '4nmv', 'a:8:{s:10:"jstemplate";s:26:"<li>{goodsname}{link}</li>";s:5:"catid";s:0:"";s:5:"items";s:0:"";s:9:"maxlength";s:0:"";s:7:"special";a:1:{i:0;s:0:"";}s:9:"newwindow";s:1:"0";s:7:"orderby";s:8:"dateline";s:9:"jscharset";s:1:"0";}', 1441595242, 'goods');

DROP TABLE IF EXISTS `my_lifebox`;
CREATE TABLE IF NOT EXISTS `my_lifebox` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `typeid` tinyint(1) NOT NULL DEFAULT '2',
  `lifename` varchar(50) NOT NULL,
  `lifeurl` varchar(200) NOT NULL,
  `if_view` tinyint(1) NOT NULL,
  `displayorder` smallint(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `displayorder` (`displayorder`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_mail_sendlist`;
CREATE TABLE IF NOT EXISTS `my_mail_sendlist` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `template_id` varchar(50) NOT NULL,
  `email_content` mediumtext NOT NULL,
  `error` tinyint(1) NOT NULL DEFAULT '0',
  `email_subject` varchar(200) NOT NULL,
  `last_send` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_mail_template`;
CREATE TABLE IF NOT EXISTS `my_mail_template` (
  `template_id` tinyint(1) unsigned NOT NULL AUTO_INCREMENT,
  `is_sys` tinyint(1) NOT NULL DEFAULT '1',
  `template_code` varchar(30) NOT NULL DEFAULT '',
  `is_html` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `template_subject` varchar(200) NOT NULL DEFAULT '',
  `template_content` mediumtext NOT NULL,
  `last_modify` int(10) unsigned NOT NULL DEFAULT '0',
  `last_send` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`template_id`),
  UNIQUE KEY `template_code` (`template_code`)
) TYPE=MyISAM;

INSERT INTO `my_mail_template` (`template_id`, `is_sys`, `template_code`, `is_html`, `template_subject`, `template_content`, `last_modify`, `last_send`) VALUES
(1, 1, 'findpwd', 1, '�һ������ʼ�', '�װ����û� {$user_name} ���ã�\r\n\r\n���Ѿ��������������õĲ����������������ӣ����޷�����Ѵ����Ӹ���ճ����������򿪣�:\r\n\r\n{$reset_email}\r\n\r\n��ȷ���������������ò��������ʼ�Ϊϵͳ����������ظ��ʼ���\r\n\r\n{$site_name}\r\n{$send_date}', 1407235479, 0),
(2, 1, 'validate', 1, '���û��ʼ���֤', '{$user_name}���ã�\r\n\r\n����ʼ��� {$site_name} ���͵ġ����յ�����ʼ���Ϊ����֤��ע���ʼ���ַ�Ƿ���Ч��������Ѿ�ͨ����֤�ˣ����������ʼ���\r\n\r\n������������(���߸��Ƶ����������)����֤����ʼ���ַ:\r\n{$validate_email}\r\n\r\n{$site_name}\r\n{$send_date}', 1429947607, 0);

DROP TABLE IF EXISTS `my_member`;
CREATE TABLE IF NOT EXISTS `my_member` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `userid` varchar(20) NOT NULL,
  `openid` varchar(50) NOT NULL,
  `openid_wx` varchar(50) NOT NULL,
  `userpwd` char(36) NOT NULL,
  `catid` varchar(250) NOT NULL,
  `areaid` char(8) NOT NULL,
  `cname` varchar(40) NOT NULL,
  `tname` varchar(100) NOT NULL,
  `introduce` mediumtext NOT NULL,
  `sex` enum('��','Ů') NOT NULL DEFAULT '��',
  `tel` varchar(30) NOT NULL DEFAULT '',
  `address` varchar(50) NOT NULL DEFAULT '',
  `busway` mediumtext NOT NULL,
  `mappoint` varchar(100) NOT NULL,
  `qq` char(12) NOT NULL,
  `msn` char(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `template` char(250) NOT NULL,
  `keywords` varchar(250) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `prelogo` varchar(250) NOT NULL,
  `banner` varchar(250) NOT NULL,
  `safequestion` char(25) NOT NULL,
  `safeanswer` char(25) NOT NULL,
  `levelid` smallint(3) NOT NULL DEFAULT '1',
  `money_own` mediumint(8) NOT NULL DEFAULT '0',
  `credit` int(10) NOT NULL DEFAULT '0',
  `credits` smallint(2) NOT NULL DEFAULT '1',
  `score` int(10) NOT NULL DEFAULT '0',
  `joinip` char(16) NOT NULL,
  `loginip` char(16) NOT NULL,
  `jointime` int(10) unsigned NOT NULL,
  `logintime` int(10) unsigned NOT NULL,
  `web` char(50) NOT NULL,
  `per_certify` tinyint(1) NOT NULL DEFAULT '0',
  `com_certify` tinyint(1) NOT NULL DEFAULT '0',
  `if_corp` tinyint(1) NOT NULL DEFAULT '0',
  `ifindex` tinyint(1) NOT NULL DEFAULT '1',
  `iflist` tinyint(1) NOT NULL DEFAULT '1',
  `mobile` varchar(20) NOT NULL,
  `levelup_time` int(10) NOT NULL,
  `hit` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `qdtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `areaid` (`areaid`),
  KEY `catid` (`catid`),
  KEY `levelid` (`levelid`),
  KEY `jointime` (`jointime`),
  KEY `ifindex` (`ifindex`),
  KEY `iflist` (`iflist`),
  KEY `openid` (`openid`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_member_album`;
CREATE TABLE IF NOT EXISTS `my_member_album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `path` varchar(250) NOT NULL,
  `prepath` varchar(250) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `pubtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_member_category`;
CREATE TABLE IF NOT EXISTS `my_member_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(20) NOT NULL,
  `catid` mediumint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `catid` (`catid`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_member_comment`;
CREATE TABLE IF NOT EXISTS `my_member_comment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` varchar(20) NOT NULL,
  `fromuser` varchar(20) NOT NULL,
  `face` varchar(250) NOT NULL,
  `pubtime` int(10) unsigned NOT NULL DEFAULT '0',
  `quality` tinyint(1) NOT NULL,
  `service` tinyint(1) NOT NULL,
  `environment` tinyint(1) NOT NULL,
  `price` tinyint(1) NOT NULL,
  `avgprice` varchar(20) NOT NULL,
  `enjoy` tinyint(1) NOT NULL,
  `content` mediumtext,
  `reply` mediumtext NOT NULL,
  `retime` int(10) NOT NULL,
  `commentlevel` tinyint(1) NOT NULL DEFAULT '1',
  `flower` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `enjoy` (`enjoy`),
  KEY `fromuser` (`fromuser`),
  KEY `commentlevel` (`commentlevel`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_member_docu`;
CREATE TABLE IF NOT EXISTS `my_member_docu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typeid` int(11) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `title` varchar(250) NOT NULL,
  `author` varchar(50) NOT NULL,
  `source` varchar(50) NOT NULL,
  `content` mediumtext NOT NULL,
  `hit` int(10) NOT NULL DEFAULT '0',
  `imgpath` varchar(250) NOT NULL,
  `pre_imgpath` varchar(250) NOT NULL,
  `pubtime` int(10) NOT NULL,
  `if_check` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_member_docutype`;
CREATE TABLE IF NOT EXISTS `my_member_docutype` (
  `typeid` int(11) NOT NULL AUTO_INCREMENT,
  `typename` varchar(100) NOT NULL,
  `arrid` tinyint(1) NOT NULL DEFAULT '1',
  `ifview` tinyint(1) NOT NULL DEFAULT '1',
  `displayorder` int(5) NOT NULL,
  PRIMARY KEY (`typeid`)
) TYPE=MyISAM;

INSERT INTO `my_member_docutype` (`typeid`, `typename`, `arrid`, `ifview`, `displayorder`) VALUES
(1, '�̼���Ѷ', 1, 2, 1),
(2, '�Żݴ���', 2, 2, 2);

DROP TABLE IF EXISTS `my_member_level`;
CREATE TABLE IF NOT EXISTS `my_member_level` (
  `id` tinyint(5) NOT NULL AUTO_INCREMENT,
  `levelname` varchar(30) NOT NULL,
  `ifsystem` tinyint(1) NOT NULL,
  `purviews` varchar(250) NOT NULL,
  `money_own` mediumint(8) NOT NULL,
  `perday_maxpost` smallint(5) NOT NULL,
  `allow_tpl` mediumtext NOT NULL,
  `member_contact` tinyint(1) NOT NULL DEFAULT '1',
  `signin_notice` tinyint(1) NOT NULL DEFAULT '0',
  `signin_del` tinyint(1) NOT NULL DEFAULT '1',
  `signin_view` tinyint(1) NOT NULL DEFAULT '1',
  `moneysettings` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) TYPE=MyISAM;

INSERT INTO `my_member_level` (`id`, `levelname`, `ifsystem`, `purviews`, `money_own`, `perday_maxpost`, `allow_tpl`, `member_contact`, `signin_notice`, `signin_del`, `signin_view`, `moneysettings`) VALUES
(1, '������·', 1, 'purview_info,purview_pay,purview_avatar,purview_shoucang,purview_base,purview_certify,purview_pm,purview_levelup,purview_password,purview_shop,purview_comment,purview_album,purview_document,purview_banner', 5, 5, 'blue,orange,green,purple,pink', 1, 0, 0, 0, 'N;'),
(2, '��ͨ��Ա', 1, 'purview_info,purview_pay,purview_avatar,purview_shoucang,purview_base,purview_certify,purview_pm,purview_levelup,purview_password,purview_shop,purview_comment,purview_album,purview_document,purview_goods,purview_banner', 0, 100, 'blue,orange,green,purple,pink', 1, 0, 0, 0, 'a:2:{s:6:"ifopen";a:3:{s:5:"month";s:1:"1";s:8:"halfyear";s:1:"1";s:7:"forever";s:1:"1";}s:5:"money";a:4:{s:5:"month";s:5:"20000";s:8:"halfyear";s:6:"300000";s:4:"year";s:7:"1000000";s:7:"forever";s:7:"2000000";}}'),
(3, '�ƽ��Ա', 0, 'purview_info,purview_pay,purview_avatar,purview_shoucang,purview_base,purview_certify,purview_pm,purview_levelup,purview_password,purview_shop,purview_comment,purview_album,purview_document,purview_coupon,purview_group,purview_goods,purview_banner', 0, 100, 'blue,orange,green,purple,pink', 1, 0, 0, 0, 'a:2:{s:6:"ifopen";a:4:{s:5:"month";s:1:"1";s:8:"halfyear";s:1:"1";s:4:"year";s:1:"1";s:7:"forever";s:1:"1";}s:5:"money";a:4:{s:5:"month";s:1:"1";s:8:"halfyear";s:1:"2";s:4:"year";s:1:"3";s:7:"forever";s:1:"4";}}');

DROP TABLE IF EXISTS `my_member_pm`;
CREATE TABLE IF NOT EXISTS `my_member_pm` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `fromuser` varchar(50) NOT NULL,
  `touser` varchar(50) NOT NULL,
  `pubtime` int(10) unsigned NOT NULL DEFAULT '0',
  `retime` int(10) NOT NULL,
  `title` varchar(250) NOT NULL,
  `retitle` varchar(250) NOT NULL,
  `content` mediumtext,
  `recontent` mediumtext NOT NULL,
  `if_read` tinyint(1) NOT NULL DEFAULT '0',
  `if_sys` tinyint(1) NOT NULL,
  `if_del` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fromuser` (`fromuser`),
  KEY `touser` (`touser`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_member_record_login`;
CREATE TABLE IF NOT EXISTS `my_member_record_login` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` char(32) NOT NULL,
  `userpwd` char(30) NOT NULL,
  `pubdate` int(10) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `ip2area` varchar(32) NOT NULL,
  `browser` varchar(20) NOT NULL,
  `port` varchar(20) NOT NULL,
  `os` varchar(20) NOT NULL,
  `outdate` int(10) NOT NULL,
  `result` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_member_record_use`;
CREATE TABLE IF NOT EXISTS `my_member_record_use` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `userid` char(50) NOT NULL,
  `paycost` char(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `pubtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `pubtime` (`pubtime`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_member_tpl`;
CREATE TABLE IF NOT EXISTS `my_member_tpl` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `if_view` tinyint(1) NOT NULL DEFAULT '2',
  `tpl_name` varchar(250) NOT NULL,
  `tpl_path` varchar(250) NOT NULL,
  `displayorder` int(5) NOT NULL,
  `edittime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) TYPE=MyISAM;

INSERT INTO `my_member_tpl` (`id`, `if_view`, `tpl_name`, `tpl_path`, `displayorder`, `edittime`) VALUES
(1, 2, '��ɫ����', 'blue', 1, 1273410326),
(2, 2, '�Ⱥ�����', 'orange', 2, 1273410338),
(4, 2, '��ɫ����', 'green', 4, 1273410646),
(6, 2, '��ɫ����', 'purple', 6, 1466692165),
(7, 2, '��ɫ����', 'pink', 7, 1466692175);

DROP TABLE IF EXISTS `my_member_wx`;
CREATE TABLE IF NOT EXISTS `my_member_wx` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `actionkey` varchar(50) NOT NULL,
  `openid` varchar(50) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `userpwd` char(36) NOT NULL,
  PRIMARY KEY (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_mobile_gg`;
CREATE TABLE IF NOT EXISTS `my_mobile_gg` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `typeid` tinyint(1) NOT NULL,
  `image` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `words` varchar(50) NOT NULL,
  `pubdate` int(11) NOT NULL,
  `displayorder` smallint(5) NOT NULL,
  PRIMARY KEY (`id`)
) TYPE=MyISAM;

INSERT INTO `my_mobile_gg` (`id`, `typeid`, `image`, `url`, `words`, `pubdate`, `displayorder`) VALUES
(1, 1, '/attachment/mobile_gg/1469676806dzt6z.jpg', 'index.php', '��è����', 1469676806, 1),
(2, 2, '/attachment/mobile_gg/14696777801tuyl.jpg', 'index.php', '���³�', 1469677780, 2),
(3, 1, '/attachment/mobile_gg/1469677858x6r1c.png', 'index.php', '������Ʒ��ѻ�ȡ', 1469677858, 3),
(4, 2, '/attachment/mobile_gg/1469677887yuini.png', 'index.php', '7���˻�', 1469677887, 4);

DROP TABLE IF EXISTS `my_mobile_nav`;
CREATE TABLE IF NOT EXISTS `my_mobile_nav` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `title` char(50) NOT NULL,
  `url` char(250) NOT NULL,
  `color` varchar(7) NOT NULL,
  `ico` varchar(200) NOT NULL,
  `flag` varchar(50) NOT NULL,
  `target` varchar(10) NOT NULL,
  `isview` tinyint(1) NOT NULL,
  `displayorder` int(5) NOT NULL,
  `createtime` int(10) NOT NULL,
  `typeid` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `typeid` (`typeid`,`isview`)
) TYPE=MyISAM;

INSERT INTO `my_mobile_nav` (`id`, `title`, `url`, `color`, `ico`, `flag`, `target`, `isview`, `displayorder`, `createtime`, `typeid`) VALUES
(1, '��Ϣ����', 'index.php?mod=category', '', '', 'category', '_self', 2, 2, 1469520429, 1),
(2, '�ȵ���Ѷ', 'index.php?mod=news', '', '', 'news', '_self', 2, 3, 1469520458, 1),
(3, '�̼ҵ���', 'index.php?mod=corp', '', '', 'corp', '_self', 2, 4, 1469520485, 1),
(4, 'mymps��ҳ', 'index.php?mod=index', '', '', 'index', '_self', 2, 1, 1469521176, 1),
(49, '�������', 'index.php?mod=category&catid=189', '', '/template/default/images/index/icon_business.gif', '', '_self', 2, 11, 0, 2),
(48, '������ѵ', 'index.php?mod=category&catid=10', '', '/template/default/images/index/icon_edu.gif', '', '_self', 2, 10, 0, 2),
(47, '�������', 'index.php?mod=category&catid=9', '', '/template/default/images/index/icon_life.gif', '', '_self', 2, 9, 0, 2),
(46, '����', 'index.php?mod=category&catid=8', '', '/template/default/images/index/icon_pet.gif', '', '_self', 2, 8, 0, 2),
(45, '���ѻ', 'index.php?mod=category&catid=7', '', '/template/default/images/index/icon_love.gif', '', '_self', 2, 7, 0, 2),
(43, '��ְ��Ƹ', 'index.php?mod=category&catid=5', '', '/template/default/images/index/icon_jzzhaopin.gif', '', '_self', 2, 5, 0, 2),
(44, '��ְ����', 'index.php?mod=category&catid=6', '', '/template/default/images/index/icon_jianli.gif', '', '_self', 2, 6, 0, 2),
(42, 'ȫְ��Ƹ', 'index.php?mod=category&catid=4', '', '/template/default/images/index/icon_zhaopin.gif', '', '_self', 2, 4, 0, 2),
(41, '��������', 'index.php?mod=category&catid=3', '', '/template/default/images/index/icon_fang.gif', '', '_self', 2, 3, 0, 2),
(40, '��������', 'index.php?mod=category&catid=2', '', '/template/default/images/index/icon_che.gif', '', '_self', 2, 2, 0, 2),
(39, '����ת��', 'index.php?mod=category&catid=1', '', '/template/default/images/index/icon_ershou.gif', '', '_self', 2, 1, 0, 2),
(54, '��Ʒչʾ', 'index.php?mod=goods', '', '/template/default/images/index/icon_goods.gif', '', '_self', 2, 14, 1469545508, 2),
(53, '�ȵ���Ѷ', 'index.php?mod=news', '', '/template/default/images/index/icon_news.gif', '', '_self', 2, 13, 1469545240, 2),
(52, '�̼һ���', 'index.php?mod=corp', '', '/template/default/images/index/icon_corp.gif', '', '_self', 2, 12, 1469545077, 2),
(55, '��Ʒչʾ', 'index.php?mod=goods', '', '', 'goods', '_', 2, 5, 1470070591, 1);

DROP TABLE IF EXISTS `my_navurl`;
CREATE TABLE IF NOT EXISTS `my_navurl` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `url` char(250) NOT NULL,
  `color` varchar(7) NOT NULL,
  `flag` varchar(50) NOT NULL,
  `ico` varchar(20) NOT NULL,
  `target` varchar(10) NOT NULL,
  `title` char(250) NOT NULL,
  `typeid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `isview` smallint(1) NOT NULL DEFAULT '1',
  `displayorder` int(5) NOT NULL,
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `typeid` (`typeid`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_news`;
CREATE TABLE IF NOT EXISTS `my_news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `iscommend` tinyint(1) NOT NULL DEFAULT '0',
  `isfocus` varchar(10) NOT NULL,
  `isbold` tinyint(1) NOT NULL DEFAULT '0',
  `isjump` tinyint(1) NOT NULL DEFAULT '0',
  `redirect_url` varchar(250) NOT NULL,
  `title` varchar(30) NOT NULL,
  `keywords` varchar(250) NOT NULL,
  `catid` int(8) NOT NULL,
  `begintime` int(11) NOT NULL,
  `introduction` mediumtext NOT NULL,
  `content` mediumtext NOT NULL,
  `author` varchar(30) NOT NULL,
  `source` varchar(100) NOT NULL,
  `hit` int(10) NOT NULL DEFAULT '0',
  `perhit` int(10) NOT NULL DEFAULT '1',
  `imgpath` varchar(100) NOT NULL DEFAULT '0',
  `html_path` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `catid` (`catid`),
  KEY `imgpath` (`imgpath`),
  KEY `begintime` (`begintime`),
  KEY `hit` (`hit`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_payapi`;
CREATE TABLE IF NOT EXISTS `my_payapi` (
  `payid` smallint(6) NOT NULL AUTO_INCREMENT,
  `paytype` varchar(20) NOT NULL DEFAULT '',
  `buytype` tinyint(1) NOT NULL DEFAULT '1',
  `myorder` tinyint(4) NOT NULL DEFAULT '0',
  `payfee` varchar(10) NOT NULL DEFAULT '',
  `payuser` varchar(60) NOT NULL DEFAULT '',
  `partner` varchar(60) NOT NULL DEFAULT '',
  `paykey` varchar(120) NOT NULL DEFAULT '',
  `appid` varchar(60) NOT NULL,
  `appkey` varchar(60) NOT NULL,
  `paylogo` varchar(200) NOT NULL DEFAULT '',
  `paysay` mediumtext NOT NULL,
  `payname` varchar(120) NOT NULL DEFAULT '',
  `isclose` tinyint(1) NOT NULL DEFAULT '0',
  `payemail` varchar(120) NOT NULL DEFAULT '',
  PRIMARY KEY (`payid`),
  UNIQUE KEY `paytype` (`paytype`)
) TYPE=MyISAM;

INSERT INTO `my_payapi` (`payid`, `paytype`, `buytype`, `myorder`, `payfee`, `payuser`, `partner`, `paykey`, `appid`, `appkey`, `paylogo`, `paysay`, `payname`, `isclose`, `payemail`) VALUES
(1, 'tenpay', 0, 0, '0', '', '', '', '', '', '', '�Ƹ�ͨ��www.tenpay.com�� - ��Ѷ��������֧��ƽ̨��ͨ������Ȩ����ȫ��֤��֧�ָ�����������֧����', '�Ƹ�ͨ', 0, ''),
(2, 'chinabank', 1, 1, '0', '', '', '', '', '', '', '�����������й��������С��������С��й��������С�ũҵ���С��������е���ʮ�ҽ��ڻ������Э�顣ȫ��֧��ȫ��19�����е����ÿ�����ǿ�ʵ������֧��������ַ��http://www.chinabank.com.cn��', '��������', 0, ''),
(3, 'alipay', 1, 0, '', '', '', '', '', '', '', '֧������վ(www.alipay.com) �ǹ����Ƚ�������֧��ƽ̨��', '֧�����ӿ�', 0, ''),
(4, 'alipay_h5', 0, 0, '', '', '', '', '', '', '', '    ֧�����ֻ���վ֧��    ', '֧�����ֻ��ӿ�', 0, ''),
(5, 'wxpay', 0, 0, '', '', '', '', '', '', '', '    ΢�Ŷ��ֻ�֧��    ', '΢��֧��', 0, '');


DROP TABLE IF EXISTS `my_payrecord`;
CREATE TABLE IF NOT EXISTS `my_payrecord` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `userid` varchar(30) NOT NULL,
  `orderid` varchar(50) NOT NULL DEFAULT '',
  `money` varchar(20) NOT NULL DEFAULT '',
  `ifadd` tinyint(1) NOT NULL DEFAULT '0',
  `paybz` varchar(10) NOT NULL,
  `type` varchar(100) NOT NULL DEFAULT '',
  `payip` varchar(20) NOT NULL DEFAULT '',
  `posttime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`uid`,`orderid`),
  KEY `posttime` (`posttime`),
  KEY `orderid` (`orderid`),
  KEY `ifadd` (`ifadd`),
  KEY `ifadd_2` (`ifadd`),
  KEY `orderid_2` (`orderid`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_plugin`;
CREATE TABLE IF NOT EXISTS `my_plugin` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `flag` varchar(30) NOT NULL DEFAULT '',
  `iscore` tinyint(1) NOT NULL DEFAULT '0',
  `name` varchar(60) NOT NULL DEFAULT '',
  `directory` varchar(100) NOT NULL DEFAULT '',
  `disable` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `config` mediumtext NOT NULL,
  `version` varchar(60) NOT NULL DEFAULT '',
  `releasetime` int(10) NOT NULL,
  `author` varchar(255) NOT NULL DEFAULT '',
  `introduce` mediumtext NOT NULL,
  `siteurl` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `copyright` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) TYPE=MyISAM;

INSERT INTO `my_plugin` (`id`, `flag`, `iscore`, `name`, `directory`, `disable`, `config`, `version`, `releasetime`, `author`, `introduce`, `siteurl`, `email`, `copyright`) VALUES
(1, 'coupon', 0, '�Ż�ȯ', 'coupon', 1, 'a:4:{s:8:"seotitle";s:10:"�Ż�ȯ����";s:11:"seokeywords";s:12:"�Ż�ȯ�ؼ���";s:14:"seodescription";s:10:"�Ż�ȯ����";s:9:"adminmenu";s:60:"�Ż�ȯ����=coupon_category.php\r\n���ϴ��Ż�ȯ=coupon_list.php";}', '1.0', 1278232105, 'steven', '�����Ż�ȯ���', 'http://www.mymps.com.cn', 'business@live.it', 'Mymps Dev.'),
(13, 'group', 0, '�Ź�', 'group', 0, 'a:4:{s:8:"seotitle";s:12:"�Ź������";s:11:"seokeywords";s:14:"�Ź���ؼ���";s:14:"seodescription";s:12:"�Ź������";s:9:"adminmenu";s:81:"�Ź�����=group_category.php\r\n�ѷ����Ź�=group_list.php\r\n��������=group_signin.php";}', '1.0', 1278232105, 'steven', '�Ź�����', 'http://www.mymps.com.cn', 'business@live.it', 'MyDev.'),
(3, 'news', 0, '��Ѷ', '-', 0, 'a:4:{s:8:"seotitle";s:0:"";s:11:"seokeywords";s:8:"�ȵ���Ѷ";s:14:"seodescription";s:8:"�ȵ���Ѷ";s:9:"adminmenu";s:66:"���Ź���=news.php\r\n�������=channel.php\r\n��������=news_comment.php";}', '2.0', 1278232105, 'steven', '��վ���Ų��', 'http://www.mymps.com.cn', 'business@live.it', 'MyDev.'),
(4, 'goods', 0, '��Ʒ', 'goods', 0, 'a:7:{s:8:"seotitle";s:0:"";s:11:"seokeywords";s:8:"�����̳�";s:14:"seodescription";s:8:"�����̳�";s:9:"adminmenu";s:78:"��Ʒ����=goods_category.php\r\n��Ʒ����=goods_list.php\r\n��������=goods_order.php";s:5:"quhuo";s:555:"1.��ͨ����ͻ����� \r\n  ����ȫ��800������У��˷�5Ԫ/����\r\n2.�Ӽ�����ͻ����� \r\n  ֧�ֱ���������Ϻ������ݡ����ڡ��ȷ����޵��ط����������˷�10Ԫ/���� \r\n3.Բͨ��� \r\n  �����������˷�10Ԫ/�� \r\n4.��ͨ�ʵ� \r\n  ��½�������˷�5Ԫ/������������29Ԫ���˷� \r\n  �۰ĵ������˷�Ϊ��Ʒԭ���ܽ���30%�����20Ԫ \r\n  ����������˷�Ϊ��Ʒԭ���ܽ���50%�����50Ԫ \r\n5.�����ؿ�ר��(EMS) \r\n  �����������˷�Ϊ�����ܽ���20%�����16Ԫ \r\n  ��½�����������˷�Ϊ�����ܽ���40%�����20Ԫ \r\n  �۰�̨�������˷�Ϊ�����ܽ���50%�����45Ԫ \r\n6.���� \r\n  ֧���û��������ᣬ�����˷ѡ�";s:6:"fukuan";s:150:"���渶��\r\n���ڽ��ס��ͻ����š�ԤԼ���׾��ɵ��渶��\r\n\r\n����ת��\r\n��ͨ����ת�˷�ʽ�����ָ���˺���\r\n\r\n���ϻ��\r\n��ͨ����ת�˷�ʽ�����ָ���˺���";s:7:"service";s:1240:"�ۺ����ο����ģ�\r\n1�������������������ࡢ�ֻ���������ʼǱ���̨ʽ�����ҵ�����Ʒ��Ϊ�˱�֤���ܳ���������������ṩ���ۺ��޷��񣬲������Ƿ���Ҫ���߷�Ʊ�����Ƕ����浥Ϊ�����ߣ���Ʊ����Ĭ��Ϊ����������Ʒȫ�ƣ�ͬʱ��֧���޸ķ�Ʊ���ݡ������Ϊ�����ߵķ�Ʊ���ݺ�������Ʒ���Ʋ����������޷����ޣ���վ�Ų�����\r\n \r\n2���˻�ʱ�ṩ��Ʊԭ������1000Ԫ�ֽ�֧���Ķ��������˻��������ֽ�\r\n \r\n3�������ࡢ�ֻ���������ʼǱ���̨ʽ�����ҵ硢��ӡ����ɨ���ǡ�һ���������GPS����Ʒ�������Ʒ�����������⣬�������е����������ۺ�������Ľ��м�⣬�����ݼ�ⱨ�棨������Щ���������ۺ���������޷��ṩ��ⱨ��ģ����ṩά�޼��鵥�ݣ��������ⱨ��ȷ�������������⣬Ȼ�󽫼�ⱨ�桢������Ʒ��������װ������һ��������˾�����˻������������������ʧ�����ǽ��޷�Ϊ������\r\n \r\n4��������ʯ���ƽ��ֱ��鱦���μ������������Ʒ������������Ҽ�����ʯ�������ĳ��ߵļ���֤��ġ����������ⲻ�����˻������ͻ����յ���Ʒ֮�����Է�Ʊ����Ϊ׼��3�����ڣ���������������⣬�����е����ص������ල����-�鱦��ʯ�����������Ľ��м�⣬�����ⱨ��ȷ�������������⣬���뱾վ�ۺ������ϵ�����˻������ˡ��˻���ʱ��������ؽ���ⱨ�桢��Ʒ�����װ���ڴ�����������֤�顢˵�������ͬ��Ʒһ���˻ء����а�װ�����ȱʧ���۳�����Ʒ5%���ۼ۷ѣ����и��������ȱʧ�۳�����Ʒ10-15%���ۼ۷ѡ�";}', '1.0', 1309753960, 'steven', '��Ʒ���', 'http://www.mymps.com.cn', 'business@live.it', 'MyDev.');

DROP TABLE IF EXISTS `my_shoucang`;
CREATE TABLE IF NOT EXISTS `my_shoucang` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `infoid` int(10) NOT NULL,
  `title` varchar(30) NOT NULL,
  `url` varchar(100) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `intime` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_sms_sendlist`;
CREATE TABLE IF NOT EXISTS `my_sms_sendlist` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `mobile` varchar(20) NOT NULL,
  `status` varchar(100) NOT NULL,
  `sendtime` int(10) NOT NULL,
  `sms_service` char(30) NOT NULL,
  `sms_content` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_telephone`;
CREATE TABLE IF NOT EXISTS `my_telephone` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `telname` varchar(50) NOT NULL,
  `telnumber` varchar(50) NOT NULL,
  `color` char(10) NOT NULL,
  `if_bold` tinyint(1) NOT NULL DEFAULT '0',
  `displayorder` smallint(5) NOT NULL,
  `if_view` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `displayorder` (`displayorder`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_template`;
CREATE TABLE IF NOT EXISTS `my_template` (
  `filepath` varchar(250) NOT NULL,
  `content` longtext NOT NULL
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_upload`;
CREATE TABLE IF NOT EXISTS `my_upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `url` varchar(100) NOT NULL DEFAULT '',
  `width` varchar(10) NOT NULL DEFAULT '',
  `height` varchar(10) NOT NULL DEFAULT '',
  `playtime` varchar(10) NOT NULL DEFAULT '',
  `filesize` int(11) NOT NULL DEFAULT '0',
  `newsid` int(11) NOT NULL DEFAULT '0',
  `uptime` int(11) NOT NULL DEFAULT '0',
  `adminid` int(11) NOT NULL DEFAULT '0',
  `memberid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `memberid` (`memberid`,`filesize`,`newsid`)
) TYPE=MyISAM;