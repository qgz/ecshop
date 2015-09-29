<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_user_rank`;");
E_C("CREATE TABLE `ecs_user_rank` (
  `rank_id` tinyint(3) unsigned NOT NULL auto_increment,
  `rank_name` varchar(30) NOT NULL default '',
  `min_points` int(10) unsigned NOT NULL default '0',
  `max_points` int(10) unsigned NOT NULL default '0',
  `discount` tinyint(3) unsigned NOT NULL default '0',
  `show_price` tinyint(1) unsigned NOT NULL default '1',
  `special_rank` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`rank_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_user_rank` values('1','注册用户','0','10000','100','1','0');");
E_D("replace into `ecs_user_rank` values('2','VIP','0','0','90','1','1');");
E_D("replace into `ecs_user_rank` values('3','VVIP','0','0','80','1','1');");

require("../../inc/footer.php");
?>