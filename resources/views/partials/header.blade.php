<div id="loading-area">
    <div class="la-anim-10"></div>
</div>
<!-- header -->
<header class="site-header header-transparent mo-left">
    <div class="top-bar">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="dlab-topbar-left">
                    <ul>
                        <li><i class="fas fa-mobile-alt m-r5"></i><a href="tel:573168785601"> +57 316 8785601</a></li>
                        <li><a href="mailto:info@agenciawebbogota.com"><i class="fas fa-at m-r5"></i>
                                info@agenciawebbogota.com</a></li>
                    </ul>
                </div>
                <div class="dlab-topbar-right">
                    <ul>
                        <li><a href="{{url('/')}}"><i class="fas fa-life-ring"></i>
                                Soporte Técnico</a></li>
                                <li><a href="{{url('servicios')}}"><i class="fas fa-dollar-sign m-r5"></i>
                                Tarifas Servicios</a></li>        
                        <li><a href="{{url('enviar-un-pago')}}"><i class="far fa-credit-card"></i> Enviar un Pago</a></li>

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
                        <a href="{{url('contacto')}}" class="dez-page site-button primary">Contáctanos</a>
                    </div>
                </div>
                <!-- main nav -->
                <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown"> 
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{url('/')}}"><i class="fas fa-home font-20"></i> Inicio</a></li>
                        <li><a>Diseño Web<i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="{{url('paginas-web')}}">Páginas Web </a><li>
                                <li><a href="{{url('tiendas-online')}}">Tiendas En Línea </a></li>
                                <li><a href="{{url('landing-page')}}">Landing Pages </a></li>
                                <li><a href="{{url('administracion-de-sitios-web')}}">Administración Web</a></li>
                                <li><a>Soluciones Empresas<i class="fa fa-angle-right"></i></a>
                                    <ul class="sub-menu">
                                    <li><a href="{{url('gsuite')}}" class="dez-page">Cuentas GSuite</a></li>
                                    <li><a href="{{url('/')}}" class="dez-page">Correo Corporativo</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{url('servicios')}}">Servicios Adicionales</a></li>
                            </ul>
                        <li><a>Publicidad <i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="{{url('redes-sociales')}}">Redes Sociales </a></li>
                                <li><a href="{{url('posicionamiento-web')}}">Posicionamiento Web </a></li>
                            </ul>
                        </li>                        
                        <li><a>Diseño y Fotografía<i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="{{url('/')}}">Identidad Corporativa </a></li>
                                <li><a href="{{url('/')}}">Guía de Marca </a></li>
                                <li><a href="{{url('/')}}">Fotografía de Productos </a></li>
                                <li><a href="{{url('/')}}">Diseños Para Redes </a></li>

                            </ul>
                        </li>
                        <li><a href="{{url('blog')}}">Blog </a></li>
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