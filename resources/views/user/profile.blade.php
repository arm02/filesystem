@extends('layouts.app')
@section('title')
{{Auth::user()->name}}
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-4">
			<div class="list-group" id="list-tab" role="tablist">
				<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Data Diri</a>
				<a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Ubah Password</a>
				<a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Berkas</a>
				<a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
			</div>
		</div>
		<div class="col-8">
			<div class="tab-content" id="nav-tabContent">
				<div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
					@include('user.datadiri')
				</div>
				<div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
					@include('user.password')
				</div>
				<div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
					@include('user.pemberkasan')
				</div>
				<div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
			</div>
		</div>
	</div>
</div>
@endsection