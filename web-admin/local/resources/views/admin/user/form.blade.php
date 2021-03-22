<div class="card py-3 m-b-30">
<div class="card-body">
@include('admin.language.header')
</div>
</div>

<div class="tab-content" id="myTabContent1">

@foreach(DB::table('language')->orderBy('sort_no','ASC')->get() as $l)

<div class="tab-pane fade show" id="lang{{ $l->id }}" role="tabpanel" aria-labelledby="lang{{ $l->id }}-tab">

<input type="hidden" name="lid[]" value="{{ $l->id }}">

<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-6">
<label for="asd">Name</label>
{!! Form::text('l_name[]',$data->getSData($data->s_data,$l->id,0),['placeholder' => 'Name','class' => 'form-control'])!!}
</div>

<div class="form-group col-md-6">
<label for="asd">Address</label>
{!! Form::text('l_address[]',$data->getSData($data->s_data,$l->id,1),['placeholder' => 'Store Address','class' => 'form-control'])!!}
</div>
</div>

</div>
</div>

</div>
@endforeach

<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Tên</label>
{!! Form::text('name',null,['required' => 'required','placeholder' => 'Tên nhà hàng','class' => 'form-control'])!!}
</div>
<div class="form-group col-md-6">
<label for="inputEmail4">Email (<i>Sẽ dùng làm tài khoản đăng nhập</i>)</label>
{!! Form::email('email',null,['required' => 'required','placeholder' => 'Địa chỉ Email','class' => 'form-control'])!!}
</div>
</div>

<div class="form-row">
<div class="form-group col-md-3">
<label for="inputEmail6">Số điện thoại</label>
{!! Form::text('phone',null,['required' => 'required','placeholder' => 'Contact Number','class' => 'form-control'])!!}
</div>

<div class="form-group col-md-3">
<label for="inputEmail4">Loại cửa hàng</label>
<select name="store_type" class="form-control" required="required">
<option value="">Chọn</option>
@foreach($types as $type)
<option value="{{ trim($type) }}" @if($data->type == trim($type)) selected @endif>{{ trim($type) }}</option>
@endforeach
</select>
</div>

<div class="form-group col-md-6">
<label for="inputEmail4">Thành phố</label>
<select name="city_id" class="form-control" required="required">
<option value="">Chọn</option>
@foreach($citys as $city)
<option value="{{ $city->id }}" @if($data->city_id == $city->id) selected @endif>{{ $city->name }}</option>
@endforeach
</select>
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Địa chỉ</label>
{!! Form::text('address',null,['required' => 'required','placeholder' => 'Địa chỉ đầy đủ','class' => 'form-control'])!!}
</div>
<div class="form-group col-md-6">
<label for="inputEmail4">Hình (khuyến cáo size 600 * 400)</label>
<input type="file" name="img" class="form-control" @if(!$data->id) required="required" @endif>
</div>
</div>

@if(isset($type))

<div class="form-row">
<div class="form-group col-md-12">
<label for="inputEmail6">Đổi mật khẩu (<i>Nhập mật khẩu mới nếu bạn muốn thay đổi mật khẩu hiện tại.</i>)</label>
<input type="Password" name="password" class="form-control">
</div>
</div>

@else

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Mật khẩu</label>
<input type="Password" name="password" class="form-control" @if(!$data->id) required="required" @endif>
</div>

<div class="form-group col-md-6">
<label for="inputEmail4">Trạng thái</label>
<select name="status" class="form-control">
<option value="0" @if($data->status == 0) selected @endif>Kích hoạt</option>
<option value="1" @if($data->status == 1) selected @endif>Tạm ngưng</option>
</select>
</div>
</div>
@endif

@if($data->img)

<img src="{{ Asset('upload/user/'.$data->img) }}" width="50px"><br><br>

@endif

</div>
</div>

@if(isset($admin))

<input type="hidden" name="admin" value="1">

<h1 style="font-size: 20px">Thiết lập phí hoa hồng</h1>
<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Loại hoa hồng</label>
<select name="c_type" class="form-control">
<option value="0" @if($data->c_type == 0) selected @endif>Giá trị cố định</option>
<option value="1" @if($data->c_type == 1) selected @endif>% theo Đơn hàng</option>
</select>
</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Giá trị hoa hồng</label>
{!! Form::text('c_value',null,['class' => 'form-control'])!!}
</div>
</div>

</div>
</div>
@endif

<h1 style="font-size: 20px">Phí giao hàng & thời gian</h1>
<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Giỏ hàng tối thiểu</label>
{!! Form::text('min_cart_value',null,['placeholder' => 'Sau số tiền này, việc giao hàng sẽ miễn phí','class' => 'form-control'])!!}
</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Phí giao hàng</label>
{!! Form::number('delivery_charges_value',null,['class' => 'form-control'])!!}
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Giờ mở cửa <i>(chọn 00 nếu mở cửa 24/24)</i></label>
<select name="opening_time" class="form-control">
<option>Chọn</option>
@php($ot = 0)

@while($ot < 23)

@php($ot++)

<option value="{{ $ot.":00" }}" @if($data->opening_time == $ot) selected @endif>{{ $ot.":00" }}</option>
<option value="{{ $ot.":30" }}" @if($data->opening_time == $ot.':30') selected @endif> {{ $ot }}:30</option>

@endwhile
<option value="00" @if($data->opening_time == '00') selected @endif>00</option>
</select>
</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Giờ đóng cửa <i>(chọn 23:30 nếu mở cửa 24/24)</i></label>
<select name="closing_time" class="form-control">
<option>Chọn</option>
@php($ct = 0)

@while($ct < 23)

@php($ct++)

<option value="{{ $ct.":00" }}" @if($data->closing_time == $ct) selected @endif>{{ $ct.":00" }}</option>
<option value="{{ $ct.":30" }}" @if($data->closing_time == $ct.":30") selected @endif>{{ $ct }}:30</option>

@endwhile
<option value="00" @if($data->closing_time == '00') selected @endif>00</option>
</select>
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Thời gian giao hàng ước tính <small>(tính theo số phút)</small></label>
{!! Form::text('delivery_time',null,['placeholder' => 'ví dụ 20-25','class' => 'form-control'])!!}
</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Khoảng chi phí cho mỗi người <small>(chỉ nhập số tiền, không nhập đơn tiền)</small></label>
{!! Form::text('person_cost',null,['placeholder' => 'ví dụn 100000-250000','class' => 'form-control'])!!}
</div>
</div>
</div>
</div>

<h1 style="font-size: 20px">Hình ảnh thêm</h1>
<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-12">
<label for="inputEmail4">Chọn hình ảnh (để chọn nhiều ảnh 1 lúc, nhấn CTRl)</label>
<input type="file" name="gallery[]" class="form-control" multiple="true">
</div>
</div>

@if(isset($images))
<div class="form-row">
@foreach($images as $img)
<div class="form-group col-md-2">
<img src="{{ Asset('upload/user/gallery/'.$img->img) }}" width="50%"><br>
<a href="{{ Asset(env('admin').'/imageRemove/'.$img->id) }}" onclick="return confirm('Bạn có chắc?')" style="color:Red">Xoá ảnh</a>
</div>
@endforeach
</div>
@endif

</div>
</div>
<h3 style="font-size: 20px;">Chọn Vị trí Từ Bản đồ Google <small>(Để tìm kiếm theo vị trí trong ứng dụng)</small></h3>
<div class="card py-3 m-b-30">
<div class="card-body">

@include('admin.user.google')

</div>
</div>
</div>
</div>
<button type="submit" class="btn btn-success btn-bold">Lưu thay đổi</button><br><br>
