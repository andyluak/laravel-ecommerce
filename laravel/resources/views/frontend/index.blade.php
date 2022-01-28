@extends('layouts.frontend')

@section('title')
	Welcome to shop
@endsection

@section('content')
	<h1> Welcome </h1>
	<div class="py-5">
		<div class="container">
			<div class="row">
				@foreach ($products as $index => $produs)
					@if ( $index < 4 )
				<div class="col-md-3">
					<div class="card">
						<img src="{{asset('assets/uploads/produse/produs_img/' . $produs->produs_img)}}" alt="product image" />
						<div class="card-body">
							<a href="{{ url('produs/' .$produs->id) }}">
								<h5> {{ $produs->produs_nume }} </h5>
							</a>
							<small> {{ $produs->produs_pret }} lei </small>
						</div>
					</div>
				</div>
				@endif
				@endforeach
			</div>
		</div>
	</div>
@endsection