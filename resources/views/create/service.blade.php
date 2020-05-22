@extends('templates.dashboard')
@section('content')
    <div class="container-fluid">
        <section class="section card mb-5">
            <h2 class="h1-responsive font-weight-bold green-text text-center my-4">Create Services</h2>
            <div class="row">
                @if ($errors->any())
                <div class='alert alert-danger'>
                @foreach ($errors->all() as $error)
                    <p>{{  $error  }}</p>
                @endforeach
                </div>
                @enderror
                <div class="col-md-12 mb-md-0 mb-5">
                    <form id="contact-form" class="container" action='{{ route('service.store') }}' method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="title"
                                        class="form-control">
                                    <label for="email">Titre </label>
                                </div>
                            </div>
                            <div class="col-md-12 mt-5 mb-5">
                                <div class="md-form mb-0">
                                    <select name='icon_id' onchange="afficher(this)" class="browser-default custom-select">
                                        @foreach ($icons as $icon)
                                        <option value="{{$icon->id}}">{{$icon->icon}}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-center">
                                        <div id="titre" style="font-size:80px;"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="md-form">
                                    <i class="fas fa-pencil-alt prefix"></i>
                                    <textarea id="form10" class="md-textarea form-control" name="description" rows="3"></textarea>
                                    <label for="form10">Description</label>
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
    <script type="text/javascript">    
        function afficher(X) {
        I = X.selectedIndex ;        
        if ( I == 0 ) { titre.className = X.options[I].text }
        titre.className = X.options[I].text;
        }
    </script> 
@endsection