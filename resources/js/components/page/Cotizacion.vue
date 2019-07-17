<template>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 m-b30 wow fadeInUp" data-wow-delay="0.3s"
            v-for="(item, index) in servicios" :key="index">
            <div class="icon-bx-wraper bx-style-1 p-a30 center fly-box-ho">
                <img :src="item.imagen" alt="Modelo de landing page">
                <div class="icon-content">
                    <h4 class="dlab-tilte p-t30"> {{item.titulo}}<br><span
                            class="text-blue font-16">{{item.precio}}</span></h4>
                    <p v-html="item.descripcion"></p>
                    <a @click.prevent="servicio = item" data-toggle="modal" data-target="#exampleModal" href="#"
                        class="site-button radius-sm">Contratar</a>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title" id="exampleModalLabel"> {{servicio.titulo}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <p> {{servicio.descripcion}} </p>
                        </div>
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Nombre">
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Correo electrónico</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Correo electrónico">
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Teléfono</label>
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Teléfono">
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary " data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn text-white bg-primary">Contratar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                servicio: {},
                servicios: [{
                        titulo: 'Landing Pages',
                        descripcion: 'Diseñamos sus perfiles y anuncios publicitarios, creamos sus campañas, optimizamos su presupuesto y le garantizamos resultados',
                        precio: 'COP $120.000',
                        imagen: 'images/landing-page-modelo.jpg',
                        // icono: '<i class="fas fa-thumbs-up"></i>',
                    },
                    {
                        titulo: 'Página Web Sencilla',
                        descripcion: 'Diseño en HTML, CSS y JavaScript, 4 páginas internas, formulario de contacto, diseño adaptable',
                        precio: 'COP $450.000',
                        imagen: 'images/pagina-web-sencilla.jpg',
                        // icono: '<i class="fas fa-thumbs-up"></i>',
                    },
                    {
                        titulo: 'Página Administrable',
                        descripcion: 'Diseño en WordPres (CMS) con tema premium licenciado. Ideal para blogs y orientado a posicionamiento',
                        precio: 'COP $680.000',
                        imagen: 'images/pagina-web-administrable.jpg',
                        // icono: '<i class="fas fa-thumbs-up"></i>',
                    },
                    {
                        titulo: 'Página Corporativa',
                        descripcion: 'Incluye consola de administración, hosting y dominio, correos corporativos y optimización para seo',
                        precio: 'COP $850.000',
                        imagen: 'images/pagina-web-corporativa.jpg',
                        // icono: '<i class="fas fa-thumbs-up"></i>',
                    },
                    {
                        titulo: 'Tienda Online Básica',
                        descripcion: 'Diseño con WordPress y Woocomerce, hasta 50 artículos, pagos online, carrito de compras',
                        precio: 'COP $1.100.000',
                        imagen: 'images/tienda-online-basica.jpg',
                        // icono: '<i class="fas fa-thumbs-up"></i>',
                    },
                    {
                        titulo: 'Tienda Avanzada',
                        descripcion: 'Wordpress + Woocomerce, consola administrativa, pagos online y sistema de envíos e inventarios',
                        precio: 'COP $1.550.000',
                        imagen: 'images/tienda-online-avanzada.jpg',
                    },
                    {
                        titulo: 'Tienda Prestashop',
                        descripcion: 'Productos ilimitados, consola administrable, registro de usuarios, pagos online y carrito de compras',
                        precio: 'COP $1.550.000',
                        imagen: 'images/tienda-online-prestashop.jpg',
                    },
                    {
                        titulo: 'Portal Educativo',
                        descripcion: 'Sitios para instituciones educativas con sistemas inteligentes que superan a moodle y otras plataformas',
                        precio: 'COTIZAR',
                        imagen: 'images/pagina-educacion.jpg',
                    },
                    {
                        titulo: 'Sitio Web Inteligente',
                        descripcion: 'Aplicativos especiales, bases de datos, sistemas real-time, alojamiento VPS, sistemas programables',
                        precio: 'COTIZAR',
                        imagen: 'images/pagina-web-inteligente.jpg',
                    },

                ]
            }
        },
        mounted() {
            // $('#exampleModal').modal('show')
            console.log('Cotizador montado')
        },
        methods:{
            url(url){
                if (url) {
                    return `${location.hostname}/${url}`
                } else{
                   return location.hostname 
                }
                 
            }
        }
    }
</script>
<style>
    .bg-primary {
        background-color: #007bff !important;
    }
    .modal {
        margin-top: 50px !important;
    }
</style>