;(function(){	
$(function(){

  var leftbarH,syspanelH,mainrH,wid=null,wid1;//侧边栏高度



  //.mainr
    	
 

   $(window).ready(function(){    	
   	   var documentH=parseInt($(window).height())-100;  
   	   var documentW=parseInt($('body').width())-$('.leftbar').width();  

   	   $('.mainr').width(documentW);



   
   	   leftbarH=$('.leftbar').height();
   	   syspanelH=$('.syspanel').height();
   	   mainrH=$('.mainr').height();

   	   $('.mainr').height(documentH);
       if(leftbarH<documentH){
  	    	$('.leftbar').height(documentH);

       }  	

       
       if($('.mainr').height()<mainrH){
       	  $('.syspanel').height(mainrH);
       }else{
       	  $('.syspanel').height(documentH-30);
       }
   	   $('.quickbar').width($('.mainr')[0].scrollWidth-261);	      

        
       
   }).resize(
   	 function(){
   	   var documentH=parseInt($(window).height())-100;  
   	   var documentW=parseInt($('body').width())-$('.leftbar').width();  


       if(wid){
       	   $('.mainr').width(documentW+210);
       
       }else{
   	      $('.mainr').width(documentW);
   	    

   	     
       }
   
 
  	    	$('.leftbar').height(documentH); 	    	

  	    	$('.mainr').height(documentH);

           if($('.mainr').height()<mainrH){
       	     $('.syspanel').height(mainrH);
           }else{
       	     $('.syspanel').height(documentH-30);
           }
     	   $('.quickbar').width($('.mainr')[0].scrollWidth-261);		    	
            
   	 }
   );//侧边栏百分高
   
  

  	  $('.collsan').toggle(function(){
   	  	$('.leftbar').animate({left:'-210px'},function(){
   	  		    wid=$('.mainr').width();
   	  		    var wids=$(window.frames["main"].document).find('body');
   	  		    wid1=wids[0].scrollWidth;

   	  	     	$('.mainr').width($('.mainr').width()-$('.leftbar').position().left);
 	            //$('.quickbar').width($('.mainr')[0].scrollWidth-261);	      
   	  	     	
   	  	     	
   	    });

   	  },function(){
   	  	$('.leftbar').animate({left:'0px'},function(){
   	  	     	$('.mainr').width(wid);
   	  	        $('.quickbar').width(wid-261);
   	  	        //console.log($('.quickbar').width(wid1-261));
                wid=null;
   	  	     	
   	    });   	  	
   	  });
   	 

   
     $('.syspanel dt span').on('click',function(){
     	$(this).addClass('on').siblings('span').removeClass('on');
     	var index=$('.syspanel dt span').index(this);
     	$('.syspanel').find('dd').eq(index).stop(true,false).fadeIn().siblings('dd').hide();
     });
     
  	

  

});		
})();
