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
				<form class="well form-horizontal" action="admin/user/add" method="POST" enctype="multipart/form-data"  id="contact_form">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<fieldset>
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label">Full Name</label>  
							<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input  name="txtname" placeholder="First Name" class="form-control"  type="text">
								</div>
							</div>
						</div>
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail</label>  
							<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
									<input name="txtemail" placeholder="E-Mail Address" class="form-control"  type="text">
								</div>
							</div>
						</div>
						<!-- Text input-->

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>  
							<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
									<input name="txtpassword" placeholder="password" class="form-control"  type="password">
								</div>
							</div>
						</div>
						<!-- Text input-->

						<div class="form-group">
							<label class="col-md-4 control-label">Password Again</label>  
							<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
									<input name="txtpassword1" placeholder="password" class="form-control"  type="password">
								</div>
							</div>
						</div>
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label">Phone #</label>  
							<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
									<input name="txtphone" placeholder="(845)555-1212" class="form-control" type="text">
								</div>
							</div>
						</div>

						<!-- Text input-->

						<div class="form-group">
							<label class="col-md-4 control-label">Address</label>  
							<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
									<input name="txtaddress" placeholder="Address" class="form-control" type="text">
								</div>
							</div>
						</div>
						<!-- Text input-->

						<div class="form-group">
							<label class="col-md-4 control-label">Image</label>  
							<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-film"></i></span>
									<input type="file" name="txtHinh" class="form-control" placeholder="upload"/>
								</div>
							</div>
						</div>
						<!-- Select Basic -->

						<div class="form-group"> 
							<label class="col-md-4 control-label">Role</label>
							<div class="col-md-4 selectContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
									<select name="txtrole" class="form-control selectpicker" >
										<option value=" " >Select Roler</option>
										<option>Admin</option>
										<option>mod</option>
										<option>customer</option>
									</select>
								</div>
							</div>
						</div>
						<!-- Button -->
						<div class="form-group">
							<label class="col-md-4 control-label"></label>
							<div class="col-md-4">
								<button type="submit" class="btn btn-default">User Add</button>
								<button type="reset" class="btn btn-default">Reset</button>
							</div>
						</div>
					</fieldset>
				</form>
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
	$(document).ready(function() {
		$('#contact_form').bootstrapValidator({
			feedbackIcons: {
				valid: 'glyphicon glyphicon-ok',
				invalid: 'glyphicon glyphicon-remove',
				validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				txtname: {
					validators: {
						stringLength: {
							min: 2,
						},
						notEmpty: {
							message: 'Please supply your first name'
						}
					}
				},
				state: {
					validators: {
						notEmpty: {
							message: 'Please select your state'
						}
					}
				},
				txtemail: {
					validators: {
						notEmpty: {
							message: 'Please supply your email address'
						},
						emailAddress: {
							message: 'Please supply a valid email address'
						}
					}
				},
				phone: {
					validators: {
						notEmpty: {
							message: 'Please supply your phone number'
						},
						phone: {
							country: 'US',
							message: 'Please supply a vaild phone number with area code'
						}
					}
				},
				address: {
					validators: {
						stringLength: {
							min: 8,
						},
						notEmpty: {
							message: 'Please supply your street address'
						}
					}
				},
				txtpassword: {
					validators: {
						notEmpty: {
							message: 'Please supply your zip code'
						},
						zipCode: {
							country: 'US',
							message: 'Please supply a vaild zip code'
						}
					}
				},
			}
		})
	});


</script>
@endsection