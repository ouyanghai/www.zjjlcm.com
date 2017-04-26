<script type="text/javascript" src="<?php echo $this->assets['app'] ?>/js/article.js"></script>
<script type="text/javascript" src="<?php echo $this->assets['app'] ?>/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="<?php echo $this->assets['app'] ?>/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript" src="<?php echo $this->assets['app'] ?>/ueditor/lang/zh-cn/zh-cn.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $this->assets['app']; ?>/css/speak.css">
<style type="text/css">
	#line_form input{width:600px;height:25px;}
	#line_form li{margin-top:10px;}
</style>
<div class='post_border' style='margin-left:10px;'>
	<form action="<?php echo $this->createUrl('dopostline') ?>" method="post" id="line_form" enctype="multipart/form-data">
	<fieldset style="width:800px;padding-bottom:20px;">
		<legend>增加路线</legend>
		<ul id='form_ul'>
			<input type="hidden" name="id" value="<?php echo !empty($data->id)?$data->id:'' ?>"/>
			<li>标&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 题:<input type="text" name="title" id="title" value="<?php echo !empty($data->title)?$data->title:'' ?>"/></li>
			<li>交&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 通:<input type="text" name="traffic" size='114' id='traffic'/></li>
			<li>出发日期:<input type="text" name="date" id='datd'/></li>
			<li>旅行天数:<input type="text" name="day" id='day'/></li>
			<li>行程特色:<input type="text" name="feature" id='feature'/></li>
			<li>行程包含:</li>
			<li>
				<textarea style="width:700px;height:50px;" name='include' id='include' rows='30' cols='200'></textarea>
			</li>
			<li>行程不包含:</li>
			<li>
				<textarea style="width:700px;height:50px;" name='uninclude' id='uninclude' rows='30' cols='200'></textarea>
			</li>
			<li>注意事项:</li>
			<li>
				<textarea style="width:700px;height:50px;" name='notice' id='notice' rows='30' cols='200'></textarea>
			</li>
			<li>
				<ul>
					<li class='text_area'>行程介绍:</li>
					<li class='text_area'>
						<textarea style="width:700px;height:200px;" name='introduced' id='editor' rows='30' cols='200'><?php echo !empty($data->introduced)?CHtml::decode($data->introduced):'' ?></textarea>
					</li>
					<li style="clear:both;"></li>
				</ul>
			</li>
			<!--<li>配图:<input type='file' name='pic[]' id='pic' multiple="multiple"/></li>-->
			<li>配图:<input type='file' name='pic' id='pic'/></li>
			<li><div id='files' style="margin-left:35px;">
				<?php 
					if(Yii::app()->user->hasFlash('uploadFile'))
						echo CHtml::encode(Yii::app()->user->getFlash('uploadFile'));
				 ?>
			</div></li>
			<li ><input style="width:60px;height:30px;border-radius:5px;display:block;margin: 0 auto;" type='submit' value='提交' id ="sub"/></li>
		</ul>
	</fieldset>
	</form>
</div>
<script type="text/javascript">
	var ue = UE.getEditor("editor")
</script>