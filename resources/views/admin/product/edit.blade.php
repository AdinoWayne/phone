@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Phone
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
						<label>Name</label>
						<input class="form-control" name="txtName" value="{{$product->name}}" />
					</div>
					<div class="form-group">
						<label>Price</label>
						<input class="form-control" name="txtPrice" value="{{$product->price}}"/>
					</div>
					<div class="form-group">
						<label>Content</label>
						<textarea class="form-control" rows="3" name="txtContent">{{$product->content}}</textarea>
					</div>
					<div class="form-group">
						<label>Status</label>
						<input class="form-control" name="txtStatus" value="{{$product->status}}"/>
					</div>
					<div class="form-group">
						<label>Version</label>
						<input class="form-control" name="txtVersion" value="{{$product->version}}"/>
					</div>
					<div class="form-group">
						<label>Screen</label>
						<input class="form-control" name="txtScreen" value="{{$product->screen}}"/>
					</div>
					<div class="form-group">
						<label>Camera</label>
						<input class="form-control" name="txtCamera" value="{{$product->camera}}"/>
					</div>
					<div class="form-group">
						<label>Ram</label>
						<input class="form-control" name="txtRam" value="{{$product->ram}}"/>
					</div>
					<div class="form-group">
						<label>Storage</label>
						<input class="form-control" name="txtStorage" value="{{$product->storage}}"/>
					</div>
					<div class="form-group">
						<label>OS</label>
						<input class="form-control" name="txtOS" value="{{$product->os}}"/>
					</div>
					<div class="form-group">
						<label>Chipset</label>
						<input class="form-control" name="txtChipset" value="{{$product->chipset}}"/>
					</div>
					<div class="form-group">
						<label>CPU</label>
						<input class="form-control" name="txtCPU" value="{{$product->cpu}}"/>
					</div>
					<div class="form-group">
						<label>Size</label>
						<input class="form-control" name="txtSize" value="{{$product->size}}"/>
					</div>
					<div class="form-group">
						<label>Screenresolution</label>
						<input class="form-control" name="txtScreenresolution" value="{{$product->screenresolution}}"/>
					</div>
					<div class="form-group">
						<label>Displaytype</label>
						<input class="form-control" name="txtDisplaytype" value="{{$product->displaytype}}"/>
					</div>
					<div class="form-group">
						<label>Front-camera</label>
						<input class="form-control" name="txtFcarema" value="{{$product->fcarema}}"/>
					</div>
					<div class="form-group">
						<label>Rear-camera</label>
						<input class="form-control" name="txtRcarema" value="{{$product->rcarema}}"/>
					</div>
					<div class="form-group">
						<label>Wirelesstechnology</label>
						<input class="form-control" name="txtWirelesstechnology" value="{{$product->wirelesstechnology}}"/>
					</div>
					<div class="form-group">
						<label>Power</label>
						<input class="form-control" name="txtPower" value="{{$product->power}}"/>
					</div>
					<div class="form-group">
						<label>Body</label>
						<input class="form-control" name="txtBody" value="{{$product->body}}"/>
					</div>
					<div class="form-group">
						<label>Sim</label>
						<input class="form-control" name="txtSim" value="{{$product->sim}}"/>
					</div>
					<div class="form-group">
						<label>Bluetooth</label>
						<input class="form-control" name="txtBluetooth" value="{{$product->Bluetooth}}"/>
					</div>
					<div class="form-group">
						<label>Usb</label>
						<input class="form-control" name="txtUsb" value="{{$product->usb}}"/>
					</div>
					<div class="form-group">
						<label>More</label>
						<input class="form-control" name="txtMore" value="{{$product->more}}"/>
					</div>
					<button type="submit" class="btn btn-default">Phone Edit</button>
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
		@section('script')
		@endsection