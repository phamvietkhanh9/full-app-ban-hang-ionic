
<div class="form-row">
<div class="form-group col-md-12">
<label for="inputEmail6">Chọn thành phố</label>
<select name="city_id" class="form-control">
<option value="">Tất cả</option>
@foreach($citys as $city)
<option value="{{ $city->id }}" @if($data->city_id == $city->id) selected @endif>{{ $city->name }}</option>
@endforeach
</select>
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Vị trí Banner</label>
<select name="position" class="form-control" required="required">
<option value="">Chọn</option>
<option value="0" @if($data->position == 0) selected @endif>Trên (1024 * 1024)</option>
<option value="2" @if($data->position == 2) selected @endif>Dưới (600*300)</option>
</select>
</div>
<div class="form-group col-md-6">
<label for="inputEmail4">Chọn cửa hàng <small>(Các cửa hàng đã chọn này sẽ được liệt kê khi nhấp vào banner)</small></label>
<select name="store[]" class="form-control js-select2" multiple>
<option value="">Tất cả</option>
@foreach($users as $user)
<option value="{{ $user->id }}" @if(isset($array) && in_array($user->id,$array)) selected @endif>{{ $user->name }}</option>
@endforeach
</select>
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Hình</label>
<input type="file" name="img" class="form-control" @if(!$data->id) required="required" @endif>
</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Trạng thái</label>
<select name="status" class="form-control" required="required">
<option value="0" @if($data->status == 0) selected @endif>Hiện</option>
<option value="1" @if($data->status == 1) selected @endif>Ẩn</option>
</select>
</div>
</div>

@if($data->id)

<img src="{{ Asset('upload/banner/'.$data->img) }}" height="100"><br><br>

@endif

<button type="submit" class="btn btn-success btn-bold">Lưu thay đổi</button>


