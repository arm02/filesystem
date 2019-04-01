@extends('auth.layouts.index')
@section('title')
Masuk
@endsection

@section('content')


<div class="wrapper" style="background-image: url('{{ asset ('colorlib17/images/login.jpeg')}}');">
    <div class="inner">
        <div class="image-holder-login">
            <img src="{{ asset ('colorlib17/images/tpunj.jpeg')}}" alt="">
            <center>
            </center>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h3>Masuk TPERS 2018</h3>
            <div class="form-wrapper">
                <input type="text" placeholder="Nama Pengguna" name="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" value="{{ old('username') }}" required autofocus>
                <i class="zmdi zmdi-email"></i>
            </div>
            <div class="form-wrapper">
                <input type="password" placeholder="Kata Sandi" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required autofocus>
                <i class="zmdi zmdi-lock"></i>
            </div>
                @if ($errors->has('username'))
                <span class="invalid-feedback" style="color: red;" role="alert">
                    <strong>Nama Pengguna atau Kata Sandi Salah !</strong>
                </span>
                @endif
                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            <button type="submit">Masuk
                <i class="zmdi zmdi-arrow-right"></i>
            </button>
            <br>
            <center>
            <a href="{{route('register')}}">Belum punya akun ? Daftar disini </a>
            </center>
        </form>
    </div>
</div>


@endsection