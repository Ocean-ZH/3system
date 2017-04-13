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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsuserloginck` values('1','9ae02e3fa37a06684184b49ec337a95f');");
E_D("replace into `phome_enewsuserloginck` values('2','96fb1316a1608d30e4be6104bac428b0');");
E_D("replace into `phome_enewsuserloginck` values('5','a9cb1a00c0bd078e50a72b82aec62df4');");

@include("../../inc/footer.php");
?>