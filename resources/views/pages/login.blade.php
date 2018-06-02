@extends('layout.index')
@section('title','Login')
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
				<div class="new_customer">
					<h3>NEW CUSTOMERS</h3>
					<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				</div>
				<div class="create_button_area">
					<button type="submit" class="create_button" onclick="location.href='page/register';">
						Create an Account
					</button>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<form method="POST" action="page/login">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<input type="hidden" name="url" value="{{url()->previous()}}">
					<div class="new_customer">
						<h3>Login</h3>
						<p>If you have an account with us, please log in.</p>
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
						<ul class="register_form">
							<li>Email Address<span>*</span></li>
							<li>
								<div class="email_address">
									<input type="text" class="email_test" name="email" />
								</div>
							</li>
							<li>Password<span>*</span></li>
							<li>
								<div class="email_address">
									<input type="password" class="password" name="password" />
								</div>
							</li>
						</ul>
					</div>
					<div class="create_button_area">
						<button type="submit" class="create_button">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection