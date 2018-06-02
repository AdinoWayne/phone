@extends('layout.index')
@section('title','Home')
@section('content')
<section class="slider-area">
	<!-- slider start -->
	<div class="slider">
		<div id="mainSlider" class="nivoSlider nevo-slider">
			@foreach($slide as $value)
			<img src="upload/slide/{{$value->image}}" alt="main slider" title="#htmlcaption{{$value->id}}"/>
			@endforeach
		</div>
	</div>
	<!-- slider end -->
</section>
<!-- slider-area end -->
<!--Start Feature area -->
<div class="feature_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="feature_text">
					<h4>Sản Phẩm Nổi Bật</h4>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach($product as $items)
			<div class="product_bottom_area">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="product_list">
						<div class="single_product">
							<a href="page/detail/{{$items->id}}" target="main"><img src="upload/product/@foreach($items->image as $img)
								{{$img->image}}
								@break
								@endforeach" alt=""/></a>
							<div class="product_details">
								<h2>{{$items->name}}</h2>
								<p><span class="popular_price">{{number_format($items->price, 0, ',', '.')}} đ</span></p>
							</div>
							<div class="product_detail">
								<div class="star_icon">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</div>
								<div class="product_button">
									<div class="cart_details">
										<a href="giohang/{{$items->id}}" target="blank">Buy Now</a>
									</div>
									<div class="cart_details">
										<a href="page/detail/{{$items->id}}" target="expand"><i class="fa fa-expand"></i></a>
									</div>
									<div class="cart_details">
										<a href="{{route('ThemCart',"$items->id")}}" target="heart"><i class="fa fa-heart-o"></i></a>
									</div>
								</div>
							</div>
							<div class="sale_product">
								<h5>{{$items->status}}</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php $index++; ?>
    		@if($index % 4 == 0) </div><div class="row">@endif
			@endforeach
		</div>
	</div>
</div>
<!--End Feature area -->
<!--Start Blog area -->
<div class="blog_post_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="feature_text">
					<h4>Blog Tin</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="carousel_blog_list">
				@foreach($blog as $value)
				<div class="col-lg-3">
					<div class="single_blog">
						<a href="{{route('singleblog',$value->id)}}"><img src="upload/blog/{{$value->image}}" alt="" /></a>
						<div class="blog_details">
							<a href="{{route('singleblog',$value->id)}}">{{$value->name}}</a>
							<p>{{$value->summary}}...</p>
							<h3>{{$value->created_at}}</h3>
							<a href="{{route('singleblog',$value->id)}}">
								<div class="read_more">
									<i class="fa fa-angle-right"></i>
								</div>
							</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
<!--End blog area -->
<!--Start Contact info area -->
<div class="service_info_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="service_list">
					<h2><i class="fa fa-envelope-o"></i> gnurt10@gmail.com</h2>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="service_list">
					<h3><i class="fa fa-phone"></i>(+84)987 896 241</h3>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="Social_list">
					<h2>Connect us: </h2>
					<div class="social_icon my-class uk-scrollspy-init-inview uk-invisible">
						<a data-toggle="tooltip" data-placement="top" title="" data-original-title="Like 6k" class="red-tooltip" href="#"><i class="fa fa-facebook"></i></a>
						<a data-toggle="tooltip" data-placement="top" title="" data-original-title="Followers 61k" class="red-tooltip" href="#"><i class="fa fa-twitter"></i></a>
						<a data-toggle="tooltip" data-placement="top" title="" data-original-title="Followers 16k" class="red-tooltip" href="#"><i class="fa fa-linkedin"></i></a>
						<a data-toggle="tooltip" data-placement="top" title="" data-original-title="Followers 10k" class="red-tooltip" href="#"><i class="fa fa-pinterest"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection