@extends('templates.dashboard')

@section('content')
    <div class="container-fluid">
        <section class="section card">
            <div class="text-center">
                <h1 class="green-text mt-4 mb-4">Changer le role</h1>
            </div>
            @foreach ($users->sortBy('role_id') as $user)
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-3">{{$user->name}} {{$user->prenom}}</div>
                    <div class="col-3">{{$user->email}}</div>
                    <div class="col-3">{{$user->role->name}}</div>
                    <div class="col-2">
                        <form action='roles/{{$user->id}}/edit' method="get">
                            @csrf
                            <button type="submit" class="btn-floating border-0 btn-lg sunny-morning-gradient text-white">
                                <i class="fas fa-edit text-white"></i>
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </section>
    </div>
@endsection