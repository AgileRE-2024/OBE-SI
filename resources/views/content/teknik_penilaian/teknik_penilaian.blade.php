@extends('layout.dashboard')

@section('content')
{{-- <H1>{{ $kodeRPS }}</H1> --}}
    <div class="content px-4">
        @include('content.teknik_penilaian.button', ['kodeRPS' => $kodeRPS])
        <br><br>
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>Teknik Penilaian</h3>
                <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Standar teknik penilaian setiap mata kuliah<b style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b></h5>
            </div>
        </div>
        <div class="d-flex justify-content-start pt-2">
            <div>
                <a class="btn btn-success" href="{{ route('edit_rps.add_teknik_penilaian', ['kodeRPS' => $kodeRPS ]) }}"><i
                        class="bi bi-plus-square">
                    </i>Tambah</a>
            </div>
        </div>
        {{-- <div class="d-flex justify-content-end pt-2">
            <div class="pr-3">
                <a class="btn btn-outline-danger" href="{{ route('edit_rps.export_teknik_penilaian', ['pdf']) }}"><i
                        class="bi bi-file-earmark-pdf-fill"> </i>Export PDF</a>
            </div>
            <div>
                <a class="btn btn-success" href="{{ route('edit_rps.export_teknik_penilaian', ['excel']) }}"><i
                        class="bi bi-file-earmark-excel"> </i>Export Excel</a>
            </div>
        </div> --}}
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
        <div class="d-flex">
            <table class="table table-bordered" style="text-align: center">
                <thead class="table" style="background-color: lightgray">
                    <tr>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 5%">No</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Kode Penilaian</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Kode RPS</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 25%">Teknik Penilaian</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Bobot Penilaian</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 30%">Kriteria Penilaian</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 30%">Tahap Penilaian</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 30%">Instrumen Penilaian</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Edit</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tps as $tp)
                        <tr>
                            <td scope="row">
                                {{ $loop->iteration }}</td>
                            <td scope="row">
                                {{ $tp->kodePenilaian }}
                            </td>
                            <td scope="row">
                                {{ $tp->kodeRPS }}
                            </td>
                            <td scope="row">
                                {{ $tp->teknikPenilaian }}
                            </td>
                            <td scope="row">
                                {{ $tp->bobotPenilaian }}
                            </td>
                            <td scope="row">
                                {{ $tp->kriteriaPenilaian }}
                            </td>
                            <td scope="row">
                                {{ $tp->tahapPenilaian }}
                            </td>
                            <td scope="row">
                                {{ $tp->instrumenPenilaian }}
                            </td>
                            {{-- <td class="text-center ">
                                <div class="d-flex" >
                                    <a class="btn btn-primary" href="{{ route('edit_rps.edit_teknik_penilaian', $tp->kodePenilaian) }}" style="margin-right:7pt">Edit</a>
                                <a class="btn btn-danger" href="{{ route('edit_rps.delete_teknik_penilaian', $tp->kodePenilaian) }}">Delete</a>
                                </div>
                            </td> --}}
                            <td scope="row">
                                <a class="btn btn-primary"
                                    href="{{ route('edit_rps.edit_teknik_penilaian', $tp->kodePenilaian) }}">Edit</a>
                            </td>
                            <td scope="row">
                                <a class="btn btn-danger"
                                    href="{{ route('edit_rps.delete_teknik_penilaian', $tp->kodePenilaian) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
