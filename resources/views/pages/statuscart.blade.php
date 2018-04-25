@extends('layout.index')
@section('title','Status')
@section('content')
<!--Start Shopping Cart top area -->
<div class="shopping_cart_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<form method="POST" action="page/cart">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="cart_title">
						<h2>Shopping Cart</h2>
						<div class="about_hope_text">
						<ul id="about_hope_details">
							<li><i class="fa fa-angle-right"></i>Name: {{Auth::user()->fullname}}</li>
							<li><i class="fa fa-angle-right"></i>Address: {{Auth::user()->address}}</li>
							<li><i class="fa fa-angle-right"></i>Phone: {{Auth::user()->phone}}</li>
						</ul>
					</div>
					</div>
					<div class="shopping-cart-table">
						<table class="cart_items">
							<tr>
								<th>Product Name</th>
								<th>Color</th>
								<th>Status</th>
								<th>Quantity</th>
								<th>Price</th>
							</tr>
							@foreach($order as $value)
							@foreach($value->orderitem as $item)
							<tr>
								<td>{{$item->productcolor->product->name}}</td>
								<td>{{$item->productcolor->colors->color}}</td>
								<td>{{$value->payment}}</td>
								<td>{{$item->qty}}</td>
								<td>{{number_format($value->total, 0, ',', '.')}} đ</td>
							</tr>
							@endforeach
							@endforeach
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<!--End Shopping Cart top area -->
<!--Start Estimate Shipping,Discount,Total checkout area --><!--End Estimate Shipping,Discount,Total checkout area -->
@endsection

