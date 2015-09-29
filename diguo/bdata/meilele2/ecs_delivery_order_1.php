<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_delivery_order`;");
E_C("CREATE TABLE `ecs_delivery_order` (
  `delivery_id` mediumint(8) unsigned NOT NULL auto_increment,
  `delivery_sn` varchar(20) NOT NULL,
  `order_sn` varchar(20) NOT NULL,
  `order_id` mediumint(8) unsigned NOT NULL default '0',
  `invoice_no` varchar(50) default NULL,
  `add_time` int(10) unsigned default '0',
  `shipping_id` tinyint(3) unsigned default '0',
  `shipping_name` varchar(120) default NULL,
  `user_id` mediumint(8) unsigned default '0',
  `action_user` varchar(30) default NULL,
  `consignee` varchar(60) default NULL,
  `address` varchar(250) default NULL,
  `country` smallint(5) unsigned default '0',
  `province` smallint(5) unsigned default '0',
  `city` smallint(5) unsigned default '0',
  `district` smallint(5) unsigned default '0',
  `sign_building` varchar(120) default NULL,
  `email` varchar(60) default NULL,
  `zipcode` varchar(60) default NULL,
  `tel` varchar(60) default NULL,
  `mobile` varchar(60) default NULL,
  `best_time` varchar(120) default NULL,
  `postscript` varchar(255) default NULL,
  `how_oos` varchar(120) default NULL,
  `insure_fee` decimal(10,2) unsigned default '0.00',
  `shipping_fee` decimal(10,2) unsigned default '0.00',
  `update_time` int(10) unsigned default '0',
  `suppliers_id` smallint(5) default '0',
  `status` tinyint(1) unsigned NOT NULL default '0',
  `agency_id` smallint(5) unsigned default '0',
  PRIMARY KEY  (`delivery_id`),
  KEY `user_id` (`user_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_delivery_order` values('1','20131230095166079','2013122731476','19','11111111','1388157011','1','顺丰速运','1','admin','超级卖家','长江路15号','1','6','76','693','','','','111111111','','','','等待所有商品备齐后再发','0.00','5.00','1388397082','0','0','0');");
E_D("replace into `ecs_delivery_order` values('2','20131231054466157','2013123135238','20','1111111','1388468638','1','顺丰速运','1','admin','超级卖家','长江路15号','1','6','76','693','','','','111111111','','','','等待所有商品备齐后再发','0.00','5.00','1388468687','0','0','0');");
E_D("replace into `ecs_delivery_order` values('3','20131231072821503','2013122780190','17','11111111111','1388156839','1','顺丰速运','1','admin','超级卖家','长江路15号','1','6','76','693','','','','111111111','','','','等待所有商品备齐后再发','0.00','5.00','1388474921','0','0','0');");
E_D("replace into `ecs_delivery_order` values('4','20131231084209402','2013122727106','18','12222222222','1388156881','1','顺丰速运','1','admin','超级卖家','长江路15号','1','6','76','693','','','','111111111','','','','等待所有商品备齐后再发','0.00','5.00','1388479341','0','0','0');");
E_D("replace into `ecs_delivery_order` values('5','20131231084359235','2013122775150','16','12221','1388156756','1','顺丰速运','1','admin','超级卖家','长江路15号','1','6','76','693','','','','111111111','','','','等待所有商品备齐后再发','0.00','5.00','1388479382','0','0','0');");
E_D("replace into `ecs_delivery_order` values('6','20131231084315552','2013122784673','15','322222222','1388156700','1','顺丰速运','1','admin','超级卖家','长江路15号','1','6','76','693','','','','111111111','','','','等待所有商品备齐后再发','0.00','5.00','1388479434','0','0','0');");
E_D("replace into `ecs_delivery_order` values('7','20131231084435996','2013122722923','10','32323','1388152546','1','顺丰速运','1','admin','超级卖家','长江路15号','1','6','76','693','','','','111111111','','','','等待所有商品备齐后再发','0.00','5.00','1388479482','0','0','0');");
E_D("replace into `ecs_delivery_order` values('8','20131231092325661','2013120440283','3','e','1386173345','1','顺丰速运','1','admin','超级卖家','长江路15号','1','2','52','508','','','','111111111','','','','等待所有商品备齐后再发','0.00','15.00','1388481830','0','0','0');");
E_D("replace into `ecs_delivery_order` values('9','20140822091331509','2014082248545','48','','1408698789','2','申通快递','20','admin','姓名','地址','1','2','52','500','','','','13812312312','','','','等待所有商品备齐后再发','0.00','15.00','1408698815','0','0','0');");

require("../../inc/footer.php");
?>