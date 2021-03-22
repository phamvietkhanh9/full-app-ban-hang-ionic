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
<label for="asd">Coupen Code</label>
{!! Form::text('l_code[]',$data->getSData($data->s_data,$l->id,0),['placeholder' => 'Code','class' => 'form-control'])!!}
</div>

<div class="form-group col-md-6">
<label for="asd">Description</label>
{!! Form::text('l_desc[]',$data->getSData($data->s_data,$l->id,1),['placeholder' => 'Description','class' => 'form-control'])!!}
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
<label for="inputEmail6">Mã giảm giá</label>
{!! Form::text('code',null,['placeholder' => 'Nhập mã giảm giá','id' => 'code','class' => 'form-control','required' => 'required'])!!}
</div>
<div class="form-group col-md-6">
<label for="inputEmail6">Mô tả</label>
{!! Form::text('description',null,['placeholder' => 'Mô tả','id' => 'code','class' => 'form-control','required' => 'required'])!!}
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Giá trị đơn hàng tối thiểu <small>(tuỳ chọn)</small></label>
{!! Form::number('min_cart_value',null,['id' => 'code','class' => 'form-control'])!!}
</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Kiểu giảm giá</label>
<select name="type" class="form-control">
	<option value="0" @if($data->type == 0) selected @endif>theo %</option>
	<option value="1" @if($data->type == 1) selected @endif>Số tiền cố định</option>
</select>
</div>
</div>

<div class="form-row">
<div class="form-group col-md-3">
<label for="inputEmail6">Số tiền giảm</label>
{!! Form::number('value',null,['id' => 'code','class' => 'form-control','required' => 'required'])!!}
</div>

<div class="form-group col-md-3">
<label for="inputEmail6">Giảm giá đến <small>(tuỳ chọn)</small></label>
{!! Form::number('upto',null,['id' => 'code','class' => 'form-control',])!!}
</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Trạng thái</label>
<select name="status" class="form-control">
	<option value="0" @if($data->status == 0) selected @endif>Hiệu lực</option>
	<option value="1" @if($data->status == 1) selected @endif>Hết hạn</option>
</select>
</div>
</div>


<div class="form-row">
<div class="form-group col-md-12">
<label for="inputEmail6">Chọn cửa hàng</label>
<select name="store[]" class="form-control js-select2" multiple="true">
<option value="">Tất cả cửa hàng</option>
@foreach($users as $user)
<option value="{{ $user->id }}" @if(in_array($user->id,$array)) selected @endif>{{ $user->name }}</option>
@endforeach
</select>
</div>
</div>
</div>
</div>
</div>
</div>
<button type="submit" class="btn btn-success btn-bold">Lưu thay đổi</button>
