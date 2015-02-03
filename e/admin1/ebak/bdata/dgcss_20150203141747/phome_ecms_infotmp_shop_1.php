<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_infotmp_shop`;");
E_C("CREATE TABLE `phome_ecms_infotmp_shop` (
  `id` bigint(20) unsigned NOT NULL auto_increment,
  `classid` int(10) unsigned NOT NULL default '0',
  `oldurl` varchar(200) NOT NULL default '',
  `checked` tinyint(1) NOT NULL default '0',
  `tmptime` datetime NOT NULL default '0000-00-00 00:00:00',
  `userid` mediumint(8) unsigned NOT NULL default '0',
  `username` varchar(20) NOT NULL default '',
  `truetime` int(10) unsigned NOT NULL default '0',
  `keyboard` varchar(100) NOT NULL default '',
  `title` varchar(100) NOT NULL default '',
  `newstime` datetime NOT NULL default '0000-00-00 00:00:00',
  `titlepic` varchar(120) NOT NULL default '',
  `productno` varchar(30) NOT NULL default '',
  `pbrand` varchar(30) NOT NULL default '',
  `intro` text NOT NULL,
  `unit` varchar(16) NOT NULL default '',
  `weight` varchar(20) NOT NULL default '',
  `tprice` float(11,2) NOT NULL default '0.00',
  `price` float(11,2) NOT NULL default '0.00',
  `buyfen` int(11) NOT NULL default '0',
  `pmaxnum` int(11) NOT NULL default '0',
  `productpic` varchar(255) NOT NULL default '',
  `newstext` mediumtext NOT NULL,
  `psalenum` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>