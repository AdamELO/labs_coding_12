@extends('templates.dashboard')

@section('content')
    <div class="container">
        <div class="text-center">
            <h1 class="green-text">Articles</h1>
            <h6>Ps: pour publier un article vous devez check la checkbox en mode Webmaster (dans edit)</h6>
            <a class="btn-floating btn-lg dusty-grass-gradient text-white" href='article/create'>
                <i class="fas fa-plus text-white"></i>
            </a>
        </div>
        <div class="row">
            @foreach ($articles->sortByDesc('created_at') as $article)
            <div class="col-md-4 mb-4">
                <!-- Card -->
                <div class="card profile-card">
                  <!-- Avatar -->
                  <div class="white d-flex justify-content-center align-items-center border border-success p-5 mb-4">
                    @if (Storage::disk('public')->has($article->img_article))
                        <img src={{asset('storage/'.$article->img_article)}} alt="">
                    @else
                        <img src="{{$article->img_article}}" alt="">
                    @endif
                  </div>
        
                  <div class="card-body pt-0 mt-0">
        
                    <!-- Name -->
                    @if ($article->accept == "unchecked")
                        <h6 class="text-danger">L'article n'est pas encore publié</h6>
                    @else
                        <h6 class="text-success">L'article est publié</h6>
                    @endif
                    <h3 class="mb-3 font-weight-bold text-info"><strong>{{$article->titre}}</strong></h3>
                    <div class="d-flex">
                        <h6>{{date('d M Y', strtotime($article->date)) }} &nbsp; </h6>
                        <h6> {{$article->user->name}}</h6>
                    </div>
                    <h6> Catégories:
                        @foreach ($article->categories as $cate)
                        {{$cate->name}}  
                        @endforeach
                    </h6>
                    <h6> Tags :
                        @foreach ($article->tags as $tag)
                        {{$tag->name}}  
                        @endforeach
                    </h6>
                    <p class="mt-4 text-muted">{{\Str::limit($article->text, 70, $end='...') }}</p>
                    <div class="row">
                        <div class="col-6 text-center">
                            <form action='article/{{$article->id}}/edit' method="get" class="text-center mb-3">
                                @csrf
                                <button type="submit" class="btn-floating border-0 btn-lg sunny-morning-gradient text-white">
                                    <i class="fas fa-edit text-white"></i>
                                </button>
                            </form>
                        </div>
                        <div class="col-6 text-center">
                            <form action='article/{{$article->id}}' method='POST'>
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn-floating border-0 btn-lg young-passion-gradient text-white"><i
                                        class="fas fa-trash-alt text-white"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                  </div>
        
                </div>
                <!-- Card -->
            </div>
            @endforeach
        </div>
        {{-- <div class="page-pagination">
            {{$articles->links()}}
        </div> --}}
    </div>
@endsection