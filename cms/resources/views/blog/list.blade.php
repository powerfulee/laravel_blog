<link rel="stylesheet" href="../css/bootstrap.css">
<div class="report-index">
	<table class="table  table-striped">
		<thrad>
		<tr>
			<td>类别名称</td>
			<td>标题</td>
			<td>状态</td>
			<td>提交日期</td>
			<td>操作</td>
		</tr>
		</thrad>
		<?php foreach ($blogs as $blog): ?>
		<tr>
			<td><?php echo $blog->belongsToCategory->category_name?></td>
			<td><?php echo $blog->title?></td>
			<td>
				<?php echo ($blog->status == 0) ? '显示' : '屏蔽'?>
			</td>
			<td><?php echo(date('Y-m-d',$blog->create_date/1000))?></td>
			<td>
				<a href="edit/<?php echo($blog->id)?>">
					<img src="../images/icon-ed.gif"></img>
				</a>
				&nbsp;
				<a href="delete/<?php echo($blog->id)?>">
					<img src="../images/icon-del.gif"></img>
				</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	
	<div id="custom-pagination" class="nav-links">
		{{ $blogs->links() }}
	</div>
</div>