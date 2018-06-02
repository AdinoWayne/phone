@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Order
					<small>Detail</small>
				</h1>
			</div>
			<div class="container">     
				<div class="row">
					<div class="col-sm-6">
						<ul class="list-group">
							<li class="list-group-item">Full Name : {{$user->fullname}}</li>
							<li class="list-group-item">Emai : {{$user->email}}</li>
						</ul>
					</div>
					<div class="col-sm-4">
						<ul class="list-group">
							<li class="list-group-item">Phone Number : {{$user->phone}}</li>
							<li class="list-group-item">Address : {{$user->address}}</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="container">
				<form action="admin/order/edit/{{$order->id}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="col-sm-6">
						<ul class="list-group">
							<li class="list-group-item">Status 
								<select class="form-control" name="select" >
									<option @if($order->payment == "Hoàn Thành") {{"selected"}} @endif value="Hoàn Thành">Đã Thanh toán</option>
									<option @if($order->payment == "đang xử lý") {{"selected"}} @endif value="đang xử lý">Chưa Thanh toán</option>
								</select>
							</li>
							<li class="list-group-item">Date Time : {{$order->created_at}} <button type="submit" class="btn btn-default">Lưu</button></li>
						</ul>
					</div>
				</form>
			</div>
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr align="center">
						<th>STT</th>
						<th>Item</th>
						<th>Quantity</th>
						<th>Price</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
					@foreach($order->orderitem as $value)
					<tr class="odd gradeX" align="center">
						<td>{{$index++}}</td>
						<td>{{$value->productcolor->product->name}} màu {{$value->productcolor->colors->color}}</td>
						<td>{{$value->qty}}</td>
						<td>{{$value->price}}</td>
						<td>{{$value->qty*$value->price}}</td>
					</tr>
					@endforeach
				</tbody>
				<tr align="center">
					<td colspan="4">Sub Total</td>
					<td>{{$total[0]}}</td>
				</tr>
			</table>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection