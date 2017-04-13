<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_other_index`;");
E_C("CREATE TABLE `phome_ecms_other_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_other_index` values('1','3','1','1490078609','1490078666','1490178020','1');");
E_D("replace into `phome_ecms_other_index` values('2','3','1','1490078671','1490078754','1490161531','1');");
E_D("replace into `phome_ecms_other_index` values('3','3','1','1490086105','1490086281','1490154633','1');");
E_D("replace into `phome_ecms_other_index` values('4','3','1','1490086527','1490086769','1490178310','1');");
E_D("replace into `phome_ecms_other_index` values('5','3','1','1490086995','1490087221','1490175080','1');");

@include("../../inc/footer.php");
?>