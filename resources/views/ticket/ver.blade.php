<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximun-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Agency - Business And Agency Template" />
	<meta property="og:title" content="Landing Pages Agencia Web Bogotá" />
	<meta property="og:description" content="Agency : Business And Agency Template" />
	<meta property="og:image" content="dhakdhakindia.com/product/agency/" />
	<meta name="format-detection" content="telephone=no">
	<!-- FAVICONS ICON -->
	<link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.png')}}" />
	<!-- PAGE TITLE HERE -->
	<title> {{env('APP_NAME')}} - Ticket</title>
	<!-- MOBILE SPECIFIC -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/plugins.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/templete.css')}}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{asset('css/skin-1.css')}}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	
</head>
<body id="bg">
<div class="page-wraper">
	<!-- header -->
	@include('partials.header')
    <!-- header END -->
    <!-- Content -->
    <div class="page-content bg-white" id="page" style="padding-top:200px;">
        <div class="container">
            <div class="row justify-content-center">
                <crear-ticket></crear-ticket>
            </div>
        </div>
    </div>
    <!-- Content END-->
	<!-- Footer -->
    @include('partials.footer')
    <!-- Footer END-->
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="{{asset('js/page.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script><!-- JQUERY.MIN JS -->
<script src="{{asset('plugins/wow/wow.js')}}"></script><!-- WOW JS -->
<script src="{{asset('plugins/bootstrap/js/popper.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{asset('plugins/bootstrap-select/bootstrap-select.min.js')}}"></script><!-- FORM JS -->
<script src="{{asset('plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script><!-- FORM JS -->
<script src="{{asset('plugins/magnific-popup/magnific-popup.js')}}"></script><!-- MAGNIFIC POPUP JS -->
<script src="{{asset('plugins/counter/waypoints-min.js')}}"></script><!-- WAYPOINTS JS -->
<script src="{{asset('plugins/counter/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
<script src="{{asset('plugins/imagesloaded/imagesloaded.js')}}"></script><!-- IMAGESLOADED -->
<script src="{{asset('plugins/masonry/masonry-3.1.4.js')}}"></script><!-- MASONRY -->
<script src="{{asset('plugins/masonry/masonry.filter.js')}}"></script><!-- MASONRY -->
<script src="{{asset('plugins/owl-carousel/owl.carousel.js')}}"></script><!-- OWL SLIDER -->
<script src="{{asset('plugins/rangeslider/rangeslider.js')}}" ></script><!-- Rangeslider -->
<script src="{{asset('js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{asset('js/dz.carousel.js')}}"></script><!-- SORTCODE FUCTIONS  -->
<script src="{{asset('plugins/loading/anime.js')}}"></script><!-- LOADING JS -->
<script src="{{asset('plugins/loading/anime-app3.js')}}"></script><!-- LOADING JS -->
<script src='https://www.google.com/recaptcha/api.js'></script> <!-- Google API For Recaptcha  -->
<script src="{{asset('js/dz.ajax.js')}}"></script><!-- CONTACT JS  -->
</body>
</html>
