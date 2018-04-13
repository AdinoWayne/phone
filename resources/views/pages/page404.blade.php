@extends('layout.index')
@section('title','Not found')
@section('content')
<!--Start 404 area -->
<div class="404-hastech-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="hastech-404-area-list">
					<div class="hastech-404-content">
						<h2>
							4
							<i class="fa fa-life-ring"></i>
							4!
						</h2>
					</div>
					<div class="error-heading">
						<h2>This page is not available</h2>
						<h3>We're sorry, but the Web address you've entered is no longer available. </h3>
					</div>
					<div class="error-form">
						<p>To find a product, please type its name in the field below.</p>
						<form action="#" method="post" id="errorForm" class="error-ser-form">
							<div class="error-form-group form-group">
								<span>Search our product catalog :</span>
								<input type="text" class="form-control input-feild" id="errorform" name="errorform" value="">
								<input type="submit" class="error-search" value="Search" name="errorsearch">
							</div>													
						</form>
					</div>
					<div class="error-back-home">
						<a class="add-tag-btn" href="index.html"><i class="fa fa-chevron-left"></i> Home Page</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End 404 area -->
@endsection