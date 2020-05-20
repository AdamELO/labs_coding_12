	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			@if (Storage::disk('public')->has($logo->logo))
			<img src={{asset('storage/'.$logo->logo)}} alt=""><!-- Logo -->
			@else
			<img src="{{$logo->logo}}" alt=""><!-- Logo -->
			@endif
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li class="{{ \Request::is('/') ? 'active' : '' }}"><a href="/">{{$menus->lien1}}</a></li>
				<li class="{{ \Request::is('services') ? 'active' : '' }}"><a href="/services">{{$menus->lien2}}</a></li>
				<li class="{{ \Request::is('blog') ? 'active' : '' }}"><a href="/blog">{{$menus->lien3}}</a></li>
				<li class="{{ \Request::is('contact') ? 'active' : '' }}"><a href="/contact">{{$menus->lien4}}</a></li>
				@if (Route::has('login'))
                    @auth
						<li class="{{ \Request::is('profil') ? 'active' : '' }}"><a href="{{ url('/profil') }}">Profil</a></li>
						<li class="{{ \Request::is('admin') ? 'active' : '' }}"><a href="{{ url('/admin') }}">Admin</a></li>
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }} <span class="caret"></span>
							</a>
		
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('logout') }}"
								   onclick="event.preventDefault();
												 document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>
		
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</div>
						</li>
                	@else
                        <li class="{{ \Request::is('login') ? 'active' : '' }}"><a href="{{ route('login') }}">Login</a></li>
                        @if (Route::has('register'))
                        	<li class="{{ \Request::is('register') ? 'active' : '' }}"><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
            	@endif
			</ul>
		</nav>
	</header>
	<!-- Header section end -->