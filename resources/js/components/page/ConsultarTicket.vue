<template>
    <div class="col-md-12">
        <form v-if="!ticket" @submit.prevent="getTicket()">
            <div class="input-group mb-3 shadow-sm p-3 mb-5 bg-white rounded">
                <input type="text" class="form-control" placeholder="Escriba el número de ticket..."
                    v-model.number="num_ticket" required>
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Consultar</button>
                </div>
            </div>
        </form>
        <div class="" v-else>
            <div>
                <div v-if="error_mensaje.estado !=null "
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
                <!-- <div class="card-header bg-white">
                    Hay {{ticket.conversaciones.length}} conversaciones relacionadas al Ticket # {{num_ticket}}
                </div> -->
                <form @submit.prevent="sendConversacion()" v-if="ticket.estado == 'ABIERTO'">
                    <div class="input-group mb-3 shadow-sm p-3 mb-5 bg-white rounded">
                        <textarea type="text" class="form-control" placeholder="Continua la coversación...." required
                            v-model="mensaje"> </textarea>
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Enviar</button>
                        </div>
                    </div>
                </form>
                <div class="card-body" key="alguito">
                    <section v-for="(item, index) in ticket.conversaciones" :key="index">
                        <div class="media mt-4" v-if="item.rol == 'ADMIN'">
                            <!-- <div class="card"> -->
                            <img class="mr-3" src="/images/favicon.png" alt="Logo Agencia Web Bogotá">
                            <div class="media-body card shadow-sm" style="background-color:#007bff !important;">
                                <div class="card-body text-white ">
                                    <h5 class="mt-0 mb-1">Agencia Web Bogotá</h5>
                                    <p class="">{{item.created_at | moment("dddd, MMMM D de YYYY, h: mm: ss a")}}</p>
                                    <p>{{item.mensaje}}</p>
                                </div>
                            </div>
                            <!-- </div> -->
                        </div>

                        <div class="media mt-4" v-else>
                            <div class="media-body card" style="background-color:#e94861 !important;">
                                <div class="card-body text-white">
                                    <h5 class="">{{ticket.remitente}}</h5>
                                    <p class="">{{item.created_at | moment("dddd, MMMM D de YYYY, h: mm: ss a")}}</p>
                                    <p>
                                        {{item.mensaje}}
                                    </p>
                                </div>
                            </div>
                            <img class="ml-3"
                                src="https://community.auspost.com.au/ncsphoto/RgsDV95kF0ctrocRbk6AtiHqF68CRRupG_AVvDkfwBQCjmnGDYcr3kUaYwQaML3n"
                                alt="Logo Agencia Web Bogotá">
                        </div>

                    </section>
                </div>
            </div>
        </div>
        <pre>{{$data}}</pre>
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
                num_ticket: '',
                ticket: false,
            }
        },
        mounted() {

        },
        methods: {
            getTicket() {
                if (this.num_tikect == '') {
                    alert('Ticket invalido')
                } else {
                    axios.get('/ticket/numero_ticket/' + this.num_ticket)
                        .then((resp) => {
                            this.ticket = resp.data
                            console.log(resp.data);
                        })
                        .catch((error) => {

                        })
                    // console.log(this.num_ticket);
                }
            },
            sendConversacion() {
                if (this.mensaje.trim() == '') {
                    console.log('El mensaje es incorrecto.');

                } else {
                    let datos = {
                        mensaje: this.mensaje,
                        ticket_id: this.ticket.id
                    }
                    axios.post('/tickets/create/conversacion', datos)
                        .then((resp) => {
                            if (resp.data.status == 'success') {
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
                        num_ticket: this.num_ticket
                    })
                    .then((resp) => {
                        if (resp.data.status == 'success') {
                            // alert('Se cerró el Ticket..')
                            this.ticket.estado = "CERRADO"
                            // console.log(this.ticket.estado);
                        }
                        console.log(resp.data);
                        
                    })
                    .catch((error) => {})

            }
        }
    }
</script>
<style>
    .shadow-sm:hover {
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175) !important;
    }
</style>