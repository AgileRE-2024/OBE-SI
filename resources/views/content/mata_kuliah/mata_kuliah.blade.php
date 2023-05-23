@extends('layout.dashboard')

@section('content')
    <div class="content px-4">
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>Mata Kuliah</h3>
                <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Daftar Mata Kuliah Beserta Detailnya<b
                        style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b></h5>
            </div>
        </div>
        <div>
            @if(auth()->user()->role==1)
            <div class="d-flex justify-content-start pt-2">
                <div>
                    <a class="btn btn-success" href="{{ route('kurikulum.data.add_mata_kuliah') }}"><i
                            class="bi bi-file-earmark-excel">
                        </i>Tambah</a>
                </div>
            </div>
            @endif
            <div class="d-flex justify-content-end pt-2">
                <div class="pr-3">
                    <a class="btn btn-outline-danger" href="{{ route('kurikulum.data.export_mata_kuliah', ['pdf']) }}"><i
                            class="bi bi-file-earmark-pdf-fill"> </i>Export PDF</a>
                </div>
                <div>
                    <a class="btn btn-success" href="{{ route('kurikulum.data.export_mata_kuliah', ['excel']) }}"><i
                            class="bi bi-file-earmark-excel"> </i>Export Excel</a>
                </div>
            </div>
        </div>

        <br>
        <div class="d-flex">
            <table class="table table-bordered" style="text-align: center">
                <thead class="table" style="background-color: lightgray">
                    <tr>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 5%">No</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Kode Mata Kuliah</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Nama Mata Kuliah</th>
                        <th class="align-middle" scope="col" rowspan="2" colspan="2" style="width: 20%">Prasyarat
                        </th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Jenis Mata Kuliah</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Kategori Mata Kuliah</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">SKS Mata Kuliah</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Semester Mata Kuliah</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 50%">Deskripsi Mata Kuliah</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Edit</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mks as $mk)
                        <tr>
                            <td scope="row">
                                {{ $loop->iteration }}</td>
                            <td scope="row">
                                {{ $mk->kodeMK }}
                            </td>
                            <td scope="row">
                                {{ $mk->namaMK }}
                            </td>
                            <td scope="row" style="width:10%">
                                @if ($mk->mat_kodeMK)
                                    {{ $mk->mat_kodeMK }}
                                @else
                                    {{ '-' }}
                                @endif
                            </td>
                            <td scope="row" style="width:10%">
                                {{ $mk->prasyaratTambahan }}
                            </td>
                            <td scope="row">
                                @if ($mk->jenisMK == '1')
                                    {{ 'Teori' }}
                                @elseif ($mk->jenisMK == '2')
                                    {{ 'Praktikum' }}
                                @elseif ($mk->jenisMK == '3')
                                    {{ 'Praktikum Lapangan' }}
                                @endif
                            </td>
                            <td scope="row">
                                @if ($mk->kategoriMK == '1')
                                    {{ 'Wajib' }}
                                @else
                                    {{ 'Pilihan' }}
                                @endif
                            </td>
                            <td scope="row">
                                {{ $mk->sks }}
                            </td>
                            <td scope="row">
                                {{ $mk->semester }}
                            </td>
                            <td scope="row">
                                {{ $mk->deskripsiMK }}
                            </td>
                            <td scope="row">
                                @if(auth()->user()->role==1)
                                <a class="btn btn-primary"
                                    href="{{ route('kurikulum.data.edit_mata_kuliah', $mk->kodeMK) }}">Edit</a>
                                @endif
                            </td>
                            <td scope="row">
                                @if(auth()->user()->role==1)
                                <a class="btn btn-danger"
                                    href="{{ route('kurikulum.data.delete_mata_kuliah', $mk->kodeMK) }}">Delete</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
