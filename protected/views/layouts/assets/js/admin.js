$(".open li").css("height","25px");
$(function(){
$(".open-hide").click(function(){
	var sub = $(this).siblings('.sub');
	if(sub.is(":visible")){
		sub.find('li').animate({height:"0px"},function(){
			sub.hide();	
		});
		
	}else{
		sub.show();
		sub.find('li').animate({height:"25px"});
	}
	
});
});
