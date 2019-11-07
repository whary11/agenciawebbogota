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
    <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.png')}}" />

    <!-- PAGE TITLE HERE -->
    <title>Confirmación de Pagos</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
        <!-- header -->
        @include('partials.header')
        <!-- header END -->
        <!-- Content -->
        <div class="page-content bg-white">
            <!-- inner page banner -->
            <div class="dlab-bnr-inr p-t30 p-b30 no-webp-pagos webp-pagos">
                <div class="container">
                    <div class="dlab-bnr-inr-entry texto-ini">
                        <h1 class="text-white">Confirmación de Pagos</h1>
                        <h2 class="text-white">Gracias por confiar en Agencia Web Bogotá</h2>
                    </div>
                </div>
            </div>
            <!-- inner page banner END -->           

            <div class="content-block">
                <!-- About Us -->
                <div class="section-full content-inner exp-services" style="background-image:url({{asset('images/background/bg1.png')}});">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-head text-black text-center">
                                    <p class="font-weight-600 font-18">Si su pago ha sido exitoso recibirá la respectiva confirmación a su correo electrónico<br>Recuerde enviar el soporte de pago por correo electrónico o a través de WhatsApp</p>
                                    <div class="text-center max-w800 m-auto p-t40">
                                    <a href="mailto:info@agenciawebbogota.com"><i class="fas fa-envelope-open-text text-blue"></i> info@agenciawebbogota.com</a><br>
                                    <a href="https://api.whatsapp.com/send?phone=573168785601"><i class="fab fa-whatsapp text-blue"></i> 316 878 56 01</a>
                                        
                                    </div>
                                </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Our Services -->              
            </div>
            <!-- contact area END -->
        </div>
        <!-- Content END-->
        <!-- Footer -->
        @include('partials.footer')
        <!-- Footer END-->
    </div>
    <!-- JAVASCRIPT FILES ========================================= -->
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
    <script src="{{asset('plugins/rangeslider/rangeslider.js')}}"></script><!-- Rangeslider -->
    <script src="{{asset('js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->
    <script src="{{asset('js/dz.carousel.js')}}"></script><!-- SORTCODE FUCTIONS  -->
    <script src="{{asset('plugins/loading/anime.js')}}"></script><!-- LOADING JS -->
    <script src="{{asset('plugins/loading/anime-app3.js')}}"></script><!-- LOADING JS -->
    <script src='https://www.google.com/recaptcha/api.js'></script> <!-- Google API For Recaptcha  -->
    <script src="{{asset('js/dz.ajax.js')}}"></script><!-- CONTACT JS  -->

</body>

</html>