<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsinfotype`;");
E_C("CREATE TABLE `phome_enewsinfotype` (
  `typeid` smallint(5) unsigned NOT NULL auto_increment,
  `tname` varchar(30) NOT NULL default '',
  `mid` smallint(6) NOT NULL default '0',
  `myorder` smallint(6) NOT NULL default '0',
  `yhid` smallint(6) NOT NULL default '0',
  `tnum` tinyint(3) unsigned NOT NULL default '0',
  `listtempid` smallint(5) unsigned NOT NULL default '0',
  `tpath` varchar(100) NOT NULL default '',
  `ttype` varchar(10) NOT NULL default '',
  `maxnum` int(10) unsigned NOT NULL default '0',
  `reorder` varchar(50) NOT NULL default '',
  `tid` smallint(5) unsigned NOT NULL default '0',
  `tbname` varchar(60) NOT NULL default '',
  `timg` varchar(200) NOT NULL default '',
  `intro` varchar(255) NOT NULL default '',
  `pagekey` varchar(255) NOT NULL default '',
  `newline` tinyint(3) unsigned NOT NULL default '0',
  `hotline` tinyint(3) unsigned NOT NULL default '0',
  `goodline` tinyint(3) unsigned NOT NULL default '0',
  `hotplline` tinyint(3) unsigned NOT NULL default '0',
  `firstline` tinyint(3) unsigned NOT NULL default '0',
  `jstempid` smallint(5) unsigned NOT NULL default '0',
  `nrejs` tinyint(1) NOT NULL default '0',
  `listdt` tinyint(1) NOT NULL default '0',
  `repagenum` smallint(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (`typeid`),
  KEY `mid` (`mid`),
  KEY `myorder` (`myorder`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>