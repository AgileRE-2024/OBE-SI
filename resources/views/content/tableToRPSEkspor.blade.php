<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RPS</title>
    <style>
        /* Default style for portrait mode */
        @media print {
            @page {
                size: landscape;
            }
        }

        table {
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            font-size: 11px;
            font-family: 'Times New Roman', Times, serif;
            padding: 5px;
        }

        .center {
            text-align: center;
        }

        .header {
            padding: 20px 0px 5px 0px;
            font-size: 24px;
            font-weight: bold;
            margin: auto;
        }

        .logo {
            width: 75px;
            height: 75px;
        }

        .universitas {
            text-align: center;
        }
    </style>
</head>

<body>
    {{-- <div style="text-align: center; margin:1cm;"> --}}
    <table class="table table-bordered" style="text-align: center;">
        <tr>
            <th class="align-middle" scope="col">
                <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/unair.png'))) }}"
                    width="75" height="75"><br>Universitas Airlangga
            </th>
            <th class="align-middle" rowspan="1">RENCANA PEMBELAJARAN SEMESTER</th>
            <th class="align-middle" rowspan="1">Disiapkan oleh</th>
            <th class="align-middle" rowspan="1">Diperiksa oleh</th>
            <th class="align-middle" rowspan="1" colspan="1">Disetujui oleh</th>
            <th class="align-middle" rowspan="1">Nomor Register Dokumen</th>
            <!-- <td class="align-middle" scope="col" colspan="7" style="width: 25%">RENCANA PEMBELAJARAN
                        SEMESTER
                    </td>
                    <td class="align-middle" scope="col" colspan="7" style="width: 25%">Disiapkan oleh
                    </td> -->
            <!-- </th> -->

            <!-- <th style="border-right: 1px solid black;">
                    
                </th> -->
            <!-- <th class="align-middle" scope="col" colspan="5" style="width: 70%; background-color: lightgray;">
                    <div style="text-align: center;">
                        UNIVERSITAS AIRLANGGA<br>
                        FAKULTAS SAINS DAN TEKNOLOGI<br>
                        PRODI SISTEM INFORMASI
                    </div>
                </th> -->
            <!-- <th class="align-middle" scope="col"
                    style="width: 15%; background-color: lightgray; border-right: 1px solid black;">{{ $kodeRPS }}
                </th> -->
        </tr>

        <tr>
            <td style="border:none" colspan="4">
                <div style="text-align: left; padding: 10px 0px 5px 0px; font-size: 20px; font-weight: bold">
                    A. IDENTITAS MATA KULIAH
                </div>
            </td>
        </tr>
        @php
            $rps = $rps_list->where('kodeRPS', $kodeRPS)->first();
            // print($rps);
            $mk = $mk_list->where('kodeMK', $rps->kodeMK)->first();
            // print($mk);
            $bk_list = $mk->Bahan_Kajian;
            $counterBk = $mk->Bahan_Kajian->count();
        @endphp
        <tr>
            <th style="text-align: left;" rowspan="1" colspan="3">1. Nama Mata Kuliah</th>
            <td style="text-align: left;" rowspan="1" colspan="7">{{ $mk->namaMK }}</td>
        </tr>
        <tr>
            <th style="text-align: left;" rowspan="1" colspan="3">2. Kode Mata Kuliah</th>
            <td style="text-align: left;" rowspan="1" colspan="7">{{ $mk->kodeMK }}</td>
        </tr>
        <tr>
            <th style="text-align: left;" rowspan="1" colspan="3">3. Beban Studi (sks)</th>
            <td style="text-align: left;" rowspan="1" colspan="7">{{ $mk->sks }}</td>
        </tr>
        <tr>
            <th style="text-align: left;" rowspan="1" colspan="3">4. Semester</th>
            <td style="text-align: left;" rowspan="1" colspan="7">{{ $mk->semester }}</td>
        </tr>
        <tr>
            <th style="text-align: left;" rowspan="1" colspan="3">5. Jurusan/Prodi</th>
            <td style="text-align: left;" rowspan="1" colspan="7">{{ $mk->namaProdi }}</td>
        </tr>
        <tr>
            <th style="text-align: left;" rowspan="1" colspan="3">6. Capaian Pembelajaran Lulusan (CPL)</th>
            <td style="text-align: left;" rowspan="1" colspan="7">{{ $mk->deskripsiMK }}</td>
        </tr>
        <tr>
            <th style="text-align: left;" rowspan="1" colspan="3">7. Capaian Pembelajaran Mata Kuliah (CPMK)</th>
            <td style="text-align: left;" rowspan="1" colspan="7">{{ $mk->deskripsiMK }}</td>
        </tr>
        <tr>
            <th style="text-align: left;" rowspan="1" colspan="3">8. Deskripsi Mata Kuliah</th>
            <td style="text-align: left;" rowspan="1" colspan="7">{{ $mk->deskripsiMK }}</td>
        </tr>
        <tr>
            <th style="text-align: left;" rowspan="1" colspan="3">9. Prasyarat (bila ada)</th>
            <td style="text-align: left;" rowspan="1" colspan="7">{{ $mk->deskripsiMK }}</td>
        </tr>
        <tr>
            <th style="text-align: left;" rowspan="1" colspan="3">10. Penanggung Jawab</th>
            <td style="text-align: left;" rowspan="1" colspan="7">{{ $mk->penanggungJawab }}</td>
        </tr>
        <tr>
            <th style="text-align: left;" rowspan="1" colspan="3">11. Dosen Pengampu</th>
            <td style="text-align: left;" rowspan="1" colspan="7">{{ $mk->dosenPengampu }}</td>
        </tr>

        <tr>
            <td style="border:none" colspan="4">
                <div style="text-align: left; padding: 10px 0px 5px 0px; font-size: 20px; font-weight: bold">
                    B. PROGRAM PEMBELAJARAN
                </div>
            </td>
        </tr>
        <tr>
            <th style="text-align: center;" rowspan="2" colspan="2">Minggu ke-</th>
            <th style="text-align: center;" rowspan="2" colspan="3">
                Kemampuan Akhir yang diharapkan di setiap tahapan pembelajaran
                (Sub-Capaian Mata Kuliah)
                (C, A, P)</th>
            <th style="text-align: center;" rowspan="2" colspan="3">Bahan Kajian</th>
            <th style="text-align: center;" rowspan="2" colspan="3">Bentuk dan Metode Pembelajaran</th>
            <th style="text-align: center;" rowspan="2" colspan="3">Media</th>
            <th style="text-align: center;" rowspan="2" colspan="3">Waktu</th>
            <th style="text-align: center;" rowspan="2" colspan="3">Pengalaman belajar mahasiswa</th>
            <th style="text-align: center;" rowspan="2" colspan="3">Kriteria Penilaian dan Indikator (hard dan
                soft skills)</th>
            <th style="text-align: center;" rowspan="2" colspan="3">Bobot Nilai</th>
            <th style="text-align: center;" rowspan="" colspan="3">Ref. (nomor)</th>
        </tr>
    </table>

    <!-- <tr>
                    <th class="align-middle" rowspan="1" colspan="2" style="width: 25%">MATA KULIAH (MK)</th>
                    <th class="align-middle" rowspan="1" style="width: 10%">KODE</th>
                    <th class="align-middle" rowspan="1" style="width: 25%">Bahan Kajian (BK)</th>
                    <th class="align-middle" rowspan="1" colspan="1" style="width: 15%">BOBOT (sks)</th>
                    <th class="align-middle" rowspan="1" style="width: 10%">SEMESTER</th>
                    <th class="align-middle" rowspan="1" style="width: 15%">Tanggal Penyusunan</th>
                </tr> -->
    <!-- @if ($counterBk == 1)
