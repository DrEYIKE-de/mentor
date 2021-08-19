@component('mail::message')

Bonjour {{ $user->name }}

Bienvenue sur la plateforme Mentor, est une plateforme académique conçue dans le but d'améliorer l'accès aux formations professionelles 
des differentes universités, facultés et écoles de formation au Cameroun.

Vos informations enregistrees sur le site :

Votre nom d'utilisateur : {{ $user->username }}

Email : {{ $user->email }}

Votre mot de passe de recuperation: {{ $user->password }}


Ces informations sont particulierement sensibles, Priere de ne  pas les divulguer.

Thanks,<br>

De Mentor , {{ now() }};
@endcomponent
