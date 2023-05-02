@extends('content.login.layouts.main')

@section('container')
    <center>
        <div class="col-8 mt-7">
            <div class="card text-white" style="position: relative; display: flex; justify-content: center; width: 480px; background-color: #1F2F4D; border-radius: 50px; margin: 180px 0 0 0; padding: 0 50px 0 50px">
                <div class="card-body">
                  @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                  @endif
                  @if (session()->has('status'))
                    <div class="alert alert-success">
                        {{session()->get('status')}}
                    </div>
                  @endif
                  <h4 class="card-subtitle" style="text-align: Center; margin:10px 0 0 0">Reset kata sandi anda</h4>
                  <form action="{{ route('password.email') }}" method = "POST" class="card-text" style="text-align: left"> <br>
                    @csrf 
                    <div class="la" style="text-align: left; margin:10px 0 0 0;">
                      <label for="exampleInputEmail1" class="form-label">Email</label>
                      <input type="string" class="form-control" name="email" placeholder="Masukkan email anda">
                      {{-- <div id="emailHelp" class="form-text">Pastikan email yang Anda masukkan benar.</div> --}}
                    </div>
                    <center class = "mt-3 mb-10">
                    <input type="submit" value="Request Password Reset" style="text-align:center; margin: -2px 0 0 0; width:100%; height:50px; border: 2px solid; background: white; border-radius: 10px; font-size:18px; color:#1F2261;">
                    </center>
                  </form>
                </div>
            </div>
        </div>    
                </center>
            @endsection