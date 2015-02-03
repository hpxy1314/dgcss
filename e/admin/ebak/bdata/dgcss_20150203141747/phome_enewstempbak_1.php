<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewstempbak`;");
E_C("CREATE TABLE `phome_enewstempbak` (
  `bid` int(10) unsigned NOT NULL auto_increment,
  `tempid` smallint(5) unsigned NOT NULL default '0',
  `tempname` varchar(60) NOT NULL default '',
  `temptext` mediumtext NOT NULL,
  `subnews` smallint(6) NOT NULL default '0',
  `isdefault` tinyint(1) NOT NULL default '0',
  `listvar` text NOT NULL,
  `rownum` smallint(6) NOT NULL default '0',
  `modid` smallint(5) unsigned NOT NULL default '0',
  `showdate` varchar(50) NOT NULL default '',
  `subtitle` smallint(6) NOT NULL default '0',
  `classid` smallint(5) unsigned NOT NULL default '0',
  `docode` tinyint(1) NOT NULL default '0',
  `baktime` int(10) unsigned NOT NULL default '0',
  `temptype` varchar(30) NOT NULL default '',
  `gid` smallint(5) unsigned NOT NULL default '0',
  `lastuser` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`bid`),
  KEY `tempid` (`tempid`),
  KEY `temptype` (`temptype`),
  KEY `gid` (`gid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>