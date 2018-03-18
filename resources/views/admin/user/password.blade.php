@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
@if(Auth::id()!=substr(url()->current(), -1))
<script>window.location = "/phone/public/admin/user/list";</script>
@endif
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">User
					<small>Change Password</small>
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
						<label>Password</label>
						<input type="password" class="form-control" name="txtpassword"/>
					</div>
					<div class="form-group">
						<label>password Again</label>
						<input type="password" class="form-control" name="txtpassword1"/>
					</div>
					<button type="submit" class="btn btn-default">Done</button>
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