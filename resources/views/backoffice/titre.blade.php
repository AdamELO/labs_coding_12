@extends('templates.dashboard')
@section('content')
    <div class="container-fluid">
        <section class="section card mb-5">
            <h2 class="h1-responsive font-weight-bold green-text text-center my-4">Edit Titres</h2>
            <h5 class="text-center">ps: Vous pouvez ajouter des parentheses pour mettre le style span du template</h5>
            <div class="row">

                <div class="col-md-12 mb-md-0 mb-5">
                    <form id="contact-form" class="container" action='{{ route('titre.update',$titre) }}' method="post">
                        @csrf
                        @method('put')
                        <div class="row">

                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" value="{{$titre->presentation}}" id="email" name="presentation"
                                        class="form-control">
                                    <label for="email" class="">Titre présentation </label>
                                </div>
                            </div>
                            <div class=" col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" value="{{$titre->testimonial}}" id="email" name="testimonial"
                                        class="form-control">
                                    <label for="email" class="">Titre testimonial </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" value="{{$titre->service}}" id="email" name="service"
                                        class="form-control">
                                    <label for="email" class="">Titre service </label>
                                </div>
                            </div>
                            <div class=" col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" value="{{$titre->team}}" id="email" name="team"
                                        class="form-control">
                                    <label for="email" class="">Titre team </label>
                                </div>
                            </div>
                            <div class=" col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" value="{{$titre->contact}}" id="email" name="contact"
                                        class="form-control">
                                    <label for="email" class="">Titre contact </label>
                                </div>
                            </div>
                            <div class=" col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" value="{{$titre->serviceprim}}" id="email" name="serviceprim"
                                        class="form-control">
                                    <label for="email" class="">Titre service primé </label>
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