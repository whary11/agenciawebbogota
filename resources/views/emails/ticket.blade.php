@component('mail::message')
# Nuevo Ticket

Hola {{$ticket->remitente}}, se ha generado un nuevo ticket.
<br>

Estos son algunos datos para que pueda hacerle seguimineto a su ticket:

##### Número de Ticket: {{$ticket->num_ticket}}
##### Sitio para seguimineto: {{ url('/ticket/consultar', []) }}

<br>
Te responderemos pronto,<br>
{{ config('app.name') }}
@endcomponent
