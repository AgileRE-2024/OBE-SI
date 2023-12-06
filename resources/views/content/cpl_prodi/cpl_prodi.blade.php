@extends('layout.dashboard')

@section('content')
<div class="content px-4">
    <div class="card border" style="background-color: white">
        <div class="card-body" style="font-weight:600;">
            <h3>CPL Program Studi</h3>
            <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Daftar Capaian Pembelajaran Program Studi dan
                Detail Setiap Capaian Pembelajaran<b style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b></h5>
        </div>
    </div>
    @if (auth()->user()->role == 1 || auth()->user()->role == 3)
    <div class="d-flex justify-content-start pt-2">
        <div>
            <a class="btn btn-dark" href="{{ route('kurikulum.data.add_cpl_prodi') }}"><i class="bi bi-plus-square">
                </i>Tambah</a>
        </div>
    </div>
    @endif
    <div class="d-flex justify-content-end pt-2">
        <div class="pr-3">
            <a class="btn btn-outline-danger" href="{{ route('kurikulum.data.export_cpl_prodi', ['pdf']) }}"><i class="bi bi-file-earmark-pdf-fill"> </i>Export PDF</a>
        </div>
        <div>
            <a class="btn btn-success" href="{{ route('kurikulum.data.export_cpl_prodi', ['excel']) }}"><i class="bi bi-file-earmark-excel"> </i>Export Excel</a>
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
                    @if (auth()->user()->role == 1 || auth()->user()->role == 3)
                    <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Edit</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Delete</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($cpls as $cpl)
                <tr>
                    <td scope="row">
                        {{ $loop->iteration }}
                    </td>
                    <td scope="row">
                        {{ $cpl->kodeCPL }}
                    </td>
                    <td scope="row" style="word-break: break-word;
                            max-width: 75px;">
                        {{ $cpl->referensiCPL }}
                    </td>
                    <td scope="row" style="word-break: break-word;
                            max-width: 150px;">
                        {{ $cpl->deskripsiCPL }}
                    </td>
                    @if (auth()->user()->role == 1 || auth()->user()->role == 3)
                    <td scope="row">
                        <a class="btn btn-primary" href="{{ route('kurikulum.data.edit_cpl_prodi', $cpl->kodeCPL) }}">Edit</a>
                    </td>
                    <td scope="row">
                        <a class="btn btn-danger" href="{{ route('kurikulum.data.delete_cpl_prodi', $cpl->kodeCPL) }}">Delete</a>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection