<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewspl_1`;");
E_C("CREATE TABLE `phome_enewspl_1` (
  `plid` int(10) unsigned NOT NULL auto_increment,
  `pubid` bigint(16) NOT NULL default '0',
  `username` varchar(20) NOT NULL default '',
  `sayip` varchar(20) NOT NULL default '',
  `saytime` int(10) unsigned NOT NULL default '0',
  `id` int(10) unsigned NOT NULL default '0',
  `checked` tinyint(1) NOT NULL default '0',
  `classid` smallint(5) unsigned NOT NULL default '0',
  `zcnum` smallint(5) unsigned NOT NULL default '0',
  `fdnum` smallint(5) unsigned NOT NULL default '0',
  `userid` mediumint(8) unsigned NOT NULL default '0',
  `isgood` tinyint(1) NOT NULL default '0',
  `saytext` text NOT NULL,
  `eipport` varchar(6) NOT NULL default '',
  PRIMARY KEY  (`plid`),
  KEY `id` (`id`),
  KEY `classid` (`classid`),
  KEY `pubid` (`pubid`,`checked`,`plid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>