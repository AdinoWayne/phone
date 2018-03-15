@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Phone
					<small>Add</small>
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
				<form action="admin/product/add" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-group">
						<label>Brand List</label>
						<select class="form-control" name="cateloglist" id="cl">
							@foreach($optioncalog as $value)
							<option value="{{$value->id}}">{{$value->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label>GroupPhone List</label>
						<select class="form-control" name="cateparent" id="cg">
							@foreach($optioncate as $value)
							<option value="{{$value->id}}">{{$value->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label>Name</label>
						<input class="form-control" name="txtName"/>
					</div>
					<div class="form-group">
						<label>Price</label>
						<input class="form-control" name="txtPrice"/>
					</div>
					<div class="form-group">
						<label>Content</label>
						<textarea class="form-control" rows="3" name="txtContent"></textarea>
					</div>
					<div class="form-group">
						<label>Status</label>
						<input class="form-control" name="txtStatus"/>
					</div>
					<div class="form-group">
						<label>Version</label>
						<input class="form-control" name="txtVersion"/>
					</div>
					<div class="form-group">
						<label>Screen</label>
						<input class="form-control" name="txtScreen"/>
					</div>
					<div class="form-group">
						<label>Camera</label>
						<input class="form-control" name="txtCamera"/>
					</div>
					<div class="form-group">
						<label>Ram</label>
						<input class="form-control" name="txtRam"/>
					</div>
					<div class="form-group">
						<label>Storage</label>
						<input class="form-control" name="txtStorage"/>
					</div>
					<div class="form-group">
						<label>OS</label>
						<input class="form-control" name="txtOS"/>
					</div>
					<div class="form-group">
						<label>Chipset</label>
						<input class="form-control" name="txtChipset"/>
					</div>
					<div class="form-group">
						<label>CPU</label>
						<input class="form-control" name="txtCPU"/>
					</div>
					<div class="form-group">
						<label>Size</label>
						<input class="form-control" name="txtSize"/>
					</div>
					<div class="form-group">
						<label>Screenresolution</label>
						<input class="form-control" name="txtScreenresolution"/>
					</div>
					<div class="form-group">
						<label>Displaytype</label>
						<input class="form-control" name="txtDisplaytype"/>
					</div>
					<div class="form-group">
						<label>Front-camera</label>
						<input class="form-control" name="txtFcarema"/>
					</div>
					<div class="form-group">
						<label>Rear-camera</label>
						<input class="form-control" name="txtRcarema"/>
					</div>
					<div class="form-group">
						<label>Wirelesstechnology</label>
						<input class="form-control" name="txtWirelesstechnology"/>
					</div>
					<div class="form-group">
						<label>Power</label>
						<input class="form-control" name="txtPower"/>
					</div>
					<div class="form-group">
						<label>Body</label>
						<input class="form-control" name="txtBody"/>
					</div>
					<div class="form-group">
						<label>Sim</label>
						<input class="form-control" name="txtSim"/>
					</div>
					<div class="form-group">
						<label>Bluetooth</label>
						<input class="form-control" name="txtBluetooth"/>
					</div>
					<div class="form-group">
						<label>Usb</label>
						<input class="form-control" name="txtUsb"/>
					</div>
					<div class="form-group">
						<label>More</label>
						<input class="form-control" name="txtMore"/>
					</div>
					<div class="form-group">
						<label>Upload Image</label>
						<input type="file" name="txtHinh" class="form-control"/>
					</div>
					<button type="submit" class="btn btn-default">Phone Add</button>
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
		<script type="text/javascript">
			$(document).ready(function(){
				$("#cl").change(function(){
					var id_brand =$(this).val();
					$.get("admin/Ajax/groupproduct/"+id_brand,function(data){
						$("#cg").html(data);
					});
				});
			});
		</script>
		@endsection