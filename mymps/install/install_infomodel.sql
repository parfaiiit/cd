INSERT INTO `my_info_typemodels` (`id`, `name`, `displayorder`, `type`, `options`) VALUES
(1, '��ģ��', 0, 1, ''),
(2, '������Ʒ����ģ��', 2, 0, '39,9,58'),
(6, '����ת��ģ��', 6, 0, '54,58,9,39'),
(7, 'ȫְ��Ƹģ��', 7, 0, '43,40,44,42,47,49,61,62'),
(8, '��ְ��Ƹģ��', 8, 0, '41,42'),
(9, '����ģ��', 9, 0, '45,46,47,48,49'),
(10, '������ѵģ��', 10, 0, '50'),
(11, '�綯������ģ��', 11, 0, '11,9,58,39'),
(12, '���ֽγ�ģ��', 12, 0, '14,16,17,13,58,39'),
(13, '���г�����ģ��', 13, 0, '22,9,39,58'),
(14, 'ƴ��˳�糵ģ��', 14, 0, '20,9,21'),
(15, '������ͳ�ģ��', 15, 0, '17,16,13,58,39'),
(16, '�����Ʒ����ģ��', 16, 0, '13,58,39'),
(18, '���ܽ���ģ��', 18, 0, '51'),
(19, '���齻��ģ��', 19, 0, '45,46,52'),
(20, '����ģ��', 20, 0, '25,26,9,39'),
(21, 'èè�ȳ���ģ��', 21, 0, '27,9'),
(22, '���ַ�ģ��', 22, 0, '33,34,35,36,13,30'),
(23, '���ⷿģ��', 23, 0, '33,37,35,38,64'),
(24, '����/д��¥����ģ��', 24, 0, '33,30,29'),
(25, '����/д��¥����ģ��', 25, 0, '30,13'),
(26, '����ת�ó���ģ��', 26, 0, '31,30,32'),
(27, 'Ħ�г�ģ��', 0, 0, '60,9,39'),
(28, '�ֻ�ת��ģ��', 0, 0, '65,9,58,39');

INSERT INTO `my_info_typeoptions` (`optionid`, `classid`, `displayorder`, `title`, `description`, `identifier`, `type`, `rules`, `available`, `required`, `search`) VALUES
(1, 0, 0, 'ͨ����', '', '', '', '', '0', '0', '0'),
(2, 0, 0, '������', '', '', '', '', '0', '0', '0'),
(3, 0, 0, '������', '', '', '', '', '0', '0', '0'),
(4, 0, 0, '��ְ��Ƹ��', '', '', '', '', '0', '0', '0'),
(5, 0, 0, '������', '', '', '', '', '0', '0', '0'),
(6, 0, 0, '������ѵ��', '', '', '', '', '0', '0', '0'),
(7, 0, 0, '������', '', '', '', '', '0', '0', '0'),
(8, 0, 0, '������', '', '', '', '', '0', '0', '0'),
(9, 5, 1, '�۸�', 'С��۸�', 'price', 'number', 'a:2:{s:5:"units";s:2:"Ԫ";s:7:"choices";s:98:"1~1000=1000����\r\n1000~3000=1000~3000\r\n3000~5000=3000~5000\r\n5000~10000=5000~10000\r\n10000~=10000����";}', 'on', 'on', 'on'),
(11, 8, 3, '�綯��Ʒ��', '�綯��Ʒ��', 'ebike_brand', 'select', 'a:1:{s:7:"choices";s:46:"1=����\r\n2=����\r\n3=��Դ\r\n4=����\r\n5=�ŵ�\r\n6=����";}', 'on', 'on', 'on'),
(13, 5, 0, '�۸�', '��Ԫ����ļ۸�', 'prices', 'number', 'a:2:{s:5:"units";s:4:"��Ԫ";s:7:"choices";s:99:"1~5=5������\r\n5~10=5��~10��\r\n10~50=10��~50��\r\n50~100=50��~100��\r\n100~300=100��~300��\r\n300~=300������";}', 'on', 'on', 'on'),
(14, 8, 5, '�γ�Ʒ��', '�γ�Ʒ��', 'car_brand', 'select', 'a:1:{s:7:"choices";s:148:"1=����\r\n2=����\r\n3=����\r\n4=���\r\n5=�µ�\r\n6=����\r\n7=����\r\n8=���ǵ�\r\n9=�ִ�\r\n10=ѩ����\r\n11=����\r\n12=����\r\n13=�ղ�\r\n14=���Դ�\r\n15=��\r\n16=·��\r\n17=����";}', 'on', 'on', 'on'),
(16, 8, 7, '�������', '�������', 'car_year', 'select', 'a:1:{s:7:"choices";s:62:"1=2012����ǰ\r\n2=2012��\r\n3=2013��\r\n4=2014��\r\n5=2015��\r\n6=2016��";}', 'on', 'on', ''),
(17, 8, 8, '��ʻ���', '��ʻ���', 'mileage', 'number', 'a:2:{s:5:"units";s:6:"����";s:7:"choices";s:61:"0~1=1��������\r\n1~3=1~3����\r\n3~5=3~5����\r\n5~=5��������";}', 'on', 'on', ''),
(18, 8, 9, '���������', '���������', 'minibus_type', 'select', 'a:1:{s:7:"choices";s:28:"1=��ͳ�\r\n2=�аͳ�\r\n3=�����";}', 'on', 'on', 'on'),
(19, 8, 10, 'Ħ�г�Ʒ��', 'Ħ�г�Ʒ��', 'moto_brand', 'select', 'a:1:{s:7:"choices";s:74:"1=�����\r\n2=����\r\n3=����\r\n4=��ľ\r\n5=����\r\n6=����\r\n7=����\r\n8=�´���\r\n9=����";}', 'on', 'on', 'on'),
(20, 8, 11, 'ƴ������', 'ƴ������', 'carpool_type', 'select', 'a:1:{s:7:"choices";s:52:"1=��;��ƴ��\r\n2=���°�ƴ��\r\n3=����ѧƴ��\r\n4=����ƴ��";}', 'on', 'on', 'on'),
(21, 8, 12, 'Ŀ�ĵ�', 'Ŀ�ĵ�', 'destination', 'text', 'a:1:{s:9:"maxlength";s:0:"";}', 'on', 'on', ''),
(22, 8, 13, '���г�Ʒ��', '���г�Ʒ��', 'bike_brand', 'select', 'a:1:{s:7:"choices";s:32:"1=����\r\n2=���\r\n3=�ݰ���\r\n4=����";}', 'on', 'on', 'on'),
(24, 7, 24, '��������', '��������', 'pet_type', 'select', 'a:1:{s:7:"choices";s:36:"1=��\r\n2=è\r\n3=��\r\n4=��\r\n5=��\r\n6=����";}', 'on', 'on', 'on'),
(25, 7, 25, '����Ʒ��', '����Ʒ��', 'dog_breeds', 'select', 'a:1:{s:7:"choices";s:80:"1=̩��\r\n2=��ĦҮ\r\n3=��ë\r\n4=����\r\n5=ѩ��Ȯ\r\n6=��ʿ��\r\n7=��������\r\n8=���\r\n9=����";}', 'on', 'on', 'on'),
(26, 7, 0, '��ĸ', '���﹫ĸ', 'animal_sex', 'radio', 'a:1:{s:7:"choices";s:10:"1=��\r\n2=ĸ";}', 'on', 'on', 'on'),
(27, 7, 26, '�������', 'èè�������������', 'pet_class', 'select', 'a:1:{s:7:"choices";s:30:"1=èè\r\n2=ˮ��\r\n3=����\r\n4=����";}', 'on', 'on', 'on'),
(28, 2, 30, '������������', '����/�ֿ�/������������', 'factory_type', 'select', 'a:1:{s:7:"choices";s:94:"1=��������\r\n2=��������\r\n3=�ֿ����\r\n4=�ֿ����\r\n5=���س���\r\n6=���س���\r\n7=��������\r\n8=��������";}', 'on', 'on', 'on'),
(29, 2, 31, '���', '����/д��¥����۸�', 'min_rent', 'number', 'a:2:{s:5:"units";s:10:"Ԫ/ƽ��/��";s:7:"choices";s:56:"1~2=1~2Ԫ/ƽ��/��\r\n2~4=2~4Ԫ/ƽ��/��\r\n4~=4Ԫ����/ƽ��/��";}', 'on', 'on', 'on'),
(30, 2, 32, '���', '�������', 'acreage', 'number', 'a:2:{s:5:"units";s:4:"ƽ��";s:7:"choices";s:107:"1~30=30ƽ������\r\n30~50=30~50ƽ��\r\n50~90=50~90ƽ��\r\n90~150=90~150ƽ��\r\n150~300=100~300ƽ��\r\n300~=300ƽ������";}', 'on', 'on', 'on'),
(31, 2, 0, '���̷���', '���̷���', 'store_type', 'select', 'a:1:{s:7:"choices";s:115:"1=������ʳ\r\n2=����Ь��\r\n3=�Ƶ����\r\n4=��������\r\n5=����ת��\r\n6=��������\r\n7=�Ҿӽ���\r\n8=��������\r\n9=����ͨѶ\r\n10=����";}', 'on', 'on', 'on'),
(32, 2, 33, '���', '����/�������', 'rent', 'number', 'a:1:{s:5:"units";s:2:"Ԫ";}', 'on', 'on', ''),
(33, 2, 34, '���', '����/�н�', 'position', 'radio', 'a:1:{s:7:"choices";s:16:"1=����\r\n2=������";}', 'on', 'on', 'on'),
(34, 2, 35, 'װ��', 'װ�����', 'renovation', 'select', 'a:1:{s:7:"choices";s:42:"1=ë����\r\n2=��װ��\r\n3=�е�װ��\r\n4=��װ��";}', 'on', 'on', ''),
(35, 2, 36, '����', '����', 'room_type', 'select', 'a:1:{s:7:"choices";s:71:"1=4�Ҽ�����\r\n2=3��2��\r\n3=3��1��\r\n4=2��2��\r\n5=2��1��\r\n6=1��1��\r\n7=1��0��";}', 'on', 'on', 'on'),
(36, 2, 37, '¥��', '', 'floor', 'number', 'a:1:{s:5:"units";s:2:"¥";}', 'on', 'on', ''),
(37, 2, 38, '������ʽ', '������ʽ', 'rent_type', 'select', 'a:1:{s:7:"choices";s:22:"1=����\r\n2=����\r\n3=��λ";}', 'on', 'on', 'on'),
(38, 2, 39, '���', '', 'mini_rent', 'number', 'a:2:{s:5:"units";s:2:"Ԫ";s:7:"choices";s:98:"1~1000=1000����\r\n1000~3000=1000~3000\r\n3000~5000=3000~5000\r\n5000~10000=5000~10000\r\n10000~=10000����";}', 'on', 'on', 'on'),
(39, 1, 0, '��Դ', '���������', 'from', 'radio', 'a:1:{s:7:"choices";s:14:"1=����\r\n2=�̼�";}', 'on', 'on', 'on'),
(40, 4, 39, '��н', '��н', 'salary', 'select', 'a:1:{s:7:"choices";s:112:"1=����\r\n2=1000����\r\n3=1000~2000\r\n3=2000~3000\r\n4=3000~6000\r\n5=6000~8000\r\n6=8000~12000\r\n7=12000~30000\r\n8=30000����";}', 'on', 'on', 'on'),
(41, 4, 41, '��н', '��н', 'day_salary', 'number', 'a:2:{s:5:"units";s:5:"Ԫ/��";s:7:"choices";s:117:"1~20=20Ԫ����/��\r\n20~50=20~50Ԫ/��\r\n50~100=50~100Ԫ/��\r\n100~300=100~300Ԫ/��\r\n300~500=300~500Ԫ/��\r\n500~=500Ԫ����/��";}', 'on', 'on', 'on'),
(42, 4, 42, '��˾����', '��˾����', 'company', 'text', 'a:1:{s:9:"maxlength";s:0:"";}', 'on', 'on', ''),
(43, 4, 43, '�Ա�Ҫ��', '�Ա�Ҫ��', 'sex_demand', 'checkbox', 'a:1:{s:7:"choices";s:10:"1=��\r\n2=Ů";}', 'on', 'on', ''),
(44, 4, 44, 'ְλ', 'ְλ', 'job', 'text', 'a:1:{s:9:"maxlength";s:0:"";}', 'on', '', ''),
(45, 4, 45, '�Ա�', '�Ա�', 'sex', 'radio', 'a:1:{s:7:"choices";s:10:"1=��\r\n2=Ů";}', 'on', '', 'on'),
(46, 4, 46, '����', '����', 'age', 'number', 'a:2:{s:5:"units";s:2:"��";s:7:"choices";s:0:"";}', 'on', 'on', ''),
(47, 4, 47, 'ѧ��', 'ѧ��', 'education', 'select', 'a:1:{s:7:"choices";s:68:"1=���м�����\r\n2=����/��ר/��У\r\n3=��ר\r\n4=����\r\n5=˶ʿ\r\n6=��ʿ������";}', 'on', 'on', 'on'),
(48, 4, 48, '�Ƿ�Ӧ��', '�Ƿ�Ӧ��', 'graduate', 'radio', 'a:1:{s:7:"choices";s:16:"1=Ӧ��\r\n2=��Ӧ��";}', 'on', '', 'on'),
(49, 4, 49, '��������', '��������', 'work_life', 'number', 'a:2:{s:5:"units";s:2:"��";s:7:"choices";s:60:"1~1=1������\r\n1~2=1~2��\r\n3~5=3~5��\r\n6~10=6~10��\r\n10~=10������";}', 'on', 'on', ''),
(50, 6, 50, 'ѧ��', '�γ�ѧ��', 'tuition', 'number', 'a:2:{s:5:"units";s:2:"Ԫ";s:7:"choices";s:98:"1~1000=1000����\r\n1000~3000=1000~3000\r\n3000~5000=3000~5000\r\n5000~10000=5000~10000\r\n10000~=10000����";}', 'on', '', 'on'),
(51, 3, 51, '�һ�', '�ҵļ���', 'ican', 'checkbox', 'a:1:{s:7:"choices";s:125:"1=ħ��\r\n2=�������\r\n3=����ά��\r\n4=����\r\n5=����\r\n6=���/����\r\n7=����\r\n8=����\r\n9=����/Χ��\r\n10=��ҽ\r\n11=ƽ�����\r\n12=��װ���";}', 'on', '', ''),
(52, 3, 52, 'ְҵ', '', 'jobs', 'text', 'a:1:{s:9:"maxlength";s:0:"";}', 'on', '', ''),
(54, 5, 54, '����Ʒ��', '����Ʒ��', 'pc_brand', 'select', 'a:1:{s:7:"choices";s:109:"1=����\r\n2=��˶\r\n3=����\r\n4=����\r\n5=IBM\r\n6=ƻ��\r\n7=����\r\n8=��֥\r\n9=����\r\n10=����\r\n11=�廪ͬ��\r\n12=����\r\n13=����";}', 'on', 'on', 'on'),
(55, 5, 55, '��������', '��������', 'appliances', 'select', 'a:1:{s:7:"choices";s:100:"1=�յ�\r\n2=��������\r\n3=�Ӽҵ���\r\n4=Ӱ������\r\n5=����/���\r\n6=���ӻ�\r\n7=��ԡ/�������\r\n8=ϴ�»�\r\n9=����";}', 'on', 'on', 'on'),
(58, 5, 58, '�¾ɳ̶�', '�¾ɳ̶�', 'new_old', 'select', 'a:1:{s:7:"choices";s:33:"1=ȫ��\r\n2=9����\r\n3=7����\r\n4=5����";}', 'on', 'on', ''),
(60, 8, 0, 'Ħ�г�Ʒ��', '', 'motobrand', 'select', 'a:1:{s:7:"choices";s:74:"1=�����\r\n2=����\r\n3=����\r\n4=��ľ\r\n5=����\r\n6=����\r\n7=����\r\n8=�´���\r\n9=����";}', 'on', 'on', 'on'),
(61, 4, 0, '����', '', 'fuli', 'checkbox', 'a:1:{s:7:"choices";s:99:"1=����һ��\r\n2=��ס\r\n3=����\r\n4=���˫н\r\n5=��ĩ˫��\r\n6=��ͨ����\r\n7=�Ӱಹ��\r\n8=�Ͳ�\r\n9=����\r\n10=����";}', 'on', 'on', 'on'),
(62, 4, 0, '��˾����', '', 'property', 'radio', 'a:1:{s:7:"choices";s:95:"1=˽Ӫ\r\n2=����\r\n3=�ɷ���\r\n4=���̶��ʰ��´�\r\n5=�������/����\r\n6=���й�˾\r\n7=��ҵ��λ\r\n8=��������";}', 'on', 'on', ''),
(64, 2, 0, '��������', '', 'house_pro', 'checkbox', 'a:1:{s:7:"choices";s:81:"1=��\r\n2=�¹�\r\n3=ɳ��\r\n4=����\r\n5=����\r\n6=ϴ�»�\r\n7=�յ�\r\n8=��ˮ��\r\n9=���\r\n10=ů��";}', 'on', 'on', ''),
(65, 5, 0, '�ֻ�Ʒ��', '', 'mbrand', 'radio', 'a:1:{s:7:"choices";s:125:"1=iphone\r\n2=����\r\n3=С��\r\n4=����\r\n5=��Ϊ\r\n6=����\r\n7=����\r\n8=ŵ����\r\n9=HTC\r\n10=ɽկ/�߷»�\r\n11=MOTO\r\n12=����\r\n13=����\r\n14=����";}', 'on', 'on', 'on');

