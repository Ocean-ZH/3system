<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_infoclass_other`;");
E_C("CREATE TABLE `phome_ecms_infoclass_other` (
  `classid` int(10) unsigned NOT NULL DEFAULT '0',
  `zz_title` text NOT NULL,
  `z_title` varchar(255) NOT NULL DEFAULT '',
  `qz_title` varchar(255) NOT NULL DEFAULT '',
  `save_title` varchar(10) NOT NULL DEFAULT '',
  `zz_titlepic` text NOT NULL,
  `z_titlepic` varchar(255) NOT NULL DEFAULT '',
  `qz_titlepic` varchar(255) NOT NULL DEFAULT '',
  `save_titlepic` varchar(10) NOT NULL DEFAULT '',
  `zz_newstime` text NOT NULL,
  `z_newstime` varchar(255) NOT NULL DEFAULT '',
  `qz_newstime` varchar(255) NOT NULL DEFAULT '',
  `save_newstime` varchar(10) NOT NULL DEFAULT '',
  `zz_bgimg` text NOT NULL,
  `z_bgimg` varchar(255) NOT NULL,
  `qz_bgimg` varchar(255) NOT NULL,
  `save_bgimg` varchar(10) NOT NULL,
  `zz_websitelink` text NOT NULL,
  `z_websitelink` varchar(255) NOT NULL,
  `qz_websitelink` varchar(255) NOT NULL,
  `save_websitelink` varchar(10) NOT NULL,
  `zz_mimg` text NOT NULL,
  `z_mimg` varchar(255) NOT NULL,
  `qz_mimg` varchar(255) NOT NULL,
  `save_mimg` varchar(10) NOT NULL,
  `zz_title2` text NOT NULL,
  `z_title2` varchar(255) NOT NULL,
  `qz_title2` varchar(255) NOT NULL,
  `save_title2` varchar(10) NOT NULL,
  `zz_titles` text NOT NULL,
  `z_titles` varchar(255) NOT NULL,
  `qz_titles` varchar(255) NOT NULL,
  `save_titles` varchar(10) NOT NULL,
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>