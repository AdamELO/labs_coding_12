@component('mail::message')
<h1 class="text-center"> Bienvenue {{$user->name}} {{$user->prenom}} </h1>

{{ config('app.name') }}
@endcomponent
