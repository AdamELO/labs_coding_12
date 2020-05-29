@extends('templates.dashboard')
@section('content')
    <div class="container-fluid">
        <section class="section card mb-5">
            <h2 class="h1-responsive font-weight-bold green-text text-center my-4">Changer le role </h2>
            <div class="row">

                <div class="col-md-12 mb-md-0 mb-5">
                    <form id="contact-form" class="container" action='{{ route('roles.update',$user->id) }}' method="post">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-12 mt-5 mb-5">
                                <h5>Changement de role pour {{$user->name}} {{$user->prenom}}</h5>
                                <div class="md-form mb-0">
                                    <select name="role_id" id="">
                                        @foreach ($roles as $role)
                                        <option {{$role->id == $user->role_id ? "selected" : ""}} value="{{$role->id}}">{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn blue-gradient text-center">Editer</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection