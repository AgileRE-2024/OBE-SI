@extends('content.login.layouts.main')

@section('container')
    <center>
        <div class="col-8 mt-7">

            <div class="card text-white mt-100"
                style="width: 480px; height:auto; max-height:auto; background-color: #1F2F4D; border-radius: 50px; margin: 70px 0 0 0; padding: 0 50px 0 50px">
                <div class="card-body">
                    @if (session()->has('status'))
                        <div class="alert alert-success">
                            {{ session()->get('status') }}
                        </div>
                    @endif
                    <h3 class="card-title" style="text-align: left; margin:10px 0 0 0;"><b>Selamat Datang</b></h3>
                    <h6 class="card-subtitle" style="text-align: left; margin:10px 0 0 0"> Silahkan mengisi form dibawah ini
                        untuk membuat akun</h6>
                    <form action="{{route('storeUser')}}" method = "POST" class="card-text" style="text-align: left"> <br>
                        @csrf
                        <div class="la" style="text-align: left; margin:10px 0 0 0;">
                            <label for="exampleInputNip1" class="form-label">NIP</label>
                            <input type="string" class="form-control" name="nip"
                                placeholder="Masukkan NIP dengan benar">
                            @error('nip')
                            <p style="color: #BF2C45">{{ $message }}</p>
                            @enderror
                            {{-- <div id="emailHelp" class="form-text">Pastikan email yang Anda masukkan benar.</div> --}}
                        </div>
                        <div class="la" style="text-align: left; margin:10px 0 0 0;">
                            <label for="exampleInputname" class="form-label">Nama Lengkap</label>
                            <input type="string" class="form-control" name="namaDosen"
                                placeholder="Masukkan nama lengkap dengan benar">
                            @error('namaDosen')
                            <p style="color: #BF2C45">{{ $message }}</p>
                            @enderror
                            {{-- <div id="emailHelp" class="form-text">Pastikan email yang Anda masukkan benar.</div> --}}
                        </div>
                        <div class="la" style="text-align: left; margin:10px 0 0 0;">
                            <label for="exampleInputjabatan" class="form-label">Jabatan</label>
                            <input type="string" class="form-control" name="jabatanDosen"
                                placeholder="Masukkan jabatan dengan benar">
                            @error('jabatanDosen')
                            <p style="color: #BF2C45">{{ $message }}</p>
                            @enderror
                            {{-- <div id="emailHelp" class="form-text">Pastikan email yang Anda masukkan benar.</div> --}}
                        </div>
                        {{-- <div class="la" style="text-align: left; margin:10px 0 0 0;">
                            <label for="exampleInputjabatan" class="form-label">Jabatan</label>
                            <select class="form-select" name="jabatan">
                                <option value="" selected disabled>-- Pilih Jabatan --</option>
                                <option value="dosen">Dosen</option>
                                <option value="kps">KPS</option>
                                <option value="admin">Admin</option>
                                <!-- Tambahkan opsi jabatan sesuai kebutuhan -->
                            </select> --}}
                        {{-- <div id="emailHelp" class="form-text">Pastikan email yang Anda masukkan benar.</div> --}}
                        {{-- </div> --}}
                        <div class="la" style="text-align: left; margin:10px 0 0 0;">
                            <label for="exampleInputemail" class="form-label">Email</label>
                            <input type="string" class="form-control" name="email"
                                placeholder="Masukkan email dengan benar">
                            @error('email')
                            <p style="color: #BF2C45">{{ $message }}</p>
                            @enderror
                            {{-- <div id="emailHelp" class="form-text">Pastikan email yang Anda masukkan benar.</div> --}}
                        </div>
                        <div class="la" style="text-align: left; margin:10px 0 0 0;">
                            <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
                            <input type="password" name="password1" class="form-control" id="password"
                                placeholder="Masukkan kata sandi dengan benar">
                            @error('password1')
                            <p style="color: #BF2C45">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="la" style="text-align: left; margin:10px 0 10px 0;">
                            <label for="exampleInputPassword2" class="form-label">Ulang Kata Sandi</label>
                            <input type="password" name="confirm_password" class="form-control mb-2" id="confirm_password"
                                placeholder="Masukkan ulang kata sandi dengan benar">
                            @error('confirm_password')
                            <p style="color: #BF2C45">{{ $message }}</p>
                            @enderror
                        </div><br>
                        {{-- <div id="emailHelp" class="form-text">Pastikan password yang Anda masukkan benar.</div> --}}
                        {{-- <div class="mb-1 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1"> Simpan Saya Sebagai Pengguna Tetap </label>
                    </div> --}}
                        <center class = "mt-3 mb-10">
                            <button name="tombolLogin" type="submit"
                                style="text-align:center; margin: -2px 0 20px 0; width:100%; height:50px; border: 2px solid; background: white; border-radius: 10px; font-size:18px; color:#1F2261;  "><b>Daftar</b></button>
                            {{-- <p class = "mt-10" style="margin: 50px 0 10px 0">Lupa Kata Sandi?</p> --}}
                            <p>Sudah punya akun?
                                <a href="/login" id="hyperReset"
                                    style="text-align:center; margin: 0 0 0 0; color: white; text-decoration-line:underline;"><b>Masuk</b></a>
                            </p>
                        </center>
                    </form>
                </div>
            </div>
    </center>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#confirm_password').on('focus', function() {
                if ($('#password').val() == $('#confirm_password').val()) {
                    $('#message').html('').css('color', 'green');
                } else {
                    $('#message').html('Kata sandi tidak cocok').css('color', 'red');
                }
            });
        });
    </script>
@endsection
