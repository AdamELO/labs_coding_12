@extends('templates.dashboard')
@section('content')
    <div class="text-center">
        <h1 class="green-text mb-2">Mail</h1>
    </div>
    <div class="row">
        <div class="col-md-12 border-green">
            <h2 class="text-center">{{$mail->subject}}</h2>
            <h1 class="mb-4">Bonjour thelabs,</h1>
            <h4 class="mb-4">Je suis {{$mail->name}} 
            <br>voici mon email: {{$mail->email}}
            </h4>
            <h6>{{$mail->message}}</h6>
        </div>
    </div>
@endsection