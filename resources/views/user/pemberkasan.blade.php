  <script type="text/javascript">
    $(document).ready(function() {
    $('#tables').DataTable();
} );
  </script>
   <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
   <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.19/js/dataTables.semanticui.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.semanticui.min.css">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahdata">
      Tambah Data
    </button>
    <br>
    <br>
      <table id="tables" class="ui celled table" style="width:100%">
       <thead>
        <tr>
          <th>Judul</th>
          <th>Mata Kuliah</th>
          <th>Bobot SKS</th>
          <th>Dosen Pengampu</th>
          <th>Action</th>
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