    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
		<div class="container-fluid py-1 px-3">

			<h6 class="font-weight-bolder mb-0">Tables</h6>
		  <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
			<div class="ms-md-auto pe-md-3 d-flex align-items-center">
			</div>
			<ul class="navbar-nav  justify-content-end">
			  <li class="nav-item d-flex align-items-center">
				<a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
				  <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
					document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
						@csrf
					</form>
				</li>
				</a>
			  </li>
			</ul>
		  </div>
		</div>
	  </nav>
	  <!-- End Navbar -->