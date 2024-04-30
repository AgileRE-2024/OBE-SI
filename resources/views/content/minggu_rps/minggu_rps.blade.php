@extends('layout.dashboard')

@section('content')
<div class="content px-4">
    @include('content.teknik_penilaian.button')
    <br><br>
    <div class="card border" style="background-color: white">
        <div class="card-body" style="font-weight:600;">
            <h3>Minggu Rencana Pembelajaran Semester (RPS)</h3>
            <h6 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Minggu RPS merupakan detail pembelajaran
                untuk setiap minggu dalam mata kuliah.<b style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b></h6>
        </div>
    </div>

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
                    <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Pokok Bahasan
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
                    <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Teknik Penilaian
                    </th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Referensi
                    </th>
                    @if (auth()->user()->role == 0 || auth()->user()->role == 3)
                    <th id="edit" class="align-middle" scope="col" rowspan="2" style="width: 15%">Edit</th>
                    @endif
                </tr>
            </thead>

            <tbody>
                @foreach($minggu_rps_list as $key => $minggurps)
                <tr>
                    @if($key < 7)
                    <td scope="row">{{ $key + 1 }}</td>
                    @else
                    <td scope="row">{{ $key + 2 }}</td>
                    @endif
                    @if($minggurps->SubCPMK)
                    <td scope="row">{{ $minggurps->SubCPMK->deskripsiSubCPMK }}</td>
                    @else
                    <td scope="row"></td>
                    @endif
                    <td scope="row">{{ $minggurps->bahan_kajian }}</td>
                    <td scope="row">
                        <div class="col">
                            @if($minggurps->id_bentuk)
                            <p>Bentuk: {{ $minggurps->Bentuk->nama_bentuk }}</p>
                            @endif
                            @if($minggurps->Metode()->count() > 0)
                                <p>Metode:</p>
                                    @foreach($minggurps->Metode as $item)
                                    <p>{{ $item->nama_metode }}</p>
                                    @endforeach
                            @endif
                            @if($minggurps->penugasan)
                            <p>Penugasan: {{ $minggurps->penugasan }}</p>
                            @endif
                            @if($minggurps->luring === 1)
                            <p>Luring</p>
                            @elseif($minggurps->luring === 0)
                            <p>Daring</p>
                            @endif
                        </div>
                    </td>
                    <td scope="row">{{ $minggurps->Media->nama_media ?? '' }}</td>
                    <td scope="row">{{ $minggurps->waktuPembelajaran }}</td>
                    <td scope="row">{{ $minggurps->pengalaman_belajar }}</td>
                    <td scope="row">
                        @if($minggurps->kodeSubCPMK)
                            <p>Kriteria penilaian: {{ $minggurps->SubCPMK->kriteriaPenilaian ?? '-' }}</p>
                            <p>Indikator: {{ $minggurps->SubCPMK->indikatorPenilaian ?? '-' }}</p>
                        @endif
                    </td>
                    <td scope="row">
                        @if($minggurps->id_teknik_penilaian)
                            <p>Teknik penilaian: {{ $minggurps->Teknik_Penilaian_RPS->nama_teknik_penilaian ?? '-' }}</p>
                            <p>Instrumen penilaian: {{ $minggurps->Instrumen_Penilaian->nama_instrumen_penilaian ?? '-' }}</p>
                            <p>Bobot nilai: {{ $minggurps->bobot_nilai ?? '-' }}</p>
                        @endif
                    </td>
                    <td scope="row">
                        @if($minggurps->Pustaka)
                        @foreach($minggurps->PustakaMingguRPS as $pmItem)
                        <p style="font-style:italic;" class="mb-0 pb-0">{{ $pmItem->Pustaka->judul }}</p>
                        <p class="mt-0 pt-0">{{ $pmItem->referensi }}</p>
                        @endforeach
                        @endif
                    </td>
                    @if (auth()->user()->role == 0 || auth()->user()->role == 3)
                    <td scope="row">
                        <a id="edit" class="btn btn-primary" href="{{ route('edit_rps.edit_minggu_rps', ['kodeMingguRPS' => $minggurps->kodeMingguRPS]) }}">Edit</a>
                    </td>
                    @endif
                </tr>
                @if($key == 6)
                <td scope="row">{{ $key + 2 }}</td>
                <td colspan="12" class="text-center">UTS</td>
                @endif
                @endforeach
                <td scope="row">16</td>
                <td colspan="12" class="text-center">UAS</td>
            </tbody>
        </table>
    </div>
</div>
@endsection