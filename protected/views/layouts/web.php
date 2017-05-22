<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">
<title>张家界驴参谋旅游网/张家界旅游/张家界自由行</title>
<meta name="description" content="张家界旅游,张家界驴参谋,张家界自助游,张家界自由行,张家界旅游攻略">
<meta name="keywords" content="张家界旅游,张家界驴参谋,张家界自助游,张家界自由行,张家界旅游攻略">
<script src="<?php echo $this->assets['app']; ?>/js/jquery.min.js"></script>
<script src="<?php echo $this->assets['app']; ?>/js/public.min.js"></script>
<script language="javascript" src="<?php echo $this->link_js; ?>"></script>
<script type="text/javascript" src="<?php echo $this->assets['app']; ?>/js/shouye.js"></script>
<link href="<?php echo $this->assets['app']; ?>/css/base.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->assets['app']; ?>/css/index.css" rel="stylesheet" type="text/css">

</head>
<body class="index-bg">
	<!-- header End -->
	<div class="header-box index-header">
	    <div class="header-in">
	        <div class="header-wp">
	          	<div class="h-logo"> 
	          		<!--<a href="宜昌富伦特国际旅行社有限公司" title="旅游网"></a> -->
	          		<img width='150' height='60' src="<?php echo $this->assets['app'];?>/images/logo.png">
	          	</div>
	            <div class="h-nav-box">
	                <ul class="h-nav-list clearfix">
	                	<?php foreach ($this->menu as $value) { ?>
	                	<li><a id="<?php echo $value['id'];?>" class="<?php echo $value['class'];?>" href="<?php echo $value['url'] ?>" ><?php echo $value['label'];?></a></li>	
	                	<?php } ?>
	                </ul>
	          	</div>
	            <div class="h-right clearfix">
	                <div class="h-tel left"><span class="tel">17752652621</span></div>
	                <a class="h-collect left" href="###" onclick="myAddPanel()" title="收藏"></a>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- header End -->

	<?php  
	echo $content;
	?>

<div class="copyright"> Copyright <a href="/shan2015/ad_login.asp" target="_blank"  class="copyright">&copy;</a> 2017　<font color="#FFFFFF">驴参谋</font>　版权所有 zjjlcm 
<a href="<?php echo $this->createUrl('company',array('act'=>'about')) ?>"  class="copyright">关于我们</a>&nbsp; <a href="<?php echo $this->createUrl('company',array('act'=>'connect')) ?>"  class="copyright">联系我们</a><br/>
<span>张家界魅力湘西国际旅行社有限责任公司武陵源营业部&nbsp;&nbsp;&nbsp;&nbsp;湘ICP备17008510号</span>
</div>


<div id="top"></div>
<!-- Footer End-->
<!--
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="50">
	
		<div class="bottomcut">
		<ul>
		<li class="a1"><a href="http://pht.zoosnet.net/LR/Chatpre.aspx?id=PHT93937523&lng=cn" target="_blank"></a></li>
		<li class="a2"><a href="http://pht.zoosnet.net/LR/Chatpre.aspx?id=PHT93937523&lng=cn" target="_blank"></a></li>
		</ul>
		</div>

	</td>
	  </tr>
</table>
-->
<div id ="zzjs_net" style="display:none;">请用手机扫描</div>
<!--
<div id="www_zzjs_net" style="z-index:9999;"><a href="http://pht.zoosnet.net/LR/Chatpre.aspx?id=PHT93937523&lng=cn" target="_blank"><img src="http://www.yncits006.com/qqzx.gif" border="0" /></a></div>
-->
<script type="text/javascript" src="<?php echo $this->assets['app'] ?>/js/shouye_bottom.js"></script>
<script type="text/javascript">
	$("#child_menu_li").mouseover(function(){
		$('#top_dest_id').show();$('#dest_tab').addClass('dest-on');
	}).mouseout(function(){
		$('#top_dest_id').hide();$('#dest_tab').removeClass('dest-on');
	});
</script>
</body>
</html>