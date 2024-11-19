@extends('layout.dashboard')

@section('content')
    <html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>RPS</title>
        <style>
            table {
                width: 100%;
            }

            h3,
            h4,
            h5,
            h6,
            h7 {
                font-size: 22px;
                font-weight: bold;
                color: white;
                background-color: blue;
                margin: 20px 0px 10px 0px;
            }

            .table-header,
            .td-rps {
                border: 1px solid black !important;
                font-size: 14px;
                font-family: 'Times New Roman', Times, serif;
                padding: 5px;
            }

            table {
                border-collapse: collapse;
            }
        </style>
    </head>

    <body>
        @include('content.teknik_penilaian.button')
        <br><br>
        <div class="pr-3">
            <a class="btn btn-outline-danger" href="/dashboard/rps/export/pdf/{{ $rps->id_rps }}/{{ $rps->kodeMK }}"><i
                    class="bi bi-file-earmark-pdf-fill"> </i>Export PDF</a>
        </div>

        <br>
        @if (session('warning'))
            <div class="alert alert-danger">
                {{ session('warning') }}
            </div>
        @endif
        <table class="table table-bordered" style="text-align: center; font-weight:bold">
            <tr>
                <td class="td-rps" rowspan="3">
                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/unair.png'))) }}"
                        width="75" height="75"><br>Universitas Airlangga</th>
                </td>
                <td class="td-rps" colspan="2">
                    Rencana Pembelajaran Semester
                </td>
                <td class="td-rps">
                    Disiapkan oleh
                </td>
                <td class="td-rps">
                    Diperiksa oleh
                </td>
                <td class="td-rps">
                    Disetujui oleh
                </td>
                <td class="td-rps">
                    Nomor Register Dokumen
                </td>

            </tr>

            <tr>
                <td class="td-rps" colspan="2">
                    RPS
                </td>
                <td class="td-rps">
                    PJMK
                </td>
                <td class="td-rps">
                    KPS/KaDep
                </td>
                <td class="td-rps">
                    Wakil Dekan I
                </td>
                <td class="td-rps" rowspan="4">
                    -
                </td>

            </tr>

            <tr>
                <td class="td-rps" style="width:20%;">
                    Revisi ke-
                </td>
                <td class="td-rps">
                    -
                </td>
                <td class="td-rps" rowspan="2">
                    {{ $penanggung_jawab->namaDosen ?? '-' }}
                </td>
                <td class="td-rps" rowspan="2">
                    {{ $pemeriksa->namaDosen ?? '-' }}
                </td rowspan="2">
                <td class="td-rps" rowspan="2">
                    {{ $persetujuan->namaDosen ?? '-' }}
                </td>
            </tr>

            <tr>
                <td class="td-rps">
                    Fakultas
                </td>
                <td class="td-rps">
                    Tgl.
                </td>
                <td class="td-rps">
                    -
                </td>

            </tr>

            <tr>
                @if ($dosen)
                    <td class="td-rps">
                        Fakultas {{ $dosen->prodi->fakultas ?? '-' }}
                    </td>
                @else
                    <td></td>
                @endif
                <td class="td-rps" style="height:120px;">
                    Mulai Berlaku Semester (gasal/genap) / {{ $rps->tahunAjaran }}
                </td>
                <td class="td-rps">
                    -
                </td>
                <td class="td-rps" style="padding-bottom: 0px;">
                    (tanda tangan)
                </td>
                <td class="td-rps">
                    (tanda tangan)
                </td>
                <td class="td-rps">
                    (tanda tangan)
                </td>

            </tr>
        </table>

        <h3>
            A. IDENTITAS MATA KULIAH
        </h3>
        <table class="table table-bordered" style="text-align: left;">
            <tr>
                <th class="table-header" class="table-header" style="text-align:left; width : 30%">1. Nama Mata Kuliah</th>
                <td class="td-rps">{{ $mk->namaMK }}</td>
            </tr>
            <tr>
                <th class="table-header" style="text-align:left;">2. Kode Mata Kuliah</th>
                <td class="td-rps">{{ $mk->kodeMK }}</td>
            </tr>
            <tr>
                <th class="table-header" style="text-align:left;">3. Beban Studi (sks)</th>
                <td class="td-rps">{{ $mk->sks }}</td>
            </tr>
            <tr>
                <th class="table-header" style="text-align:left;">4. Semester</th>
                <td class="td-rps">{{ $mk->semester }}</td>
            </tr>
            <tr>
                <th class="table-header" style="text-align:left;">5. Jurusan/Prodi</th>
                <td class="td-rps">{{ $mk->namaProdi ?? '-' }}</td>
            </tr>
            <tr>
                <?php $counter = 1; ?>
                <th class="table-header" style="text-align:left;">6. Capaian Pembelajaran Lulusan (CPL)</th>
                <td class="td-rps">
                    CPL {{ $mk->namaMK }}:
                    @foreach ($list_cpl as $cpl)
                        <div>{{ $counter }}. {{ $cpl->kodeCPL }} {{ $cpl->deskripsiCPL }}</div>
                        <?php $counter += 1; ?>
                    @endforeach
                </td>
            </tr>
            <?php $counter = 1; ?>
            <tr>
                <th class="table-header" style="text-align:left;">7. Capaian Pembelajaran Mata Kuliah (CPMK)</th>
                <td class="td-rps">
                    Capaian pembelajaran mata kuliah {{ $mk->namaMK }}:
                    @foreach ($mk_cpmk as $cpmk)
                        <div>{{ $counter }}.
                            {{ $all_cpmk->where('kodeCPMK', $cpmk->kodeCPMK)->first()->deskripsiCPMK }}
                        </div>
                        <?php $counter += 1; ?>
                    @endforeach
                </td>
            </tr>
            <tr>
                <th class="table-header" style="text-align:left;">8. Deskripsi Mata Kuliah</th>
                <td class="td-rps"> {!! $mk->deskripsiMK ?? '-' !!}</td>
            </tr>
            <tr>
                <th class="table-header" style="text-align:left;">9. Prasyarat (bila ada)</th>
                <td class="td-rps">
                    @foreach ($list_prasyarat as $prasyarat)
                        <div>
                            {{ $prasyarat->kodeMK }} {{ $prasyarat->namaMK }}
                        </div>
                    @endforeach
                </td>
            </tr>
            <tr>
                <th class="table-header" style="text-align:left;">10. Penanggung Jawab</th>
                <td class="td-rps">{{ $penanggung_jawab->namaDosen ?? '' }}</td>
            </tr>
            <tr>
                <th class="table-header" style="text-align:left;">11. Dosen Pengampu</th>
                <td class="td-rps">
                    @foreach ($dosen_pengampu as $pengampu)
                        <div>
                            {{ $pengampu->namaDosen }}
                        </div>
                    @endforeach
                </td>
            </tr>
        </table>
        <h3>
            B. PROGRAM PEMBELAJARAN
        </h3>
        <table class="table table-bordered" style="text-align: center;">
            <tr style="height : 65px; background-color: lightblue">
                <th class="table-header">Minggu ke-</th>
                <th class="table-header" style="width : 15%">
                    Kemampuan Akhir yang diharapkan di setiap tahapan pembelajaran
                    (Sub-Capaian Mata Kuliah)
                    (C, A, P)</th>
                <th class="table-header" style="width : 14%">Pokok Bahasan</th>
                <th class="table-header" style="width : 14%">Bentuk dan Metode Pembelajaran</th>
                <th class="table-header" style="width : 7%">Media</th>
                <th class="table-header" style="width : 7%">Waktu</th>
                <th class="table-header" style="width : 10%">Pengalaman belajar mahasiswa</th>
                <!-- <th class="table-header" style="width : 10%">Kriteria Penilaian dan Indikator (hard dan soft skills)</th> -->
                <th class="table-header" style="width : 7%">Teknik Penilaian</th>
                <th class="table-header" style="width : 16%">Referensi</th>
            </tr>
            <tr style="height : 50px; background-color: lightblue">
                <td class="td-rps">1</td>
                <td class="td-rps">2</td>
                <td class="td-rps">3</td>
                <td class="td-rps">4</td>
                <td class="td-rps">5</td>
                <td class="td-rps">6</td>
                <td class="td-rps">7</td>
                <td class="td-rps">8</td>
                <td class="td-rps">9</td>
                <!-- <td class="td-rps">10</td> -->
            </tr>
            <?php $i = 0; ?>
            @foreach ($minggu_rps_list as $minggu_rps)
                <tr>
                    <td class="td-rps">{{ $i + 1 }}</td>
                    <td class="td-rps">{{ $minggu_rps->SubCPMK->deskripsiSubCPMK ?? '' }}
                    </td>
                    <td class="td-rps">{{ $minggu_rps->bahan_kajian ?? '' }}</td>
                    <td class="td-rps">
                        <div class="col">
                            @if ($minggu_rps->id_bentuk)
                                <p>Bentuk: {{ $minggu_rps->Bentuk->nama_bentuk }}</p>
                            @endif
                            @if ($minggu_rps->Metode()->count() > 0)
                                <p>Metode:</p>
                                @foreach ($minggu_rps->Metode as $item)
                                    <p>{{ $item->nama_metode }}</p>
                                @endforeach
                            @endif
                            @if ($minggu_rps->penugasan)
                                <p>Penugasan: {{ $minggu_rps->penugasan }}</p>
                            @endif
                            @if ($minggu_rps->luring === 1)
                                <p>Luring</p>
                            @elseif($minggu_rps->luring === 0)
                                <p>Daring</p>
                            @endif
                        </div>
                    </td>
                    <td class="td-rps">{{ $minggu_rps->Media->nama_media ?? '' }}</td>
                    <td class="td-rps">{{ $minggu_rps->waktuPembelajaran ?? '' }}</td>
                    <td class="td-rps">{{ $minggu_rps->pengalaman_belajar ?? '' }}</td>
                    <!-- <td class="td-rps">
    @if ($minggu_rps->kodeSubCPMK)
    <p>Kriteria penilaian:
                                {{ $minggu_rps->SubCPMK->kriteriaPenilaian ?? '-' }}</p>
                            <p>Indikator:
                                {{ $minggu_rps->SubCPMK->indikatorPenilaian ?? '-' }}</p>
    @endif
                    </td> -->
                    <td class="td-rps">
                        @if ($minggu_rps->id_teknik_penilaian)
                            <p>Teknik penilaian:
                                {{ $minggu_rps->Teknik_Penilaian_RPS->nama_teknik_penilaian ?? '' }}
                            </p>
                            <p>Instrumen penilaian:
                                {{ $minggu_rps->Instrumen_Penilaian->nama_instrumen_penilaian ?? '' }}
                            </p>
                            <p>Bobot nilai: {{ $minggu_rps->bobot_nilai ?? '' }}%</p>
                            <p>Komponen penilaian:
                                {{ $minggu_rps->Komponen_Penilaian->nama_komponen_penilaian ?? '' }}
                            </p>
                        @endif
                    </td>
                    <td class="td-rps">
                        @if ($minggu_rps->PustakaMingguRPS)
                            @foreach ($minggu_rps->PustakaMingguRPS as $pmItem)
                                <p style="font-style:italic;" class="mb-0 pb-0">{{ $pmItem->Pustaka->judul }}</p>
                                <p class="mt-0 pt-0">{{ $pmItem->referensi }}</p>
                            @endforeach
                        @endif
                        <!-- {{ $minggu_pustaka->where('kodeMinggu_RPS', $minggu_rps->kodeMinggu_RPS)->first()->id_pustaka ?? '-' }} -->
                    </td>
                </tr>
                @if ($i == 6)
                    <tr>
                        <td class="td-rps">8</td>
                        <td colspan="10" class="td-rps"> UTS </td>
                    </tr>
                    <?php $i += 1; ?>
                @endif
                @if ($i == 14)
                    <tr>
                        <td class="td-rps">16</td>
                        <td colspan="10" class="td-rps"> UAS </td>
                    </tr>
                @endif
                <?php $i += 1; ?>
                @if ($i == 15)
                @break
            @endif
        @endforeach
    </table>

    <h3>
        C. KRITERIA DAN DESKRIPSI PENILAIAN
    </h3>
    <div style="margin-left:10px; font-family:'Times New Roman', Times, serif">
        <p>1. Kriteria Penilaian</p>
        <div class="mb-0">Penilaian yang diberikan berdasarkan kriteria berikut:</div>
        <div class="mb-0">Nilai akhir diperoleh melalui rumus</div>
        <p>
            @if ($rps->KomponenPenilaian)
                @foreach ($rps->KomponenPenilaian as $item)
                    @php
                        $totalBobot = 0;
                    @endphp
                    @foreach ($rps->Minggu_RPS as $minggu)
                        @if ($minggu->id_komponen_penilaian == $item->id_komponen_penilaian)
                            @php
                                $totalBobot += $minggu->bobot_nilai;
                            @endphp
                        @endif
                    @endforeach
                    {{ $item->nama_komponen_penilaian }} ({{ $totalBobot }}%)
                    @if (!$loop->last)
                        +
                    @endif
                @endforeach
            @endif
        </p>
        <p>2. Deskripsi Komponen Penilaian</p>
        @if ($rps->detail_penilaian)
            <p>{!! $rps->detail_penilaian !!}</p>
        @else
            <p>Belum ada data</p>
        @endif
    </div>

    <h3>
        D. DAFTAR REFERENSI
    </h3>
    <div style="margin-left:10px; font-family:'Times New Roman', Times, serif">
        <?php $no = 1; ?>
        @foreach ($minggu_pustaka->unique('id_pustaka') as $pustaka)
            <div>
                {{ $no }}. {{ $pustaka->pustaka->nama_penulis }}, {{ $pustaka->pustaka->tahun }},
                {{ $pustaka->pustaka->judul }}, {{ $pustaka->pustaka->penerbit }}
                <?php $no += 1; ?>
            </div>
        @endforeach
    </div>
</body>

</html>
@endsection
