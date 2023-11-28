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
                <!-- @php
                        $rps = $rps_list->where('kodeRPS', $kodeRPS)->first();
                        $mk = $mk_list->where('kodeMK', $rps->kodeMK)->first();
                        $list_cpmk = collect();
                        $uniqueIds = [];
                        
                        foreach ($mk->CPMK as $cpmk) {
                            $kodeCPMK = $cpmk->kodeCPMK;
                            $deskripsiCPMK = $cpmk->deskripsiCPMK;
                        
                            if (!in_array($kodeCPMK, $uniqueIds)) {
                                $uniqueIds[] = $kodeCPMK;
                                $list_cpmk->push([
                                    'kodeCPMK' => $kodeCPMK,
                                    'deskripsiCPMK' => $deskripsiCPMK,
                                ]);
                            }
                        }
                        $list_kodeCPMK = $list_cpmk->pluck('kodeCPMK');
                    @endphp
            @foreach ($minggu_rps_list as $minggu_rps)
                <tr>
                    <td scope="row">{{ $minggu_rps->kodeSubCPMK }}</td>
                    <td scope="row">{{ $minggu_rps->mingguKe }}</td>
                    @if ($minggu_rps->bentukPembelajaran == '1')
                        <td scope="row">{{ 'Luring' }}</td>
                    @else
                        <td scope="row">{{ 'Daring' }} </td>
                    @endif
                    <td scope="row">{{ $minggu_rps->indikatorMingguRPS }}</td>
                    <td scope="row">{{ $minggu_rps->kriteriaMingguRPS }}</td>
                    <td scope="row">{{ $minggu_rps->deskripsiPembelajaran }}</td>
                    <td scope="row">{{ $minggu_rps->materiPembelajaran }}</td>
                    <td scope="row">
                        {{ $a =$detail_rps_list->where('kodeMingguRPS', $minggu_rps->kodeMingguRPS)->first()->kodePenilaian ?? '-' }}
                        <br>
                        {{ $teknik_penilaian_list->where('kodePenilaian', $a)->first()->teknikPenilaian ?? '-' }}

                        {{-- {{ $teknik_penilaian['teknikPenilaian'] ?? '-' }} --}}
                    </td>
                    <td scope="row">
                        <a id="edit" class="btn btn-primary"
                            href="{{ route('edit_rps.edit_minggu_rps',['kodeMingguRPS' => $minggu_rps->kodeMingguRPS, 'kodeRPS'=>$kodeRPS]) }}">Edit</a>
                    </td>
                    <td scope="row">
                        <a id="delete" class="btn btn-danger"
                            href="{{ route('edit_rps.delete_minggu_rps',['kodeMingguRPS' => $minggu_rps->kodeMingguRPS, 'kodeRPS'=>$kodeRPS]) }}">Delete</a>
                    
                        {{-- <a class="btn btn-danger" href="{{ route('delete_minggu_rps', $minggu_rps->kodeMingguRPS) }}">Delete</a> --}}
                    </td>
                </tr>
            @endforeach -->

                @for($i=1;$i<=14;$i++) <tr>
                    <td scope="row">{{ $i }}</td>
                    <td scope="row">belum ada data</td>
                    <td scope="row">belum ada data</td>
                    <td scope="row">belum ada data</td>
                    <td scope="row">belum ada data</td>
                    <td scope="row">belum ada data</td>
                    <td scope="row">belum ada data</td>
                    <td scope="row">belum ada data</td>
                    <td scope="row">belum ada data</td>
                    <td scope="row">belum ada data</td>
                    <td scope="row">
                        <a id="edit" class="btn btn-primary" href="#">Edit</a>
                    </td>
                    </tr>
                    @endfor
            </tbody>
        </table>
    </div>
</div>
@endsection
