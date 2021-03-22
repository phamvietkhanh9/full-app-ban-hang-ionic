<div class="row">
    <div class="col-lg-12 m-b-30">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Đơn hàng mới nhất</div>
                <div class="card-controls">
                    <a href="#" class="js-card-refresh icon"> </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-sm ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Cửa hàng</th>
                            <th>Người dùng</th>
                            <th>Địa chỉ</th>
                            <th>Trạng thái</th>
                            <th>Ngày đặt hàng</th>
                            <th class="text-center">Hoạt động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach($orders as $row)
                        <tr>
                            <td width="10%">#{{ $row->id }}</td>
                            <td width="20%">{{ $row->store }}
                                <br>
                                @if($row->type == 0)
                                <small style="color:blue">Giao hàng tận nhà</small>
                                @else
                                <small style="color:green">Nhận tại cửa hàng</small>
                                @endif
                            <td width="15%">{{ $row->name }}<br>{{ $row->phone }}</td>
                            <td width="15%">{{ $row->address }}</td>
                            <td width="15%">{!! $row->getStatus($row->id) !!}</td>
                            <td width="15%">{{ date('d-M-Y',strtotime($row->created_at)) }}</td>
                            <td width="15%">@include('admin.order.action')</td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>