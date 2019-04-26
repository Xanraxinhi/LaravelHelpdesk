@extends ('layouts.master')

@section('body.content')
<div class="container">
		
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h2>Thêm bài viết</h2> <hr>
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
				<form action="admin/FAQ/them" method="POST" class="form-horizontal" enctype="multipart/form-data"﻿>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="form-group"> 
						<label for="title" class="control-label">Tiêu đề bài viết</label>
						<input class="form-control" type="text" name="title" id="title" required placeholder="Nhập tiêu đề">
					</div>

					<div class="form-group"> 
						<label for="content" class="control-label">Nội dung bài viết</label>
						<textarea id="demo" class="form-control ckeditor" name="content" id="content" cols="50" rows="15"></textarea>
					</div>
					
					<div class="form-group">
						<input class="form-control" type="file" name="image" >
					</div>

					<div class="form-group"> 
						<button class="btn btn-primary">Thêm</button>
					</div>
				</form>
			</div>	
		</div>
		
	</div> 
@endsection