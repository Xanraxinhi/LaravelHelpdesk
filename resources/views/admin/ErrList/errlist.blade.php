@extends('layouts.app')

@section('content')
<div class="w3-container">
            <th ><h2>Danh sách báo lỗi</h2></th>
        <th class="w3-left"><a href="admin/ErrList/them">Báo lỗi</a> </th>
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>STT</th>
                    <th style="width: 500px">Nội dung</th>
                    <th>Thời gian</th>
                    <th>Hình ảnh</th>
                    <th>Tình trạng</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($errlists as $e)
                <tr>
                    <td>{{ $e->id }}</td>
                    <td style="width: 500px">{!! $e->content_req !!}</td>
                    <td>{{ $e->created_at }}</td>
                    <td style="width: 155px"><img src="upload/ERR/{{$e['image_req']}}" alt="" style="width: 150px"></td>
                    <!-- <td>
                        <button class="btn btn-danger">Chưa xử lí</button>
                    </td> -->
                    <td>
                        @if($e->tinhtrang == 1)
                               <span class="glyphicon glyphicon-wrench"> {{ "Đang xử lí" }}</span>
                        
                        @elseif($e->tinhtrang == 2)
                                <span class="glyphicon glyphicon-ok"></span>{{ "Đã xử lí" }}
                            glyphicon glyphicon-wrench
                        @else($e->tinhtrang == 0)
                            
                                {!! "Chưa xử lí" !!}<i></span>
                                
                        
                        @endif
                    </td>
                    <td class="center "><i class="fa fa-trash-o fa-fw"><a href="admin/ErrList/sua/{{ $e->id }}">Phân công</a></i></td>
                    <td class="center"><i class="fa fa-trash-o fa-fw"><a href="admin/ErrList/xoa/{{ $e->id }}">Delete</a></i></td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>

                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                         {!! $errlists->render() !!}
                        </div>  
                    </div>

<!-- <script>
    $(function () {
        'use strict';
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#timeCheckIn').datepicker({
            onRender: function (date) {
                return date.valueOf() < now.valueOf() ? 'disabled' : '';
            }
        }).on('changeDate', function (ev) {
            if (ev.date.valueOf() > checkout.date.valueOf()) {
                var newDate = new Date(ev.date)
                newDate.setDate(newDate.getDate() + 1);
                checkout.setValue(newDate);
            }
            checkin.hide();
            $('#timeCheckOut')[0].focus();
        }).data('datepicker');
        var checkout = $('#timeCheckOut').datepicker({
            onRender: function (date) {
                return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
            }
        }).on('changeDate', function (ev) {
            checkout.hide();
        }).data('datepicker');
    });
</script> -->

@endsection
