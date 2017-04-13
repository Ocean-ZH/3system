<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_banner`;");
E_C("CREATE TABLE `phome_ecms_banner` (
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
  `alink` varchar(120) NOT NULL DEFAULT '',
  `mimg` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`),
  KEY `useridis` (`userid`,`ismember`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_banner` values('2','2','0','0','0','0','','2','1','admin','0','0','1','0','0','0','0','1490078358','1490078415','1','0','0','','/e/action/ShowInfo/?classid=2&id=2','1','1','1','','华标，只关注经营管理那点事2','1490077164','/d/file/banner/2017-03-21/323ef5ef6bc170008401ae7558618a0c.jpg','','/d/file/banner/2017-03-21/740e94eed7bb990d1b0726ba2b3846bf.jpg');");
E_D("replace into `phome_ecms_banner` values('1','2','0','0','0','0','','1','1','admin','0','0','1','0','0','0','0','1490077218','1490078402','1','0','0','','/e/action/ShowInfo/?classid=2&id=1','1','1','1','','华标，只关注经营管理那点事3','1490077162','/d/file/banner/2017-03-21/323ef5ef6bc170008401ae7558618a0c.jpg','','/d/file/banner/2017-03-21/740e94eed7bb990d1b0726ba2b3846bf.jpg');");
E_D("replace into `phome_ecms_banner` values('3','2','0','0','0','0','','3','1','admin','1','0','1','0','0','0','0','1490078366','1490174564','1','0','0','','/e/action/ShowInfo/?classid=2&id=3','1','1','1','','华标，聚焦经营管理平台及互联网+','1490077165','/d/file/banner/2694a04a76502012b9c4244adb7cee6e.jpg','','/d/file/banner/b81b32cc9d70e6f0a6c505c519cb8958.jpg');");

@include("../../inc/footer.php");
?>