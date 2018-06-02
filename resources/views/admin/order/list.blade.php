@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Order
					<small>List</small>
				</h1>
				@if(session('Thongbao'))
				<div class="alert alert-success">{{session('Thongbao')}}
				</div>
				@endif
			</div>
			<div class="col-sm-2">
			</div>
			<div class="col-sm-8">
				<div class="input-group date" data-provide="datepicker">
					<label>DateFrom</label><input type="text" class="datepicker" id="fromdate" name="fromdate">
					<label>DateTo</label><input type="text" class="datepicker" id="todate" name="todate">
					<input type="button" name="filter" id="filter" value="filter" class="btn btn-default">
				</div>
			</div>
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr align="center">
						<th>ID</th>
						<th>Customer</th>
						<th>Payment</th>
						<th>Total</th>
						<th>Created_at</th>
						<th>updated_at</th>
						<th>Detail</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody id="search">
					@foreach($list as $value)
					<tr class="odd gradeX" align="center">
						<td>{{$value->id}}</td>
						<td>{{$value->user->fullname}}</td>
						<td>{{$value->payment}}</td>
						<td>{{$value->total}}</td>
						<td>{{$value->created_at}}</td>
						<td>{{$value->updated_at}}</td>
						<td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/order/detail/{{$value->id}}"> Detail</a></td>
						<td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/order/edit/{{$value->id}}">Edit</a></td>
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
@section('script')
<script type="text/javascript" language="javascript" src="admin_assets/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(function(){
			$('#fromdate').datepicker({ 
				format: 'yyyy-mm-dd'
			});
			$('#todate').datepicker({ 
				format: 'yyyy-mm-dd'
			});
		})
		$('#filter').click(function(){
			const fromdate =$('#fromdate').val();
			const todate =$('#todate').val();
			if(fromdate !='' && todate !='' && fromdate < todate){
				$.ajax({
					url:"admin/Ajax/searchtime",
					type:"get",
					data:{fromdate:fromdate,todate:todate},
					success:function(data){
						$('#search').html(data);
					}
				})
			}else{
				alert('Choose time again');
			}
		});
	});
</script>
@endsection