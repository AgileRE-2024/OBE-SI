@extends('content.login.layouts.main')

@section('container')
    <center>
        <div class="col-8 mt-7">

            <div class="card text-white mt-100"
                style="width: 480px; height:auto; max-height:auto; background-color: #1F2F4D; border-radius: 50px; margin: 70px 0 0 0; padding: 0 50px 0 50px">
                <div class="card-body">
                    <h4 class="card-title" style="text-align: center; margin:10px 0 0 0;"><b>Silahkan Pilih Role Anda</b></h4>
                    <div class="d-flex gap-4 p-2 text-black">
                        <a href="" class="card-role">Dosen</a>
                        <a href="" class="card-role">Kurikulum</a>
                    </div>
                </div>
    </center>
@endsection
<style>
    .card-role {
        width: 251px;
        height: 80px;
        border-radius: 10px;
        background: #FFF;
        margin: 20px 0;
        display: flex;
        font-size: 24px;
        font-style: normal;
        font-weight: 600;
        justify-content: center;
        align-items: center;
        text-decoration: none;
        color: #000;
    }
</style>
