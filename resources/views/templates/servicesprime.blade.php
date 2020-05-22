	<!-- features section -->
	<div class="team-section spad" id="serviceprime">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<?php
                    $test = preg_match('#\((.*?)\)#', $titre->serviceprim, $match);
                    if (!empty($match[0])) {
                    $mot =  $match[1];
                    $word = "($mot)";
                    $titre->serviceprim = str_replace($word, "<span>$mot</span>", $titre->serviceprim);
                    }
                ?>
				<h2>{!!$titre->serviceprim!!}</h2>
			</div>
			<div class="row">
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					<div class="icon-box light left">
						<div class="service-text">
							<h2>{{$servicesprime[0]->title}}</h2>
							<p>{{$servicesprime[0]->description}}</p>
						</div>
						<div class="icon">
							<i class="{{$servicesprime[0]->icon->icon}}"></i>
						</div>
					</div>
					<!-- feature item -->
					<div class="icon-box light left">
						<div class="service-text">
							<h2>{{$servicesprime[1]->title}}</h2>
							<p>{{$servicesprime[1]->description}}</p>
						</div>
						<div class="icon">
							<i class="{{$servicesprime[1]->icon->icon}}"></i>
						</div>
					</div>
					<!-- feature item -->
					<div class="icon-box light left">
						<div class="service-text">
							<h2>{{$servicesprime[2]->title}}</h2>
							<p>{{$servicesprime[2]->description}}</p>
						</div>
						<div class="icon">
							<i class="{{$servicesprime[2]->icon->icon}}"></i>
						</div>
					</div>
				</div>
				<!-- Devices -->
				<div class="col-md-4 col-sm-4 devices">
					<div class="text-center">
						<img src="/img/device.png" alt="">
					</div>
				</div>
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					<div class="icon-box light">
						<div class="icon">
							<i class="{{$servicesprime[3]->icon->icon}}"></i>
						</div>
						<div class="service-text">
							<h2>{{$servicesprime[3]->title}}</h2>
							<p>{{$servicesprime[3]->description}}</p>
						</div>
					</div>
					<!-- feature item -->
					<div class="icon-box light">
						<div class="icon">
							<i class="{{$servicesprime[4]->icon->icon}}"></i>
						</div>
						<div class="service-text">
							<h2>{{$servicesprime[4]->title}}</h2>
							<p>{{$servicesprime[4]->description}}</p>
						</div>
					</div>
					<!-- feature item -->
					<div class="icon-box light">
						<div class="icon">
							<i class="{{$servicesprime[5]->icon->icon}}"></i>
						</div>
						<div class="service-text">
							<h2>{{$servicesprime[5]->title}}</h2>
							<p>{{$servicesprime[5]->description}}</p>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center mt100">
				<a href="/services#blograpide" class="site-btn">{{$serviceprimbtn->btn}}</a>
			</div>
		</div>
	</div>
	<!-- features section end-->