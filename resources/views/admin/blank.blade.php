@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<h1>WELCOME TO ADINO PHONE</h1>
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
	</div>
	<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection