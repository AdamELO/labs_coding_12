@component('mail::message')
<h1>Bonjour monsieur/madame</h1>
<p>un article a été publié</p>
<h2>{{$article->titre}}</h2>
<p>{{\Str::limit($article->text, 60, $end='...') }}</p>

@component('mail::button', ['url' => 'localhost:8000/blog'])
Regardez vite !!!
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
