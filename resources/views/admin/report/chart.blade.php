@extends('admin.layout.index')
@section('content')
{{-- {!! Charts::assets() !!} --}}
{!! Charts::styles() !!}
<div class="page-wrapper" style="float: right;">
	<div class="container-fluid">
		<div class="panel-body" style="padding-right: 4px;">
			{{-- 			{!! $chart->render() !!} --}}
			{!! $chart->html() !!}
		</div>
	</div>
</div>
{!! Charts::scripts() !!}
{!! $chart->script() !!}
@endsection