<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewslog`;");
E_C("CREATE TABLE `phome_enewslog` (
  `loginid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL DEFAULT '',
  `loginauth` tinyint(1) NOT NULL DEFAULT '0',
  `ipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`loginid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewslog` values('1','admin','2017-03-21 13:56:59','127.0.0.1','1','','0','53416');");
E_D("replace into `phome_enewslog` values('2','admin','2017-03-21 16:19:22','113.76.34.155','1','','0','1358');");
E_D("replace into `phome_enewslog` values('3','hb02','2017-03-21 16:23:11','113.76.34.155','1','','0','2501');");
E_D("replace into `phome_enewslog` values('4','hb02','2017-03-21 16:30:31','113.76.34.155','1','','0','2422');");
E_D("replace into `phome_enewslog` values('5','hb01','2017-03-21 16:37:26','183.57.18.26','1','','0','56833');");
E_D("replace into `phome_enewslog` values('6','admin','2017-03-21 16:49:30','113.76.34.155','1','','0','2422');");
E_D("replace into `phome_enewslog` values('7','admin','2017-03-21 17:21:36','113.76.34.155','1','','0','3003');");
E_D("replace into `phome_enewslog` values('8','admin','2017-03-22 09:10:08','113.76.33.183','1','','0','2927');");
E_D("replace into `phome_enewslog` values('9','hb01','2017-03-22 09:28:08','183.57.18.26','1','','0','63393');");
E_D("replace into `phome_enewslog` values('10','admin','2017-03-22 10:30:04','113.76.33.183','1','','0','1522');");
E_D("replace into `phome_enewslog` values('11','admin','2017-03-22 10:30:18','113.76.33.183','1','','0','2543');");
E_D("replace into `phome_enewslog` values('12','admin','2017-03-22 11:26:14','113.76.33.183','1','','0','1962');");
E_D("replace into `phome_enewslog` values('13','hb01','2017-03-22 13:36:10','183.57.18.26','1','','0','54338');");
E_D("replace into `phome_enewslog` values('14','admin','2017-03-22 13:39:32','113.76.33.183','1','','0','2810');");
E_D("replace into `phome_enewslog` values('15','admin','2017-03-22 14:00:24','113.76.33.183','1','','0','2436');");
E_D("replace into `phome_enewslog` values('16','admin','2017-03-23 00:30:54','218.13.216.67','1','','0','1636');");
E_D("replace into `phome_enewslog` values('17','admin','2017-03-23 00:51:29','218.13.216.67','1','','0','12519');");
E_D("replace into `phome_enewslog` values('18','admin','2017-03-23 00:53:27','218.13.216.67','1','','0','14961');");
E_D("replace into `phome_enewslog` values('19','admin','2017-03-23 01:05:04','218.13.216.67','1','','0','10208');");
E_D("replace into `phome_enewslog` values('20','admin','2017-03-23 09:05:36','113.76.32.6','1','','0','10425');");
E_D("replace into `phome_enewslog` values('21','admin','2017-03-23 09:15:34','113.76.32.6','1','','0','10632');");

@include("../../inc/footer.php");
?>