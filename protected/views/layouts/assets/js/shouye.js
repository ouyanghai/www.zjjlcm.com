
var LiveAutoInvite0='您好，来自%IP%的朋友';
var LiveAutoInvite1='来自首页的对话';
var LiveAutoInvite2='网站商务通 主要功能：<BR>1、主动邀请<BR>2、即时沟通';
var LrinviteTimeout=120;
var LR_invite_m=1;
var LrinviteTimeout=3;
var LR_next_invite_seconds = 50; //10秒后再次显示自动邀请

function showid(idname){
	var isIE = (document.all) ? true : false;
	var isIE6 = isIE && ([/MSIE (\d)\.0/i.exec(navigator.userAgent)][0][1] == 6);
	var newbox=document.getElementById(idname);
	newbox.style.zIndex="9999";
	newbox.style.display="block"
	newbox.style.position = !isIE6 ? "fixed" : "absolute";
	newbox.style.top =newbox.style.left = "50%";
	newbox.style.marginTop = - newbox.offsetHeight / 2 + "px";
	newbox.style.marginLeft = - newbox.offsetWidth / 2 + "px";  
	var layer=document.createElement("div");
	layer.id="layer";
	layer.style.width=layer.style.height="100%";
	layer.style.position= !isIE6 ? "fixed" : "absolute";
	layer.style.top=layer.style.left=0;
	layer.style.backgroundColor="#000";
	layer.style.zIndex="9998";
	layer.style.opacity="0.4";
	document.body.appendChild(layer);
	var sel=document.getElementsByTagName("select");
	for(var i=0;i<sel.length;i++){        
	sel[i].style.visibility="hidden";
}
function layer_iestyle(){
	layer.style.width=Math.max(document.documentElement.scrollWidth, document.documentElement.clientWidth)
	+ "px";
	layer.style.height= Math.max(document.documentElement.scrollHeight, document.documentElement.clientHeight) +
	"px";
}
function newbox_iestyle(){      
	newbox.style.marginTop = document.documentElement.scrollTop - newbox.offsetHeight / 2 + "px";
	newbox.style.marginLeft = document.documentElement.scrollLeft - newbox.offsetWidth / 2 + "px";
}
if(isIE){layer.style.filter ="alpha(opacity=60)";}
if(isIE6){  
	layer_iestyle()
	newbox_iestyle();
	window.attachEvent("onscroll",function(){                              
		newbox_iestyle();
	})
	window.attachEvent("onresize",layer_iestyle)          
	}  
	layer.onclick=function(){
		newbox.style.display="none";
		layer.style.display="none";
		for(var i=0;i<sel.length;i++){
			sel[i].style.visibility="visible";
		}
	}
}

function myAddPanel() {
    try {
        window.external.addFavorite("宜昌富伦特国际旅行社有限公司", "旅游网");
    }
    catch (e) {
        try {
            window.sidebar.addPanel("旅游网", "宜昌富伦特国际旅行社有限公司", "");
        }
        catch (e) {
            alert("您使用的浏览器不支持此功能，请使用“Ctrl + D”键手动加入收藏");
        }
    }
}