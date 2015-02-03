<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewspublic_update`;");
E_C("CREATE TABLE `phome_enewspublic_update` (
  `id` tinyint(3) unsigned NOT NULL auto_increment,
  `lasttimeinfo` int(10) unsigned NOT NULL default '0',
  `lasttimepl` int(10) unsigned NOT NULL default '0',
  `lastnuminfo` int(10) unsigned NOT NULL default '0',
  `lastnumpl` int(10) unsigned NOT NULL default '0',
  `lastnuminfotb` text NOT NULL,
  `lastnumpltb` text NOT NULL,
  `todaytimeinfo` int(10) unsigned NOT NULL default '0',
  `todaytimepl` int(10) unsigned NOT NULL default '0',
  `todaynuminfo` int(10) unsigned NOT NULL default '0',
  `yesterdaynuminfo` int(10) unsigned NOT NULL default '0',
  `todaynumpl` int(10) unsigned NOT NULL default '0',
  `yesterdaynumpl` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewspublic_update` values('1','1355124469','1355124476','0','0','','','1408520771','1408520771','0','0','0','0');");

@include("../../inc/footer.php");
?>