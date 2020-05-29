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
                <div class="card-header">Profil</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2 class="text-center mb-2">Bonjour {{Auth::user()->name}} {{Auth::user()->prenom}}</h2>
                    <div class="row">
                        <div class="col">
                            @if ($errors->any())
                            <div class='alert alert-danger'>
                            @foreach ($errors->all() as $error)
                                <p>{{  $error  }}</p>
                            @endforeach
                            </div>
                            @enderror
                            @if(\Session::has('success'))
                            <div class='alert alert-success text-center'>
                                {{\Session::get('success')}}
                            </div>
                            @endif
                            <h6 class="text-center mb-2">Vous pouvez modifier votre profil ici</h6>
                            <form action="/profil/{{Auth::id()}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Name</label>
                                  <input type="text" name="name" value="{{Auth::user()->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Prenom</label>
                                    <input type="text" name="prenom" value="{{Auth::user()->prenom}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                  </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" value="{{Auth::user()->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                  </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password" name="password" value="{{Auth::user()->password}}" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="form-group">
                                    <label for="form10">Description profil</label>
                                    <textarea id="form10" class="form-control" name="description" rows="3">{{Auth::user()->description}}</textarea>
                                </div>
                                <!-- Collapse buttons -->
                                <div>
                                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    Cliquez ici si vous voulez changer l'image
                                    </a>
                                </div>
                                <!-- / Collapse buttons -->
                                
                                <!-- Collapsible element -->
                                <div class="collapse" id="collapseExample">
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-5">Editer</button>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="text-center mt-2">
                    @if (Storage::disk('public')->has(Auth::user()->img))
                        <img width="100px" height="100px" src="{{asset('storage/'.Auth::user()->img)}}" alt="">
                    @else
                        <img width="100px" height="100px" src="{{Auth::user()->img}}" alt="">
                    @endif
                </div>
                <div class="card-body">
                  <h5 class="card-title text-center">{{Auth::user()->name}} {{Auth::user()->prenom}}</h5>
                  <h6 class="text-center">{{Auth::user()->email}}</h6>
                  <p>{{Auth::user()->description}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
   @include('templates.script')
@endsection

