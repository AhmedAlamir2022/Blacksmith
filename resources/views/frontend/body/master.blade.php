<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.html">
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('frontend/img/favicon.png')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{URL::asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/slick.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/default.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/responsive.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/bootstrap-rtl.css')}}">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
</head>

<body style="font-family: 'Cairo';">
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- Add your site or application content here -->
    <!-- header-start -->
    @include('frontend.body.header')
    <!-- header-end -->

    @yield('main')

    <!-- footer start -->
    @include('frontend.body.footer')
    <!-- footer end -->


    <!-- JS here -->
    <script src="{{URL::asset('frontend/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{URL::asset('frontend/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{URL::asset('frontend/js/popper.min.js')}}"></script>
    <script src="{{URL::asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('frontend/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{URL::asset('frontend/js/one-page-nav-min.js')}}"></script>
    <script src="{{URL::asset('frontend/js/slick.min.js')}}"></script>
    <script src="{{URL::asset('frontend/js/ajax-form.js')}}"></script>
    <script src="{{URL::asset('frontend/js/wow.min.js')}}"></script>
    <script src="{{URL::asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{URL::asset('frontend/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{URL::asset('frontend/js/jquery.counterup.min.js')}}"></script>
    <script src="{{URL::asset('frontend/js/jquery.barfiller.js')}}"></script>
    <script src="{{URL::asset('frontend/js/jquery.meanmenu.min.js')}}"></script>
    <script src="{{URL::asset('frontend/js/waypoints.min.js')}}"></script>
    <script src="{{URL::asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{URL::asset('frontend/js/plugins.js')}}"></script>
    <script src="{{URL::asset('frontend/js/main.js')}}"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

	<script>
 		@if(Session::has('message'))
 		var type = "{{ Session::get('alert-type','info') }}"
 		switch(type){
    			case 'info':
    			toastr.info(" {{ Session::get('message') }} ");
    			break;

    			case 'success':
    			toastr.success(" {{ Session::get('message') }} ");
    			break;

    			case 'warning':
    			toastr.warning(" {{ Session::get('message') }} ");
    			break;

    			case 'error':
    			toastr.error(" {{ Session::get('message') }} ");
    			break; 
 			}
 		@endif 
	</script>
</body>


</html>
