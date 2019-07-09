<template>
    <form class="col-md-8" @submit.prevent="sendTicket()">
        <div class="alert-danger p-3 rounded" v-if="errors">
            <li v-for="(item, index) in errors.remitente" :key="index+1"> {{item}} </li>
            <li v-for="(item, index) in errors.email" :key="index+2"> {{item}} </li>
            <li v-for="(item, index) in errors.telefono" :key="index+3"> {{item}} </li>
            <li v-for="(item, index) in errors.mensaje" :key="index+4"> {{item}} </li>
        </div>
        <div class="alert-success p-3 rounded" v-if="respuesta">
            Su número de ticket es {{respuesta.num_ticket}}, atenderemos con la mayor brevedad.
        </div>
        <div class="form-group">
            <label for="remitente">Remitente</label>
            <input type="text" v-model="ticket.remitente" class="form-control" id="remitente"
                aria-describedby="emailHelp" placeholder="Remitente">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" v-model="ticket.email" class="form-control" id="email" aria-describedby="emailHelp"
                placeholder="Email">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div class="form-group">
            <label for="tel">Telefono</label>
            <input type="number" v-model="ticket.telefono" class="form-control" id="tel" aria-describedby="emailHelp"
                placeholder="Telefono">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div class="form-group">
            <label for="tel">Compañía</label>
            <input type="compania" v-model="ticket.compania" class="form-control" id="tel" aria-describedby="emailHelp"
                placeholder="Compañía">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div class="form-group">
            <label for="mensaje">Mensaje</label>
            <textarea class="form-control" v-model="ticket.mensaje" id="mensaje" rows="3"></textarea>
        </div>
        <button type="submit" class="btn text-white bg-primary btn-block">Enviar Ticket</button>
    </form>

</template>

<script>
    export default {
        data() {
            return {
                errors: false,
                ticket: {},
                respuesta: false
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