<tr>
                        <td class="align-middle" rowspan={{ $counterBk }} colspan="2" style="width: 25%">
                            {{ $mk->namaMK }}
                            @if ($mk->jenisMK == 1)
<span>(Teori)</span>
@endif
                            @if ($mk->jenisMK == 2)
<span>(Praktikum)</span>
@endif
                            @if ($mk->jenisMK == 3)
<span>(Praktikum Lapangan)</span>
@endif
                        </td>
                        <td class="align-middle" rowspan={{ $counterBk }} style="width: 10%">{{ $mk->kodeMK }}</td>
                        <td class="align-middle" rowspan="1" style="width: 25%">({{ $bk_list->first()->kodeBK }})
                            <br> {{ $bk_list->first()->namaBK }}</td>
                        <td class="align-middle" rowspan={{ $counterBk }} style="width: 15%">{{ $mk->sks }}</td>
                        <td class="align-middle" rowspan={{ $counterBk }} style="width: 10%">{{ $mk->semester }}
                        </td>
                        <td class="align-middle" rowspan={{ $counterBk }} style="width: 15%">
                            {{ $rps->created_at->format('d-m-Y') }}</td>
                    </tr>
@else
@for ($i = 0; $i < $counterBk; $i++)
@if ($i == 0)
<tr>
                                <td class="align-middle" rowspan={{ $counterBk }} colspan="2" style="width: 25%">
                                    {{ $mk->namaMK }}</td>
                                <td class="align-middle" rowspan={{ $counterBk }} style="width: 10%">
                                    {{ $mk->kodeMK }}</td>
                                <td class="align-middle" rowspan="1" style="width: 25%">
                                    ({{ $bk_list->first()->kodeBK }}) <br> {{ $bk_list->first()->namaBK }}</td>
                                <td class="align-middle" rowspan={{ $counterBk }} style="width: 15%">
                                    {{ $mk->sks }}</td>
                                <td class="align-middle" rowspan={{ $counterBk }} style="width: 10%">
                                    {{ $mk->semester }}</td>
                                <td class="align-middle" rowspan={{ $counterBk }} style="width: 15%">
                                    {{ $mk->created_at->format('d-m-Y') }}</td>
                            </tr>
