<html>
<head>
	<meta http-equiv="Content-type" content="text/html charset=utf-8" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<script src="<?php echo $this->assets['app']; ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->assets['app']; ?>/js/admin.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->assets['app']; ?>/css/admin.css"/>	
	<link rel="stylesheet" type="text/css" href="<?php echo $this->assets['app']; ?>/css/admin_user.css"/>
</head>
<body>
	<div id='top' >
		<div id='top_title'>
			<span>后台管理</span>
		</div>
		<div id='top_user'>
			<p>欢迎回来：<?php echo Yii::app()->user->name; ?>&nbsp;&nbsp;
			(<a href="<?php echo Yii::app()->createUrl('/admin/logout'); ?>">退出</a>)</p>
		</div>
	</div>
	<div id="jian"></div>
	<div id='main-content' >
		<div id='left'>
			<ul>
				<?php foreach($this->menu as $key => $val){?>
				<li class='left_ul_li'>
					<a class="open-hide" href="javascript:;"><?php echo $val['title']; ?></a>
					<ul class="sub <?php if(strpos(Yii::app()->request->pathInfo,$val['id'])!==false){echo 'open';}else{echo 'hide';} ?>">
						<?php foreach($val as $v){ if(is_array($v)){?>
						<li class="lic"><a href="<?php echo $v['url']; ?>"><?php echo $v['label'] ?></a></li>
						<?php }} ?>
					</ul>
				</li>
				<?php } ?>
			</ul>
		</div>
		<div id='right'><?php echo $content; ?></div>
		<div style="clear:both"></div>
	</div>
</body>
</html>