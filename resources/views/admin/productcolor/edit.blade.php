@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Product Details
					<small>Edit</small>
				</h1>
			</div>
			<!-- /.col-lg-12 -->
			<div class="col-lg-7" style="padding-bottom:120px">
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
				<form action="" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-group">
						<label>Product List</label>
						<select class="form-control" name="cateloglist" id="cl">
							@foreach($pro as $value)
							<option @if($product->id_product == $value->id)
								{{"selected"}}
								@endif value="{{$value->id}}">{{$value->name}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label>Color List</label>
							<select class="form-control" name="cateparent" id="cg">
								@foreach($color as $value)
								<option @if($product->id_color == $value->id)
									{{"selected"}}
									@endif value="{{$value->id}}">{{$value->color}}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<label>Qty</label>
								<input class="form-control" name="txtQty" value="{{$product->qty}}" />
							</div>
							<button type="submit" class="btn btn-default">ProductDetail Edit</button>
							<button type="reset" class="btn btn-default">Reset</button>
							<form>
							</div>
						</div>
						<!-- /.row -->
					</div>
					<!-- /.container-fluid -->
				</div>
				<!-- /#page-wrapper -->
				@endsection