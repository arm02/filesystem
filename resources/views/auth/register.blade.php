@extends('auth.layouts.index')
@section('title')
Daftar
@endsection

@section('content')


<div class="wrapper" style="background-image: url('{{ asset ('colorlib17/images/login.jpeg')}}');">
    <div class="inner">
        <div class="image-holder-register">
            <img src="{{ asset ('colorlib17/images/tpunj.jpeg')}}" alt="">
            <center>
            </center>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h3>Daftar TPERS 2018</h3>
            <div class="form-wrapper">
                <input type="text" placeholder="Nama Lengkap" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" required autofocus>
                @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
                <i class="zmdi zmdi-account"></i>
            </div>
            <div class="form-wrapper">
                <input type="email" placeholder="Email Anda" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
                <i class="zmdi zmdi-email"></i>
            </div>
            <div class="form-wrapper">
                <input type="text" placeholder="Nama Pengguna" name="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" value="{{ old('username') }}" required autofocus>
                @if ($errors->has('username'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
                @endif
                <i class="zmdi zmdi-favorite"></i>
            </div>
            <div class="form-group">
                <input type="text" placeholder="Handphone" name="handphone" class="form-control{{ $errors->has('handphone') ? ' is-invalid' : '' }}" required autofocus>
                @if ($errors->has('handphone'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('handphone') }}</strong>
                </span>
                @endif
                <select name="class" id="class" class="form-control{{ $errors->has('class') ? ' is-invalid' : '' }}" required autofocus>
                    <option value="" disabled selected>Kelas</option>
                    <option value="A">TP A</option>
                    <option value="B">TP B</option>
                </select>
                @if ($errors->has('select'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('select') }}</strong>
                </span>
                @endif
                <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
            </div>
            <div class="form-wrapper">
                <input type="password" placeholder="Kata Sandi" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required autofocus>
                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
                <i class="zmdi zmdi-lock"></i>
            </div>
            <div class="form-wrapper">
                <input id="password-confirm" type="password" placeholder="Konfrimasi Kata Sandi" class="form-control" name="password_confirmation" required>
                <i class="zmdi zmdi-lock"></i>
            </div>
            <button type="submit">Daftar
                <i class="zmdi zmdi-arrow-right"></i>
            </button>
            <br>
            <center>
            <a href="{{route('login')}}">Sudah punya akun ? Login disini </a>
            </center>
           
        </form>
    </div>
</div>


@endsection