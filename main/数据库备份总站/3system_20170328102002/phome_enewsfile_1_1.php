<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsfile_1`;");
E_C("CREATE TABLE `phome_enewsfile_1` (
  `fileid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` bigint(16) unsigned NOT NULL DEFAULT '0',
  `filename` char(60) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `path` char(20) NOT NULL DEFAULT '',
  `adduser` char(30) NOT NULL DEFAULT '',
  `filetime` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `no` char(60) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `onclick` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `cjid` int(10) unsigned NOT NULL DEFAULT '0',
  `fpath` tinyint(1) NOT NULL DEFAULT '0',
  `modtype` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `classid` (`classid`),
  KEY `pubid` (`pubid`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsfile_1` values('1','1000090000000001','323ef5ef6bc170008401ae7558618a0c.jpg','165669','2017-03-21','admin','1490077199','2','p1-bg1.jpg','1','0','1','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('2','1000090000000001','740e94eed7bb990d1b0726ba2b3846bf.jpg','83277','2017-03-21','admin','1490077212','2','p1-bg1-m.jpg','1','0','1','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('3','1000100000000001','a07f2a2d95c026804ec52c1aba034149.png','7271','','admin','1490078634','3','p2-logo.png','1','0','1','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('4','1000100000000001','9df9b1c6a1b7bc19cd67a427dd9a0ff4.jpg','92363','','admin','1490078650','3','p2-bg1.jpg','1','0','1','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('5','1000100000000001','5f4a8adde9248ed41f6a1f14bdd46c0d.jpg','47808','','admin','1490078662','3','p2-bg1-m.jpg','1','0','1','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('6','1000100000000002','4ffb6740353427af45c5231ccf72026f.png','7411','','admin','1490078723','3','p3-logo.png','1','0','2','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('7','1000100000000002','77687e6a1a6e3ac62f2d602de3965abd.jpg','110491','','admin','1490078738','3','p3-bg1.jpg','1','0','2','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('8','1000100000000002','b9a755f56729f38dead9e2fdeffb1faf.jpg','67495','','admin','1490078749','3','p3-bg1-m.jpg','1','0','2','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('9','1000100000000003','f9160235ebf38dd196791dee988e6c8c.png','8294','','hb01','1490086243','3','p4-logo.png','1','0','3','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('10','1000100000000003','eb5e5b85668d646e0048384657027f22.jpg','613326','','hb01','1490086260','3','p4-bg1.jpg','1','0','3','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('11','1000100000000003','49a146c2e8cf35a609dd292777bd278b.jpg','169102','','hb01','1490086277','3','p4-bg1-m.jpg','1','0','3','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('12','1000100000000004','7789e14281c105e6cfc2c4d4000f53dd.png','4411','','hb01','1490086627','3','p5-logo.png','1','0','4','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('13','1000100000000004','cd8635559e9af0967d4865d3efb6ff25.jpg','197191','','hb01','1490086641','3','p5-bg1.jpg','1','0','4','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('14','1000100000000004','9316f7c45db9c64c5ae020dbcf2cbba4.jpg','102651','','hb01','1490086658','3','p5-bg1-m.jpg','1','0','4','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('15','0','7d1e7397919090fcef25e89fa12f7bd9.jpg','549569','','hb01','1490086977','3','p6-bg1.jpg','1','0','1490086917','1490086917','0','0');");
E_D("replace into `phome_enewsfile_1` values('16','0','5b4fb1d7e5b08302424fc716029666f4.jpg','89778','','hb01','1490086989','3','p6-bg1-m.jpg','1','0','1490086917','1490086917','0','0');");
E_D("replace into `phome_enewsfile_1` values('17','1000100000000005','478b7b3ab9a8886599cc2ea479b907ec.png','3270','','hb01','1490087182','3','透明.png','1','0','5','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('18','1000100000000005','bd0cc025aff9702cb02f1f0626eb499b.jpg','549569','','hb01','1490087202','3','p6-bg1.jpg','1','0','5','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('31','1000100000000005','e21a95465356ad09053a0bc1ee3d9732.jpg','41935','','admin','1490175077','3','p6-bg1-m.jpg','1','0','5','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('29','1000090000000003','2694a04a76502012b9c4244adb7cee6e.jpg','103853','','admin','1490174396','2','p1-bg1.jpg','1','0','3','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('30','1000090000000003','b81b32cc9d70e6f0a6c505c519cb8958.jpg','54436','','admin','1490174425','2','p1-bg1-m.jpg','1','0','3','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('22','1000100000000001','2411ac78deb749bb49af90520a4d36ee.jpg','110491','','hb01','1490161341','3','p3-bg1.jpg','1','0','1','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('23','1000100000000001','1ac55c98939a4cee8f728b9f0d54890d.png','7411','','hb01','1490161375','3','p3-logo.png','1','0','1','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('24','1000100000000001','6315b8de680b4e327ec9f2d0a10b52f0.jpg','67495','','hb01','1490161401','3','p3-bg1-m.jpg','1','0','1','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('25','1000100000000002','f71678c09cc082b25b2a45219726a5d4.png','7271','','hb01','1490161464','3','p2-logo.png','1','0','2','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('26','1000100000000002','4592aa6999c5ec2b0b62bb09c2179fd4.jpg','92363','','hb01','1490161483','3','p2-bg1.jpg','1','0','2','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('27','1000100000000002','976b287f4a6d0dcd4d49693b935acb74.jpg','47808','','hb01','1490161495','3','p2-bg1-m.jpg','1','0','2','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('28','1000100000000005','eccfabad8d44fe41bd704ecf3859dac5.jpg','53948','','hb01','1490165239','3','1.jpg','1','0','5','0','0','0');");

@include("../../inc/footer.php");
?>