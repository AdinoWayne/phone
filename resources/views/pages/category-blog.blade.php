@extends('layout.index')
@section('title','Cate-Blog')
@section('content')
<div class="blog_post_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="breadcrumb-single blog_top_area">
					<ul id="breadcrumbs">
						<li><a href="page/home"><i class="fa fa-home"></i>Home</a></li>
						<li><span>Ι</span></li>
						<li>Blog</li>
					</ul>
				</div>
				@foreach($blog as $value)
				<div class="blog_details_area">
					<div class="blog_details_list">
						<ul class="blog_author">
							<li><i class="fa fa-user"></i>{{$value->user->fullname}}</li>
							<li><i class="fa fa-eye"></i>ngày viết :{{$value->created_at}}</li>
						</ul>
					</div>
					<div class="blog_info_details">
						<h2><a class="blog_info_heading" href="{{route('singleblog',$value->id)}}">{{$value->name}}</a></h2>
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