@else
<tr>
                                <td class="align-middle" rowspan="1" style="width: 10%">
                                    ({{ $bk_list->get($i)->kodeBK }}) <br> {{ $bk_list->get($i)->namaBK }}</td>
                            </tr>
@endif
@endfor
@endif -->

    <!-- {{-- ini dosen --}}
                @php

                    // print($bk_list);
                @endphp
                <tr>
                    <th style="vertical-align: top;" colspan="2" rowspan="2" style="width: 25%">Pengesahan</th>
                    <th style="text-align: left;" colspan="2">Dosen Pengembang RPS</th>
                    <th style="text-align: left;" colspan="1">Koordinator BK</th>
                    <th style="text-align: left;" colspan="3">Ka Prodi</th>
                </tr>

                <tr>
                    <td class="align-middle" colspan="2" style="width: 20%"><br><br>TTD<br>
                        @php
                            $dosen = $rps_list->where('nip', $rps->nip)->first();
                        @endphp
                        @if ($dosen)
{{ $dosen->namaDosen }}
@else
Tambahkan Dosen Pengembang RPS
@endif
                    </td>
                    <td class="align-middle" colspan="1" style="width: 30%"><br><br>TTD<br>
                        @php
                            $dosen = $rps_list->where('nip', $rps->nip)->first();
                        @endphp
                        @if ($dosen)
{{ $dosen->namaDosen }}
@else
Tambahkan Koordinator BK
@endif
                        {{-- {{ $dosen_list->where('nip', $detail_peran_dosen_list->where('kodeRPS', '=', $rps->kodeRPS)->where('peranDosen', '=', 'Koordinator BK')->first()->nip)->first()->namaDosen ?? '-'}} --}}
                    </td>
                    <td class="align-middle" colspan="3" style="width: 25%">
                        <br><br>TTD<br>{{ $dosen_list->where('nip', '=', $rps->kps)->first()->namaDosen ?? '-' }}</td>
                </tr>
                @php
                    $list_cpl = collect();
                    $uniqueIds = [];

                    foreach ($mk->Bahan_Kajian as $bk) {
                        foreach ($bk->CPL_Prodi as $cpl) {
                            $kodeCPL = $cpl->kodeCPL;
                            $deskripsiCPL = $cpl->deskripsiCPL;

                            if (!in_array($kodeCPL, $uniqueIds)) {
                                $uniqueIds[] = $kodeCPL;
                                $list_cpl->push([
                                    'kodeCPL' => $kodeCPL,
                                    'deskripsiCPL' => $deskripsiCPL
                                ]);
                            }
                        }
                    }
                    $list_cpmk = collect();
                    $uniqueIds = [];

                    foreach ($mk->CPMK as $cpmk) {
                        $kodeCPMK = $cpmk->kodeCPMK;
                        $deskripsiCPMK = $cpmk->deskripsiCPMK;
                        $kodeCPL = $cpmk->kodeCPL;

                        if (!in_array($kodeCPMK, $uniqueIds)) {
                            $uniqueIds[] = $kodeCPMK;
                            $list_cpmk->push([
                                'kodeCPMK' => $kodeCPMK,
                                'deskripsiCPMK' => $deskripsiCPMK,
                                'kodeCPL' => $kodeCPL
                            ]);
                        }
                    }
                    $list_minggu_rps = collect();
                    $uniqueIds = [];
                    foreach ($detail_rps_list->where('kodeRPS', '=', $rps->kodeRPS) as $dr) {
                        $kodeMingguRPS = $dr->kodeMingguRPS;
                        $kodePenilaian = $dr->kodePenilaian;
                        if (!in_array($kodeMingguRPS, $uniqueIds)) {
                            $uniqueIds[] = $kodeMingguRPS;
                            $list_minggu_rps->push([
                                'kodeMingguRPS' => $kodeMingguRPS,
                                'kodePenilaian' => $kodePenilaian
                            ]);
                        }
                    }
                    $list_kodeCPMK = $list_cpmk->pluck('kodeCPMK');
                    $list_kode_minggu_rps = $list_minggu_rps->pluck('kodeMingguRPS');
                    $list_kode_penilaian = $list_minggu_rps->pluck('kodePenilaian');
                    $list_kodeCPMK = $list_cpmk->pluck('kodeCPMK');
                    $list_subcpmk = $subcpmk_list->whereIn('kodeCPMK', $list_kodeCPMK);
                    // print('INI LHO'.$list_minggu_rps);
                    // print($dosen_list->where('nip','=',$rps->kps)->first());
                    // $list_dosen_pengampu=$dosen_list->where('nip', $detail_peran_dosen_list->where('kodeRPS', '=', $rps->kodeRPS)->where('peranDosen', '=', 'Dosen Pengampu'));
                    // print_r($list_minggu_rps);
                    $rowspanCP = 6;
                    $rowspanCP = $rowspanCP + $list_cpl->count() + $list_cpmk->count() + $list_subcpmk->count();
                @endphp -->
    <!-- <tr>
                    <th style="vertical-align: top;" rowspan={{ $rowspanCP }} colspan="1">Capaian Pembelajaran
                    </th>
                </tr>
                <tr>
                    <th style="text-align: left;" rowspan="1" colspan="3">CPL-PRODI yang dibebankan pada MK
                    </th>
                    <th style="text-align: left;" rowspan="1" colspan="5"></th>
                </tr>
                {{-- Looping CPL --}}
                @foreach ($list_cpl as $cpl)
