<script type="text/javascript" src="<?php echo $this->assets['app']; ?>/js/admin.js"></script>
<div class="mod">
	<form id='add_form' method="post" action='/admin/addpass'>
		<ul>
			<li>用户名:<input id='add_user' type='text' name='username'/></li>
			<li>密&nbsp;&nbsp;码:<input id='add_pass' type='text' name='password'/></li>
			<input type="submit" id="add_sub" value="确定" />
		</ul>
	</form>
	
</div>
