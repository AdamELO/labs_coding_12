	<!-- Contact section -->
	<div class="contact-section spad fix" id="contact">
		<div class="container">
			<div class="row">
				<!-- contact info -->
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
						<?php
                        	$test = preg_match('#\((.*?)\)#', $titre->contact, $match);
                        	if (!empty($match[0])) {
                        	$mot =  $match[1];
                        	$word = "($mot)";
                        	$titre->contact = str_replace($word, "<span>$mot</span>", $titre->contact);
                        }
                    	?>	
						<h2>{!!$titre->contact!!}</h2>
					</div>
					<p>{{$contact->text}}</p>
					<h3 class="mt60">{{$contact->subtitle}}</h3>
					<p class="con-item">{{$contact->adresse}} <br> {{$contact->localite}} </p>
					<p class="con-item">{{$contact->phone}}</p>
					<p class="con-item">{{$contact->email}}</p>
				</div>
				<!-- contact form -->
				<div class="col-md-6 col-pull">
					<form class="form-class" id="con_form">
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
								<button class="site-btn">{{$contact->btn}}</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact section end-->