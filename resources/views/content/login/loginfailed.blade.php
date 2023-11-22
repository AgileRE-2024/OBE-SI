@extends('content.login.layouts.main')

@section('container')
    <center>
    <div > <button type="button" class="btn btn-danger"> <h6> NIP atau kata sandi salah! Silakan Login Ulang!<h6> </button> </div>
      <div class="card text-white mt-100" style="width: 480px; height:auto; max-height:auto; background-color: #1F2F4D; border-radius: 50px; margin: 20px 0 0 0; padding: 0 50px 0 50px">
        <div class="card-body">
          @if (session()->has('status'))
            <div class="alert alert-success">
                {{session()->get('status')}}
            </div>
          @endif
          <h3 class="card-title" style="text-align: left; margin:10px 0 0 0;"><b>Selamat Datang</b></h3>
          <h6 class="card-subtitle" style="text-align: left; margin:10px 0 0 0"> Silakan memasukkan NIP dan kata sandi</h6>
          <form action="/proseslogin" method = "POST" class="card-text" style="text-align: left"> <br>
            @csrf
            <div class="la" style="text-align: left; margin:10px 0 0 0;">
              <label for="exampleInputNip1" class="form-label">NIP</label>
              <input type="string" class="form-control" name="nip" placeholder="Masukkan NIP dengan benar">
              {{-- <div id="emailHelp" class="form-text">Pastikan email yang Anda masukkan benar.</div> --}}
            </div>
            <div class="la" style="text-align: left; margin:10px 0 0 0;">
              <label for="exampleInputPassword1" class="form-label" >Kata Sandi</label>
              <input type="password" name="password" class="form-control" placeholder="Masukkan kata sandi dengan benar" ><br><br>
              {{-- <div id="emailHelp" class="form-text">Pastikan password yang Anda masukkan benar.</div> --}}
            {{-- <div class="mb-1 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1"> Simpan Saya Sebagai Pengguna Tetap </label>
            </div> --}}
            <center class = "mt-3 mb-10">
                <button name="tombolLogin" type="submit"
                    style="text-align:center; margin: -2px 0 0 0; width:100%; height:50px; border: 2px solid; background: white; border-radius: 10px; font-size:18px; color:#1F2261;  "><b>Masuk</b></button>
                <p class="mt-4">Lupa Password?
                    <a href="/forgot-password" id="hyperReset"
                        style="text-align:center; margin: 0 0 0 0; color: white; text-decoration-line:underline;"><b>Klik
                            disini</b></a>
                </p>
                <p class="mt-4">Belum punya akun?
                    <a href="/register" id="hyperReset"
                        style="text-align:center; margin: 0 0 0 0; color: white; text-decoration-line:underline;"><b>Daftar</b></a>
                </p>

            </center>
          </form>
        </div>
    </div>
                </center>
@endsection
