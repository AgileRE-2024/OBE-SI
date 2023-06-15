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
        <div class="d-flex justify-content-start pt-2">
            <div>
                <a class="btn btn-success" href="{{ route('edit_rps.add_minggu_rps',['kodeRPS' => $kodeRPS]) }}"><i
                        class="bi bi-plus-square">
                    </i>Tambah</a>
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
                {{-- <th class="align-middle" scope="col" rowspan="2" style="width: 5%">Kode Minggu RPS</th> --}}
                {{-- <th class="align-middle" scope="col" rowspan="2" style="width: 5%">Kode Penilaian</th> --}}
                <th class="align-middle" scope="col" rowspan="2" style="width: 5%">Kode SubCMPK</th>
                <th class="align-middle" scope="col" rowspan="2" style="width: 5%">Minggu Ke-</th>
                <th class="align-middle" scope="col" colspan="1" style="width: 10%">Bentuk Pembelajaran
                </th>
                <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Indikator Minggu RPS
                </th>
                <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Kriteria Minggu RPS
                </th>
                <th class="align-middle" scope="col" rowspan="2" style="width: 20%">Deskripsi Pembelajaran
                </th>
                <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Materi Pembelajaran
                </th>
                </th>
                <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Teknik Penilaian
                </th>
                <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Edit</th>
                <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Delete</th>
            </tr>
        </thead>

        <tbody>
            @php
                        $rps = $rps_list->where('kodeRPS', 'RPS001')->first();
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
                        <a class="btn btn-primary"
                            href="{{ route('edit_rps.edit_minggu_rps',['kodeMingguRPS' => $minggu_rps->kodeMingguRPS, 'kodeRPS'=>$kodeRPS]) }}">Edit</a>
                    </td>
                    <td scope="row">
                        <a class="btn btn-danger"
                            href="{{ route('edit_rps.delete_minggu_rps',['kodeMingguRPS' => $minggu_rps->kodeMingguRPS, 'kodeRPS'=>$kodeRPS]) }}">Delete</a>
                    
                        {{-- <a class="btn btn-danger" href="{{ route('delete_minggu_rps', $minggu_rps->kodeMingguRPS) }}">Delete</a> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
        </div>
    </div>
@endsection
