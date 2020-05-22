	<!-- Services section -->
	<div class="services-section spad" id="service">
		<div class="container">
			<div class="section-title dark">
				<?php
                    $test = preg_match('#\((.*?)\)#', $titre->service, $match);
                    if (!empty($match[0])) {
                    $mot =  $match[1];
                    $word = "($mot)";
                    $titre->service = str_replace($word, "<span>$mot</span>", $titre->service);
                    }
                ?>
				<h2>{!!$titre->service!!}</h2>
			</div>
			<div class="row">
				@foreach ($services as $service)
					<!-- single card -->
					<div class="col-md-4 col-sm-6">
						<div class="service">
							<div class="icon">
								<i class="{{$service->icon->icon}}"></i>
							</div>
							<div class="service-text">
								<h2>{{$service->title}}</h2>
								<p>{{$service->description}}</p>
							</div>
						</div>
					</div>
				@endforeach
			</div>
			<div class="text-center">
				<div class="page-pagination">
					{{$services->links()}}
				</div>
				<a href="services/#serviceprime" class="site-btn">Browse</a>
			</div>
		</div>
	</div>
	<!-- services section end -->