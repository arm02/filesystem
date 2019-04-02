@extends('layouts.admin')
@section('title')
Admin
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-9">
          <div class="table-responsive">
            <table class="table" id="example">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Kelas</th>
                  <th>Handphone</th>
                  <th>Role</th>
                  <th colspan="2">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i= 1;
                $user = \App\User::all()->where('role', '2');
                ?>
                @foreach($user as $q)
                <tr>
                  
                  <th scope="row">{{$i++}}</th>
                  <td>{{$q->name}}</td>
                  <td>{{$q->username}}</td>
                  <td>{{$q->email}}</td>
                  <td>{{$q->class}}</td>
                  <td>{{$q->handphone}}</td>
                  <td>{{$q->role}}</td>
                   <td><a href="{{url('dataadmin/edit/'.$q->id)}}" class="btn btn-outline-warning btn-sm">Edit</a>
                   <a href="{{url('dataadmin/delete/'.$q->id)}}" onclick="return confirm('anda yakin untuk menghapusnya ?')" 
                     class="btn btn-outline-danger btn-sm">Delete</a></td>
                   </tr>
                   @endforeach
                 </tbody>
               </table>
             </div>
             <hr>
              <a href="{{url('dataadmin/add')}}" class="btn btn-primary btn-md float-right">Add</a>
      </div>
    </div>
  </div>
@endsection