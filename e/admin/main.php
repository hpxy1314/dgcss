<?php
define('EmpireCMSAdmin','1');
require("../class/connect.php");
require("../class/db_sql.php");
require("../class/functions.php");
require("../member/class/user.php");
$link=db_connect();
$empire=new mysqlquery();
//验证用户
$lur=is_login();
$logininid=(int)$lur['userid'];
$loginin=$lur['username'];
$loginrnd=$lur['rnd'];
$loginlevel=(int)$lur['groupid'];
$loginadminstyleid=$lur['adminstyleid'];
//ehash
$ecms_hashur=hReturnEcmsHashStrAll();
//我的状态
$user_r=$empire->fetch1("select pretime,preip,loginnum,preipport from {$dbtbpre}enewsuser where userid='$logininid'");
$gr=$empire->fetch1("select groupname from {$dbtbpre}enewsgroup where groupid='$loginlevel'");
//管理员统计
$adminnum=$empire->gettotal("select count(*) as total from {$dbtbpre}enewsuser");
$date=date("Y-m-d");
$noplnum=$empire->gettotal("select count(*) as total from {$dbtbpre}enewspl_".$public_r['pldeftb']." where checked=1");
//未审核会员
$nomembernum=$empire->gettotal("select count(*) as total from ".eReturnMemberTable()." where ".egetmf('checked')."=0");
//过期广告
$outtimeadnum=$empire->gettotal("select count(*) as total from {$dbtbpre}enewsad where endtime<'$date' and endtime<>'0000-00-00'");
//系统信息
	if(function_exists('ini_get')){
        $onoff = ini_get('register_globals');
    } else {
        $onoff = get_cfg_var('register_globals');
    }
    if($onoff){
        $onoff="打开";
    }else{
        $onoff="关闭";
    }
    if(function_exists('ini_get')){
        $upload = ini_get('file_uploads');
    } else {
        $upload = get_cfg_var('file_uploads');
    }
    if ($upload){
        $upload="可以";
    }else{
        $upload="不可以";
    }
	if(function_exists('ini_get')){
        $uploadsize = ini_get('upload_max_filesize');
    } else {
        $uploadsize = get_cfg_var('upload_max_filesize');
    }
	if(function_exists('ini_get')){
        $uploadpostsize = ini_get('post_max_size');
    } else {
        $uploadpostsize = get_cfg_var('post_max_size');
    }
//开启
$register_ok="开启";
if($public_r[register_ok])
{$register_ok="关闭";}
$addnews_ok="开启";
if($public_r[addnews_ok])
{$addnews_ok="关闭";}
//版本
@include("../class/EmpireCMS_version.php");
?>
<!DOCTYPE >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<link href="adminstyle/<?=$loginadminstyleid?>/adminstyle.css" rel="stylesheet" type="text/css">
<?php
$skinpath= $_SERVER['DOCUMENT_ROOT'].$public_r[newsurl].'e/admin/skin/skin.php';
include($skinpath);
?>

</head>

<body>
					<dl class="syspanel">
					   <dt>
					   	  <span class="on">系统信息</span>
					   	  <span>版权信息</span>
					   </dt>	
					   
					   <dd class="infop">
					   	  <div class="lines"></div>
					   	  <h2>网站信息</h2>
					   	  <p>使用域名:	<span><?=$_SERVER['HTTP_HOST']?></span></p>
					   	  <p>会员注册:	<span><?=$register_ok?></span></p>
					   	  <p>会员投稿:	<span><?=$addnews_ok?></span></p>
					   	  <p>管理员个数:<span><a href="user/ListUser.php<?=$ecms_hashur['whehref']?>"><?=$adminnum?></a> 人</span></p>
					   	  <p>未审核评论:<span><a href="openpage/AdminPage.php?leftfile=<?=urlencode('../pl/PlNav.php'.$ecms_hashur['whehref'])?>&mainfile=<?=urlencode('../pl/ListAllPl.php?checked=2'.$ecms_hashur['ehref'])?>&title=<?=urlencode('管理评论')?><?=$ecms_hashur['ehref']?>"><?=$noplnum?></a> 条</span></p>
					   	  <p>未审核会员:<span><a href="member/ListMember.php?sear=1&schecked=1<?=$ecms_hashur['ehref']?>"><?=$nomembernum?></a> 人</span></p>
					   	  <p>过期广告:	<span><a href="tool/ListAd.php?time=1<?=$ecms_hashur['ehref']?>"><?=$outtimeadnum?></a> 个</span></p>
					   	  <p>程序编码:	<span><?=EmpireCMS_CHARVER?></span></p>
					   	  
					   	  					   	  
					   	  <div class="lines"></div>
					   	  <h2>服务器信息</h2>
					   	  <p>服务器软件:<span><?=$_SERVER['SERVER_SOFTWARE']?></span></p>
					   	  <p>操作系统:	<span><? echo defined('PHP_OS')?PHP_OS:'未知';?></span></p>
					   	  <p>PHP版本:	<span><? echo @phpversion();?></span></p>
					   	  <p>MYSQL版本:<span><? echo @mysql_get_server_info();?></span></p>
					   	  <p>全局变量:	<span><?=$onoff?></span></p>
					   	  <p>魔术引用:	<span><?=MAGIC_QUOTES_GPC?'开启':'关闭'?></span></p>					   	  
					   	  <p>上传文件:	<span><?=$upload?> <font color="#666666">(最大文件：<?=$uploadsize?>，表单：<?=$uploadpostsize?>)</font></span></p>					   	  
					   	  
					   </dd>
					   
					   <dd class="infop" style="display: none;">
					   	  <div class="lines"></div>
					   	  <h2>登录者状态</h2>
					   	  <p>登陆者IP:<span><? echo egetip();?></span></p>
				
					   	  
					   	  <div class="lines"></div>
					   	  <h2>特别鸣谢</h2>
					   	  <p>后台设计:	<span>HP</span></p>
					   	 			   	  
					   	  
					   </dd>					   
					   
					   
					</dl>
					
					<div class="quickbar" id="quickbar">
                       <h2>快捷操作</h2>
                       <div class="lines"></div>
                       <div class="cz">
                       	  <a href="#">增加信息</a>
                       	  <a href="#">增加信息</a>
                       	  <a href="#">增加信息</a>
                       	  <a href="#">增加信息</a>
                       </div>
                       <div class="lines"></div>                      
                       <div class="cz">
                       	  <a href="#">增加信息</a>
                       	  <a href="#">增加信息</a>
                       	  <a href="#">增加信息</a>
                       	  <a href="#">增加信息</a>
                       </div>                      
					</div>
					
					
			</div>
	
	<script>
		
$(function(){
     $(window).ready(function(){
     	
     	var mainr=$('body');
     	var mw=mainr[0].scrollWidth;
     	var quickbar=$('.quickbar');
     	
     	quickbar.width(mw-261);
     	
     }).resize(function(){
        
      	var mainr=$('body');
     	var mw=mainr[0].scrollWidth;
     
     	var quickbar=$('.quickbar');

     	quickbar.width(mw-261);    	
     });			
			
			
});



		
	</script>
	
			
</body>
</html>
<?php
db_close();
$empire=null;
?>