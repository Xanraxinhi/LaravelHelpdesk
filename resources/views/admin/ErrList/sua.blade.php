@extends ('layouts.master')

@section('body.content')
<div class="w3-container">
	<div class="w3-panel w3-card w3-light-grey">
			<div class="col-sm-12 ">
				<h2>Phân công công việc sửa lỗi</h2> <hr>
				<div class="w3-code cssHigh notranslate">
				<table class="table table-hover">
					<thead>
						<tr>
							<td>Chọn kỹ thuật viên</td>
							<td>Nhập nội dung hỗ trợ</td>
							<td>Tình trạng</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><select name="" id="" class="form-control"></select></td>
							<td><input class="form-control" type="text" name="content_req" id="content_req" required placeholder="Nhập nội dung" value=""></td>
							<td type="input" class="default"> Chưa xử lí</td>
						</tr>
						<tr>
							<td><select name="" id="" class="form-control"></select></td>
							<td><input class="form-control" type="text" name="content_req" id="content_req" required placeholder="Nhập nội dung" value=""></td>
							<td type="input" class="default"> Chưa xử lí</td>
						</tr>
						<tr>
							<td><select name="" id="" class="form-control"></select></td>
							<td><input class="form-control" type="text" name="content_req" id="content_req" required placeholder="Nhập nội dung" value=""></td>
							<td type="input" class="default"> Chưa xử lí</td>
						</tr>
						<tr>
							<td><select name="" id="" class="form-control"></select></td>
							<td><input class="form-control" type="text" name="content_req" id="content_req" required placeholder="Nhập nội dung" value=""></td>
							<td type="input" class="default"> Chưa xử lí</td>
						</tr>
						<tr>
							<td><select name="" id="" class="form-control"></select></td>
							<td><input class="form-control" type="text" name="content_req" id="content_req" required placeholder="Nhập nội dung" value=""></td>
							<td type="input" class="default"> Chưa xử lí</td>
						</tr>
						<tr>
							<td><select name="" id="" class="form-control"></select></td>
							<td><input class="form-control" type="text" name="content_req" id="content_req" required placeholder="Nhập nội dung" value=""></td>
							<td type="input" class="default"> Chưa xử lí</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

		<!-- <div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<form action="admin/ErrList/sua/{{ $errlists->id }}" method="POST" class="form-horizontal">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="form-group">
						<label for="" class="control-label">Kỹ thuật viên</label>
						<select name="" id="" class="form-control"></select>
					</div>

					<div class="form-group"> 
						<label for="content_req" class="control-label">Nội dung hỗ trợ</label>
						<input class="form-control" type="text" name="content_req" id="content_req" required placeholder="Nhập nội dung" value="{{ $errlists->content_req }}">

					</div>

					<div class="form-group"> 
						<button class="btn btn-primary">Gởi</button>
					</div>
				</form>
			</div>	
		</div>
		
	</div>  -->
@endsection
