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
                    {{ $mata_kuliah->namaMK }}
                </td>
            </tr>
            <tr>
                <td scope="row">
                    Kode Mata Kuliah
                </td>
                <td scope="row">
                    {{ $mata_kuliah->kodeMK }}
                </td>
            </tr>
            <tr>
                <td scope="row">
                    Beban Studi (SKS)
                </td>
                <td scope="row">
                    {{ $mata_kuliah->sks }}
                </td>
            </tr>
            <tr>
                <td scope="row">
                    Semester
                </td>
                <td scope="row">
                    {{ $mata_kuliah->semester }}
                </td>
            </tr>
            <tr>
                <td scope="row">
                    Jurusan/Prodi
                </td>
                <td scope="row">
                    {{ $mata_kuliah->namaProdi }}
                </td>
            </tr>
            <tr>
                <td scope="row">
                    CPL
                </td>
                <td scope="row">
                    @foreach($list_cpl as $cpl)
                    <div class="col">
                        {{ $cpl->kodeCPL }} {{$cpl->deskripsiCPL}}
                    </div>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td scope="row">
                    Capaian Pembelajaran Mata Kuliah (CPMK)
                </td>
                <td scope="row">
                    @foreach($list_cpmk as $cpmk)
                    <div class="col">
                        {{ $cpmk->kodeCPMK }} {{$cpmk->deskripsiCPMK}}
                    </div>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td scope="row">
                    Deskripsi Mata Kuliah
                </td>
                <td scope="row">
                    {{ $mata_kuliah->deskripsiMK }}
                </td>
            </tr>
            <tr>
                <td scope="row">
                    Prasyarat (bila ada)
                </td>
                <td scope="row">
                @foreach($list_prasyarat as $prasyarat)
                    <div class="col">
                        {{ $prasyarat->kodeMK }} {{$prasyarat->namaMK}}
                    </div>
                    @endforeach
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
