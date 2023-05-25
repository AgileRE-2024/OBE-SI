@extends('layout.dashboard')

@section('content')
    <div class="content px-4">
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>Profil Lulusan</h3>
                <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Daftar Profil Lulusan Beserta Deskripsinya<b
                        style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b></h5>
            </div>
        </div>
        @if(auth()->user()->role==1)
        <div class="d-flex justify-content-start pt-2">
            <div>
                <a class="btn btn-success" href="{{ route('kurikulum.data.add_pl') }}"><i class="bi bi-file-earmark-excel">
                    </i>Tambah</a>
            </div>
        </div>
        @endif
        <div class="d-flex justify-content-end pt-2">
            <div class="pr-3">
                <a class="btn btn-outline-danger" href="{{ route('kurikulum.data.export_pl', ['pdf']) }}"><i
                        class="bi bi-file-earmark-pdf-fill"> </i>Export PDF</a>
            </div>
            <div>
                <a class="btn btn-success" href="{{ route('kurikulum.data.export_pl', ['excel']) }}"><i
                        class="bi bi-file-earmark-excel"> </i>Export Excel</a>
            </div>
        </div>
        <br>
        <div class="d-flex">
            <table class="table table-bordered" style="text-align: center">
                <thead class="table" style="background-color: lightgray">
                    <tr>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 5%">No</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Kode Profil Lulusan</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 50%">Deskripsi Profil Lulusan
                        </th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Edit</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pls as $pl)
                        <tr>
                            <td scope="row">
                                {{ $loop->iteration }}</td>
                            <td scope="row">
                                {{ $pl->kodePL }}</td>
                            <td scope="row">
                                {{ $pl->deskripsiPL }}</td>
                            <td scope="row">
                                @if(auth()->user()->role==1)
                                <a class="btn btn-primary"
                                    href="{{ route('kurikulum.data.edit_pl', $pl->kodePL) }}">Edit</a>
                                @endif
                            </td>
                            <td scope="row">
                                @if(auth()->user()->role==1)
                                <a class="btn btn-danger"
                                    href="{{ route('kurikulum.data.delete_pl', $pl->kodePL) }}">Delete</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
