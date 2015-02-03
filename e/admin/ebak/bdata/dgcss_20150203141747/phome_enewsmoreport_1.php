<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsmoreport`;");
E_C("CREATE TABLE `phome_enewsmoreport` (
  `pid` int(11) NOT NULL auto_increment,
  `pname` char(60) NOT NULL default '',
  `purl` char(255) NOT NULL default '',
  `ppath` char(255) NOT NULL default '',
  `postpass` char(120) NOT NULL default '',
  `postfile` char(255) NOT NULL default '',
  `tempgid` smallint(5) unsigned NOT NULL default '0',
  `mustdt` tinyint(1) NOT NULL default '0',
  `isclose` tinyint(1) NOT NULL default '0',
  `closeadd` tinyint(1) NOT NULL default '0',
  `headersign` char(255) NOT NULL default '',
  PRIMARY KEY  (`pid`),
  KEY `isclose` (`isclose`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsmoreport` values('1','主访问端','','','','','0','0','0','0','');");

@include("../../inc/footer.php");
?>