@extends('layout.index')
@section('title','Register')
@section('content')
<div class="my_account_page_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="create_account">
					<h2>Login or Create an Account</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<form method="POST" action="page/register" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="new_customer">
						<h3>Register Customers</h3>
						@if(count($errors)>0)
						<div class="alert alert-danger">
							@foreach($errors->all() as $err)
							{{$err}}<br>
							@endforeach
						</div>
						@endif
						@if(session('Thongbao'))
						{{session('Thongbao')}}
						@endif
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
							<label>Upload Image</label>
							<input type="file" name="txtHinh" class="form-control"/>
						</div>
					</div>
					<div class="create_button_area">
						<button type="submit" class="create_button">Login</button>
					</div>
				</form>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="new_customer">
					<h3>NEW CUSTOMERS</h3>
					<p>As a member, you get unlimited access to in-depth, expert stories from amazing writers, thinkers, and storytellers. For $5/month, you can directly reward the stories that inspire, entertain, and move you..</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection