<link rel="stylesheet" type="text/css" href="<?php echo $this->assets['app'];?>/css/admin_user.css">
<script type="text/javascript" src="<?php echo $this->assets['app']; ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $this->assets['app']; ?>/js/admin.js"></script>
<form id='uform' method='post'>
	<div class='row'><input type='hidden' name='User[id]' value='<?php echo $data->id;?>' /></div>
	<div class='row'>
		用户名:<input type="text" name='User[username]' value='<?php echo $data->username; ?>' readonly/>
	</div>
	<div class='row'>
		Q&nbsp;&nbsp;&nbsp;&nbsp;Q:<input type='text' name='User[qq]' value='<?php echo $data->qq; ?>' />
	</div>
	<div class='row'>
		T&nbsp;E&nbsp;L&nbsp;:<input type='text' name='User[tel]' value="<?php echo $data->tel; ?>" />
	</div>
	<div class='row'>
		email&nbsp;:<input type='text' name='User[email]' value="<?php echo $data->email; ?>" />
	</div>
	<input type="button" id='u_sub' value='确定' />
</form>