<tr>
                        <td style="text-align: left;" rowspan="1" colspan="1">{{ $cpl['kodeCPL'] }}</td>
                        <td style="text-align: left;" rowspan="1" colspan="6">{{ $cpl['deskripsiCPL'] }}</td>
                    </tr>
@endforeach
                <tr>
                    <th style="text-align: left;" rowspan="1" colspan="3">Capaian Pembelajaran Mata Kuliah
                        (CPMK)</th>
                    <th style="text-align: left;" rowspan="1" colspan="5"></th>
                </tr>
                @foreach ($list_cpmk as $cpmk)
<tr>
                        <td style="text-align: left;" rowspan="1" colspan="1">{{ $cpmk['kodeCPMK'] }}</td>
                        <td style="text-align: left;" rowspan="1" colspan="6">{{ $cpmk['deskripsiCPMK'] }}
                        </td>
                    </tr>
@endforeach -->
    <!-- <tr>
                    <th style="text-align: left;" rowspan="1" colspan="3">Kemampuan akhir tiap tahapan belajar
                        (Sub-CPMK)</th>
                    <th style="text-align: left;" rowspan="1" colspan="5"></th>
                </tr>
                @foreach ($list_subcpmk as $subcpmk)
<tr>
                        <td style="text-align: left;" rowspan="1" colspan="1">{{ $subcpmk->kodeSubCPMK }}</td>
                        <td style="text-align: left;" rowspan="1" colspan="6">{{ $subcpmk->deskripsiSubCPMK }}
                        </td>
                    </tr>
@endforeach
                <tr>
                    <th style="text-align: left;" rowspan="1" colspan="3">Korelasi CPMK terhadap Sub-CPMK</th>
                    <th style="text-align: left;" rowspan="1" colspan="5"></th>
                </tr>
                <tr>
                    <td style="text-align: left;" scope="col" rowspan="1" colspan="7">
                        <table>
                            <tr>
                                <th colspan="2">Capaian Pembelajaran Mata Kuliah (CPMK)</th>
                                <th class="align-middle" rowspan="2">CPL yang Didukung</th>
                            </tr>
                            <tr>
                                <th>Kode CPMK</th>
                                <th>Deskripsi CPMK</th>
                            </tr>
                            @foreach ($list_cpmk as $cpmk)
<tr>
                                    <td>{{ $cpmk['kodeCPMK'] }}</td>
                                    <td>{{ $cpmk['deskripsiCPMK'] }}</td>
                                    <td>{{ $cpmk['kodeCPL'] }}</td>
                                </tr>
