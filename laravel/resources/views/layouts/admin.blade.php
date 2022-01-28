<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	  <!--     Fonts and icons     -->
	  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
	  <!-- Nucleo Icons -->
	  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
	  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
	  <!-- Font Awesome Icons -->
	  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
	  <!-- Material Icons -->
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
	  <!-- CSS Files -->
	  <link id="pagestyle" href="{{asset('admin/css/material-dashboard.css')}}" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
	@include('layouts.inc.sidebar')
	<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
		@include('layouts.inc.adminnav')
		<div class="container-fluid py-4">
			@yield('content')
		</div>
	</main>
	<script src="{{asset('admin/js/core/popper.min.js')}}" defer> </script>
	<script src="{{asset('admin/js/core/bootstrap.min.js')}}" defer> </script>
	<script src="{{asset('admin/js/plugins/perfect-scrollbar.min.js')}}" defer> </script>
	<script src="{{asset('admin/js/plugins/smooth-scrollbar.min.js')}}" defer> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	@yield('scripts')
</body>

</html>