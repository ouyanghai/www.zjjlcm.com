<style type="text/css">
.villa-hot-pic img{width:760px;height:298px;}
#villa-scroll-pic img{width:100%;height:100%}
</style>
<!-- banner -->
<div class="villa-banner-box">
    <div class="villa-banner-list">
        <ul class="banner-pic clearfix" id="villa-scroll-pic">
            <li>
                <a href="/tour/?list-1-32-1.html" target="_blank"><img src="<?php echo $this->assets['app']; ?>/images/banner1.jpg" ></a>
            </li> 
            <li style="display:none;">
                <a href="/tour/?list-1-58-1.html" target="_blank"><img src="<?php echo $this->assets['app']; ?>/images/banner2.jpg" ></a>
            </li> <li style="display:none;">
                <a href="/tour/?list-1-151-1.html" target="_blank"><img src="<?php echo $this->assets['app']; ?>/images/banner3.jpg"/></a>
            </li><li style="display:none;">
                <a href="/tour/?list-1-153-1.html" target="_blank"><img src="<?php echo $this->assets['app']; ?>/images/banner4.jpg"/></a>
        </ul>
        <ol class="flex-control-nav" id="villa-scroll-controll">
            <li><a class="flex-active"></a></li>
            <li><a class=""></a></li>
			<li><a class=""></a></li>
			<li><a class=""></a></li>
        </ol>
    </div>
</div><!-- banner end -->
<!-- filter -->

<!-- filter end -->
<!-- content -->
<div class="villa-wrap">
    <div class="villa-bd">
        <ul class="villa-list">
            <?php if(!empty($data)){ ?>
            <?php foreach ($data as $key => $value) { ?>
            <li class="villa-hot rmmd">
                <a href="<?php echo $this->createUrl("article",array("id"=>$value['id'])); ?>" target="_blank" class="villa-link" title="香格里拉">
                <div class="villa-hot-pic">
                    <img original="<?php echo '/images/article/'.$value['pic']; ?>" class="lazy" src="<?php echo '/images/article/'.$value['pic']; ?>" alt=""/>
                                    </div>
                <div class="villa-hot-inf">
                   <div class="villa-info-box">
                    <h2 class="villa-tt "><strong class="tt1"><?php echo $value['name']; ?></strong><!--<span class="tt2">二级标题</span>--></h2>
                   <p class="villa-eng">&nbsp;</p><!--英文标题-->
                    </div>
                    <div class="manager-box">
                        <p class="manager-name">内容摘要：</p>
                        <div class="manager-msg">
                            <p class="manager-text"><?php echo mb_substr(strip_tags(htmlspecialchars_decode($value['content'])),0,45,'utf-8');?></p>
                        </div>
                    </div>
                    <div class="v-sale-box clearfix">
                        <span class="go-detail">查看详情</span>
                    </div>
                </div>
               </a>
            </li>
            <?php } }?>
        </ul>

        <div class="page-box">
            <div class="page-field">
                <a href='/web/pic?page=1' >首页</a>&nbsp;
                <a href='/web/pic?page=<?php echo $page-1; ?>' class='UpPage'>上一页</a>&nbsp;
                <a href='/web/pic?page=<?php echo $page+1; ?>' class='NextPage'>下一页</a>&nbsp;
                <a href='/web/pic?page=<?php echo $pages; ?>' >尾页</a> <a>页次：<?php echo $page."/".$pages; ?>页 10条/页</a>
            </div>
        </div>    
    </div>
</div>

<script>
$(function(){

	var tophtml="<div id=\"izl_rmenu\" class=\"izl-rmenu\"><a href=\"http://byt.zoosnet.net/JS/LsJS.aspx?siteid=BYT51845438&float=1&lng=cn\" class=\"btn btn-kf\"></a><a href=\"tencent://Message/?Uin=1005725147&websiteName=/=&Menu=yes\" class=\"btn btn-qq\"></a><div class=\"btn btn-phone\"><div class=\"phone\">177 5265 2621</div></div><div class=\"btn btn-top\"></div></div>";
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

<script type="text/javascript">
$(document).ready(function(){
    lazyimg();
    //目的地选中
    var dest = '';
    if(dest){
        $('ul.filter-ds li').each(function(){
            if($(this).find('a').html()==dest){
                $(this).addClass('on');
            }
        });
    }
    //目的地选中结束
    /*幻灯开始*/
    var _index = 1;
    var _time = 4000;
    var _imgLength = $("#villa-scroll-pic>li").length;

    if( 0 == _imgLength )
        return;

    var _timerId = setInterval(function () {
        autofocus(_index); _index++; if (_index == _imgLength) {
                _index = 0;
        }
    }, _time);

    $("#villa-scroll-controll>li").find("a").hover(function () {
            clearInterval(_timerId);
        }, function () {
            _timerId = setInterval(function () {
                autofocus(_index); _index++; if (_index == _imgLength) {
                    _index = 0;
                }
            }, _time);
        }).mouseover(function () {
            _index = $(this).parent().index();
            autofocus(_index);
    });

    function autofocus(_index) {
        var $li = $("#villa-scroll-pic>li").eq(_index);
        $li.fadeIn("slow").siblings().hide();
        var rel = $li.attr("rel");
        if( _index && !rel) {
            $li.attr("rel", "1");
            var $img = $li.find("img");
            $img.attr("src", $img.attr("original"));
        }

        var $ol = $("#villa-scroll-controll>li").eq(_index);
        $ol.find("a").addClass("flex-active");
        $ol.siblings().find("a").removeClass("flex-active");
    }
    /*幻灯结束*/

});
</script>


