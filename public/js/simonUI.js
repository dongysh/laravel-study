(function(){
	//为jQuery对象添加添加“静态方法”
	$.extend({

		simonTab : function(type,tabTitle,tabCont){
				$(tabCont).children("li").not(":first").css("display","none");
				var ttli = $(tabTitle).children("li");
				if(type == "hover"){
					ttli.hover(function(){
						$(this).addClass("tabCur");
						$(this).siblings().removeClass("tabCur");
						var tmp = ttli.index(this);
						$(tabCont).children("li").eq(tmp).css("display","block");	
						$(tabCont).children("li").eq(tmp).siblings().css("display","none");
					},function(){

					});
				}else if(type == "click"){
					ttli.click(function(){
						var tmp = $(tabTitle).index(this);
						$(this).addClass("tabCur");
						$(this).siblings.removeClass("tabCur");
						$(tabCont).children("li").eq(tmp).css("display","block");	
						$(tabCont).children("li").eq(tmp).siblings().css("display","none");
						return false;
					})
				}

		},
		checkShow : function(ipt,str){
			var obj = $(ipt);
			obj.focusin(function(){
					if (obj.val() == str){
						obj.val("")
					}
			});
			obj.focusout(function() {
				if (obj.val() ==''){obj.val(str)};
			});
		}

	});
		
	}
)(jQuery);