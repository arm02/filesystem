@extends('layouts.app')

@section('title')
Pemberkasan
@endsection
@section('content')
<div class="container">
	<div class="row">
		@foreach($data as $key)
		<div class="card border-info mb-3" style="max-width: 18rem;">
			<div class="card-header bg-transparent border-info">{{$key->dosen}}</div>
			<div class="card-body text-info">
				<h5 class="card-title">{{$key->name}}</h5>
				<p class="card-text">Bobot Sks : {{$key->sks}}</p>
			</div>
			<div class="card-footer bg-transparent border-info">
				<button class="btn btn-info">Lihat</button>
			</div>
		</div>
		@endforeach
	</div>

</div>

@endsection