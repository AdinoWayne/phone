@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">News
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
				<form action="admin/news/add" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-group">
						<label>Name</label>
						<input class="form-control" name="txtname" placeholder="input title" />
					</div>
					<div class="form-group">
						<label>Summary</label>
						<input class="form-control" name="txtsummary" placeholder="" />
					</div>
					<div class="form-group">
						<label>Upload Image</label>
						<input type="file" name="txtHinh" class="form-control"/>
					</div>
					<div class="form-group">
						<label>Content</label>
						<textarea id="demo" class="form-control ckeditor" rows="3" name="txtcontent"></textarea>
					</div>
					<button type="submit" class="btn btn-default">News Add</button>
					<button type="reset" class="btn btn-default">Reset</button>
				</form>
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</div>
	<!-- /#page-wrapper -->
	@endsection