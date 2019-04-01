<form method="POST" action="{{url('profile/set')}}">
	@csrf
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="inputEmail4">Nama Lengkap</label>
			<input type="text" class="form-control" name="name" id="inputEmail4" placeholder="Nama Lengkap" value="{{$data->name}}">
		</div>
		<div class="form-group col-md-6">
			<label for="inputPassword4">Nama Pengguna</label>
			<input type="text" class="form-control" id="inputPassword4" placeholder="Username" value="{{'@'.$data->username}}" disabled>
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="inputCity">Email</label>
			<input type="email" class="form-control" value="{{$data->email}}" disabled id="inputCity">
		</div>
		<div class="form-group col-md-4">
			<label for="inputState">Handphone</label>
			<input type="text" class="form-control" name="handphone" value="{{$data->handphone}}"  id="inputState">
		</div>
		<div class="form-group col-md-2">
			<label for="inputZip">Kelas</label>
			<input type="text" class="form-control" name="class" value="{{$data->class}}" id="inputZip">
		</div>
	</div>
	<button type="submit" class="btn btn-primary">Perbaharui Data</button>
</form>
<br>
@if(session('alert'))
<div class="alert alert-success" role="alert">
	<h4 class="alert-heading">{{session('alert')}}</h4>
	<p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
	<hr>
	<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</div>
@endif