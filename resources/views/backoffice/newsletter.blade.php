@extends('templates.dashboard')

@section('content')
    <div class="container-fluid">
        <section class="section card">
            <div class="text-center">
                <h1 class="green-text mt-4">Newsletter</h1>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 text-center">
                    <h5 class="mb-2" >Invités inscrit à la newsletter (<strong>{{count($newsletters)}}</strong>)</h5 >
                    @foreach ($newsletters as $newsletter)
                        <p class="border">{{$newsletter->email}}</p> 
                    @endforeach
    
                </div>
                <div class="col-md-6 text-center">
                    <h5 class="mb-2" >Membres inscrit à la newsletter (<strong>{{count($users)}}</strong>)</h5 >
                    @foreach ($users as $user)
                        <p class="border">{{$user->name}}  &nbsp; &nbsp; {{$user->email}}</p> 
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection