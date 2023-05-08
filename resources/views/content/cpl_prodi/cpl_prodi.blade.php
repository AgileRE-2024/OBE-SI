@extends('layout.dashboard')

@section('content')
    <div class="content px-4">
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>CPL Program Studi</h3>
                <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Daftar Capaian Pembelajaran Program Studi dan
                    Detail Setiap Capaian Pembelajaran<b style="display:inline-block;transform: scaleX(-1)"><i
                            class="bi bi-quote"></i></b></h5>
            </div>
        </div>
        <div class="d-flex justify-content-start pt-2">
            <div>
                <a class="btn btn-success" href="{{ route('kurikulum.data.add_cpl_prodi') }}"><i
                        class="bi bi-file-earmark-excel">
                    </i>Tambah</a>
            </div>
        </div>
        <br>
        <div class="d-flex">
            <table class="table table-bordered" style="text-align: center">
                <thead class="table" style="background-color: lightgray">
                    <tr>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 5%">No</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Kode Capaian Pembelajaran
                        </th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Referensi Capaian
                            Pembelajaran</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 50%">Deskripsi Capaian
                            Pembelajaran</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Edit</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cpls as $cpl)
                        <tr>
                            <td scope="row">
                                {{ $loop->iteration }}</td>
                            <td scope="row">
                                {{ $cpl->kodeCPL }}</td>
                            <td scope="row">
                                {{ $cpl->referensiCPL }}
                            </td>
                            <td scope="row">
                                {{ $cpl->deskripsiCPL }}
                            </td>
                            <td scope="row">
                                <a class="btn btn-primary"
                                    href="{{ route('kurikulum.data.edit_cpl_prodi', $cpl->kodeCPL) }}">Edit</a>
                            </td>
                            <td scope="row">
                                <a class="btn btn-danger"
                                    href="{{ route('kurikulum.data.delete_cpl_prodi', $cpl->kodeCPL) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
