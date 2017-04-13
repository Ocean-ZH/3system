<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsdolog`;");
E_C("CREATE TABLE `phome_enewsdolog` (
  `logid` bigint(20) NOT NULL AUTO_INCREMENT,
  `logip` varchar(20) NOT NULL DEFAULT '',
  `logtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `username` varchar(30) NOT NULL DEFAULT '',
  `enews` varchar(30) NOT NULL DEFAULT '',
  `doing` varchar(255) NOT NULL DEFAULT '',
  `pubid` bigint(16) unsigned NOT NULL DEFAULT '0',
  `ipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`logid`),
  KEY `pubid` (`pubid`)
) ENGINE=MyISAM AUTO_INCREMENT=309 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsdolog` values('1','127.0.0.1','2017-03-21 13:56:59','admin','login','---','0','53416');");
E_D("replace into `phome_enewsdolog` values('2','127.0.0.1','2017-03-21 14:00:39','admin','AddClass','classid=1<br>classname=华标快讯','0','53537');");
E_D("replace into `phome_enewsdolog` values('3','127.0.0.1','2017-03-21 14:01:25','admin','AddTable','tid=9<br>tbname=banner','0','53580');");
E_D("replace into `phome_enewsdolog` values('4','127.0.0.1','2017-03-21 14:02:59','admin','EditSysF','fid=109<br>f=titlepic','0','53646');");
E_D("replace into `phome_enewsdolog` values('5','127.0.0.1','2017-03-21 14:03:46','admin','AddF','fid=111<br>f=alink','0','53689');");
E_D("replace into `phome_enewsdolog` values('6','127.0.0.1','2017-03-21 14:04:00','admin','EditF','fid=111<br>f=alink','0','53689');");
E_D("replace into `phome_enewsdolog` values('7','127.0.0.1','2017-03-21 14:04:57','admin','AddM','mid=9<br>m=幻灯系统模型','0','53742');");
E_D("replace into `phome_enewsdolog` values('8','127.0.0.1','2017-03-21 14:07:09','admin','AddClass','classid=2<br>classname=首页幻灯','0','53830');");
E_D("replace into `phome_enewsdolog` values('9','127.0.0.1','2017-03-21 14:08:52','admin','AddTable','tid=10<br>tbname=other','0','53912');");
E_D("replace into `phome_enewsdolog` values('10','127.0.0.1','2017-03-21 14:09:15','admin','EditSysF','fid=112<br>f=title','0','53937');");
E_D("replace into `phome_enewsdolog` values('11','127.0.0.1','2017-03-21 14:09:30','admin','EditSysF','fid=114<br>f=titlepic','0','53952');");
E_D("replace into `phome_enewsdolog` values('12','127.0.0.1','2017-03-21 14:10:21','admin','AddF','fid=116<br>f=bgimg','0','53981');");
E_D("replace into `phome_enewsdolog` values('13','127.0.0.1','2017-03-21 14:10:54','admin','AddF','fid=117<br>f=websitelink','0','54024');");
E_D("replace into `phome_enewsdolog` values('14','127.0.0.1','2017-03-21 14:11:50','admin','AddM','mid=10<br>m=站点系统模型','0','54062');");
E_D("replace into `phome_enewsdolog` values('15','127.0.0.1','2017-03-21 14:13:15','admin','AddClass','classid=3<br>classname=其他站点','0','54128');");
E_D("replace into `phome_enewsdolog` values('16','127.0.0.1','2017-03-21 14:15:30','admin','AddF','fid=118<br>f=mimg','0','54236');");
E_D("replace into `phome_enewsdolog` values('17','127.0.0.1','2017-03-21 14:16:03','admin','AddF','fid=119<br>f=mimg','0','54264');");
E_D("replace into `phome_enewsdolog` values('18','127.0.0.1','2017-03-21 14:16:39','admin','EditM','mid=9<br>m=幻灯系统模型','0','54286');");
E_D("replace into `phome_enewsdolog` values('19','127.0.0.1','2017-03-21 14:16:56','admin','EditM','mid=10<br>m=站点系统模型','0','54308');");
E_D("replace into `phome_enewsdolog` values('20','127.0.0.1','2017-03-21 14:17:25','admin','EditM','mid=9<br>m=幻灯系统模型','0','54325');");
E_D("replace into `phome_enewsdolog` values('21','127.0.0.1','2017-03-21 14:17:57','admin','EditM','mid=10<br>m=站点系统模型','0','54362');");
E_D("replace into `phome_enewsdolog` values('22','127.0.0.1','2017-03-21 14:18:58','admin','EditM','mid=9<br>m=幻灯系统模型','0','54418');");
E_D("replace into `phome_enewsdolog` values('23','127.0.0.1','2017-03-21 14:19:13','admin','EditM','mid=10<br>m=站点系统模型','0','54440');");
E_D("replace into `phome_enewsdolog` values('24','127.0.0.1','2017-03-21 14:20:18','admin','AddNews','classid=2<br>id=1<br>title=华标，只关注经营管理那点事','1000090000000001','54491');");
E_D("replace into `phome_enewsdolog` values('25','127.0.0.1','2017-03-21 14:21:07','admin','EditClass','classid=2<br>classname=首页幻灯','0','54560');");
E_D("replace into `phome_enewsdolog` values('26','127.0.0.1','2017-03-21 14:24:10','admin','EditTempvar','varid=1<br>var=header&gid=1','0','54680');");
E_D("replace into `phome_enewsdolog` values('27','127.0.0.1','2017-03-21 14:24:23','admin','ReIndex','---','0','54680');");
E_D("replace into `phome_enewsdolog` values('28','127.0.0.1','2017-03-21 14:25:31','admin','EditPublicTemp','gid=1','0','54738');");
E_D("replace into `phome_enewsdolog` values('29','127.0.0.1','2017-03-21 14:27:32','admin','EditTempvar','varid=2<br>var=footer&gid=1','0','54810');");
E_D("replace into `phome_enewsdolog` values('30','127.0.0.1','2017-03-21 14:29:05','admin','EditPublicTemp','gid=1','0','54857');");
E_D("replace into `phome_enewsdolog` values('31','127.0.0.1','2017-03-21 14:29:53','admin','EditPublicTemp','gid=1','0','54889');");
E_D("replace into `phome_enewsdolog` values('32','127.0.0.1','2017-03-21 14:31:52','admin','AddBqtemp','tempid=13<br>tempname=首页幻灯片&gid=1','0','54973');");
E_D("replace into `phome_enewsdolog` values('33','127.0.0.1','2017-03-21 14:35:08','admin','AddBqtemp','tempid=14<br>tempname=首页分站展示&gid=1','0','55074');");
E_D("replace into `phome_enewsdolog` values('34','127.0.0.1','2017-03-21 14:38:37','admin','EditPublicTemp','gid=1','0','55185');");
E_D("replace into `phome_enewsdolog` values('35','127.0.0.1','2017-03-21 14:39:18','admin','CopyNews_all','classid=2<br>id=1<br>title=华标，只关注经营管理那点事<br>to_classid=2','1000090000000001','55226');");
E_D("replace into `phome_enewsdolog` values('36','127.0.0.1','2017-03-21 14:39:26','admin','CopyNews_all','classid=2<br>id=1<br>title=华标，只关注经营管理那点事<br>to_classid=2','1000090000000001','55226');");
E_D("replace into `phome_enewsdolog` values('37','127.0.0.1','2017-03-21 14:39:34','admin','AddInfoToReHtml','classid=2<br>do=6','0','55242');");
E_D("replace into `phome_enewsdolog` values('38','127.0.0.1','2017-03-21 14:39:52','admin','EditInfoSimple','classid=2<br>id=3<br>title=华标，只关注经营管理那点事2','1000090000000003','55260');");
E_D("replace into `phome_enewsdolog` values('39','127.0.0.1','2017-03-21 14:40:02','admin','EditInfoSimple','classid=2<br>id=1<br>title=华标，只关注经营管理那点事3','1000090000000001','55274');");
E_D("replace into `phome_enewsdolog` values('40','127.0.0.1','2017-03-21 14:40:15','admin','EditInfoSimple','classid=2<br>id=2<br>title=华标，只关注经营管理那点事2','1000090000000002','55274');");
E_D("replace into `phome_enewsdolog` values('41','127.0.0.1','2017-03-21 14:40:25','admin','EditInfoSimple','classid=2<br>id=3<br>title=华标，只关注经营管理那点事1','1000090000000003','55288');");
E_D("replace into `phome_enewsdolog` values('42','127.0.0.1','2017-03-21 14:40:39','admin','EditMoreInfoTime','classid=2<br>classname=首页幻灯','0','55317');");
E_D("replace into `phome_enewsdolog` values('43','127.0.0.1','2017-03-21 14:42:09','admin','SetEnews','---','0','55400');");
E_D("replace into `phome_enewsdolog` values('44','127.0.0.1','2017-03-21 14:42:37','admin','SetEnews','---','0','55417');");
E_D("replace into `phome_enewsdolog` values('45','127.0.0.1','2017-03-21 14:43:16','admin','ReIndex','---','0','55465');");
E_D("replace into `phome_enewsdolog` values('46','127.0.0.1','2017-03-21 14:44:26','admin','AddNews','classid=3<br>id=1<br>title=商业模式规划、平台设计开发、平台运营咨询一体化解决方案提供商','1000100000000001','55564');");
E_D("replace into `phome_enewsdolog` values('47','127.0.0.1','2017-03-21 14:45:54','admin','AddNews','classid=3<br>id=2<br>title=深度、接地气、互联网精神全新一代3S-ERP系统','1000100000000002','55636');");
E_D("replace into `phome_enewsdolog` values('48','127.0.0.1','2017-03-21 14:46:06','admin','ReIndex','---','0','55636');");
E_D("replace into `phome_enewsdolog` values('49','127.0.0.1','2017-03-21 14:46:28','admin','GoodInfo_all','classid=3<br>classname=其他站点<br>id=1&doing=1','1000100000000001','55691');");
E_D("replace into `phome_enewsdolog` values('50','127.0.0.1','2017-03-21 14:46:38','admin','GoodInfo_all','classid=3<br>classname=其他站点<br>id=2&doing=1','1000100000000002','55702');");
E_D("replace into `phome_enewsdolog` values('51','127.0.0.1','2017-03-21 14:46:47','admin','ReIndex','---','0','55714');");
E_D("replace into `phome_enewsdolog` values('52','127.0.0.1','2017-03-21 14:47:40','admin','GoodInfo_all','classid=3<br>classname=其他站点<br>id=1&doing=1','1000100000000001','55763');");
E_D("replace into `phome_enewsdolog` values('53','127.0.0.1','2017-03-21 14:47:46','admin','AddInfoToReHtml','classid=3<br>do=6','0','55777');");
E_D("replace into `phome_enewsdolog` values('54','127.0.0.1','2017-03-21 14:48:02','admin','GoodInfo_all','classid=3<br>classname=其他站点<br>id=2&doing=1','1000100000000002','55784');");
E_D("replace into `phome_enewsdolog` values('55','127.0.0.1','2017-03-21 14:48:09','admin','AddInfoToReHtml','classid=3<br>do=6','0','55801');");
E_D("replace into `phome_enewsdolog` values('56','127.0.0.1','2017-03-21 14:49:18','admin','AddBqtemp','tempid=15<br>tempname=首页分站展示-coming&gid=1','0','55860');");
E_D("replace into `phome_enewsdolog` values('57','127.0.0.1','2017-03-21 14:49:59','admin','EditPublicTemp','gid=1','0','55898');");
E_D("replace into `phome_enewsdolog` values('58','127.0.0.1','2017-03-21 14:55:32','admin','EditListtemp','tempid=1<br>tempname=默认新闻列表模板&gid=1','0','60268');");
E_D("replace into `phome_enewsdolog` values('59','127.0.0.1','2017-03-21 14:57:29','admin','EditNewstemp','tempid=1<br>tempname=默认新闻内容模板&gid=1','0','60345');");
E_D("replace into `phome_enewsdolog` values('60','127.0.0.1','2017-03-21 14:59:26','admin','AddTempvar','varid=8<br>var=article-r&gid=1','0','60467');");
E_D("replace into `phome_enewsdolog` values('61','127.0.0.1','2017-03-21 14:59:37','admin','ReSingleInfo','classid=1','0','60467');");
E_D("replace into `phome_enewsdolog` values('62','127.0.0.1','2017-03-21 15:00:35','admin','EditTempvar','varid=8<br>var=article-r&gid=1','0','60554');");
E_D("replace into `phome_enewsdolog` values('63','127.0.0.1','2017-03-21 15:00:45','admin','ReSingleInfo','classid=1','0','60567');");
E_D("replace into `phome_enewsdolog` values('64','127.0.0.1','2017-03-21 15:02:00','admin','AddBqtemp','tempid=16<br>tempname=新闻列表样式&gid=1','0','60638');");
E_D("replace into `phome_enewsdolog` values('65','127.0.0.1','2017-03-21 15:02:31','admin','DelF','fid=8<br>f=befrom','0','60669');");
E_D("replace into `phome_enewsdolog` values('66','127.0.0.1','2017-03-21 15:02:58','admin','EditM','mid=1<br>m=新闻系统模型','0','60696');");
E_D("replace into `phome_enewsdolog` values('67','127.0.0.1','2017-03-21 15:03:17','admin','EditNewstemp','tempid=1<br>tempname=默认新闻内容模板&gid=1','0','60718');");
E_D("replace into `phome_enewsdolog` values('68','127.0.0.1','2017-03-21 15:03:29','admin','ReSingleInfo','classid=1','0','60734');");
E_D("replace into `phome_enewsdolog` values('69','127.0.0.1','2017-03-21 15:04:14','admin','EditTempvar','varid=8<br>var=article-r&gid=1','0','60794');");
E_D("replace into `phome_enewsdolog` values('70','127.0.0.1','2017-03-21 15:05:04','admin','AddBqtemp','tempid=17<br>tempname=文章右侧推荐&gid=1','0','60835');");
E_D("replace into `phome_enewsdolog` values('71','127.0.0.1','2017-03-21 15:05:34','admin','ReSingleInfo','classid=1','0','60876');");
E_D("replace into `phome_enewsdolog` values('72','127.0.0.1','2017-03-21 15:09:23','admin','EditListtemp','tempid=1<br>tempname=默认新闻列表模板&gid=1','0','61052');");
E_D("replace into `phome_enewsdolog` values('73','127.0.0.1','2017-03-21 15:10:24','admin','EditClass','classid=1<br>classname=华标快讯','0','61100');");
E_D("replace into `phome_enewsdolog` values('74','127.0.0.1','2017-03-21 15:10:39','admin','ChangeEnewsData','---','0','61100');");
E_D("replace into `phome_enewsdolog` values('75','127.0.0.1','2017-03-21 15:10:43','admin','ReClassPath','---','0','61100');");
E_D("replace into `phome_enewsdolog` values('76','127.0.0.1','2017-03-21 15:11:25','admin','EditListtemp','tempid=1<br>tempname=默认新闻列表模板&gid=1','0','61172');");
E_D("replace into `phome_enewsdolog` values('77','127.0.0.1','2017-03-21 15:11:37','admin','ReListHtml','---','0','61172');");
E_D("replace into `phome_enewsdolog` values('78','127.0.0.1','2017-03-21 15:15:17','admin','EditListtemp','tempid=1<br>tempname=默认新闻列表模板&gid=1','0','61338');");
E_D("replace into `phome_enewsdolog` values('79','127.0.0.1','2017-03-21 15:16:52','admin','AddClassF','fid=1<br>f=mbimg','0','61428');");
E_D("replace into `phome_enewsdolog` values('80','127.0.0.1','2017-03-21 15:17:01','admin','ReListHtml','---','0','61428');");
E_D("replace into `phome_enewsdolog` values('81','127.0.0.1','2017-03-21 15:18:47','admin','EditBqtemp','tempid=16<br>tempname=新闻列表样式&gid=1','0','61520');");
E_D("replace into `phome_enewsdolog` values('82','127.0.0.1','2017-03-21 15:19:09','admin','EditBqtemp','tempid=17<br>tempname=文章右侧推荐&gid=1','0','61564');");
E_D("replace into `phome_enewsdolog` values('83','127.0.0.1','2017-03-21 15:19:14','admin','EditTempvar','varid=8<br>var=article-r&gid=1','0','61564');");
E_D("replace into `phome_enewsdolog` values('84','127.0.0.1','2017-03-21 15:19:21','admin','ReSingleInfo','classid=1','0','61577');");
E_D("replace into `phome_enewsdolog` values('85','127.0.0.1','2017-03-21 15:19:36','admin','GoodInfo_all','classid=1<br>classname=华标快讯<br>id=1&doing=0','1000010000000001','61611');");
E_D("replace into `phome_enewsdolog` values('86','127.0.0.1','2017-03-21 15:19:52','admin','GoodInfo_all','classid=1<br>classname=华标快讯<br>id=1&doing=0','1000010000000001','61628');");
E_D("replace into `phome_enewsdolog` values('87','127.0.0.1','2017-03-21 15:25:53','admin','BakExe','dbname=hb2','0','62133');");
E_D("replace into `phome_enewsdolog` values('88','113.76.34.155','2017-03-21 16:19:22','admin','login','---','0','1358');");
E_D("replace into `phome_enewsdolog` values('89','113.76.34.155','2017-03-21 16:21:23','admin','AddGroup','groupid=2<br>groupname=华标编辑','0','1419');");
E_D("replace into `phome_enewsdolog` values('90','113.76.34.155','2017-03-21 16:21:54','admin','AddUser','userid=2<br>username=hb01','0','1054');");
E_D("replace into `phome_enewsdolog` values('91','113.76.34.155','2017-03-21 16:22:12','admin','AddUser','userid=3<br>username=hb02','0','1859');");
E_D("replace into `phome_enewsdolog` values('92','113.76.34.155','2017-03-21 16:22:26','admin','AddUser','userid=4<br>username=hb03','0','3006');");
E_D("replace into `phome_enewsdolog` values('93','113.76.34.155','2017-03-21 16:23:11','hb02','login','---','0','2501');");
E_D("replace into `phome_enewsdolog` values('94','113.76.34.155','2017-03-21 16:30:31','hb02','login','---','0','2422');");
E_D("replace into `phome_enewsdolog` values('95','183.57.18.26','2017-03-21 16:37:26','hb01','login','---','0','56833');");
E_D("replace into `phome_enewsdolog` values('96','183.57.18.26','2017-03-21 16:44:27','hb01','EditNews','classid=3<br>id=2<br>title=深度、接地气、互联网精神全新一代3S-ERP系统','1000100000000002','57187');");
E_D("replace into `phome_enewsdolog` values('97','183.57.18.26','2017-03-21 16:44:40','hb01','EditNews','classid=3<br>id=1<br>title=商业模式规划、平台设计开发、平台运营咨询一体化解决方案提供商','1000100000000001','57209');");
E_D("replace into `phome_enewsdolog` values('98','113.76.34.155','2017-03-21 16:49:30','admin','login','---','0','2422');");
E_D("replace into `phome_enewsdolog` values('99','183.57.18.26','2017-03-21 16:51:21','hb01','AddNews','classid=3<br>id=3<br>title=品牌运营管理、新零售最佳解决方案','1000100000000003','57575');");
E_D("replace into `phome_enewsdolog` values('100','113.76.34.155','2017-03-21 16:51:42','admin','EditPublicTemp','gid=1','0','2801');");
E_D("replace into `phome_enewsdolog` values('101','113.76.34.155','2017-03-21 16:51:47','admin','ReIndex','---','0','1394');");
E_D("replace into `phome_enewsdolog` values('102','113.76.34.155','2017-03-21 16:52:26','admin','EditPublicTemp','gid=1','0','1677');");
E_D("replace into `phome_enewsdolog` values('103','113.76.34.155','2017-03-21 16:52:30','admin','ReIndex','---','0','2072');");
E_D("replace into `phome_enewsdolog` values('104','183.57.18.26','2017-03-21 16:52:36','hb01','EditNews','classid=3<br>id=3<br>title=品牌运营管理、新零售最佳解决方案','1000100000000003','57731');");
E_D("replace into `phome_enewsdolog` values('105','183.57.18.26','2017-03-21 16:59:29','hb01','AddNews','classid=3<br>id=4<br>title=新意范：工业4.0智能制造','1000100000000004','58284');");
E_D("replace into `phome_enewsdolog` values('106','183.57.18.26','2017-03-21 17:01:39','hb01','EditNews','classid=3<br>id=4<br>title=新意范：工业4.0智能制造','1000100000000004','58513');");
E_D("replace into `phome_enewsdolog` values('107','113.76.34.155','2017-03-21 17:04:37','admin','EditPublicTemp','gid=1','0','1300');");
E_D("replace into `phome_enewsdolog` values('108','113.76.34.155','2017-03-21 17:04:41','admin','ReIndex','---','0','1030');");
E_D("replace into `phome_enewsdolog` values('109','183.57.18.26','2017-03-21 17:07:01','hb01','AddNews','classid=3<br>id=5<br>title=华标软件生态链   伙伴招募计划','1000100000000005','58979');");
E_D("replace into `phome_enewsdolog` values('110','183.57.18.26','2017-03-21 17:08:16','hb01','EditNews','classid=2<br>id=3<br>title=华标，只关注经营管理那点事1','1000090000000003','59148');");
E_D("replace into `phome_enewsdolog` values('111','113.76.34.155','2017-03-21 17:13:05','admin','AddLink','lid=1<br>lname=罗西尼表业','0','1656');");
E_D("replace into `phome_enewsdolog` values('112','113.76.34.155','2017-03-21 17:13:18','admin','ReIndex','---','0','2149');");
E_D("replace into `phome_enewsdolog` values('113','113.76.34.155','2017-03-21 17:14:29','admin','AddLink','lid=2<br>lname=华美化工建材','0','1751');");
E_D("replace into `phome_enewsdolog` values('114','113.76.34.155','2017-03-21 17:14:42','admin','AddLink','lid=3<br>lname=润丰机电','0','2191');");
E_D("replace into `phome_enewsdolog` values('115','113.76.34.155','2017-03-21 17:14:54','admin','AddLink','lid=4<br>lname=盛威电子','0','2446');");
E_D("replace into `phome_enewsdolog` values('116','113.76.34.155','2017-03-21 17:15:11','admin','AddLink','lid=5<br>lname=深华消防','0','2725');");
E_D("replace into `phome_enewsdolog` values('117','113.76.34.155','2017-03-21 17:15:23','admin','AddLink','lid=6<br>lname=深证智慧建设','0','1357');");
E_D("replace into `phome_enewsdolog` values('118','113.76.34.155','2017-03-21 17:15:39','admin','AddLink','lid=7<br>lname=旭日陶瓷(白兔瓷砖)','0','1846');");
E_D("replace into `phome_enewsdolog` values('119','113.76.34.155','2017-03-21 17:15:52','admin','AddLink','lid=8<br>lname=Cartridge World','0','2151');");
E_D("replace into `phome_enewsdolog` values('120','113.76.34.155','2017-03-21 17:16:37','admin','AddLink','lid=9<br>lname=新意范智能建造','0','3015');");
E_D("replace into `phome_enewsdolog` values('121','113.76.34.155','2017-03-21 17:16:57','admin','AddLink','lid=10<br>lname=友元办公联盟','0','1479');");
E_D("replace into `phome_enewsdolog` values('122','113.76.34.155','2017-03-21 17:17:06','admin','AddLink','lid=11<br>lname=河南金爵智能科技','0','1634');");
E_D("replace into `phome_enewsdolog` values('123','113.76.34.155','2017-03-21 17:17:16','admin','AddLink','lid=12<br>lname=河南力之星','0','1841');");
E_D("replace into `phome_enewsdolog` values('124','113.76.34.155','2017-03-21 17:17:27','admin','AddLink','lid=13<br>lname=珠海广金厨具','0','2020');");
E_D("replace into `phome_enewsdolog` values('125','113.76.34.155','2017-03-21 17:17:37','admin','AddLink','lid=14<br>lname=福东饮食','0','2625');");
E_D("replace into `phome_enewsdolog` values('126','113.76.34.155','2017-03-21 17:17:49','admin','AddLink','lid=15<br>lname=华为云','0','2933');");
E_D("replace into `phome_enewsdolog` values('127','113.76.34.155','2017-03-21 17:17:57','admin','AddLink','lid=16<br>lname=阿里云','0','1105');");
E_D("replace into `phome_enewsdolog` values('128','113.76.34.155','2017-03-21 17:18:07','admin','AddLink','lid=17<br>lname=腾讯','0','1272');");
E_D("replace into `phome_enewsdolog` values('129','113.76.34.155','2017-03-21 17:18:16','admin','AddLink','lid=18<br>lname=百度','0','1441');");
E_D("replace into `phome_enewsdolog` values('130','113.76.34.155','2017-03-21 17:18:26','admin','AddLink','lid=19<br>lname=新浪','0','1764');");
E_D("replace into `phome_enewsdolog` values('131','113.76.34.155','2017-03-21 17:18:36','admin','AddLink','lid=20<br>lname=搜狐','0','1973');");
E_D("replace into `phome_enewsdolog` values('132','113.76.34.155','2017-03-21 17:18:43','admin','ReIndex','---','0','2408');");
E_D("replace into `phome_enewsdolog` values('133','113.76.34.155','2017-03-21 17:21:36','admin','login','---','0','3003');");
E_D("replace into `phome_enewsdolog` values('134','113.76.34.155','2017-03-21 17:22:02','admin','EditPublicTemp','gid=1','0','2648');");
E_D("replace into `phome_enewsdolog` values('135','113.76.34.155','2017-03-21 17:22:05','admin','ReIndex','---','0','2781');");
E_D("replace into `phome_enewsdolog` values('136','113.76.34.155','2017-03-21 17:24:58','admin','EditPublicTemp','gid=1','0','2408');");
E_D("replace into `phome_enewsdolog` values('137','113.76.34.155','2017-03-21 17:27:29','admin','EditClass','classid=2<br>classname=首页幻灯','0','1228');");
E_D("replace into `phome_enewsdolog` values('138','183.57.18.26','2017-03-21 17:29:12','hb01','EditNews','classid=2<br>id=3<br>title=华标，只关注经营管理那点事','1000090000000003','60136');");
E_D("replace into `phome_enewsdolog` values('139','113.76.34.155','2017-03-21 17:31:03','admin','ReIndex','---','0','1057');");
E_D("replace into `phome_enewsdolog` values('140','183.57.18.26','2017-03-21 17:36:09','hb01','EditNews','classid=3<br>id=1<br>title=商业模式规划、平台设计开发、平台运营咨询一体化解决方案提供商','1000100000000001','60716');");
E_D("replace into `phome_enewsdolog` values('141','113.76.34.155','2017-03-21 17:36:13','admin','SetEnews','---','0','2589');");
E_D("replace into `phome_enewsdolog` values('142','113.76.34.155','2017-03-21 17:36:39','admin','EditNews','classid=2<br>id=3<br>title=华标，只关注经营管理那点事1','1000090000000003','1120');");
E_D("replace into `phome_enewsdolog` values('143','113.76.34.155','2017-03-21 17:36:54','admin','AddInfoToReHtml','classid=2<br>do=6','0','1225');");
E_D("replace into `phome_enewsdolog` values('144','113.76.34.155','2017-03-21 17:37:36','admin','ReIndex','---','0','2598');");
E_D("replace into `phome_enewsdolog` values('145','113.76.34.155','2017-03-21 17:37:42','admin','ReListHtml_all','---','0','1391');");
E_D("replace into `phome_enewsdolog` values('146','113.76.34.155','2017-03-21 17:38:35','admin','SetEnews','---','0','2959');");
E_D("replace into `phome_enewsdolog` values('147','113.76.34.155','2017-03-21 17:40:03','admin','ReIndex','---','0','2438');");
E_D("replace into `phome_enewsdolog` values('148','113.76.34.155','2017-03-21 17:41:30','admin','SetEnews','---','0','2813');");
E_D("replace into `phome_enewsdolog` values('149','113.76.34.155','2017-03-21 17:43:13','admin','EditPublicTemp','gid=1','0','2711');");
E_D("replace into `phome_enewsdolog` values('150','113.76.34.155','2017-03-21 17:43:20','admin','ReIndex','---','0','1488');");
E_D("replace into `phome_enewsdolog` values('151','113.76.34.155','2017-03-21 17:44:01','admin','EditPublicTemp','gid=1','0','1675');");
E_D("replace into `phome_enewsdolog` values('152','113.76.34.155','2017-03-21 17:44:05','admin','ReIndex','---','0','2166');");
E_D("replace into `phome_enewsdolog` values('153','113.76.34.155','2017-03-21 17:44:45','admin','EditNews','classid=2<br>id=3<br>title=华标，只关注经营管理','1000090000000003','2250');");
E_D("replace into `phome_enewsdolog` values('154','113.76.34.155','2017-03-21 17:44:49','admin','AddInfoToReHtml','classid=2<br>do=6','0','2436');");
E_D("replace into `phome_enewsdolog` values('155','113.76.34.155','2017-03-21 17:45:14','admin','NoCheckNews_all','classid=2<br>classname=首页幻灯','0','1246');");
E_D("replace into `phome_enewsdolog` values('156','113.76.34.155','2017-03-21 17:45:30','admin','AddInfoToReHtml','classid=2<br>do=6','0','2861');");
E_D("replace into `phome_enewsdolog` values('157','113.76.34.155','2017-03-21 17:45:54','admin','ReIndex','---','0','2041');");
E_D("replace into `phome_enewsdolog` values('158','113.76.34.155','2017-03-21 17:45:56','admin','ReListHtml_all','---','0','2090');");
E_D("replace into `phome_enewsdolog` values('159','113.76.34.155','2017-03-21 17:52:00','admin','CheckNews_all','classid=2<br>classname=首页幻灯','0','2826');");
E_D("replace into `phome_enewsdolog` values('160','113.76.34.155','2017-03-21 17:52:54','admin','EditF','fid=117<br>f=websitelink','0','2863');");
E_D("replace into `phome_enewsdolog` values('161','113.76.34.155','2017-03-21 17:53:33','admin','EditBqtemp','tempid=14<br>tempname=首页分站展示&gid=1','0','2216');");
E_D("replace into `phome_enewsdolog` values('162','113.76.34.155','2017-03-21 17:53:38','admin','ReIndex','---','0','2344');");
E_D("replace into `phome_enewsdolog` values('163','113.76.34.155','2017-03-21 17:54:02','admin','ReListHtml_all','---','0','1907');");
E_D("replace into `phome_enewsdolog` values('164','113.76.34.155','2017-03-21 17:54:09','admin','ReIndex','---','0','2365');");
E_D("replace into `phome_enewsdolog` values('165','113.76.34.155','2017-03-21 17:54:55','admin','EditNews','classid=3<br>id=2<br>title=深度、接地气、互联网精神全新一代3S-ERP系统','1000100000000002','2474');");
E_D("replace into `phome_enewsdolog` values('166','113.76.34.155','2017-03-21 17:55:12','admin','AddInfoToReHtml','classid=3<br>do=6','0','1447');");
E_D("replace into `phome_enewsdolog` values('167','113.76.34.155','2017-03-21 18:02:28','admin','EditPublicTemp','gid=1','0','1924');");
E_D("replace into `phome_enewsdolog` values('168','113.76.34.155','2017-03-21 18:03:07','admin','SetEnews','---','0','1355');");
E_D("replace into `phome_enewsdolog` values('169','113.76.34.155','2017-03-21 18:03:12','admin','ReIndex','---','0','1450');");
E_D("replace into `phome_enewsdolog` values('170','113.76.34.155','2017-03-21 18:04:15','admin','EditPublicTemp','gid=1','0','1515');");
E_D("replace into `phome_enewsdolog` values('171','113.76.34.155','2017-03-21 18:04:22','admin','EditPublicTemp','gid=1','0','1548');");
E_D("replace into `phome_enewsdolog` values('172','113.76.34.155','2017-03-21 18:04:39','admin','EditNews','classid=2<br>id=3<br>title=华标，只关注经营管理那点事','1000090000000003','2101');");
E_D("replace into `phome_enewsdolog` values('173','113.76.34.155','2017-03-21 18:04:44','admin','AddInfoToReHtml','classid=2<br>do=6','0','2314');");
E_D("replace into `phome_enewsdolog` values('174','113.76.34.155','2017-03-21 18:05:55','admin','EditF','fid=117<br>f=websitelink','0','1711');");
E_D("replace into `phome_enewsdolog` values('175','113.76.33.183','2017-03-22 09:10:08','admin','login','---','0','2927');");
E_D("replace into `phome_enewsdolog` values('176','113.76.33.183','2017-03-22 09:11:06','admin','DelBakpath','path=3system_20170322091026','0','2935');");
E_D("replace into `phome_enewsdolog` values('177','113.76.33.183','2017-03-22 09:12:28','admin','DelBakpath','path=3system_20170322091108','0','2318');");
E_D("replace into `phome_enewsdolog` values('178','183.57.18.26','2017-03-22 09:28:08','hb01','login','---','0','63393');");
E_D("replace into `phome_enewsdolog` values('179','113.76.33.183','2017-03-22 10:30:04','admin','login','---','0','1522');");
E_D("replace into `phome_enewsdolog` values('180','113.76.33.183','2017-03-22 10:30:18','admin','login','---','0','2543');");
E_D("replace into `phome_enewsdolog` values('181','113.76.33.183','2017-03-22 10:34:14','admin','EditPublicTemp','gid=1','0','1105');");
E_D("replace into `phome_enewsdolog` values('182','113.76.33.183','2017-03-22 10:34:33','admin','EditBqtemp','tempid=13<br>tempname=首页幻灯片&gid=1','0','1228');");
E_D("replace into `phome_enewsdolog` values('183','113.76.33.183','2017-03-22 10:35:01','admin','AddBqtemp','tempid=18<br>tempname=首页幻灯片-单图片&gid=1','0','1521');");
E_D("replace into `phome_enewsdolog` values('184','113.76.33.183','2017-03-22 10:35:43','admin','AddUserpage','id=1&title=1','0','2736');");
E_D("replace into `phome_enewsdolog` values('185','113.76.33.183','2017-03-22 10:36:18','admin','ReUserpageAll','---','0','2110');");
E_D("replace into `phome_enewsdolog` values('186','113.76.33.183','2017-03-22 10:37:49','admin','ReIndex','---','0','1402');");
E_D("replace into `phome_enewsdolog` values('187','113.76.33.183','2017-03-22 10:38:23','admin','EditPublicTemp','gid=1','0','2486');");
E_D("replace into `phome_enewsdolog` values('188','113.76.33.183','2017-03-22 11:26:14','admin','login','---','0','1962');");
E_D("replace into `phome_enewsdolog` values('189','183.57.18.26','2017-03-22 11:46:12','hb01','EditNews','classid=3<br>id=2<br>title=深度、接地气、互联网思维新一代3S-ERP系统','1000100000000002','53530');");
E_D("replace into `phome_enewsdolog` values('190','183.57.18.26','2017-03-22 11:50:33','hb01','EditNews','classid=3<br>id=3<br>title=品牌运营及分销管理平台、新零售解决方案','1000100000000003','53803');");
E_D("replace into `phome_enewsdolog` values('191','183.57.18.26','2017-03-22 13:36:10','hb01','login','---','0','54338');");
E_D("replace into `phome_enewsdolog` values('192','113.76.33.183','2017-03-22 13:39:32','admin','login','---','0','2810');");
E_D("replace into `phome_enewsdolog` values('193','183.57.18.26','2017-03-22 13:41:33','hb01','EditNews','classid=3<br>id=1<br>title=商业模式规划、平台设计开发、平台运营咨询一体化解决方案提供商','1000100000000001','54790');");
E_D("replace into `phome_enewsdolog` values('194','183.57.18.26','2017-03-22 13:41:52','hb01','EditNews','classid=3<br>id=1<br>title=商业模式规划、平台设计开发、平台运营咨询一体化解决方案提供商','1000100000000001','54808');");
E_D("replace into `phome_enewsdolog` values('195','183.57.18.26','2017-03-22 13:43:26','hb01','EditNews','classid=3<br>id=1<br>title=商业模式规划、平台设计开发、平台运营咨询一体化解决方案提供商','1000100000000001','54941');");
E_D("replace into `phome_enewsdolog` values('196','183.57.18.26','2017-03-22 13:45:31','hb01','EditNews','classid=3<br>id=2<br>title=深度、接地气、互联网思维新一代3S-ERP系统','1000100000000002','55171');");
E_D("replace into `phome_enewsdolog` values('197','113.76.33.183','2017-03-22 14:00:24','admin','login','---','0','2436');");
E_D("replace into `phome_enewsdolog` values('198','113.76.33.183','2017-03-22 14:00:31','admin','ReIndex','---','0','2672');");
E_D("replace into `phome_enewsdolog` values('199','113.76.33.183','2017-03-22 14:00:33','admin','ReListHtml_all','---','0','2673');");
E_D("replace into `phome_enewsdolog` values('200','113.76.33.183','2017-03-22 14:00:50','admin','DelTable','tid=8<br>tbname=info','0','2952');");
E_D("replace into `phome_enewsdolog` values('201','113.76.33.183','2017-03-22 14:00:55','admin','DelTable','tid=2<br>tbname=download','0','2989');");
E_D("replace into `phome_enewsdolog` values('202','113.76.33.183','2017-03-22 14:00:58','admin','DelTable','tid=3<br>tbname=photo','0','3032');");
E_D("replace into `phome_enewsdolog` values('203','113.76.33.183','2017-03-22 14:01:01','admin','DelTable','tid=4<br>tbname=flash','0','3057');");
E_D("replace into `phome_enewsdolog` values('204','113.76.33.183','2017-03-22 14:01:04','admin','DelTable','tid=5<br>tbname=movie','0','1025');");
E_D("replace into `phome_enewsdolog` values('205','113.76.33.183','2017-03-22 14:01:07','admin','DelTable','tid=6<br>tbname=shop','0','1053');");
E_D("replace into `phome_enewsdolog` values('206','113.76.33.183','2017-03-22 14:01:10','admin','DelTable','tid=7<br>tbname=article','0','1248');");
E_D("replace into `phome_enewsdolog` values('207','113.76.33.183','2017-03-22 14:01:42','admin','DelListtemp','tempid=8<br>tempname=分类信息默认列表模板&gid=1','0','1683');");
E_D("replace into `phome_enewsdolog` values('208','113.76.33.183','2017-03-22 14:01:45','admin','DelListtemp','tempid=7<br>tempname=默认文章列表模板&gid=1','0','1684');");
E_D("replace into `phome_enewsdolog` values('209','113.76.33.183','2017-03-22 14:01:47','admin','DelListtemp','tempid=6<br>tempname=默认商城列表模板&gid=1','0','1750');");
E_D("replace into `phome_enewsdolog` values('210','113.76.33.183','2017-03-22 14:01:49','admin','DelListtemp','tempid=5<br>tempname=默认电影列表模板&gid=1','0','1789');");
E_D("replace into `phome_enewsdolog` values('211','113.76.33.183','2017-03-22 14:01:51','admin','DelListtemp','tempid=4<br>tempname=默认FLASH列表模板&gid=1','0','1832');");
E_D("replace into `phome_enewsdolog` values('212','113.76.33.183','2017-03-22 14:01:54','admin','DelListtemp','tempid=3<br>tempname=默认图片列表模板&gid=1','0','1830');");
E_D("replace into `phome_enewsdolog` values('213','113.76.33.183','2017-03-22 14:01:56','admin','DelListtemp','tempid=2<br>tempname=默认下载列表模板&gid=1','0','1835');");
E_D("replace into `phome_enewsdolog` values('214','113.76.33.183','2017-03-22 14:03:05','admin','EditPublicTemp','gid=1','0','2964');");
E_D("replace into `phome_enewsdolog` values('215','183.57.18.26','2017-03-22 14:47:24','hb01','EditNews','classid=3<br>id=5<br>title=华标软件生态链   伙伴招募计划','1000100000000005','58161');");
E_D("replace into `phome_enewsdolog` values('216','113.76.33.183','2017-03-22 17:19:18','admin','GoodInfo_all','classid=2<br>classname=首页幻灯<br>id=3&doing=1','1000090000000003','1373');");
E_D("replace into `phome_enewsdolog` values('217','113.76.33.183','2017-03-22 17:19:36','admin','TDelFile_all','---','0','1835');");
E_D("replace into `phome_enewsdolog` values('218','113.76.33.183','2017-03-22 17:20:28','admin','EditNews','classid=2<br>id=3<br>title=华标，只关注经营管理那点事','1000090000000003','2743');");
E_D("replace into `phome_enewsdolog` values('219','113.76.33.183','2017-03-22 17:20:45','admin','ReIndex','---','0','1209');");
E_D("replace into `phome_enewsdolog` values('220','113.76.33.183','2017-03-22 17:22:44','admin','EditNews','classid=2<br>id=3<br>title=华标，聚焦经营管理平台及互联网+','1000090000000003','1370');");
E_D("replace into `phome_enewsdolog` values('221','113.76.33.183','2017-03-22 17:22:49','admin','ReIndex','---','0','1419');");
E_D("replace into `phome_enewsdolog` values('222','113.76.33.183','2017-03-22 17:31:09','admin','TDelFile_all','---','0','1797');");
E_D("replace into `phome_enewsdolog` values('223','113.76.33.183','2017-03-22 17:31:20','admin','EditNews','classid=3<br>id=5<br>title=华标软件生态链   伙伴招募计划','1000100000000005','2117');");
E_D("replace into `phome_enewsdolog` values('224','113.76.33.183','2017-03-22 17:31:23','admin','ReIndex','---','0','2575');");
E_D("replace into `phome_enewsdolog` values('225','113.76.33.183','2017-03-22 17:43:25','admin','EditPublicTemp','gid=1','0','2829');");
E_D("replace into `phome_enewsdolog` values('226','113.76.33.183','2017-03-22 17:43:29','admin','ReIndex','---','0','2886');");
E_D("replace into `phome_enewsdolog` values('227','113.76.33.183','2017-03-22 17:48:43','admin','EditPublicTemp','gid=1','0','1404');");
E_D("replace into `phome_enewsdolog` values('228','113.76.33.183','2017-03-22 17:49:12','admin','EditPublicTemp','gid=1','0','2187');");
E_D("replace into `phome_enewsdolog` values('229','113.76.33.183','2017-03-22 18:19:01','admin','EditNews','classid=3<br>id=1<br>title=商业模式规划、平台设计开发、平台运营咨询<br />一体化解决方案提供商<br />B2B、B2C、C2C、F2C、O2O、行业搓合平台','1000100000000001','1715');");
E_D("replace into `phome_enewsdolog` values('230','113.76.33.183','2017-03-22 18:19:12','admin','ReIndex','---','0','1787');");
E_D("replace into `phome_enewsdolog` values('231','113.76.33.183','2017-03-22 18:20:00','admin','EditNews','classid=3<br>id=1<br>title=商业模式规划、平台设计开发、平台运营咨询解决方案提供商(图文)','1000100000000001','2359');");
E_D("replace into `phome_enewsdolog` values('232','113.76.33.183','2017-03-22 18:20:06','admin','ReIndex','---','0','2467');");
E_D("replace into `phome_enewsdolog` values('233','113.76.33.183','2017-03-22 18:20:20','admin','EditNews','classid=3<br>id=1<br>title=商业模式规划、平台设计开发、平台运营咨询解决方案提供商','1000100000000001','2755');");
E_D("replace into `phome_enewsdolog` values('234','113.76.33.183','2017-03-22 18:20:23','admin','ReIndex','---','0','2780');");
E_D("replace into `phome_enewsdolog` values('235','113.76.33.183','2017-03-22 18:25:10','admin','EditNews','classid=3<br>id=4<br>title=工业4.0智能制造','1000100000000004','1301');");
E_D("replace into `phome_enewsdolog` values('236','113.76.33.183','2017-03-22 18:25:31','admin','ReIndex','---','0','1773');");
E_D("replace into `phome_enewsdolog` values('237','113.76.33.183','2017-03-22 18:33:16','admin','BakExe','dbname=3system','0','2003');");
E_D("replace into `phome_enewsdolog` values('238','218.13.216.67','2017-03-23 00:30:54','admin','login','---','0','1636');");
E_D("replace into `phome_enewsdolog` values('239','218.13.216.67','2017-03-23 00:46:47','admin','EditPublicTemp','gid=1','0','2165');");
E_D("replace into `phome_enewsdolog` values('240','218.13.216.67','2017-03-23 00:46:51','admin','ReIndex','---','0','2171');");
E_D("replace into `phome_enewsdolog` values('241','218.13.216.67','2017-03-23 00:51:29','admin','login','---','0','12519');");
E_D("replace into `phome_enewsdolog` values('242','218.13.216.67','2017-03-23 00:53:27','admin','login','---','0','14961');");
E_D("replace into `phome_enewsdolog` values('243','218.13.216.67','2017-03-23 01:05:04','admin','login','---','0','10208');");
E_D("replace into `phome_enewsdolog` values('244','218.13.216.67','2017-03-23 01:05:48','admin','AddF','fid=120<br>f=title2','0','10398');");
E_D("replace into `phome_enewsdolog` values('245','218.13.216.67','2017-03-23 01:06:09','admin','EditM','mid=10<br>m=站点系统模型','0','10413');");
E_D("replace into `phome_enewsdolog` values('246','218.13.216.67','2017-03-23 01:07:03','admin','AddF','fid=121<br>f=titles','0','10450');");
E_D("replace into `phome_enewsdolog` values('247','218.13.216.67','2017-03-23 01:07:20','admin','EditM','mid=10<br>m=站点系统模型','0','10461');");
E_D("replace into `phome_enewsdolog` values('248','218.13.216.67','2017-03-23 01:07:55','admin','EditNews','classid=3<br>id=1<br>title=商业模式规划、平台设计开发、平台运营咨询','1000100000000001','10485');");
E_D("replace into `phome_enewsdolog` values('249','218.13.216.67','2017-03-23 01:08:44','admin','EditBqtemp','tempid=14<br>tempname=首页分站展示&gid=1','0','10510');");
E_D("replace into `phome_enewsdolog` values('250','218.13.216.67','2017-03-23 01:19:15','admin','ReIndex','---','0','10985');");
E_D("replace into `phome_enewsdolog` values('251','113.76.32.6','2017-03-23 09:05:36','admin','login','---','0','10425');");
E_D("replace into `phome_enewsdolog` values('252','113.76.32.6','2017-03-23 09:15:34','admin','login','---','0','10632');");
E_D("replace into `phome_enewsdolog` values('253','113.76.32.6','2017-03-23 09:27:54','admin','BakExe','dbname=3system','0','10674');");
E_D("replace into `phome_enewsdolog` values('254','183.57.18.26','2017-03-23 09:43:15','hb01','login','---','0','54002');");
E_D("replace into `phome_enewsdolog` values('255','183.57.18.26','2017-03-23 09:43:46','hb01','DelNews','classid=1<br>id=1<br>title=11','1000010000000001','54087');");
E_D("replace into `phome_enewsdolog` values('256','113.76.32.6','2017-03-23 09:46:01','admin','EditClass','classid=1<br>classname=华标快讯','0','9288');");
E_D("replace into `phome_enewsdolog` values('257','113.76.32.6','2017-03-23 09:46:09','admin','ReListHtml','---','0','9552');");
E_D("replace into `phome_enewsdolog` values('258','113.76.32.6','2017-03-23 11:29:35','admin','EditTempvar','varid=1<br>var=header&gid=1','0','11085');");
E_D("replace into `phome_enewsdolog` values('259','113.76.32.6','2017-03-23 11:29:40','admin','ReIndex','---','0','11159');");
E_D("replace into `phome_enewsdolog` values('260','113.76.32.6','2017-03-23 13:54:47','admin','login','---','0','10013');");
E_D("replace into `phome_enewsdolog` values('261','113.76.32.6','2017-03-23 14:31:46','admin','EditPublicTemp','gid=1','0','9344');");
E_D("replace into `phome_enewsdolog` values('262','113.76.32.6','2017-03-23 14:32:03','admin','ReIndex','---','0','10352');");
E_D("replace into `phome_enewsdolog` values('263','113.76.32.6','2017-03-23 14:42:00','admin','EditPublicTemp','gid=1','0','10254');");
E_D("replace into `phome_enewsdolog` values('264','113.76.32.6','2017-03-23 14:42:25','admin','ReIndex','---','0','10776');");
E_D("replace into `phome_enewsdolog` values('265','113.76.32.6','2017-03-23 15:35:34','admin','login','---','0','9496');");
E_D("replace into `phome_enewsdolog` values('266','183.57.18.26','2017-03-23 15:49:14','hb01','login','---','0','51417');");
E_D("replace into `phome_enewsdolog` values('267','113.76.32.6','2017-03-23 16:19:38','admin','login','---','0','9662');");
E_D("replace into `phome_enewsdolog` values('268','113.76.32.6','2017-03-23 17:51:07','admin','EditPublicTemp','gid=1','0','10800');");
E_D("replace into `phome_enewsdolog` values('269','113.76.32.6','2017-03-23 17:51:11','admin','ReIndex','---','0','9297');");
E_D("replace into `phome_enewsdolog` values('270','113.76.32.6','2017-03-23 17:51:31','admin','ReIndex','---','0','9481');");
E_D("replace into `phome_enewsdolog` values('271','113.76.34.138','2017-03-24 09:11:36','admin','login','---','0','21946');");
E_D("replace into `phome_enewsdolog` values('272','113.76.34.138','2017-03-24 09:53:59','admin','EditPublicTemp','gid=1','0','23415');");
E_D("replace into `phome_enewsdolog` values('273','113.76.34.138','2017-03-24 09:54:07','admin','ReIndex','---','0','21543');");
E_D("replace into `phome_enewsdolog` values('274','183.57.18.26','2017-03-24 10:00:29','hb01','login','---','0','60342');");
E_D("replace into `phome_enewsdolog` values('275','113.76.34.138','2017-03-24 10:04:59','admin','EditGroup','groupid=2<br>groupname=华标编辑','0','22516');");
E_D("replace into `phome_enewsdolog` values('276','183.57.18.26','2017-03-24 10:23:04','hb01','EditClass','classid=1<br>classname=华标快讯','0','61554');");
E_D("replace into `phome_enewsdolog` values('277','183.57.18.26','2017-03-24 10:24:52','hb01','login','---','0','61690');");
E_D("replace into `phome_enewsdolog` values('278','183.57.18.26','2017-03-24 10:25:09','hb01','EditClass','classid=1<br>classname=华标快讯','0','61712');");
E_D("replace into `phome_enewsdolog` values('279','183.57.18.26','2017-03-24 10:25:16','hb01','ReListHtml','---','0','61718');");
E_D("replace into `phome_enewsdolog` values('280','183.57.18.26','2017-03-24 10:31:11','hb01','EditClass','classid=1<br>classname=华标快讯','0','62019');");
E_D("replace into `phome_enewsdolog` values('281','183.57.18.26','2017-03-24 10:31:43','hb01','EditClass','classid=1<br>classname=华标快讯','0','62051');");
E_D("replace into `phome_enewsdolog` values('282','183.57.18.26','2017-03-24 10:31:49','hb01','ReIndex','---','0','62055');");
E_D("replace into `phome_enewsdolog` values('283','183.57.18.26','2017-03-24 10:32:40','hb01','login','---','0','62097');");
E_D("replace into `phome_enewsdolog` values('284','183.57.18.26','2017-03-24 10:33:59','hb01','EditClass','classid=1<br>classname=华标快讯','0','62167');");
E_D("replace into `phome_enewsdolog` values('285','113.76.34.138','2017-03-24 10:38:36','admin','login','---','0','23464');");
E_D("replace into `phome_enewsdolog` values('286','113.76.34.138','2017-03-24 10:39:19','admin','AddUser','userid=5<br>username=soso','0','22081');");
E_D("replace into `phome_enewsdolog` values('287','113.76.34.138','2017-03-24 10:39:58','admin','EditGroup','groupid=2<br>groupname=华标编辑','0','22854');");
E_D("replace into `phome_enewsdolog` values('288','183.57.18.26','2017-03-24 10:41:05','hb01','ReListHtml','---','0','62403');");
E_D("replace into `phome_enewsdolog` values('289','113.76.34.138','2017-03-24 10:41:15','soso','login','---','0','21981');");
E_D("replace into `phome_enewsdolog` values('290','183.57.18.26','2017-03-24 10:41:24','hb01','TDelFile_all','---','0','62422');");
E_D("replace into `phome_enewsdolog` values('291','113.76.34.138','2017-03-24 10:41:26','soso','login','---','0','22260');");
E_D("replace into `phome_enewsdolog` values('292','113.76.34.138','2017-03-24 10:41:44','soso','login','---','0','22440');");
E_D("replace into `phome_enewsdolog` values('293','113.76.34.138','2017-03-24 10:41:58','admin','login','---','0','23418');");
E_D("replace into `phome_enewsdolog` values('294','113.76.34.138','2017-03-24 10:42:19','admin','login','---','0','23055');");
E_D("replace into `phome_enewsdolog` values('295','113.76.34.138','2017-03-24 10:42:54','admin','exit','---','0','23027');");
E_D("replace into `phome_enewsdolog` values('296','113.76.34.138','2017-03-24 10:43:03','soso','login','---','0','23383');");
E_D("replace into `phome_enewsdolog` values('297','113.76.34.138','2017-03-24 10:44:01','soso','login','---','0','23466');");
E_D("replace into `phome_enewsdolog` values('298','113.76.34.138','2017-03-24 11:47:17','hb02','login','---','0','21812');");
E_D("replace into `phome_enewsdolog` values('299','113.76.34.138','2017-03-24 11:47:27','hb02','exit','---','0','22010');");
E_D("replace into `phome_enewsdolog` values('300','113.76.34.138','2017-03-24 11:47:31','admin','login','---','0','22017');");
E_D("replace into `phome_enewsdolog` values('301','113.76.34.138','2017-03-24 11:47:53','admin','EditGroup','groupid=2<br>groupname=华标编辑','0','22509');");
E_D("replace into `phome_enewsdolog` values('302','183.57.18.26','2017-03-24 13:28:43','hb01','login','---','0','65224');");
E_D("replace into `phome_enewsdolog` values('303','183.57.18.26','2017-03-24 13:29:04','hb01','EditLink','lid=6<br>lname=深圳智慧建设','0','65250');");
E_D("replace into `phome_enewsdolog` values('304','183.57.18.26','2017-03-24 13:32:49','hb01','EditClass','classid=1<br>classname=华标快讯','0','65412');");
E_D("replace into `phome_enewsdolog` values('305','183.57.18.26','2017-03-24 13:33:09','hb01','ReListHtml','---','0','65449');");
E_D("replace into `phome_enewsdolog` values('306','113.76.32.216','2017-03-27 09:07:11','admin','login','---','0','1861');");
E_D("replace into `phome_enewsdolog` values('307','113.76.32.216','2017-03-28 09:10:04','admin','login','---','0','2864');");
E_D("replace into `phome_enewsdolog` values('308','113.76.32.216','2017-03-28 10:18:46','admin','login','---','0','2321');");

@include("../../inc/footer.php");
?>