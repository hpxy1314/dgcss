<?php
define('EmpireCMSAdmin','1');
define('EmpireCMSAPage','login');
define('EmpireCMSNFPage','1');
require("../class/connect.php");
require("../class/functions.php");
//风格
$loginadminstyleid=EcmsReturnAdminStyle();
//变量处理
$empirecmskey1='';
$empirecmskey2='';
$empirecmskey3='';
$empirecmskey4='';
$empirecmskey5='';
if($_POST['empirecmskey1']&&$_POST['empirecmskey2']&&$_POST['empirecmskey3']&&$_POST['empirecmskey4']&&$_POST['empirecmskey5'])
{
	$empirecmskey1=RepPostVar($_POST['empirecmskey1']);
	$empirecmskey2=RepPostVar($_POST['empirecmskey2']);
	$empirecmskey3=RepPostVar($_POST['empirecmskey3']);
	$empirecmskey4=RepPostVar($_POST['empirecmskey4']);
	$empirecmskey5=RepPostVar($_POST['empirecmskey5']);
	$ecertkeyrndstr=$empirecmskey1.'#!#'.$empirecmskey2.'#!#'.$empirecmskey3.'#!#'.$empirecmskey4.'#!#'.$empirecmskey5;
	esetcookie('ecertkeyrnds',$ecertkeyrndstr,0);
}
elseif(getcvar('ecertkeyrnds'))
{
	$certr=explode('#!#',getcvar('ecertkeyrnds'));
	$empirecmskey1=RepPostVar($certr[0]);
	$empirecmskey2=RepPostVar($certr[1]);
	$empirecmskey3=RepPostVar($certr[2]);
	$empirecmskey4=RepPostVar($certr[3]);
	$empirecmskey5=RepPostVar($certr[4]);
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>帝国cms后台</title>
		<link rel="stylesheet" type="text/css" href="./skin/style.css"/>
	</head>
	<body>
		<div class="loginbg">
			
<form name="login" id="login" method="post" action="ecmsadmin.php" >			
	<input type="hidden" name="enews" value="login">		
			<div class="loginbar">
				<div class="inputc">
					<span class="fl loicon"><img src="./skin/images/login_user.png"/></span>
					<input class="fl input1" placeholder="请输入用户名" name="username"/>
				</div>
				<div class="inputc">
					<span class="fl loicon"><img src="./skin/images/lopassword.png"/></span>
					<input class="fl input1" placeholder="请输入密码" name="password" type="password"/>
				</div>				
				<div class="inputc">
					<input  type="hidden" name="equestion" class="equestion"/>
					<span class="fl loicon"><img src="./skin/images/loask.png"/></span>
					<div class="fl select">
						<span data="0">无安全提问</span>
						<div class="drop">
							<span data="0">无安全提问</span>
							<span data="1">母亲的名字</span>
							<span data="2">爷爷的名字</span>
							<span data="3">父亲出生的城市</span>
							<span data="4">您其中一位老师的名字</span>
							<span data="5">您个人计算机的型号</span>
							<span data="6">您最喜欢的餐馆名称</span>
							<span data="7">驾驶执照的最后四位数字</span>
						</div>
					</div>
				</div>		
				
				<div class="inputc answer">
					<span class="fl loicon"><img src="./skin/images/answer.png"/></span>
					<input class="fl input1" placeholder="请输入正确的答案" name="eanswer"/>
				</div>				
<?php
	if($ecms_config['esafe']['loginauth'])
    {
?>				
				
				<div class="inputc ">
					<span class="fl loicon"><img src="./skin/images/answer.png"/></span>
					<input class="fl input1" placeholder="请输入认证码" name="loginauth" type="password"/>
				</div>						
 <?php
	 }
 ?>		
 
 
<?php
  if(empty($public_r['adminloginkey']))
  {
?>		
                <div class="yzm">
                	<input name="key" class="fl yzmi" placeholder="请输入验证码"/>
                	<img src="ShowKey.php" name="KeyImg" id="KeyImg" align="bottom" onclick="KeyImg.src='ShowKey.php?'+Math.random()" title="看不清楚,点击刷新">
                </div>
<?php
 }
?>				
				<div class="subm">
				<input type="submit" class="submt" name="imageField" value="立即登陆"/>
				</div>
				
			  <input name="empirecmskey1" type="hidden" id="empirecmskey1" value="<?php echo $empirecmskey1;?>">
              <input name="empirecmskey2" type="hidden" id="empirecmskey2" value="<?php echo $empirecmskey2;?>">
              <input name="empirecmskey3" type="hidden" id="empirecmskey3" value="<?php echo $empirecmskey3;?>">
              <input name="empirecmskey4" type="hidden" id="empirecmskey4" value="<?php echo $empirecmskey4;?>">
              <input name="empirecmskey5" type="hidden" id="empirecmskey5" value="<?php echo $empirecmskey5;?>">
				
</form>		
			</div>
		</div>
	</body>
	
<script src="./skin/js/jquery.js" type="text/javascript" charset="utf-8"></script>\n
<script src="./skin/js/layer/layer.min.js"></script>
<script>
	
	;((function(){
		
		var viewHeight=$(document).height();
		var loginbgHeight=$('.loginbg').height();
		loginbgHeight<viewHeight?$('.loginbg').height(viewHeight):$('.loginbg').height(loginbgHeight);
		
		var ask=$('.inputc .select');
		ask.hover(
			function(){
			
				$(this).find('.drop').stop(true,false).slideDown();
			},
			function(){
				$(this).find('.drop').hide();				
			}
		);
		var askv=$('.inputc .select .drop span');
		askv.hover(function(){
			$(this).css({color:'#ffffff',background:"#0099FF"});
		},function(){
			$(this).css({color:'#666666',background:"#ffffff"});
		}
		
		).click(function(){
			var v=parseInt($(this).attr('data'));
			ask.find('span').eq(0).html($(this).html());
			ask.find('span').eq(0).attr('data',v);
			$('.equestion').val(v);
			if(v&&v>0){
				$('.answer').show();
			}else{
				$('.answer').hide();				
			}
			$('.inputc .select .drop').hide();
		});
		
		
		
		$('#login').submit(function(){
			if(!$(":input[name='username']").val()||$(":input[name='username']").val()==""){
				layer.alert('用户名不能为空哦亲！');
				return false;
			}
			if(!$(":input[name='password']").val()||$(":input[name='password']").val()==""){
				layer.alert('密码不能为空哦亲！');
				return false;
			}	
	        if(ask.find('span').eq(0).attr('data')>0){
		      if(!$(":input[name='eanswer']").val()||$(":input[name='eanswer']").val()==""){
				 layer.alert('认证码不能为空哦亲！');
				 return false;
			  }				
			}
			if($("input:visible[name='key']")){
		      if(!$(":input[name='key']").val()||$(":input[name='key']").val()==""){
				 layer.alert('验证码不能为空哦亲！');
				 return false;
			  }				  
			}
			
		});
		

		
	}))();
	
</script>
	
</html>
