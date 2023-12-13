@extends('layout.dashboard')

@section('content')
<div class="content px-4">
    <div class="card border" style="background-color: white">
        <div class="card-body" style="font-weight:600;">
            <h3>Pustaka</h3>
            <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Daftar Data Pustaka<b
                    style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b></h5>
        </div>
    </div>
    <div class="d-flex justify-content-start pt-2">
        <div class="pr-3">
            <a class="btn btn-dark" href="{{ route('kurikulum.data.add_pustaka') }}"><i class="bi bi-plus-square">
                </i>Tambah</a>
        </div>
        <div class="pr-3">
            <a class="btn btn-outline-danger" href="{{ route('export_PDF_pustaka') }}"><i class="bi bi-file-earmark-pdf-fill">
                </i>Export PDF</a>
        </div>
        <div>
            <a class="btn btn-success" href="{{ route('export_excel_pustaka') }}"><i class="bi bi-file-earmark-excel"> </i>Export
                Excel</a>
        </div>
    </div>
    
    {{--<div class="d-flex justify-content-end pt-2">
        <div class="pr-3">
            <a class="btn btn-outline-danger" href="{{ route('kurikulum.data.export_pl', ['pdf']) }}"><i
        class="bi bi-file-earmark-pdf-fill"> </i>Export PDF</a>
</div>
<div>
    <a class="btn btn-success" href="{{ route('kurikulum.data.export_pl', ['excel']) }}"><i
            class="bi bi-file-earmark-excel"> </i>Export Excel</a>
</div>
</div>--}}
<br>
<div class="d-flex">
    <table class="table table-bordered" style="text-align: center">
        <thead class="table" style="background-color: lightgray">
            <tr>
                <th class="align-middle" scope="col" rowspan="2" style="width: 5%">No</th>
                <th class="align-middle" scope="col" rowspan="2" style="width: 40%">Judul</th>
                <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Nama Penulis
                </th>
                <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Tahun
                </th>
                <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Penerbit</th>
                <th class="align-middle" scope="col" rowspan="2" style="width: 7.5%">Edit</th>
                <th class="align-middle" scope="col" rowspan="2" style="width: 7.5%">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pustaka as $pustakaItem)
            <tr>
                <td scope="row">
                    {{ $loop->iteration }}</td>
                <td scope="row">
                    {{ $pustakaItem->judul }}</td>
                <td scope="row">
                    {{ $pustakaItem->nama_penulis }}</td>
                <td scope="row">
                    {{ $pustakaItem->tahun }}</td>
                <td scope="row">
                    {{ $pustakaItem->penerbit }}</td>
                <td scope="row">
                    <a class="btn btn-primary"
                        href="{{ route('kurikulum.data.edit_pustaka', $pustakaItem->id_pustaka) }}">Edit</a>
                </td>
                <td scope="row">
                    <a class="btn btn-danger"
                        href="{{ route('kurikulum.data.delete_pustaka', $pustakaItem->id_pustaka) }}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection