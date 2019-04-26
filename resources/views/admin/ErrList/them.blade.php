@extends ('layouts.master')

@section('body.content')
<script src="js/jquery.min.js"></script>
<script src="js/jquery.form.min.js"></script>
<style type="text/css">
    input[type=file]{
      display: inline;
    }

    #image_preview{
      border: 1px solid black;
      padding: 10px;
    }

    #image_preview img{
      width: 200px;
      padding: 5px;
    }
  </style>
<div class="container">
		
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h2>Yêu cầu xử lí lỗi</h2> <hr>
			</div>	
		</div>

		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				@if(count($errors) > 0)
					<div class="alert alert-danger">
						@foreach($errors->all() as $err)
						{{ $err }} <br>
						@endforeach
					</div>
				@endif
				@if(session('thongbao'))
					<div class="alert-success">
						{{ session('thongbao') }}
					</div>
				@endif
				<form action="admin/ErrList/them" method="POST" class="form-horizontal" enctype="multipart/form-data"﻿>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group"> 
						<label for="content_req" class="control-label">Nội dung bài viết</label>
						<textarea id="editor1" class="form-control ckeditor" name="content_req"  cols="30" rows="12"></textarea>
					</div>
					
					<div class="form-group">
						<input class="form-control " type="file" name="image_req" id="image_req">
					</div>

					<div id="image_preview"></div>

					<div class="form-group"> 
						<button class="btn btn-primary">Thêm</button>
					</div>
				</form>
			</div>	
		</div>
		
	</div> 

<script type="text/javascript">
	$("#image_req").change(function(){
	$('#image_preview').html("");
	var total_file=document.getElementById("image_req").files.length;
	for(var i=0;i<total_file;i++)
		{
			$('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'>");
		}
	});
	// $('form').ajaxForm(function() 
	// {
	// 	alert("Uploaded SuccessFully");
	// }); 
</script>
@endsection