<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teknik Penilaian CPMK Tahun Ajaran {{ $tahun_ajaran }}</title>
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
        Teknik Penilaian<br /> Tahun Ajaran {{ $tahun_ajaran }}
    </div>
    <div style="padding-top: 20px;">
        <table align="center" style="text-align: center">
            <thead style="background-color: black; color: white;">
                <tr>
                    <th class="align-middle" scope="col" style="width: 5%">No</th>
                    <th class="align-middle" scope="col" style="width: 10%">Kode CPL</th>
                    <th class="align-middle" scope="col" style="width: 10%">Kode MK</th>
                    <th class="align-middle" scope="col" style="width: 10%">Kode CPMK</th>
                    @foreach ($list_kolom as $tp)
                        <th scope="col">
                            {{-- <span itemid="{{ $tp }}"> --}}
                                {{ $tp}}
                            {{-- </span> --}}
                            </th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @php
                    if (!function_exists('setTeknikPenilaian')) {
                        function setTeknikPenilaian($asli, $baru)
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
                    @foreach($cpmk->Mata_Kuliah as $mk)
                        <tr>
                            @php
                                $iteration++;
                            @endphp
                            <th scope="row">{{ $iteration }}</th>
                            <th scope="row" class="text-start"><span itemid="{{ $cpl->deskripsiCPL }}">{{ $cpl->kodeCPL }}</span></th>
                            <th scope="row" class="text-start"><span itemid="{{ $mk->namaMK }}"> {{ $mk->kodeMK  }}</span></th>
                            <th scope="row" class="text-start"><span itemid="{{ $cpmk->deskripsiCPMK }}"> {{ $cpmk->kodeCPMK  }}</span></th>
                            @foreach ($list_kolom as $tp)
                            @php
                                    $checked = false;
                                    foreach ($list_teknikpenilaian->where('teknikPenilaian', $tp) as $ltp) {
                                        foreach ($detail_rps->where('kodePenilaian',$ltp->kodePenilaian) as $minggu) {
                                            foreach ($list_minggurps->where('kodeMingguRPS',$minggu->kodeMingguRPS) as $subCpmks) {
                                                if($subCpmks->SubCPMK->CPMK) {
                                                    $checked = true;
                                                }
                                            }
                                        }
                                    }
                                @endphp
                                    <td><input type="checkbox" name="" id="" @if($checked) checked @endif disabled></td>
                            @endforeach
                        </tr>
                    @endforeach
                    @endforeach
                    @endforeach 
            </tbody>
        </table>
    </div>
</body>

</html>

