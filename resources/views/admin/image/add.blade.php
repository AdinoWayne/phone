@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Image Phone
					<small>Add</small>
				</h1>
			</div>
			<!-- /.col-lg-12 -->
			<div class="col-lg-7" style="padding-bottom:120px">
				@if(count($errors)> 0)
				<div class="alert alert-danger">
					@foreach($errors->all() as $err)
					{{$err}}<br>
					@endforeach
				</div>
				@endif
				@if(session('Thongbao'))
				<div class="alert alert-success">{{session('Thongbao')}}
				</div>
				@endif
				<form action="" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-group">
						<label>Phone Name</label>
						<select class="form-control" name="cateparent">
							@foreach($name as $value)
							<option value="{{$value->id}}">{{$value->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label>Upload Image</label>
						<input type="file" name="txtHinh" class="form-control"/>
					</div>
					<button type="submit" class="btn btn-default">Image Add</button>
					<button type="reset" class="btn btn-default">Reset</button>
					<form>
					</div>
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container-fluid -->
		</div>
		<!-- /#page-wrapper -->

@endsection