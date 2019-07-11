<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
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
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	
	<!-- PAGE TITLE HERE -->
	<title> {{env('APP_NAME')}} - Ticket</title>
	
	<!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/templete.css">
	<link class="skin" rel="stylesheet" type="text/css" href="css/skin-1.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	
</head>
<body id="bg">
<div class="page-wraper">
	<div id="loading-area"><div class="la-anim-10"></div></div>
	<div class="icono-whatsapp" id="btn-whp"><a href="https://api.whatsapp.com/send?phone=573168785601"><i class="fab fa-whatsapp"></i></a></div>
	<div class="icono-messenger" id="btn-mes"><a href="https://m.me/agenciawebbogota"><i class="fab fa-facebook-messenger"></i></a></div>
	<div class="icono-phone" id="btn-pho"><a href="te:+573168785601"><i class="fas fa-phone-volume"></i></a></div>
	<div class="tooltip-whatsapp" id="tp-whp"><span>¡Estamos en línea!</span></div>
	<div class="tooltip-messenger" id="tp-mes"><span>Háblenos por Messenger</span></div>
	<div class="tooltip-phone" id="tp-pho"><span>Llámenos</span></div>
	
    <!-- header -->
    <!-- header -->
    <header class="site-header header-transparent mo-left">
		<div class="top-bar">
			<div class="container">
				<div class="row d-flex justify-content-between">
					<div class="dlab-topbar-left">
						<ul>
							<li><i class="fas fa-mobile-alt m-r5"></i> 316 8785601 - 304 3788629</li>
						</ul>
					</div>
					<div class="dlab-topbar-right">
						<ul>							
							<li><a href="mailto:info@agenciawebbogota.com"><i class="fas fa-at m-r5"></i> info@agenciawebbogota.com</a></li>
							<li><a href="pagos"><i class="fas fa-dollar-sign m-r5"></i> Hacer un Pago</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- main header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header">
						<a href="https://agenciawebbogota.com"><img src="images/logo-agencia-web-bogota.svg" alt="Logo Agencia Web Bogotá"></a>
					</div>
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <!-- extra nav -->
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <a href="contacto" class="dez-page site-button primary">Contáctenos</a>
                        </div>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="nav navbar-nav">	
							<li class="active"><a href="https://agenciawebbogota.com/"><i class="fas fa-home font-20"></i></a></li>
							<li><a>Desarrollo Web<i class="fas fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="paginas-web">Páginas Web </a><li>
									<li><a href="landing-pages">Landing Pages </a></li>
									<li><a href="tiendas-online">Tiendas Online </a></li>
									<li><a href="programacion-web">Programación Web</a></li>
									<li><a href="google-apps">Google Apps</a></li>				
								</ul>
							<li><a>Marketing Digital <i class="fas fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="redes-sociales">Redes Sociales </a><li>
									<li><a href="posicionamiento-web">Posicionamiento Web </a><li>
									<li><a href="marketing-automatizado">Community Manager </a></li>									
								</ul>
							</li>	
							<li><a href="blog">Blog </a></li>															
							<li><a href="soporte-tecnico">Soporte Técnico <i class="fas fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="redes-sociales">Canales de Ayuda </a><li>
									<li><a href="posicionamiento-web">Manuales de Usuario </a><li>
									<li><a href="marketing-automatizado">Abrir un Ticket </a></li>									
								</ul>
							</li>	
							</li>															
							</li>																												
						</ul>		
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
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
    <footer class="site-footer">
        <div class="footer-top bg-black-light">
            <div class="container wow fadeIn" data-wow-delay="0.5s">
                <div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6 footer-col-4">
                        <div class="widget widget_services border-0">
								<a href="index.html" class="dez-page"><img src="images/logo-agencia-web-bogota.svg" alt="" width="300"></a>                            <ul>
                                <li><a href="#">Sobre la Agencia </a></li>
                                <li><a href="#">Portafolio </a></li>
                                <li><a href="#">Proyectos </a></li>
                                <li><a href="#">Cursos </a></li>                                
                            </ul>
                        </div>
                    </div>					
					<div class="col-lg-4 col-md-6 col-sm-6 footer-col-4">
                        <div class="widget widget_getintuch">
                            <h5 class="m-b30 text-white text-uppercase">Contáctenos</h5>
                            <ul>
								<li class="text-none"><i class="ti-mobile"></i><strong>Celular</strong>316 8785601 - 320 8673901</li>
								<li class="text-none"><i class="ti-email"></i><strong>email</strong>info@agenciawebbogota.com</li>
								<li class="text-none"><i class="ti-location-pin"></i><strong>Bogotá, Colombia</strong> Calle 7 A Bis C #78-56 </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 footer-col-4 ">
                        <div class="widget">
                            <h5 class="m-b30 text-white text-uppercase">Reciba nuestros Newsletter</h5>
							<p class="m-b20 text-none">Compartiremos algunos consejos y herramientas útiles que le ayudarán a llegar de forma más efectiva a sus clientes</p>
                            <div class="subscribe-form m-b20">
								<form class="dzSubscribe" action="script/mailchamp.php" method="post">
									<div class="dzSubscribeMsg"></div>
									<div class="input-group">
										<input name="dzEmail" required="required"  class="form-control" placeholder="Correo electrónico" type="email">
										<span class="input-group-btn">
											<button name="submit" value="Submit" type="submit" class="site-button">Registrarme</button>
										</span> 
									</div>
								</form>
							</div>
							<ul class="list-inline m-a0">
								<li><a href="#" class="site-button facebook circle "><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="site-button google-plus circle "><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" class="site-button linkedin circle "><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" class="site-button instagram circle "><i class="fa fa-instagram"></i></a></li>
								<li><a href="#" class="site-button twitter circle "><i class="fa fa-twitter"></i></a></li>
							</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 text-left text-none"> <span>Agencia Web Bogotá. Todos los derechos reservados © 2019</span> </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 text-right text-none"> 
						<div class="widget-link "> 
							<ul>								
								<li><a href="privacy-policy"> Políticas de Privacidad</a></li> 
							</ul>
						</div>
					</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END-->
    <button class="scroltop fa fa-chevron-up" ></button>
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="{{asset('js/page.js')}}"></script>
<script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="plugins/wow/wow.js"></script><!-- WOW JS -->
<script src="plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
<script src="plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
<script src="plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
<script src="plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
<script src="plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
<script src="plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
<script src="plugins/rangeslider/rangeslider.js" ></script><!-- Rangeslider -->
<script src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="js/dz.carousel.js"></script><!-- SORTCODE FUCTIONS  -->
<script src="plugins/loading/anime.js"></script><!-- LOADING JS -->
<script src="plugins/loading/anime-app3.js"></script><!-- LOADING JS -->
<script src='https://www.google.com/recaptcha/api.js'></script> <!-- Google API For Recaptcha  -->
<script src="js/dz.ajax.js"></script><!-- CONTACT JS  -->

</body>
</html>
