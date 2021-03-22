
<div class="form-row">

<div class="form-group col-md-12">
<label for="inputEmail6">Tên</label>
{!! Form::text('name',null,['id' => 'code','class' => 'form-control','required' => 'required'])!!}
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Số điện thoại (Số này dùng làm tài khoản dăng nhập)</label>
{!! Form::text('phone',null,['id' => 'code','class' => 'form-control','required' => 'required'])!!}
</div>

<div class="form-group col-md-6">
@if($data->id)
<label for="inputEmail6">Đổi mật khẩu</label>
<input type="password" name="password" class="form-control">
@else
<label for="inputEmail6">Mật khẩu</label>
<input type="password" name="password" class="form-control" required="required">
@endif
</div>
</div>

<div class="form-row">
<div class="form-group col-md-12">
<label for="inputEmail6">Trạng thái</label>
<select name="status" class="form-control">
	<option value="0" @if($data->status == 0) selected @endif>Hoạt động</option>
	<option value="1" @if($data->status == 1) selected @endif>Tạm ngưng</option>
</select>
</div>
</div>


<button type="submit" class="btn btn-success btn-bold">Lưu thay đổi</button>
