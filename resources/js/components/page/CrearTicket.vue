<template>

    <!-- <form class="col-md-8" @submit.prevent="sendTicket()">
        <div class="alert-danger p-3 rounded" v-if="errors">
            <li v-for="(item, index) in errors.remitente" :key="index+1"> {{item}} </li>
            <li v-for="(item, index) in errors.email" :key="index+2"> {{item}} </li>
            <li v-for="(item, index) in errors.telefono" :key="index+3"> {{item}} </li>
            <li v-for="(item, index) in errors.mensaje" :key="index+4"> {{item}} </li>
        </div>
        <div class="alert-success p-3 rounded" v-if="respuesta">
            Su número de ticket es {{respuesta.num_ticket}}, le atenderemos con la mayor brevedad.
        </div>
        <div class="form-group">
            <label for="remitente">Remitente</label>
            <input type="text" v-model="ticket.remitente" class="form-control" id="remitente"
                aria-describedby="emailHelp" placeholder="Remitente">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" v-model="ticket.email" class="form-control" id="email" aria-describedby="emailHelp"
                placeholder="Email">
        </div>
        <div class="form-group">
            <label for="tel">Telefono</label>
            <input type="number" v-model="ticket.telefono" class="form-control" id="tel" aria-describedby="emailHelp"
                placeholder="Telefono">
        </div>
        <div class="form-group">
            <label for="tel">Compañía</label>
            <input type="compania" v-model="ticket.compania" class="form-control" id="tel" aria-describedby="emailHelp"
                placeholder="Compañía">
        </div>
        <div class="form-group">
            <label for="mensaje">Mensaje</label>
            <textarea class="form-control" v-model="ticket.mensaje" id="mensaje" rows="3"></textarea>
        </div>
        <button type="submit" class="btn text-white bg-primary btn-block">Enviar Ticket</button>
    </form> -->

    

    <form class="inquiry-form wow fadeInUp dzForm" data-wow-delay="0.2s" @submit.prevent="sendTicket()" v-if="pagina=='crear'">
        <div class="alert-danger p-3 rounded" v-if="errors">
            <li v-for="(item, index) in errors.remitente" :key="index+1"> {{item}} </li>
            <li v-for="(item, index) in errors.email" :key="index+2"> {{item}} </li>
            <li v-for="(item, index) in errors.telefono" :key="index+3"> {{item}} </li>
            <li v-for="(item, index) in errors.mensaje" :key="index+4"> {{item}} </li>
        </div>
        <div class="alert-success p-3 rounded" v-if="respuesta">
            Su número de ticket es {{respuesta.num_ticket}}, le atenderemos con la mayor brevedad.
        </div>
        <h3 class="box-title m-t0 m-b10">Crear Ticket</h3>
        <p>Atenderemos su solicitud tan pronto como nos sea posible.</p>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="ti-user text-primary"></i></span>
                        <input name="dzName" type="text" v-model="ticket.remitente" required class="form-control"
                            placeholder="Nombre">
                    </div>
                </div>
            </div>
             <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="ti-email text-primary"></i></span>
                        <input name="compania" v-model="ticket.compania" type="text" class="form-control"
                            placeholder="Correo Electrónico">
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="ti-mobile text-primary"></i></span>
                        <input name="dzOther[Phone]" type="text" v-model="ticket.telefono" required class="form-control"
                            placeholder="Teléfono">
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="ti-layout-cta-center text-primary"></i></span>
                        <input name="dzEmail" v-model="ticket.email" type="email" class="form-control" required
                            placeholder="Correo Electrónico">
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="ti-agenda text-primary"></i></span>
                        <textarea name="dzMessage" v-model="ticket.mensaje" rows="3" class="form-control" required
                            placeholder="Háblenos acerca de su problema..."></textarea>
                    </div>
                </div>
            </div>
            <button name="submit" type="submit" value="Submit" class="site-button button-lg"> <span>¡LISTO!
                    ENVIAR</span> </button>
        </div>
    </form>
</template>

<script>
    export default {
        data() {
            return {
                errors: false,
                ticket: {},
                respuesta: false,
                pagina:'crear'
            }
        },
        methods: {
            sendTicket() {
                axios.post('tickets/create', this.ticket)
                    .then((resp) => {
                        if (resp.data.status) {
                            this.errors = false
                            this.respuesta = resp.data.data
                        }
                    })
                    .catch((error) => {
                        this.respuesta = false
                        this.errors = error.response.data.errors
                    })
            }
        }
    }
</script>


<style>
    .site-header {
        background-color: #000000 !important;
    }

    .bg-primary {
        background-color: #007bff !important;
    }

   
</style>