DROP TABLE IF EXISTS `my_information_2`;
CREATE TABLE IF NOT EXISTS `my_information_2` (
  `iid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `from` tinyint(1) NOT NULL DEFAULT '0',
  `price` mediumint(7) NOT NULL DEFAULT '0',
  `new_old` tinyint(1) NOT NULL DEFAULT '0',
  `content` mediumtext,
  PRIMARY KEY (`iid`),
  KEY `id` (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_information_5`;
CREATE TABLE IF NOT EXISTS `my_information_5` (
  `iid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `operator` tinyint(1) NOT NULL DEFAULT '0',
  `price` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext,
  PRIMARY KEY (`iid`),
  KEY `id` (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_information_6`;
CREATE TABLE IF NOT EXISTS `my_information_6` (
  `iid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `pc_brand` tinyint(1) NOT NULL DEFAULT '0',
  `new_old` tinyint(1) NOT NULL DEFAULT '0',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `content` mediumtext,
  `from` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`iid`),
  KEY `id` (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_information_7`;
CREATE TABLE IF NOT EXISTS `my_information_7` (
  `iid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `sex_demand` varchar(100) NOT NULL DEFAULT '0',
  `salary` tinyint(1) NOT NULL DEFAULT '0',
  `job` varchar(250) NOT NULL,
  `company` varchar(250) NOT NULL,
  `content` mediumtext,
  `education` tinyint(1) NOT NULL DEFAULT '0',
  `work_life` mediumint(7) NOT NULL DEFAULT '0',
  `fuli` varchar(100) NOT NULL DEFAULT '0',
  `property` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`iid`),
  KEY `id` (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_information_8`;
CREATE TABLE IF NOT EXISTS `my_information_8` (
  `iid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `day_salary` mediumint(7) NOT NULL DEFAULT '0',
  `company` varchar(250) NOT NULL,
  `content` mediumtext,
  PRIMARY KEY (`iid`),
  KEY `id` (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_information_9`;
CREATE TABLE IF NOT EXISTS `my_information_9` (
  `iid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `sex` tinyint(1) NOT NULL DEFAULT '0',
  `age` decimal(10,2) NOT NULL DEFAULT '0.00',
  `education` tinyint(1) NOT NULL DEFAULT '0',
  `graduate` tinyint(1) NOT NULL DEFAULT '0',
  `work_life` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext,
  PRIMARY KEY (`iid`),
  KEY `id` (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_information_10`;
CREATE TABLE IF NOT EXISTS `my_information_10` (
  `iid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `tuition` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext,
  PRIMARY KEY (`iid`),
  KEY `id` (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_information_11`;
CREATE TABLE IF NOT EXISTS `my_information_11` (
  `iid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `ebike_class` tinyint(1) NOT NULL DEFAULT '0',
  `ebike_brand` tinyint(1) NOT NULL DEFAULT '0',
  `price` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext,
  `new_old` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`iid`),
  KEY `id` (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_information_12`;
CREATE TABLE IF NOT EXISTS `my_information_12` (
  `iid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `car_brand` tinyint(1) NOT NULL DEFAULT '0',
  `car_year` tinyint(1) NOT NULL DEFAULT '0',
  `mileage` decimal(10,2) NOT NULL DEFAULT '0.00',
  `prices` decimal(10,2) NOT NULL DEFAULT '0.00',
  `content` mediumtext,
  `new_old` tinyint(1) NOT NULL DEFAULT '0',
  `from` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`iid`),
  KEY `id` (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_information_13`;
CREATE TABLE IF NOT EXISTS `my_information_13` (
  `iid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `bike_type` tinyint(1) NOT NULL DEFAULT '0',
  `bike_brand` tinyint(1) NOT NULL DEFAULT '0',
  `price` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext,
  `new_old` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`iid`),
  KEY `id` (`id`)
) TYPE=MyISAM;


DROP TABLE IF EXISTS `my_information_14`;
CREATE TABLE IF NOT EXISTS `my_information_14` (
  `iid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `carpool_type` tinyint(1) NOT NULL DEFAULT '0',
  `price` mediumint(7) NOT NULL DEFAULT '0',
  `destination` varchar(250) NOT NULL,
  `content` mediumtext,
  PRIMARY KEY (`iid`),
  KEY `id` (`id`)
) TYPE=MyISAM;


DROP TABLE IF EXISTS `my_information_15`;
CREATE TABLE IF NOT EXISTS `my_information_15` (
  `iid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `mileage` decimal(10,2) NOT NULL DEFAULT '0.00',
  `car_year` tinyint(1) NOT NULL DEFAULT '0',
  `content` mediumtext,
  `prices` decimal(10,2) NOT NULL DEFAULT '0.00',
  `new_old` tinyint(1) NOT NULL DEFAULT '0',
  `from` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`iid`),
  KEY `id` (`id`)
) TYPE=MyISAM;


DROP TABLE IF EXISTS `my_information_16`;
CREATE TABLE IF NOT EXISTS `my_information_16` (
  `iid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `content` mediumtext,
  `new_old` tinyint(1) NOT NULL DEFAULT '0',
  `prices` decimal(10,2) NOT NULL DEFAULT '0.00',
  `from` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`iid`),
  KEY `id` (`id`)
) TYPE=MyISAM;


DROP TABLE IF EXISTS `my_information_17`;
CREATE TABLE IF NOT EXISTS `my_information_17` (
  `iid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `truke_type` tinyint(1) NOT NULL DEFAULT '0',
  `prices` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext,
  PRIMARY KEY (`iid`),
  KEY `id` (`id`)
) TYPE=MyISAM;


DROP TABLE IF EXISTS `my_information_18`;
CREATE TABLE IF NOT EXISTS `my_information_18` (
  `iid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `ican` tinyint(1) NOT NULL DEFAULT '0',
  `content` mediumtext,
  PRIMARY KEY (`iid`),
  KEY `id` (`id`)
) TYPE=MyISAM;


DROP TABLE IF EXISTS `my_information_19`;
CREATE TABLE IF NOT EXISTS `my_information_19` (
  `iid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `sex` tinyint(1) NOT NULL DEFAULT '0',
  `age` decimal(10,2) NOT NULL DEFAULT '0.00',
  `jobs` varchar(250) NOT NULL,
  `content` mediumtext,
  PRIMARY KEY (`iid`),
  KEY `id` (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_information_20`;
CREATE TABLE IF NOT EXISTS `my_information_20` (
  `iid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `dog_breeds` tinyint(1) NOT NULL DEFAULT '0',
  `animal_sex` tinyint(1) NOT NULL DEFAULT '0',
  `price` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext,
  `from` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`iid`),
  KEY `id` (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_information_21`;
CREATE TABLE IF NOT EXISTS `my_information_21` (
  `iid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `pet_class` tinyint(1) NOT NULL DEFAULT '0',
  `price` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext,
  PRIMARY KEY (`iid`),
  KEY `id` (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_information_22`;
CREATE TABLE IF NOT EXISTS `my_information_22` (
  `iid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `position` tinyint(1) NOT NULL DEFAULT '0',
  `renovation` tinyint(1) NOT NULL DEFAULT '0',
  `room_type` tinyint(1) NOT NULL DEFAULT '0',
  `floor` mediumint(7) NOT NULL DEFAULT '0',
  `prices` decimal(10,2) NOT NULL DEFAULT '0.00',
  `acreage` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext,
  PRIMARY KEY (`iid`),
  KEY `id` (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_information_23`;
CREATE TABLE IF NOT EXISTS `my_information_23` (
  `iid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `position` tinyint(1) NOT NULL DEFAULT '0',
  `rent_type` tinyint(1) NOT NULL DEFAULT '0',
  `room_type` tinyint(1) NOT NULL DEFAULT '0',
  `mini_rent` decimal(10,2) NOT NULL DEFAULT '0.00',
  `content` mediumtext,
  `house_pro` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`iid`),
  KEY `id` (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_information_24`;
CREATE TABLE IF NOT EXISTS `my_information_24` (
  `iid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `position` tinyint(1) NOT NULL DEFAULT '0',
  `acreage` mediumint(7) NOT NULL DEFAULT '0',
  `min_rent` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext,
  PRIMARY KEY (`iid`),
  KEY `id` (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_information_25`;
CREATE TABLE IF NOT EXISTS `my_information_25` (
  `iid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `acreage` mediumint(7) NOT NULL DEFAULT '0',
  `prices` decimal(10,2) NOT NULL DEFAULT '0.00',
  `content` mediumtext,
  PRIMARY KEY (`iid`),
  KEY `id` (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_information_26`;
CREATE TABLE IF NOT EXISTS `my_information_26` (
  `iid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `store_type` tinyint(1) NOT NULL DEFAULT '0',
  `acreage` mediumint(7) NOT NULL DEFAULT '0',
  `rent` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext,
  PRIMARY KEY (`iid`),
  KEY `id` (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_information_27`;
CREATE TABLE IF NOT EXISTS `my_information_27` (
  `iid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `motobrand` tinyint(1) NOT NULL DEFAULT '0',
  `price` mediumint(7) NOT NULL DEFAULT '0',
  `from` tinyint(1) NOT NULL DEFAULT '0',
  `content` mediumtext,
  PRIMARY KEY (`iid`),
  KEY `id` (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `my_information_28`;
CREATE TABLE IF NOT EXISTS `my_information_28` (
  `iid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `mbrand` tinyint(1) NOT NULL DEFAULT '0',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `new_old` tinyint(1) NOT NULL DEFAULT '0',
  `from` tinyint(1) NOT NULL DEFAULT '0',
  `content` mediumtext,
  PRIMARY KEY (`iid`),
  KEY `id` (`id`)
) TYPE=MyISAM;