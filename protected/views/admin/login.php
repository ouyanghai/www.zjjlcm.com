<?php
	$this->pageTitle = Yii::app()->name.'-login';
?>



<div class="form">
	<form action='login' method='post' id='subForm'>
		<div id='pwdValTip'></div>
		<div class='row'>
			<?php echo $model->getAttributeLabel('username');?>
			<input type='text' placeholder='请输入用户名' name='User[username]' id='user' />
		</div>
		<div id='userTip'></div>

		<div class='row'>
			<?php echo $model->getAttributeLabel('password');?>
			<input type='password' placeholder='请输入密码' name='User[password]' id='pwd' />
		</div>
		<div id='pwdTip'></div>

		<input type='submit' value='登录' id='btn'/>
	</form>
</div>

<script type="text/javascript" src="<?php echo $this->assets['app']; ?>/js/login.js"></script>


