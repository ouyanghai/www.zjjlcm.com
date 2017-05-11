<div class="wrapper">
    <div class="crumbs-bar"> <a href="/">首页</a>&nbsp;&gt;&nbsp;<span>
    <?php if($act=='about'){echo '公司介绍';}else{echo '联系我们';} ?></span> </div>
    <!-- about-box -->
    <div class="about-box clearfix">
        <div class="about-left">
		    <div class="about-menu">
		        <ul class="about-menu-ul">
		            <li class="<?php if($act=='about'){echo 'selected';}?>">
		                <a href="<?php echo $this->createUrl('company',array('act'=>'about')) ?>">公司介绍</a>
		            </li>
		            <li class="<?php if($act=='connect'){echo 'selected';}?>">
		                <a href="<?php echo $this->createUrl('company',array('act'=>'connect')) ?>">联系我们</a>
		            </li>
				</ul>
		    </div>
		</div>
        <div class="about-cont">
          	<div class="about-detail">
	            <div class="about-title">
	              	<h2><?php if($act=='about'){echo '公司介绍';}else{echo '联系我们';} ?></h2>
	            </div>
	            <div class="about-info">
	              	<div class="brand-intro">
	              	 	<div class="brand-txt2">
	                 		
                 		</div>
              		</div>
            	</div>
          	</div>
        </div>
    </div>
    <!-- about-box end -->
</div>
<script>
$(function(){

	var tophtml="<div id=\"izl_rmenu\" class=\"izl-rmenu\"><a href=\"http://byt.zoosnet.net/JS/LsJS.aspx?siteid=BYT51845438&float=1&lng=cn\" class=\"btn btn-kf\"></a><a href=\"tencent://Message/?Uin=1005725147&websiteName=/=&Menu=yes\" class=\"btn btn-qq\"></a><div class=\"btn btn-phone\"><div class=\"phone\">400-880-7433</div></div><div class=\"btn btn-top\"></div></div>";
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
</script>
<div id="top"></div>
<!-- Footer End-->
<style type="text/css">
#www_zzjs_net{width:220px;height:130px;text-align:center;}
*html .bottomcut{position:absolute}
.bottomcut{position:fixed;bottom:0;left:0;z-index:9999;width:100%;height:52px;background:url(/bottom_server_bg.jpg);_position:absolute;_top:expression(documentElement.scrollTop+documentElement.clientHeight-this.offsetHeight)}
.bottomcut ul{width:775px;height:52px;background:url(/bottom_server1.jpg) no-repeat;margin:0 auto}
.bottomcut ul .a1 a,.bottomcut ul .a2 a{display:block;float:right;width:134px;height:33px}
.bottomcut ul .a1 a{margin:11px 16px 0 0}
.bottomcut ul .a2 a{margin:11px 13px 0 0}
.bottomcut2{position:fixed;bottom:0;left:0;z-index:9999;width:100%;height:52px;background:url(bottom_server_bg.jpg);_position:absolute;_top:expression(documentElement.scrollTop+documentElement.clientHeight-this.offsetHeight)}
.bottomcut2 ul{width:775px;height:52px;background:url(bottom_server2.jpg) no-repeat;margin:0 auto}
.bottomcut2 ul .a1 a,.bottomcut2 ul .a2 a{display:block;float:right;width:134px;height:33px}
.bottomcut2 ul .a1 a{margin:11px 16px 0 0}
.bottomcut2 ul .a2 a{margin:11px 13px 0 0}
li {list-style-type:none;}
</style>

<style type="text/css">
#www_zzjs_net{width:220px;height:180px;text-align:center;}
</style>
<script language="javascript">
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
</script>

