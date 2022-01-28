@extends('layouts.frontend')

@section('title')
	Welcome to shop
@endsection

@section('content')
	<h1> Welcome </h1>
	<div class="py-5">
		<div class="container">
			<div class="row align-items-start">
				<div class="col">
					<img class="img-fluid img-thumbnail rounded" src="{{asset('assets/uploads/produse/produs_img/' . $produs->produs_img)}}"  alt="product image" />
				</div>
				<div class="col produs-data">
					<h5> {{ $produs->produs_nume }} </h5>
					<small> {{ $produs->produs_pret }} lei </small>
					<p> {{ $produs->produs_descrierecompl }} </p>
					<small>Quantity</small>
					<input type="hidden" name="produs_id" value="{{ $produs->id }}">
					<input type="number" name="quantity" value="1" min="1" max="10" />
					<button class="btn btn-primary addToCartBtn">Add to cart</button>
				</div>
			</div>
		</div>
	</div>
@endsection