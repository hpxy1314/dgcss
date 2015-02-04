<?php
$myurl = $public_r[newsurl].'e/admin/skin/';
$skin.='<link href="'.$myurl.'iframe.css" rel="stylesheet">';
$skin.='<script src="'.$myurl.'js/jquery.js"></script>';
$skin.='<script src="'.$myurl.'js/artdialog/jquery.artDialog.js?skin=aero"></script>';
$skin.='<script src="'.$myurl.'js/artdialog/plugins/iframeTools.js"></script>';
$skin.='<script src="'.$myurl.'js/iframe.js"></script>';
echo $skin;
?>
