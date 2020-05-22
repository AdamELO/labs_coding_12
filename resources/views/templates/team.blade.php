	<!-- Team Section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<?php
                    $test = preg_match('#\((.*?)\)#', $titre->team, $match);
                    if (!empty($match[0])) {
                    $mot =  $match[1];
                    $word = "($mot)";
                    $titre->team = str_replace($word, "<span>$mot</span>", $titre->team);
                    }
                    ?>
				<h2>{!!$titre->team!!}</h2>
			</div>
			<div class="row">
				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						@if (Storage::disk('public')->has($teaams[0]->img))
						<img src={{asset('storage/'.$teaams[0]->img)}} alt="">
						@else 
							<img src="{{$teaams[0]->img}}" alt="">
						@endif
						<h2>{{$teaams[0]->prename}} <span>{{$teaams[0]->name}}</span></h2>
						<h3>{{$teaams[0]->fonction}}</h3>
					</div>
				</div>
				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						@if (Storage::disk('public')->has($teams->img))
						<img src={{asset('storage/'.$teams->img)}} alt="">
						@else 
							<img src="{{$teams->img}}" alt="">
						@endif
						<h2>{{$teams->prename}} <span>{{$teams->name}}</span></h2>
						<h3>{{$teams->fonction}}</h3>
					</div>
				</div>
				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						@if (Storage::disk('public')->has($teaams[1]->img))
						<img src={{asset('storage/'.$teaams[1]->img)}} alt="">
						@else 
							<img src="{{$teaams[1]->img}}" alt="">
						@endif
						<h2>{{$teaams[1]->prename}} <span>{{$teaams[1]->name}}</span></h2>
						<h3>{{$teaams[1]->fonction}}</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Team Section end-->
