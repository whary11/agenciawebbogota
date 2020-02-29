<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximun-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="Robots" content="index, follow">
    <title>Agencia Web Bogotá - Desarrollo Web y Marketing Digital</title>
    <meta name="description" content="Agencia Web Bogotá profesionales en diseño web, programación, diseño gráfico y marketing digital. Tenemos la mejor oferta costo/beneficio del mercado." />
    <meta name="keywords" content="agencia web bogota, diseño web bogota, diseño de paginas web Bogota, páginas web corporativas,  diseño de paginas web, diseño paginas web economicas, diseño web optimizado, neuromarketing">
    <meta name="author" content="Agencia Web Bogotá">
    <meta name="email" content="agenciawebbogota@gmail.com">
    <meta name="Rating" content="General">
    <meta name="msvalidate.01" content="607F58A810BE9AAB1051493A749C22E4" />
    <meta name="Distribution" content="Local">
    <meta property="og:type" content="website" />
    <meta property="og:site_name " content="Agencia Web Bogotá" />
    <meta property="og:title" content="Diseño de Páginas Web y Marketing Digital en Bogotá" />
    <meta property="og:url" content="https://agenciawebbogota.com" />
    <meta property="og:image" content="https://agenciawebbogota.com/images/principal-3.jpg" />
    <meta property="og:description" content="Agencia Web Bogotá profesionales en diseño web, programación, diseño gráfico y marketing digital. Tenemos la mejor oferta costo/beneficio del mercado." />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@AgenciaBogota">
    <meta name="twitter:creator" content="@AgenciaBogota">
    <meta name="twitter:image" content="https://agenciawebbogota.com/images/principal-3.jpg">
    <meta name="twitter:image:alt" content="Agencia Web Bogotá | Diseño Web Optimizado con Neuromarketing">
    <meta name="twitter:title" content="Diseño Web + Neuromarketing">
    <meta name="twitter:description" content="Agencia Web Bogotá profesionales en diseño web, programación, diseño gráfico y marketing digital. Tenemos la mejor oferta costo/beneficio del mercado.">
    <link rel="canonical" href="https://agenciawebbogota.com" />
    <link rel="alternate" hreflang="en_EN" href="https://en.agenciawebbogota.com/" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href=" {{asset('images/favicon.png')}}" />
    <link rel="apple-touch-icon" href="{{asset('images/apple-icon-touch.png')}}">
    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/plugins.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/templete.css')}}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{asset('css/skin-1.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
        .list-angle-right li:before {
            content: "" !important;
        }
    </style>
    @include('partials.analytics')
</head>

