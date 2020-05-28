	<!-- newsletter section -->
	<div class="newsletter-section spad" id="newsletter">
		<div class="container">
			<div class="row">
				@if ($errors->any())
				<div class='alert alert-danger'>
				@foreach ($errors->all() as $error)
					<p>{{  $error  }}</p>
				@endforeach
				</div>
				@enderror
				@if(\Session::has('succes'))
				<div class='alert alert-success text-center'>
					{{\Session::get('succes')}}
				</div>
				@endif
				<div class="col-md-3">
					<h2>Newsletter</h2>
				</div>
				<div class="col-md-9">
					<!-- newsletter form -->
					@if (!Auth::check())
					<form action="{{route('newsletter.store')}}" method="POST" class="nl-form">
						@csrf
						<input type="text" name="email" placeholder="Your e-mail here">
						<button class="site-btn btn-2">Newsletter</button>
					</form>
					@else
						<h5> En tant que membre vous etes déjà inscrit à la newsletter</h5>
					@endif
				</div>
			</div>
		</div>
	</div>
	<!-- newsletter section end-->