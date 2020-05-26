<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Single Post -->
                <div class="single-post">
                    <div class="post-thumbnail">
                        @if (Storage::disk('public')->has($article->img_article))
                            <img src={{asset('storage/'.$article->img_article)}} alt="">
                        @else
                            <img src="{{$article->img_article}}" alt="">
                        @endif
                        <div class="post-date">
                            <h2>{{date('d', strtotime($article->date)) }}<h2>
                                <h3>{{date('M Y', strtotime($article->date)) }}</h3>
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="post-title">{{$article->titre}}</h2>
                        <div class="post-meta">
                            <a href="">
                                @foreach ($article->categories->shuffle()->splice(0,1) as $cate)
                                {{$cate->name}}  
                                @endforeach
                            </a>
                            <a href="">
                                @foreach ($article->tags->shuffle()->splice(0,3) as $tag)
                                {{$tag->name}},
                                @endforeach
                            </a>
                            <a href="">{{count($article->commentaires)}} Comments</a>
                        </div>
                       <p>{{$article->text}}</p>
                    </div>
                    <!-- Post Author -->
                    <div class="author">
                        <div class="avatar">
                            <img src="{{$article->user->img}}" alt="">
                        </div>
                        <div class="author-info">
                            <h2>{{$article->user->name}} <span>{{$article->user->role->name}}</span></h2>
                            <p>{{$article->user->description}}</p>
                        </div>
                    </div>
                    <!-- Post Comments -->
                    <div class="comments">
                        <h2>Comments ({{count($article->commentaires)}})</h2>
                        <ul class="comment-list">
                            @foreach ($article->commentaires as $commentaire)
                            <li>
                                <div class="avatar">
                                    <img src="{{$commentaire->user->img}}" alt="">
                                </div>
                                <div class="commetn-text">
                                    <h3>{{$commentaire->user->name}},| {{date('d M', strtotime($commentaire->created_at))}}, {{date('Y', strtotime($commentaire->created_at))}} | Reply</h3>
                                    <p>{{$commentaire->text}}</p>
                                </div>
                            </li>
                            @endforeach
                            <li>
                        </ul>
                    </div>
                    <!-- Commert Form -->
                    @if (Auth::check())
                            <div class="row">
                                <div class="col-md-9 comment-from">
                                    <h2>Leave a comment</h2>
                                    <form class="form-class"  action="/blog-post/{{$article->id}}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" value="{{Auth::user()->name}}" name="name" disabled class="disabled">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" value="{{Auth::user()->email}}" name="email" disabled class="disabled">
                                            </div>
                                            <div class="col-sm-12">
                                                <textarea name="text" placeholder="Message"></textarea>
                                                <button class="site-btn">send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @else
                            <a class="btn btn-info" href="/login">Veuillez vous connectez !</a>
                        @endif
                </div>
            </div>
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <!-- Single widget -->
                {{-- <div class="widget-item">
                    <form action="#" class="search-form">
                        <input type="text" placeholder="Search">
                        <button class="search-btn"><i class="flaticon-026-search"></i></button>
                    </form>
                </div> --}}
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                        @foreach ($article->categories->sortBy('name') as $cate)
                            <li><a href="">{{$cate->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Tags</h2>
                    <ul class="tag">
                        @foreach ($article->tags->sortBy('name') as $item)
                            <li><a href="">{{$item->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page section end-->