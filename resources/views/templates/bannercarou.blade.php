	<!-- Intro Section -->
	<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
				@if (Storage::disk('public')->has($menus->logo))
				<img width="504px" height="148px" src={{asset('storage/'.$menus->logo)}} alt="">
				@else
				<img width="500px" src="{{$menus->logo}}" alt="">
				@endif
				<p>Get your freebie template now!</p>
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
			<div class="item  hero-item" data-bg="img/01.jpg"></div>
			<div class="item  hero-item" data-bg="img/02.jpg"></div>
		</div>
	</div>
	<!-- Intro Section -->