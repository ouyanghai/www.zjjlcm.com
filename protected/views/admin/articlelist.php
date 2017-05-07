<div style='position:relative;'>
	<table class ='itemtable'>
		<tr>
			<th>ID</th>
			<th>标题</th>
			<th>更新时间</th>
			<th>操作</th>
		</tr>
		<?php foreach($data as $value){ ?>
		<tr>
			<?php foreach($value as $val){ if(!empty($val)){ ?>
			<td>
				<?php echo $val; ?>
			</td>
			<?php }} ?>
			<td>
			<a href="javascript:delarticle(<?php echo $value['id']; ?>);">删除</a>|<a href="<?php echo $this->createUrl('modarticle',array('id'=>$value['id'])); ?>">修改</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>