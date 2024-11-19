@extends('layout.dashboard')

@section('content')
    <div class="content px-4 mb-5">
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>Metode Pembelajaran</h3>
            </div>
        </div>
        @if (auth()->user()->role == 1 || auth()->user()->role == 3)
            <div class="d-flex justify-content-start pt-2">
                <div class="pr-3">
                    <a class="btn btn-dark" href="{{ route('kurikulum.data.add_metode') }}"><i class="bi bi-plus-square">
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
                        <th class="align-middle" scope="col" rowspan="2" style="width: 30%">Metode Pembelajaran</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 45%">Deskripsi</th>
                        @if (auth()->user()->role == 1 || auth()->user()->role == 3)
                            <th class="align-middle" scope="col" rowspan="2" style="width: 7.5%">Edit</th>
                            <th class="align-middle" scope="col" rowspan="2" style="width: 7.5%">Delete</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($metodes as $metode)
                        <tr>
                            <td scope="row">
                                {{ $loop->iteration }}
                            </td>
                            <td scope="row">
                                {{ $metode->nama_metode }}
                            </td>
                            <td scope="row">
                                {{ $metode->deskripsi_metode }}
                            </td>
                            @if (auth()->user()->role == 1 || auth()->user()->role == 3)
                                <td scope="row">
                                    <a class="btn btn-primary"
                                        href="{{ route('kurikulum.data.edit_metode', $metode->id_metode) }}">Edit</a>
                                </td>
                                <td scope="row">
                                    <a class="btn btn-danger"
                                        href="{{ route('kurikulum.data.delete_metode', $metode->id_metode) }}">Delete</a>
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
                <h3>Bentuk Pembelajaran</h3>
            </div>
        </div>
        @if (auth()->user()->role == 1 || auth()->user()->role == 3)
            <div class="d-flex justify-content-start pt-2">
                <div class="pr-3">
                    <a class="btn btn-dark" href="{{ route('kurikulum.data.add_bentuk') }}"><i class="bi bi-plus-square">
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
                        <th class="align-middle" scope="col" rowspan="2" style="width: 30%">Bentuk Pembelajaran</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 45%">Deskripsi</th>
                        @if (auth()->user()->role == 1 || auth()->user()->role == 3)
                            <th class="align-middle" scope="col" rowspan="2" style="width: 7.5%">Edit</th>
                            <th class="align-middle" scope="col" rowspan="2" style="width: 7.5%">Delete</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bentuks as $bentuk)
                        <tr>
                            <td scope="row">
                                {{ $loop->iteration }}
                            </td>
                            <td scope="row">
                                {{ $bentuk->nama_bentuk }}
                            </td>
                            <td scope="row">
                                {{ $bentuk->deskripsi_bentuk }}
                            </td>
                            @if (auth()->user()->role == 1 || auth()->user()->role == 3)
                                <td scope="row">
                                    <a class="btn btn-primary"
                                        href="{{ route('kurikulum.data.edit_bentuk', $bentuk->id_bentuk) }}">Edit</a>
                                </td>
                                <td scope="row">
                                    <a class="btn btn-danger"
                                        href="{{ route('kurikulum.data.delete_bentuk', $bentuk->id_bentuk) }}">Delete</a>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="content px-4">
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>Media Pembelajaran</h3>
            </div>
        </div>
        @if (auth()->user()->role == 1 || auth()->user()->role == 3)
            <div class="d-flex justify-content-start pt-2">
                <div class="pr-3">
                    <a class="btn btn-dark" href="{{ route('kurikulum.data.add_media') }}"><i class="bi bi-plus-square">
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
                        <th class="align-middle" scope="col" rowspan="2" style="width: 30%">Media Pembelajaran
                        </th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 45%">Deskripsi</th>
                        @if (auth()->user()->role == 1 || auth()->user()->role == 3)
                            <th class="align-middle" scope="col" rowspan="2" style="width: 7.5%">Edit</th>
                            <th class="align-middle" scope="col" rowspan="2" style="width: 7.5%">Delete</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($medias as $media)
                        <tr>
                            <td scope="row">
                                {{ $loop->iteration }}
                            </td>
                            <td scope="row">
                                {{ $media->nama_media }}
                            </td>
                            <td scope="row">
                                {{ $media->deskripsi_media }}
                            </td>
                            @if (auth()->user()->role == 1 || auth()->user()->role == 3)
                                <td scope="row">
                                    <a class="btn btn-primary"
                                        href="{{ route('kurikulum.data.edit_media', $media->id_media) }}">Edit</a>
                                </td>
                                <td scope="row">
                                    <a class="btn btn-danger"
                                        href="{{ route('kurikulum.data.delete_media', $media->id_media) }}">Delete</a>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
