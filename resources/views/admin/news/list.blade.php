@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">News
					<small>List</small>
				</h1>
				@if(session('Thongbao'))
				<div class="alert alert-success">{{session('Thongbao')}}
				</div>
				@endif
			</div>
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr align="center">
						<th>ID</th>
						<th>Name</th>
						<th>Summary</th>
						<th>Image</th>
						<th>Author</th>
						<th>Content</th>
						<th>DateCreated</th>
						<th>Delete</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
					@foreach($list as $value)
					<tr class="odd gradeX" align="center">
						<td>{{$value->id}}</td>
						<td>{{$value->name}}</td>
						<td>{{$value->summary}}</td>
						<td><img width="200px" src="upload/blog/{{$value->image}}" /></td>
						<td>{{$value->user->fullname}}</td>
						<td class="comment">{{$value->content}}</td>
						<td>{{$value->created_at}}</td>
						<td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/news/delete/{{$value->id}}"> Delete</a></td>
						<td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/news/edit/{{$value->id}}">Edit</a></td>
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