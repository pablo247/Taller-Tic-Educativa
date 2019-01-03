@component('mail::message')
# {{ $data['name'] }} quiere contactarte.

Su correo es {{ $data['email'] }}

Y te dejó el siguiente mensaje:<br>
{{ $data['message'] }}

Gracias,<br>
{{ config('app.name') }}
@endcomponent
