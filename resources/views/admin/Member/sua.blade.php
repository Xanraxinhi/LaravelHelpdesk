@extends ('layouts.master')

@section('body.content')
<div class="container">
		
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h2>Thông tin nhân viên
				<small>{{ $users->name }}</small>
				</h2>
				 <hr>
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
				<form action="admin/Member/sua/{{ $users->id }}" method="POST" class="form-horizontal">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group"> 
						<label for="email" class="control-label">Email nhân viên</label>
						<input class="form-control" type="text" name="email" id="email" required placeholder="Nhập email" value="{{ $users->email }}">
					</div>

					<div class="form-group"> 
						<label for="vitri" class="control-label">Vị trí nhân viên</label>
						<input class="form-control" type="text" name="vitri" id="vitri" required placeholder="Nhập vị trí" value="{{ $users->vitri }}">
					</div>

					<div class="form-group"> 
						<label for="phonenumber" class="control-label">Số điện thoại nhân viên</label>
						<input class="form-control" type="text" name="phonenumber" id="phonenumber" required placeholder="Nhập số điện thoại" value="{{ $users->phonenumber }}">
					</div>

					<div class="form-group"> 
						<label for="level" class="control-label">Quyền người dùng</label>
						<input class="form-control" type="text" name="level" id="level" required placeholder="Nhập quyền" value="{{ $users->level }}">

					</div>
					<div class="form-group"> 
						<button class="btn btn-primary">Sửa</button>
					</div>
				</form>
			</div>	
		</div>
		
	</div> 
@endsection