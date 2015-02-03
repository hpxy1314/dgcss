$(document).ready(function(){
	
myFocus.set({
    id:'boxID',//焦点图盒子ID
    pattern:'mF_quwan',//风格应用的名称
    time:3,//切换时间间隔(秒)
    trigger:'click',//触发切换模式:'click'(点击)/'mouseover'(悬停)
    width:565,//设置图片区域宽度(像素)
    height:528,//设置图片区域高度(像素)
    txtHeight:'default'//文字层高度设置(像素),'default'为默认高度，0为隐藏
});
	
	
	
	
$('.login_bar .sub').hover(
   function(){
      $(this).addClass('sub1');
   },
   function(){
      $(this).removeClass('sub1')
   }

);

$('.login_bar input').focusin(
  function(){
     $(this).css('border','1px solid #ef7900');
  
  }
);

$('.login_bar input').focusout(
  function(){
     $(this).css('border','1px solid #d1d1d1');
  
  }
);



$('.t_top_r div').hover(
       function(){
		      $(this).find('.drop').fadeIn();
		   },
		   
       function(){
		      $(this).find('.drop').fadeOut();
		   }
);


	
});