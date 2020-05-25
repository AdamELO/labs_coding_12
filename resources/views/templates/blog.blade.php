	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					@foreach ($articles->sortByDesc('date') as $article)
					<!-- Post item -->
					<div class="post-item">
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
							<p>{{\Str::limit($article->text, 400, $end='...') }}</p>
							<a href="/blog-post/{{$article->id}}" class="read-more">Read More</a>
						</div>
					</div>
					@endforeach
					<!-- Pagination -->
					<div class="page-pagination">
						@if (!isset($search))
                            {{$articles->links()}}
                        @endif
					</div>
				</div>
				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->
					<div class="widget-item">
						<form action="search" class="search-form">
							<input type="text" value="{{request()->search ?? ''}}" name="search" placeholder="Search">
							@if ($errors->any())
							<div class='alert alert-danger'>
							@foreach ($errors->all() as $error)
								<p>{{  $error  }}</p>
							@endforeach
							</div>
							@enderror
							<button class="search-btn"><i class="flaticon-026-search"></i></button>
						</form>
						<br>
						@if (request()->search)
                            <div>
                                <h4>{{count($articles)}} blog(s) trouvé(s)</h4>
                            </div>
						@endif
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Categories</h2>
						<ul>
							@foreach ($categories->sortBy('name') as $cate)
                            <li><a href="">{{$cate->name}}</a></li>
                        @endforeach
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul class="tag">
							@foreach ($tags->sortBy('name') as $item)
                            <li><a href="">{{$item->name}}</a></li>
                        	@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- page section end-->