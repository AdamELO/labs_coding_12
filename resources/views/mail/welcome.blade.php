@component('mail::message')
<h1 class="text-center"> Bienvenue {{$data['name']}}</h1>

{{ config('app.name') }}
@endcomponent
