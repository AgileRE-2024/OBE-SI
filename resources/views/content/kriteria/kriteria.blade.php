@extends('layout.dashboard')

@section('content')
    <div class="content px-4">
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>Kriteria Penilaian</h3>
                <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Daftar Opsi Kriteria Penilaian<b
                        style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b></h5>
            </div>
        </div>
        @if (auth()->user()->role == 1 || auth()->user()->role == 3)
            <div class="d-flex justify-content-start pt-2">
                <div class="pr-3">
                    <a class="btn btn-dark" href="{{ route('kurikulum.data.add_kriteria') }}"><i class="bi bi-plus-square">
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
                        <th class="align-middle" scope="col" rowspan="2" style="width: 30%">Kriteria Penilaian</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 45%">Deskripsi</th>
                        @if (auth()->user()->role == 1 || auth()->user()->role == 3)
                            <th class="align-middle" scope="col" rowspan="2" style="width: 7.5%">Edit</th>
                            <th class="align-middle" scope="col" rowspan="2" style="width: 7.5%">Delete</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kriterias as $kriteria)
                        <tr>
                            <td scope="row">
                                {{ $loop->iteration }}
                            </td>
                            <td scope="row">
                                {{ $kriteria->nama_kriteria_penilaians }}
                            </td>
                            <td scope="row">
                                {{ $kriteria->deskripsi_kriteria_penilaians }}
                            </td>
                            @if (auth()->user()->role == 1 || auth()->user()->role == 3)
                                <td scope="row">
                                    <a class="btn btn-primary"
                                        href="{{ route('kurikulum.data.edit_kriteria', $kriteria->id_kriteria_penilaians) }}">Edit</a>
                                </td>
                                <td scope="row">
                                    <a class="btn btn-danger"
                                        href="{{ route('kurikulum.data.delete_kriteria', $kriteria->id_kriteria_penilaians) }}">Delete</a>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
