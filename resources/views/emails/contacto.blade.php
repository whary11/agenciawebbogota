
@component('mail::message')
# Nuevo Registro

Hay un nuevo registro de usuario:
<br>

##### Nombre: {{$contacto->nombre}}
##### Teléfono: {{$contacto->telefono}}
##### Correo electrónico: {{$contacto->email}}
##### Canal: {{$contacto->canal}}

##### Mensaje: {{$contacto->mensaje}}
<br>
Gracias,<br>
{{ config('app.name') }}
@endcomponent
