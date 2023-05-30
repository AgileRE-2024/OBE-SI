<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabel Pemetaan MK-CPMK-SUBCPMK</title>
    <style>
        table {
            border-collapse: collapse;
        }

        thead tr th {
            border: 1px black solid;
        }

        th,
        td {
            border: 1px black solid;
        }
    </style>
</head>

<body>
    <div style="text-align: center; padding: 20px 0px 20px 0px; font-size: 24px; font-weight: bold;">
        Tabel Pemetaan MK-CPMK-SUBCPMK
    </div>

    <div style="text-align: center;">
        <table class="table table-bordered" style="text-align: center">
            <thead style="background-color: lightgray">
                <tr>
                    <th class="align-middle" scope="col" style="width: 10%">MK</th>
                    <th class="align-middle" scope="col" style="width: 10%">CPL</th>
                    <th class="align-middle" scope="col" style="width: 10%">CPMK</th>
                    <th class="align-middle" scope="col" style="width: 30%">Deskripsi CPMK</th>
                    <th class="align-middle" scope="col" style="width: 40%">Sub-CPMK</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mk_list as $mk)
                    {{-- Mencari relasi dari mk --}}
                    @php
                        $list_relasi_mk = $detailmkcpmk_list->where('kodeMK', $mk->kodeMK);
                        $list_kode_cpmk = [];
                    @endphp
                    {{-- Menyimpan kode CPMK yang berelasi --}}
                    @foreach ($list_relasi_mk as $lrm)
                        @php
                            array_push($list_kode_cpmk, $lrm->kodeCPMK);
                        @endphp
                    @endforeach
                    {{-- List CPMK hasil filter 1 --}}
                    @php
                        $cpmk_filter1 = $cpmk_list->whereIn('kodeCPMK', $list_kode_cpmk)->groupBy('kodeCPL');
                        $counterCPMK = $cpmk_list
                            ->whereIn('kodeCPMK', $list_kode_cpmk)
                            ->groupBy('kodeCPL')
                            ->count();
                        $rowspanCPL = [];
                        $subPerCPL = [];
                        $cpmk_filter2 = [];
                    @endphp
                    {{-- Hitung rowspan untuk MK --}}
                    @php
                        $rowspanMK = $subcpmk_list->whereIn('kodeCPMK', $list_kode_cpmk)->count();
                    @endphp
                    {{-- CPMK untuk menghitung --}}
                    @php
                        $wakil_cpmk_filter2 = $cpmk_list->whereIn('kodeCPMK', $list_kode_cpmk)->keyBy('kodeCPL');
                    @endphp
                    @foreach ($wakil_cpmk_filter2 as $wakil)
                        @php
                            $g = 0; //ini rowspan CPL
                        @endphp
                        @foreach ($cpmk_list->whereIn('kodeCPMK', $list_kode_cpmk) as $cpmk)
                            {{-- List CPMK per MK dan CPL --}}
                            @php
                                $a = 0;
                            @endphp
                            @if ($cpmk->kodeCPL == $wakil->kodeCPL)
                                @php
                                    $b = $subcpmk_list->where('kodeCPMK', $cpmk->kodeCPMK)->count();
                                    $c = $subcpmk_list->where('kodeCPMK', $cpmk->kodeCPMK);
                                    $a = $a + $b;
                                    array_push($cpmk_filter2, $cpmk->kodeCPMK);
                                @endphp
                            @endif
                            @php
                                $g = $g + $a; //ini rowspan CPL
                            @endphp
                        @endforeach
                        <tr>
                            @if ($wakil->kodeCPL === $cpmk_list->whereIn('kodeCPMK', $list_kode_cpmk)->first()->kodeCPL)
                                <th rowspan="{{ $rowspanMK }}">{{ $mk->kodeMK }}</th>
                            @endif
                            <td rowspan="{{ $g }}">{{ $wakil->kodeCPL }}</td>
                            @foreach ($cpmk_list->whereIn('kodeCPMK', $list_kode_cpmk) as $cpmk)
                                {{-- List CPMK per MK dan CPL --}}
                                @php
                                    $a = 0;
                                @endphp
                                @if ($cpmk->kodeCPL == $wakil->kodeCPL)
                                    @php
                                        $d = $cpmk->kodeCPL;
                                        $e = $cpmk->kodeCPMK;
                                        $f = $cpmk->deskripsiCPMK;
                                        $b = $subcpmk_list->where('kodeCPMK', $cpmk->kodeCPMK)->count();
                                        $c = $subcpmk_list->where('kodeCPMK', $cpmk->kodeCPMK);
                                        $a = $a + $b;
                                        array_push($cpmk_filter2, $cpmk->kodeCPMK);
                                    @endphp
                                    <td rowspan="{{ $a }}">{{ $e }}</td>
                                    <td rowspan="{{ $a }}">{{ $f }}</td>
                                    <td>{{ $c->first()->kodeSubCPMK }} <br> {{ $c->first()->deskripsiSubCPMK }}</td>
                                </tr>
                                @if ($a > 1)
                                    @for ($i = 1; $i < $a; $i++)
                                        <tr>
                                            <td>{{ $c->get($i)->kodeSubCPMK }} <br> {{ $c->get($i)->deskripsiSubCPMK }}</td>
                                        </tr>
                                    @endfor
                                @endif
                            @endif
                        @endforeach
                    @endforeach
                @endforeach
            </tbody>
        </table>
        
    </div>
</body>

</html>
