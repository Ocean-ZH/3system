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
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8");
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
E_D("replace into `phome_enewslog` values('22','hb01','2017-03-23 09:43:15','183.57.18.26','1','','0','54002');");
E_D("replace into `phome_enewslog` values('23','admin','2017-03-23 13:54:47','113.76.32.6','1','','0','10013');");
E_D("replace into `phome_enewslog` values('24','admin','2017-03-23 15:35:34','113.76.32.6','1','','0','9496');");
E_D("replace into `phome_enewslog` values('25','hb01','2017-03-23 15:49:14','183.57.18.26','1','','0','51417');");
E_D("replace into `phome_enewslog` values('26','admin','2017-03-23 16:19:38','113.76.32.6','1','','0','9662');");
E_D("replace into `phome_enewslog` values('27','admin','2017-03-24 09:11:32','113.76.34.138','0','','0','21796');");
E_D("replace into `phome_enewslog` values('28','admin','2017-03-24 09:11:36','113.76.34.138','1','','0','21946');");
E_D("replace into `phome_enewslog` values('29','hb01','2017-03-24 10:00:29','183.57.18.26','1','','0','60342');");
E_D("replace into `phome_enewslog` values('30','hb01','2017-03-24 10:24:52','183.57.18.26','1','','0','61690');");
E_D("replace into `phome_enewslog` values('31','hb01','2017-03-24 10:32:40','183.57.18.26','1','','0','62097');");
E_D("replace into `phome_enewslog` values('32','soso','2017-03-24 10:38:09','113.76.34.138','0','','0','22047');");
E_D("replace into `phome_enewslog` values('33','soso','2017-03-24 10:38:20','113.76.34.138','0','','0','23386');");
E_D("replace into `phome_enewslog` values('34','soso','2017-03-24 10:38:32','113.76.34.138','0','','0','22292');");
E_D("replace into `phome_enewslog` values('35','admin','2017-03-24 10:38:36','113.76.34.138','1','','0','23464');");
E_D("replace into `phome_enewslog` values('36','soso','2017-03-24 10:41:15','113.76.34.138','1','','0','21981');");
E_D("replace into `phome_enewslog` values('37','soso','2017-03-24 10:41:26','113.76.34.138','1','','0','22260');");
E_D("replace into `phome_enewslog` values('38','soso','2017-03-24 10:41:44','113.76.34.138','1','','0','22440');");
E_D("replace into `phome_enewslog` values('39','admin','2017-03-24 10:41:58','113.76.34.138','1','','0','23418');");
E_D("replace into `phome_enewslog` values('40','admin','2017-03-24 10:42:19','113.76.34.138','1','','0','23055');");
E_D("replace into `phome_enewslog` values('41','soso','2017-03-24 10:43:03','113.76.34.138','1','','0','23383');");
E_D("replace into `phome_enewslog` values('42','soso','2017-03-24 10:44:01','113.76.34.138','1','','0','23466');");
E_D("replace into `phome_enewslog` values('43','hb02','2017-03-24 11:47:17','113.76.34.138','1','','0','21812');");
E_D("replace into `phome_enewslog` values('44','admin','2017-03-24 11:47:31','113.76.34.138','1','','0','22017');");
E_D("replace into `phome_enewslog` values('45','hb01','2017-03-24 13:28:43','183.57.18.26','1','','0','65224');");
E_D("replace into `phome_enewslog` values('46','admin','2017-03-27 09:07:11','113.76.32.216','1','','0','1861');");
E_D("replace into `phome_enewslog` values('47','admin','2017-03-28 09:10:04','113.76.32.216','1','','0','2864');");
E_D("replace into `phome_enewslog` values('48','admin','2017-03-28 10:18:46','113.76.32.216','1','','0','2321');");

@include("../../inc/footer.php");
?>