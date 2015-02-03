<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsbuygroup`;");
E_C("CREATE TABLE `phome_enewsbuygroup` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `gname` varchar(255) NOT NULL default '',
  `gmoney` int(10) unsigned NOT NULL default '0',
  `gfen` int(10) unsigned NOT NULL default '0',
  `gdate` int(10) unsigned NOT NULL default '0',
  `ggroupid` smallint(5) unsigned NOT NULL default '0',
  `gzgroupid` smallint(5) unsigned NOT NULL default '0',
  `buygroupid` smallint(5) unsigned NOT NULL default '0',
  `gsay` text NOT NULL,
  `myorder` smallint(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>