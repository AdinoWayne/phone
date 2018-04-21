<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<base href="{{asset('')}}">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link href="admin_assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="admin_assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
	<link href="admin_assets/dist/css/sb-admin-2.css" rel="stylesheet">
	<link href="admin_assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="admin_assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
	<link href="admin_assets/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
	<style type="text/css">
	body {
		font-family: DejaVu Sans;
	}
</style>
</head>
<body>
	<div id="wrapper">
		<div id="page-wrapper">
			<div class="container-fluid">
				<div class="col-lg-12">
					<h1 class="page-header" style="text-align: center;">BIll
					</h1>
				</div>
				<div>   
					<div class="col-sm-12">
						<h3>Store AdinoPhone</h3>
						<label>Khách hàng: {{$user->fullname}}</label><br>
						<label>Email: {{$user->email}}</label><br>
						<label>Số điện thoại: {{$user->phone}}</label><br>
						<label>Địa chỉ : {{$user->address}}</label><br>
						<label>ngày tháng : {{$order->created_at}}</label><br>
					</div>
				</div>
				<div class="container">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr align="center">
								<th>STT</th>
								<th>Sản phẩm</th>
								<th>Số lượng</th>
								<th>Giá cả (đ)</th>
								<th>Thành tiền (đ)</th>
							</tr>
						</thead>
						<tbody>
							@foreach($order->orderitem as $value)
							<tr class="odd gradeX" align="center">
								<td>{{$index++}}</td>
								<td>{{$value->productcolor->product->name}} màu {{$value->productcolor->colors->color}}</td>
								<td>{{$value->qty}}</td>
								<td>{{number_format($value->price, 0, ',', '.')}}</td>
								<td>{{number_format($value->qty*$value->price, 0, ',', '.')}}</td>
							</tr>
							@endforeach
						</tbody>
						<tr align="center">
							<td></td>
							<td></td>
							<td></td>
							<td>Tổng tiền (đ)</td>
							<td>{{number_format($total[0], 0, ',', '.')}}</td>
						</tr>
					</table>
					<div class="col-sm-12">
						<label>Người mua hàng</label>
					</div>
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container-fluid -->
		</div>
	</div>
	<script src="admin_assets/bower_components/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript" src="admin_assets/js/jquery.shorten.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="admin_assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script src="admin_assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>

	<!-- Custom Theme JavaScript -->
	<script src="admin_assets/dist/js/sb-admin-2.js"></script>
</body>
</html>