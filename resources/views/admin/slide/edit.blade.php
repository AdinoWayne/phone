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
				<form action="" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-group">
						<label>name</label>
						<input class="form-control" name="txtTitle" value="{{$slide->Ten}}" />
					</div>
					<div class="form-group">
						<label>Link</label>
						<textarea class="form-control" rows="3" name="txtlink">{{$slide->link}}</textarea>
					</div>
					<div class="form-group">
						<label>Upload Image</label>
						<p><img width="400px" src="upload/slide/{{$slide->Hinh}}"></p>
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
<!-- /#page-wrapper -->
@endsection