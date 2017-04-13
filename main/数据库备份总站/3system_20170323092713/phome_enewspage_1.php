<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewspage`;");
E_C("CREATE TABLE `phome_enewspage` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(120) NOT NULL DEFAULT '',
  `pagetext` mediumtext NOT NULL,
  `path` varchar(255) NOT NULL DEFAULT '',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pagetitle` varchar(120) NOT NULL DEFAULT '',
  `pagekeywords` varchar(255) NOT NULL DEFAULT '',
  `pagedescription` varchar(255) NOT NULL DEFAULT '',
  `tempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewspage` values('1','1','<!DOCTYPE html>\r\n<html lang=\\\\\"zh_CN\\\\\">\r\n<head>\r\n    <meta charset=\\\\\"UTF-8\\\\\" />\r\n    <meta name=\\\\\"renderer\\\\\" content=\\\\\"webkit\\\\\">\r\n    <meta http-equiv=\\\\\"X-UA-Compatible\\\\\" content=\\\\\"IE=edge\\\\\">\r\n    <meta name=\\\\\"viewport\\\\\" content=\\\\\"width=device-width, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0\\\\\"/>\r\n    <meta name=\\\\\"screen-orientation\\\\\" content=\\\\\"portrait\\\\\">\r\n    <meta name=\\\\\"x5-orientation\\\\\" content=\\\\\"portrait\\\\\">\r\n    <title>华标总站首页</title>\r\n    <link rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" href=\\\\\"[!--news.url--]css/jquery.fullPage.css\\\\\" />\r\n    <link rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" href=\\\\\"[!--news.url--]css/public.css\\\\\" />\r\n    <link rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" href=\\\\\"[!--news.url--]css/index.css\\\\\" />\r\n    <script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]js/jquery-3.1.1.min.js\\\\\"></script>\r\n    <script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]js/jquery.fullPage.min.js\\\\\"></script>\r\n    <script src=\\\\\"[!--news.url--]js/hammer.min.js\\\\\" type=\\\\\"text/javascript\\\\\"></script>\r\n    <script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]js/public.js\\\\\"></script>\r\n    <script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]js/index.js\\\\\"></script>\r\n</head>\r\n<body >\r\n[!--temp.header--]\r\n<div id=\\\\\"fp-box\\\\\" >     \r\n        <div class=\\\\\"section page1 \\\\\">\r\n            [ecmsinfo]2,1,64,0,0,18,0[/ecmsinfo]\r\n            <!-- <ol>\r\n                <li><a href=\\\\\"javascript:void(null)\\\\\"></a></li>\r\n                <li><a href=\\\\\"javascript:void(null)\\\\\"></a></li>\r\n                <li><a href=\\\\\"javascript:void(null)\\\\\"></a></li>\r\n            </ol> -->\r\n        </div>\r\n        <div class=\\\\\"section page2\\\\\">[ecmsinfo]3,1,64,0,0,15,0,\\\\''firsttitle=1\\\\''[/ecmsinfo]</div>\r\n        <div class=\\\\\"section page3\\\\\">[ecmsinfo]3,1,64,0,0,14,0,\\\\''firsttitle=2\\\\''[/ecmsinfo]</div>\r\n        <div class=\\\\\"section page4\\\\\">[ecmsinfo]3,1,64,0,0,15,0,\\\\''firsttitle=3\\\\''[/ecmsinfo]</div>\r\n        <div class=\\\\\"section page5\\\\\">[ecmsinfo]3,1,64,0,0,14,0,\\\\''firsttitle=4\\\\''[/ecmsinfo]</div>\r\n        <div class=\\\\\"section page6\\\\\">[ecmsinfo]3,1,64,0,0,14,0,\\\\''firsttitle=5\\\\''[/ecmsinfo]</div>\r\n        <div class=\\\\\"section fp-auto-height page10\\\\\" >\r\n            <div class=\\\\\"contact-box\\\\\">\r\n                <h4><img src=\\\\\"[!--news.url--]images/contact-tel.gif\\\\\" alt=\\\\\"\\\\\" />&nbsp;0756-3311299</h4>\r\n                <h4><img src=\\\\\"[!--news.url--]images/contact-email.gif\\\\\" alt=\\\\\"\\\\\" />&nbsp;sales@3Sysytem.cn</h4>\r\n                <div class=\\\\\"locate-mark\\\\\"><img src=\\\\\"[!--news.url--]images/locate-mark.png\\\\\" alt=\\\\\"\\\\\" /></div>\r\n                <p>广东省珠海市高新区唐家港乐路大洲科技园二期8楼华标软件总部基地</p>\r\n                <div class=\\\\\"p10-qr\\\\\"><img src=\\\\\"[!--news.url--]images/footer-qrcode.jpg\\\\\" alt=\\\\\"\\\\\" /></div>\r\n            </div>           \r\n        </div>\r\n\r\n<div class=\\\\\"section fp-auto-height page11\\\\\">\r\n            <div class=\\\\\"map-box clearboth\\\\\" id=\\\\\"map-box\\\\\">\r\n                <div id=\\\\\"map\\\\\"></div>\r\n                <div id=\\\\\"mapstop\\\\\"></div>\r\n            </div>\r\n     [!--temp.footer--]\r\n</div>\r\n</div>\r\n\r\n</body>\r\n</html>','../../page.html','0','','','','0');");

@include("../../inc/footer.php");
?>