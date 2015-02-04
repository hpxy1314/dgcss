;(function(){	
$(function(){
 
     $('.syspanel dt span').on('click',function(){
     	$(this).addClass('on').siblings('span').removeClass('on');
     	var index=$('.syspanel dt span').index(this);
     	$('.syspanel').find('dd').eq(index).stop(true,false).fadeIn().siblings('dd').hide();
     });
     
     
var E={
	"empty":'不能为空',
	"dberror":'数据库错误',
	"exist":'已存在',
	"success":'成功'
	
}
     
//addtable=增加字段
//listf=修改字段

//增加数据表按钮

$('.addtable').click(	
	function(){
		var href=$(this).attr('data');
		var dds=art.dialog.open(href,
		{width:'80%',height:'90%',lock:true,						
		
		 button:[
		    	 {
			    	name:'确定',
			    	focus:true,
			  		callback:function(){
					var iframe = this.iframe.contentWindow;               
				    var url=$(iframe.document.body).find('form').attr('action');
				   // alert(url);
					var sdata=$(iframe.document.body).find('form').serialize();
					
					$.ajax({
						url:url,
						type:'POST',
						data:sdata+'',					
						error:function(){
							alert('error');
						},
						success:function(data){
							var throughs=art.dialog.through;
							switch(data.toString()){
								case 'empty':							
								throughs({content:'字段'+E.empty,icon:'warning',id:'data1'}).lock().time(2);							
								break;
								case 'exist':
								throughs({content:'字段'+E.exist,icon:'warning',id:'data1'}).lock().time(2);
								break;	
								case 'dberror':
								a
								throughs({content:E.dberror,icon:'warning',id:'data1'}).lock().time(2);
								break;		
								case 'success':
								throughs({content:'添加字段'+E.success,icon:'succeed',id:'data1',
								close:function(){
									var m=$(window.parent)[0];
									if(m.main){
				                	m.main.location.reload();
				                    }else{
				                    	window.location.reload();
				                    }
				                	dds.close();
								}
								}).lock().time(2);							

								break;								
							}
						
						}
					});

					return false;
					}
			     },
			     {
			     	name:'重设',
			     	callback:function(){
					  var iframe = this.iframe.contentWindow;               
					  $(iframe.document.body).find('form')[0].reset();			     	
			     	  return false;
			     	}
			     }
			
		     ]

		},false);
		
	}
	
);//增加数据表
     
 
 
 
 

 
 $('.listf').click(	
	function(){
		var href=$(this).attr('data');
		var listfDialog=art.dialog.open(href,
		{width:'80%',height:'90%',lock:true,id:'listf',
		button:[
		  {
		  	name:'确定',focus:true,disabled:true,callback:function(){
		     var throughs=art.dialog.through;
 		     var iframes=this.iframe.contentWindow;
 		     var forms=$(iframes.document.body).find('form');
 		     var f=forms.find('#fname');
 		  
 		    if(f.length==1){
 	         	var urls=forms.attr('action');
 		        var datas=forms.serialize(); 	
 		        $.ajax({
 		        	url:urls,
 		        	type:'post',
 		        	data:datas,
 		        	error:function(){
 		        		alert('error');
 		        	},
 		        	success:function(data){
 		        		switch(data){
 		        			case 'empty':
 							throughs({content:'字段'+E.empty,icon:'warning',id:'data1'}).lock().time(2);							
							break;	
 		        			case 'exist':
 							throughs({content:'字段'+E.exist,icon:'warning',id:'data1'}).lock().time(2);							
							break;	
 		        			case 'success':
 							throughs({content:'操作'+E.success,icon:'succeed',id:'data1'}).lock().time(2);	
 							//window.frames['Openlistf'].history.go(-1);
 							iframes.history.go(-1);
 							setTimeout(function(){iframes.location.reload();},2000);
							break;								
 		        		}
 		        	},
 		        	complete:function(){
 		        		
 		        	}
 		        });
 		        //window.frames['Openlistf'].history.go(-1);
 		    }else{
 		    	console.log(iframes.location);
 		    	throughs({'content':'请选择增加或修改的字段'}).lock();
 		    }
		  		return false;
		  	}
		  }
		  
		]
		},false);
		
		art.dialog.data('list',listfDialog);
	}
	
);//增加修改字段
 
 
 

 
$('.addf').click(function(){
 	var listf=art.dialog.data('list');
 	listf.button({'name':'确定',disabled:false});
 
 	//return false;
 });//增加修改字段
 
 
 //增加新闻
 $('.addnews').click(function(){
		var href=$(this).attr('data');
		var listfDialog=art.dialog.open(href,{width:'90%',height:'90%',lock:true,id:'listnews',
		  button:[
		     {name:'确定',focus:true,callback:function(){
		    	 var throughs=art.dialog.through;
 		    	 var iframes=this.iframe.contentWindow;
 		    	 var forms=$(iframes.document.body).find('form[name="add"]');	
 		    	 var urls=forms.attr('action');
 		    	 var datas=forms.serialize();
 		    	 $.ajax({
 		    	 	url:urls,
 		    	 	data:datas,
 		    	 	error:function(){
 		    	 		alert('error');
 		    	 	},
 		    	 	success:function(data){
 		    	 		switch(data){
  		        			case 'empty':
 							throughs({content:'标题不能为空或选择模板',icon:'warning',id:'data1'}).lock().time(2);							
							break;			    	 			
 		    	 		}
 		    	 	}
 		    	 });
 		    	 
 		    	 return false;
		     }}
		  ]
		  
		},false);
 });
 
 
 
 
 
 
});		
})();
