@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">user
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
				<form action="admin/user/add" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-group">
						<label>Name</label>
						<input class="form-control" name="txtname"/>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="txtemail"/>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" name="txtpassword"/>
					</div>
					<div class="form-group">
						<label>password Again</label>
						<input type="password" class="form-control" name="txtpassword1"/>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input class="form-control" name="txtphone"/>
					</div>
					<div class="form-group">
						<label>Address</label>
						<input class="form-control" name="txtaddress"/>
					</div>
					<div class="form-group">
						<label>Role</label>
						<input class="form-control" name="txtrole"/>
					</div>
					<div class="form-group">
						<label>Upload Image</label>
						<input type="file" name="txtHinh" class="form-control"/>
					</div>
					<button type="submit" class="btn btn-default">User Add</button>
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
@section('script')
<script type="text/javascript">
	
</script>
@endsection