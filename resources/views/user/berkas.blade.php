@extends('layouts.app')

@section('title')
Pemberkasan
@endsection
@section('content')
<div class="container">
	<div class="row">
		<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@php
  		$i = 1;
  	@endphp
  	@foreach($data as $key)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$key->judul}}</td>
      <td>{{$key->keterangan}}</td>
      <td><a href="{{url('unduh/berkas/'.$key->file)}}" class="btn btn-success btn-sm">Unduh</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
	</div>
</div>
@endsection