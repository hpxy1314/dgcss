<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsfeedback`;");
E_C("CREATE TABLE `phome_enewsfeedback` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `bid` smallint(5) unsigned NOT NULL default '0',
  `title` varchar(120) NOT NULL default '',
  `saytext` text NOT NULL,
  `name` varchar(30) NOT NULL default '',
  `email` varchar(80) NOT NULL default '',
  `mycall` varchar(30) NOT NULL default '',
  `homepage` varchar(160) NOT NULL default '',
  `company` varchar(80) NOT NULL default '',
  `address` varchar(255) NOT NULL default '',
  `saytime` datetime NOT NULL default '0000-00-00 00:00:00',
  `job` varchar(36) NOT NULL default '',
  `ip` varchar(20) NOT NULL default '',
  `filepath` varchar(20) NOT NULL default '',
  `filename` text NOT NULL,
  `userid` mediumint(8) unsigned NOT NULL default '0',
  `username` varchar(20) NOT NULL default '',
  `haveread` tinyint(1) NOT NULL default '0',
  `eipport` varchar(6) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `bid` (`bid`),
  KEY `haveread` (`haveread`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>