@extends('layout.dashboard')

@section('content')
<div class="content px-4">
    <div class="card border" style="background-color: white">
        <div class="card-body" style="font-weight:600;">
            <h3>Daftar RPS</h3>
            <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Daftar RPS tahun {{$newestYear}}<b
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
<div class="d-flex justify-content-start">
    <div class="pr-3">
        <a class="btn btn-success" href="{{ route('rps_create') }}"><i class="bi bi-plus-square mr-2">
            </i>Buat RPS</a>
    </div>
    <div class="pr-3">
        <a class="btn btn-outline-danger" href="/dashboard/rps/export/pdf/all"><i class="bi bi-file-earmark-pdf-fill">
            </i>Export PDF</a>
    </div>
    <div>
        <a class="btn btn-success" href="/exportExcelRps"><i class="bi bi-file-earmark-excel"> </i>Export
            Excel</a>
    </div>
</div>
<div class="d-flex mt-3">
    <table class="table table-bordered" style="text-align: center">
        <thead style="background-color: lightgray">
            <tr>
                <th class="align-middle" rowspan="2" style="width: 5%">Kode RPS</th>
                <th class="align-middle" rowspan="2" style="width: 15%">Mata Kuliah</th>
                <th class="align-middle" rowspan="2" style="width: 10%">Tahun</th>
                <th class="align-middle" rowspan="2" style="width: 10%">Semester</th>
                <th class="align-middle" rowspan="2" style="width: 10%">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rps_list as $rps)
            <tr>
                <td scope="row">{{ $rps->id_rps}}</td>
                <td scope="row">{{ $rps->Mata_Kuliah->namaMK }}</td>
                <td scope="row">{{ $rps->tahunAjaran }}</td>
                <td scope="row">{{ $rps->semester }}</td>
                <td scope="row">
                    <div class="d-flex justify-content-start">
                        <div class="pr-3">
                            <a id="edit" class="btn btn-primary"
                                href="{{ route('edit_rps.mata_kuliah', ['kodeRPS' => $rps->id_rps]) }}">Detail</a>
                        </div>
                        <div class="pr-3">
                            <a class="btn btn-outline-danger" href="/dashboard/rps/export/pdf/{{ $rps->id_rps }}/{{ $rps->kodeMK }}"><i
                                    class="bi bi-file-earmark-pdf-fill"> </i>Export PDF</a>
                        </div>
                        <div>
                            <a class="btn btn-dark"
                                href="{{ route('rps.matkul', $rps->Mata_Kuliah->kodeMK) }}">Riwayat</a>
                        </div>

                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
