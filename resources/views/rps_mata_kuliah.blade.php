@extends('layout.dashboard')

@section('content')
<div class="content px-4">
@include('content.teknik_penilaian.button')
    <br><br>
    <div class="card border" style="background-color: white">
        <div class="card-body" style="font-weight:600;">
            <h3>Mata Kuliah</h3>
            <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Identitas mata kuliah RPS<b
                    style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b></h5>
        </div>
    </div>
    <br>
    @if (session('warning'))
    <div class="alert alert-danger">
        {{ session('warning') }}
    </div>
    @endif
    {{-- @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
</div>
@endif --}}
    <div class="d-flex mt-3">
        <table class="table table-bordered" style="text-align: center">
            <thead class="table" style="background-color: lightgray">
                <tr>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 5%">Identitas</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 25%">Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">
                        Nama Mata Kuliah
                    </td>
                    <td scope="row">
                        Agama I (Budha)
                    </td>
                </tr>
                <tr>
                    <td scope="row">
                        Kode Mata Kuliah
                    </td>
                    <td scope="row">
                        AGB101
                    </td>
                </tr>
                <tr>
                    <td scope="row">
                        Beban Studi (SKS)
                    </td>
                    <td scope="row">
                        2
                    </td>
                </tr>
                <tr>
                    <td scope="row">
                        Semester
                    </td>
                    <td scope="row">
                        1
                    </td>
                </tr>
                <tr>
                    <td scope="row">
                        Jurusan/Prodi
                    </td>
                    <td scope="row">
                        Sistem Informasi
                    </td>
                </tr>
                <tr>
                    <td scope="row">
                        Capaian Pembelajaran Lulusan (CPL)
                    </td>
                    <td scope="row">
                        CPL-01 Menunjukkan sikap excellence with morality
                    </td>
                </tr>
                <tr>
                    <td scope="row">
                        Capaian Pembelajaran Mata Kuliah (CPMK)
                    </td>
                    <td scope="row">
                        belum ada data
                    </td>
                </tr>
                <tr>
                    <td scope="row">
                        Deskripsi Mata Kuliah
                    </td>
                    <td scope="row">
                        belum ada data
                    </td>
                </tr>
                <tr>
                    <td scope="row">
                        Prasyarat (bila ada)
                    </td>
                    <td scope="row">
                        -
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
