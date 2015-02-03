<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsuser`;");
E_C("CREATE TABLE `phome_enewsuser` (
  `userid` int(10) unsigned NOT NULL auto_increment,
  `username` varchar(30) NOT NULL default '',
  `password` varchar(32) NOT NULL default '',
  `rnd` varchar(20) NOT NULL default '',
  `adminclass` mediumtext NOT NULL,
  `groupid` smallint(5) unsigned NOT NULL default '0',
  `checked` tinyint(1) NOT NULL default '0',
  `styleid` smallint(5) unsigned NOT NULL default '0',
  `filelevel` tinyint(1) NOT NULL default '0',
  `salt` varchar(8) NOT NULL default '',
  `loginnum` int(10) unsigned NOT NULL default '0',
  `lasttime` int(10) unsigned NOT NULL default '0',
  `lastip` varchar(20) NOT NULL default '',
  `truename` varchar(20) NOT NULL default '',
  `email` varchar(120) NOT NULL default '',
  `classid` smallint(5) unsigned NOT NULL default '0',
  `pretime` int(10) unsigned NOT NULL default '0',
  `preip` varchar(20) NOT NULL default '',
  `addtime` int(10) unsigned NOT NULL default '0',
  `addip` varchar(20) NOT NULL default '',
  `userprikey` varchar(50) NOT NULL default '',
  `salt2` varchar(20) NOT NULL default '',
  `lastipport` varchar(6) NOT NULL default '',
  `preipport` varchar(6) NOT NULL default '',
  `addipport` varchar(6) NOT NULL default '',
  `uprnd` varchar(32) NOT NULL default '',
  PRIMARY KEY  (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsuser` values('1','admin','bbbd672f31904d5097932549e85804d0','O9myeIdvrSsaN7iDniFK','','1','0','1','0','kQvYf3d6','1','1422944055','127.0.0.1','','','0','0','','1422944051','127.0.0.1','GTxfAkH4HOxbCed4X1L6yylkByyy0NbkI9NgfATSMp0SjewM','m09QGJh3fVt30AGkjFyt','56483','56483','56483','');");

@include("../../inc/footer.php");
?>