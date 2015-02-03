<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewscard`;");
E_C("CREATE TABLE `phome_enewscard` (
  `cardid` int(10) unsigned NOT NULL auto_increment,
  `card_no` char(30) NOT NULL default '',
  `password` char(20) NOT NULL default '',
  `money` int(10) unsigned NOT NULL default '0',
  `cardfen` int(10) unsigned NOT NULL default '0',
  `endtime` date NOT NULL default '0000-00-00',
  `cardtime` datetime NOT NULL default '0000-00-00 00:00:00',
  `carddate` int(10) unsigned NOT NULL default '0',
  `cdgroupid` smallint(5) unsigned NOT NULL default '0',
  `cdzgroupid` smallint(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (`cardid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>