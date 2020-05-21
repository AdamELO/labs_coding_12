	<!-- About section -->
	<div class="about-section">
		<div class="overlay"></div>
		<!-- card section -->
		<div class="card-section">
			<div class="container">
				<div class="row">
					@foreach ($services1->shuffle()->slice(0,3) as $service)
					<!-- single card -->
					<div class="col-md-4 col-sm-6">
						<div class="lab-card">
							<div class="icon">
								<i class="{{$service->icon->icon}}"></i>
							</div>
							<h2>{{$service->title}}</h2>
							<p>{{$service->description}}</p>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<!-- card section end-->