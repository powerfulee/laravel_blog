<link rel="stylesheet" href="../css/bootstrap.css">
<table class="table  table-striped">
	<thrad>
	<tr>
		<td>类别名称</td>
		<td>状态</td>
		<td>提交日期</td>
		<td>操作</td>
	</tr>
	</thrad>
	<?php foreach ($categories as $category): ?>
	<tr>
		<td><?php echo $category['category_name']?></td>
		<td>
			<?php echo ($category['status'] == 0) ? '显示' : '屏蔽'?>
		</td>
		<td><?php echo(date('Y-m-d',$category['create_date']))?></td>
		<td>
			<a href="edit/<?php echo($category['id'])?>">
				<img src="../images/icon-ed.gif"></img>
			</a>
			&nbsp;
			<a href="delete/<?php echo($category['id'])?>">
				<img src="../images/icon-del.gif"></img>
			</a>
		</td>
	</tr>
	<?php endforeach; ?>
</table>