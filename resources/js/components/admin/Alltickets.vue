<template>
    <div class="container">
        <transition-group name="list" tag="p">
            <consultar-ticket v-if="responder" :numm_ticket="numero_ticket" :key="23"></consultar-ticket>
            <div class="row justify-content-center" v-else :key="24">
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
                                        <th>Estado</th>
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
                                        <td v-if="item.estado == 'ABIERTO'">
                                            <span class="badge badge-danger">{{item.estado}}</span>
                                        </td>
                                        <td v-if="item.estado == 'CERRADO'">
                                            <span class="badge badge-success">{{item.estado}}</span>
                                        </td>
                                        <td>
                                            <a href="#"
                                                @click.prevent="responder=true; numero_ticket=item.num_ticket">Resp<span
                                                    class="badge badge-primary">{{item.conversaciones.length}}</span></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </transition-group>

    </div>
</template>
<script>
    export default {
        data() {
            return {
                tickets: [],
                responder: false,
                numero_ticket: ''
            }
        },
        mounted() {
            this.getTickets()
        },
        methods: {
            getTickets() {
                axios.get('tickets/get')
                    .then((resp) => {
                        this.tickets = resp.data
                    })
                    .catch((error) => {})
            },
            url(link) {
                if (link) {
                    return `${window.location.origin}/${link}`
                }
                return `${window.location.origin}`
            }
        }

    }
</script>

<style>
    .bounce-enter-active {
        animation: bounce-in .5s;
    }

    .bounce-leave-active {
        animation: bounce-in .5s reverse;
    }

    @keyframes bounce-in {
        0% {
            transform: scale(0);
        }

        50% {
            transform: scale(1.5);
        }

        100% {
            transform: scale(1);
        }
    }



    .list-item {
        display: inline-block;
        margin-right: 10px;
    }

    .list-enter-active,
    .list-leave-active {
        transition: all 1s;
    }

    .list-enter,
    .list-leave-to

    /* .list-leave-active below version 2.1.8 */
        {
        opacity: 0;
        transform: translateY(30px);
    }
</style>