@extends('layout.index')
@section('title','Cart')
@section('content')
<!--Start Shopping Cart top area -->
<div class="shopping_cart_area">
<div class="container">
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="cart_title">
			<h2>Shopping Cart</h2>
		</div>
		<div class="shopping-cart-table">
			<table class="cart_items">
				<tr>
					<th>Remove</th>
					<th>Image</th>
					<th>Product Name</th>
					<th>Color</th>
					<th>Unit Price</th>
					<th>Quantity</th>
					<th>Subtotal</th>
				</tr>
				<tr>
					<td><a href="#">Delete</td>
						<td><img src="upload/product/@foreach($product->image as $img)
							{{$img->image}}
							@break
							@endforeach" alt=""/></td>
							<td>{{$product->name}}</td>
							<td>
								<div class="product-color">
									<div class="color-choose">
										@foreach($product->color as $cl)
										<div>
											<input data-image="{{$cl->color}}" type="radio" id="{{$cl->color}}" name="color" value="{{$cl->id}}" checked>
											<label for="{{$cl->color}}"><span></span></label>
										</div>
										@endforeach
									</div>
								</div>
							</td>
							<td>{{number_format($product->price, 0, ',', '.')}} đ</td>
							<td><input name="cart[390][qty]" value="1" size="4" title="Qty" class="input-text qty" maxlength="12">
							</td>
							<td>{{number_format($product->price, 0, ',', '.')}} đ</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="shopping_cart_main">
					<div class="shopping_button">
						<button type="button" title="shop"  class="continue_shopping">Continue Shopping</button>
					</div>
					<div class="shopping_button">
						<button type="button" title="shop"  class="continue_shopping">Clear Shopping Cart</button>
					</div>
					<div class="shopping_button">
						<button type="button" title="shop"  class="continue_shopping">Update Shopping Cart</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End Shopping Cart top area -->
<!--Start Estimate Shipping,Discount,Total checkout area -->
<div class="cart-collaterals-item">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="shopping_details_des">
					<h2>Infomation</h2>
					<div class="shopping_form">
						<h4>Name<span></span></h4>
						<input class="input-text validate-postcode" type="text" name="estimate_postcode" value="">
						<h4>Phone</h4>
						<input class="input-text validate-postcode" type="text" name="estimate_postcode" value="">
						<h4>address</h4>
						<input class="input-text validate-postcode" type="text" name="estimate_postcode" value="">
						<div class="review_button product_tag_add">
							<button type="submit" title="Submit Review" class="button">Get a Quote</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="shopping_details_des">
					<h2>Discount Codes</h2>
					<div class="shopping_form">
						<input class="input-text validate-postcode" type="text" name="estimate_postcode" value="">
						<div class="review_button product_tag_add">
							<button type="submit" title="Submit Review" class="button">Apply Coupon</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="total_price">
					<table class="total_rate">
						<tr>
							<td>Subtotal</td>
							<td>$800.00</td>
						</tr>
						<tr>
							<th>Grand Total</th>
							<th>$800.00</th>
						</tr>
					</table>
				</div>
				<div class="check_out_simble review_button ">
					<button type="submit" title="Submit Review" class="button">Payment</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End Estimate Shipping,Discount,Total checkout area -->
@endsection
