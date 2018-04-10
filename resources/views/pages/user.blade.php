@extends('layout.index')
@section('title','user')
@section('content')
<!--Start breadcrumbs area -->
<div class="breadcrumbs-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="breadcrumb-single blog_top_area">
					<ul id="breadcrumbs">
						<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
						<li><span>Ι</span></li>
						<li>Page</li>
						<li><span>Ι</span></li>
						<li>User</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End breadcrumbs area -->

<!--Start about hope area -->
<div class="about_hope_area">
	@if(session('Thongbao'))
	<div class="alert alert-success">{{session('Thongbao')}}
	</div>
	@endif
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="about_hope_text">
					<h1>Name: {{$user->fullname}}</h1>
					<ul id="about_hope_details">
						<li><i class="fa fa-angle-right"></i>Address: {{$user->address}}.</li>
						<li><i class="fa fa-angle-right"></i>Phone: {{$user->phone}}.</li>
						<li><i class="fa fa-angle-right"></i>Email: {{$user->email}}.</li>
					</ul>
					<div class="about_read_more">
						<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Change password</button>
						<div class="modal fade" id="myModal" role="dialog">
							<div class="modal-dialog">

								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Change Password</h4>
									</div>
									<form class="feedback" name="feedback" method="POST" action="changepw">
										<input type="hidden" name="_token" value="{{csrf_token()}}">
										<div class="modal-body">
											<div class="form-group">
												<input type="password" name="txtpassword" class="form-control" placeholder="Enter password current">
											</div>
											<div class="form-group">
												<input type="password" name="txtpassword1" class="form-control" placeholder="Enter new password">
											</div>
											<div class="form-group">
												<input type="password" name="txtpassword2" class="form-control" placeholder="Enter new password again">
											</div>
										</div>
										<div class="modal-footer">
											<button class="btn btn-success" id="submit">Send</button>
											<button class="btn btn-remove" data-dismiss="modal">Close</button>
										</div>
									</form>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="about_hope_image">
					<img src="upload/user/{{$user->avatar}}" alt=""/>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End about hope area -->
<!--Start Creative Member area -->
<div class="creative_member_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="creative_member_text">
					<h2>OUR CREATIVE <strong> MEMBER</strong></h2>
					<p>Our skill is really high quality and standard for build your project.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="single_creative_member">
					<div class="creative_author">
						<img src="pages_assets/img/author/m14.jpg" alt="" />
					</div>
					<div class="member_info">
						<span class="member_name">Adino Great</span>
						<span class="member_role">Developer</span>
					</div>
					<div class="member_icons">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<svg xml:space="preserve" enable-background="new 0 0 52 52" viewBox="0 0 52 52" height="52px" width="52px" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1"><path d="M51.673,0H0v51.5c0.244-5.359,3.805-10.412,7.752-13.003l36.169-23.74c4.264-2.799,7.761-8.663,7.752-14.297V0L51.673,0z"/></svg>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="single_creative_member">
					<div class="creative_author">
						<img src="pages_assets/img/author/m15.jpg" alt="" />
					</div>
					<div class="member_info">
						<span class="member_name">Bruce Wayne</span>
						<span class="member_role">Programmer</span>
					</div>
					<div class="member_icons">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<svg xml:space="preserve" enable-background="new 0 0 52 52" viewBox="0 0 52 52" height="52px" width="52px" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1"><path d="M51.673,0H0v51.5c0.244-5.359,3.805-10.412,7.752-13.003l36.169-23.74c4.264-2.799,7.761-8.663,7.752-14.297V0L51.673,0z"/></svg>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="single_creative_member">
					<div class="creative_author">
						<img src="pages_assets/img/author/m16.jpg" alt="" />
					</div>
					<div class="member_info">
						<span class="member_name">Ariana Wayne</span>
						<span class="member_role">Designer</span>
					</div>
					<div class="member_icons">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<svg xml:space="preserve" enable-background="new 0 0 52 52" viewBox="0 0 52 52" height="52px" width="52px" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1"><path d="M51.673,0H0v51.5c0.244-5.359,3.805-10.412,7.752-13.003l36.169-23.74c4.264-2.799,7.761-8.663,7.752-14.297V0L51.673,0z"/></svg>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="single_creative_member">
					<div class="creative_author">
						<img src="pages_assets/img/author/m17.jpg" alt="" />
					</div>
					<div class="member_info">
						<span class="member_name">Beart Adino</span>
						<span class="member_role">PHP Developer</span>
					</div>
					<div class="member_icons">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<svg xml:space="preserve" enable-background="new 0 0 52 52" viewBox="0 0 52 52" height="52px" width="52px" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1"><path d="M51.673,0H0v51.5c0.244-5.359,3.805-10.412,7.752-13.003l36.169-23.74c4.264-2.799,7.761-8.663,7.752-14.297V0L51.673,0z"/></svg>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End Creative Member area -->
@endsection
{{-- @section('script')
<script type="text/javascript">
	$(document).ready(function(){
		$("#feedback").submit(function(){
			e.preventDefault();
			$.ajax({
				method: 'POST',
				url: "{{url('changepw')}}",
				data: $('form.feedback').serialize(),
				success: function(message){
					$("#feedback").html(message);
					$("#feedback-modal").modal('hide');
				},
				error: function(){
					alert("Error");
				}
			});
		});
	});
</script>
@endsection --}}