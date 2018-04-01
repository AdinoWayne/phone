<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from devitems.com/tf/hope-preview/hope/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Aug 2016 05:15:10 GMT -->
<head>
		<!-- Basic page needs
        ============================================ --> 
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>AdinoPhone | @yield('title')</title>
        <meta name="description" content="">
        <base href="{{asset('')}}">
		<!-- Mobile specific metas --> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- FONTS -->
		<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,600italic,300italic,700' rel='stylesheet' type='text/css'>
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="pages_assets/img/favicon.ico">
		<!-- font awesome -->
        <link rel="stylesheet" href="pages_assets/css/font-awesome.min.css">
		<!-- carousel CSS -->
		<link rel="stylesheet" href="pages_assets/css/owl.carousel.css">
		<!-- carousel Theme CSS -->
		<link rel="stylesheet" href="pages_assets/css/owl.my_theme.css">
		<!-- carousel transitions CSS -->
		<link rel="stylesheet" href="pages_assets/css/owl.transitions.css">
		<!-- nivo slider slider css -->
        <link rel="stylesheet" href="pages_assets/css/nivo-slider.css">
		<!-- animate css -->
        <link rel="stylesheet" href="pages_assets/css/animate.css">
		<!-- Price jquery-ui  -->
        <link rel="stylesheet" href="pages_assets/css/jquery-ui.css">
		<!-- fancy-box theme -->
        <link rel="stylesheet" href="pages_assets/fancy-box/jquery.fancybox.css">
		<!-- normalizer -->
        <link rel="stylesheet" href="pages_assets/css/normalize.css">
		<!-- bootstrap -->
        <link rel="stylesheet" href="pages_assets/css/bootstrap.min.css">
		<!-- Mobile menu css -->
        <link rel="stylesheet" href="pages_assets/css/meanmenu.min.css">
		<!-- main -->
        <link rel="stylesheet" href="pages_assets/css/main.css">
		<!-- style -->
        <link rel="stylesheet" href="pages_assets/style.css">
		<!-- Responsive css -->
        <link rel="stylesheet" href="pages_assets/css/responsive.css">
		<!-- modernizr JS -->
        <script src="pages_assets/js/vendor/modernizr-2.8.3.min.js"></script>
        @yield('css')
    </head>
    <body>
    	<!--Start Header Top area -->
		@include('layout.header')
		<!--End Main Menu area -->
		<!-- slider-area start -->
		@yield('content')
		<!--End Contact info area -->
		<!--Start Branding area -->
		@include('layout.footer')
		<!--End Footer area -->
		<!-- jquery JS -->
        <script src="pages_assets/js/vendor/jquery-1.11.3.min.js"></script>
		<!-- bootstrap JS -->
        <script src="pages_assets/js/bootstrap.min.js"></script>
		<!-- Mobile menu JS -->
        <script src="pages_assets/js/jquery.meanmenu.js"></script>
		<!-- jquery.easing js -->
        <script src="pages_assets/js/jquery.easing.1.3.min.js"></script>
		<!-- knob circle js -->
        <script src="pages_assets/js/jquery.knob.js"></script>
		<!-- fancybox JS -->
        <script src="pages_assets/fancy-box/jquery.fancybox.pack.js"></script>
		<!-- price slider JS  -->
        <script src="pages_assets/js/price-slider.js"></script>
		<!-- nivo slider JS -->
        <script src="pages_assets/js/jquery.nivo.slider.pack.js"></script>
		<!-- wow JS -->
        <script src="pages_assets/js/wow.js"></script>
		<!-- nivo-plugin JS -->
		<script src="pages_assets/js/nivo-plugin.js"></script>
		<!-- scrollUp JS -->
		<script src="pages_assets/js/jquery.scrollUp.js"></script>
		<!-- carousel JS -->
        <script src="pages_assets/js/owl.carousel.min.js"></script>
		<!-- plugins JS -->
        <script src="pages_assets/js/plugins.js"></script>
		<!-- main JS  -->
        <script src="pages_assets/js/main.js"></script>
        @yield('script')
    </body>

<!-- Mirrored from devitems.com/tf/hope-preview/hope/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Aug 2016 05:15:15 GMT -->
</html>