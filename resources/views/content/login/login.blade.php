@extends('content.login.layouts.main')

@section('container')
    <center>

        <div class="col-8 mt-7">
            @if (session()->has('error'))
                <div style="margin: 0 0 -50px 0;">
                    <button type="button" class="btn btn-danger">
                        <h6>{{ session()->get('error') }}</h6>
                    </button>
                </div>
            @endif

            @if ($errors->any())
                <div style="margin: 0 0 -50px 0;">
                    <button type="button" class="btn btn-danger">
                        @foreach ($errors->all() as $error)
                            <h6>{{ $error }}</h6>
                        @endforeach
                    </button>
                </div>
            @endif
            <div class="card text-white mt-100"
                style="width: 480px; height:auto; max-height:auto; background-color: #1F2F4D; border-radius: 50px; margin: 70px 0 0 0; padding: 0 50px 0 50px">
                <div class="card-body">
                    @if (session()->has('status'))
                        <div class="alert alert-success">
                            {{ session()->get('status') }}
                        </div>
                    @endif
                    {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
            @endif --}}
                    <h3 class="card-title" style="text-align: left; margin:10px 0 0 0;"><b>Selamat Datang</b></h3>
                    <h6 class="card-subtitle" style="text-align: left; margin:10px 0 0 0"> Silakan memasukkan NIP dan kata
                        sandi</h6>
                    <form action="/proseslogin" method="POST" class="card-text" style="text-align: left" autocomplete="on">
                        @csrf
                        <div class="la" style="text-align: left; margin:10px 0 0 0;">
                            <label for="exampleInputNip1" class="form-label">NIP</label>
                            <input type="string" class="form-control" name="nip"
                                placeholder="Masukkan NIP dengan benar">
                        </div>
                        <div class="la" style="text-align: left; margin:10px 0 0 0;">
                            <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
                            <div class="input-group">
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Masukkan kata sandi dengan benar">
                                <span class="input-group-text">
                                    <label for="showPassword" style="margin-bottom: 0; margin-right:5px">
                                        <i class="fa fa-eye" aria-hidden="true" onclick="togglePassword()"></i>
                                    </label>
                                    <input type="checkbox" id="showPassword" onclick="togglePassword()">

                                </span>
                                <div class="input-group-append">
                                    {{-- <label class="input-group-text" for="showPassword">Show Password</label> --}}
                                </div>
                            </div>
                        </div>

                        <center class="mt-3 mb-10">
                            <button name="tombolLogin" type="submit"
                                style="text-align:center; margin: -2px 0 0 0; width:100%; height:50px; border: 2px solid; background: white; border-radius: 10px; font-size:18px; color:#1F2261;">
                                <b>Masuk</b>
                            </button>

                            <p class="mt-4">Lupa Kata Sandi?
                                <a href="/forgot-password" id="hyperReset"
                                    style="text-align:center; margin: 0 0 0 0; color: white; text-decoration-line:underline;"><b>Klik
                                        disini</b></a>
                            </p>

                            <!-- <p class="mt-4">Belum punya akun?
                                <a href="/register" id="hyperReset" style="text-align:center; margin: 0 0 0 0; color: white; text-decoration-line:underline;"><b>Daftar</b></a>
                            </p> -->
                        </center>
                    </form>
                </div>
            </div>
    </center>
@endsection

<script>
    function togglePassword() {
        var passwordField = document.getElementById("password");
        var showPasswordCheckbox = document.getElementById("showPassword");

        passwordField.type = showPasswordCheckbox.checked ? "text" : "password";
    }
</script>

<script src="https://kit.fontawesome.com/7d052c6975.js" crossorigin="anonymous"></script>
