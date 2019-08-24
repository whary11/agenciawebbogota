<div id="loading-area">
    <div class="la-anim-10"></div>
</div>
<div class="icono-whatsapp" id="btn-whp"><a href="https://api.whatsapp.com/send?phone=573168785601"><i
            class="fab fa-whatsapp"></i></a></div>
<div class="icono-messenger" id="btn-mes"><a href="https://m.me/agenciawebbogota"><i
            class="fab fa-facebook-messenger"></i></a></div>
<div class="icono-phone" id="btn-pho"><a href="tel:+573168785601"><i class="fas fa-phone-volume"></i></a></div>
<div class="tooltip-whatsapp" id="tp-whp"><span>¡Estamos en línea!</span></div>
<div class="tooltip-messenger" id="tp-mes"><span>Háblenos por Messenger</span></div>
<div class="tooltip-phone" id="tp-pho"><span>Llámenos</span></div>

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
                        <li><a href="mailto:info@agenciawebbogota.com"><i class="fas fa-at m-r5"></i>
                                info@agenciawebbogota.com</a></li>
                        <li><a href="{{url('enviar-un-pago')}}"><i class="fas fa-dollar-sign m-r5"></i> Enviar un Pago</a></li>
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
                <a href="{{route('principal')}}"><img src="{{asset('images/logo-agencia-web-bogota.svg')}}"
                            alt="Logo Agencia Web Bogotá"></a>
                </div>
                <!-- nav toggle button -->
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                    data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                    aria-expanded="false" aria-label="Toggle navigation">
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
                        <li class="active"><a href="{{url('/')}}"><i class="fas fa-home font-20"></i> Inicio</a></li>
                        <li><a>Desarrollo Web<i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="{{url('paginas-web')}}">Páginas Web </a>
                                <li>
                                <li><a href="{{url('landing-page')}}">Landing Pages </a></li>
                                <li><a href="{{url('tiendas-online')}}">Tiendas Online </a></li>
                                <li><a href="{{url('programacion-web')}}">Programación Web</a></li>
                                <li><a href="{{url('google-apps')}}">Google Apps</a></li>
                            </ul>
                        <li><a>Marketing Digital <i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="{{url('redes-sociales')}}">Redes Sociales </a>
                                <li>
                                <li><a href="{{url('posicionamiento-web')}}">Posicionamiento Web </a>
                                <li>
                            </ul>
                        </li>
                        <li><a href="{{url('blog')}}">Blog </a></li>
                        <li><a>Soporte Técnico <i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="#">Tickets<i class="fa fa-angle-right"></i></a>
                                    <ul class="sub-menu">
                                    <li><a href="{{url('/ticket')}}" class="dez-page">Abrir</a></li>
                                    <li><a href="{{url('/ticket/consultar')}}" class="dez-page">Consultar</a></li>
                                    </ul>
                                </li>
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