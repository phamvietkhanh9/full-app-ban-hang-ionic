<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <title>Báo cáo</title>
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
<div class="col-md-12 m-b-40">
<div class="card">
<div class="card-body">

	<p align="center" style="font-size: 20px">Báo cáo từ {{ $from }} đến {{ $to }}</p>

<table width="100%" cellspacing="0" cellpadding="0" border="1">

<tr>
<td>&nbsp;<b>ID đơn hàng</b></td>
<td>&nbsp;<b>Ngày đặt hàng</b></td>
<td>&nbsp;<b>Người mua</b></td>
<td>&nbsp;<b>Cửa hàng</b></td>
<td>&nbsp;<b>Tổng số tiền</b></td>
</tr>

@php($total = [])
@foreach($data as $row)
@php($total[] = $row['amount'])

<tr>
<td width="20%">&nbsp;{{ $row['id'] }}</td>
<td width="20%">&nbsp;{{ $row['date'] }}</td>
<td width="20%">&nbsp;{{ $row['user'] }}</td>
<td width="20%">&nbsp;{{ $row['store'] }}</td>
<td width="20%">&nbsp;{{ $row['amount'] }}</td>
</tr>

@endforeach	

<tr>
<td width="20%">&nbsp;</td>
<td width="20%">&nbsp;<b>Tổng số đơn hàng</b></td>
<td width="20%">&nbsp;<b>{{ count($total) }}</b></td>
<td width="20%">&nbsp;<b>Tổng số tiền</b></td>
<td width="20%">&nbsp;<b>{{ array_sum($total) }}đ</b></td>
</tr>

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