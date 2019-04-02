<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\MataKuliah;
use \App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function admin_index()
    {
    	return view('admin.index');
    }

    public function index_matkul()
    {
    	return view('admin.matkul.index');
    }

    public function add_matkul()
    {
    	return view('admin.matkul.add');
    }
    
    public function save_matkul(Request $r)
    {
    	$n = new MataKuliah;
    	$n->name = $r->input('name');
    	$n->sks = $r->input('sks');
    	$n->dosen = $r->input('dosen');
    	$n->class = $r->input('class');
    	$n->save();
    	return redirect(url('/matkul'));
    }

    public function edit_matkul($id)
    {
    	$matkul = MataKuliah::find($id);
    	return view('admin.matkul.edit')->with('matkul',$matkul);
    }

    public function update_matkul(Request $r)
    {
    	$u = MataKuliah::find($r->input('id'));
    	$u->name = $r->input('name');
    	$u->sks = $r->input('sks');
    	$u->dosen = $r->input('dosen');
    	$u->class = $r->input('class');
    	$u->save();
    	return redirect(url('/matkul'));
    }

    public function delete_matkul($id)
    {
    	$matkul = MataKuliah::find($id);
    	$matkul->delete();
    	return redirect(url('/matkul'));
    }

    public function dataadmin()
    {
    	return view('admin.Admin.index');
    }

    public function addadmin()
    {
    	return view('admin.Admin.add');
    }

    public function saveadmin(Request $r)
    {
    	$n = new User;
    	$n->name = $r->input('name');
    	$n->email = $r->input('email');
    	$n->username = $r->input('username');
    	$n->class = $r->input('class');
    	$n->handphone = $r->input('handphone');
    	$n->password = bcrypt($r->input('password'));
    	$n->role = $r->input('role');
    	$n->save();
    	return redirect(url('dataadmin'));
    }

    public function editadmin($id)
    {
    	$user = User::find($id);
    	return view('admin.Admin.edit')->with('user',$user);
    }

    public function updateadmin(Request $r)
    {
    	$u = User::find($r->id);
    	$u->name = $r->input('name');
    	$u->email = $r->input('email');
    	$u->username = $r->input('username');
    	$u->class = $r->input('class');
    	$u->handphone = $r->input('handphone');
    	$u->password = bcrypt($r->input('password'));
    	$u->role = $r->input('role');
    	$u->save();
    	return redirect(url('dataadmin'));
    }

    public function deleteadmin($id)
    {
    	$user = User::find($id);
    	$user->delete();
    	return redirect(url('dataadmin'));
    }
}
