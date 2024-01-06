<html>

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

        th,
        td {
            border: 1px solid black;
            font-size: 12px;
            font-family: 'Times New Roman', Times, serif;
            padding: 5px;
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body>

    <table class="table table-bordered" style="text-align: center; font-weight:bold">
        <tr>
            <td rowspan="3">
                <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/unair.png'))) }}" width="75" height="75"><br>Universitas Airlangga</th>
            </td>
            <td colspan="2">
                Rencana Pembelajaran Semester
            </td>
            <td>
                Disiapkan oleh
            </td>
            <td>
                Diperiksa oleh
            </td>
            <td>
                Disetujui oleh
            </td>
            <td>
                Nomor Register Dokumen
            </td>

        </tr>

        <tr>
            <td colspan="2">
                RPS
            </td>
            <td>
                PJMK
            </td>
            <td>
                KPS/KaDep
            </td>
            <td>
                Wakil Dekan I
            </td>
            <td rowspan="4">
                -
            </td>

        </tr>

        <tr>
            <td style="width:20%;">
                Revisi ke-
            </td>
            <td>
                -
            </td>
            <td rowspan="2">
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
            <td>
                Fakultas
            </td>
            <td>
                Tgl.
            </td>
            <td>
                -
            </td>

        </tr>

        <tr>
            @if($dosen)
            <td>
                Fakultas {{ $dosen->prodi->fakultas }}
            </td>
            @else
            <td></td>
            @endif
            <td style="height:120px;">
                Mulai Berlaku Semester (gasal/genap) /tahun
            </td>
            <td>
                -
            </td>
            <td style="padding-bottom: 0px;">
                (tanda tangan)
            </td>
            <td>
                (tanda tangan)
            </td>
            <td>
                (tanda tangan)
            </td>

        </tr>
    </table>

    <h3>
        A. IDENTITAS MATA KULIAH
    </h3>
    <table class="table table-bordered" style="text-align: left;">
        <tr>
            <th style="text-align:left; width : 30%">1. Nama Mata Kuliah</th>
            <td>{{ $mk->namaMK }}</td>
        </tr>
        <tr>
            <th style="text-align:left;">2. Kode Mata Kuliah</th>
            <td>{{ $mk->kodeMK }}</td>
        </tr>
        <tr>
            <th style="text-align:left;">3. Beban Studi (sks)</th>
            <td>{{ $mk->sks }}</td>
        </tr>
        <tr>
            <th style="text-align:left;">4. Semester</th>
            <td>{{ $mk->semester }}</td>
        </tr>
        <tr>
            <th style="text-align:left;">5. Jurusan/Prodi</th>
            <td>{{ $mk->namaProdi ?? "-" }}</td>
        </tr>
        <tr>
            <?php
            $counter = 1
            ?>
            <th style="text-align:left;">6. Capaian Pembelajaran Lulusan (CPL)</th>
            <td>
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
            <th style="text-align:left;">7. Capaian Pembelajaran Mata Kuliah (CPMK)</th>
            <td>
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
            <th style="text-align:left;">8. Deskripsi Mata Kuliah</th>
            <td> {!! $mk->deskripsiMK ?? "-" !!}</td>
        </tr>
        <tr>
            <th style="text-align:left;">9. Prasyarat (bila ada)</th>
            <td>
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
    <h3>
        B. PROGRAM PEMBELAJARAN
    </h3>
    <table class="table table-bordered" style="text-align: center;">
        <tr style="height : 65px; background-color: lightblue">
            <th>Minggu ke-</th>
            <th style="width : 15%">
                Kemampuan Akhir yang diharapkan di setiap tahapan pembelajaran
                (Sub-Capaian Mata Kuliah)
                (C, A, P)</th>
                <th style="width : 7%">Bahan Kajian</th>
                <th style="width : 15%">Bentuk dan Metode Pembelajaran</th>
                <th style="width : 7%">Media</th>
                <th style="width : 7%">Waktu</th>
                <th style="width : 15%">Pengalaman belajar mahasiswa</th>                    
                <th style="width : 15%">Kriteria Penilaian dan Indikator (hard dan soft skills)</th>
                <th style="width : 10%">Bobot Nilai</th>
                <th style="width : 10%">Ref. (nomor)</th>
            </tr>
            <tr style ="height : 50px; background-color: lightblue">
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
                <td>8</td>
                <td>9</td>
                <td>10</td>
            </tr>
            <?php 
             $i = 0
            ?>
            @foreach($minggu_rps_list as $minggu_rps)
            <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $minggu_rps->kodeSubCPMK }}</td>
                <td>{{ $minggu_rps->bahan_kajian }}</td>
                <td>{{ $minggu_rps->temp_bentuk }}</td>
                <td>{{ $minggu_rps->temp_media }}</td>
                <td>{{ $minggu_rps->waktuPembelajaran }}</td>
                <td>{{ $minggu_rps->pengalaman_belajar }}</td>
                <td>{{ $minggu_rps->temp_kriteria_penilaian }}</td>
                <td>{{ $minggu_rps->bobot_nilai }}</td>
                <td>{{ $minggu_pustaka->where('kodeMingguRPS', $minggu_rps->kodeMingguRPS)->first()->id_pustaka ?? "-"}}</td>
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
        </tr>
        
    </table>

    <p>
    </p>
    <h3>
        C. KRITERIA DAN DESKRIPSI PENILAIAN
    </h3>
    <div style="margin-left:40px;margin-top:20px;">
        {!! $rps->detail_penilaian !!}
    </div>

    <p>
    </p>
    <h3>
        D. DAFTAR REFERENSI
    </h3>
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