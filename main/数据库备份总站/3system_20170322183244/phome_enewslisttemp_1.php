<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewslisttemp`;");
E_C("CREATE TABLE `phome_enewslisttemp` (
  `tempid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tempname` varchar(60) NOT NULL DEFAULT '',
  `temptext` mediumtext NOT NULL,
  `subnews` smallint(6) NOT NULL DEFAULT '0',
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  `listvar` text NOT NULL,
  `rownum` smallint(6) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `showdate` varchar(50) NOT NULL DEFAULT '',
  `subtitle` smallint(6) NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `docode` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tempid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewslisttemp` values('1','默认新闻列表模板','<!DOCTYPE html>\r\n<html lang=\\\\\"zh_CN\\\\\">\r\n<head>\r\n    <meta charset=\\\\\"UTF-8\\\\\" />\r\n    <meta name=\\\\\"renderer\\\\\" content=\\\\\"webkit\\\\\">\r\n    <meta http-equiv=\\\\\"X-UA-Compatible\\\\\" content=\\\\\"IE=edge\\\\\">\r\n    <meta name=\\\\\"viewport\\\\\" content=\\\\\"width=device-width, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0\\\\\"/>\r\n    <title>[!--class.name--]</title>\r\n    <link rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" href=\\\\\"[!--news.url--]css/public.css\\\\\" />\r\n    <link rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" href=\\\\\"[!--news.url--]css/list.css\\\\\" />\r\n    <script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]js/jquery-3.1.1.min.js\\\\\"></script>\r\n    <script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]js/public.js\\\\\"></script>\r\n    <script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]js/list.js\\\\\"></script>\r\n</head>\r\n<body >\r\n[!--temp.header--]\r\n<script type=\\\\\"text/javascript\\\\\">\r\n\$(document).ready(function(){\r\n        var winW=document.documentElement.clientWidth;\r\n        if(winW<1024){\r\n            \$(\\\\''.banner-box-540\\\\'').css({\\\\''background\\\\'':\\\\\"#000 url(\\\\''<?=ReturnClassAddField(0,\\\\''mbimg\\\\'') ?>\\\\'') no-repeat center center\\\\\",\\\\\"background-size\\\\\":\\\\\"cover\\\\\"});\r\n        }else{\r\n            \$(\\\\''.banner-box-540\\\\'').css({\\\\''background\\\\'':\\\\\"#000 url(\\\\''[!--class.classimg--]\\\\'') no-repeat center center\\\\\"});\r\n        }\r\n});\r\n</script>\r\n<div class=\\\\\"banner-box-540\\\\\"></div>\r\n<div class=\\\\\"main-box clearboth\\\\\">\r\n        <div class=\\\\\"list-btn\\\\\">\r\n            <a href=\\\\\"javascript:void(null)\\\\\"  class=\\\\\"current\\\\\">最新</a>\r\n            <a href=\\\\\"javascript:void(null)\\\\\">最热</a>\r\n        </div>\r\n       <ul class=\\\\\"clearboth  current\\\\\">[!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]</ul>\r\n       <ul class=\\\\\"clearboth\\\\\">[ecmsinfo]\\\\''selfinfo\\\\'',12,64,0,1,20,0[/ecmsinfo]</ul>\r\n       <div class=\\\\\"read-more\\\\\" style=\\\\\"display:none;\\\\\">查看更多&gt;&gt;</div>\r\n         <div class=\\\\\"listpage\\\\\" > [!--show.listpage--] </div>\r\n</div><!-- main box -->      \r\n[!--temp.footer--]\r\n</body>\r\n</html>\r\n','0','0','<li>\r\n                <dl>\r\n                    <dt><a href=\\\\\"[!--titleurl--]\\\\\"><img src=\\\\\"[!--titlepic--]\\\\\" alt=\\\\\"\\\\\" /></a></dt>\r\n                    <dd>\r\n                        <div class=\\\\\"list-up\\\\\">\r\n                            <h3><a href=\\\\\"[!--titleurl--]\\\\\">[!--title--]</a></h3>\r\n                            <div class=\\\\\"list-up-btn\\\\\">\r\n                                <a href=\\\\\"javascript:void(null)\\\\\"><img src=\\\\\"[!--news.url--]images/list/share.gif\\\\\" alt=\\\\\"\\\\\" /></a>\r\n                                <img src=\\\\\"[!--news.url--]images/list/views.gif\\\\\" alt=\\\\\"\\\\\" />\r\n                                <div class=\\\\\"bdsharebuttonbox\\\\\">\r\n                                    <a href=\\\\\"#\\\\\" class=\\\\\"bds_tsina\\\\\" data-cmd=\\\\\"tsina\\\\\" title=\\\\\"分享到新浪微博\\\\\"></a>\r\n                                    <a href=\\\\\"#\\\\\" class=\\\\\"bds_weixin\\\\\" data-cmd=\\\\\"weixin\\\\\" title=\\\\\"分享到微信\\\\\"></a>\r\n                                </div>\r\n                                <span>[!--onclick--]</span>\r\n                            </div>\r\n                        </div>\r\n                        <p>[!--smalltext--]</p>\r\n                    </dd>\r\n                </dl>\r\n            </li>','1','1','Y-m-d','0','0','0');");

@include("../../inc/footer.php");
?>