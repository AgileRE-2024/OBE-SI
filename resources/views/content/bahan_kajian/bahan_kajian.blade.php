@extends('layout.dashboard')

@section('content')
    <div class="content px-4">
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>Bahan Kajian</h3>
                <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Daftar Bahan Kajian Yang Akan Menjadi Patokan
                    Program Studi<b style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b></h5>
            </div>
        </div>
        <div class="d-flex justify-content-start pt-2">
            <div>
                <a class="btn btn-success" href="{{ route('kurikulum.data.add_bahan_kajian') }}"><i
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
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Kode Bahan Kajian</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 50%">Nama Bahan Kajian</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Kategori Bahan Kajian</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 50%">Referensi Bahan Kajian
                        </th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Edit</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bks as $bk)
                        <tr>
                            <td scope="row" style="background-color: yellow;">
                                {{ $loop->iteration }}</td>
                            <td scope="row" style="background-color: yellow;">
                                {{ $bk->kodeBK }}
                            </td>
                            <td scope="row" style="background-color: yellow;">
                                {{ $bk->namaBK }}
                            </td>
                            <td scope="row" style="background-color: yellow;">
                                @if ($bk->kategoriBK == '1')
                                    {{ 'Wajib' }}
                                @else
                                    {{ 'Pilihan' }}
                                @endif
                            </td>
                            <td scope="row" style="background-color: yellow;">
                                {{ $bk->referensiBK }}
                            </td>
                            <td scope="row" style="background-color: yellow;">
                                <a class="btn btn-primary"
                                    href="{{ route('kurikulum.data.edit_bahan_kajian', $bk->kodeBK) }}">Edit</a>
                            </td>
                            <td scope="row" style="background-color: yellow;">
                                <a class="btn btn-danger"
                                    href="{{ route('kurikulum.data.delete_bahan_kajian', $bk->kodeBK) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
