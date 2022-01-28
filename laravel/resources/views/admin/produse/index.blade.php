@extends('layouts.admin')

@section('content')
	<div class="card">
		<div class="card-header">
			<h4> Produse </h4>
		</div>
		<div class="card-body">
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nume</th>
						<th>Pret</th>
						<th>Img</th>
						<th>Descriere</th>
						<th>Descriere Completa</th>
						<th>Stare</th>
						<th>Oferta</th>
						<th>Noutati</th>
						<th>Actiuni</th>
					</tr>
				</thead>
				@foreach ($produse as $produs)
					<tr>
						<td>{{ $produs->id }}</td>
						<td>{{ $produs->produs_nume }}</td>
						<td>{{ $produs->produs_pret }}</td>
						<td>
							<img src="{{ asset( 'assets/uploads/produse/produs_img/' . $produs->produs_img) }} " width="100" height="100" alt="imagine">
						</td>
						<td>{{ $produs->produs_descriere }}</td>
						<td>{{ $produs->produs_descrierecompl }}</td>
						<td>{{ $produs->produs_stare }}</td>
						<td>{{ $produs->produs_oferta }}</td>
						<td>{{ $produs->produs_noutati }}</td>
						<td style="display:flex; flex-direction: column; gap:0.25rem">
							<a class="btn btn-primary" href="{{url('produse/edit-prod/' . $produs->id)}}">Modifica</a>
							<a class="btn btn-danger" href="{{url('produse/sterge-produs/' . $produs->id)}}">Sterge</a>
						</td>
					</tr>
				@endforeach
			</table>
		</div>
	</div>
@endsection