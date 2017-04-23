<script type="text/javascript" src="<?php echo $this->assets['app'] ?>/js/article.js"></script>
<script type="text/javascript" src="<?php echo $this->assets['app'] ?>/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="<?php echo $this->assets['app'] ?>/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript" src="<?php echo $this->assets['app'] ?>/ueditor/lang/zh-cn/zh-cn.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $this->assets['app']; ?>/css/speak.css">
<div class='post_border' style='margin-left:10px;'>
	<form action="<?php echo $this->createUrl('dopost') ?>" method="post" id="post_form" enctype="multipart/form-data">
	<fieldset style="width:800px;padding-bottom:20px;">
		<legend>信息发表</legend>
		<ul id='form_ul'>
			<input type="hidden" name="id" value="<?php echo !empty($data->id)?$data->id:'' ?>"/>
			<li>标题:<input type="text" name="title" size='114' id="title" value="<?php echo !empty($data->title)?$data->title:'' ?>"/></li>
			<li>
				<ul>
					<li class='text_area'>内容:</li>
					<li class='text_area'>
						<textarea style="width:700px;height:200px;" name='content' id='editor' rows='30' cols='200'><?php echo !empty($data->content)?CHtml::decode($data->content):'' ?></textarea>
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
