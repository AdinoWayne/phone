@extends('layout.index')
@section('title','Cart')
@section('content')
<!--Start Shopping Cart top area -->
<div class="shopping_cart_area">
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
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<form method="POST" action="page/cart">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="cart_title">
						<h2>Shopping Cart</h2>
					</div>
					<div class="shopping-cart-table">
						<table class="cart_items">
							<tr>
								<th>STT</th>
								<th>Image</th>
								<th>Product Name</th>
								<th>Color</th>
								<th>Unit Price</th>
								<th>Quantity</th>
								<th>Subtotal</th>
							</tr>
							<tr>
								<td>1</td>
								<td><img src="upload/product/{{$image}}" alt=""/></td>
								<td>{{$product->name}}</td>
								<td>
									<div class="product-color">
										<div class="color-choose">
											@foreach($product->color as $value)
											<div>
												<input data-image="{{$value->color}}" type="radio" id="{{$value->color}}" name="color" value="{{$value->id}}" checked>
												<label for="{{$value->color}}" data-toggle="tooltip" title="{{$value->color}}" ><span></span></label>
											</div>
											@endforeach
										</div>
									</div>
								</td>
								<td>{{number_format($product->price, 0, ',', '.')}} đ</td>
								<td>{{-- <input name="cart[390][qty]" value="1" size="4" title="Qty" class="input-text qty" maxlength="12" readonly="true"> --}}
									<select class="selectpicker" name="txtqty">
										<option value="1" selected>One</option>
										<option value="2">Two</option>
										<option value="3">Three</option>
										<option value="4">Four</option>
										<option value="5">Five</option>
									</select>
								</td>
								<td class="rs">{{number_format($product->price, 0, ',', '.')}} đ</td>
							</tr>
						</table>
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
							<input class="input-text validate-postcode" type="text" name="txtname" value="">
							<h4>Phone</h4>
							<input class="input-text validate-postcode" type="text" name="txtphone" value="">
							<h4>address</h4>
							<input class="input-text validate-postcode" type="text" name="txtaddress" value="">
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="shopping_details_des">
						<h2>Discount Codes</h2>
						<div class="shopping_form">
							<input class="input-text validate-postcode" type="text" name="estimate_postcode" value="">
							<div class="review_button product_tag_add">
								<button type="button" title="Submit Review" class="button">Apply Coupon</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="total_price">
						<table class="total_rate">
							<tr>
								<th>Total</th>
								<th class="rs" >{{number_format($product->price, 0, ',', '.')}} đ</th>
							</tr>
						</table>
					</div>
					<div class="check_out_simble review_button ">
						<button type="submit" title="Submit Review" class="button">Payment</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!--End Estimate Shipping,Discount,Total checkout area -->
@endsection
@section('script')
<script>
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
		$(".selectpicker").change(function(){
			const number =$(this).val();
			const price ={{$product->price}};
			$.get("Ajax/giohang/"+number+"/"+price,function(data){
				$(".rs").html(data);
			});
		});
	});
</script>
@endsection

