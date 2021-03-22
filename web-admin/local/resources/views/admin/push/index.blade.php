@extends('admin.layout.main')

@section('title') Thông báo @endsection

@section('icon') mdi-send @endsection


@section('content')

<section class="pull-up">
  <div class="container">
	<div class="row ">
	  <div class="col-lg-12 mx-auto  mt-0">
		<div class="card py-3 m-b-30">
		  <div class="card-body">
			{!! Form::open(['url' => [$form_url],'files' => true],['class' => 'col s12']) !!}
			<div class="form-row">
			  <div class="form-group col-md-12">
				<label for="inputEmail6">Tiêu đề</label>
				{!! Form::text('title',null,['id' => 'code','class' => 'form-control','required' => 'required'])!!}
			  </div>
			</div>
			<div class="form-row">
			  <div class="form-group col-md-12">
				<label for="inputEmail6">Mô tả (tối đa 250 ký tự) <span id="kytu" style="color:Red"></span></label>
				{!! Form::textarea('desc',null,['id' => 'code','class' => 'form-control','required' => 'required','maxlength' => '250', 'onkeyup' => 'getChar(this.value)'])!!}
			  </div>
			</div>
			<button type="submit" class="btn btn-success btn-bold">Gởi thông báo</button>
			</form>
		  </div>
		</div>
	  </div>
	</div>
  </div>
  <script type="text/javascript">
	function getChar(text)
	  {
		document.getElementById("kytu").innerHTML = text.length;
	  }
  </script>
@endsection