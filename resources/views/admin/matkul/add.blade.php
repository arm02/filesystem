@extends('layouts.admin')
@section('title')
Add Mata Kuliah
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
         <form action="{{url('matkul/save')}}" method="POST">
          <div class="form-group">
            <label for="formGroupExampleInput">Nama</label>
            <input type="text" class="form-control" name="name" id="formGroupExampleInput" 
            placeholder="Nama" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Sks</label>
            <input type="text" class="form-control" name="sks" id="formGroupExampleInput" 
            placeholder="SKS" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Dosen</label>
            <input type="text" class="form-control" name="dosen" id="formGroupExampleInput" 
            placeholder="Dosen" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Kelas</label>
            <input type="text" class="form-control" name="class" id="formGroupExampleInput" 
            placeholder="Kelas" required>
          </div>
          @csrf
          <button type="submit" class="btn btn-primary btn-md">Add</button>
        </form>
  </div>
</div>
@endsection