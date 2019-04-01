    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahdata">
      Tambah Data
    </button>
    <br>
    <br>
    <div class="table-responsive">
      <table class="table">
       <thead>
        <tr>
          <th scope="col">Judul</th>
          <th scope="col">Mata Kuliah</th>
          <th scope="col">Bobot SKS</th>
          <th scope="col">Dosen Pengampu</th>
          <th scope="col" colspan="3">Tindakan</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $data = \App\Pemberkasan::where('created_by',Auth::user()->id)->get();
        ?>
        @foreach($data as $key)
        <?php
        $matakuliah = \App\Matakuliah::where('id',$key->matakuliah)->first();
        ?>
        <tr>
          <td>{{$key->judul}}</td>
          <td>{{$matakuliah->name}}</td>
          <td>{{$matakuliah->sks}}</td>
          <td>{{$matakuliah->dosen}}</td>
          <td>
            <a href="{{url('unduh/berkas/'.$key->file)}}" class="btn btn-success btn-sm">Unduh</a>
            <a href="{{url('profile/berkas/hapus/'.$key->id)}}" onclick="return confirm('Yakin hapus data?');" class="btn btn-danger btn-sm">Hapus</a>
          </td>
        </tr> 
        @endforeach
      </tbody>
    </table>
  </div>

  @include('user.addpemberkasan')