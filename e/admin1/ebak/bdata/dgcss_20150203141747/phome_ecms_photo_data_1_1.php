<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_photo_data_1`;");
E_C("CREATE TABLE `phome_ecms_photo_data_1` (
  `id` int(10) unsigned NOT NULL default '0',
  `classid` smallint(5) unsigned NOT NULL default '0',
  `keyid` varchar(255) NOT NULL default '',
  `dokey` tinyint(1) NOT NULL default '0',
  `newstempid` smallint(5) unsigned NOT NULL default '0',
  `closepl` tinyint(1) NOT NULL default '0',
  `haveaddfen` tinyint(1) NOT NULL default '0',
  `infotags` varchar(80) NOT NULL default '',
  `filesize` varchar(10) NOT NULL default '',
  `picsize` varchar(20) NOT NULL default '',
  `picfbl` varchar(20) NOT NULL default '',
  `picfrom` varchar(120) NOT NULL default '',
  `morepic` mediumtext NOT NULL,
  `num` tinyint(4) NOT NULL default '0',
  `width` varchar(12) NOT NULL default '',
  `height` varchar(12) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_photo_data_1` values('1','52','','0','4','0','0','','','','','','/dgcss//testdata/demopic/photo/lry/s1.jpg::::::/dgcss//testdata/demopic/photo/lry/1.jpg::::::\r\n/dgcss//testdata/demopic/photo/lry/s2.jpg::::::/dgcss//testdata/demopic/photo/lry/2.jpg::::::\r\n/dgcss//testdata/demopic/photo/lry/s3.jpg::::::/dgcss//testdata/demopic/photo/lry/3.jpg::::::\r\n/dgcss//testdata/demopic/photo/lry/s4.jpg::::::/dgcss//testdata/demopic/photo/lry/4.jpg::::::\r\n/dgcss//testdata/demopic/photo/lry/s5.jpg::::::/dgcss//testdata/demopic/photo/lry/5.jpg::::::','3','','');");
E_D("replace into `phome_ecms_photo_data_1` values('2','53','','0','3','0','0','','30 KB','500*337','','21cn','','3','','');");
E_D("replace into `phome_ecms_photo_data_1` values('3','53','','0','3','0','0','','30 KB','500*375','','21cn','','3','','');");
E_D("replace into `phome_ecms_photo_data_1` values('4','53','','0','4','0','0','','','','','','/dgcss//testdata/demopic/photo/lmhd/s1.jpg::::::/dgcss//testdata/demopic/photo/lmhd/1.jpg::::::\r\n/dgcss//testdata/demopic/photo/lmhd/s2.jpg::::::/dgcss//testdata/demopic/photo/lmhd/2.jpg::::::\r\n/dgcss//testdata/demopic/photo/lmhd/s3.jpg::::::/dgcss//testdata/demopic/photo/lmhd/3.jpg::::::','3','','');");
E_D("replace into `phome_ecms_photo_data_1` values('5','54','','0','3','0','0','','224 KB','1024*768','','未知','','3','','');");
E_D("replace into `phome_ecms_photo_data_1` values('6','52','','0','4','0','0','','','','','','/dgcss//testdata/demopic/photo/ldh/s1.jpg::::::/dgcss//testdata/demopic/photo/ldh/1.jpg::::::\r\n/dgcss//testdata/demopic/photo/ldh/s2.jpg::::::/dgcss//testdata/demopic/photo/ldh/2.jpg::::::\r\n/dgcss//testdata/demopic/photo/ldh/s3.jpg::::::/dgcss//testdata/demopic/photo/ldh/3.jpg::::::','3','','');");
E_D("replace into `phome_ecms_photo_data_1` values('7','52','','0','4','0','0','','','','','','/dgcss//testdata/demopic/photo/shq/s1.jpg::::::/dgcss//testdata/demopic/photo/shq/1.jpg::::::\r\n/dgcss//testdata/demopic/photo/shq/s2.jpg::::::/dgcss//testdata/demopic/photo/shq/2.jpg::::::\r\n/dgcss//testdata/demopic/photo/shq/s3.jpg::::::/dgcss//testdata/demopic/photo/shq/3.jpg::::::','3','','');");

@include("../../inc/footer.php");
?>