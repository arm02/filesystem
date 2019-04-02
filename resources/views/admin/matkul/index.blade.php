@extends('layouts.admin')
@section('title')
Admin
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
          <div class="table-responsive">
            <table class="table" id="example">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama</th>
                  <th>SKS</th>
                  <th>Dosen</th>
                  <th>Kelas</th>
                  <th colspan="2">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i= 1;
                $user = \App\MataKuliah::all();
                ?>
                @foreach($user as $q)
                <tr>
                  
                  <th scope="row">{{$i++}}</th>
                  <td>{{$q->name}}</td>
                  <td>{{$q->sks}}</td>
                  <td>{{$q->dosen}}</td>
                  <td>{{$q->class}}</td>
                   <td><a href="{{url('matkul/edit/'.$q->id)}}" class="btn btn-outline-warning btn-sm">Edit</a>
                   <a href="{{url('matkul/delete/'.$q->id)}}" onclick="return confirm('anda yakin untuk menghapusnya ?')" 
                     class="btn btn-outline-danger btn-sm">Delete</a></td>
                   </tr>
                   @endforeach
                 </tbody>
               </table>
             </div>
             <hr>
            <li class="list-group-item float-left">
              <a href="{{url('matkul/add')}}" class="btn btn-primary btn-md">Add</a>
            </li>
      </div>
    </div>
  </div>
@endsection