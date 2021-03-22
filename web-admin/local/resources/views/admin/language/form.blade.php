
<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Tên</label>
{!! Form::text('name',null,['id' => 'code','required' => 'required','class' => 'form-control'])!!}
</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Loại</label>
<select name="type" class="form-control">
	<option value="0" @if($data->type == 0) selected @endif>Trái sang phải</option>
	<option value="1" @if($data->type == 1) selected @endif>Phải sang trái</option>
</select>
</div>
</div>


<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Icon <small>(512x512)</small></label>
<input type="file" name="img" class="form-control">
</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Sắp xếp</label>
{!! Form::number('sort_no',null,['id' => 'code','class' => 'form-control'])!!}
</div>
</div>

<button type="submit" class="btn btn-success btn-bold">Lưu thay đổi</button>
