<?php
?>
<link rel="stylesheet" href="/css/bootstrap.css">
<div>
	{{ Form::open(array('url' => 'category/store')) }}
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">类别名称</label>
		<div class="col-sm-10">
			{{ Form::text('category_name', $category->category_name, array('class' => 'form-control')) }}
		</div>
	</div>
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">状态</label>
		<div class="col-sm-10">
		{{ Form::select('status', ['0'=>'显示','1'=>'屏蔽'], $category->status, ['class' => 'form-control']) }}
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{{ Form::hidden('id',$category->id) }}
			{{ Form::submit('提交',['class'=>'btn btn-success']) }}
		</div>
	</div>
	{{ Form::close() }}
</div>
