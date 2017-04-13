<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsuser`;");
E_C("CREATE TABLE `phome_enewsuser` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `rnd` varchar(20) NOT NULL DEFAULT '',
  `adminclass` mediumtext NOT NULL,
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `styleid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `filelevel` tinyint(1) NOT NULL DEFAULT '0',
  `salt` varchar(8) NOT NULL DEFAULT '',
  `loginnum` int(10) unsigned NOT NULL DEFAULT '0',
  `lasttime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastip` varchar(20) NOT NULL DEFAULT '',
  `truename` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(120) NOT NULL DEFAULT '',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pretime` int(10) unsigned NOT NULL DEFAULT '0',
  `preip` varchar(20) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `addip` varchar(20) NOT NULL DEFAULT '',
  `userprikey` varchar(50) NOT NULL DEFAULT '',
  `salt2` varchar(20) NOT NULL DEFAULT '',
  `lastipport` varchar(6) NOT NULL DEFAULT '',
  `preipport` varchar(6) NOT NULL DEFAULT '',
  `addipport` varchar(6) NOT NULL DEFAULT '',
  `uprnd` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsuser` values('1','admin','62b08505fa63c30f18c1fabdacb52bcc','7eqAL94gCJAfkD491TLR','','1','0','1','0','iShw59Q5','27','1490667526','113.76.32.216','','','0','1490663404','113.76.32.216','1490075798','127.0.0.1','V5sy5ZCORaHH1jyycUfMdw2tnljn01mnvcbmySqzIlE6nkBq','jF2fdwWdAhDXCvB28fIt','2321','2864','53387','');");
E_D("replace into `phome_enewsuser` values('2','hb01','3d522a6ede0b85ac6700cbea9d05754d','Ov48FQNtWHMod3II4Rlr','|','2','0','1','0','L9jrxlK3','9','1490333323','183.57.18.26','','','0','1490322760','183.57.18.26','1490084514','113.76.34.155','PHfXt2m69SxwjYOsB26oOukabQGP9TQUEUczrIsWJ9HIRyaE','Y2wUgHf2yuqTsLZeROcg','65224','62097','1054','');");
E_D("replace into `phome_enewsuser` values('3','hb02','e175d4d0d8e559b64924173884382292','rT0HWi1s2fm7B58cxFFl','|','2','0','1','0','LHhAL1fO','3','1490327237','113.76.34.138','','','0','1490085031','113.76.34.155','1490084532','113.76.34.155','3vKSEwo951uwW1OAgRwNIRwxx6deZGxdW3R69uFJbnPQQMOJ','slBqbClgPEGEgULqIykx','21812','2422','1859','');");
E_D("replace into `phome_enewsuser` values('4','hb03','8bff42d3c281f3dca71ac55b704f7588','aHucN3MvcfG0izmKkw3C','|','2','0','1','0','EUr3slGg','0','0','','','','0','0','','1490084546','113.76.34.155','SMStBW36g6FeD1AuTcqzJRP3FO4pfOGiENRGG8ywxsUXBHGu','xBFr36dg4fev0SDXIOT0','3006','3006','3006','');");
E_D("replace into `phome_enewsuser` values('5','soso','8231681ba9d17ac2699efa678a116115','1fLWzr2617gEZb976A5Y','|','1','0','1','0','S53CxXrA','5','1490323441','113.76.34.138','','','0','1490323383','113.76.34.138','1490323159','113.76.34.138','F9AcLNOao8ceAoTG91c0EBO6nTm7qx8uogiIu7M9bFQdX8wb','d3Smg0aOON0Bhbr0ldPH','23466','23383','22081','');");

@include("../../inc/footer.php");
?>