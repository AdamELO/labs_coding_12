@extends('templates.dashboard')
@section('content')
    <div class="container">
        <div class="text-center ">
            <h1 class="green-text mt-4">Testimonials</h1>
            <p>PS : les temoignages sont trier par ordre de creation (du plus recent au plus ancien)</p>
            <a class="btn-floating btn-lg dusty-grass-gradient text-white" href="testimonial/create">
                <i class="fas fa-plus text-white"></i>
            </a>
        </div>
        <div class="row mt-5">
            @foreach ($testimonials->sortBy('created_at') as $testimonial)
            <div class="col-4 mb-3">
                <div class="card" style="width: 18rem;">
                    @if (Storage::disk('public')->has($testimonial->img))
                        <img class="card-img-top" src={{asset('storage/'.$testimonial->img)}} alt="">
                    @else 
                        <img class="card-img-top" src="{{$testimonial->img}}" alt="Card image cap">
                    @endif
                    <div class="card-body">
                    <h5 class="card-title">{{$testimonial->name}} {{$testimonial->prename}}</h5>
                    <h6 class="card-title">{{$testimonial->fonction}}</h6>
                    <p class="card-text">{{$testimonial->description}}</p>
                    <div class="row">
                        <div class="col-6 text-center">
                            <form action='testimonial/{{$testimonial->id}}/edit' method="get">
                                <button type="submit" class="btn-floating border-0 sunny-morning-gradient text-white">
                                    <i class="fas fa-edit text-white"></i>
                                </button>
                            </form>
                        </div>
                        <div class="col-6 text-center">
                            <form action='testimonial/{{$testimonial->id}}' method='POST'>
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn-floating border-0 young-passion-gradient text-white"><i
                                        class="fas fa-trash-alt text-white"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection