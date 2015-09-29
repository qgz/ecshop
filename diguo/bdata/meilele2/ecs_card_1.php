<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_card`;");
E_C("CREATE TABLE `ecs_card` (
  `card_id` tinyint(3) unsigned NOT NULL auto_increment,
  `card_name` varchar(120) NOT NULL default '',
  `card_img` varchar(255) NOT NULL default '',
  `card_fee` decimal(6,2) unsigned NOT NULL default '0.00',
  `free_money` decimal(6,2) unsigned NOT NULL default '0.00',
  `card_desc` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`card_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_card` values('1','乔迁贺卡','1404359914350364127.jpg','2.00','8000.00','乔迁贺卡');");
E_D("replace into `ecs_card` values('2','新房贺卡','1404359989294339915.jpg','3.00','8000.00','新房贺卡');");

require("../../inc/footer.php");
?>