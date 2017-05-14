<div class="wrapper">
    <div class="crumbs-bar"> <a href="/">首页</a>&nbsp;&gt;&nbsp; 按主题分类&nbsp;&gt;&nbsp; <span>特价游</span> </div>

    <div class="dest-banner-box r10 clearfix">
        <div class="dest-inf">
           <div class="dest-intro">
            <h1 class="dest-name">特价游</h1>
            <p class="dest-eng-name"><a onclick="showid('smallLay');" style="cursor:pointer;">查看所有线路分类</a></p>
           </div>
           <p class="dest-amount">
            共有 <span class='gn-2 fb'><?php echo $num;?></span> 个推荐玩法</p>
        </div>
        <span class="icon-tt"></span>
        <div class="dest-banner"><img src="http://www.yncits006.com/images/52148582689eb.jpg" alt="特价游"/></div>
    </div>

    <div class="dest-wrap clearfix">
        <div class="ds-left">
            <div class="d-jour-list r5">
                <ul class="d-jour-ul clearfix" id="trip_list">
                <?php if(!empty($data)){ ?>
                <?php foreach ($data as $key => $value) { ?>
                    <li>
                        <span class="doc-tags top-<?php echo $key+1?>">玩法<i><?php echo $key+1?></i></span>
                        <div class="d-jour-box clearfix">
                            <div class="d-j-img">
                                <a href="<?php echo $this->createUrl('line',array('id'=>$value['id'])); ?>"><img class="lazy" src="<?php echo '/images/line/'.$value['pic']; ?>" alt="<?php echo $value['title'] ?>"/></a>
                                <div class="d-j-reason">
                                <p><?php echo $value['title'] ?></p>
                                </div>                            
                            </div>
                            <div class="d-j-info">
                                <div class="d-j-top">
                                    <h2 class="d-j-tit h2"><a href="<?php echo $this->createUrl('line',array('id'=>$value['id'])); ?>"><?php echo $value['title'] ?></a></h2>
                                    <div class="doc-info clearfix">
                                        <span class="doc-time left"><span>行程天数：<?php echo $value['days'] ?></span></span>
                                        <span class="doc-mdd left"><span>发团时间：<?php echo $value['started'] ?></span></span>
                                    </div>
                                    <div class="d-j-price">
                                        <span class="price">￥ <strong>电话咨询</strong>&nbsp;</span>
                                        <span class="c9" ><font color="#FF0000">(不含往返机票或火车)</font></span>
                                    </div>                                
                                </div>
                                <!--
                                <div class="d-j-dw lc-day-detail">
                                    <div class="doc-line-list2">
                                        <dl>
                                            <dt class="doc-day-num">D1</dt>
                                            <dd class="doc-mdd-list"><p>游客抵达春城昆明</p></dd>
                                        </dl>
                                    </div>
                                    <div class="doc-more"><a href="javascript:void(0)"><span class="icon-hide"></span></a></div>
                                </div>
                                -->
                            </div>
                        </div>
                    </li>
                <?php } ?>
                <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
    lazyimg();
    var headHeight=290;
    var nav=$("div.j-fix");
    $(window).scroll(function(){
        if($(this).scrollTop()>headHeight){
            nav.addClass("screen");
        }
        else{
            nav.removeClass("screen");
        }
    });
    $("div.lc-day-detail div.doc-line-list2").each(function(){
        $(this).children("dl:gt(3)").hide()
    });
    $("div.lc-day-detail div.doc-more").on("click","a",function() {
        var _rel = $(this).attr("rel");
        var $parentPrev = $(this).parent().prev();
        //var length = $parentPrev.find("dl").size();

        if( "1" === _rel ) {
            $(this).attr("rel", "");
            //$parentPrev.css("height","120px");
            $parentPrev.children("dl:gt(3)").hide();
            $(this).find("span").removeClass("icon-fode").addClass("icon-hide");
        }
        else{
            $(this).attr("rel", "1");
            //if(length > 4) {
            //    $parentPrev.css("height","auto");
            //}
            $parentPrev.children("dl:gt(3)").show();
            $(this).find("span").removeClass("icon-hide").addClass("icon-fode");
        }
    });
});
</script>
