<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsqmsg`;");
E_C("CREATE TABLE `phome_enewsqmsg` (
  `mid` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(80) NOT NULL default '',
  `msgtext` text NOT NULL,
  `haveread` tinyint(1) NOT NULL default '0',
  `msgtime` datetime NOT NULL default '0000-00-00 00:00:00',
  `to_username` varchar(30) NOT NULL default '',
  `from_userid` int(10) unsigned NOT NULL default '0',
  `from_username` varchar(30) NOT NULL default '',
  `isadmin` tinyint(1) NOT NULL default '0',
  `issys` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`mid`),
  KEY `to_username` (`to_username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>