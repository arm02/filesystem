@extends('layouts.admin')
@section('title')
Edit Mata Kuliah
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card-header">Edit Mata Kuliah</div>
         <form action="{{url('matkul/update')}}" method="POST">
          <div class="form-group">
            <label for="formGroupExampleInput">Nama</label>
            <input type="text" class="form-control" name="name" value="{{$matkul->name}}" id="formGroupExampleInput" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Sks</label>
            <input type="text" class="form-control" name="sks" value="{{$matkul->sks}}" id="formGroupExampleInput" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Dosen</label>
            <input type="text" class="form-control" name="dosen" value="{{$matkul->dosen}}" id="formGroupExampleInput" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Kelas</label>
            <input type="text" class="form-control" name="class" value="{{$matkul->class}}" id="formGroupExampleInput" required>
          </div>
          @csrf
          <input type="hidden" name="id" value="{{$matkul->id}}">
          <button type="submit" class="btn btn-primary btn-md">Update</button>
        </form>
  </div>
</div>
@endsection