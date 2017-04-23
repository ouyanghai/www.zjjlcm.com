<div class="city_create">
	<form id="addcity_form" action="<?php echo $this->createUrl('createcity'); ?>" method="post" enctype="multipart/form-data">
	<fieldset style="width:600px;padding-bottom:20px;">
		<legend>创建攻略城市</legend>
		<ul id="album_ul">
			<input type="hidden" name="city_id" id="city_id" value="<?php echo $data['id'];?>"/>
			<li>城市名称:<input type="text" name="title" id="title" placeholder="请输入城市名称" value="<?php echo $data['name'];?>"/></li>
			<li><input type="submit" id="modcity" value="提交"/></li>
		</ul>
	</fieldset>
		
	</form>

</div>