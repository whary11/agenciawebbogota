<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Robots" content="index, follow">
    <title>Agencia Web Bogotá - Diseño de Páginas Web y Marketing Digital en Bogotá</title>
    <meta name="description" content="Agencia Web Bogotá creamos diseños, publicidad y contenidos optimizados con Neuromarketing. Líderes en Diseño de Páginas Web y Marketing Digital en Bogotá" />
    <meta name="keywords" content="agencia web bogota, diseño web bogota, diseño de paginas web Bogota, páginas web corporativas,  diseño de paginas web, diseño paginas web economicas, diseño web optimizado, neuromarketing">
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

</head>
	<body id="bg">
	<div class="page-wraper">
		<!-- header -->
		@include('partials.header')
		<!-- header END -->  
		<!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-primary no-webp-branding webp-branding">
                <div class="container">
                    <div class="dlab-bnr-inr-entry texto-ini">
                        <h1 class="text-white">Branding Corporativo</h1>
                        <h2 class="text-white">Diseño Gráfico e Imagen Corporativa</h2>
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
                                <div class="dlab-post-media dlab-img-effect "> <a href="#"><img src="images/blog/grid/pic1.jpg" alt=""></a> </div>
                                <div class="dlab-info p-a20 border-1">
                                    <div class="dlab-post-title ">
                                        <h4 class="post-title"><a href="#">Title of first blog post</a></h4>
                                    </div>
                                    <div class="dlab-post-meta">
                                <ul class="d-flex align-items-center">
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2016</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i>By <a href="#">Jone</a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">5k</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dlab-post-text">
                                       <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true.</p>
                                    </div>
                                   <div class="dlab-post-readmore blog-share"> 
										<a href="#" title="READ MORE" rel="bookmark" class="site-button outline outline-1">READ MORE
											<i class="fa fa-long-arrow-right"></i>
										</a>
										<div class="share-btn">
											<ul class="clearfix">
												<li><a href="#" class="site-button sharp"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#" class="site-button sharp"><i class="fa fa-google-plus"></i></a></li>
												<li><a href="#" class="site-button sharp"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#" class="site-button sharp"><i class="fa fa-twitter"></i></a></li>
												<li class="share-button"><a href="#" class="site-button sharp"><i class="fa fa-share-alt"></i></a></li>
											</ul>
										</div>
									</div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="post card-container col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-post blog-grid blog-rounded blog-effect1">
                                <div class="dlab-post-media dlab-img-effect "> <a href="#"><img src="images/blog/grid/pic2.jpg" alt=""></a> </div>
                                <div class="dlab-info p-a20 border-1">
                                    <div class="dlab-post-title ">
                                        <h4 class="post-title"><a href="#">Title of first blog post</a></h4>
                                    </div>
                                    <div class="dlab-post-meta">
                                <ul class="d-flex align-items-center">
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2016</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i>By <a href="#">Jone</a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">5k</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dlab-post-text">
                                       <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true.</p>
                                    </div>
                                   <div class="dlab-post-readmore blog-share"> 
										<a href="#" title="READ MORE" rel="bookmark" class="site-button outline outline-1">READ MORE
											<i class="fa fa-long-arrow-right"></i>
										</a>
										<div class="share-btn">
											<ul class="clearfix">
												<li><a href="#" class="site-button sharp"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#" class="site-button sharp"><i class="fa fa-google-plus"></i></a></li>
												<li><a href="#" class="site-button sharp"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#" class="site-button sharp"><i class="fa fa-twitter"></i></a></li>
												<li class="share-button"><a href="#" class="site-button sharp"><i class="fa fa-share-alt"></i></a></li>
											</ul>
										</div>
									</div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="post card-container col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-post blog-grid blog-rounded blog-effect1">
                                <div class="dlab-post-media dlab-img-effect "> <a href="#"><img src="images/blog/grid/pic3.jpg" alt=""></a> </div>
                                <div class="dlab-info p-a20 border-1">
                                    <div class="dlab-post-title ">
                                        <h4 class="post-title"><a href="#">Title of first blog post</a></h4>
                                    </div>
                                    <div class="dlab-post-meta">
                                <ul class="d-flex align-items-center">
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2016</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i>By <a href="#">Jone</a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">5k</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dlab-post-text">
                                       <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true.</p>
                                    </div>
                                   <div class="dlab-post-readmore blog-share"> 
										<a href="#" title="READ MORE" rel="bookmark" class="site-button outline outline-1">READ MORE
											<i class="fa fa-long-arrow-right"></i>
										</a>
										<div class="share-btn">
											<ul class="clearfix">
												<li><a href="#" class="site-button sharp"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#" class="site-button sharp"><i class="fa fa-google-plus"></i></a></li>
												<li><a href="#" class="site-button sharp"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#" class="site-button sharp"><i class="fa fa-twitter"></i></a></li>
												<li class="share-button"><a href="#" class="site-button sharp"><i class="fa fa-share-alt"></i></a></li>
											</ul>
										</div>
									</div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="post card-container col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-post blog-grid blog-rounded blog-effect1">
                                <div class="dlab-post-media dlab-img-effect "> <a href="#"><img src="images/blog/grid/pic4.jpg" alt=""></a> </div>
                                <div class="dlab-info p-a20 border-1">
                                    <div class="dlab-post-title ">
                                        <h4 class="post-title"><a href="#">Title of first blog post</a></h4>
                                    </div>
                                    <div class="dlab-post-meta">
                                <ul class="d-flex align-items-center">
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2016</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i>By <a href="#">Jone</a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">5k</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dlab-post-text">
                                       <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true.</p>
                                    </div>
                                   <div class="dlab-post-readmore blog-share"> 
										<a href="#" title="READ MORE" rel="bookmark" class="site-button outline outline-1">READ MORE
											<i class="fa fa-long-arrow-right"></i>
										</a>
										<div class="share-btn">
											<ul class="clearfix">
												<li><a href="#" class="site-button sharp"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#" class="site-button sharp"><i class="fa fa-google-plus"></i></a></li>
												<li><a href="#" class="site-button sharp"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#" class="site-button sharp"><i class="fa fa-twitter"></i></a></li>
												<li class="share-button"><a href="#" class="site-button sharp"><i class="fa fa-share-alt"></i></a></li>
											</ul>
										</div>
									</div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="post card-container col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-post blog-grid blog-rounded blog-effect1">
                                <div class="dlab-post-media dlab-img-effect "> <a href="#"><img src="images/blog/grid/pic1.jpg" alt=""></a> </div>
                                <div class="dlab-info p-a20 border-1">
                                    <div class="dlab-post-title ">
                                        <h4 class="post-title"><a href="#">Title of first blog post</a></h4>
                                    </div>
                                    <div class="dlab-post-meta">
                                <ul class="d-flex align-items-center">
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2016</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i>By <a href="#">Jone</a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">5k</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dlab-post-text">
                                       <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true.</p>
                                    </div>
                                   <div class="dlab-post-readmore blog-share"> 
										<a href="#" title="READ MORE" rel="bookmark" class="site-button outline outline-1">READ MORE
											<i class="fa fa-long-arrow-right"></i>
										</a>
										<div class="share-btn">
											<ul class="clearfix">
												<li><a href="#" class="site-button sharp"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#" class="site-button sharp"><i class="fa fa-google-plus"></i></a></li>
												<li><a href="#" class="site-button sharp"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#" class="site-button sharp"><i class="fa fa-twitter"></i></a></li>
												<li class="share-button"><a href="#" class="site-button sharp"><i class="fa fa-share-alt"></i></a></li>
											</ul>
										</div>
									</div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="post card-container col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-post blog-grid blog-rounded blog-effect1">
                                <div class="dlab-post-media dlab-img-effect "> <a href="#"><img src="images/blog/grid/pic2.jpg" alt=""></a> </div>
                                <div class="dlab-info p-a20 border-1">
                                    <div class="dlab-post-title ">
                                        <h4 class="post-title"><a href="#">Title of first blog post</a></h4>
                                    </div>
                                    <div class="dlab-post-meta">
                                <ul class="d-flex align-items-center">
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2016</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i>By <a href="#">Jone</a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">5k</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dlab-post-text">
                                       <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true.</p>
                                    </div>
                                   <div class="dlab-post-readmore blog-share"> 
										<a href="#" title="READ MORE" rel="bookmark" class="site-button outline outline-1">READ MORE
											<i class="fa fa-long-arrow-right"></i>
										</a>
										<div class="share-btn">
											<ul class="clearfix">
												<li><a href="#" class="site-button sharp"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#" class="site-button sharp"><i class="fa fa-google-plus"></i></a></li>
												<li><a href="#" class="site-button sharp"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#" class="site-button sharp"><i class="fa fa-twitter"></i></a></li>
												<li class="share-button"><a href="#" class="site-button sharp"><i class="fa fa-share-alt"></i></a></li>
											</ul>
										</div>
									</div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- blog grid END -->
                    <!-- Pagination -->
                    <div class="pagination-bx clearfix text-center">
						<ul class="pagination">
							<li class="previous"><a href="#"><i class="ti-arrow-left"></i> Prev</a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li class="next"><a href="#">Next <i class="ti-arrow-right"></i></a></li>
						</ul>
					</div>
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
