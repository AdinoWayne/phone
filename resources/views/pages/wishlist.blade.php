@extends('layout.index')
@section('title','Wishlist')
@section('content')
<div class="clothing_product_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="wishlist-page-area cart-page-main-area">
					<div class="sec-heading-area">
						<h2>My Wishlist</h2>
					</div>
					<div class="myaccount-dashboard my-wish-list">
						<div class="responsive-wishlist">
							<table class="table wishlist-table cart-table">
								<thead>
									<tr>
										<th class="width-1"> </th>
										<th class="width-2">Product Details & Comment</th>
										<th class="width-3">Add to Cart</th>	
										<th class="width-4"> </th>	
									</tr>														
								</thead>
								<tbody>
									@if(isset($product_cart))
									@foreach($product_cart as $product)
									<tr class="wishlist_1">
										<td>
											<div class="cartpage-image">
												<a href="#"><img src="upload/product/@foreach($product['item']->image as $img)
													{{$img->image}}
													@break
													@endforeach" width="90px" height="70px" /></a>
												</div>
											</td>
											<td>
												<div class="cartpage-pro-dec">
													<h2><a href="">{{$product['item']['name']}}</a></h2>
													<p>{{$product['item']['content']}}</p>
													<textarea class="yourmessage" placeholder="Please, enter your comments..."></textarea>
												</div>
											</td>
											<td>
												<div class="cart-page-edit">
													<div class="w-price">
														<span class="regular-price">{{$product['item']['price']}} Đ</span>
													</div>
													<div class="pro-add-to-cart">
														<p><a title="Add to Cart" href="#">Buy Now</a></p>
													</div>
													<div class="w-edit">
														<a href="#">Edit</a>
													</div>
												</div>
											</td>
											<td>
												<div class="cartpage-item-remove">
													<a title="Remove" href="#">Remove</a>
												</div>
											</td>
										</tr>
										@endforeach
										@endif
									</tbody>									
								</table>
							</div>
							<div class="cartpage-button">
								<div class="button-right">
									<a href="#" class="add-tag-btn cartpage-btn-1">Share Wishlist</a>
									<a href="#" class="add-tag-btn cartpage-btn-2">Add All to Cart</a>
									<a href="#" class="add-tag-btn cartpage-btn-3">Update Wishlist</a>
								</div>	
							</div>	
							<a href="#" class="wishlist-back"><i class="fa fa-angle-double-left"></i> Back</a>
						</div>
					</div>		
				</div>
			</div>
		</div>
	</div>
				@endsection