<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Agency - Business And Agency Template" />
	<meta property="og:title" content="Agency : Business And Agency Template" />
	<meta property="og:description" content="Agency : Business And Agency Template" />
	<meta property="og:image" content="dhakdhakindia.com/product/agency/" />
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximun-scale=1.0, user-scalable=no">
	<!-- FAVICONS ICON -->
	<link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.png')}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
	<!-- PAGE TITLE HERE -->
	<title>Contacte con Agencia Web Bogotá</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="{{asset('css/plugins.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/templete.css')}}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{asset('css/skin-1.css')}}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	
</head>
    <!-- header -->
    @include('partials.header')
    <!-- header END -->
    <!-- Content -->
    <div class="full-section">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-primary-dark contact-page" style="background-image:url({{asset('images/background/bg2.jpg')}});">
            <div class="container">
                <div class="row">
					<div class="col-lg-4 col-xs-4">
						<div class="row text-white">
							<div class="col-lg-12 col-md-6 m-b30 wow fadeIn" data-wow-delay="0.4s">
								<div class="icon-bx-wraper bx-style-1 p-a20 radius-sm">
									<div class="icon-content">
										<h5 class="dlab-tilte">
											<span class="icon-sm text-primary text-left"><i class="ti-location-pin"></i></span> 
											Nuestras oficinas
										</h5>
										<p>Carrera 57 No. 14 - 70 Piso 2 Puente Aranda, Bogotá - Colombia</p>
										<h6 class="m-b15 font-weight-400"><i class="ti-alarm-clock"></i> Horarios de Atención</h6>
										<p class="m-b0">Lunes a Viernes 8:00 AM - 5:00 PM</p>
										<p class="m-b0">Sábado 9:00 AM - 2:00 PM </p>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-6 m-b30 wow fadeIn" data-wow-delay="0.6s">
								<div class="icon-bx-wraper bx-style-1 p-a20 radius-sm">
									<div class="icon-content">
										<h5 class="dlab-tilte">
											<span class="icon-sm text-primary text-left"><i class="ti-email"></i></span> 
											Correo Electrónico
										</h5>
										<p class="m-b0">info@agenciawebbogota.com</p>
										<p class="m-b0">proyectos@agenciawebbogota.com</p>
										<p class="m-b0">soporte@agenciawebbogota.com</p>
										<p>agenciawebbogota@gmail.com</p>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-6 m-b30 wow fadeIn" data-wow-delay="0.8s">
								<div class="icon-bx-wraper bx-style-1 p-a20 radius-sm">
									<div class="icon-content">
										<h5 class="dlab-tilte">
											<span class="icon-sm text-primary text-left"><i class="ti-mobile"></i></span> 
											Números de Contaco
										</h5>
										<p>316 8785601 - 304 3788629</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-8 col-xs-8" id="page">
						<formulario-contacto></formulario-contacto>
						
					</div>
				</div>
            </div>
		</div>
		<!-- inner page banner END -->
    </div>
    <!-- Content END-->
    </footer>

    @include('partials.footer')
    <!-- Footer END-->

    <!-- Footer END-->
    <!-- scroll top button -->
    <button class="scroltop fa fa-chevron-up" ></button>
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
{{-- <script src='https://www.google.com/recaptcha/api.js'></script> <!-- Google API For Recaptcha  --> --}}
{{-- <script src="js/dz.ajax.js"></script><!-- CONTACT JS  --> --}}

</body>
</html>
