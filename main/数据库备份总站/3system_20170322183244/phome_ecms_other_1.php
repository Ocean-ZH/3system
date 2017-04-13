<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_other`;");
E_C("CREATE TABLE `phome_ecms_other` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ttid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `plnum` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `totaldown` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `newspath` char(20) NOT NULL DEFAULT '',
  `filename` char(36) NOT NULL DEFAULT '',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` char(20) NOT NULL DEFAULT '',
  `firsttitle` tinyint(1) NOT NULL DEFAULT '0',
  `isgood` tinyint(1) NOT NULL DEFAULT '0',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `istop` tinyint(1) NOT NULL DEFAULT '0',
  `isqf` tinyint(1) NOT NULL DEFAULT '0',
  `ismember` tinyint(1) NOT NULL DEFAULT '0',
  `isurl` tinyint(1) NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userfen` smallint(5) unsigned NOT NULL DEFAULT '0',
  `titlefont` char(14) NOT NULL DEFAULT '',
  `titleurl` char(200) NOT NULL DEFAULT '',
  `stb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fstb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `restb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `keyboard` char(80) NOT NULL DEFAULT '',
  `title` char(100) NOT NULL DEFAULT '',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `titlepic` char(120) NOT NULL DEFAULT '',
  `bgimg` varchar(255) NOT NULL DEFAULT '',
  `websitelink` varchar(240) NOT NULL DEFAULT '',
  `mimg` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`),
  KEY `useridis` (`userid`,`ismember`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_other` values('1','3','0','0','0','0','','1','1','admin','1','0','1','0','0','0','0','1490078666','1490178020','1','0','0','','/other/1.html','1','1','1','','商业模式规划、平台设计开发、平台运营咨询解决方案提供商','1490078609','/d/file/other/1ac55c98939a4cee8f728b9f0d54890d.png','/d/file/other/2411ac78deb749bb49af90520a4d36ee.jpg','http://3e.3system.cn','/d/file/other/6315b8de680b4e327ec9f2d0a10b52f0.jpg');");
E_D("replace into `phome_ecms_other` values('2','3','0','0','0','0','','2','1','admin','2','0','1','0','0','0','0','1490078754','1490161531','1','0','0','','/other/2.html','1','1','1','','深度、接地气、互联网思维新一代3S-ERP系统','1490078671','/d/file/other/f71678c09cc082b25b2a45219726a5d4.png','/d/file/other/4592aa6999c5ec2b0b62bb09c2179fd4.jpg','http://3e.3system.cn','/d/file/other/976b287f4a6d0dcd4d49693b935acb74.jpg');");
E_D("replace into `phome_ecms_other` values('3','3','0','0','0','0','','3','2','hb01','3','0','1','0','0','0','0','1490086281','1490154633','1','0','0','','/other/3.html','1','1','1','','品牌运营及分销管理平台、新零售解决方案','1490086105','/d/file/other/f9160235ebf38dd196791dee988e6c8c.png','/d/file/other/eb5e5b85668d646e0048384657027f22.jpg','','/d/file/other/49a146c2e8cf35a609dd292777bd278b.jpg');");
E_D("replace into `phome_ecms_other` values('4','3','0','0','0','0','','4','2','hb01','4','0','1','0','0','0','0','1490086769','1490178310','1','0','0','','/other/4.html','1','1','1','','工业4.0智能制造','1490086527','/d/file/other/7789e14281c105e6cfc2c4d4000f53dd.png','/d/file/other/cd8635559e9af0967d4865d3efb6ff25.jpg','http://thingyfy.com','/d/file/other/9316f7c45db9c64c5ae020dbcf2cbba4.jpg');");
E_D("replace into `phome_ecms_other` values('5','3','0','0','0','0','','5','2','hb01','5','0','1','0','0','0','0','1490087221','1490175080','1','0','0','','/other/5.html','1','1','1','','华标软件生态链   伙伴招募计划','1490086995','/d/file/other/478b7b3ab9a8886599cc2ea479b907ec.png','/d/file/other/bd0cc025aff9702cb02f1f0626eb499b.jpg','','/d/file/other/e21a95465356ad09053a0bc1ee3d9732.jpg');");

@include("../../inc/footer.php");
?>