<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewspubvar`;");
E_C("CREATE TABLE `phome_enewspubvar` (
  `varid` smallint(5) unsigned NOT NULL auto_increment,
  `myvar` varchar(60) NOT NULL default '',
  `varname` varchar(20) NOT NULL default '',
  `varvalue` text NOT NULL,
  `varsay` varchar(255) NOT NULL default '',
  `myorder` smallint(5) unsigned NOT NULL default '0',
  `classid` smallint(5) unsigned NOT NULL default '0',
  `tocache` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`varid`),
  UNIQUE KEY `varname` (`varname`),
  KEY `classid` (`classid`),
  KEY `tocache` (`tocache`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>