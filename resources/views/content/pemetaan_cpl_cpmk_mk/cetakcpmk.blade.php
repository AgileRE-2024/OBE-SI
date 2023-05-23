<!DOCTYPE html>
<html>
<head>
    <title>PDF Report</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>PDF REPORT PEMETAAN CPMK</h1>
    <table class="table">
                <thead>
                    <tr>
                        <th class="align-middle" scope="col" style="width: 37%">Capaian Pembelajaran Lulusan</th>
                        <th class="align-middle" scope="col" style="width: 33%">Capaian Pembelajaran Mata Kuliah</th>
                        <th class="align-middle" scope="col" style="width: 30%">Mata Kuliah</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cpl as $cpl)
                        {{-- counting --}}
                        @php
                            for ($i = 0; $i < sizeof($cpl->Cpmk); $i++) {
                                $x = 0;
                                foreach ($cpl->Cpmk as $item) {
                                    if (sizeof($item->Mata_Kuliah) > 0) {
                                        $x = $x + sizeof($item->Mata_Kuliah);
                                    } else {
                                        $x = $x + 1;
                                    }
                                }
                            }
                        @endphp

                        @if (sizeof($cpl->Cpmk) > 0)
                            @for ($i = 0; $i < sizeof($cpl->Cpmk); $i++)
                                @if (sizeof($cpl->Cpmk[$i]->Mata_Kuliah) > 0)
                                    @for ($j = 0; $j < sizeof($cpl->Cpmk[$i]->Mata_Kuliah); $j++)
                                        {{-- normal. cpmk dan mk sudah terisi --}}
                                        <tr>
                                            @if ($i == 0 && $j == 0)
                                                <td scope="row" rowspan="{{ $x }}" style="cursor: pointer"
                                                    onclick="location.href='{{ route('kurikulum.pemetaan.cpl_cpmk_mk.add_cpmk', $cpl->kodeCPL) }}'"
                                                    data-toggle="tooltip" title="Tekan untuk menambahkan CPMK baru">
                                                    <span style="font-weight:600;">[{{ $cpl->kodeCPL }}]</span>
                                                    {{ $cpl->deskripsiCPL }}
                                                </td>
                                            @endif
                                            @if ($j == 0)
                                                <td rowspan="{{ sizeof($cpl->Cpmk[$i]->Mata_Kuliah) }}"
                                                    style="cursor: pointer"
                                                    onclick="location.href='{{ route('kurikulum.pemetaan.cpl_cpmk_mk.edit_cpmk', $cpl->Cpmk[$i]) }}'"
                                                    data-toggle="tooltip"
                                                    title="Tekan untuk mengubah CPMK atau memetakan dengan MK">
                                                    <span style="font-weight:600;">[{{ $cpl->Cpmk[$i]->kodeCPMK }}]</span>
                                                    {{ $cpl->Cpmk[$i]->deskripsiCPMK }}
                                                </td>
                                            @endif
                                            <td><span
                                                    style="font-weight:600;">[{{ $cpl->Cpmk[$i]->Mata_Kuliah[$j]->kodeMK }}]</span>
                                                {{ $cpl->Cpmk[$i]->Mata_Kuliah[$j]->namaMK }}
                                            </td>
                                        </tr>
                                    @endfor
                                @else
                                    {{-- agak normal. cpmk udah terisi, belum dipetakan dengan mk --}}
                                    <tr>
                                        @if ($i == 0)
                                            <td scope="row" rowspan="{{ sizeof($cpl->Cpmk) }}" style="cursor: pointer"
                                                onclick="location.href='{{ route('kurikulum.pemetaan.cpl_cpmk_mk.add_cpmk', $cpl->kodeCPL) }}'"
                                                data-toggle="tooltip" title="Tekan untuk menambahkan CPMK baru">
                                                <span style="font-weight:600;">[{{ $cpl->kodeCPL }}]</span>
                                                {{ $cpl->deskripsiCPL }}
                                            </td>
                                        @endif
                                        <td style="cursor: pointer"
                                            onclick="location.href='{{ route('kurikulum.pemetaan.cpl_cpmk_mk.edit_cpmk', $cpl->Cpmk[$i]) }}'"
                                            data-toggle="tooltip"
                                            title="Tekan untuk mengubah CPMK atau memetakan dengan MK">
                                            <span style="font-weight:600;">[{{ $cpl->Cpmk[$i]->kodeCPMK }}]</span>
                                            {{ $cpl->Cpmk[$i]->deskripsiCPMK }}
                                        </td>
                                        <td class="font-weight-light font-italic">Belum ada mata kuliah yang dipetakan</td>
                                    </tr>
                                @endif
                            @endfor
                        @else
                            {{-- gk normal blas. cpmk gada, mk gada --}}
                            <tr>
                                <td scope="row" style="cursor: pointer"
                                    onclick="location.href='{{ route('kurikulum.pemetaan.cpl_cpmk_mk.add_cpmk', $cpl->kodeCPL) }}'"
                                    data-toggle="tooltip" title="Tekan untuk menambahkan CPMK baru">
                                    <span style="font-weight:600;">[{{ $cpl->kodeCPL }}]</span>
                                    {{ $cpl->deskripsiCPL }}
                                </td>
                                <td class="font-weight-light font-italic">Belum ada CPMK yang ditambahkan</td>
                                <td class="font-weight-light font-italic">Belum ada mata kuliah yang dipetakan</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
</body>
</html>
