var isie6 = window.XMLHttpRequest?false:true;
window.onload = function(){
    var www_zzjs_net = document.getElementById('www_zzjs_net');
    var zzjs_net = document.getElementById('zzjs_net');
   if(isie6){
         www_zzjs_net.style.position = 'absolute';
         window.onscroll = function(){
              zzjs_net.innerHTML = '';
          }
   }else{
      www_zzjs_net.style.position = 'fixed';
   }
      www_zzjs_net.style.right = '0';
      www_zzjs_net.style.bottom = '0';
}
$(document).ready(function(){
    lazyimg();
});
$(function(){

	var tophtml="<div id=\"izl_rmenu\" class=\"izl-rmenu\"><a href=\"http://pht.zoosnet.net/LR/Chatpre.aspx?id=PHT93937523&lng=cn\" class=\"btn btn-kf\" target='_blank'></a><a target='_blank' href=\"tencent://Message/?Uin=2853327850&websiteName=/=&Menu=yes\" class=\"btn btn-qq\"></a><div class=\"btn btn-phone\"><div class=\"phone\">177 5265 2621</div></div><div class=\"btn btn-top\"></div></div>";
	$("#top").html(tophtml);
	$("#izl_rmenu").each(function(){
		$(this).find(".btn-wx").mouseenter(function(){
			$(this).find(".pic").fadeIn("fast");
		});
		$(this).find(".btn-wx").mouseleave(function(){
			$(this).find(".pic").fadeOut("fast");
		});
		$(this).find(".btn-phone").mouseenter(function(){
			$(this).find(".phone").fadeIn("fast");
		});
		$(this).find(".btn-phone").mouseleave(function(){
			$(this).find(".phone").fadeOut("fast");
		});
		$(this).find(".btn-top").click(function(){
			$("html, body").animate({
				"scroll-top":0
			},"fast");
		});
	});
	var lastRmenuStatus=false;
	$(window).scroll(function(){//bug
		var _top=$(window).scrollTop();
		if(_top>200){
			$("#izl_rmenu").data("expanded",true);
		}else{
			$("#izl_rmenu").data("expanded",false);
		}
		if($("#izl_rmenu").data("expanded")!=lastRmenuStatus){
			lastRmenuStatus=$("#izl_rmenu").data("expanded");
			if(lastRmenuStatus){
				$("#izl_rmenu .btn-top").slideDown();
			}else{
				$("#izl_rmenu .btn-top").slideUp();
			}
		}
	});
});