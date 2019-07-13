<template>
    <div class="container">
        <consultar-ticket v-if="responder" :numm_ticket="numero_ticket"></consultar-ticket>
        <div class="row justify-content-center" v-else>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Tickets</div>

                    <div class="card-body">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Número de Ticket</th>
                                    <th>Remitente</th>
                                    <th>Teléfono</th>
                                    <th>Compañía</th>
                                    <th>Correo</th>
                                    <th>Ver</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(item, index) in tickets" :key="index">
                                    <td> {{index + 1}} </td>
                                    <td> {{item.num_ticket}} </td>
                                    <td> {{item.remitente}} </td>
                                    <td> {{item.telefono}}</td>
                                    <td> {{item.compania}}</td>
                                    <td> {{item.email}}</td>
                                    <td> 
                                        <a :href="url(`tickets/${item.num_ticket}/view`)" @click.prevent="responder=true; numero_ticket=item.num_ticket"> Responder<span class="badge badge-primary">{{item.conversaciones.length}}</span></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
                tickets:[],
                responder:false,
                numero_ticket:''
            }
        },
        mounted() {
            console.log('Component mounted.')
            this.getTickets()
        },
        methods:{
            getTickets(){
                axios.get('tickets/get')
                .then( (resp)=> {
                    this.tickets = resp.data
                })
                .catch( (error)=> {
                })
            },
            url(link){
                if (link) {
                    return `${window.location.origin}/${link}`
                }
                return `${window.location.origin}`
            }
        }

    }
</script>