@endforeach

                        </table>

                    </td>
                </tr>
                <tr>
                    <th style="text-align: left;" rowspan="1" colspan="1">Deskripsi singkat MK</th>
                    <td style="text-align: left;" rowspan="1" colspan="7">{{ $mk->deskripsiMK }}</td>
                </tr>

                {{-- <tr>
                    <th style="text-align: left;" rowspan="1" colspan="1">Bahan Kajian: Materi Pembelajaran</th>
                    <th style="text-align: left;" rowspan="1" colspan="7">...</th>
                </tr> --}}
                <tr>
                    <th style="text-align: left;" rowspan="1" colspan="1">Pustaka</th>
                    <td style="text-align: left;" rowspan="1" colspan="7">{{ $mk->pustaka }}</td>
                </tr>

                <tr>
                    <th style="text-align: left;" rowspan="1" colspan="1">Dosen Pengampu</th>
                    <td style="text-align: left;" rowspan="1" colspan="7">
                      
                    </td>
                </tr>

                <tr>
                    <th style="text-align: left;" rowspan="1" colspan="1">Mata Kuliah Prasyarat</th>
                    <td style="text-align: left;" rowspan="1" colspan="7">
                        {{ $mk->mat_kodeMK ? $mk->mat_kodeMK : '-' }}</td>
                </tr>
            </tbody>
        </table>
        {{-- </div> --}}

        <br>
        <table class="table table-bordered" style="text-align: center">
            <thead style="background-color: lightgray">
                <tr>
                    <th class="align-middle" rowspan="2" style="width: 5%">Minggu Ke-</th>
                    <th class="align-middle" rowspan="2" style="width: 15%">Kemampuan akhir tiap tahapan belajar
                        (Sub-CPMK)</th>
                    <th class="align-middle" rowspan="2" style="width: 10%">Indikator</th>
                    <th class="align-middle" rowspan="2" style="width: 30%">Kriteria & Teknik</th>
                    <th class="align-middle" colspan="2" rowspan="2" style="width: 20%">Bentuk Pembelajaran
                        Metode Pembelajaran Penugasan Mahasiswa [Estimasi Waktu]</th>
                    <th class="align-middle" rowspan="2" style="width: 10%">Materi Pembelajaran [Pustaka]</th>
                    <th class="align-middle" rowspan="2" style="width: 10%">Bobot Penilaian (%)</th>
                </tr>
                <br>
                <tr style="background-color: lightgray">
                    <th>(1)</th>
                    <th>(2)</th>
                    <th>(3)</th>
                    <th>(4)</th>
                    <th>Luring (5)</th>
                    <th>Daring (6)</th>
                    <th>(7)</th>
                    <th>(8)</th>
                </tr> -->
    <!--
            <tbody>
                @foreach ($minggu_rps_list->whereIn('kodeMingguRPS', $list_kode_minggu_rps) as $minggu_rps)
<tr>
                        <td scope="row">{{ $minggu_rps->mingguKe }}</td>
                        <td scope="row">{{ $minggu_rps->kodeSubCPMK }}</td>
                        <td scope="row">{{ $minggu_rps->indikatorMingguRPS }}</td>
                        <td scope="row">{{ $minggu_rps->kriteriaMingguRPS }} <br>
                            @if ($list_kode_penilaian->get($loop->iteration - 1) != null)
[ {{ $list_kode_penilaian->get($loop->iteration - 1) }} ] <br>
                                {{ $teknik_penilaian_list->where('kodePenilaian', '=', $list_kode_penilaian->get($loop->iteration - 1))->where('kodeRPS', '=', $rps->kodeRPS)->first()->teknikPenilaian }}
                        </td>
@else
- </td>
@endif
                @if ($minggu_rps->bentukPembelajaran == '1')
<td scope="row">{{ 'Luring' }}</td>
                    <td></td>
@else
<td></td>
                    <td scope="row">{{ 'Daring' }} </td>
@endif
                <td scope="row">{{ $minggu_rps->materiPembelajaran }}</td>
                <td scope="row">
                    {{ $teknik_penilaian_list->where('kodePenilaian', '=', $list_kode_penilaian->get($loop->iteration - 1))->where('kodeRPS', '=', $rps->kodeRPS)->first()->bobotPenilaian ?? '-' }}
                </td>
                </tr>
@endforeach
            </tbody>
        </table> -->

</body>

</html>
