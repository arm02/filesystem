@extends('layouts.admin')
@section('title')
Edit Admin
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
         <form action="{{url('dataadmin/update')}}" method="POST">
          <div class="form-group">
            <input type="hidden" name="id" value="{{$user->id}}">
            <label for="formGroupExampleInput">Nama</label>
            <input type="text" class="form-control" name="name" value="{{$user->name}}" id="formGroupExampleInput" 
            placeholder="Nama" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Email</label>
            <input type="text" class="form-control" name="email" value="{{$user->email}}" id="formGroupExampleInput" 
            placeholder="Email" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Username</label>
            <input type="text" class="form-control" name="username" value="{{$user->username}}" id="formGroupExampleInput" 
            placeholder="Username" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Kelas</label>
            <input type="text" class="form-control" name="class" value="{{$user->class}}" id="formGroupExampleInput" 
            placeholder="Kelas" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">No.Handphone</label>
            <input type="text" class="form-control" name="handphone" value="{{$user->handphone}}" id="formGroupExampleInput" 
            placeholder="No.Handphone" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Role</label>
            <input type="password" class="form-control" name="role" value="{{$user->role}}" id="formGroupExampleInput" 
            placeholder="Role" required>
          </div>
          @csrf
          <button type="submit" class="btn btn-primary btn-md">Update</button>
        </form>
  </div>
</div>
@endsection