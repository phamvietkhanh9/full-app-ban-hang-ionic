@extends('admin.layout.main')

@section('title') Quản lý Nhà hàng @endsection

@section('icon') mdi-home @endsection


@section('content')

<section class="pull-up">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card py-3 m-b-30">
                    <div class="row">
                        <div class="col-md-12" style="text-align: right;"><a href="{{ Asset($link.'add') }}" class="btn m-b-15 ml-2 mr-2 btn-rounded btn-warning">Thêm mới</a>&nbsp;&nbsp;&nbsp;</div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover ">
                            <thead>
                                <tr>
                                    <th>Hình</th>
                                    <th>Tên</th>
                                    <th>Số điện thoại</th>
                                    <th>City</th>
                                    <th>Trạng thái</th>
                                    <th style="text-align: right">Tuỳ chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $row)
                                <tr>
                                    <td width="7%"><img src="{{ Asset('upload/user/'.$row->img) }}" height="40"></td>
                                    <td width="15%">{{ $row->name }}<br><small style="color:green">{{ $row->type }}</small></td>
                                    <td width="15%">{{ $row->phone }}</td>
                                    <td width="10%">{{ $row->city }}</td>
                                    <td width="14%">
                                        @if($row->status == 0)
                                        <button type="button" class="btn btn-sm m-b-15 ml-2 mr-2 btn-info" onclick="confirmAlert('{{ Asset($link.'status/'.$row->id) }}')">Hoạt động</button>
                                        @else
                                        <button type="button" class="btn btn-sm m-b-15 ml-2 mr-2 btn-danger" onclick="confirmAlert('{{ Asset($link.'status/'.$row->id) }}')">Tạm ngưng</button>
                                        @endif
                                    </td>
                                    <td width="35%" style="text-align: right">
                                        <a href="javascript::void()" class="btn m-b-15 ml-2 mr-2 btn-md  btn-rounded-circle <?php if($row->open == 1){ echo " btn-danger"; } else { echo "btn-success" ; } ?>" data-toggle="tooltip" data-placement="top" data-original-title="
                                            <?php if($row->open == 1){ echo "Đóng cửa ngay bây giờ"; } else { echo "Mở cửa ngay bây giờ"; } ?>" onclick="confirmAlert('{{ Asset($link.'status/'.$row->id.'?type=open') }}')"><i class="mdi mdi-disc"></i></a>
                                        <a href="javascript::void()" class="btn m-b-15 ml-2 mr-2 btn-md  btn-rounded-circle <?php if($row->trending == 1){ echo " btn-success"; } else { echo "btn-warning" ; } ?>" data-toggle="tooltip" data-placement="top" data-original-title="
                                            <?php if($row->trending == 1){ echo "đang Hot"; } else { echo "Tạo Hot"; } ?>" onclick="confirmAlert('{{ Asset($link.'status/'.$row->id.'?type=trend') }}')"><i class="mdi mdi-trending-up"></i></a>
                                        <a href="{{ Asset(env('admin').'/loginWithID/'.$row->id) }}" class="btn m-b-15 ml-2 mr-2 btn-md  btn-rounded-circle btn-info" data-toggle="tooltip" data-placement="top" data-original-title="Đăng nhập vào kho hàng" target="_blank"><i class="mdi mdi-login"></i></a>
                                        <a href="javascript::void()" class="btn m-b-15 ml-2 mr-2 btn-md  btn-rounded-circle btn-primary" data-toggle="tooltip" data-placement="top" data-original-title="Xem thông tin đăng nhập" onclick="showMsg('Tên đăng nhập : {{ $row->email }}<br>Mật khẩu : {{ $row->shw_password }}')"><i class="mdi mdi-lock"></i></a>
                                        <a href="{{ Asset($link.$row->id.'/edit') }}" class="btn m-b-15 ml-2 mr-2 btn-md  btn-rounded-circle btn-success" data-toggle="tooltip" data-placement="top" data-original-title="Sửa"><i class="mdi mdi-border-color"></i></a>
                                        <button type="button" class="btn m-b-15 ml-2 mr-2 btn-md  btn-rounded-circle btn-danger" data-toggle="tooltip" data-placement="top" data-original-title="Xoá" onclick="deleteConfirm('{{ Asset($link."delete/".$row->id) }}')"><i class="mdi mdi-delete-forever"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection