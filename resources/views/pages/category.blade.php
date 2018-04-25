@extends('layout.index')
@section('title','Category')
@section('content')
<div class="breadcrumbs_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="breadcrumb-single">
					<ul id="breadcrumbs">
						<li><a href="page/home"><i class="fa fa-home"></i>Home</a></li>
						<li><span>Ι</span></li>
						<li>Phone</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End breadcrumbs area -->
<!--Start clothing product area -->
<div class="clothing_product_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="catagory_price_color">
					<div class="catagory_area">
						<h2>CATEGORY</h2>
						<ul class="catagory">
							<li><a href="page/category/1"><i class="fa fa-angle-right"></i>Iphone</a></li>
							<li><a href="page/category/2"><i class="fa fa-angle-right"></i>SangSung</a></li>
							<li><a href="page/category/3"><i class="fa fa-angle-right"></i>Oppo</a></li>
							<li><a href="page/category/7"><i class="fa fa-angle-right"></i>Nokia</a></li>
							<li><a href="page/category/4"><i class="fa fa-angle-right"></i>Sony</a></li>
							<li><a href="page/category/5"><i class="fa fa-angle-right"></i>Asus</a></li>
						</ul>
					</div>
					<form id="filter" method="post" action="filterPrice">
						{!! csrf_field() !!}
						<input type="hidden" name="url" value="{{Request::url()}}">
						<div class="priceing_area">
							<h2>Price</h2>
							<div class="info_widget">
								<div class="price_filter">
									@if(isset($check2))
									<h2>Giá sản phẩm {{$price}}</h2>
									<ul class="catagory">
										<li><a href="{{$url}}"><i class="fa fa-angle-right"></i>Trở Về</a></li>
										<ul>
											@else
											<div id="slider-range"></div>
											<div class="price_slider_amount">
												<input type="text" id="amount" name="price"  placeholder="Add Your Price" />
												<input type="submit"  value="Search"/>
											</div>
											@endif
										</div>
									</div>
								</div>
								<div class="catagory_area">
									<h2>MAU SAC</h2>
									<ul class="catagory">
									</ul>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="catagory_banner">
									<img src="pages_assets/img/banner/category.png" alt="" />
								</div>
							</div>
						</div>
						<div class="my_tabs">
							<ul class="tab_style">
								<li class="active"><a data-toggle="tab" href="#tab1"><span><i class="fa fa-th"></i></span></a></li>
								<li><a data-toggle="tab" href="#tab2"><span><i class="fa fa-th-list"></i></span></a></li>
							</ul>
							<div class="sort-by">
								<label>Sort By</label>
								<select>
									<option value="" selected="selected">Position</option>
									<option value="">Name</option>
									<option value="">Price</option>
								</select>
								<a href="#"><i class="fa fa-long-arrow-up"></i></a>
							</div>
							<div class="tab-content tab_content_style">
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
										@foreach($pro as $items)
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<div class="product_list">
												<div class="single_product repomsive_768">
													<a href="page/detail/{{$items->id}}" target="main"><img src="upload/product/@foreach($items->image as $img)
														{{$img->image}}
														@break
														@endforeach" alt=""/></a>
														<div class="product_details">
															<h2>{{$items->name}}</h2>
															<p><span class="popular_price">{{number_format($items->price, 0, ',', '.')}}đ</span></p>
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
													</div>
												</div>
											</div>
											<?php $index++; ?>
										@if($index % 3 == 0) </div><div class="row">@endif
											@endforeach
										</div>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="blog_pagination">
													<h2>Page:</h2>
													{{$pro->links()}}
												</div>
											</div>
										</div>
									</div>
									<div id="tab2" class="tab-pane fade">
										@foreach($pro as $items)
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="product_blog_image">
													<div class="product_blog_image">
														<a href="product.html"><img src="upload/product/@foreach($items->image as $img)
															{{$img->image}}
															@break
															@endforeach" alt=""/></a>
														</div>
													</div>
												</div>
												<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
													<div class="blog_product_details">
														<h2 class="blog_heading"><a href="#">{{$items->name}}</a></h2>
														<div class="product_rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
														<div class="product_rating">
															<a href="#">1 Review(s) <span>I</span></a>
														</div>
														<div class="pricing_rate">
															<p class="rating_dollor"><span class="rating_value_one">{{number_format($items->price, 0, ',', '.')}}đ</span> <span class="rating_value_two">{{number_format($items->price, 0, ',', '.')}}đ</span></p>
															<p class="blog_texts">{{$items->content}}</p>
														</div>
														<div class="product_blog_button">
															<div class="cart_blog_details">
																<a href="#" target="blank">Add to cart</a>
															</div>
															<div class="cart_blog_details">
																<a href="#" target="expand"><i class="fa fa-expand"></i></a>
															</div>
															<div class="cart_blog_details">
																<a href="#" target="heart"><i class="fa fa-heart-o"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
											@endforeach
											<div class="row">
												<div class="col-lg-12">
													<div class="blog_pagination">
														<h2>Page:</h2>
														{{$pro->links()}}
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endsection