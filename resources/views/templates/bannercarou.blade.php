	<!-- Intro Section -->
	<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
				@if (Storage::disk('public')->has($logo->logo))
				<img width="504px" height="148px" src={{asset('storage/'.$logo->logo)}} alt="">
				@else
				<img width="500px" src="{{$logo->logo}}" alt="">
				@endif
				<p>{{$slogan->title}}</p>
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
			@foreach ($bannercars as $bannercar)
				@if (Storage::disk('public')->has($bannercar->img))
					<div class="item  hero-item" data-bg={{asset('storage/'.$bannercar->img)}}></div>
				@else 
					<div class="item  hero-item" data-bg="{{$bannercar->img}}"></div>
				@endif
			@endforeach
		</div>
	</div>
	<!-- Intro Section -->