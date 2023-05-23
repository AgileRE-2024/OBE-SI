@extends('layout.dashboard')

@section('content')
    <div class="content px-4">
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>Mekanisme dan Tahap Penilaian</h3>
                <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>
                    Halaman Mekanisme dan Tahap Penilaian berisikan tahap
                    penilaian, teknik penilaian,
                    instrumen, kriteria dan bobot yang ditentukan oleh Program Studi berdasarkan mata
                    kuliah, CPL yang dititipkan pada matakuliah dan capaian pembelajaran mata kuliah
                    yang ditentukan. Pemilihan metode perhitungan dan bobot pencapaian CPL
                    dan CPMK ditentukan berdasarkan kebijakan Program Studi.<b
                        style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b></h5>
            </div>
        </div>
        <div class="d-flex justify-content-end pt-2">
            <div class="pr-3">
                <a id="exportPDF" class="btn btn-outline-danger"
                    href="{{ route('penilaian.tahap_penilaian.export', ['pdf']) }}"><i class="bi bi-file-earmark-pdf-fill">
                    </i>Export PDF</a>
            </div>
            <div>
                <a id="exportExcel" class="btn btn-success"
                    href="{{ route('penilaian.tahap_penilaian.export', ['excel']) }}"><i class="bi bi-file-earmark-excel">
                    </i>Export
                    Excel</a>
            </div>
        </div>
        <br />
        <table class="table table-bordered" style="text-align: center">
            <thead class="table" style="background-color: lightgray">
                <tr>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 5%">No</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 8%">Kode CPL</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 8%">Kode MK</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Kode CPMK</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Tahap Penilaian</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Teknik Penilaian</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Instrumen</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 16%">Kriteria</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 8%">Bobot</th>
                </tr>
            </thead>
            <tbody>
                @php
                    if (!function_exists('setTahapPenilaian')) {
                        function setTahapPenilaian($asli, $baru)
                        {
                            if ($asli !== '') {
                                $prefix_asli = explode(' ', $asli)[0];
                                $prefix_baru = explode(' ', $baru)[0];
                                if (strpos($asli, $prefix_baru) === false) {
                                    if (strpos($asli, '-')) {
                                        if (($prefix_asli === 'Awal' && explode(' ', $asli)[2] !== 'Akhir') || ($prefix_asli !== 'Awal' && explode(' ', $asli)[2] === 'Akhir')) {
                                            return 'Awal - Akhir Semester';
                                        }
                                        return $asli;
                                    } else {
                                        switch ($prefix_asli) {
                                            case 'Awal':
                                                return $prefix_asli . ' - ' . $prefix_baru . ' ' . explode(' ', $asli)[1];

                                            case 'Tengah':
                                                if ($prefix_baru == 'Awal') {
                                                    return $prefix_baru . ' - ' . $prefix_asli . ' ' . explode(' ', $asli)[1];
                                                } else {
                                                    return $prefix_asli . ' - ' . $prefix_baru . ' ' . explode(' ', $asli)[1];
                                                }

                                            case 'Akhir':
                                                return $prefix_baru . ' - ' . $prefix_asli . ' ' . explode(' ', $asli)[1];

                                            default:
                                                return $asli;
                                        }
                                    }
                                }
                                return $asli;
                            }
                            return $baru;
                        }
                    }

                    $iteration = 0;
                @endphp
                @foreach ($list_cpl as $cpl)
                    @foreach ($cpl->CPMK as $cpmk)
                        @foreach ($cpmk->Mata_Kuliah as $mk)
                            <tr>
                                @php
                                    $iteration++;
                                    $bobot = 0;
                                    $tahap_penilaian = '';
                                    $teknik_penilaian = '';
                                    $instrumen = [];
                                    $kriteria = [];

                                    foreach ($cpmk->SubCPMK as $subCpmk) {
                                        if ($subCpmk->Minggu_RPS->count()) {
                                            foreach ($list_detail_rps->where('kodeMingguRPS', $subCpmk->Minggu_RPS->first()->kodeMingguRPS) as $detail_rps) {
                                                $data_teknik_penilaian = $detail_rps->Teknik_Penilaian;

                                                $bobot += $data_teknik_penilaian->bobotPenilaian;

                                                $tahap_penilaian = setTahapPenilaian($tahap_penilaian, $data_teknik_penilaian->tahapPenilaian);

                                                $teknik_penilaian = $teknik_penilaian > 0 ? $teknik_penilaian . '; ' . $data_teknik_penilaian->teknikPenilaian : ($teknik_penilaian == '' ? $data_teknik_penilaian->teknikPenilaian : $teknik_penilaian);
                                                if (!in_array($data_teknik_penilaian->instrumenPenilaian, $instrumen)) {
                                                    array_push($instrumen, $data_teknik_penilaian->instrumenPenilaian);
                                                }
                                                if (!in_array($data_teknik_penilaian->kriteriaPenilaian, $kriteria)) {
                                                    array_push($kriteria, $data_teknik_penilaian->kriteriaPenilaian);
                                                }
                                            }
                                        }
                                    }
                                @endphp
                                <th class="align-middle" scope="row" style="width: 5%">{{ $iteration }}</th>
                                <th class="align-middle" scope="row" style="width: 8%">
                                    <span itemid="{{ $cpl->deskripsiCPL }}">
                                        {{ $cpl->kodeCPL }}
                                    </span>
                                </th>
                                <th class="align-middle" scope="row" style="width: 8%">
                                    <span itemid="{{ $mk->namaMK }}">
                                        {{ $mk->kodeMK }}
                                    </span>
                                </th>
                                <th class="align-middle" scope="row" style="width: 10%">
                                    <span itemid="{{ $cpmk->deskripsiCPMK }}">
                                        {{ $cpmk->kodeCPMK }}
                                    </span>
                                </th>
                                <td class="align-middle" scope="row" style="width: 15%">{{ $tahap_penilaian }}</td>
                                <td class="align-middle" scope="row" style="width: 15%">{{ $teknik_penilaian }}</td>
                                <td class="align-middle" scope="row" style="width: 15%">
                                    @foreach ($instrumen as $ins)
                                        {{ $ins }}
                                        <br />
                                    @endforeach
                                </td>
                                <td class="align-middle" scope="row" style="width: 16%">
                                    @foreach ($kriteria as $kr)
                                        {{ $kr }}
                                        <br />
                                    @endforeach
                                </td>
                                <td class="align-middle" scope="row" style="width: 8%">{{ $bobot }}</td>
                            </tr>
                        @endforeach
                    @endforeach
                @endforeach
            </tbody>
        </table>

    </div>

    <style>
        /* Style the tooltip */
        span[itemid] {
            position: relative;
            cursor: pointer;
            /* display: inline-block; */
        }

        span[itemid]:hover::after {
            content: attr(itemid);
            /* overflow: hidden; */
            /* text-overflow: ellipsis; */
            word-wrap: break-word;
            /* membuat kata wrap ketika teks melebihi lebar elemen */
            word-break: break-all;
            /* memaksa kata dipisahkan ketika melebihi lebar elemen */
            width: 350px;
            height: auto;
            background-color: #1F2F4D;
            color: white;
            padding: 9px;
            border-radius: 5px;
            position: absolute;
            top: 35px;
            /* bottom: -100px; */
            /* left: 2%; */
            transform: translateX(-35%);
            /* white-space: nowrap; */
            z-index: 1;
            opacity: 1;
            /* transition: opacity 3s; */
            /* transition: opacity 0.3s ease, visibility 0s linear 0.3s; */

        }

        span[itemid]:hover::before {
            content: "";
            border-style: solid;
            border-width: 0 8px 8px 8px;
            border-color: transparent transparent #1F2F4D transparent;
            position: absolute;
            top: 28px;
            left: 50%;
            transform: translateX(-50%);
            bottom: calc(100% + 10px);
            /* transition: opacity 0.3s ease, visibility 0s linear 0.3s; */
        }
    </style>
@endsection
