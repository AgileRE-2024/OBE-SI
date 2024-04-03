@extends('layout.dashboard')

@section('content')
<div class="content px-4 mb-5">
    <div class="card border" style="background-color: white">
        <div class="card-body" style="font-weight:600;">
            <h3>Teknik Penilaian</h3>
        </div>
    </div>
    @if (auth()->user()->role == 1 || auth()->user()->role == 3)
    <div class="d-flex justify-content-start pt-2">
        <div class="pr-3">
            <a class="btn btn-dark" href="{{ route('kurikulum.data.add_teknik') }}"><i class="bi bi-plus-square">
                </i>Tambah</a>
        </div>
    </div>
    @endif
    <br>
    <div class="d-flex">
        <table class="table table-bordered" style="text-align: center">
            <thead class="table" style="background-color: lightgray">
                <tr>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 5%">No</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 30%">Teknik Penilaian</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 45%">Deskripsi</th>
                    @if (auth()->user()->role == 1 || auth()->user()->role == 3)
                    <th class="align-middle" scope="col" rowspan="2" style="width: 7.5%">Edit</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 7.5%">Delete</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach($tekniks as $teknik)
                <tr>
                    <td scope="row">
                        {{ $loop->iteration }}
                    </td>
                    <td scope="row">
                        {{ $teknik->nama_teknik_penilaian }}
                    </td>
                    <td scope="row">
                        {{ $teknik->deskripsi_teknik_penilaian }}
                    </td>
                    @if (auth()->user()->role == 1 || auth()->user()->role == 3)
                    <td scope="row">
                        <a class="btn btn-primary" href="{{ route('kurikulum.data.edit_teknik', $teknik->id_teknik_penilaian) }}">Edit</a>
                    </td>
                    <td scope="row">
                        <a class="btn btn-danger" href="{{ route('kurikulum.data.delete_teknik', $teknik->id_teknik_penilaian) }}">Delete</a>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="content px-4 mb-5">
    <div class="card border" style="background-color: white">
        <div class="card-body" style="font-weight:600;">
            <h3>Instrumen Penilaian</h3>
        </div>
    </div>
    @if (auth()->user()->role == 1 || auth()->user()->role == 3)
    <div class="d-flex justify-content-start pt-2">
        <div class="pr-3">
            <a class="btn btn-dark" href="{{ route('kurikulum.data.add_instrumen') }}"><i class="bi bi-plus-square">
                </i>Tambah</a>
        </div>
    </div>
    @endif
    <br>
    <div class="d-flex">
        <table class="table table-bordered" style="text-align: center">
            <thead class="table" style="background-color: lightgray">
                <tr>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 5%">No</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 30%">Instrumen Penilaian</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 45%">Deskripsi</th>
                    @if (auth()->user()->role == 1 || auth()->user()->role == 3)
                    <th class="align-middle" scope="col" rowspan="2" style="width: 7.5%">Edit</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 7.5%">Delete</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach($instrumens as $instrumen)
                <tr>
                    <td scope="row">
                        {{ $loop->iteration }}
                    </td>
                    <td scope="row">
                        {{ $instrumen->nama_instrumen_penilaian }}
                    </td>
                    <td scope="row">
                        {{ $instrumen->deskripsi_instrumen_penilaian }}
                    </td>
                    @if (auth()->user()->role == 1 || auth()->user()->role == 3)
                    <td scope="row">
                        <a class="btn btn-primary" href="{{ route('kurikulum.data.edit_instrumen', $instrumen->id_instrumen_penilaian) }}">Edit</a>
                    </td>
                    <td scope="row">
                        <a class="btn btn-danger" href="{{ route('kurikulum.data.delete_instrumen', $instrumen->id_instrumen_penilaian) }}">Delete</a>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection