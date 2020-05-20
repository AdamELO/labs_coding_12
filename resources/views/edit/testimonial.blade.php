@extends('templates.dashboard')
@section('content')
<div class="container-fluid">
    <section class="section card mb-5">
        <h2 class="h1-responsive font-weight-bold green-text text-center my-4">Create Testimonials</h2>
        <div class="row">

            <!--Grid column-->
            <div class="col-md-12 mb-md-0 mb-5">
                <form id="contact-form" class="container"
                action='{{ route('testimonial.update',$testimonial->id) }}' method="POST" enctype="multipart/form-data" >
                    @csrf
                    @method('put')
                    <!--Grid row-->
                    <div class="row">
                        
                        <!--Grid column-->
                        <div class="col-md-4">
                            <div class="md-form mb-0">
                                <input type="text" value="{{$testimonial->name}}" id="email" name="name" class="form-control">
                                <label for="email" class="">Nom</label>
                            </div>
                        </div>
                        <div class=" col-md-4">
                            <div class="md-form mb-0">
                                <input type="text" value="{{$testimonial->prename}}" id="email" name="prename" class="form-control">
                                <label for="email" class="">Prénom</label>
                            </div>
                        </div>

                        <div class=" col-md-4">
                            <div class="md-form mb-0">
                                <input type="text" value="{{$testimonial->fonction}}" id="email" name="fonction" class="form-control">
                                <label for="email" class="">Fonction</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-12">
                            <div class="md-form">
                                <i class="fas fa-pencil-alt prefix"></i>
                                <textarea id="form10" class="md-textarea form-control" name="description" rows="3">{{$testimonial->description}}</textarea>
                                <label for="form10">Description</label>
                              </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->


                    <!--Grid row-->

                    
                     <!-- Collapse buttons -->
                     <div>
                        <a class="btn aqua-gradient" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Cliquez ici si vous voulez changer l'image
                        </a>
                    </div>
                    <!-- / Collapse buttons -->
                    
                    <!-- Collapsible element -->
                    <div class="collapse" id="collapseExample">
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="form-group">
                                    <input  type="file" name="img" class="form-control-file green-text" id="exampleFormControlFile1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Collapsible element -->

                    
                    <!-- Grid column -->
                    <div class="text-center">
                        <button type="submit" class="btn blue-gradient text-center">Editer</button>
                    </div>
                    <div class="status"></div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection