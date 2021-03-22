@include('admin.language.header')
<br>
<div class="tab-content" id="myTabContent1">

@foreach(DB::table('language')->orderBy('sort_no','ASC')->get() as $l)

<div class="tab-pane fade show" id="lang{{ $l->id }}" role="tabpanel" aria-labelledby="lang{{ $l->id }}-tab">

<input type="hidden" name="lid[]" value="{{ $l->id }}">


<div class="form-row">
<div class="form-group col-md-6">
<label for="asd">Product Name</label>
{!! Form::text('l_name[]',$data->getSData($data->s_data,$l->id,0),['placeholder' => 'Product name','class' => 'form-control'])!!}
</div>

<div class="form-group col-md-6">
<label for="asd">Description</label>
{!! Form::text('l_desc[]',$data->getSData($data->s_data,$l->id,1),['placeholder' => 'Description','class' => 'form-control'])!!}
</div>
</div>


</div>
@endforeach

<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Chọn danh mục</label>
<select name="cate_id" class="form-control" required="required">
<option value="">Chọn</option>
@foreach($cates as $cate)
<option value="{{ $cate->id }}" @if($data->category_id == $cate->id) selected @endif>{{ $cate->name }}</option>
@endforeach
</select>
</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Tên sản phẩm</label>
{!! Form::text('name',null,['id' => 'code','placeholder' => 'Tên','class' => 'form-control'])!!}
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Mô tả</label>
{!! Form::text('description',null,['id' => 'code','placeholder' => 'Mô tả sản phẩm','class' => 'form-control'])!!}
</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Loại thực phẩm</label>
<select name="nonveg" class="form-control">
<option value="0" @if($data->nonveg == 0) selected @endif>Chay</option>
<option value="1" @if($data->nonveg == 1) selected @endif>Mặn</option>
</select>
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Trạng thái</label>
<select name="status" class="form-control">
	<option value="0" @if($data->status == 0) selected @endif>Còn</option>
	<option value="1" @if($data->status == 1) selected @endif>Tạm ngưng</option>
</select>
</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Hình ảnh</label>
<input type="file" name="img" class="form-control">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Sắp xếp</label>
{!! Form::number('sort_no',null,['id' => 'code','class' => 'form-control'])!!}
</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Số lượng</label>
{!! Form::number('qty',null,['id' => 'code','class' => 'form-control'])!!}
</div>
</div>

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Giá bán lẻ</label>
{!! Form::text('small_price',null,['id' => 'code','placeholder' => 'Giá bán lẻ','class' => 'form-control'])!!}
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Giá bán</label>
{!! Form::text('medium_price',null,['id' => 'code','placeholder' => 'Giá bình thường','class' => 'form-control'])!!}
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Giá bán sỉ</label>
{!! Form::text('large_price',null,['id' => 'code','placeholder' => 'Giá bán sỉ','class' => 'form-control'])!!}
</div>
</div>
</div>
</div>
<button type="submit" class="btn btn-success btn-bold">Lưu thay đổi</button>
