<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsmemberpub`;");
E_C("CREATE TABLE `phome_enewsmemberpub` (
  `userid` mediumint(8) unsigned NOT NULL auto_increment,
  `todayinfodate` char(10) NOT NULL default '',
  `todayaddinfo` mediumint(8) unsigned NOT NULL default '0',
  `todaydate` char(10) NOT NULL default '',
  `todaydown` mediumint(8) unsigned NOT NULL default '0',
  `authstr` char(30) NOT NULL default '',
  PRIMARY KEY  (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>