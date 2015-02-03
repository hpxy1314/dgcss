<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsshop_precode`;");
E_C("CREATE TABLE `phome_enewsshop_precode` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `prename` varchar(30) NOT NULL default '',
  `precode` varchar(36) NOT NULL default '',
  `premoney` int(10) unsigned NOT NULL default '0',
  `pretype` tinyint(1) NOT NULL default '0',
  `reuse` tinyint(1) NOT NULL default '0',
  `addtime` int(10) unsigned NOT NULL default '0',
  `endtime` int(10) unsigned NOT NULL default '0',
  `groupid` varchar(255) NOT NULL default '',
  `classid` text NOT NULL,
  `musttotal` int(10) unsigned NOT NULL default '0',
  `usenum` int(11) NOT NULL default '0',
  `haveusenum` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `precode` (`precode`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>