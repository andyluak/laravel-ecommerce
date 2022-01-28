@extends('layouts.frontend')

@section('title')
	My Cart
@endsection

@section('content')
	<div class="container">

				@foreach ($cart_items as $product)
					<div class="cart shadow produs-data">
						<div class="card-body">
							<div class="row">
								<div class="col-md-2">
									<img src="{{ asset('assets/uploads/produse/produs_img/'.$product->products->produs_img) }}" alt="{{ $product->products->produs_nume }}" class="img-fluid">
								</div>
								<div class="col-md-5">
									<h4>{{ $product->products->produs_nume }}</h4>
									<p>{{ $product->products->produs_pret }}</p>
								</div>
								<div class="col-md-3">
									<input type="hidden" name="produs_id" value="{{$product->prod_id}}">
									<label for="quantity">Quantity</label>
									<input type="number" name="quantity" value="{{$product->prod_quantity}}" min="1" max="1000" />
								</div>
								<div class="col-md-2">
									<h3>Delete</h3>
								</div>
							</div>
						</div>
					</div>
				@endforeach


	</div>
@endsection
