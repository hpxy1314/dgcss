<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsfile_public`;");
E_C("CREATE TABLE `phome_enewsfile_public` (
  `fileid` int(10) unsigned NOT NULL auto_increment,
  `pubid` tinyint(1) NOT NULL default '0',
  `filename` char(60) NOT NULL default '',
  `filesize` int(10) unsigned NOT NULL default '0',
  `path` char(20) NOT NULL default '',
  `adduser` char(30) NOT NULL default '',
  `filetime` int(10) unsigned NOT NULL default '0',
  `classid` tinyint(1) NOT NULL default '0',
  `no` char(60) NOT NULL default '',
  `type` tinyint(1) unsigned NOT NULL default '0',
  `onclick` mediumint(8) unsigned NOT NULL default '0',
  `id` int(10) unsigned NOT NULL default '0',
  `cjid` int(10) unsigned NOT NULL default '0',
  `fpath` tinyint(1) NOT NULL default '0',
  `modtype` tinyint(3) unsigned NOT NULL default '0',
  PRIMARY KEY  (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `modtype` (`modtype`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>