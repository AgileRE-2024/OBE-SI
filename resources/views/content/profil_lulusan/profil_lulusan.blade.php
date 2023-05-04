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
        <div class="d-flex justify-content-start pt-2">
            <div>
                <a class="btn btn-success" href="{{ route('kurikulum.data.add_pl') }}"><i class="bi bi-file-earmark-excel">
                    </i>Tambah</a>
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
                            <td scope="row" style="background-color: yellow;">
                                {{ $loop->iteration }}</td>
                            <td scope="row" style="background-color: yellow;">
                                {{ $pl->kodePL }}</td>
                            <td scope="row" style="background-color: yellow;">
                                {{ $pl->deskripsiPL }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
