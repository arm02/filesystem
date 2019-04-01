@extends('layouts.app')

@section('title')
Pemberkasan
@endsection
@section('content')
<div class="container">
	<div class="row">
		
		@foreach($data as $key)
<div class="col-md-4">
		<div class="card border-info mb-3" style="height: 300px;">
			<div class="card-header bg-transparent border-info">{{$key->dosen}}</div>
			<div class="card-body text-info">
				<h5 class="card-title" style="color: black;">{{$key->name}}</h5>
				<p class="card-text" style="color: black;">Bobot Sks : {{$key->sks}}</p>
			</div>
			<div class="card-footer bg-transparent border-info">
				<button class="button button2"style="float: right;">Lihat</button>
			</div>
		</div>
		</div>
		@endforeach
	
</div>
</div>

@endsection