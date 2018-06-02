@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">GroupPhone
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
				<form action="admin/groupproduct/edit/{{$grproduct->id}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-group">
						<label>GroupPhone Parent</label>
						<select class="form-control" name="cateparent">
							@foreach($optioncate as $value)
							<option @if($grproduct->id_brand == $value->id)
								{{"selected"}}
							@endif value="{{$value->id}}">{{$value->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label>{{$grproduct->name}}</label>
						<input class="form-control" name="txtName" value="{{$grproduct->name}}" />
					</div>
					<button type="submit" class="btn btn-default">GroupPhone Edit</button>
					<button type="reset" class="btn btn-default">Reset</button>
					</form>
					</div>
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container-fluid -->
		</div>
		<!-- /#page-wrapper -->
@endsection