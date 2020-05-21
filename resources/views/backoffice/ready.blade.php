@extends('templates.dashboard')
@section('content')
    <div class="container-fluid">
        <section class="section card mb-5">
            <h2 class="h1-responsive font-weight-bold green-text text-center my-4">Edit Ready mini home banner</h2>
            <div class="row">

                <div class="col-md-12 mb-md-0 mb-5">
                    <form id="contact-form" class="container" action='{{ route('ready.update',$ready) }}' method="post">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-4">
                                <div class="md-form mb-0">
                                    <input type="text" value="{{$ready->title}}" id="email" name="title"
                                        class="form-control">
                                    <label for="email" class="">Titre</label>
                                </div>
                            </div>
                            <div class=" col-md-4">
                                <div class="md-form mb-0">
                                    <input type="text" value="{{$ready->subtitle}}" id="email" name="subtitle"
                                        class="form-control">
                                    <label for="email" class="">Sous-Titre </label>
                                </div>
                            </div>
                            <div class=" col-md-4">
                                <div class="md-form mb-0">
                                    <input type="text" value="{{$ready->btn}}" id="email" name="btn"
                                        class="form-control">
                                    <label for="email" class="">Texte du btn </label>
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