@component('mail::message')
<h1 class="text-center"> Bienvenue {{$user->name}}</h1>

{{ config('app.name') }}
@endcomponent
