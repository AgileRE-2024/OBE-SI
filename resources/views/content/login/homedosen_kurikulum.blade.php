@extends('layout.dashboard')

@section('content')
    <div class="col">
        <h3>Selamat Datang, {{ $data->namaDosen }} </h3>
    </div>
    <center>
        @if (session()->has('status'))
            <div class="alert alert-success">
                {{ session()->get('status') }}
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
        @endif
    </center>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="row row-cols-30 row-cols-md-20 g-4"
                    style="border-radius:20px; width:700px; height:530px; padding:15px 40px 0 0; margin:0 0 50px 300px">
                    <div class="col">
                        <center>
                            <table class="table table-bordered">
                                <tr style="text-align: center">
                                    <th colspan="2" style="background-color: #1F2F4D;color:white">Biodata Dosen</th>
                                </tr>
                                <tr>
                                    <th>Nama</td>
                                    <td class="col-7">{{ $data->namaDosen }}</td>
                                </tr>
                                <tr>
                                    <th>NIP</td>
                                    <td>{{ $data->nip }}</td>
                                </tr>
                                <tr>
                                    <th>Jabatan</td>
                                    <td>{{ $data->jabatanDosen }}</td>
                                </tr>
                                <tr>
                                    <th>Email</td>
                                    <td>{{ $data->email }}</td>
                                </tr>
                                <tr>
                                    <th>Status</td>
                                    <td>{{ $data->status }}</td>
                                </tr>
                            </table>
                            <a href="/ubahpw/{{ $data->nip }}" class="btn btn-secondary"
                                style="color: white; width:180px" role="button">Ubah Kata Sandi
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white"
                                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                            </a>
                        </center>
                    </div>
                </div>
            </div>
        @endsection
