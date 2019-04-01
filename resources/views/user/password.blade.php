<form method="POST" action="{{url('ubah')}}" role="form">
    @csrf
<div class="form-row">
    <div class="form-group col-md-12 {{ $errors->has('current_password') ? ' has-error' : '' }}">
      <label for="inputEmail4">Password Lama</label>
      <input type="password" class="form-control" id="inputEmail4" placeholder="Password Lama" name="current_password" id="current_password" required>
      <span class="help-block">{{ $errors->first('current_password') }}</span>
    </div>
</div>
    <div class="form-row">
    <div class="form-group col-md-6 {{ $errors->has('password') ? ' has-error' : '' }}">
      <label for="inputPassword4">Password Baru</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password Baru" name="password" id="password" required>
      <span class="help-block">{{ $errors->first('password') }}</span>
    </div>
  <div class="form-group col-md-6 {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
    <label for="inputAddress">Konfirmasi Password</label>
    <input type="password" class="form-control" id="inputAddress" placeholder="Konfirmasi Password" name="password_confirmation" id="password_confirmation" required>
    <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
  </div>
  </div>
  <button class="btn btn-primary" type="submit">Ubah</button>
</form>