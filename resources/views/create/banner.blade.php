@extends('templates.dashboard')
@section('content')
<div class="container-fluid">
    @if ($errors->any())
    <div class='alert alert-danger'>
    @foreach ($errors->all() as $error)
        <p>{{  $error  }}</p>
    @endforeach
    </div>
    @enderror
    <section class="section card mb-5">
        <h2 class="h1-responsive font-weight-bold green-text text-center my-4">Create Banner</h2>
        <div class="row">

            <!--Grid column-->
            <div class="col-md-12 mb-md-0 mb-5">
                <form id="contact-form" class="container"
                    action='{{ route('banner.store') }}' method="post" enctype="multipart/form-data" >
                    @csrf

                    <!-- Collapse buttons -->
                    <div>
                        <a class="btn aqua-gradient" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Cliquez ici pour Choisir une Image
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
                    <!-- / Collapsible element -->

                    
                    <!-- Grid column -->
                    <div class="text-center">
                        <button type="submit" class="btn blue-gradient text-center">Creer</button>
                    </div>
                    <div class="status"></div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection