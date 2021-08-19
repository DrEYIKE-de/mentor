@component('mail::message')


Bonjour,



Vous avez recu un message de la part de {{ $data['name'] }},son email {{ $data['email']}}

{{ $data['message'] }}

Thanks,<br>

A Mentor , {{ now() }};
@endcomponent
