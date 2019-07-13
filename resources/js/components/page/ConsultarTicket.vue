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
            <div class="card-header bg-white">
                Ticket # {{num_ticket}}
            </div>
            <form >
                <div class="input-group mb-3 shadow-sm p-3 mb-5 bg-white rounded">
                    <input type="text" class="form-control" placeholder="Continua la coversación...." required v-model="mensaje">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>
                </div>
            </form>
            <div class="card-body">
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
        <!-- <pre>{{$data}}</pre> -->
    </div>
</template>

<script>
    import {
        log
    } from 'util';
    export default {
        data() {
            return {
                mensaje: '',
                num_ticket: '6452488750',
                ticket: false,
            }
        },
        mounted() {
            console.log('Montado');

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
            }

        }

    }
</script>
<style>
    .shadow-sm:hover {
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175) !important;
    }
</style>