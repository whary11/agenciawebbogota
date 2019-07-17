<!DOCTYPE html>
<html lang="en">
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
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
	
	<!-- PAGE TITLE HERE -->
	<title>Contacte con Agencia Web Bogotá</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/templete.css">
	<link class="skin" rel="stylesheet" type="text/css" href="css/skin-1.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	
</head>
    <!-- header -->
    @include('partials.header')
    <!-- header END -->
    <!-- Content -->
    <div class="full-section">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-primary-dark contact-page" style="background-image:url(images/background/bg2.jpg);">
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
    <!-- Footer -->
	<!-- Footer -->
    {{-- <footer class="site-footer">
        <div class="footer-top bg-black-light">
            <div class="container wow fadeIn" data-wow-delay="0.5s">
                <div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6 footer-col-4">
                        <div class="widget widget_services border-0">
							<ul>
								<a href="https://agenciawebbogota.com" class="dez-page"><img src="images/logo-agencia-web-bogota.svg" alt="Logo Agencia Web Bogotá" width="300"></a>                            <ul>
                                <li><a href="sobre-la-agencia">Sobre la Agencia </a></li>
                                <li><a href="portafolio">Portafolio </a></li>
                                <li><a href="proyectos">Proyectos </a></li>
                                <li><a href="cursos">Cursos </a></li>                                
                            </ul>
                        </div>
                    </div>					
					<div class="col-lg-4 col-md-6 col-sm-6 footer-col-4">
                        <div class="widget widget_getintuch">
                            <h5 class="m-b30 text-white text-uppercase">Contáctenos</h5>
                            <ul>
								<li class="text-none"><i class="fas fa-mobile-alt"></i><strong>Celular</strong>316 8785601 - 304 3788629</li>
								<li class="text-none"><i class="fas fa-mail-bulk"></i><strong>Emails</strong>info@agenciawebbogota.com<br>proyectos@agenciawebbogota.com<br>agenciawebbogota@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 footer-col-4 ">
                        <div class="widget">
                            <h5 class="m-b30 text-white text-uppercase">Enviar un pago</h5>
							<p class="m-b20 text-none">Ingrese aquí para enviar un pago a Agencia Web Bogotá usando los medios de pago disponibles en nuestra plataforma.</p>
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
								<li><a href="https://www.facebook.com/agenciawebbogota" target="_blank" class="site-button facebook circle "><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="https://plus.google.com/113079972107918983296" target="_blank" class="site-button google-plus circle "><i class="fab fa-google-plus-g"></i></a></li>
								<li><a href="https://www.instagram.com/agenciawebbogota/" target="_blank" class="site-button instagram circle "><i class="fab fa-instagram"></i></a></li>
								<li><a href="https://twitter.com/AgenciaBogota" target="_blank" class="site-button twitter circle "><i class="fab fa-twitter"></i></a></li>
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
								<li><a href="politicas-de-privacidad"> Políticas de Privacidad</a></li> 
							</ul>
						</div>
					</div>
                </div>
            </div>
        </div>
    </footer> --}}

    @include('partials.footer')
    <!-- Footer END-->

    <!-- Footer END-->
    <!-- scroll top button -->
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
{{-- <script src='https://www.google.com/recaptcha/api.js'></script> <!-- Google API For Recaptcha  --> --}}
{{-- <script src="js/dz.ajax.js"></script><!-- CONTACT JS  --> --}}

</body>
</html>
