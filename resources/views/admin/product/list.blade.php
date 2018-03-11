@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Phone
					<small>List</small>
				</h1>
				@if(session('Thongbao'))
				<div class="alert alert-success">{{session('Thongbao')}}
				</div>
				@endif
			</div>
			<!-- /.col-lg-12 -->
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr align="center">
						<th>ID</th>
						<th>name</th>
						<th>Price</th>
						<th>Content</th>
						<th>Status</th>
						<th>Screen</th>
						<th>Camera</th>
						<th>Ram</th>
						<th>Storage</th>
						<th>image</th>
						<th>os</th>
						<th>Delete</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
					@foreach($list as $value)
					<tr class="odd gradeX" align="center">
						<th>{{$value->id}}</th>
						<th>{{$value->name}}</th>
						<th>{{$value->price}}</th>
						<th>{{$value->content}}</th>
						<th>{{$value->status}}</th>
						<th>{{$value->screen}}</th>
						<th>{{$value->camera}}</th>
						<th>{{$value->ram}}</th>
						<th>{{$value->storage}}</th>
						<th>@foreach($value->image as $vl)
							<img width="200px" src="upload/product/{{$vl->image}}" />
							@endforeach
						</th>
						<th>{{$value->os}}</th>
						<td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/product/delete/{{$value->id}}"> Delete</a></td>
						<td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/product/edit/{{$value->id}}">Edit</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection