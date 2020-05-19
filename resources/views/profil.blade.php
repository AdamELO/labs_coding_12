@extends('templates.index')
@section('head')
   @include('templates.head')
@endsection
@section('nav')
   @include('templates.nav')
@endsection
@section('content')
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2>Bonjour {{Auth::user()->name}}</h2>
                    {{-- <h4>Voici votre rôle : {{Auth::user()->role->name}}</h4>
                    @Admin
                        <a class="btn btn-success" href="{{ url('/admin') }}">Acceder au Dashboard de l'admin</a>
                    @endAdmin
                    @if (Auth::user()->role_id != 1)
                        <p>Comme vous n'êtes pas Admin vous ne pouvez rien modifier <br> merci de vous être inscrit quand même</p>
                    @endif --}}
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br><br><br>
<br>
@endsection
@section('footer')
   @include('templates.footer')
@endsection
@section('script')
   @include('templates.script')
@endsection

