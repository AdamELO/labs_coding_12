@extends('templates.dashboard')

@section('content')
<div class="container-fluid">
    <section class="section card mb-5">
        <h2 class="h1-responsive font-weight-bold green-text text-center my-4">Edit Présentation</h2>
        <div class="row">

            <!--Grid column-->
            <div class="col-md-12 mb-md-0 mb-5">
                <form id="contact-form" class="container"
                    action='{{ route('presentation.update',$presentation) }}' method="post" enctype="multipart/form-data" >
                    @csrf
                    @method('put')
                    <!--Grid row-->
                    <div class="row">
                        
                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" value="{{$presentation->lien}}" id="email" name="lien" class="form-control">
                                <label for="email" class="">Lien video</label>
                            </div>
                        </div>
                        <div class=" col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" value="{{$presentation->btn}}" id="email" name="btn" class="form-control">
                                <label for="email" class="">Btn text</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-12">
                            <div class="md-form">
                                <i class="fas fa-pencil-alt prefix"></i>
                                <textarea id="form10" class="md-textarea form-control" name="desc1" rows="3">{{$presentation->description1}}</textarea>
                                <label for="form10">Description 1</label>
                              </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-12">
                            <div class="md-form">
                                <i class="fas fa-pencil-alt prefix"></i>
                                <textarea id="form10" class="md-textarea form-control" name="desc2" rows="3">{{$presentation->description2}}</textarea>
                                <label for="form10">Description 2</label>
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
                                    <input  type="file" name="imgvideo" class="form-control-file green-text" id="exampleFormControlFile1">
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