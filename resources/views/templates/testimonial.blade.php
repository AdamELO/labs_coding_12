	<!-- Testimonial section -->
	<div class="testimonial-section pb100">
		<div class="test-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
					<div class="section-title left">
						<?php
                        $test = preg_match('#\((.*?)\)#', $titre->testimonial, $match);
                        if (!empty($match[0])) {
                        $mot =  $match[1];
                        $word = "($mot)";
                        $titre->testimonial = str_replace($word, "<span>$mot</span>", $titre->testimonial);
                        }
                    ?>
						<h2>{!!$titre->testimonial!!}</h2>
					</div>
					<div class="owl-carousel" id="testimonial-slide">
						@foreach ($testimonials as $testimonial)
						<!-- single testimonial -->
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
							<p>{{$testimonial->description}}</p>
							<div class="client-info">
								<div class="avatar">
									<img src="{{$testimonial->img}}" alt="">
								</div>
								<div class="client-name">
									<h2>{{$testimonial->name}} {{$testimonial->prename}}</h2>
									<p>{{$testimonial->fonction}}</p>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial section end-->