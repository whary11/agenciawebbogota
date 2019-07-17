<template>
    <form class="inquiry-form wow fadeInUp dzForm" data-wow-delay="0.2s" @submit.prevent="send()">
        <div v-html="mensaje"></div>
        <h3 class="box-title m-t0 m-b10">Contacte con Agencia Web Bogotá</h3>
        <p>Atenderemos su solicitud tan pronto como nos sea posible.</p>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="ti-user text-primary"></i></span>
                        <input name="dzName" type="text" required class="form-control" v-model="contacto.nombre"
                            placeholder="Nombre">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="ti-mobile text-primary"></i></span>
                        <input name="dzOther[Phone]" type="text" required class="form-control"
                            v-model="contacto.telefono" placeholder="Teléfono">
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="ti-email text-primary"></i></span>
                        <input name="dzEmail" type="email" class="form-control" v-model="contacto.email" required
                            placeholder="Correo Electrónico">
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="ti-agenda text-primary"></i></span>
                        <textarea name="dzMessage" rows="4" class="form-control" v-model="contacto.mensaje" required
                            placeholder="Háblenos acerca de su proyecto..."></textarea>
                    </div>
                </div>
            </div>
            <button name="submit" type="submit" value="Submit" class="site-button button-lg"> <span>¡LISTO!
                    ENVIAR</span> </button>
        </div>
        <div class="text-center p-t80">
            <a href="https://api.whatsapp.com/send?phone=573168785601" class="site-button btn-whatsapp"><i
                    class="fab fa-whatsapp"></i> ¡Pregúntenos por WhatsApp!</a>
            <a href="https://m.me/agenciawebbogota" class="site-button btn-messenger"><i
                    class="fab fa-facebook-messenger"></i> ¡Háblenos por Messenger!</a>
        </div>
    </form>
</template>

<script>
    export default {
        data() {
            return {
                contacto: {},
                mensaje: ''
            }
        },
        methods: {
            send() {
                axios.post('formcontacto/crear', this.contacto)
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