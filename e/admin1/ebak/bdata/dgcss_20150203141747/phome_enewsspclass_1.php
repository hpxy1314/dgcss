<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsspclass`;");
E_C("CREATE TABLE `phome_enewsspclass` (
  `classid` smallint(5) unsigned NOT NULL auto_increment,
  `classname` varchar(30) NOT NULL default '',
  `classsay` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>