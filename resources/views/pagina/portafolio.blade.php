<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Robots" content="index, follow">
    <title>Portafolio Agencia Web Bogotá - Trabajos Realizados</title>
    <meta name="description" content="Diseño de páginas web, sitios corporativos, tiendas en línea, sitios creativos, desarrollos a medida, cms, sitios administrables, sistemas pos, pasarelas de pago" />
	<meta name="author" content="Agencia Web Bogotá">
	<meta property="og:type" content="website" />
    <meta property="og:site_name " content="Agencia Web Bogotá" />
    <meta property="og:title" content="Portafolio Agencia Web Bogotá - Trabajos Realizados" />
    <meta property="og:url" content="https://agenciawebbogota.com/portafolio" />
    <meta property="og:image" content="https://agenciawebbogota.com/images/portafolio/asistir-computadores.jpg" />
    <meta property="og:description" content="Diseño de páginas web, sitios corporativos, tiendas en línea, sitios creativos, desarrollos a medida, cms, sitios administrables, sistemas pos, pasarelas de pago" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@AgenciaBogota">
    <meta name="twitter:creator" content="@AgenciaBogota">
    <meta name="twitter:image" content="https://agenciawebbogota.com/portafolio/asistir-computadores.jpg">
    <meta name="twitter:image:alt" content="Portafolio Agencia Web Bogotá">
    <meta name="twitter:title" content="Portafolio Agencia Web Bogotá - Trabajos Realizados">
    <meta name="twitter:description" content="Diseño de páginas web, sitios corporativos, tiendas en línea, sitios creativos, desarrollos a medida, cms, sitios administrables, sistemas pos, pasarelas de pago">
	<link rel="canonical" href="https://agenciawebbogota.com/portafolio" />
    <link rel="alternate" hreflang="en_EN" href="https://en.agenciawebbogota.com/portfolio" />
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
		<div class="icono-whatsapp" id="btn-whp"><a href="{{url('https://api.whatsapp.com/send?phone=573168785601')}}"><i class="fab fa-whatsapp"></i></a></div>
		<div class="tooltip-whatsapp" id="tp-whp"><span>¡Estamos en línea!</span></div>

        <!-- header END -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
		<div class="dlab-bnr-inr overlay-primary webp-admin no-webp-admin">
                <div class="container">
                    <div class="dlab-bnr-inr-entry texto-ini">
                        <h1 class="text-white">Nuestro Portafolio</h1>
                        <h2 class="text-white">Cada trabajo realizado ha sido un caso de éxito</h2>
                    </div>
                </div>
        </div>
        <!-- inner page banner END -->
            
        <!-- contact area -->
        <div class="content-block">
			<!-- Portfolio  -->
			<div class="section-full content-inner-2 portfolio text-uppercase" id="portfolio">
				<div class="container">
					<div class="site-filters clearfix center  m-b40">
						<ul class="filters" data-toggle="buttons">
									<li data-filter="" class="btn active">
										<input type="radio">
										<a href="#" class="site-button-secondry radius-sm"><span>Todo</span></a> 
									</li>
									<li data-filter="tiendas" class="btn">
										<input type="radio">
										<a href="#" class="site-button-secondry radius-sm"><span>Tiendas en Línea</span></a> 
									</li>
									<li data-filter="corporativos" class="btn">
										<input type="radio">
										<a href="#" class="site-button-secondry radius-sm"><span>Sitios Corporativos</span></a> 
									</li>
									<li data-filter="creativos" class="btn">
										<input type="radio">
										<a href="#" class="site-button-secondry radius-sm"><span>Sitios Creativos</span></a> 
									</li>
									<li data-filter="branding" class="btn">
										<input type="radio">
										<a href="#" class="site-button-secondry radius-sm"><span>Branding</span></a> 
									</li>
									<li data-filter="fotografia" class="btn">
										<input type="radio">
										<a href="#" class="site-button-secondry radius-sm"><span>Fotografía</span></a> 
									</li>
								</ul>
					</div>
					<div class="clearfix">
						<ul id="masonry" class="dlab-gallery-listing gallery-grid-4 gallery mfp-gallery port-style1">
							<li class="tiendas card-container col-lg-4 col-md-4 col-sm-4 p-a0 wow zoomIn">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect">
										<a href="javascript:void(0);"> 
                                            <picture>
                                              <source srcset="{{asset('images/portafolio/rocketstore.webp')}}" type="image/webp">
                                                <img src="{{asset('images/portafolio/rocketstore.jpg')}}" alt="Rocket Store">
                                            </picture>
                                        </a>
										<div class="overlay-bx">
											<div class="overlay-icon align-b text-white text-left"> 
												<div class="text-white text-left port-box">
													<a href="{{url('https://rocketstore.club')}}" target="_blank"><h4 class="m-a0">Rocket Store Bogotá</h4></a>
													<p>Tienda en Línea Woocommerce</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="tiendas card-container col-lg-4 col-md-4 col-sm-4 p-a0 wow zoomIn">
								<div class="dlab-box dlab-gallery-box">
                                <div class="dlab-media dlab-img-overlay1 dlab-img-effect">
										<a href="javascript:void(0);"> 
                                            <picture>
                                              <source srcset="{{asset('images/portafolio/farmapalacio.webp')}}" type="image/webp">
                                                <img src="{{asset('images/portafolio/farmapalacio.jpg')}}" alt="Droguerías Farmapalacio">
                                            </picture>
                                        </a>
										<div class="overlay-bx ">
											<div class="overlay-icon align-b text-white text-left"> 
												<div class="text-white text-left port-box">
												<a href="{{url('https://farmapalacio.com')}}" target="_blank"><h4 class="m-a0">Droguerías Farmapalacio</h4></a>
													<p>Tienda en Línea Woocommerce</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="tiendas card-container col-lg-4 col-md-4 col-sm-4 p-a0 wow zoomIn">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect"> 
									<a href="javascript:void(0);"> 
										<picture>
                                            <source srcset="{{asset('images/portafolio/bikersymoto.webp')}}" type="image/webp">
                                                <img src="{{asset('images/portafolio/bikersymoto.jpg')}}" alt="Bikers y Motos">
                                            </picture>
		                   			</a>
										<div class="overlay-bx ">
											<div class="overlay-icon align-b text-white text-left"> 
												<div class="text-white text-left port-box">
												<a href="{{url('https://farmapalacio.com')}}" target="_blank"><h4 class="m-a0">Bikers y Motos</h4></a>
													<p>Ecommerce Prestashop</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="tiendas card-container col-lg-4 col-md-4 col-sm-4 p-a0 wow zoomIn">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect"> 
									<a href="javascript:void(0);"> 
										<picture>
                                            <source srcset="{{asset('images/portafolio/compratodonline.webp')}}" type="image/webp">
                                                <img src="{{asset('images/portafolio/compratodonline.jpg')}}" alt="Compra Todo Online">
                                            </picture>
									</a>
										<div class="overlay-bx ">
											<div class="overlay-icon align-b text-white text-left"> 
												<div class="text-white text-left port-box">
												<a href="{{url('https://compratodonline.com')}}" target="_blank"><h4 class="m-a0">Compra Todo Online</h4></a>
													<p>Tienda en Línea Woocommerce</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							 <li class="tiendas corporativos card-container col-lg-4 col-md-4 col-sm-4 p-a0 wow zoomIn">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect">
									<a href="javascript:void(0);">									
									<picture>
                                            <source srcset="{{asset('images/portafolio/asistir-computadores.webp')}}" type="image/webp">
                                                <img src="{{asset('images/portafolio/asistir-computadores.jpg')}}" alt="Asistir Computadores">
                                            </picture>
									</a>
										<div class="overlay-bx ">
											<div class="overlay-icon align-b text-white text-left"> 
												<div class="text-white text-left port-box">
												<a href="{{url('https://asistircomputadores.com')}}" target="_blank"><h4 class="m-a0">Asistir Computadores</h4></a>
													<p>Tienda en Línea Woocommerce</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="corporativos card-container col-lg-4 col-md-4 col-sm-4 p-a0 wow zoomIn">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect ">
									<a href="javascript:void(0);"> 									
									<picture>
                                        <source srcset="{{asset('images/portafolio/antero-german.webp')}}" type="image/webp">
                                            <img src="{{asset('images/portafolio/antero-german.jpg')}}" alt="US Immigration">
                                    </picture>
									</a>
										<div class="overlay-bx ">
											<div class="overlay-icon align-b text-white text-left"> 
												<div class="text-white text-left port-box">
												<a href="{{url('https://usimmigrationagr.com')}}" target="_blank"><h4 class="m-a0">US Immigration</h4></a>
													<p>Multilingual Website</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="creativos card-container col-lg-4 col-md-4 col-sm-4 p-a0 wow zoomIn">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect">
										<a href="javascript:void(0);">
									<picture>
                                        <source srcset="{{asset('images/portafolio/elefante-amarillo.webp')}}" type="image/webp">
                                            <img src="{{asset('images/portafolio/elefante-amarillo.jpg')}}" alt="Elefante Amarillo">
                                    </picture>
									</a>
										<div class="overlay-bx ">
											<div class="overlay-icon align-b text-white text-left"> 
												<div class="text-white text-left port-box">
												<a href="{{url('https://elefante-amarillo.com')}}" target="_blank"><h4 class="m-a0">Elefante Amarillo</h4></a>
													<p>Creative HTML Website</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="creativos card-container col-lg-4 col-md-4 col-sm-4 p-a0 wow zoomIn">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect dlab-img-effect "> 
									<a href="javascript:void(0);">									
									<picture>
                                        <source srcset="{{asset('images/portafolio/jeronimos.webp')}}" type="image/webp">
                                            <img src="{{asset('images/portafolio/jeronimos.jpg')}}" alt="Elefante Amarillo">
                                    </picture>
									</a>
										<div class="overlay-bx ">
											<div class="overlay-icon align-b text-white text-left"> 
												<div class="text-white text-left port-box">
												<a href="{{url('https://elefante-amarillo.com')}}" target="_blank"><h4 class="m-a0">Jeronimo's Cake Shop</h4></a>
													<p>Creative WordPress Site</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="creativos card-container col-lg-4 col-md-4 col-sm-4 p-a0 wow zoomIn">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect"> 
									<a href="javascript:void(0);">
									<picture>
                                        <source srcset="{{asset('images/portafolio/diocesis-valledupar.webp')}}" type="image/webp">
                                            <img src="{{asset('images/portafolio/diocesis-valledupar.jpg')}}" alt="Diócesis Valledupar">
                                    </picture>
									</a>
										<div class="overlay-bx ">
											<div class="overlay-icon align-b text-white text-left"> 
												<div class="text-white text-left port-box">
												<a href="{{url('https://diocesisdevalledupar.org')}}" target="_blank"><h4 class="m-a0">Diócesis de Valledupar</h4></a>
													<p>Magazzine Blog Website</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="corporativos card-container col-lg-4 col-md-4 col-sm-4 p-a0 wow zoomIn">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect"> 
									<a href="javascript:void(0);">
									<picture>
                                        <source srcset="{{asset('images/portafolio/imagen-cpc.webp')}}" type="image/webp">
                                            <img src="{{asset('images/portafolio/imagen-cpc.jpg')}}" alt="Consultoría Profesional Corporativa">
                                    </picture>
									</a>
										<div class="overlay-bx ">
											<div class="overlay-icon align-b text-white text-left"> 
												<div class="text-white text-left port-box">
												<a href="{{url('https://consultoriaprofesionalc.com')}}" target="_blank"><h4 class="m-a0">CPC&CO SAS</h4></a>
													<p>Consulting Website</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							 <li class="corporativos card-container col-lg-4 col-md-4 col-sm-4 p-a0 wow zoomIn">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect">
									<a href="javascript:void(0);">
									<picture>
                                        <source srcset="{{asset('images/portafolio/pediatria-integrativa.webp')}}" type="image/webp">
                                            <img src="{{asset('images/portafolio/pediatria-integrativa.jpg')}}" alt="Pediatría Integrativa">
                                    </picture>
									</a>
										<div class="overlay-bx ">
											<div class="overlay-icon align-b text-white text-left"> 
												<div class="text-white text-left port-box">
												<a href="{{url('https://pediatriaintegrativaco.com')}}" target="_blank"><h4 class="m-a0">Pediatría Integrativa</h4></a>
													<p>Medical Website</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="corporativos card-container col-lg-4 col-md-4 col-sm-4 p-a0 wow zoomIn">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect ">
									<a href="javascript:void(0);">
									<picture>
                                        <source srcset="{{asset('images/portafolio/imagen-grupohelm.webp')}}" type="image/webp">
                                            <img src="{{asset('images/portafolio/imagen-grupohelm.jpg')}}" alt="Grupo Helm Contadores">
                                    </picture>
									</a>
										<div class="overlay-bx ">
											<div class="overlay-icon align-b text-white text-left"> 
												<div class="text-white text-left port-box">
												<a href="{{url('http://grupohelmcontadores.com/')}}" target="_blank"><h4 class="m-a0">Grupo Helm</h4></a>
													<p>Financial Website</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="corporativos card-container col-lg-4 col-md-4 col-sm-4 p-a0 wow zoomIn">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect ">
									<a href="javascript:void(0);">
									<picture>
                                        <source srcset="{{asset('images/portafolio/imagen-ezry-1.webp')}}" type="image/webp">
                                            <img src="{{asset('images/portafolio/imagen-ezry-1.jpg')}}" alt="Ezry Mantenimientos">
                                    </picture>
									</a>
										<div class="overlay-bx ">
											<div class="overlay-icon align-b text-white text-left"> 
												<div class="text-white text-left port-box">
												<a href="{{url('http://ezrymantenimientos.com/')}}" target="_blank"><h4 class="m-a0">Ezry Mantenimientos</h4></a>
													<p>Corporate Website</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="corporativos card-container col-lg-4 col-md-4 col-sm-4 p-a0 wow zoomIn">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect ">
									<a href="javascript:void(0);">
									<picture>
                                        <source srcset="{{asset('images/portafolio/fcem.webp')}}" type="image/webp">
                                            <img src="{{asset('images/portafolio/fcem.jpg')}}" alt="Fundación Cuerpo en Movimiento">
                                    </picture>
									</a>
										<div class="overlay-bx ">
											<div class="overlay-icon align-b text-white text-left"> 
												<div class="text-white text-left port-box">
												<a href="{{url('http://cuerpoenmovimiento.org')}}" target="_blank"><h4 class="m-a0">Cuerpo en Movimiento</h4></a>
													<p>ONG Website</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="corporativos card-container col-lg-4 col-md-4 col-sm-4 p-a0 wow zoomIn">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect ">
									<a href="javascript:void(0);">
									<picture>
                                        <source srcset="{{asset('images/portafolio/export-world.webp')}}" type="image/webp">
                                            <img src="{{asset('images/portafolio/export-world.jpg')}}" alt="CI Export World">
                                    </picture>
									</a>
										<div class="overlay-bx ">
											<div class="overlay-icon align-b text-white text-left"> 
												<div class="text-white text-left port-box">
												<a href="{{url('http://ciexportworld.com')}}" target="_blank"><h4 class="m-a0">CI Export World</h4></a>
													<p>Corporate Website</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="corporativos card-container col-lg-4 col-md-4 col-sm-4 p-a0 wow zoomIn">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect ">
									<a href="javascript:void(0);">
									<picture>
                                        <source srcset="{{asset('images/portafolio/imagen-glaw.webp')}}" type="image/webp">
                                            <img src="{{asset('images/portafolio/imagen-glaw.jpg')}}" alt="Glaw Abogados">
                                    </picture>
									</a>
										<div class="overlay-bx ">
											<div class="overlay-icon align-b text-white text-left"> 
												<div class="text-white text-left port-box">
												<a href="{{url('http://glawabogados.com')}}" target="_blank"><h4 class="m-a0">Glaw Abogados</h4></a>
													<p>Lawyer Website</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="corporativos creativos card-container col-lg-4 col-md-4 col-sm-4 p-a0 wow zoomIn">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect ">
									<a href="javascript:void(0);">
									<picture>
                                        <source srcset="{{asset('images/portafolio/mandetextos.webp')}}" type="image/webp">
                                            <img src="{{asset('images/portafolio/mandetextos.jpg')}}" alt="Mandetextos">
                                    </picture>
									</a>
										<div class="overlay-bx ">
											<div class="overlay-icon align-b text-white text-left"> 
												<div class="text-white text-left port-box">
												<a href="{{url('http://mandetextos.com')}}" target="_blank"><h4 class="m-a0">Mandetextos</h4></a>
													<p>OnePage Website</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="corporativos card-container col-lg-4 col-md-4 col-sm-4 p-a0 wow zoomIn">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect ">
									<a href="javascript:void(0);">
									<picture>
                                        <source srcset="{{asset('images/portafolio/imagen-viaggi-2.webp')}}" type="image/webp">
                                            <img src="{{asset('images/portafolio/imagen-viaggi-2.jpg')}}" alt="Viaggi Group">
                                    </picture>
									</a>
										<div class="overlay-bx ">
											<div class="overlay-icon align-b text-white text-left"> 
												<div class="text-white text-left port-box">
												<a href="{{url('http://viaggigroup.co')}}" target="_blank"><h4 class="m-a0">Viaggi Group</h4></a>
													<p>Travel Website</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="corporativos card-container col-lg-4 col-md-4 col-sm-4 p-a0 wow zoomIn">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect ">
									<a href="javascript:void(0);">
									<picture>
                                        <source srcset="{{asset('images/portafolio/comfasalud.webp')}}" type="image/webp">
                                            <img src="{{asset('images/portafolio/comfasalud.jpg')}}" alt="IPS Comfasalud">
                                    </picture>
									</a>
										<div class="overlay-bx ">
											<div class="overlay-icon align-b text-white text-left"> 
												<div class="text-white text-left port-box">
												<a href="{{url('http://comfasalud.com')}}" target="_blank"><h4 class="m-a0">IPS Comfasalud</h4></a>
													<p>Medical Website</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="corporativos card-container col-lg-4 col-md-4 col-sm-4 p-a0 wow zoomIn">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect ">
									<a href="javascript:void(0);">
									<picture>
                                        <source srcset="{{asset('images/portafolio/duarteyjulio.webp')}}" type="image/webp">
                                            <img src="{{asset('images/portafolio/duarteyjulio.jpg')}}" alt="Duarte y Julio Consultores">
                                    </picture>
									</a>
										<div class="overlay-bx ">
											<div class="overlay-icon align-b text-white text-left"> 
												<div class="text-white text-left port-box">
												<a href="{{url('http://duarteyjulio.com')}}" target="_blank"><h4 class="m-a0">Duarte & Julio</h4></a>
													<p>Consulting Website</p>
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
@include('partials.schema')
<script>
        $(function () {
        $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
</body>
</html>
