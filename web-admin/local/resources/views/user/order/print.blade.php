<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <title>In hoá đơn</title>
    <link rel="icon" type="image/x-icon" href="{{Asset('assets/img/logo.png') }}"/>
    <link rel="icon" href="{{Asset('assets/img/logo.png')}}" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="{{Asset('assets/vendor/pace/pace.css')}}">
    <script src="{{Asset('assets/vendor/pace/pace.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{Asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{Asset('assets/vendor/jquery-scrollbar/jquery.scrollbar.css')}}">
    <link rel="stylesheet" href="{{Asset('assets/vendor/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{Asset('assets/vendor/jquery-ui/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{Asset('assets/vendor/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{Asset('assets/vendor/timepicker/bootstrap-timepicker.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{Asset('assets/fonts/jost/jost.css')}}">
    <link rel="stylesheet" type="text/css" href="{{Asset('assets/fonts/materialdesignicons/materialdesignicons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{Asset('assets/css/atmos.min.css')}}">
</head>
<body class="sidebar-pinned ">

<div class="container" id="printableArea">
<div class="row"  >
<div class="col-md-8 m-b-40">
<div class="card">
<div class="card-body">

<div class="table-responsive ">
<table width="100%" align="center" border="1" cellspacing="0" cellpadding="0">
    <tbody>
        <tr>
            <td style="padding: 10px 10px;font-size: 12px">
                <center><img src="{{Asset('assets/img/logo.png')}}" width="80px"><br>
                    Phone : 0973.909.143
                </center>
            </td>
        </tr>
        <tr>
            <td style="background-color: teal;color:white;">
                <center><b>Đơn hàng sô (#{{ $order->id }})</b></center>
            </td>
        </tr>
        <tr>
            <td>
                <table width="100%">
                    <tbody>
                        <tr>
                            <td width="20%"><b>Khách hàng : </b></td>
                            <td width="40%">{{ $order->name }}</td>
                            <td width="20%"><b>Số điện thoại : </b></td>
                            <td width="40%">{{ $order->phone }}</td>
                        </tr>
                        <tr>
                            <td width="20%"><b>Đặt hàng lúc : </b></td>
                            <td width="40%">{{ date('d-M-Y',strtotime($order->created_at)) }}</td>
                            <td width="20%"><b>ID Đơn hàng: </b></td>
                            <td width="40%">{{ $order->id }}</td>
                        </tr>
                        <tr>
                            <td width="20%" colspan="1"><b>Địa chỉ giao hàng : </b></td>
                            <td width="80%" colspan="3">{{ $order->address }}</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table width="100%">
                    <tbody>
                        <tr>
                            <td width="5%"><b>STT</b></td>
                            <td width="40%"><b>Tên sản phẩm</b></td>
                            <td width="10%"><b>Giá</b></td>
                            <td width="25%"><b>Số lượng</b></td>
                            <td width="20%"><b>Tổng</b></td>
                        </tr>
                    </tbody>
                    <tbody>
@php($total = [])
@php($no = 0)
@foreach($items as $item)
@php($total[] = $item['qty'] * $item['price'])
@php($no = $no+1)
                        <tr>
                            <td width="5%">{{ $no }}</td>
                            <td width="40%">{{ $item['type'] }} - {{ $item['item'] }}</td>
                            <td width="10%">{{ $item['price'] }}</td>
                            <td width="25%">{{ $item['qty'] }}</td>
                            <td width="20%">{{ $item['qty'] * $item['price'].$currency }}</td>
                        </tr>

@foreach($it->getAddon($item['id'],$order->id) as $add)
						<tr>
							<td width="5%"></td>
							<td width="40%">{{ $add->addon }}</td>
							<td width="10%" class="text-center">{{ $add->price.$currency }}</td>
							<td width="25%" class="text-center">{{ $add->qty  }}</td>
							<td width="20%" class="text-right">{{ $add->qty * $add->price.$currency }}</td>
						</tr>

@endforeach
@endforeach
                        
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table width="100%">
                    <tbody>
                        <tr>
                            <td width="5%">&nbsp;</td>
                            <td width="40%">&nbsp;</td>
                            <td width="10%">&nbsp;</td>
                            <td width="25%" class="text-center"><b>Tổng</b></td>
                            <td width="20%" class="text-right"><b>{{ array_sum($total).$currency }}</b></td>
                        </tr>
@if($order->discount)
						<tr>
							<td width="5%">&nbsp;</td>
							<td width="40%">&nbsp;</td>
							<td width="10%">&nbsp;</td>
							<td width="25%" class="text-center"><b>Giảm giá</b></td>
							<td width="20%" class="text-right"><b>{{ $order->discount.$currency }}</b></td>
						</tr>
@endif

@if($order->d_charges)
						<tr>
							<td width="5%">&nbsp;</td>
							<td width="40%">&nbsp;</td>
							<td width="10%">&nbsp;</td>
							<td width="25%" class="text-center"><b>Phía giao hàng</b></td>
							<td width="20%" class="text-right"><b>{{ $order->d_charges.$currency }}</b></td>
						</tr>
@endif
                        <tr>
                            <td width="5%">&nbsp;</td>
                            <td width="40%">&nbsp;</td>
                            <td width="10%">&nbsp;</td>
                            <td width="25%" class="text-center"><b>Tổng số tiền</b></td>
                            <td width="20%" class="text-right"><b>{{ $order->total.$currency }}</b></td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td><p class="text-muted ">
@if($order->payment_method == 1)
<b>Payment Method : </b> Cash on Delivery<br><br>
@else
<b>Payment Method : </b> Paid via PayPal<br><br>
@endif

Services will be invoiced in accordance with the Service Description. You must
pay all undisputed invoices in full within 30 days of the invoice date, unless
otherwise specified under the Special Terms and Conditions. All payments must
reference the invoice number. Unless otherwise specified, all invoices shall be
paid in the currency of the invoice
</p></td>
        </tr>
        <tr>
            <td style="background-color: teal;color:white;text-align: center">Cảm ơn bạn đã mua hàng!</td>
        </tr>
    </tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>



    <script src="{{Asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{Asset('assets/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{Asset('assets/vendor/popper/popper.js') }}"></script>
    <script src="{{Asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{Asset('assets/vendor/select2/js/select2.full.min.js') }}"></script>
    <script src="{{Asset('assets/vendor/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{Asset('assets/vendor/listjs/listjs.min.js') }}"></script>
    <script src="{{Asset('assets/vendor/moment/moment.min.js') }}"></script>
    <script src="{{Asset('assets/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{Asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{Asset('assets/vendor/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{Asset('assets/js/atmos.min.js') }}"></script>
    <!--page specific scripts for demo-->

    <!--Additional Page includes-->
    <!--chart data for current dashboard-->
    <script src="{{Asset('assets/js/dashboard-05.js') }}"   ></script>
    <script src="{{Asset('assets/vendor/sweetalert/sweetalert2.all.min.js') }}"></script>


</body>
</html>