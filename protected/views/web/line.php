<div class="wrapper">
    <div class="crumbs-bar"> 
    	<a href="/">首页</a>&nbsp;&gt;&nbsp; 
    	<a id="top_guide" href="/tour/?list-1-32-1.html" target="_blank">特价游</a>&nbsp;&gt;&nbsp;
    	<span> <a id="top_guide" href="/line/?line-1996-88.htm" target="_blank"><?php echo $data['title']; ?></a></span> 
    </div>
    <div class="container-r5">
      	<div class="c-detail-top">
          	<div class="c-title-line">
              	<h1 class="title"><?php echo $data['title']; ?></h1>
          	</div>
          	<div class="c-line-box clearfix">
              	<div class="pic-box">
                  	<div class="pic-scroll">
                      	<a href="javascript:;" class="prev disable"></a>
                      	<div class="pic-list">
                          	<ul class="pic-small" style="height:auto;float:left;">
                              <li class="current" big="<?php echo '/images/line/'.$data['pic']; ?>"><img src="<?php echo '/images/line/'.$data['pic']; ?>" rsrc="<?php echo '/images/line/'.$data['pic']; ?>" width="102" height="68"></li>
                          	</ul>
                      	</div>
                      	<a href="javascript:;" class="next disable"></a>
                  	</div>
                  	<div class="pic-large">
                      	<div class="pic-inf" style="display:none;"></div>
                      	<div class="big-pic"><img width='450' height='300' src="<?php echo '/images/line/'.$data['pic']; ?>" class="pic-load" alt=""></div>
                  	</div>
              	</div>
              	<div class="line-sum">
                  	<div class="line-sum-inf">
                        <dl class="ln-inf-item">
                          <dt>出发日期：</dt>
                          <dd><?php echo $data['started']; ?>&nbsp;&nbsp;&nbsp;&nbsp;</dd>
                      	</dl>
                      	<dl class="ln-inf-item">
                          <dt>旅行天数：</dt>
                          <dd><?php echo $data['days']; ?>&nbsp;&nbsp;&nbsp;&nbsp;<font color="#999999">交通：</font><?php echo $data['traffic']; ?></dd>
                      	</dl>
                      	<dl class="ln-inf-item">
                          <dt>所属分类：</dt>
                          <dd>按主题分类 - <a id="top_guide" href="/tour/?list-1-32-1.html" target="_blank">特价游</a></dd>
                      	</dl>                      
                    </div>
                  	<div class="price_box">
                      <div class="price">￥ <strong>电话咨询</strong></div>
                      <button class="book_btn" onclick="window.open('http://pht.zoosnet.net/LR/Chatpre.aspx?id=PHT93937523&lng=cn')" type="button">咨询/预订</button><br/>
					</div>
                  	<div class="ln-highlight">
                      	<p class="hh-tt"><strong>行程特色</strong></p>
                      	<div class="ln-highlight-cont"><p>
							<span style="background-color:#FFFFFF;color:#333333;font-family:微软雅黑;font-size:20px;line-height:29px;"><?php echo $data['title']; ?></span> 
							</p>
						</div>
                  	</div>
              	</div>
          	</div>
      	</div>
    </div>
    <div class="container-r5">
	    <div class="ln-nav-box clearfix">
	          <ul class="ln-nav-list">
	            
			  <li><a href="javascript:void(0);" to="route">行程介绍</a></li>
			  <li><a href="javascript:void(0);" to="cost">费用包含</a></li>
			  <li><a href="javascript:void(0);" to="warning">费用不含</a></li>
			  <li><a href="javascript:void(0);" to="344">注意事项</a></li>
			  </ul>
	          <div class="bk-s-right">
	              <button class="bk-s-btn" type="button" onclick="window.open('http://pht.zoosnet.net/LR/Chatpre.aspx?id=PHT93937523&lng=cn')">咨询/预订</button> </div>
	    </div>
	  
      	<div class="detail-cont-box">
        <div class="detail-item">
        	<a name="route"></a>
            <div class="detail-item-tit">
                <div class="title-item">
                    <h3>行程介绍</h3>
                    <em class="cornor-icon"></em> </div>
            </div>
            <div class="detail-item-cont">
                <div class="jour-box">
					<?php echo htmlspecialchars_decode($data['introduce']); ?>
				</div>
            </div>
        </div>
        <div class="detail-item"> 
        	<a name="cost"></a>
            <div class="detail-item-tit">
                <div class="title-item">
                    <h3>费用包含</h3>
                    <em class="cornor-icon"></em> 
                </div>
            </div>
            <div class="detail-item-cont">
                <div class="detail-field">
                    <div class="detail-inf-txt">
                    	<?php echo htmlspecialchars_decode($data['include']); ?>
                    </div>
                </div> 
            </div>
        </div>        
        <div class="detail-item"> 
        	<a name="warning"></a>
              <div class="detail-item-tit">
                  <div class="title-item">
                      <h3>费用不含</h3>
                      <em class="cornor-icon"></em> </div>
              </div>
              <div class="detail-item-cont">
                  <div class="detail-field">
                      <div class="detail-inf-txt">
                      	<?php echo CHtml::decode($data['uninclude']); ?>
                      </div>
                  </div>
              </div>
        </div>                                                
        <div class="detail-item">
        	<a name="344"></a>
		    <div class="detail-item-tit">
		        <div class="title-item">
		            <h3>注意事项</h3>
		            <em class="cornor-icon"></em> 
		       	</div>
    		</div>
    		<div class="detail-item-cont">
      			<div class="detail-field">
                    <div class="detail-inf-txt">
                    	<span style="color:#006600;"><strong>如确定参加线路后，请您提前预订行程，预订方式有：
                    	</strong></span><br />
						<strong><span style="color:#006600;">A、</span></strong>电话预订：直接拨打免费专线 400-880-7433，告知您的线路、人数、抵达车次/航班及日期；<br />
						<strong><span style="color:#006600;">B、</span></strong>在线预订：直接点击在线预订按钮：旅游顾问，告知您的线路、人数、抵达时间等信息；<br />
						票务预定： 我社可为游客代订往返各地的飞机票、火车票；<br />
						增加景点： 此线路可随游客的需求增加其他的景点；<br />
					</div>
                </div>    
            </div>
		</div>
		</div>
	</div>
</div>

<script>
$(function(){

	var tophtml="<div id=\"izl_rmenu\" class=\"izl-rmenu\"><a href=\"http://det.zoosnet.net/LR/Chatpre.aspx?id=DET24051751&lng=cn\" class=\"btn btn-kf\"></a><a href=\"tencent://Message/?Uin=2853327850&websiteName=/=&Menu=yes\" class=\"btn btn-qq\"></a><div class=\"btn btn-phone\"><div class=\"phone\">400-880-7433</div></div><div class=\"btn btn-top\"></div></div>";
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
  
<!-- Footer End-->
<script type="text/javascript">
var focus_arr = [];
$('img.focus').each(function(index,t){
  var obj = $(t);
  var src = obj.attr('original');
  if(index<2){
    focus_arr.push('<li title="'+obj.attr('title')+'" big="'+(src)+'"><img src="'+(src)+'" rsrc="'+(src)+'" width="102" height="68"></li>');
  }else{
    focus_arr.push('<li title="'+obj.attr('title')+'" big="'+(src)+'"><img src="blank.gif" rsrc="'+(src)+'" width="102" height="68"></li>');
  }
});
if(focus_arr.length>2){
  $('div.pic-scroll a.next').removeClass('disable');
}
$('ul.pic-small').append(focus_arr.join(''));
var vid = "157";
$('div.detail-cont-box div.detail-item:last').css({'border-bottom':'0px'});
/*幻灯片开始*/
var nextFocusClick = 1;//点击下一页的次数
function resetFocus(){
  var currentObj = $('ul.pic-small li.current');
  if(currentObj.attr('title')){
    $('div.pic-inf').html(currentObj.attr('title')).show();
  }else{
    $('div.pic-inf').hide();
  }
  $('div.big-pic img').attr('src',currentObj.attr('big'));
}
$('ul.pic-small li').hover(function(){
  $('ul.pic-small li').removeClass('current');
  $(this).addClass('current');
  resetFocus();
});
$('div.pic-scroll a.prev').click(function(){
  if($(this).hasClass('disable')) return false;
  $(this).addClass('disable');
  var scrollBoxObj = $('div.pic-scroll div.pic-list');
  var scrollTop = scrollBoxObj.scrollTop();
  scrollBoxObj.animate({scrollTop:scrollTop-210},400);
  if(scrollTop-210>0){
    $(this).removeClass('disable');
  }
  $('div.pic-scroll a.next').removeClass('disable');
});
$('div.pic-scroll a.next').click(function(){
  if($(this).hasClass('disable')) return false;
  nextFocusClick +=1;
  $('div.pic-scroll ul.pic-small li:lt('+(nextFocusClick*3)+')').each(function(index,element){
    var imgOne = $(this).find('img');
    if(imgOne.attr('rsrc')!=imgOne.attr('src')){
      imgOne.attr('src',imgOne.attr('rsrc'));
    }
  });
  $(this).addClass('disable');
  var scrollBoxObj = $('div.pic-scroll div.pic-list');
  var scrollTop = scrollBoxObj.scrollTop()+210;
  scrollBoxObj.animate({scrollTop:scrollTop},400);
  if(scrollTop+210<$('div.pic-scroll ul.pic-small').height()){
    $(this).removeClass('disable');
  }
  $('div.pic-scroll a.prev').removeClass('disable');
});
/*幻灯片结束*/
lazyimg();
</script>
<script src="<?php echo $this->assets['app'];?>/js/view.js"></script>
