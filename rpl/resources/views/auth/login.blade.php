@extends('template.login')

@section('login')



<div class="login-box">
    <div class="logo">
        <a href="javascript:void(0);"><b>TK Amanah</b></a>
    </div>
    <div class="card">
        <div class="body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="msg">Silahkan Login</div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">person</i>
                    </span>
                    <div class="form-line">
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Username">

                    </div>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">lock</i>
                    </span>
                    <div class="form-line">
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password">

                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="row">
                    
                    <div class="col-xs-4">
                        <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>

                    </div>

                    <div class="col-xs-4">
                     <button class="btn btn-block bg-pink waves-effect"><a href="/register"> Register </a></button> 

                    </div>
                </div>
                <div class="row m-t-15 m-b--20">

                    <div class="col-xs-6 align-right">
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
