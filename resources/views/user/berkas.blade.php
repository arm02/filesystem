@extends('layouts.app')

@section('title')
Pemberkasan
@endsection
@section('content')
 <script type="text/javascript">
        $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>

<div class="container">
  <div class="row">
    <table id="example" class="ui celled table" style="width:100%">
  <thead>
    <tr>
      <th>No</th>
      <th>Judul</th>
      <th>Keterangan</th>
      <th>Action</th>
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