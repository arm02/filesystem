@extends('layouts.admin')
@section('title')
Add Admin
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
         <form action="{{url('dataadmin/save')}}" method="POST">
          <div class="form-group">
            <label for="formGroupExampleInput">Nama</label>
            <input type="text" class="form-control" name="name" id="formGroupExampleInput" 
            placeholder="Nama" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Email</label>
            <input type="text" class="form-control" name="email" id="formGroupExampleInput" 
            placeholder="Email" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Username</label>
            <input type="text" class="form-control" name="username" id="formGroupExampleInput" 
            placeholder="Username" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Kelas</label>
            <input type="text" class="form-control" name="class" id="formGroupExampleInput" 
            placeholder="Kelas" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">No.Handphone</label>
            <input type="text" class="form-control" name="handphone" id="formGroupExampleInput" 
            placeholder="No.Handphone" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Password</label>
            <input type="text" class="form-control" name="password" id="formGroupExampleInput" 
            placeholder="Password" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Role</label>
            <input type="text" class="form-control" name="role" id="formGroupExampleInput" 
            placeholder="Role" required>
          </div>
          @csrf
          <button type="submit" class="btn btn-primary btn-md">Add</button>
        </form>
  </div>
</div>
@endsection