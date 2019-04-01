<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function profile(){
        $data = \App\User::where('id',Auth::user()->id)->first();
        return view('user.profile', compact('data'));
    }

    public function setprofile(Request $req){
        $user = \App\User::find(Auth::user()->id);
        $user->name = $req->input('name');
        $user->handphone = $req->input('handphone');
        $user->class = $req->input('class');
        $user->save();
        return redirect(url('profile'))->with('alert','Berhasil Mengubah Data!');
    }

    public function addingberkas(Request $req){
        $berkas = new \App\Pemberkasan;
        $berkas->judul = $req->input('judul');
        $berkas->keterangan = $req->input('keterangan');
        $berkas->matakuliah = $req->input('matakuliah');
        $berkas->created_by = Auth::user()->id;
        if(Input::hasFile('file')){
            $file = date("YmdHis")
            .uniqid()
            ."."
            .Input::file('file')->getClientOriginalExtension();
            Input::file('file')->move(storage_path('file'),$file);
            $berkas->file = $file;
        }
        $berkas->save();
        return redirect(url('profile'))->with('alert','Berhasil Menambahkan Data!');

    }

    public function deleteberkas($id){
        $data = \App\Pemberkasan::find($id);
        $data->delete();
        return redirect(url('profile'))->with('alert','Berhasil Menghapus Data!');
    }
}
