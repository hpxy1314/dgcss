<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
$r=ReturnLeftLevel($loginlevel);
//菜单显示
$showfastmenu=$empire->gettotal("select count(*) as total from {$dbtbpre}enewsmenuclass where classtype=1 limit 1");//常用菜单
$showextmenu=$empire->gettotal("select count(*) as total from {$dbtbpre}enewsmenuclass where classtype=3 limit 1");//扩展菜单
$showshopmenu=stristr($public_r['closehmenu'],',shop,')?0:1;
//图片识别
if(stristr($_SERVER['HTTP_USER_AGENT'],'MSIE 6.0'))
{
	$menufiletype='.gif';
}
else
{
	$menufiletype='.png';
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>帝国cms后台修改</title>
	    <link rel="stylesheet" type="text/css" href="./skin/main.css"/>
	    <script src="./skin/js/jquery.js" type="text/javascript" charset="utf-8"></script>
	    <script src="./skin/js/main.js" type="text/javascript" charset="utf-8"></script>
	    <script src="./skin/js/artdialog/jquery.artDialog.js?skin=aero" type="text/javascript" charset="utf-8"></script>
	    <script src="./skin/js/artdialog/plugins/iframeTools.js"></script>
<SCRIPT>
function switchSysBar(){
	if(switchPoint.innerText==3)
	{
		switchPoint.innerText=4
		document.all("frmTitle").style.display="none"
	}
	else
	{
		switchPoint.innerText=3
		document.all("frmTitle").style.display=""
	}
}
function switchSysBarInfo(){
	switchPoint.innerText=3
	document.all("frmTitle").style.display=""
}

function about(){
	window.showModalDialog("adminstyle/1/page/about.htm","ABOUT","dialogwidth:300px;dialogheight:150px;center:yes;status:no;scroll:no;help:no");
}

function over(obj){
		if(obj.className=="flyoutLink")
		{
			obj.style.backgroundColor='#B5C4EC'
			obj.style.borderColor = '#380FA6'
		}
		else if(obj.className=="flyoutLink1")
		{
		    obj.style.backgroundColor='#B5C4EC'
			obj.style.borderColor = '#380FA6'				
		}
}
function out(obj){
		if(obj.className=="flyoutLink")
		{
			obj.style.backgroundColor='#C9F1FF'
			obj.style.borderColor = 'C9F1FF'
		}
		else if(obj.className=="#flyoutLink1")
		{
		    obj.style.backgroundColor='#FBF9F9'
			obj.style.borderColor = '#FBF9F9'				
		}
}

function show(d){
	if(obj=document.all(d))	obj.style.visibility="visible";

}
function hide(d){
	if(obj=document.all(d))	obj.style.visibility="hidden";
}

function JumpToLeftMenu(url){
	document.getElementById("left").src=url;
}
function JumpToMain(url){
	document.getElementById("main").src=url;
}
function DoOnclickMenu(m){
	if(m!='dosysmenu')
	{
		document.getElementById("dosysmenu").style.backgroundColor='';
	}
	else
	{
		document.getElementById("dosysmenu").style.backgroundColor='#8CBDEF';
	}
	if(m!='doinfomenu')
	{
		document.getElementById("doinfomenu").style.backgroundColor='';
	}
	else
	{
		document.getElementById("doinfomenu").style.backgroundColor='#8CBDEF';
	}
	if(m!='doclassmenu')
	{
		document.getElementById("doclassmenu").style.backgroundColor='';
	}
	else
	{
		document.getElementById("doclassmenu").style.backgroundColor='#8CBDEF';
	}
	if(m!='dotempmenu')
	{
		document.getElementById("dotempmenu").style.backgroundColor='';
	}
	else
	{
		document.getElementById("dotempmenu").style.backgroundColor='#8CBDEF';
	}
	if(m!='dousermenu')
	{
		document.getElementById("dousermenu").style.backgroundColor='';
	}
	else
	{
		document.getElementById("dousermenu").style.backgroundColor='#8CBDEF';
	}
	if(m!='dotoolmenu')
	{
		document.getElementById("dotoolmenu").style.backgroundColor='';
	}
	else
	{
		document.getElementById("dotoolmenu").style.backgroundColor='#8CBDEF';
	}
	if(m!='doshopmenu')
	{
		document.getElementById("doshopmenu").style.backgroundColor='';
	}
	else
	{
		document.getElementById("doshopmenu").style.backgroundColor='#8CBDEF';
	}
	if(m!='doextmenu')
	{
		document.getElementById("doextmenu").style.backgroundColor='';
	}
	else
	{
		document.getElementById("doextmenu").style.backgroundColor='#8CBDEF';
	}
	if(m!='doothermenu')
	{
		document.getElementById("doothermenu").style.backgroundColor='';
	}
	else
	{
		document.getElementById("doothermenu").style.backgroundColor='#8CBDEF';
	}
	if(m!='dofastmenu')
	{
		document.getElementById("dofastmenu").style.backgroundColor='';
	}
	else
	{
		document.getElementById("dofastmenu").style.backgroundColor='#8CBDEF';
	}
	document.menuform.onclickmenu.value=m;
}
</SCRIPT>

	</head>
	<body>
		
    <div class="cmscon">
		<div class="mtop">
		  <div class="mlogo"></div>	
		  <div class="mtmenu">
		  	<a class="tmenu menu1" onclick="JumpToLeftMenu('adminstyle/1/left.php?ecms=system<?=$ecms_hashur['ehref']?>');"></a>
		  	<a class="tmenu menu2" onclick="JumpToLeftMenu('ListEnews.php<?=$ecms_hashur['whehref']?>');"></a>
		  	<a class="tmenu menu3" onclick="JumpToLeftMenu('adminstyle/1/left.php?ecms=classdata<?=$ecms_hashur['ehref']?>');"></a>
		  	<a class="tmenu menu4" onclick="JumpToLeftMenu('adminstyle/1/left.php?ecms=template<?=$ecms_hashur['ehref']?>');"></a>
		  	<a class="tmenu menu5" onclick="JumpToLeftMenu('adminstyle/1/left.php?ecms=usercp<?=$ecms_hashur['ehref']?>');"></a>
		  	<a class="tmenu menu6" onclick="JumpToLeftMenu('adminstyle/1/left.php?ecms=tool<?=$ecms_hashur['ehref']?>');"></a>
		  	<a class="tmenu menu7" onclick="window.open('openpage/AdminPage.php?leftfile=<?=urlencode('../ShopSys/pageleft.php'.$ecms_hashur['whehref'])?>&mainfile=<?=urlencode('../other/OtherMain.php'.$ecms_hashur['whehref'])?>&title=<?=urlencode('商城系统管理')?><?=$ecms_hashur['ehref']?>','AdminShopSys','');"></a>
		  	<a class="tmenu menu8" onclick="JumpToLeftMenu('adminstyle/1/left.php?ecms=other<?=$ecms_hashur['ehref']?>');"></a>
		  </div>
		  
		  <div class="userinfo">
		  	<p>用户:<a href="user/EditPassword.php<?=$ecms_hashur['whehref']?>" target="main"><?=$loginin?></a></p>
		  	<span class="lgout">退出登录</span>
		  </div>
		  
<script>
	     
$(function(){
  $('.mtop .userinfo .lgout').click(function(){
  	
  	art.dialog({
  		title:'温馨提示?',
  		drag:false,
  		lock:true,
  		content:'确定要退出登录吗',
  		ok:function(){
  			location.href="ecmsadmin.php?enews=exit<?=$ecms_hashur['href']?>";
  		},
  		okval:'退出登录',
  		cancel:function(){
  			
  		}
  	});
  	 	
});//退出登录
  		
		
	});
	
</script>		  
		  
		  
		</div>	
		
		
		<div class="mmain">
			<div class="leftbar">
		<IFRAME frameBorder="0" id="dorepage" name="dorepage" scrolling="no" src="DoTimeRepage.php<?=$ecms_hashur['whhref']?>" style="HEIGHT:0;VISIBILITY:inherit;WIDTH:0;Z-INDEX:1"></IFRAME>				
	     	<iframe class="leftbari" frameBorder="0" id="left" name="left" scrolling="auto" src="ListEnews.php<?=$ecms_hashur['whehref']?>" ></iframe>		
				<div class="collsan"></div>				
			</div>
			
			<div class="mainr">

					<div class="toolbar">
						
					</div> 
					
			<IFRAME id="main" name="main" style="WIDTH: 100%; HEIGHT: 100%" src="main.php<?=$ecms_hashur['whehref']?>" frameBorder=0></IFRAME>
			
			
		</div>
		
	</div>
		
	</body>
</html>
