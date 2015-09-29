<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_friend_link`;");
E_C("CREATE TABLE `ecs_friend_link` (
  `link_id` smallint(5) unsigned NOT NULL auto_increment,
  `link_name` varchar(255) NOT NULL default '',
  `link_url` varchar(255) NOT NULL default '',
  `link_logo` varchar(255) NOT NULL default '',
  `show_order` tinyint(3) unsigned NOT NULL default '50',
  PRIMARY KEY  (`link_id`),
  KEY `show_order` (`show_order`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_friend_link` values('6','美乐乐','http://www.7u7u7u.com.cn','','50');");
E_D("replace into `ecs_friend_link` values('4','美乐乐淘宝店','http://suqiannet.taobao.com/','','1');");
E_D("replace into `ecs_friend_link` values('5','美乐乐源码','http://mll.7u7u7u.com.cn','','50');");

require("../../inc/footer.php");
?>