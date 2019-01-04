<link rel="stylesheet" href="/css/bootstrap.css">
<link rel="stylesheet" href="/css/easyui.css">
<link rel="stylesheet" href="/css/icon.css">

<script src="/js/jquery.js"></script>
<script src="/js/jquery.easyui.min.js"></script>
<div>
	{{ Form::open(array('url' => 'role/store')) }}
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">角色名称</label>
		<div class="col-sm-10">
		{{ Form::text('name', null, array('class' => 'form-control')) }}
		</div>
	</div>
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">角色权限</label>
		<div class="col-sm-10">
			<select id="role_right" class="easyui-combotree"
				style="width: 200px;"
				data-options="url:'',required:true"
				multiple="true">
			</select>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{{ Form::submit('提交',['class'=>'btn btn-success']) }}
		</div>
	</div>
	{{ Form::close() }}
</div>