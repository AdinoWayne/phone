@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">user
					<small>List</small>
				</h1>
				@if(session('Thongbao'))
				<div class="alert alert-success">{{session('Thongbao')}}
				</div>
				@endif
			</div>
			<!-- /.col-lg-12 -->
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Avatar</th>
						<td><img width="200px" src="upload/user/{{$value->avatar}}"/></td>
					</tr>
					<tr>
						<th>Full Name</th>
						<td>{{$value->fullname}}</td>
					</tr>
					<tr>
						<th>Email</th>
						<td>{{$value->email}}</td>
					</tr>
					<tr>
						<th>Phone</th>
						<td>{{$value->phone}}</td>
					</tr>
					<tr>
						<th>Role</th>
						<td>{{$value->role}}</td>
					</tr>
					<tr>
						<th>Avatar</th>
						<td>{{$value->id}}</td>
					</tr>	
					<tr>
						<th>Change Password</th>
						<td><a href="admin/user/password/{{$value->id}}">Change password</td>
					</tr>			
				</thead>
			</table>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection