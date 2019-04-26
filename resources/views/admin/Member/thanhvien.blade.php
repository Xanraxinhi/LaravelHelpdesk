@extends('layouts.app')

@section('content')

<div class="w3-container">
<div class="w3-container w3-border">
<table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th ><h2>Danh sách thành viên</h2></th>
        </tr>
    </thead>
    <tbody>
        <div class="w3-container">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Vị trí</th>
                    <th>Số điện thoại</th>
                    <th>Quyền</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $u)
                <tr>
                    <td>{{ $u->id }}</td>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->email }}</td>
                    <td>{{ $u->vitri }}</td>
                    <td>{{ $u->phonenumber }}</td>
                    <td>
                        @if($u->level == 1)
                        {{ "Admin" }}
                        @elseif($u->level == 2)
                        {{ "Kỹ Thuật Viên" }}
                        @else($u->level == 0)
                        {{ "Người dùng" }}
                        @endif
                    </td>
                    <td class="center"><i class="fa fa-trash-o fa-fw"><a href="admin/Member/sua/{{ $u->id }}">Edit</a></i></td>
                    <td class="center"><i class="fa fa-trash-o fa-fw"><a href="admin/Member/xoa/{{ $u->id }}">Delete</a></i></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </tbody>
</table>
</div>
</div>

@endsection