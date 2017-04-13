<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewslink`;");
E_C("CREATE TABLE `phome_enewslink` (
  `lid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `lname` varchar(100) NOT NULL DEFAULT '',
  `lpic` varchar(255) NOT NULL DEFAULT '',
  `lurl` varchar(255) NOT NULL DEFAULT '',
  `ltime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `width` varchar(10) NOT NULL DEFAULT '',
  `height` varchar(10) NOT NULL DEFAULT '',
  `target` varchar(10) NOT NULL DEFAULT '',
  `myorder` tinyint(4) NOT NULL DEFAULT '0',
  `email` varchar(60) NOT NULL DEFAULT '',
  `lsay` text NOT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `ltype` smallint(6) NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`lid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewslink` values('1','罗西尼表业','','http://www.rossini.com.cn/','2017-03-21 17:13:05','0','88','31','_blank','0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('2','华美化工建材','','http://www.hbhuamei.com/','2017-03-21 17:14:29','0','88','31','_blank','0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('3','润丰机电','','http://runfeng66.jdol.com.cn/','2017-03-21 17:14:42','0','88','31','_blank','0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('4','盛威电子','','http://szswxf.dzsc.com/','2017-03-21 17:14:54','0','88','31','_blank','0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('5','深华消防','','http://www.gdsh119.com/','2017-03-21 17:15:11','0','88','31','_blank','0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('6','深证智慧建设','','http://www.zhihuijianshe.com/col.jsp?id=104','2017-03-21 17:15:23','0','88','31','_blank','0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('7','旭日陶瓷(白兔瓷砖)','','http://www.baitu.cc/','2017-03-21 17:15:39','0','88','31','_blank','0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('8','Cartridge World','','http://www.cartridgeworldmiddleton.com/','2017-03-21 17:15:52','0','88','31','_blank','0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('9','新意范智能建造','','http://thingyfy.com','2017-03-21 17:16:37','0','88','31','_blank','0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('10','友元办公联盟','','http://q6080933.cn.tonbao.com/','2017-03-21 17:16:57','0','88','31','_blank','0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('11','河南金爵智能科技','','http://www.jinjuewatch.com/','2017-03-21 17:17:06','0','88','31','_blank','0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('12','河南力之星','','http://www.hnlzx.cn/','2017-03-21 17:17:16','0','88','31','_blank','0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('13','珠海广金厨具','','http://10005070256.ce.c-c.com/','2017-03-21 17:17:27','0','88','31','_blank','0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('14','福东饮食','','http://16403146.1024sj.com/','2017-03-21 17:17:37','0','88','31','_blank','0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('15','华为云','','http://www.hicloud.com/','2017-03-21 17:17:49','0','88','31','_blank','0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('16','阿里云','','https://www.aliyun.com/','2017-03-21 17:17:57','0','88','31','_blank','0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('17','腾讯','','https://www.tencent.com/zh-cn/index.html','2017-03-21 17:18:07','0','88','31','_blank','0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('18','百度','','https://www.baidu.com/','2017-03-21 17:18:16','0','88','31','_blank','0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('19','新浪','','http://www.sina.com.cn/','2017-03-21 17:18:26','0','88','31','_blank','0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('20','搜狐','','http://www.sohu.com/','2017-03-21 17:18:36','0','88','31','_blank','0','','','1','0','0');");

@include("../../inc/footer.php");
?>