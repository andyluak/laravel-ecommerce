@extends('layouts.admin')

@section('content')
	<div class="card">
		<div class="card-header">
			<h4> Adauga Produs</h4>
		</div>
		<div class="card-body text-white">
			<form action="{{ url('adauga-produs')}}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-md-6">
						<label for=""> Name </label>
						<input type="text" name="produs_nume" id="produs_nume" class="form-control"/>
					</div>
					<div class="col-md-6">
						<label for=""> Pret </label>
						<input type="text" name="produs_pret" id="produs_pret" class="form-control"/>
					</div>
					<div class="col-md-6">
						<label for=""> Img </label>
						<input type="file" name="produs_img" id="produs_img" class="form-control"/>
					</div>
					<div class="col-md-12">
						<label for=""> Descriere </label>
						<textarea type="text" name="produs_descriere" id="produs_descriere" class="form-control" rows="3"> </textarea>
					</div>
					<div class="col-md-12">
						<label for=""> Descriere Completa </label>
						<textarea type="text" name="produs_descrierecompl" id="produs_descrierecompl" class="form-control" rows="5"> </textarea>
					</div>
					<div class="col-md-6">
						<label for=""> Stare </label>
						<input type="text" name="produs_stare" id="produs_stare" class="form-control"/>
					</div>
					<div class="col-md-6">
						<label for=""> Oferta </label>
						<input type="number" name="produs_oferta" id="produs_oferta" class="form-control"/>
					</div>
					<div class="col-md-6">
						<label for=""> Noutati </label>
						<input type="number" name="produs_noutati" id="produs_noutati" class="form-control"/>
					</div>
					<div class="col-md-12">
						<button type="submit" class="btn btn-primary"> Submit </button>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection