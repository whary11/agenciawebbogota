<template>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 m-b30 wow fadeInUp" data-wow-delay="0.3s"
            v-for="(item, index) in servicios" :key="index">
            <div class="icon-bx-wraper bx-style-1 p-a30 center fly-box-ho">


                <picture>
                    <source :srcset="item.webp" type="image/webp">
                    <!-- <img src="images/pagina-web-corporativa.jpg" alt="Modelo de página web Corporativa"> -->
                    <img :src="item.imagen" :alt="item.descripcion">
                </picture>
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
                    <div class="modal-header bg-primary-web">
                        <h5 class="modal-title" id="exampleModalLabel"> {{servicio.titulo}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <p v-if="servicio.textModal"> {{servicio.textModal}} </p>
                            <p v-else> {{servicio.descripcion}} </p>
                        </div>
                        <form @submit.prevent="contratar(servicio.textModal)">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Nombre" v-model="datos.nombre" required>
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Correo electrónico</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Correo electrónico" v-model="datos.email" required>
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Teléfono</label>
                                <input type="text" class="form-control" id="exampleInputPassword1"
                                    placeholder="Teléfono" v-model="datos.telefono" required>
                            </div>

                            <!-- <pre>{{$data.datos}}</pre> -->

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary " data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn text-white bg-secundary-web">Contratar</button>
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
                        precio: 'COP $250.000',
                        imagen: 'images/landing-page-modelo.jpg',
                        webp: 'images/landing-page-modelo.webp',
                        textModal: 'Incluye: Diseño a medida sin plantillas en html y css, página de agradecimiento o confirmación, formulario de contacto conectado a correo electrónico o base de datos.'
                        // icono: '<i class="fas fa-thumbs-up"></i>',
                    },
                    {
                        titulo: 'Página Web Sencilla',
                        descripcion: 'Diseño en HTML, CSS y JavaScript, 4 páginas internas, formulario de contacto, diseño adaptable',
                        precio: 'COP $600.000',
                        imagen: 'images/pagina-web-sencilla.jpg',
                        webp: 'images/pagina-web-sencilla.webp',
                        textModal: 'Incluye: Diseño a medida en html y css, 4 páginas internas para productos o servicios, formulario de contacto o cotización, hosting y dominio por un año.'
                        // icono: '<i class="fas fa-thumbs-up"></i>',
                    },
                    {
                        titulo: 'Página Administrable',
                        descripcion: 'Diseño en WordPres (CMS) con tema premium licenciado. Ideal para blogs y orientado a posicionamiento',
                        precio: 'COP $750.000',
                        imagen: 'images/pagina-web-administrable.jpg',
                        webp: 'images/pagina-web-administrable.webp',
                        textModal: 'Incluye: Tema WordPress con licencia, velocidad de carga optimizada, optimización para móviles, hosting y dominio por un año.'
                        // icono: '<i class="fas fa-thumbs-up"></i>',
                    },
                    {
                        titulo: 'Página Corporativa',
                        descripcion: 'Incluye consola de administración, hosting y dominio, correos corporativos y optimización para seo',
                        precio: 'COP $990.000',
                        imagen: 'images/pagina-web-corporativa.jpg',
                        webp: 'images/pagina-web-corporativa.webp',
                        textModal: 'Incluye: Tema WordPress Corporate con licencia, plugins premium para SEO, hosting, dominio y correos corporativos ilimitados por un año.'
                        // icono: '<i class="fas fa-thumbs-up"></i>',
                    },
                    {
                        titulo: 'Tienda Online Básica',
                        descripcion: 'Diseño con WordPress y Woocomerce, hasta 50 artículos, pagos online, carrito de compras',
                        precio: 'COP $1.200.000',
                        imagen: 'images/tienda-online-basica.jpg',
                        webp: 'images/tienda-online-basica.webp',
                        textModal: 'Incluye: WordPress + Woocommerce, hasta 50 artículos con ficha independiente, carrito de compras, integración con pagos online.'
                        // icono: '<i class="fas fa-thumbs-up"></i>',
                    },
                    {
                        titulo: 'Tienda Avanzada',
                        descripcion: 'Wordpress + Woocomerce, consola administrativa, pagos online y sistema de envíos e inventarios',
                        precio: 'COP $1.800.000',
                        imagen: 'images/tienda-online-avanzada.jpg',
                        webp: 'images/tienda-online-avanzada.webp',
                        textModal: 'Incluye: WordPress + Woocommerce, productos ilimitados, plugins envíos e inventarios, posicionamiento seo de productos.'
                    },
                    {
                        titulo: 'Tienda a Medida',
                        descripcion: 'Diseño a medida, productos ilimitados, registro de usuarios, pagos online y carrito de compras',
                        precio: 'Cotizar',
                        imagen: 'images/tienda-online-prestashop.jpg',
                        webp: 'images/tienda-online-prestashop.webp'
                    },
                    {
                        titulo: 'Portal Educativo',
                        descripcion: 'Sitios para instituciones educativas con sistemas inteligentes que superan a moodle y otras plataformas',
                        precio: 'COTIZAR',
                        imagen: 'images/pagina-educacion.jpg',
                        webp: 'images/pagina-educacion.webp'
                    },

                    {
                        titulo: 'Web Administrativa',
                        descripcion: 'Aplicativos especiales, bases de datos, sistemas real-time, alojamiento VPS, sistemas programables',
                        precio: 'COTIZAR',
                        imagen: 'images/pagina-web-inteligente.jpg',
                        webp: 'images/pagina-web-inteligente.webp'
                    },

                ],
                datos: {
                    nombre: '',
                    email:'',
                    telefono:''

                }
            }
        },
        mounted() {
            // $('#exampleModal').modal('show')
            console.log('Cotizador montado')
        },
        methods: {
            url(url) {
                if (url) {
                    return `${location.hostname}/${url}`
                } else {
                    return location.hostname
                }

            },
            contratar(d){
                this.datos.mensaje = d
                axios.post('formcontacto/crear', this.datos)
                    .then((resp) => {
                        if (resp.data.status) {
                            this.contacto = {}
                            this.mensaje =
                                `<div class="alert alert-success" role="alert">Ya tenemos su mensaje, pronto nos comunicaremos con usted.</div>`
                        } else {
                            this.mensaje =
                                `<div class="alert alert-danger" role="alert">Se ha presentado un falla inesperada, recarga el navegador e intentalo nuevamente.</div>`
                        }
                        console.log(resp.data);
                    })
                    .catch((error) => {
                        this.mensaje =
                            `<div class="alert alert-danger" role="alert">Se ha presentado un falla inesperada, recarga el navegador e intentalo nuevamente.</div>`
                    })
            }
        }
    }
</script>
<style>
    .bg-primary-web {
        background-color: #1795c5 !important;
    }

    .bg-secundary-web {
        background-color: #e94861 !important;
    }

    .modal {
        margin-top: 50px !important;
        /* border-radius: 10px !important; */

    }

    .modal-content {
        border-radius: 12px !important;

    }

    .modal-header {
        border-top-left-radius: 12px !important;
        border-top-right-radius: 12px !important;

    }
</style>