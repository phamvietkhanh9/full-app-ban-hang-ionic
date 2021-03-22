@include('user.order.dispatch')


@if($row->status == 0)

<div class="btn-group" role="group">
<button id="btnGroupDrop{{ $row->id }}" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Tuỳ chọn </button>

<div class="dropdown-menu" aria-labelledby="btnGroupDrop{{ $row->id }}" style="padding: 10px 10px">

<a href="{{ Asset('orderStatus?id='.$row->id.'&status=1') }}" onclick="return confirm('Bạn có chắc?')">Xác nhận đơn hàng</a><hr>

<a href="{{ Asset('orderStatus?id='.$row->id.'&status=2') }}" onclick="return confirm('Bạn có chắc?')">Huỷ đơn hàng</a><hr>

</div>
</div>


@elseif($row->status == 1)

@if(!$row->dboy)
<div class="btn-group" role="group">
<button id="btnGroupDrop{{ $row->id }}" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Tuỳ chọn </button>

<div class="dropdown-menu" aria-labelledby="btnGroupDrop{{ $row->id }}" style="padding: 10px 10px">

@if($row->type == 2)

<a href="{{ Asset('orderStatus?id='.$row->id.'&status=4') }}" onclick="return confirm('Bạn có chắc?')">Gởi đơn hàng</a><hr>

@else

<a href="javascript::void()" data-toggle="modal" data-target="#slideRightModal{{ $row->id }}">Chỉ định nhân viên giao hàng</a><hr>


@endif

<a href="{{ Asset('order/print/'.$row->id) }}" target="_blank">In hoá đơn</a><hr>

<a href="{{ Asset('orderStatus?id='.$row->id.'&status=2') }}" onclick="return confirm('Bạn có chắc?')" style="color:red">Huỷ đơn hàng</a>

</div>
</div>
@endif


@elseif($row->status == 2)

<span style="font-size: 12px">Huỷ lúc<br>{{ $row->status_time }}</span>

@elseif($row->status == 3)

<span style="font-size: 12px">Lấy hàng bởi {{ $row->dboy }} lúc<br>{{ $row->status_time }}</span>

<a href="{{ Asset('order/print/'.$row->id) }}" target="_blank">In hoá đơn</a>


@endif