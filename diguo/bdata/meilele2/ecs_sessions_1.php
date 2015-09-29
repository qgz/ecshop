<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_sessions`;");
E_C("CREATE TABLE `ecs_sessions` (
  `sesskey` char(32) character set utf8 collate utf8_bin NOT NULL default '',
  `expiry` int(10) unsigned NOT NULL default '0',
  `userid` mediumint(8) unsigned NOT NULL default '0',
  `adminid` mediumint(8) unsigned NOT NULL default '0',
  `ip` char(15) NOT NULL default '',
  `user_name` varchar(60) NOT NULL,
  `user_rank` tinyint(3) NOT NULL,
  `discount` decimal(3,2) NOT NULL,
  `email` varchar(60) NOT NULL,
  `data` char(255) NOT NULL default '',
  PRIMARY KEY  (`sesskey`),
  KEY `expiry` (`expiry`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8");
E_D("replace into `ecs_sessions` values('ff85ff4a7e752f6bedcfd0fadd05d9ff','1409737230','0','0','180.153.181.149','0','0','1.00','0','a:0:{}');");
E_D("replace into `ecs_sessions` values('6d73be9daab0dff6b989bc03faf08df9','1409736252','0','0','123.125.71.105','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('709bfd5c986ccd2ae8036af1e22301f6','1409736975','0','0','175.8.105.196','0','0','1.00','0','a:6:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:9:\"region_id\";i:0;s:11:\"region_name\";s:9:\"全国站\";s:7:\"pin_yin\";s:5:\"china\";}');");
E_D("replace into `ecs_sessions` values('791e18dcdb4e382bc6517192c998f8e4','1409737384','0','1','114.239.197.54','0','0','0.00','0','a:4:{s:10:\"admin_name\";s:5:\"admin\";s:11:\"action_list\";s:3:\"all\";s:10:\"last_check\";i:1409737226;s:12:\"suppliers_id\";s:1:\"0\";}');");
E_D("replace into `ecs_sessions` values('de9710c2e77250c7f586cdf5d37aeb9f','1409737208','0','0','114.239.197.54','0','0','1.00','0','a:6:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:9:\"region_id\";i:0;s:11:\"region_name\";s:9:\"全国站\";s:7:\"pin_yin\";s:5:\"china\";}');");

require("../../inc/footer.php");
?>