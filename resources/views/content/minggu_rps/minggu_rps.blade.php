@extends('layout.dashboard')

@section('content')
<div class="content px-4">
    @include('content.teknik_penilaian.button')
    <br><br>
    <div class="card border" style="background-color: white">
        <div class="card-body" style="font-weight:600;">
            <h3>Minggu Rencana Pembelajaran Semester (RPS)</h3>
            <h6 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Minggu RPS merupakan detail pembelajaran
                untuk setiap minggu dalam mata kuliah.<b style="display:inline-block;transform: scaleX(-1)"><i
                        class="bi bi-quote"></i></b></h6>
        </div>
    </div>
    <!-- <div class="d-flex justify-content-start pt-2">
        <div>
            <a id="tambah" class="btn btn-success"
                href="{{ route('edit_rps.add_minggu_rps',['kodeRPS' => $kodeRPS]) }}"><i class="bi bi-plus-square">
                </i>Tambah</a>
        </div>
    </div> -->

    <br>
    @if (session('warning'))
    <div class="alert alert-danger">
        {{ session('warning') }}
    </div>
    @endif

    <div class="d-flex">
        <table class="table table-bordered" style="text-align: center">
            <thead style="background-color: lightgray">
                <tr>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 5%">Minggu Ke-</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Sub-Capaian Mata Kuliah
                    </th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Bahan Kajian
                    </th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Bentuk dan Metode Pembelajaran
                    </th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 20%">Media
                    </th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Waktu
                    </th>
                    </th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Pengalaman belajar mahasiswa
                    </th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Kriteria Penilaian dan Indikator
                    </th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Bobot Nilai
                    </th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Referensi
                    </th>
                    <th id="edit" class="align-middle" scope="col" rowspan="2" style="width: 15%">Edit</th>
                </tr>
            </thead>

            <tbody>
            @foreach($minggu_rps_list as $key => $minggurps)
            <tr>
                    <td scope="row">{{ $key + 1 }}</td>
                    <td scope="row">{{ $minggurps->pertemuan }}</td>
                    <td scope="row">{{ $minggurps->pembelajaran }}</td>
                    <td scope="row">{{ $minggurps->teknik }}</td>
                    <td scope="row">{{ $minggurps->bobot }}</td>
                    <td scope="row">{{ $minggurps->alatukur }}</td>
                    <td scope="row">{{ $minggurps->bahasan }}</td>
                    <td scope="row">{{ $minggurps->penutup }}</td>
                    <td scope="row">{{ $minggurps->tipe }}</td>
                    <td scope="row">{{ $minggurps->sifat }}</td>
                    <td scope="row">
                        <a id="edit" class="btn btn-primary" href="{{ route('edit_rps.edit_minggu_rps', ['kodeMingguRPS => 123', 'kodeRPS' => $kodeRPS ]) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