<body id="bg">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W7763V6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="page-wraper">
        @include('partials.header')
    <div class="icono-whatsapp" id="btn-whp"><a href="{{url('https://api.whatsapp.com/send?phone=573168785601')}}"><i class="fab fa-whatsapp"></i></a></div>
    <div class="icono-messenger" id="btn-mes"><a href="https://m.me/agenciawebbogota"><i class="fab fa-facebook-messenger"></i></a></div>
    <div class="icono-phone" id="btn-pho"><a href="tel:+573168785601"><i class="fas fa-phone-volume"></i></a></div>
    <div class="tooltip-whatsapp" id="tp-whp"><span>¡Estamos en línea!</span></div>
    <div class="tooltip-messenger" id="tp-mes"><span>Háblenos por Messenger</span></div>
    <div class="tooltip-phone" id="tp-pho"><span>Llámenos</span></div>
    
        <!-- Content -->
        <div class="page-content bg-white">
            <!-- Slider Banner -->
            <div class="owl-slider-banner">
                <div class="owl-slider owl-carousel owl-theme owl-none contprin">
                    <div class="item slide-item">
                        <div class="slide-item-img">
                            <picture>
                                <source srcset="{{asset('images/background/bg20.webp')}}" type="image/webp">
                                <img src="{{asset('images/background/bg20.jpg')}}" alt="Mujer joven sonriente y relajada frente a computadora">
                            </picture>
                        </div>
                        <div class="slide-content overlay-primary">
                            <div class="slide-content-box container title-princ">
                                <div class="max-w600 text-white">                                    
                                    <h2 class="text-white font-weight-600 bs"><span class="text-yellow-light">¡LO NUEVO!</span> Sitios Web en Alquiler</h2>
                                    <h4>Sitios Web y Tiendas Online Administrados y Posicionados con pago mensual sin contratos ni anticipos.</h4>
                                    <p>Nosotros nos encargamos de todo, desde el desarrollo hasta la administración y el mantenimiento. Usted solo relájese y disfrute de los resultados.</p>
                                    <a href="{{url('sitios-web-y-tiendas-online-en-alquiler')}}" class="site-button m-r10 primary button-lg btn1">Más Información</a>    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item slide-item">
                        <div class="slide-item-img">
                            <picture>
                            <source srcset="{{asset('images/principal.webp')}}" type="image/webp">
                                <img src="{{asset('images/principal.jpg')}}" alt="Diseñador en escritorio con elementos"></picture>
                        </div>
                        <div class="slide-content overlay-primary ">
                            <div class="slide-content-box container title-princ">
                                <div class="max-w600 text-white">
                                <h1 class="text-white font-weight-600 bs"><span class="text-yellow-light">Diseño Web y Marketing Digital </span></h1>
                                    <h4>No buscamos competir en el mercado, buscamos innovar con productos y servicios de alta calidad.</h4>
                                    <p>Con la mejor oferta costo/beneficio, respaldada por amplios
                                        conocimientos en lenguajes de programación, gestores de contenido, diseño gráfico y posicionamiento SEO.</p>
                                    <a href="{{url('servicios')}}" class="site-button m-r10 primary button-lg btn1">Nuestros Servicios</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service -->
                <div class="service-box-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="img-carousel-content owl-carousel text-center text-white owl-none ">
                                    <div class="item">
                                        <div class="icon-bx-wraper bx-style-1 p-a20 radius-sm">
                                            <div class="icon-content">
                                                <h5 class="dlab-tilte">
                                                    <span class="icon-sm"><i class="fab fa-codepen"></i></span>
                                                    Aplicativos Web
                                                </h5>
                                                <p>Programación a la<br>medida de su necesidad</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="icon-bx-wraper bx-style-1 p-a20 radius-sm">
                                            <div class="icon-content">
                                                <h5 class="dlab-tilte">
                                                    <span class="icon-sm"><i class="fas fa-shopping-cart"></i></span>
                                                    Tiendas Online
                                                </h5>
                                                <p>100% automatizadas con <br>Woocommercer o Shopify</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="icon-bx-wraper bx-style-1 p-a20 radius-sm">
                                            <div class="icon-content">
                                                <h5 class="dlab-tilte">
                                                    <span class="icon-sm"><i class="fas fa-graduation-cap"></i></span>
                                                    Cursos
                                                </h5>
                                                <p>Capacitaciones virtuales <br> y presenciales</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="icon-bx-wraper bx-style-1 p-a20 radius-sm">
                                            <div class="icon-content">
                                                <h5 class="dlab-tilte">
                                                    <span class="icon-sm"><i class="fas fa-search"></i></span>
                                                    Posicionamiento
                                                </h5>
                                                <p>Su empresa en las primeras posiciones de Google</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service End -->
            </div>
            <!-- Slider Banner -->
            <div class="content-block">
                <div class="section-full facility">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="icon-bx-wraper left bg-azul-claro-agencia text-white p-a70 dlab-box-icon">
                                <div class="icon-lg">
                                    <div class="icon-cell no-movil">
                                        <div>
                                            <span>
                                                <i class="fab fa-google"></i>
                                                <i class="fab fa-google"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-content center-movil">
                                    <h4 class="dlab-tilte">Pruebe GSuite Gratis Por 14 Días</h4>
                                    <p>Obtenga direcciones de correo electrónico personalizadas y más de 30Gb de almacenamiento por cuenta.</p>
                                    <a href="{{url('gsuite')}}" class="site-button white outline outline-2">Regístrese Ahora</a>
                                    <p class="font-13 p-t20"><a href="{{url('https://api.whatsapp.com/send?phone=573168785601&text=Hola,%20quiero%20obtener%20un%20código%20promocional%20para%20GSuite')}}" target="_blank" >Escríbanos</a> y obtenga además un 20% de descuento durante su primer año</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 bg-gray">
                            <div class="icon-bx-wraper left p-a70 dlab-box-icon">
                                <div class="icon-lg">
                                    <div class="icon-cell no-movil">
                                        <div>
                                            <span>
                                                <i class="fas fa-briefcase"></i>
                                                <i class="fas fa-briefcase"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-content center-movil">
                                <h4 class="dlab-tilte">Solicite Consultoría Online</h4>
                                    <p>Asesórese antes de contratar un servicio o iniciar un proyecto, conozca sus limitaciones y oportunidades.</p>
                                    <a href="{{url('consultorias')}}" class="site-button pink outline outline-2">Más Información</a>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
                <!-- Portfolio -->
                <div class="section-full bg-white content-inner-1 portfolio">
                    <div class="container-fluid">
                        <div class="section-head text-black text-center">
                            <h4 class="text-gray-dark m-b10">Tenemos la mejor relación costo/beneficio del mercado</h4>
                            <h2 class="box-title m-tb0">Confíe el desarrollo de su proyecto a Agencia Web Bogotá</h2>
                            <p class="font-weight-600">Trabajamos con las mejores herramientas web, plataformas seguras y servidores eficientes.
                                Con dedicación, profesionalismo y cumplimiento</p>
                        </div>
                        <div class="site-filters clearfix center  m-b40">
                            <ul class="filters" data-toggle="buttons">
                                <li data-filter="" class="btn active">
                                    <a href="{{url('paginas-web')}}" class="site-button-secondry radius-sm"
                                        onclick="window.location = 'paginas-web'"><span>Diseño Web</span></a>
                                </li>
                                <li data-filter="web" class="btn">
                                    <a href="{{url('programacion-web')}}" class="site-button-secondry radius-sm"
                                        onclick="window.location = 'programacion-web'"><span>Programación</span></a>
                                </li>
                                <li data-filter="advertising" class="btn active">
                                    <a href="{{url('redes-sociales')}}" class="site-button-secondry radius-sm"
                                        onclick="window.location = 'redes-sociales'"><span>Marketing en Redes Sociales</span></a>
                                </li>
                                <li data-filter="branding" class="btn">
                                    <a href="{{url('/')}}" class="site-button-secondry radius-sm"
                                        onclick="window.location = '/'"><span>Branding</span></a>
                                </li>
                                <li data-filter="design" class="btn active">
                                    <a href="{{url('tiendas-online')}}" class="site-button-secondry radius-sm"
                                        onclick="window.location = 'tiendas-online'"><span>Tiendas Online</span></a>
                                </li>
                                <li data-filter="photography" class="btn">
                                    <a href="{{url('posicionamiento-web')}}" class="site-button-secondry radius-sm"
                                        onclick="window.location = 'posicionamiento-web'"><span>Posicionamiento</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Portfolio End -->
                <!-- Map And Form -->
                <div class="section-full bg-white content-inner-2 ">
                    <div class="container">
                        <div class="row equal-wraper3">
                            <div class="col-lg-5 equal-col dis-tbl m-b30 wow zoomInLeft" data-wow-delay="0.4s">
                                <div class="dis-tbl-cell m-b30 center-movil">
                                    <h3 class="m-t0 m-b10">Sitios Web Administrables con Todos los Beneficios Incluidos</h3>                                    
                                        <p class="font-weight-600">Websites en WordPress con Tema Premium Incluido<br>
                                        Websites en HTML y CSS desde cero sin plantillas<br>
                                        Landing Pages Para Promociones y Anuncios<br>
                                        Tienda Online con Woocommerce, PrestaShop o Shopify<br>
                                        Sitios Corporativos con Posicionamiento Incluido<br>
                                        Portales Educativos con Funciones Avanzadas<br>
                                        Websites hechos a medida con Funciones Específicas<br>
                                        Alojamiento en VPS Ultra rápido y seguro</p>
                                    </ul>
                                    <a href="{{url('contacto')}}" class="site-button bg-azul-oscuro-agencia outline outline-2">Quiero Cotizar Mi Sitio Web
                                    <i class="ti-arrow-right m-l10"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-7 equal-col wow zoomInRight" data-wow-delay="0.8s">
                                <picture>
                                    <source srcset="{{asset('images/pc.webp')}}" type="image/webp">
                                    <img src="{{asset('images/pc.png')}}" alt="Sitio web mostrado en mac">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Map And Form END -->

                <!-- Team And Process -->
                <div class="section-full bg-azul-oscuro-agencia content-inner">
                    <div class="container">
                        <div class="m-auto text-center m-b50 text-white">
                            <h6 class="font-weight-300 m-t0">¿Que más puede hacer Agencia Web Bogotá por usted?</h6>
                            <h3>Obténga máxima exposición para sus productos y servicios a través de los beneficios que
                                ofrece la publicidad online</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 wow zoomIn" data-wow-delay="0.2s">
                                <div class="dlab-box-bg m-b30 box-hover webp-pic1 no-webp-pic1">
                                    <div class="icon-bx-wraper center p-lr20 p-tb30">
                                        <div class="text-primary m-b30">
                                            <span class="icon-cell icon-sm"><i class="fas fa-thumbs-up"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="dlab-tilte">Publicidad en Redes Sociales</h5>
                                            <p>Diseñamos sus perfiles y anuncios publicitarios, creamos sus campañas,
                                                optimizamos su presupuesto y le garantizamos resultados</p>
                                        </div>
                                    </div>
                                    <div class="icon-box-btn text-center">
                                        <a href="{{url('redes-sociales')}}" class="site-button btn-block">Conozca más</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 wow zoomIn" data-wow-delay="0.4s">
                                <div class="dlab-box-bg m-b30 box-hover webp-pic2 no-webp-pic2">
                                    <div class="icon-bx-wraper center p-lr20 p-tb30">
                                        <div class="text-primary m-b30">
                                            <span class="icon-cell icon-sm"><i class="fas fa-cogs"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="dlab-tilte">Marketing Automatizado</h5>
                                            <p><span class="text-red">Adios al Email Marketing</span> las nuevas
                                                estrategias son las autorespuestas, flujos de trabajo, cookies,
                                                etiquetas, <span class="text-green">Whastapp Marketing</span> y más</p>
                                        </div>
                                    </div>
                                    <div class="icon-box-btn text-center">
                                        <a href="{{url('redes-sociales')}}" class="site-button btn-block">Conozca más</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 wow zoomIn" data-wow-delay="0.6s">
                                <div class="dlab-box-bg m-b30 box-hover active webp-pic3 no-webp-pic3">
                                    <div class="icon-bx-wraper center p-lr20 p-tb30">
                                        <div class="text-primary m-b30">
                                            <span class="icon-cell icon-sm"><i class="fab fa-google"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="dlab-tilte">Posicionamiento en Google</h5>
                                            <p>Posicionamos su negocio local por medio de la ficha de empresa.
                                                Optimizamos el contenido de su sitio web con palabras claves</p>
                                        </div>
                                    </div>
                                    <div class="icon-box-btn text-center">
                                        <a href="{{url('posicionamiento-web')}}" class="site-button btn-block">Conozca más</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 wow zoomIn" data-wow-delay="0.8s">
                                <div class="dlab-box-bg m-b30 box-hover webp-pic4 no-webp-pic4">
                                    <div class="icon-bx-wraper center p-lr20 p-tb30">
                                        <div class="text-primary m-b30">
                                            <span class="icon-cell icon-sm"><i class="fas fa-edit"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="dlab-tilte">Alojamiento Web</h5>
                                            <p><span class="text-red">Adios al hosting compartido</span> Lo nuevo es servidores privados virtuales (VPS)
                                             que ofrecen +60% de velocidad de carga y +80% de seguridad a su sitio web</p>
                                        </div>
                                    </div>
                                    <div class="icon-box-btn text-center">
                                        <a href="{{url('redes-sociales')}}" class="site-button btn-block">Conozca más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Team And Process END -->
                <!-- Our Portfolio -->
                <div class="section-full content-inner-2 portfolio">
                    <div class="container">
                        <div class="section-head text-center">
                            <h2 class="box-title m-tb0">Ultimos Trabajos Realizados</h2>
                        </div>
                        <div class="clearfix">
                            <ul id="masonry"
                                class="dlab-gallery-listing gallery-grid-4 gallery mfp-gallery port-style1">
                                <li class="web design card-container col-lg-4 col-md-6 col-sm-6 p-a0 wow zoomIn"
                                    data-wow-delay="0.2s">
                                    <div class="dlab-box dlab-gallery-box">
                                        <div class="dlab-media dlab-img-overlay1 dlab-img-effect">
                                            <a href="javascript:void(0);">
                                                <picture>
                                                    <source srcset="{{asset('images/portafolio/antero-german.webp')}}"
                                                        type="image/webp">
                                                    <img src="{{asset('images/portafolio/antero-german.jpg')}}" alt="Antero Germán Ramirez">
                                                </picture>
                                            </a>
                                            <div class="overlay-bx">
                                                <div class="overlay-icon align-b text-white">
                                                    <div class="text-white text-left port-box">
                                                        <a href="{{url('https://usimmigrationagr.com')}}" target="_blank">
                                                            <h5>US Immigration</h5>
                                                        </a>
                                                        <p>Web Site Multidioma</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="web design card-container col-lg-4 col-md-6 col-sm-6 p-a0 wow zoomIn"
                                    data-wow-delay="0.2s">
                                    <div class="dlab-box dlab-gallery-box">
                                        <div class="dlab-media dlab-img-overlay1 dlab-img-effect">
                                            <a href="javascript:void(0);">
                                                <picture>
                                                    <source srcset="{{asset('images/portafolio/jeronimos.webp')}}"
                                                        type="image/webp">
                                                    <img src="{{asset('images/portafolio/jeronimos.jpg')}}" alt="Jerónimo's Cake Shop">
                                                </picture>
                                            </a>
                                            <div class="overlay-bx">
                                                <div class="overlay-icon align-b text-white">
                                                    <div class="text-white text-left port-box">
                                                        <a href="{{url('https://jeronimos.co')}}" target="_blank">
                                                            <h5>Jerónimos Cake Shop</h5>
                                                        </a>
                                                        <p>Sitio Web Shop</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="advertising branding photography card-container col-lg-4 col-md-6 col-sm-6 p-a0 wow zoomIn"
                                    data-wow-delay="0.4s">
                                    <div class="dlab-box dlab-gallery-box">
                                        <div class="dlab-media dlab-img-overlay1 dlab-img-effect dlab-img-effect ">
                                            <a href="javascript:void(0);">
                                                <picture>
                                                    <source srcset="{{asset('images/portafolio/issla-risk.webp')}}"
                                                        type="image/webp">
                                                    <img src="{{asset('images/portafolio/issla-risk.jpg')}}"
                                                        alt="Issla Risk"></picture>
                                            </a>
                                            <div class="overlay-bx">
                                                <div class="overlay-icon align-b text-white">
                                                    <div class="text-white text-left port-box">
                                                        <a href="{{url('https://isslarisk.com')}}" target="_blank">
                                                            <h5>Issla Risk Global Service</h5>
                                                        </a>
                                                        <p>Sitio Web Corporativo</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="branding design photography card-container col-lg-4 col-md-6 col-sm-6 p-a0 wow zoomIn"
                                    data-wow-delay="0.6s">
                                    <div class="dlab-box dlab-gallery-box">
                                        <div class="dlab-media dlab-img-overlay1 dlab-img-effect">
                                            <a href="javascript:void(0);">
                                                <picture>
                                                    <source srcset="{{asset('images/portafolio/bikersymoto.webp')}}"
                                                        type="image/webp">
                                                    <img src="{{asset('images/portafolio/bikersymoto.jpg')}}" alt="bikersymoto">
                                                </picture>
                                            </a>
                                            <div class="overlay-bx">
                                                <div class="overlay-icon align-b text-white">
                                                    <div class="text-white text-left port-box">
                                                        <a href="{{url('https://bikersymoto.com')}}" target="_blank">
                                                            <h5>Bikers y Motos Accesorios</h5>
                                                        </a>
                                                        <p>Tienda Online, Branding y Marketing</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="web design card-container col-lg-4 col-md-6 col-sm-6 p-a0 wow zoomIn"
                                    data-wow-delay="0.8s">
                                    <div class="dlab-box dlab-gallery-box">
                                        <div class="dlab-media dlab-img-overlay1 dlab-img-effect">
                                            <a href="javascript:void(0);">
                                                <picture>
                                                    <source srcset="{{asset('images/portafolio/diocesis-valledupar.webp')}}"
                                                        type="image/webp">
                                                    <img src="{{asset('images/portafolio/diocesis-valledupar.jpg')}}"
                                                        alt="Sitio Web Diócesis de Valledupar">
                                                </picture>
                                            </a>
                                            <div class="overlay-bx">
                                                <div class="overlay-icon align-b text-white">
                                                    <div class="text-white text-left port-box">
                                                        <a href="{{url('https://diocesisdevalledupar.org')}}" target="_blank">
                                                            <h5>Diócesis de Valledupar</h5>
                                                        </a>
                                                        <p>Portal Web Tipo Magazine</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="web branding card-container col-lg-4 col-md-6 col-sm-6 p-a0 wow zoomIn"
                                    data-wow-delay="0.2s">
                                    <div class="dlab-box dlab-gallery-box">
                                        <div class="dlab-media dlab-img-overlay1 dlab-img-effect">
                                            <a href="javascript:void(0);">
                                                <picture>
                                                    <source srcset="{{asset('images/portafolio/compratodonline.webp')}}"
                                                        type="image/webp">
                                                    <img src="{{asset('images/portafolio/compratodonline.jpg')}}"
                                                        alt="Portal Web IPS Comfasalud">
                                                </picture>
                                            </a>
                                            <div class="overlay-bx">
                                                <div class="overlay-icon align-b text-white">
                                                    <div class="text-white text-left port-box">
                                                        <a href="{{url('https://compratodonline.com')}}" target="_blank">
                                                            <h5>Compra Todo Online</h5>
                                                        </a>
                                                        <p>Tienda Online Woocommerce</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="advertising design photography card-container col-lg-4 col-md-6 col-sm-6 p-a0 wow zoomIn"
                                    data-wow-delay="0.4s">
                                    <div class="dlab-box dlab-gallery-box">
                                        <div class="dlab-media dlab-img-overlay1 dlab-img-effect ">
                                            <a href="javascript:void(0);">
                                                <picture>
                                                    <source srcset="{{asset('images/portafolio/pediatria-integrativa.webp')}}"
                                                        type="image/webp">
                                                    <img src="{{asset('images/portafolio/pediatria-integrativa.jpg')}}"
                                                        alt="Sitio Web Pediatria Integrativa"></picture>
                                            </a>
                                            <div class="overlay-bx">
                                                <div class="overlay-icon align-b text-white">
                                                    <div class="text-white text-left port-box">
                                                        <a href="{{url('https://pediatriaintegrativaco.com')}}" target="_blank">
                                                            <h5>Pediatría Integrativa</h5>
                                                        </a>
                                                        <p>Sitio Web Consultorio Medicina</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="web branding card-container col-lg-4 col-md-6 col-sm-6 p-a0 wow zoomIn"
                                    data-wow-delay="0.6s">
                                    <div class="dlab-box dlab-gallery-box">
                                        <div class="dlab-media dlab-img-overlay1 dlab-img-effect">
                                            <a href="javascript:void(0);">
                                                <picture>
                                                    <source srcset="{{asset('images/portafolio/mandetextos.webp')}}"
                                                        type="image/webp">
                                                    <img src="{{asset('images/portafolio/mandetextos.jpg')}}"
                                                        alt="Página Web Mandetextos">
                                                </picture>
                                            </a>
                                            <div class="overlay-bx">
                                                <div class="overlay-icon align-b text-white">
                                                    <div class="text-white text-left port-box">
                                                        <a href="{{url('https://mandetextos.com')}}" target="_blank">
                                                            <h5>Mandetextos</h5>
                                                        </a>
                                                        <p>Sitio Web Landing Page</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>                                
                                <li class="web photography card-container col-lg-4 col-md-6 col-sm-6 p-a0 wow zoomIn"
                                    data-wow-delay="0.2s">
                                    <div class="dlab-box dlab-gallery-box">
                                        <div class="dlab-media dlab-img-overlay1 dlab-img-effect">
                                            <a href="javascript:void(0);">
                                                <picture>
                                                    <source srcset="{{asset('images/portafolio/export-world.webp')}}"
                                                        type="image/webp">
                                                    <img src="{{asset('images/portafolio/export-world.jpg')}}"
                                                        alt="Sitio Web Export World"></picture>
                                            </a>
                                            <div class="overlay-bx">
                                                <div class="overlay-icon align-b text-white">
                                                    <div class="text-white text-left port-box">
                                                        <a href="{{url('https://ciexportworld.com')}}" target="_blank">
                                                            <h5>CI Export World</h5>
                                                        </a>
                                                        <p>Sitio Web Corporativo</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Our Portfolio END -->
                <!-- Clients Words -->
                <div class="section-full overlay-primary-middle content-inner bg-img-fix webp-testimonial-bg no-webp-testimonial-bg">
                    <div class="container">
                        <div class="max-w600 m-auto text-center m-b30 text-white">
                            <h3 class="m-t0">¿Que opinan nuestros clientes sobre nosotros?</h3>
                        </div>
                        <div class="section-content m-b30 wow fadeIn" data-wow-delay="0.5s">
                            <div class="testimonial-two-dots owl-carousel owl-theme owl-dots-white-full owl-btn-center-lr owl-btn-3 btn-white">
                            <div class="item p-a5">
                                <div class="testimonial-1">
                                    <div class="testimonial-text">
                                        <p class="font-weight-400 text-italic text-white">"Totalmente recomendada Agencia Web Bogotá, muy agradecido por la labor que hicieron en nuestro portal, su experiencia y profesionalismo les permiten prestar servicios de alta calidad y brindar soluciones acordes a la necesidad y requerimientos del cliente."</p>
                                    </div>
                                    <div class="testimonial-detail"> <strong class="testimonial-name text-white">Henry González</strong> <span class="testimonial-position">Publieventos</span> </div>
                                    </div>
                                </div>
                                <div class="item p-a5">
                                    <div class="testimonial-1">
                                        <div class="testimonial-text">
                                            <p class="font-weight-400 text-italic text-white">"Los servicios prestados por Agencia Web Bogotá, son excelentes, los recomendamos
                                                por su atención. Desde el principio se mostraron serviciales y atentos a nuestras inquietudes, 
                                                consideramos que el talento humano es su valor más importante. Los tiempos de entrega están en lo previsto por 
                                                ellos sin ningún tipo de retraso. Gracias."
                                            </p>
                                        </div>
                                        <div class="testimonial-detail"> <strong
                                                class="testimonial-name text-white">Administrador</strong> <span
                                                class="testimonial-position">DIÓCESIS DE VALLEDUPAR</span> </div>
                                    </div>
                                </div>
                                <div class="item p-a5">
                                    <div class="testimonial-1">
                                        <div class="testimonial-text">
                                            <p class="font-weight-400 text-italic text-white">"Empezamos desde cero en nuestro negocio y gracias a los chicos de Agencia Web Bogotá
                                                ya estamos posicionados en el sector y generando un gran volumen de ventas. Excelente trabajo..."
                                            </p>
                                        </div>
                                        <div class="testimonial-detail"> <strong
                                                class="testimonial-name text-white">Edier Acelas</strong> <span
                                                class="testimonial-position">BIKERS Y MOTOS ACCESORIOS</span> </div>
                                    </div>
                                </div>
                                
                                <div class="item p-a5">
                                    <div class="testimonial-1">
                                        <div class="testimonial-text">
                                            <p class="font-weight-400 text-italic text-white">"Superaron mis
                                                expectativas con las solicitudes iniciales, siempre están prestos a
                                                ayudar y proponer. los recomiendo y seguiré trabajando con su agencia"
                                            </p>
                                        </div>
                                        <div class="testimonial-detail"> <strong
                                                class="testimonial-name text-white">Iván Matin</strong> <span
                                                class="testimonial-position">HOYFARMA</span> </div>
                                    </div>
                                </div>
                                <div class="item p-a5">
                                    <div class="testimonial-1">
                                        <div class="testimonial-text">
                                            <p class="font-weight-400 text-italic text-white">"Excelente atención,
                                                además de realizar una labor integral en el desarrollo de la página web"
                                            </p>
                                        </div>
                                        <div class="testimonial-detail"> <strong
                                                class="testimonial-name text-white">Lizeth Cardenas</strong> <span
                                                class="testimonial-position">GRUPO HELM</span> </div>
                                    </div>
                                </div>
                                <div class="item p-a5">
                                    <div class="testimonial-1">
                                        <div class="testimonial-text">
                                            <p class="font-weight-400 text-italic text-white">"Queremos felicitarlos por
                                                el excelente servicio prestado por AGENCIA WEB BOGOTA. Están atentos a
                                                todos los requerimientos y brindan soluciones de manera pronta y eficaz.
                                                En menos de un mes hemos obtenido resultados. Han logrado interpretar a
                                                cabalidad nuestras solicitudes."</p>
                                        </div>
                                        <div class="testimonial-detail"> <strong
                                                class="testimonial-name text-white">Felipe Vega</strong> <span
                                                class="testimonial-position">MEDEFIENDE</span> </div>
                                    </div>
                                </div>
                                <div class="item p-a5">
                                    <div class="testimonial-1">
                                        <div class="testimonial-text">
                                            <p class="font-weight-400 text-italic text-white">"Realizamos la
                                                contratación de página web para nuestro negocio, nos pareció muy
                                                agradable que pudiéramos pagar por cuotas ya que nos facilitó mucho el
                                                pago. La página quedó muy agradable y bien posicionada en Google."</p>
                                        </div>
                                        <div class="testimonial-detail"> <strong
                                                class="testimonial-name text-white">Miguel Martinez</strong> <span
                                                class="testimonial-position">EZRY MANTENIMIENTOS</span> </div>
                                    </div>
                                </div>
                                <div class="item p-a5">
                                    <div class="testimonial-1">
                                        <div class="testimonial-text">
                                            <p class="font-weight-400 text-italic text-white">"Con Agencia Web Bogotá
                                                tuve un servicio eficiente y de calidad cuando diseñaron la página web
                                                para mi empresa. El resultado del diseño de la página web superó mis
                                                expectativas, además son expertos en marketing digital y me orientaron
                                                al respecto. Esta agencia está conformada por personas muy profesionales
                                                y capacitadas."</p>
                                        </div>
                                        <div class="testimonial-detail"> <strong
                                                class="testimonial-name text-white">Carlos Andres Rodriguez</strong>
                                            <span class="testimonial-position">Viaggi Group</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Clients Words END -->
                <div class="section-full content-inner bg-img-fix web-bg14 no-webp-bg14">
				<div class="container">
					 <div class="row">
						<div class="col-md-12 text-center section-head">
							<h2 class="font-weight-700 m-b0">Nuestro Blog</h2>
							<p class="m-b0">Novedades, Tendencias, Oportunidades</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="blog-carousel owl-carousel owl-btn-center-lr owl-btn-3 owl-theme owl-btn-center-lr owl-btn-1">
								<div class="item">
									<div class="blog-post blog-grid blog-rounded blog-effect1">
                                        <div class="dlab-post-media dlab-img-effect "> <a href="{{url('blog/renta-un-sitio-web-o-tienda-online')}}">
                                          <picture>
                                            <source srcset="{{asset('images/blog/sitios-web-en-alquiler.webp')}}" type="image/webp">
                                            <img src="{{asset('images/blog/sitios-web-en-alquiler.jpg')}}" alt="Mujer feliz por rentar un sitio web">
                                          </picture> </a> </div>
										<div class="dlab-info p-a20 border-1">
											<div class="dlab-post-title ">
												<h5 class="post-title font-weight-500"><a href="{{url('blog/renta-un-sitio-web-o-tienda-online')}}">Este 2020 venimos a solucionarlo todo, websites en alquiler</a></h5>
											</div>											
											<div class="dlab-post-text">
											   <p>Rentar un sitio web o tienda online con todos los servicios administrativos incluidos, se perfila como la gran solución al problema de la improductividad...</p>
											</div>
										   <div class="dlab-post-readmore"> 
												<a href="{{url('blog/renta-un-sitio-web-o-tienda-online')}}" title="READ MORE" rel="bookmark" class="site-button outline outline-1">IR ARTÍCULO <i class="ti-arrow-right"></i></a> 
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="blog-post blog-grid blog-rounded blog-effect1">
                                        <div class="dlab-post-media dlab-img-effect "> <a href="{{url('blog/nuevas-funciones-para-mejorar-el-rendimiento-de-su-sitio-web')}}">
                                        <picture>
                                            <source srcset="{{asset('images/blog/funciones-sitio-web.webp')}}" type="image/webp">
                                            <img src="{{asset('images/blog/funciones-sitio-web.jpg')}}" alt="Hombre de negocios usando dispositivos de tecnología e íconos de interfaz">
                                        </picture> </a>
                                        </div>
										<div class="dlab-info p-a20 border-1">
											<div class="dlab-post-title ">
												<h5 class="post-title font-weight-500"><a href="{{url('blog/nuevas-funciones-para-mejorar-el-rendimiento-de-su-sitio-web')}}">Nuevas funciones para mejorar el rendimiento de su sitio web</a></h5>
											</div>											
											<div class="dlab-post-text">
											   <p>Conozca las nuevas herramientas y funcionalidades que podemos  integrar en su sitio web para potenciar aún más su presencia en Internet...</p>
											</div>
										   <div class="dlab-post-readmore"> 
												<a href="{{url('blog/nuevas-funciones-para-mejorar-el-rendimiento-de-su-sitio-web')}}" title="READ MORE" rel="bookmark" class="site-button outline outline-1">IR AL ARTÍCULO <i class="ti-arrow-right"></i></a> 
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="blog-post blog-grid blog-rounded blog-effect1">
                                        <div class="dlab-post-media dlab-img-effect "> <a href="{{url('blog/alarmante-aumento-en-los-costos-de-alojamiento-de-paginas-web')}}">
                                        <picture>
                                            <source srcset="{{asset('images/blog/aumento-en-precios-de-hosting.webp')}}" type="image/webp">
                                            <img src="{{asset('images/blog/aumento-en-precios-de-hosting.jpg')}}" alt="Hombre desesperado">
                                        </picture> </a>
                                        </div>
										<div class="dlab-info p-a20 border-1">
											<div class="dlab-post-title ">
												<h5 class="post-title font-weight-500"><a href="{{url('blog/alarmante-aumento-en-los-costos-de-alojamiento-de-paginas-web')}}">Alarmante aumento en los costos de alojamiento de paginas web</a></h5>
											</div>											
											<div class="dlab-post-text">
											   <p>Las nuevas políticas de licencia de cPanel podrían causar que los costos de alojamiento de páginas web suban hasta en un 2000% ¿Qué alternativas existen?..</p>
											</div>
										   <div class="dlab-post-readmore"> 
												<a href="{{url('blog/alarmante-aumento-en-los-costos-de-alojamiento-de-paginas-web')}}" title="READ MORE" rel="bookmark" class="site-button outline outline-1">IR AL ARTÍCULO <i class="ti-arrow-right"></i></a> 
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


                <!-- Get in touch -->
                <div class="section-full overlay-primary-dark bg-img-fix bg-azul-oscuro-agencia">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 content-inner chosesus-content text-white">
                                <h2 class="box-title m-b15 wow fadeInLeft center-movil" data-wow-delay="0.2s">Contacte Ahora con
                                    Agencia Web Bogotá</h2>
                            </div>
                            <div class="col-lg-7 col-md-7 m-b30">
                                <form class="inquiry-form wow fadeInUp dzForm" data-wow-delay="0.2s">
                                    <div class="dzFormMsg"></div>
                                    <h3 class="box-title m-t0 m-b10 text-center">Estamos listos para comenzar a trabajar
                                        en su proyecto </h3>
                                    <div class="text-center p-t20">
                                        <a href="{{url('https://api.whatsapp.com/send?phone=573168785601')}}"
                                            class="site-button btn-whatsapp"><i class="fab fa-whatsapp"></i>
                                            ¡Pregúntenos por WhatsApp!</a>
                                        <a href="{{url('https://m.me/agenciawebbogota')}}" class="site-button btn-messenger"><i
                                                class="fab fa-facebook-messenger"></i> ¡Háblenos por Messenger!</a>
                                        <p class="p-t10 font-16 text-center">Horario de Atención: Lunes a Sábado 8:00 AM
                                            a 6:00 PM</p>
                                    </div>
                                    <div class="row">

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Get in touch -->
            </div>
            <!-- contact area END -->
        </div>

        <!-- Content END-->
        <!-- Footer -->

        @include('partials.footer')
        <!-- Footer END-->
    </div>
    <!-- JavaScript  files ========================================= -->
    <script src=" {{asset('js/jquery.min.js')}}"></script><!-- JQUERY.MIN JS -->
    <script src=" {{asset('plugins/bootstrap/js/popper.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src=" {{asset('plugins/bootstrap/js/bootstrap.min.js')}} "></script><!-- BOOTSTRAP.MIN JS -->
    {{-- <script src=" {{asset('js/page.js')}} "></script> --}}
    <script src=" {{asset('plugins/wow/wow.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
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
    {{-- <script src='https://www.google.com/recaptcha/api.js'></script> <!-- Google API For Recaptcha  --> --}}
    {{-- <script src="{{asset('plugins/loading/anime.js')}}"></script><!-- Tilt Jquery -->
    <script src="{{asset('plugins/loading/anime-app3.js')}}"></script><!-- Tilt Jquery --> --}}
    <script src="{{asset('js/dz.ajax.js')}} "></script><!-- CONTACT JS  -->
    @include('partials.schema')
    <script>
        $(function () {
        $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
</body>

</html>