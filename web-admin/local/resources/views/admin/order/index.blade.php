@extends('admin.layout.main')

@section('title') {{ $title }} @endsection

@section('icon') mdi-cart @endsection


@section('content')

<section class="pull-up">
<div class="container">
<div class="row ">
<div class="col-md-12">
<div class="card py-3 m-b-30">

<div class="card-body">
<table class="table table-hover ">
<thead>
<tr>
<th>ID</th>
<th>Cửa hàng</th>
<th>Người dùng</th>
<th>Địa chỉ</th>
<th>Sản phẩm</th>
<th style="text-align: right">Tuỳ chọn</th>
</tr>

</thead>
<tbody>

@foreach($data as $row)

<tr>
<td width="6%">#{{ $row->id }}</td>
<td width="12%">{{ $row->store }}</td>
<td width="12%">{{ $row->name }}<br>{{ $row->phone }}</td>
<td width="15%">{{ $row->address }},{{ $row->city }}</td>
<td width="40%">
	
<div class="row">
<div class="col-md-6"><b>Sản phẩm</b></div>
<div class="col-md-3"><b>Số lượng</b></div>
<div class="col-md-3"><b>Giá</b></div>
</div><hr>

@foreach($item->getItem($row->id) as $i)

<div class="row" style="font-size: 12px">
<div class="col-md-6">{{ $i['type']." - ".$i['item'] }}</div>
<div class="col-md-3">{{ $i['qty'] }}</div>
<div class="col-md-3">{{ $i['price'].$currency }}</div>
</div><hr>

@if(count($item->getAddon($i['id'],$row->id)) > 0)

@foreach($item->getAddon($i['id'],$row->id) as $add)

<div class="row" style="font-size: 12px">
<div class="col-md-6">{{ $add->addon }}</div>
<div class="col-md-3">{{ $add->qty }}</div>
<div class="col-md-3">{{ $add->price.$currency }}</div>
</div><hr>



@endforeach

@endif

@endforeach

<div class="row" style="font-size: 12px;color:red">
<div class="col-md-6">Phí giao hàng : {{ $row->d_charges.$currency }}</div>
<div class="col-md-3">Giảm giá : {{ $row->discount.$currency }}</div>
<div class="col-md-3">Tổng : {{ $row->total.$currency }}</div>
</div><hr>

@if($row->notes)
<small style="color:blue">Ghi chú : {{ $row->notes }}</small>
@endif
</td>


<td width="20%" style="text-align: right">

@include('admin.order.action')

</td>
</tr>

@endforeach

</tbody>
</table>

</div>
</div>

{!! $data->links() !!}

</div>
</div>
</div>
</section>

@endsection