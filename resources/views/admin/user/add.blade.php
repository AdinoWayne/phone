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
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input class="form-control" name="txtname" placeholder="full name user" />
						</div>
					</div>
					<div class="form-group">
						<label>Email</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
							<input type="email" class="form-control" name="txtemail" placeholder="email@example"/>
						</div>
					</div>
					<div class="form-group">
						<label>Password</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							<input type="password" class="form-control" name="txtpassword" placeholder="input password"/>
						</div>
					</div>
					<div class="form-group">
						<label>password Again</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							<input type="password" class="form-control" name="txtpassword1" placeholder="input password"/>
						</div>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
							<input class="form-control" name="txtphone" placeholder="input 10 number"/>
						</div>
					</div>
					<div class="form-group">
						<label>Address</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							<input class="form-control" name="txtaddress" placeholder="input Address"/>
						</div>
					</div>
					<div class="form-group">
						<label>Role</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
							<select name="txtrole" class="form-control selectpicker" >
								<option>customer</option>
								<option>Admin</option>
								<option>mod</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label>Upload Image</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-film"></i></span>
							<input type="file" name="txtHinh" class="form-control"/>
						</div>
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