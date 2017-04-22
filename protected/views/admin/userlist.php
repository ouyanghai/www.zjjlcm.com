<!--
<div id='search_module'>
	<form id='search_form' method='post' action='index'>
	<ul>
		<li>ID:<input type="text" name='id'/></li>
		<li>用户名:<input type="text" name='username'/></li>
		<li><input type='submit' value="确定" /></li>
	</ul>
	</form>
</div>
-->
<?php if(!empty($data)){ ?>
<table class="itemTable">
	<thead>
		<tr>
			<th>ID</th>
			<th>名字</th>
			<th>创建时间</th>
			<th>更新时间</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($data as $val){ ?>
			<tr>
				<?php foreach($val as $v){ if(!empty($v)){?>
					<td><?php echo $v; ?></td>
				<?php }} ?>
				<td>
					<a id="user_del" href="javascript:userDel(<?php echo $val->id; ?>);">删除</a>
					<font color="blue">|</font>
					<a href="javascript:getUserInfo(<?php echo $val->id; ?>);">修改</a>
				</td>
			</tr>
		<?php } ?>
		<tr>
			<td colspan='6'>
				共<?php echo $pages->itemCount;?>条记录,当前第<?php echo $pages->currentPage+1;?>/<?php echo $pages->pageCount; ?>页
				<?php $this->widget('CLinkPager',array(
					'header' => '',
					'firstPageLabel' => '首页',
					'lastPageLabel' => '末页',
					'prevPageLabel' => '上一页',
					'nextPageLabel' => '下一页',
					'pages' => $pages,
					'maxButtonCount' => 4,
				)); ?>
			</td>
		</tr>
	</tbody>
</table>
<?php }else{ ?>
	<div class='itemTable'>
		<font color='red'>没有搜索到相应数据！</font>
	</div>
<?php } ?>
<div id="mask"></div>
<div id="user_manage">
	<div class='close_menu'><a href="javascript:close();" class='close_btn'>X</a></div>
	<iframe id="user_iframe" src=""></iframe>	
</div>
