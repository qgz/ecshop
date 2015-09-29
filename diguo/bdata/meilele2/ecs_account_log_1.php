<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_account_log`;");
E_C("CREATE TABLE `ecs_account_log` (
  `log_id` mediumint(8) unsigned NOT NULL auto_increment,
  `user_id` mediumint(8) unsigned NOT NULL,
  `user_money` decimal(10,2) NOT NULL,
  `frozen_money` decimal(10,2) NOT NULL,
  `rank_points` mediumint(9) NOT NULL,
  `pay_points` mediumint(9) NOT NULL,
  `change_time` int(10) unsigned NOT NULL,
  `change_desc` varchar(255) NOT NULL,
  `change_type` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY  (`log_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_account_log` values('1','1','0.00','0.00','996','996','1388397103','订单 2013122731476 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('2','1','0.00','0.00','7589','7589','1388468702','订单 2013123135238 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('3','1','0.00','0.00','100','100','1388474932','订单 2013122780190 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('4','1','0.00','0.00','3000','3000','1388479351','订单 2013122727106 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('5','1','0.00','0.00','100','100','1388479393','订单 2013122775150 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('6','1','0.00','0.00','1500','1500','1388479445','订单 2013122784673 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('7','1','0.00','0.00','3580','3580','1388479495','订单 2013122722923 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('8','1','0.00','0.00','5140','5140','1388481843','订单 2013120440283 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('9','20','0.00','0.00','84','300','1408698822','订单 2014082248545 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('10','20','0.00','0.00','0','-10','1408699296','支付订单 2014082255742','99');");
E_D("replace into `ecs_account_log` values('11','20','0.00','0.00','0','-10','1408699409','支付订单 2014082212354','99');");

require("../../inc/footer.php");
?>