
<div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pemberkasan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="{{url('profile/berkas/set')}}" enctype="multipart/form-data">
        @csrf
      <div class="modal-body">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="judul">Judul</label>
              <input type="text" name="judul" class="form-control" id="judul" placeholder="Judul" required>
            </div>
            <div class="form-group col-md-6">
               <label for="matakuliah">Mata Kuliah</label>
               <?php
               $matakuliah = \App\Matakuliah::all(); 
               ?>
              <select id="matakuliah" name="matakuliah" class="form-control" required>
                <option selected disabled>Choose...</option>
                @foreach($matakuliah as $key)
                <option value="{{$key->id}}">{{$key->name}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="Keterangan">Keterangan</label>
            <input type="text" name="keterangan" class="form-control" id="Keterangan" placeholder="Keterangan" required>
          </div>
          <div class="form-group">
            <label for="file">File</label>
            <input type="file" name="file" class="form-control" id="file" placeholder="File" required>
          </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submmit" class="btn btn-primary">Submit</button>
      </div>
      <form>
    </div>
  </div>
</div>