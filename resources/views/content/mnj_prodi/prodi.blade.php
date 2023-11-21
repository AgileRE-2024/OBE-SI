@extends('layout.dashboard')

@section('content')
    <div class="content px-4">
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>Manajemen Prodi</h3>
                <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Manajemen Prodi<b
                        style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b></h5>
            </div>
        </div>
        <div class="d-flex justify-content-end pt-2">
            {{-- <div class="pr-3">
                <a class="btn btn-outline-danger" href="{{ route('kurikulum.data.export_pl', ['pdf']) }}"><i
                        class="bi bi-file-earmark-pdf-fill"> </i>Export PDF</a>
            </div>
            <div>
                <a class="btn btn-success" href="{{ route('kurikulum.data.export_pl', ['excel']) }}"><i
                        class="bi bi-file-earmark-excel"> </i>Export Excel</a>
            </div> --}}
        </div>
        <br>
        <div class="d-flex">
            <table class="table table-bordered" style="text-align: center">
                <thead class="table" style="background-color: lightgray">
                    <tr>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 5%">No</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Nama Prodi</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 50%">Fakultas</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Nama PT</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Akreditasi</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Jenjang Pendidikan</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Gelar Lulusan</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Visi</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Misi</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Tujuan</th>
                        @if (auth()->user()->role == 2)
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Edit</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prodi as $pd)
                        <tr>
                            <td scope="row">
                                {{ $loop->iteration }}</td>
                            <td scope="row">
                                {{ $pd->namaProdi }}</td>
                            <td scope="row">
                                {{ $pd->fakultas }}</td>
                            <td scope="row">
                                {{ $pd->namaPT }}</td>
                            <td scope="row">
                                {{ $pd->akreditasi }}</td>
                            <td scope="row">
                                {{ $pd->jenjangPendidikan }}</td>
                            <td scope="row">
                                {{ $pd->gelarLulusan }}</td>
                            <td scope="row">
                                {{ $pd->visi }}</td>
                            <td scope="row">
                                {{ $pd->misi }}</td>
                            <td scope="row">
                                {{ $pd->tujuan }}</td>
                            @if (auth()->user()->role == 2)
                            <td scope="row">    
                                <a class="btn btn-primary"
                                    href="{{ route('manajemen.edit_prodi', $pd->namaProdi) }}">Edit</a>
                            </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
