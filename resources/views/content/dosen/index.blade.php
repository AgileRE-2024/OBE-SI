@extends('layout.dashboard')

@section('content')
    <div class="content px-4">
        @include('content.teknik_penilaian.button')
        <br><br>
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>Detail Peran Dosen</h3>
                <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Daftar Peran Dosen<b
                        style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b></h5>
            </div>
        </div>
        <div class="d-flex justify-content-start pt-2">
            <div>
                <a class="btn btn-success" href="{{ route('edit_rps.add_peran_dosen',['kodeRPS' => $kodeRPS]) }}"><i
                        class="bi bi-plus-square">
                    </i>Tambah</a>
            </div>
        </div>
        {{-- <div class="d-flex justify-content-end pt-2">
            <div class="pr-3">
                <a class="btn btn-outline-danger" href="#"><i
                        class="bi bi-file-earmark-pdf-fill"> </i>Export PDF</a>
            </div>
            <div>
                <a class="btn btn-success" href="#"><i
                        class="bi bi-file-earmark-excel"> </i>Export Excel</a>
            </div>
        </div> --}}
        <br>
        <div class="d-flex">
            <table class="table table-bordered" style="text-align: center">
                <thead class="table" style="background-color: lightgray">
                    <tr>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 5%">No</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">NIP</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Kode RPS</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Nama Dosen</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 25%">Detail Peran</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Edit</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($details as $detail)
    <tr>
        <td scope="row">
            {{ $loop->iteration }}
        </td>
        <td scope="row">
            {{ $detail->nip }}
        </td>
        <td scope="row">
            {{ $detail->kodeRPS }}
        </td>
        <td scope="row">
            @isset($detail->users->namaDosen)
                {{ $detail->users->namaDosen }}
            @else
                Nama Dosen Tidak Tersedia
            @endisset
        </td>
        <td scope="row">
            {{ $detail->peranDosen }}

        </td>
        <td scope="row">
            <a class="btn btn-primary" href={{ route('edit_rps.edit_peran_dosen', ['nip'=>$detail->nip, 'kodeRPS' => $kodeRPS, 'peranDosen'=>$detail->peranDosen]) }}>Edit</a>
        </td>
        <td scope="row">
            <a class="btn btn-danger"
                href={{ route('edit_rps.delete_peran_dosen', ['nip'=>$detail->nip, 'kodeRPS' => $kodeRPS, 'peranDosen'=>$detail->peranDosen]) }}>Delete</a>
        </td>
    </tr>
@endforeach


                </tbody>
            </table>
        </div>
    </div>
@endsection