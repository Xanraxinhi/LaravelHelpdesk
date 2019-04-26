@extends ('layouts.master')

@section('body.content')

<div class="container">
         <!-- {{-- Hiển thị thông báo lỗi xảy ra --}} -->
          @if ($errors->any())
                    <ul class="error-form">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

        <form action="upload" method="POST" class="form-horizontal" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					
					<div class="form-group">
						<input class="form-control" type="file" name="file" >
					</div>

					<div class="form-group"> 
						<button type="submit" class="btn btn-primary">Thêm</button>
					</div>
				</form>
</div>

@stop