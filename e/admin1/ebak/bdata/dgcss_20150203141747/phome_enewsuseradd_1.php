<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsuseradd`;");
E_C("CREATE TABLE `phome_enewsuseradd` (
  `userid` int(10) unsigned NOT NULL auto_increment,
  `equestion` tinyint(4) NOT NULL default '0',
  `eanswer` varchar(32) NOT NULL default '',
  `openip` text NOT NULL,
  `certkey` varchar(60) NOT NULL default '',
  `certtime` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsuseradd` values('1','0','','','','0');");

@include("../../inc/footer.php");
?>