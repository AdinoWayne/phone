@extends('layout.index')
@section('title','Cate-Blog')
@section('content')
<div class="blog_post_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
				<div class="breadcrumb-single blog_top_area">
					<ul id="breadcrumbs">
						<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
						<li><span>Ι</span></li>
						<li>Blog</li>
						<li><span>Ι</span></li>
						<li>{{$blog->name}}</li>
					</ul>
				</div>
				<div class="blog_details_area">
					<div class="blog_details_list">
						<ul class="blog_author">
							<li><i class="fa fa-user"></i>{{$blog->user->fullname}}</li>
							<li><i class="fa fa-eye"></i>ngày viết :{{$blog->created_at}}</li>
						</ul>
					</div>
					<div class="blog_info_details">
						 <h2><a class="blog_info_heading" href="">{{$blog->name}}</a></h2>
						 <img class="imgblog" src="upload/blog/{{$blog->image}}">
						 <p class="blog_paragrap_style">{!!html_entity_decode($blog->content)!!}</p>
					</div>
				</div>
				<div class="blog_social_icon">
					<img src="pages_assets/img/social/shareicon.png" alt="" />
				</div>
			</div>
		</div>
	</div>
</div>
@endsection