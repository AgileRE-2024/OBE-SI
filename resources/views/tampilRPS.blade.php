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
            border: 1.5px solid black !important;
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
        <a class="btn btn-outline-danger" href="/dashboard/rps/export/pdf/{{ $rps->id_rps }}/{{ $rps->kodeMK }}"><i class="bi bi-file-earmark-pdf-fill"> </i>Export PDF</a>
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
                <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/unair.png'))) }}" width="75" height="75"><br>Universitas Airlangga</th>
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
            {{ $penanggung_jawab->namaDosen ?? "-" }}
            </td>
            <td class="td-rps" rowspan="2">
            {{ $pemeriksa->namaDosen ?? "-" }}
            </td rowspan="2">
            <td class="td-rps" rowspan="2">
            {{ $persetujuan->namaDosen ?? "-" }}
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
            @if($dosen)
            <td class="td-rps">
                Fakultas {{ $dosen->prodi->fakultas }}
            </td>
            @else
            <td></td>
            @endif
            <td class="td-rps" style="height:120px;">
                Mulai Berlaku Semester (gasal/genap) /tahun
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
            <td class="td-rps">{{ $mk->namaProdi ?? "-" }}</td>
        </tr>
        <tr>
            <?php
            $counter = 1
            ?>
            <th class="table-header" style="text-align:left;">6. Capaian Pembelajaran Lulusan (CPL)</th>
            <td class="td-rps">
                CPL {{ $mk->namaMK }}:
                <div style="margin-left:15px">
                    @foreach($all_cpmk->unique('kodeCPL') as $cpmk)
                    <br>
                    @foreach($mk_cpmk as $mk_cpmk_item)
                    @if($mk_cpmk_item->kodeCPMK == $cpmk->kodeCPMK)
                    {{ $counter }}. {{ $cpmk->cpl->deskripsiCPL }}
                    @endif
                    @endforeach
                    <?php
                    $counter += 1
                    ?>
                    @endforeach
                    <div>
            </td>
        </tr>
        <?php
        $counter = 1
        ?>
        <tr>
            <th class="table-header" style="text-align:left;">7. Capaian Pembelajaran Mata Kuliah (CPMK)</th>
            <td class="td-rps">
                Capaian pembelajaran mata kuliah {{ $mk->namaMK }}:
                <div style="margin-left:15px">
                    @foreach($mk_cpmk as $cpmk)
                    <br>
                    {{ $counter }}. {{ $all_cpmk->where('kodeCPMK', $cpmk->kodeCPMK)->first()->deskripsiCPMK }}
                    <?php
                    $counter += 1
                    ?>
                    @endforeach
                    <div>
            </td>
        </tr>
        <tr>
            <th class="table-header" style="text-align:left;">8. Deskripsi Mata Kuliah</th>
            <td class="td-rps"> {!! $mk->deskripsiMK ?? "-" !!}</td>
        </tr>
        <tr>
            <th class="table-header" style="text-align:left;">9. Prasyarat (bila ada)</th>
            <td class="td-rps">
                @foreach($list_prasyarat as $prasyarat)
                <div class="col">
                    {{ $prasyarat->kodeMK }} {{$prasyarat->namaMK}}
                </div>
                @endforeach
            </td>
        </tr>
        <tr>
            <th class="table-header" style="text-align:left;">10. Penanggung Jawab</th>
            <td class="td-rps">{{ $penanggung_jawab->namaDosen ?? "-" }}</td>
        </tr>
        <tr>
            <th class="table-header" style="text-align:left;">11. Dosen Pengampu</th>
            <td class="td-rps">
                @foreach($dosen_pengampu as $pengampu)
                <div class="col">
                    {{ $pengampu->namaDosen }}
                </div>
                @endforeach
            </td>
        </tr>
    </table>
    <h4>
        B. PROGRAM PEMBELAJARAN
    </h4>
    <table class="table table-bordered" style="text-align: center;">
        <tr style="height : 65px; background-color: lightblue">
            <th class="table-header">Minggu ke-</th>
            <th class="table-header" style="width : 15%">
                Kemampuan Akhir yang diharapkan di setiap tahapan pembelajaran
                (Sub-Capaian Mata Kuliah)
                (C, A, P)</th>
            <th class="table-header" style="width : 7%">Bahan Kajian</th>
            <th class="table-header" style="width : 15%">Bentuk dan Metode Pembelajaran</th>
            <th class="table-header" style="width : 7%">Media</th>
            <th class="table-header" style="width : 7%">Waktu</th>
            <th class="table-header" style="width : 15%">Pengalaman belajar mahasiswa</th>
            <th class="table-header" style="width : 15%">Kriteria Penilaian dan Indikator (hard dan soft skills)</th>
            <th class="table-header" style="width : 10%">Bobot Nilai</th>
            <th class="table-header" style="width : 10%">Ref. (nomor)</th>
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
            <td class="td-rps">10</td>
        </tr>
        <?php
        $i = 0
        ?>
        @foreach($minggu_rps_list as $minggu_rps)
        <tr>
            <td class="td-rps">{{ $i+1 }}</td>
            <td class="td-rps">{{ $minggu_rps->kodeSubCPMK }}</td>
            <td class="td-rps">{{ $minggu_rps->bahan_kajian }}</td>
            <td class="td-rps">{{ $minggu_rps->temp_bentuk }}</td>
            <td class="td-rps">{{ $minggu_rps->temp_media }}</td>
            <td class="td-rps">{{ $minggu_rps->waktuPembelajaran }}</td>
            <td class="td-rps">{{ $minggu_rps->pengalaman_belajar }}</td>
            <td class="td-rps">{{ $minggu_rps->temp_kriteria_penilaian }}</td>
            <td class="td-rps">{{ $minggu_rps->bobot_nilai }}</td>
            <td class="td-rps">{{ $minggu_pustaka->where('kodeMingguRPS', $minggu_rps->kodeMingguRPS)->first()->id_pustaka ?? "-"}}</td>
        </tr>
        @if($i == 6)
        <tr>
            <td colspan="10"> UTS </td>
        </tr>
        <?php
        $i += 1
        ?>
        @endif
        @if($i == 14)
        <tr>
            <td colspan="10"> UAS </td>
        </tr>
        @endif
        <?php
        $i += 1
        ?>
        @if($i == 15)
        @break
        @endif
        @endforeach
    </table>

    <p>
    </p>
    <h7>
        C. KRITERIA DAN DESKRIPSI PENILAIAN
    </h7>
    <div style="margin-left:40px;margin-top:20px;">
        {!! $rps->detail_penilaian !!}
    </div>

    <p>
    </p>
    <h7>
        D. DAFTAR REFERENSI
    </h7>
    <div style="margin-left:40px;margin-top:20px;">
        <?php
        $no = 1;
        ?>
        @foreach($minggu_pustaka->unique('id_pustaka') as $pustaka)
        {{ $no }}. {{ $pustaka->pustaka->judul }}
        <?php
        $no += 1;
        ?>
        @endforeach
    </div>
</body>

</html>
@endsection