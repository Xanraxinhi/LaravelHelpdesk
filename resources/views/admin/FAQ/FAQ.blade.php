@extends('layouts.app')

@section('content')

<div class="w3-container">
<div class="w3-container w3-border">
<table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th ><h2>Danh sách FAQ</h2></th>
        </tr>
        <th class="w3-left"><a href="admin/FAQ/them">Thêm bài viết</a> </th>
    </thead>
    <tbody>
        <div class="w3-container">
            @if(session('thongbao'))
                <div class="alert-success">
                    {{ session('thongbao') }}
                </div>
            @endif
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tiêu đề</th>
                    <th>Nội dung</th>
                    <th>Hình ảnh</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $a)
                <tr>
                    <td>{{ $a->id }}</td>
                    <td>{{ $a->title }}</td>
                    <td>{!! $a->content !!}</td>
                    <td><img src="upload/FAQ/{{$a['image']}}" alt=""></td>
                    <td class="center"><i class="fa fa-trash-o fa-fw"><a href="admin/FAQ/sua/{{ $a->id }}">Edit</a></i></td>
                    <td class="center"><i class="fa fa-trash-o fa-fw"><a href="admin/FAQ/xoa/{{ $a->id }}">Delete</a></i></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </tbody>
</table>
</div>
</div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                         {!! $articles->render() !!}
                        </div>  
                    </div>

@endsection