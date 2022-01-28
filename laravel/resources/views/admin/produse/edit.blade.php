@extends('layouts.admin')

@section('content')
	<div class="card">
		<div class="card-header">
			<h4> Modifica Produs</h4>
		</div>
		<div class="card-body text-white">
			<form action="{{ url('modifica-produs/'. $produs->id)}}" method="POST" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				<div class="row">
					<div class="col-md-6">
						<label for=""> Name </label>
						<input value="{{ $produs->produs_nume}}" type="text" name="produs_nume" id="produs_nume" class="form-control"/>
					</div>
					<div class="col-md-6">
						<label for=""> Pret </label>
						<input value="{{ $produs->produs_pret}}" type="text" name="produs_pret" id="produs_pret" class="form-control"/>
					</div>
					@if ($produs->produs_img)
						<div class="col-md-6">
							<img src="{{ asset('assets/uploads/produse/produs_img/'.$produs->produs_img)}}" alt="" width="100px" height="100px">
						</div>
					@endif
					<div class="col-md-6">
						<label for=""> Img </label>
						<input value="{{ $produs->produs_img}}" type="file" name="produs_img" id="produs_img" class="form-control"/>
					</div>

					<div class="col-md-12">
						<label for=""> Descriere </label>
						<textarea  type="text" name="produs_descriere" id="produs_descriere" class="form-control" rows="3"> {{ $produs->produs_descriere}} </textarea>
					</div>
					<div class="col-md-12">
						<label for=""> Descriere Completa </label>
						<textarea type="text" name="produs_descrierecompl" id="produs_descrierecompl" class="form-control" rows="5"> {{ $produs->produs_descrierecompl}} </textarea>
					</div>
					<div class="col-md-6">
						<label for=""> Stare </label>
						<input value="{{ $produs->produs_stare}}" type="text" name="produs_stare" id="produs_stare" class="form-control"/>
					</div>
					<div class="col-md-6">
						<label for=""> Oferta </label>
						<input value="{{ $produs->produs_oferta}}" type="number" name="produs_oferta" id="produs_oferta" class="form-control"/>
					</div>
					<div class="col-md-6">
						<label for=""> Noutati </label>
						<input value="{{ $produs->produs_noutati}}" type="number" name="produs_noutati" id="produs_noutati" class="form-control"/>
					</div>
					<div class="col-md-12">
						<button type="submit" class="btn btn-primary"> Submit </button>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection