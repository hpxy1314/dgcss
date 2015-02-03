<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsdolog`;");
E_C("CREATE TABLE `phome_enewsdolog` (
  `logid` bigint(20) NOT NULL auto_increment,
  `logip` varchar(20) NOT NULL default '',
  `logtime` datetime NOT NULL default '0000-00-00 00:00:00',
  `username` varchar(30) NOT NULL default '',
  `enews` varchar(30) NOT NULL default '',
  `doing` varchar(255) NOT NULL default '',
  `pubid` bigint(16) unsigned NOT NULL default '0',
  `ipport` varchar(6) NOT NULL default '',
  PRIMARY KEY  (`logid`),
  KEY `pubid` (`pubid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsdolog` values('1','127.0.0.1','2015-02-03 14:14:15','admin','login','---','0','56483');");

@include("../../inc/footer.php");
?>