<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/login.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container text-center">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-5">
                <div class="text-center pt-4 pb-2">
                    <img src="{{asset('assets/img/login.png')}}" alt="Logo">
                </div>
                <div class="main">
                    <input type="checkbox" id="chk" aria-hidden="true">
                    <div class="signup">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <label for="chk" aria-hidden="true">Masuk</label>

                            <select class="form-control" id="role">
                                <option selected disabled>-----------Pilih Sebagai-----------
                                <option>
                                <option>Dosen</option>
                                <option>Mahasiswa</option>
                                <option>Pembimbing Lapangan</option>
                            </select>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Masuk') }}
                                    </button>
                                    <h6 style="text-align: center; margin-top: 20px;">jika anda pembimbing lapangan silahkan klik 
                                    <a class="btn btn-link" href="{{ route('register') }}">
                                    {{ __('Daftar') }}
                                </a>
                                    </h6>

                                    <!-- @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif -->

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>