<link rel="stylesheet" href="/css/bootstrap.css">
<script src="/js/ckeditor/ckeditor.js"></script>
<script src="/js/ckfinder/ckfinder.js"></script>
<div>
	{{ Form::open(array('url' => 'blog/store')) }}
	<div class="form-group">
		{{ Form::label('inputEmail3', '类别', array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::select('category', $categories, $blog->category_id, ['class' => 'form-control']) }}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('inputEmail3', '标题', array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
		{{ Form::text('title', $blog->title, array('class' => 'form-control')) }}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('inputPassword3', '状态', array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
		{{ Form::select('status', ['0'=>'显示','1'=>'屏蔽'], $blog->category_id, ['class' => 'form-control']) }}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('inputPassword3', '内容', array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::textarea('content', $blog->content, array('size'=>'30x5','class' => 'form-control')) }}
			<script>
	        	CKEDITOR.replace( 'content', {

			        filebrowserBrowseUrl        : '/js/ckfinder/ckfinder.html',
			
			        filebrowserImageBrowseUrl   : '/js/ckfinder/ckfinder.html?Type=Images',
			
			        filebrowserFlashBrowseUrl   : '/js/ckfinder/ckfinder.html?Type=Flash',
			
			        filebrowserUploadUrl        : '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			
			        filebrowserImageUploadUrl   : '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
			
			        filebrowserFlashUploadUrl   : '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
			
			    });
	        </script>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{{ Form::hidden('id',$blog->id) }}
			{{ Form::submit('提交',['class'=>'btn btn-success']) }}
		</div>
	</div>
	{{ Form::close() }}
</div>