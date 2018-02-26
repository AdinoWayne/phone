@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">slide
					<small>List</small>
				</h1>
				@if(session('thongbao'))
				<div class="alert alert-success">{{session('thongbao')}}
				</div>
				@endif
			</div>
			<!-- /.col-lg-12 -->
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr align="center">
						<th>ID</th>
						<th>Name</th>
						<th>Hinh</th>
						<th>Link</th>
						<th>Delete</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
					<tr class="odd gradeX" align="center">
						<td>1</td>
						<td>Tin Tức</td>
						<td>None</td>
						<td>Hiện</td>
						<td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
						<td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
					</tr>
					<tr class="even gradeC" align="center">
						<td>2</td>
						<td>Bóng Đá</td>
						<td>Thể Thao</td>
						<td>Ẩn</td>
						<td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
						<td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection