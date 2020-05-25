@extends('templates.dashboard')
@section('content')
    <div class="container-fluid">
        <section class="section card mb-5">
            <h2 class="h1-responsive font-weight-bold green-text text-center my-4">Create article</h2>
            <h4 class="text-center my-4">Ps: Pour les tags et catégories vous pouvez en choisir plusieurs en faisant ctrl+click </h4>
            <div class="row">
                <div class="col-md-12 mb-md-0 mb-5">
                    <form id="contact-form" class="container" action='{{ route('article.store') }}' method="post" enctype="multipart/form-data">
                        @csrf
                        @if ($errors->any())
                        <div class='alert alert-danger'>
                        @foreach ($errors->all() as $error)
                            <p>{{  $error  }}</p>
                        @endforeach
                        </div>
                        @enderror
                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="titre"
                                        class="form-control">
                                    <label for="email">Titre </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="date" id="email" name="date"
                                        class="form-control">
                                    <label for="email">Date </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <p>Auteur : vous</p>
                                    <select name='author' class="browser-default disabled custom-select">
                                        <option value='{{Auth::id()}}'>
                                            {{Auth::user()->name}}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <p>Tags</p>
                                    <select name='tags[]' multiple class="browser-default custom-select">
                                        @foreach ($tags as $tag)
                                        <option value='{{$tag->id}}'>
                                            {{$tag->name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mt-5 mb-5">
                                <div class="md-form mb-0">
                                    <p>Catégories</p>
                                    <select name='cate[]' multiple class="browser-default custom-select">
                                        @foreach ($categories as $categorie)
                                        <option value='{{$categorie->id}}'>
                                            {{$categorie->name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="md-form">
                                    <i class="fas fa-pencil-alt prefix"></i>
                                    <textarea id="form10" class="md-textarea form-control" name="text" rows="3"></textarea>
                                    <label for="form10">Text</label>
                                  </div>
                            </div>
                            
                            <!-- Collapsible element -->
                            <div class="col-12">
                                <div class="form-group">
                                    <input  type="file" name="img" class="form-control-file green-text" id="exampleFormControlFile1">
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