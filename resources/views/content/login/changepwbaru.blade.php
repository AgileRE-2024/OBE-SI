@extends('content.login.layouts.main')
@section('container')
<center>
    <div class="col-8 mt-7">
        <div class="card" style="max-width: 30rem; background-color: #1F2261; border-radius:20px; margin:40px 0 40px 0; padding: 0 20px 0 20px" >
            <div class="card-body">
              {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
              @endif --}}
              @if (session()->has('status'))+
                <div class="alert alert-success">
                    {{session()->get('status')}}
                </div>
              @endif
              @if (session()->has('error'))+
                <div class="alert alert-danger">
                    {{session()->get('error')}}
                </div>
              @endif    
              <h5 class="card-title text-center" style="color:white">Ubah Kata Sandi Pengguna</h5>
              <form action="/updateprofile/{{ $data->nip }}" method="POST" enctype="multipart/form-data" class="card-text" style="text-align: left">
               @csrf  
                <div class="mb-1">
                    <label for="exampleInputPassword1" class="form-label"  style="color:white">Kata Sandi Lama</label>
                    <input type="password" name="old_password" class="form-control" id="exampleInputOldPassword1">
                    <label for="exampleInputPassword1" class="form-label"  style="color:white">Kata Sandi Baru</label>
                    <input type="password" name="new_password" class="form-control" id="exampleInputNewPassword1">
                    <label for="exampleInputPassword1" class="form-label"  style="color:white">Konfirmasi Kata Sandi Baru</label>
                    <input type="password" name="new_password_confirmation" class="form-control" id="exampleInputConfirmNewPassword1">
                </div>
                <center class = "mt-3">
                <button style="text-align:center" type="submit" class="btn btn-light">Ubah Kata Sandi</button>
@endsection