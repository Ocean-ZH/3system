<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsuserloginck`;");
E_C("CREATE TABLE `phome_enewsuserloginck` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `andauth` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsuserloginck` values('1','c0ad33143d2241d114b0d30fa2e0e6fd');");
E_D("replace into `phome_enewsuserloginck` values('3','d79ac0e749a15d6fcc8b320d65d52a3c');");
E_D("replace into `phome_enewsuserloginck` values('2','102b53f5eace9cb6aeb04daf4702e0b6');");

@include("../../inc/footer.php");
?>