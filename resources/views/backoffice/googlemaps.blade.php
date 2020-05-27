@extends('templates.dashboard')
@section('content')
    <div class="container-fluid">
        <section class="section card mb-5">
            <h2 class="h1-responsive font-weight-bold green-text text-center my-4">Edit Google maps</h2>
            <div class="row">

                <div class="col-md-12 mb-md-0 mb-5">
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
                    <form id="contact-form" class="container" action='/googlemaps/{{$google->id}}' method="post">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" value="{{$google->rue}}" id="email" name="rue"
                                        class="form-control">
                                    <label for="email" class="">Rue </label>
                                </div>
                            </div>
                            <div class=" col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" value="{{$google->ville}}" id="email" name="ville"
                                        class="form-control">
                                    <label for="email" class="">Ville</label>
                                </div>
                            </div>
                            <div class=" col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" value="{{$google->pays}}" id="email" name="pays"
                                        class="form-control">
                                    <label for="email" class="">Pays </label>
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