<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Single Post -->
                <div class="single-post">
                    <div class="post-thumbnail">
                        <img src="{{$article->img_article}}" alt="">
                        <div class="post-date">
                            <h2>{{date('d', strtotime($article->date)) }}<h2>
                                <h3>{{date('M Y', strtotime($article->date)) }}</h3>
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="post-title">{{$article->titre}}</h2>
                        <div class="post-meta">
                            <a href="">
                                @foreach ($article->categories as $cate)
                                {{$cate->name}},  
                                @endforeach
                            </a>
                            <a href="">
                                @foreach ($article->tags as $tag)
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
                            <img src="{{$article->author->user->img}}" alt="">
                        </div>
                        <div class="author-info">
                            <h2>{{$article->author->user->name}} <span>{{$article->author->user->role->name}}</span></h2>
                            <p>{{$article->author->description}}</p>
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
                    <div class="row">
                        <div class="col-md-9 comment-from">
                            <h2>Leave a comment</h2>
                            <form class="form-class">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="name" placeholder="Your name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="email" placeholder="Your email">
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="text" name="subject" placeholder="Subject">
                                        <textarea name="message" placeholder="Message"></textarea>
                                        <button class="site-btn">send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <!-- Single widget -->
                <div class="widget-item">
                    <form action="#" class="search-form">
                        <input type="text" placeholder="Search">
                        <button class="search-btn"><i class="flaticon-026-search"></i></button>
                    </form>
                </div>
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