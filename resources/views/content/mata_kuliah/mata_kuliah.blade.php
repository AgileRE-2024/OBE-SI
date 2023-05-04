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
        <div class="d-flex justify-content-start pt-2">
            <div>
                <a class="btn btn-success" href="{{ route('kurikulum.data.add_mata_kuliah') }}"><i
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
                            <td scope="row" style="background-color: yellow;">
                                {{ $loop->iteration }}</td>
                            <td scope="row" style="background-color: yellow;">
                                {{ $mk->kodeMK }}
                            </td>
                            <td scope="row" style="background-color: yellow;">
                                {{ $mk->namaMK }}
                            </td>
                            <td scope="row" style="background-color: yellow; width:10%">
                                @if ($mk->mat_kodeMK)
                                    {{ $mk->mat_kodeMK }}
                                @else
                                    {{ '-' }}
                                @endif
                            </td>
                            <td scope="row" style="background-color: yellow; width:10%">
                                {{ $mk->prasyaratTambahan }}
                            </td>
                            <td scope="row" style="background-color: yellow;">
                                @if ($mk->jenisMK == '1')
                                    {{ 'Teori' }}
                                @elseif ($mk->jenisMK == '2')
                                    {{ 'Praktikum' }}
                                @elseif ($mk->jenisMK == '3')
                                    {{ 'Praktikum Lapangan' }}
                                @endif
                            </td>
                            <td scope="row" style="background-color: yellow;">
                                @if ($mk->kategoriMK == '1')
                                    {{ 'Wajib' }}
                                @else
                                    {{ 'Pilihan' }}
                                @endif
                            </td>
                            <td scope="row" style="background-color: yellow;">
                                {{ $mk->sks }}
                            </td>
                            <td scope="row" style="background-color: yellow;">
                                {{ $mk->semester }}
                            </td>
                            <td scope="row" style="background-color: yellow;">
                                {{ $mk->deskripsiMK }}
                            </td>
                            <td scope="row" style="background-color: yellow;">
                                <a class="btn btn-primary"
                                    href="{{ route('kurikulum.data.edit_mata_kuliah', $mk->kodeMK) }}">Edit</a>
                            </td>
                            <td scope="row" style="background-color: yellow;">
                                <a class="btn btn-danger"
                                    href="{{ route('kurikulum.data.delete_mata_kuliah', $mk->kodeMK) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
