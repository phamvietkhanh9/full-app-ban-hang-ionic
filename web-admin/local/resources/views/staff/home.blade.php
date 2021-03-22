@extends('staff.layout.main')

@section('title') Đơn hàng @endsection

@section('icon') mdi-silverware-fork-knife @endsection


@section('content')

<section class="pull-up">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                @foreach($data as $order)
                <div class="card py-3 m-b-30">
                    <div class="card-body">
                        <p>ID đơn hàng: #{{ $order->id }}
                            <span style="float:right"><a href="{{ Asset(env('staff').'/deliverOrder/'.$order->id) }}" onclick="return confirm('Bạn có chắc?')" class="btn btn-sm m-b-15 ml-2 mr-2 btn-success">Giao hàng</a></span>
                        </p>
                        <hr>
                        <table width="100%" cellpadding="10" cellspacing="10">
                            <tr>
                                <td width="30%">&nbsp;<b>Khách hàng</b></td>
                                <td width="70%" style="text-align: right;">{{ $order->name }} &nbsp;</td>
                            </tr>
                            <tr>
                                <td width="30%">&nbsp;<b>Số điện thoại</b></td>
                                <td width="70%" style="text-align: right;">{{ $order->phone }} &nbsp;</td>
                            </tr>
                            <tr>
                                <td width="30%">&nbsp;<b>Địa chỉ</b></td>
                                <td width="70%" style="text-align: right;">{{ $order->address }} &nbsp;</td>
                            </tr>
                            <tr>
                                <td width="30%">&nbsp;<b>Số tiền</b></td>
                                <td width="70%" style="text-align: right;">{{ $order->total }} &nbsp;</td>
                            </tr>
                        </table>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection