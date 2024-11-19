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
                                                    ? $teknik_penilaian . '; ' . $data_teknik_penilaian->teknikPenilaian
                                                    : $data_teknik_penilaian->teknikPenilaian;
                                            if (!in_array($data_teknik_penilaian->instrumenPenilaian, $instrumen)) {
                                                array_push($instrumen, $data_teknik_penilaian->instrumenPenilaian);
                                            }
                                            if (!in_array($data_teknik_penilaian->kriteriaPenilaian, $kriteria)) {
                                                array_push($kriteria, $data_teknik_penilaian->kriteriaPenilaian);
                                            }
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
                            <span itemid="{{ $list_mk->firstWhere('kodeMK', $mk->kodeMK)->namaMK }}">
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
