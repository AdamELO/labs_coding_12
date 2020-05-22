	<!-- services card section-->
	<div class="services-card-section spad">
		<div id="blograpide" class="container">
			<div class="row">
				<!-- Single Card -->
				@foreach ($articles->sortByDesc('date') as $article)
                <div class="col-md-4 col-sm-6">
                    <div class="sv-card">
                        <div class="card-img">
                            <img src="{{$article->img_article}}" alt="">
                        </div>
                        <div class="card-text">
                            <h2>{{$article->titre}}</h2>
							<p>{{\Str::limit($article->text, 200, $end='...') }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
			</div>
		</div>
	</div>
	<!-- services card section end-->