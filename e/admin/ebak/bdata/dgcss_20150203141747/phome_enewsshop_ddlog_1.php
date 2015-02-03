<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsshop_ddlog`;");
E_C("CREATE TABLE `phome_enewsshop_ddlog` (
  `logid` int(10) unsigned NOT NULL auto_increment,
  `ddid` int(10) unsigned NOT NULL default '0',
  `userid` int(10) unsigned NOT NULL default '0',
  `username` varchar(30) NOT NULL default '',
  `ecms` varchar(30) NOT NULL default '',
  `bz` varchar(255) NOT NULL default '',
  `addbz` varchar(255) NOT NULL default '',
  `logtime` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`logid`),
  KEY `ddid` (`ddid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>