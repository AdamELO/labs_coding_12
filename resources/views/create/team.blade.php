@extends('templates.dashboard')
@section('content')
    <div class="container-fluid">
        <section class="section card mb-5">
            <h2 class="h1-responsive font-weight-bold green-text text-center my-4">Create Team Mate</h2>
            <p class="text-center">PS: Pour CEO il faut l'écrire en majuscule</p>
            <div class="row">
                @if ($errors->any())
                <div class='alert alert-danger'>
                    @foreach ($errors->all() as $error)
                    <p>{{  $error  }}</p>
                    @endforeach
                </div>
                @enderror
                <div class="col-md-12 mb-md-0 mb-5">
                    <form id="contact-form" class="container" action='{{ route('team.store') }}' method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="name" class="form-control">
                                    <label for="email">Nom </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="prename" class="form-control">
                                    <label for="email">Prénom </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="fonction" class="form-control">
                                    <label for="email">Fonction </label>
                                </div>
                            </div>

                            <!-- Collapsible element -->
                            <div class="col-12 mt-5">
                                <div class="form-group">
                                    <input type="file" name="img" class="form-control-file green-text"
                                        id="exampleFormControlFile1">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn blue-gradient text-center">Creer</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection