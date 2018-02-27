@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Slide
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
				@if(session('thongbao'))
				<div class="alert alert-success">{{session('thongbao')}}
				</div>
				@endif
				<form action="admin/slide/add" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-group">
						<label>name</label>
						<input class="form-control" name="txtName"/>
					</div>
					<div class="form-group">
						<label>Link</label>
						<input class="form-control" name="txtlink">
					</div>
					<div class="form-group">
						<label>Upload Image</label>
						<input type="file" name="txtHinh" class="form-control"/>
					</div>
					<button type="submit" class="btn btn-default">Category Add</button>
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