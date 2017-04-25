var edate_obj = {};
var sdate_obj = {};
$(document).ready(function(){
    /*导航部分*/
    var is_scrool = true;
    var menu_list_obj = $('ul.ln-nav-list li');
    menu_list_obj.first().addClass('current');

    var headHeight=570;
    var nav=$(".ln-nav-box");
    var nav_arr = [];
    $('ul.ln-nav-list li a').each(function(index,ele){
      var to = $(this).attr('to');
      var to_obj = $('a[name='+to+']');
      var pos = to_obj.position();
      nav_arr.push({'to':to,'top':pos.top});
    });
    nav_arr  = nav_arr.reverse();
    var scrollTop = 0;
    var nav_len = nav_arr.length;
    var menu_height = $('div.ln-nav-box').height()+60;
    $(window).scroll(function(){
      scrollTop = $(this).scrollTop();
      if(scrollTop>headHeight){
        nav.addClass("screen");
        if(is_scrool){
            $('ul.ln-nav-list li.current').removeClass('current');
            for(var i=0;i<nav_len;i++){
              if(scrollTop+menu_height>=nav_arr[i]['top']){
                $('ul.ln-nav-list li a[to='+nav_arr[i]['to']+']').parents().addClass('current');
                break;
              }
            }
        }else{
            is_scrool = true;
        }
      }else{
        $('ul.ln-nav-list li.current').removeClass('current');
        $('ul.ln-nav-list li:eq(0)').addClass('current');
        nav.removeClass("screen");
      }
    });
    $('ul.ln-nav-list li a').click(function(){
        var to = $(this).attr('to');
        var to_obj = $('a[name='+to+']');
        var pos = to_obj.position();
        is_scrool = false;
        $("html, body").scrollTop(pos.top-92);
        $('ul.ln-nav-list li.current').removeClass('current');
        $('ul.ln-nav-list li a[to='+to+']').parents().addClass('current');
    });
    /*导航部分结束*/
});

