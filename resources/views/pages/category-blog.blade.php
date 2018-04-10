@extends('layout.index')
@section('title','Cate-Blog')
@section('content')
<div class="blog_post_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="breadcrumb-single blog_top_area">
					<ul id="breadcrumbs">
						<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
						<li><span>Ι</span></li>
						<li>Blog</li>
					</ul>
				</div>
				@foreach($blog as $value)
				<div class="blog_details_area">
					<i class="fa fa-picture-o"></i>
					<div class="blog_details_list">
						<ul class="blog_author">
							<li><i class="fa fa-folder-open-o"></i> <a href="#">blog</a></li>
							<li><i class="fa fa-user"></i>{{$value->user->fullname}}</li>
							<li><i class="fa fa-eye"></i> Hits: 999</li>
							<li>
								<div class="star_blog">
									Rating: 
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
							</li>
						</ul>
					</div>
					<div class="blog_info_details">
						<h2><a class="blog_info_heading" href="#">{{$value->name}}</a></h2>
						<img class="imgblog" src="upload/blog/{{$value->image}}">
						<p>{{$value->summary}}.</p>
						<a class="readmore_link" href="{{route('singleblog',$value->id)}}" title="Images">Read more ...</a>
					</div>
				</div>
				@endforeach
				<div class="pagination_wrapper">
					<ul class="pagination">
						{{$blog->links()}}
					</ul>    
				</div>
			</div>
		</div>
	</div>
</div>
@endsection