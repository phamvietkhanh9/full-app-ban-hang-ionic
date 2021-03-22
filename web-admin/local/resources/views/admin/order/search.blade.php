@extends('admin.layout.main')

@section('title') Kết quả tìm kiếm @endsection

@section('icon') mdi-home @endsection


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
                                	<th>Người dùng</th>
                                	<th>Số điện thoại</th>
                                    <th>Địa chỉ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $row)
                                <tr>
                                    <td width="20%">{{ $row->name }}</td>
                                    <td width="20%">{{ $row->phone }}</td>
                                    <td width="60%">{{ $row->address }},{{ $row->city }}</td>
                                    
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