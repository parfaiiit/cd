<?php
if (!defined('IN_MYMPS')){
    die('FORBIDDEN');
}
//check ifreadable ifwriteable of the file
//�����дȨ�޵��ļ�
//һ������£��뱣����Ĭ�ϣ����޸�
$sp_testdirs = array(
	'/attachment',
	'/rewrite',
	'/backup',
	'/data/pagesinfo',
	'/data/pageslist',
	'/data/pagesmymps',
	'/data/cron.cache.php',
	'/data/config.php',
	'/data/config.db.php',
	'/data/cron.cache.php',
	'/data/sessions'
);
?>