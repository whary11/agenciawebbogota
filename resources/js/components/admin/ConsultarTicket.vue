<template>
    <div class="col-md-12">
        <div class="" v-if="ticket.conversaciones">
            <div>
                <div v-if="ticket && error_mensaje.estado !=null"
                    :class="{'alert alert-primary':error_mensaje.estado, 'alert alert-danger':!error_mensaje.estado, }"
                    role="alert">
                    <span> {{error_mensaje.mensaje}} </span>
                </div>
                <div class="card-header bg-white" v-if="ticket.estado == 'ABIERTO'">
                    <button class="btn btn-danger" @click.prevent="cerrarTicket()">Cerrar Ticket</button>
                    <!-- Hay {{ticket.conversaciones.length}} conversaciones relacionadas al Ticket # {{numm_ticket}} -->
                </div>
                <div v-else class="card-header bg-white">
                    El tickt está cerrado
                </div>
                <form @submit.prevent="sendConversacion()" v-if="ticket.estado == 'ABIERTO'">
                    <div class="input-group mb-3 shadow-sm p-3 mb-5 bg-white rounded">
                        <textarea type="text" class="form-control" placeholder="Continua la coversación...." required
                            v-model="mensaje"> </textarea>
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Enviar</button>
                        </div>
                    </div>
                </form>
                <div class="card-body">
                    <section v-for="(item, index) in ticket.conversaciones" :key="index">
                        <!-- <template v-if="ticket.estado == 'ABIERTO'"> -->
                        <div class="media mt-4" v-if="item.rol == 'ADMIN'">
                            <!-- <div class="card"> -->
                            <img class="mr-3" src="/images/favicon.png" alt="Logo Agencia Web Bogotá">
                            <div class="media-body card shadow-sm" style="background-color:#59C6FF !important;">
                                <div class="card-body text-white ">
                                    <h5 class="mt-0 mb-1">Agencia Web Bogotá</h5>
                                    <p class="">
                                        {{item.created_at | moment("dddd, MMMM D de YYYY, h: mm: ss a")}}
                                    </p>
                                    <p>{{item.mensaje}}</p>
                                </div>
                            </div>
                            <!-- </div> -->
                        </div>
                        <div class="media mt-4" v-if="item.rol == 'REMITENTE'">
                            <div class="media-body card" style="background-color:#E872D4 !important;">
                                <div class="card-body text-white">
                                    <h5 class="">{{ticket.remitente}}</h5>
                                    <p class="">
                                        {{item.created_at | moment("dddd, MMMM D de YYYY, h: mm: ss a")}}
                                    </p>
                                    <p>
                                        {{item.mensaje}}
                                    </p>
                                </div>
                            </div>
                            <img class="ml-3"
                                src="https://community.auspost.com.au/ncsphoto/RgsDV95kF0ctrocRbk6AtiHqF68CRRupG_AVvDkfwBQCjmnGDYcr3kUaYwQaML3n"
                                alt="Logo Agencia Web Bogotá">
                        </div>
                        <!-- </template> -->

                    </section>
                </div>
            </div>
        </div>
        <!-- <pre>{{$data}}</pre> -->
    </div>
</template>

<script>
    export default {
        data() {
            return {
                error_mensaje: {
                    estado: null,
                    class: '',
                    mensaje: ''
                },
                mensaje: '',
                num_ticket: '6452488750',
                ticket: false,
            }
        },
        props: ['numm_ticket'],
        mounted() {
            this.num_ticket = window.location.pathname.split('/')[2]
            this.getTicket()

        },
        methods: {
            getTicket() {
                if (this.num_tikect == '') {
                    alert('Ticket invalido')
                } else {
                    axios.get('/ticket/numero_ticket/' + this.numm_ticket)
                        .then((resp) => {
                            this.ticket = resp.data
                            // console.log(resp.data);
                        })
                        .catch((error) => {

                        })
                }
            },
            sendConversacion() {
                if (this.mensaje.trim() == '') {
                    // console.log('El mensaje es incorrecto.');

                } else {
                    let datos = {
                        mensaje: this.mensaje,
                        ticket_id: this.ticket.id,
                        email:this.ticket.email
                    }
                    axios.post('/tickets/create/conversacion', datos)
                        .then((resp) => {
                            if (resp.data.status) {
                                this.ticket.conversaciones.unshift(resp.data.data)
                                this.mensaje = ''
                                this.error_mensaje.estado = true
                                this.error_mensaje.mensaje = 'Se ha creado una nueva conversación.'
                            } else {
                                this.error_mensaje.estado = false
                                this.error_mensaje.mensaje = 'Estamos presentando fallas.'
                            }

                        })
                        .catch((error) => {
                            this.error_mensaje.estado = false
                            this.error_mensaje.mensaje = 'Estamos presentando fallas.'
                        })
                }
            },
            cerrarTicket() {
                axios.put('/tickets/update', {
                        num_ticket: this.numm_ticket
                    })
                    .then((resp) => {
                        if (resp.data.status == 'success') {
                            this.ticket.estado = "CERRADO"
                            
                        }
                    })
                    .catch((error) => {})

            },
            url(){
                // console.log(localhost.hostname);
                 
            }
        }
    }
</script>
<style>
    .shadow-sm:hover {
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175) !important;
    }
</style>