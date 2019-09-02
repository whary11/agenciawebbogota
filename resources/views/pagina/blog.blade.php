<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Robots" content="index, follow">
    <title>Blog Agencia Web Bogotá - Noticias, Tendencias, Oportunidades</title>
    <meta name="description" content="Espacio para compartir noticias, contenido, tendencias en diseño web y desarrollo de aplicaciones. Oportunidades en marketing digital y posicionamiento seo" />
    <meta name="author" content="Agencia Web Bogotá">
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.png')}}" />
    <link rel="apple-touch-icon" href="images/apple-icon-touch.png">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/plugins.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/templete.css')}}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{asset('css/skin-1.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        @include('partials.analytics')
</head>
	<body id="bg">
	<div class="page-wraper">
		<!-- header -->
		@include('partials.header')
		<!-- header END -->  
		<!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-primary no-webp-blog webp-blog">
                <div class="container">
                    <div class="dlab-bnr-inr-entry texto-ini">
                        <h1 class="text-white">Blog</h1>
                        <h2 class="text-white">Noticias, Tendencias, Oportunidades</h2>
                    </div>
                </div>
        </div>
        <!-- inner page banner END -->        
        <div class="content-area">
            <div class="container">
                    <!-- blog grid -->
                    <div class="dlab-blog-grid-3 row" id="masonry" >
                        <div class="post card-container col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-post blog-grid blog-rounded blog-effect1">
                                <div class="dlab-post-media dlab-img-effect "> <a href="{{url('blog/alarmante-aumento-en-los-costos-de-alojamiento-de-paginas-web')}}">
                                <picture>
                                    <source srcset="{{asset('images/blog/aumento-en-precios-de-hosting.webp')}}" type="image/webp">
                                    <img src="{{asset('images/blog/aumento-en-precios-de-hosting.jpg')}}" alt="Hombre desesperado">
                                </picture> </a> </div>
                                <div class="dlab-info p-a20 border-1">
                                    <div class="dlab-post-title ">
                                        <h4 class="post-title"><a href="{{url('blog/alarmante-aumento-en-los-costos-de-alojamiento-de-paginas-web')}}">Alarmante aumento en los costos de alojamiento de paginas web</a></h4>
                                    </div>                                    
                                    <div class="dlab-post-text">
                                       <p>Las nuevas políticas de licencia de cPanel podrían causar que los costos de alojamiento de páginas web suban hasta en un 2000% ¿Qué alternativas existen?</p>
                                    </div>
                                   <div class="dlab-post-readmore blog-share"> 
										<a href="{{url('blog/alarmante-aumento-en-los-costos-de-alojamiento-de-paginas-web')}}" title="READ MORE" rel="bookmark" class="site-button outline outline-1">IR AL ARTÍCULO
                                        <i class="fas fa-arrow-right"></i>
										</a>
										<div class="share-btn">
											<ul class="clearfix">
                                            <li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//agenciawebbogota.com/blog/alarmante-aumento-en-los-costos-de-alojamiento-de-paginas-web" title="Facebook" target="_blank" class="site-button sharp"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="https://www.linkedin.com/shareArticle?mini=true&url=http%3A//agenciawebbogota.com/blog/alarmante-aumento-en-los-costos-de-alojamiento-de-paginas-web&title=Alarmante%20aumento%20en%20los%20costos%20de%20alojamiento%20de%20paginas%20web&summary=&source=" title="Linkedin" target="_blank" class="site-button sharp"><i class="fab fa-linkedin-in"></i></a></li>
												<li><a href="https://twitter.com/intent/tweet?text=http%3A//agenciawebbogota.com/blog/alarmante-aumento-en-los-costos-de-alojamiento-de-paginas-web" title="Twitter" target="_blank" class="site-button sharp"><i class="fab fa-twitter"></i></a></li>
												<li class="share-button"><a class="site-button sharp"><i class="fa fa-share-alt"></i></a></li>
											</ul>
										</div>
									</div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="post card-container col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-post blog-grid blog-rounded blog-effect1">
                                <div class="dlab-post-media dlab-img-effect "> <a href="{{url('blog/nuevas-funciones-para mejorar-el-rendimiento-de-su-sitio-web')}}">
                                <picture>
                                    <source srcset="{{asset('images/blog/funciones-sitio-web.webp')}}" type="image/webp">
                                    <img src="{{asset('images/blog/funciones-sitio-web.jpg')}}" alt="Hombre de negocios usando dispositivos de tecnología e íconos de interfaz">
                                </picture> </a> </div>
                                <div class="dlab-info p-a20 border-1">
                                    <div class="dlab-post-title ">
                                        <h4 class="post-title"><a href="{{url('blog/nuevas-funciones-para mejorar-el-rendimiento-de-su-sitio-web')}}">Nuevas funciones para mejorar el rendimiento de su sitio web</a></h4>
                                    </div>                                    
                                    <div class="dlab-post-text">
                                       <p>Conozca las nuevas herramientas y funcionalidades que podemos  integrar en su sitio web para potenciar aún más su presencia en Internet.</p>
                                    </div>
                                   <div class="dlab-post-readmore blog-share"> 
										<a href="{{url('blog/nuevas-funciones-para mejorar-el-rendimiento-de-su-sitio-web')}}" title="READ MORE" rel="bookmark" class="site-button outline outline-1">IR AL ARTÍCULO
                                        <i class="fas fa-arrow-right"></i>
										</a>
										<div class="share-btn">
											<ul class="clearfix">
                                            <li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//agenciawebbogota.com/blog/nuevas-funciones-para mejorar-el-rendimiento-de-su-sitio-web" title="Facebook" target="_blank" class="site-button sharp"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="https://www.linkedin.com/shareArticle?mini=true&url=http%3A//agenciawebbogota.com/blog/nuevas-funciones-para mejorar-el-rendimiento-de-su-sitio-web&title=nuevas%20funciones%20para%20mejorar%20el%20rendimiento%20de%20su%20sitio%20web&summary=&source=" title="Linkedin" target="_blank" class="site-button sharp"><i class="fab fa-linkedin-in"></i></a></li>
												<li><a href="https://twitter.com/intent/tweet?text=http%3A//agenciawebbogota.com/blog/nuevas-funciones-para mejorar-el-rendimiento-de-su-sitio-web" title="Twitter" target="_blank" class="site-button sharp"><i class="fab fa-twitter"></i></a></li>
												<li class="share-button"><a class="site-button sharp"><i class="fa fa-share-alt"></i></a></li>
											</ul>
										</div>
									</div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- blog grid END -->
                    <!-- Pagination -->
                    <!-- <div class="pagination-bx clearfix text-center">
						<ul class="pagination">
							<li class="previous"><a href="{{url('blog')}}"><i class="ti-arrow-left"></i> Ant.</a></li>
							<li class="active"><a href="{{url('blog')}}">1</a></li>
							<li><a href="{{url('blog')}}">2</a></li>
							<li><a href="{{url('blog')}}">3</a></li>
							<li class="next"><a href="{{url('blog')}}">Sig. <i class="ti-arrow-right"></i></a></li>
						</ul>
					</div> -->
					<!-- Pagination END -->
            </div>
        </div>
    </div>
		<!-- contact area END -->
    </div>
    <!-- Content END-->
	<!-- Footer -->
 	@include('partials.footer')
    <!-- Footer END-->    
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src=" {{asset('js/jquery.min.js')}}"></script><!-- JQUERY.MIN JS -->
<script src=" {{asset('plugins/wow/wow.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script src=" {{asset('plugins/bootstrap/js/popper.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script src=" {{asset('plugins/bootstrap/js/bootstrap.min.js')}} "></script><!-- BOOTSTRAP.MIN JS -->
<script src=" {{asset('plugins/bootstrap-select/bootstrap-select.min.js')}}"></script><!-- FORM JS -->
<script src=" {{asset('plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script><!-- FORM JS -->
<script src=" {{asset('plugins/magnific-popup/magnific-popup.js')}}"></script><!-- MAGNIFIC-POPUP JS -->
<script src=" {{asset('plugins/counter/waypoints-min.js')}}"></script><!-- WAYPOINTS JS -->
<script src=" {{asset('plugins/counter/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
<script src=" {{asset('plugins/imagesloaded/imagesloaded.js')}}"></script><!-- MASONRY  -->
<script src=" {{asset('plugins/masonry/masonry-3.1.4.js')}}"></script><!-- MASONRY  -->
<script src=" {{asset('plugins/masonry/masonry.filter.js')}}"></script><!-- MASONRY  -->
<script src=" {{asset('plugins/owl-carousel/owl.carousel.js')}}"></script><!-- OWL  SLIDER  -->
<script src=" {{asset('plugins/rangeslider/rangeslider.js')}}"></script><!-- Rangeslider -->
<script src=" {{asset('js/dz.carousel.js')}}"></script><!-- SORTCODE FUCTIONS  -->
<script src=" {{asset('plugins/loading/anime.js')}}"></script><!-- LOADING JS -->
<script src=" {{asset('plugins/loading/anime-app.js')}}"></script><!-- LOADING JS -->
<script src=" {{asset('js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->
<script src="js/dz.carousel.js"></script><!-- SORTCODE FUCTIONS  -->
<script src="plugins/loading/anime.js"></script><!-- LOADING JS -->
<script src="plugins/loading/anime-app3.js"></script><!-- LOADING JS -->
<script src="js/dz.ajax.js"></script><!-- CONTACT JS  -->
</body>
</html>
