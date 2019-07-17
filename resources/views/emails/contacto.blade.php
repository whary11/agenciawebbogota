
@component('mail::message')
# Nuevo Registro

Tienes un nuevo registro de usuario:

## Nombre: {{$contacto->nombre}}
## Teléfono: {{$contacto->telefono}}
## Correo electrónico: {{$contacto->email}}
## Canal: {{$contacto->canal}}

{{$contacto->nombre}}

{{-- @component('mail::button', ['url' => ''])
Visitanos
@endcomponent --}}

Gracias,<br>
{{ config('app.name') }}
@endcomponent
