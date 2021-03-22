
<div class="form-row">
<div class="form-group col-md-12">
<label for="inputEmail6">Tiêu đề <small style="color: red">(Chấp nhận các thẻ HTML cơ bản)</small></label>
<textarea name="title" class="form-control">{{ $data->title }}</textarea>
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Hình</label>
<input type="file" name="img" class="form-control" @if(!$data->id) required="required" @endif>
</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Số thứ tựo</label>
<input type="number" name="sort_no" class="form-control" value="{{ $data->sort_no }}">
</div>
</div>

<button type="submit" class="btn btn-success btn-bold">Lưu thay đổi</button>
