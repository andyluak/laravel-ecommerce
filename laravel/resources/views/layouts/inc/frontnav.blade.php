<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
		<a class="navbar-item text-light" href="{{url('/')}}">Shop</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav ms-auto">
			<li class="nav-item">
			<a class="nav-link" href="{{url('/produs')}}">Produse</a>
			</li>
			{{-- If user is logged in show the login else logout --}}
			@if(Auth::check())
			<li class="nav-item"><a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
				document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
					@csrf
				</form>
			</li>
			<li class="nav-item">
				<a href="{{url('cart')}}" class="nav-link">Cart</a>
			</li>
			{{-- End if statement --}}
			@else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
			@endif
		</ul>
		</div>
	</div>
  </nav>