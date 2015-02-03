<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsjstemp`;");
E_C("CREATE TABLE `phome_enewsjstemp` (
  `tempid` smallint(5) unsigned NOT NULL auto_increment,
  `tempname` varchar(30) NOT NULL default '',
  `temptext` mediumtext NOT NULL,
  `classid` smallint(5) unsigned NOT NULL default '0',
  `isdefault` tinyint(1) NOT NULL default '0',
  `showdate` varchar(20) NOT NULL default '',
  `modid` smallint(6) NOT NULL default '0',
  `subnews` smallint(6) NOT NULL default '0',
  `subtitle` smallint(6) NOT NULL default '0',
  PRIMARY KEY  (`tempid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsjstemp` values('1','默认js模板','[!--empirenews.listtemp--]<li><a href=\\\\\"[!--titleurl--]\\\\\" title=\\\\\"[!--oldtitle--]\\\\\">[!--title--]</a></li>[!--empirenews.listtemp--]','0','1','m-d','1','0','32');");

@include("../../inc/footer.php");
?>