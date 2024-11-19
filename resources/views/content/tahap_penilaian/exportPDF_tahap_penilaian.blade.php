<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mekanisme dan Tahap Penilaian Tahun Ajaran {{ $tahun_ajaran }}</title>
    <style>
        table {
            border-collapse: collapse;
        }

        thead tr th {
            border: 1px white solid !important;
        }

        th,
        td {
            border: 1px black solid;
        }
    </style>
</head>

<body>
    <div style="text-align: center; padding: 20px 0px 20px 0px; font-size: 24px; font-weight: bold;">
        Mekanisme dan Tahap Penilaian<br /> Tahun Ajaran {{ $tahun_ajaran }}
    </div>
    <div style="padding-top: 20px;">
        <table align="center" style="text-align: center">
            <thead style="background-color: black; color: white;">
                <tr>
                    <th scope="col" style="width: 5%">No</th>
                    <th scope="col" style="width: 8%">Kode CPL</th>
                    <th scope="col" style="width: 8%">Kode MK</th>
                    <th scope="col" style="width: 10%">Kode CPMK</th>
                    <th scope="col" style="width: 15%">Tahap Penilaian</th>
                    <th scope="col" style="width: 15%">Teknik Penilaian</th>
                    <th scope="col" style="width: 15%">Instrumen</th>
                    <th scope="col" style="width: 16%">Kriteria</th>
                    <th scope="col" style="width: 8%">Bobot</th>
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
                                        if (
                                            ($prefix_asli === 'Awal' && explode(' ', $asli)[2] !== 'Akhir') ||
                                            ($prefix_asli !== 'Awal' && explode(' ', $asli)[2] === 'Akhir')
                                        ) {
                                            return 'Awal - Akhir Semester';
                                        }
                                        return $asli;
                                    } else {
                                        switch ($prefix_asli) {
                                            case 'Awal':
                                                return $prefix_asli .
                                                    ' - ' .
                                                    $prefix_baru .
                                                    ' ' .
                                                    explode(' ', $asli)[1];

                                            case 'Tengah':
                                                if ($prefix_baru == 'Awal') {
                                                    return $prefix_baru .
                                                        ' - ' .
                                                        $prefix_asli .
                                                        ' ' .
                                                        explode(' ', $asli)[1];
                                                } else {
                                                    return $prefix_asli .
                                                        ' - ' .
                                                        $prefix_baru .
                                                        ' ' .
                                                        explode(' ', $asli)[1];
                                                }

                                            case 'Akhir':
                                                return $prefix_baru .
                                                    ' - ' .
                                                    $prefix_asli .
                                                    ' ' .
                                                    explode(' ', $asli)[1];

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
                        @foreach ($detail_mk_cpmk->where('kodeCPMK', $cpmk->kodeCPMK) as $mk)
                            <tr>
                                @php
                                    $iteration++;
                                    $bobot = 0;
                                    $tahap_penilaian = '';
                                    $teknik_penilaian = '';
                                    $instrumen = [];
                                    $kriteria = [];

                                    foreach ($cpmk->SubCPMK as $subCpmk) {
                                        foreach ($subCpmk->Minggu_RPS as $minggu_rps) {
                                            if ($list_rps->where('kodeMK', $mk->kodeMK)->count()) {
                                                foreach (
                                                    $list_detail_rps
                                                        ->where('kodeMingguRPS', $minggu_rps->kodeMingguRPS)
                                                        ->where(
                                                            'kodeRPS',
                                                            $list_rps->firstWhere('kodeMK', $mk->kodeMK)->kodeRPS
                                                        )
                                                    as $detail_rps
                                                ) {
                                                    $data_teknik_penilaian = $detail_rps->Teknik_Penilaian;

                                                    $bobot += $data_teknik_penilaian->bobotPenilaian;

                                                    $tahap_penilaian = setTahapPenilaian(
                                                        $tahap_penilaian,
                                                        $data_teknik_penilaian->tahapPenilaian
                                                    );

                                                    $teknik_penilaian =
                                                        $teknik_penilaian !== ''
                                                            ? $teknik_penilaian .
                                                                '; ' .
                                                                $data_teknik_penilaian->teknikPenilaian
                                                            : $data_teknik_penilaian->teknikPenilaian;
                                                    if (
                                                        !in_array(
                                                            $data_teknik_penilaian->instrumenPenilaian,
                                                            $instrumen
                                                        )
                                                    ) {
                                                        array_push(
                                                            $instrumen,
                                                            $data_teknik_penilaian->instrumenPenilaian
                                                        );
                                                    }
                                                    if (
                                                        !in_array($data_teknik_penilaian->kriteriaPenilaian, $kriteria)
                                                    ) {
                                                        array_push(
                                                            $kriteria,
                                                            $data_teknik_penilaian->kriteriaPenilaian
                                                        );
                                                    }
                                                }
                                            }
                                        }
                                    }
                                @endphp
                                <th scope="row" style="width: 5%">{{ $iteration }}</th>
                                <th scope="row" style="width: 8%">{{ $cpl->kodeCPL }}</th>
                                <th scope="row" style="width: 8%">{{ $mk->kodeMK }}</th>
                                <th scope="row" style="width: 10%">{{ $cpmk->kodeCPMK }}</th>
                                <td scope="row" style="width: 15%">{{ $tahap_penilaian }}</td>
                                <td scope="row" style="width: 15%">{{ $teknik_penilaian }}</td>
                                <td scope="row" style="width: 15%">
                                    @foreach ($instrumen as $ins)
                                        {{ $ins }}
                                        <br />
                                    @endforeach
                                </td>
                                <td scope="row" style="width: 16%">
                                    @foreach ($kriteria as $kr)
                                        {{ $kr }}
                                        <br />
                                    @endforeach
                                </td>
                                <td scope="row" style="width: 8%">{{ $bobot }}</td>
                            </tr>
                        @endforeach
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
