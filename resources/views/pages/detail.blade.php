@extends('layout.index')
@section('content')
<div class="breadcrumbs_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="breadcrumb-single breadcrumb_top">
					<ul id="breadcrumbs">
						<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
						<li><span>I</span></li>
						<li>{{$product->name}}</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="blog_single_view_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="my_tabs">
					<div class="tab-content tab_content_style">
						@foreach($product->image as $value)
						<div id="tab{{$value->id}}" class="tab-pane fade @if($index == 1) in active <?php $index++ ?> @endif">
							<div class="blog_tabs">
								<a class="fancybox" href="upload/product/{{$value->image}}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="upload/product/{{$value->image}}" alt="" /></a>
							</div>
						</div>
						@endforeach
					</div>
					<div class="blog_view_list">
						<ul class="tab_style tab_bottom">
							@foreach($product->image as $value)
							<li>
								<div class="blog_single_carousel">
									<a data-toggle="tab" href="#tab{{$value->id}}"><img src="upload/product/{{$value->image}}" alt=""/></a>
								</div>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="blog_product_details">
					<h2 class="blog_heading"><a href="#">{{$product->name}}</a></h2>
					<div class="product_rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
					<div class="product_rating">
						<a href="#">1 Review(s) <span>I</span></a>
						<a href="#"> Add Your Review</a>
					</div>
					<div class="pricing_rate">
						<p class="stack">Availability:<span class="in-stock">{{$product->version}} and {{$product->status}}</span></p>
						<p class="rating_dollor rating_margin"><span class="rating_value_two">{{$product->price}} VNĐ</span></p>
						<p class="blog_texts">{{$product->content}}</p>
					</div>
					<div class="product_blog_button ">
						<div class="cart_blog_details blog_icon_border">
							<a href="#" target="blank"><i class="fa fa-heart-o"></i></a>
						</div>
						<div class="cart_blog_details blog_icon_border">
							<a href="#" target="heart"><i class="fa fa-envelope"></i></a>
						</div>
					</div>
				</div>
				<div class="product_options_area">
					<div class="product_options_selection">
						<ul id="options_selection">
							<li><span class="star_color">*</span><span class="Product_color">color</span></li>
							<li>
								<select>
									<option value="" selected="selected">-- Please Select --</option>
									@foreach($product->color as $cl)
									<option value="{{$cl->id}}" style="background-color:{{$cl->html}};">{{$cl->color}}</option>
									@endforeach
								</select>
							</li>
						</ul>
					</div>
					<div class="cart_blog_item">
						<p class="rating_dollor rating_margin"><span class="rating_value_two">{{$product->price}} VNĐ</span></p>
						<div class="add-to-cart">
							<input type="text" title="Qty" value="1" class="qty"/>
							<button type="button" title="Add to Cart"  class="cart_button"><span>Add to Cart</span></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="product_collateral_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="my_tabs_description">
					<ul class="tab_style">
						<li class="active">
							<a data-toggle="tab" href="#tab-1">Product Description</a>
						</li>
						<li>
							<a data-toggle="tab" href="#tab-3">Product Tags</a>
						</li>
					</ul>
					<div class="tab-content tab_content_style">
						<div id="tab-1" class="tab-pane fade in active">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="product_info">
									<h3>Thông tin kỹ thuật</h3>
									<table class="table">
										<tr>
											<td class="spec-title">Bảo hành:</td>
											<td class="spec-content">24 tháng</td>
										</tr>
										<tr>
											<td class="spec-title">CPU:</td>
											<td class="spec-content">{{$product->cpu}}</td>
										</tr>
										<tr>
											<td class="spec-title">Màn hình:</td>
											<td class="spec-content">{{$product->screen}}</td>
										</tr>
										<tr>
											<td class="spec-title">Bộ nhớ Ram:</td>
											<td class="spec-content">{{$product->ram}}</td>
										</tr>
										<tr>
											<td class="spec-title">Bộ nhớ trong:</td>
											<td class="spec-content">{{$product->storage}}</td>
										</tr>
										<tr>
											<td class="spec-title">Camera:</td>
											<td class="spec-content">{{$product->camera}}</td>
										</tr>
										<tr>
											<td class="spec-title">Hệ điều hành:</td>
											<td class="spec-content">{{$product->os}}</td>
										</tr>
										<tr>
											<td colspan="2" class="text-center">
												<!-- Button trigger modal -->
												<button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#exampleModalLong">
													Xem chi tiết
												</button>
											</td>
										</tr>
									</table>
									<!-- Modal -->
									<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h3 class="modal-title" id="exampleModalLongTitle">Thông tin kỹ thuật</h3>
												</div>
												<div class="modal-body">
													<table class="table text-left">
														<tr class="tr">
															<td class="spec-title">Màn hình	:</td>
															<td class="spec-content">{{$product->screen}}</td>
														</tr>
														<tr class="tr">
															<td class="spec-title">Camera:</td>
															<td class="spec-content">{{$product->camera}}</td>
														</tr>
														<tr class="tr">
															<td class="spec-title">Bộ nhớ Ram:</td>
															<td class="spec-content">{{$product->ram}}</td>
														</tr>
														<tr class="tr">
															<td class="spec-title">Bộ nhớ Trong:</td>
															<td class="spec-content">{{$product->storage}}</td>
														</tr>
														<tr class="tr">
															<td class="spec-title">Hệ điều hành:</td>
															<td class="spec-content">{{$product->os}}</td>
														</tr>
														<tr class="tr">
															<td class="spec-title">Chipset:</td>
															<td class="spec-content">{{$product->chipset}}</td>
														</tr>
														<tr class="tr">
															<td class="spec-title">CPU:</td>
															<td class="spec-content">{{$product->cpu}}</td>
														</tr>
														<tr class="tr">
															<td class="spec-title">Kích thước:</td>
															<td class="spec-content">{{$product->size}}</td>
														</tr>
														<tr class="tr">
															<td class="spec-title">Độ phân giải màn hình:</td>
															<td class="spec-content">{{$product->screenresolution}}</td>
														</tr>
														<tr class="tr">
															<td class="spec-title">Công nghệ màn hình:</td>
															<td class="spec-content">{{$product->displaytype}}</td>
														</tr>  
														<tr class="tr">
															<td class="spec-title">Camera Trước:</td>
															<td class="spec-content">{{$product->fcarema}}</td>
														</tr>
														<tr class="tr">
															<td class="spec-title">Camera Sau:</td>
															<td class="spec-content">{{$product->rcarema}}</td>
														</tr>
														<tr class="tr">
															<td class="spec-title">Mạng 4G:</td>
															<td class="spec-content">{{$product->wirelesstechnology}}</td>
														</tr>
														<tr class="tr">
															<td class="spec-title">Kiểu dáng:</td>
															<td class="spec-content">{{$product->body}}</td>
														</tr>
														<tr class="tr">
															<td class="spec-title">Dung lượng pin:</td>
															<td class="spec-content">{{$product->power}}</td>
														</tr>
														<tr class="tr">
															<td class="spec-title">Hỗ trợ Sim:</td>
															<td class="spec-content">{{$product->sim}}</td>
														</tr>
														<tr class="tr">
															<td class="spec-title">Công nghệ Bluetooth:</td>
															<td class="spec-content">{{$product->Bluetooth}}</td>
														</tr>
														<tr class="tr">
															<td class="spec-title">Cổng USB:</td>
															<td class="spec-content">{{$product->usb}}</td>
														</tr>
													</table>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="tab-3" class="tab-pane fade">
							<div class="product_description">
								<ul class="comments">
									@foreach($product->comment as $cm)
									<li>
										<p><img class="avatar" style="" src="upload/user/{{$cm->user->avatar}}"><strong><a href="#">{{$cm->user->fullname}}</a></strong></p>
										<span class="date">{{$cm->created_at}}</span>
										<i class="icons icon-reply"></i>
										<p>{{$cm->content}}</p>
									</li>
									@endforeach
									<a href="#" class="button home-green"><i class="icons icon-spinner"></i> Refresh comments list</a>
									<a href="#" class="button orange"><i class="icons icon-rss"></i> RSS feed for comments to this post</a>
									<textarea class="form-control" rows="3"></textarea>
									<div class="add-to-cart">
										<button type="button" class="cart_button"><span>Comment</span></button>
									</div>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="related_products_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="feature_text feature_upsell">
					<h4>Related Products</h4>
				</div>
				<div class="row">
					<div class="upsell_product_list">
						@foreach($brand->product as $upsell)
						<div class="col-lg-3">
							<div class="single_upsell">
								<a href="#"><img src="upload/product/@foreach($upsell->image as $img)
									{{$img->image}}
									@break
									@endforeach" alt=""/></a>
									<div class="upsell_details">
										<h2><a href="#">{{$upsell->name}}</a></h2>
										<div class="product_rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
										</div>
										<p>{{$upsell->price}}</p>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	@endsection