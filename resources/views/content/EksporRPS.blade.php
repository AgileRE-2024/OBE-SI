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

            h3,h4,h5,h6,h7 {
                font-size: 22px;
                font-weight: bold;
                color:white;
                background-color:blue;
                margin: 20px 0px 10px 0px;
            }

            th,td {
                border: 1px solid black;
                font-size: 12px;
                font-family: 'Times New Roman', Times, serif;
                padding: 5px;
            }
            table{
                border-collapse: collapse;
            }
            </style> 
    </head>
    <body>
    
    <table class="table table-bordered" style="text-align: center; font-weight:bold">
        <tr>
            <td rowspan="3">
            <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/unair.png'))) }}"
                        width="75" height="75"><br>Universitas Airlangga</th>
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
            <td >
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
                {{ $rps->disiapkan_oleh }}
            </td>
            <td rowspan="2">
            {{ $rps->diperiksa_oleh }}
            </td rowspan="2">
            <td rowspan="2">
            {{ $rps->disetujui_oleh }}
        </td>                    
        </tr>

        <tr>
            <td>
                Fakultas
            </td>
            <td >
                Tgl.
            </td>
            <td>
-
            </td>
                    
        </tr>

        <tr>
            <td>
                Fakultas {{ $dosen->prodi->fakultas }}
        </td>
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
                    <td>{{ $mk->namaProdi }}</td>
                </tr>
                <tr>
                    <th style="text-align:left;">6. Capaian Pembelajaran Lulusan (CPL)</th>
                    <td></td>
                </tr>
                <tr>
                    <th style="text-align:left;">7. Capaian Pembelajaran Mata Kuliah (CPMK)</th>
                    <td></td>
                </tr>
                <tr>
                    <th style="text-align:left;">8. Deskripsi Mata Kuliah</th>
                    <td> {{ $mk->deskripsiMK }}</td>
                </tr>
                <tr>
                    <th style="text-align:left;">9. Prasyarat (bila ada)</th>
                    <td>{{ $mk->prasyaratTambahan }}</td>
                </tr>
                <tr>
                    <th style="text-align:left;">10. Penanggung Jawab</th>
                    <td>{{ $mk->penanggung_jawab }}</td>
                </tr>
                <tr>
                    <th style="text-align:left;">11. Dosen Pengampu</th>
                    <td>{{ $mk->pengampu }}</td>
                </tr>
        </table>
        <h4>
            B. PROGRAM PEMBELAJARAN    
        </h4>
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
                <td>{{ $minggu_rps->temp_referensi }}</td>
            </tr>
            @if($i == 6)
            <tr>
                <td colspan="10"> UTS </td>
            </tr>
            @endif
            @if($i == 13)
            <tr>
                <td colspan="10"> UAS </td>
            </tr>
            @endif
            <?php 
             $i += 1
            ?>
            @if($i == 14)
            @break
            @endif
            @endforeach
        </table>
       
        <p>
        </p>
        <h7>
            C. DAFTAR REFERENSI   
        </h7>
    </body>
</html>
