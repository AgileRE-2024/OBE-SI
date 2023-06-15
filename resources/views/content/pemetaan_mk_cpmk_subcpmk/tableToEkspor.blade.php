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
                @php
                    use Illuminate\Support\Str;
                    $mkpunyarelasi=$detailmkcpmk_list->pluck('kodeMK');
                    $mkfix=$mk_list->whereIn('kodeMK', $mkpunyarelasi);
                @endphp
                @foreach ($mkfix as $mk)
                    {{-- Cari rowspan mk --}}
                    @php
                        $cpmkfix = $detailmkcpmk_list->where('kodeMK', $mk->kodeMK)->pluck('kodeCPMK');
                        $rowspanmk = $subcpmk_list->whereIn('kodeCPMK', $cpmkfix)->count();
                    @endphp
                    {{-- Cari rowspan cpl --}}
                    @php
                        $cplfix = $cpmk_list->whereIn('kodeCPMK', $cpmkfix)->pluck('kodeCPL')->unique();
                        // $rowspanmk = $subcpmk_list->whereIn('kodeCPMK', $cpmkfix)->count();
                    @endphp
                    <tr>
                    <td rowspan={{ $rowspanmk }}><span itemid="{{ $mk->namaMK }}">{{ $mk->kodeMK }}</td>
                    

                    {{-- looping percpl --}}
                    @foreach ($cplfix as $cpl)
                        @php
                            $cpmkfixs = $cpmk_list->whereIn('kodeCPMK', $cpmkfix)->whereIn('kodeCPL', $cpl)->pluck('kodeCPMK');
                            $rowspancpl = $subcpmk_list->whereIn('kodeCPMK', $cpmkfixs)->count();
                            
                        @endphp
                        <td rowspan={{ $rowspancpl }}><span itemid="{{ $cpl_list->where('kodeCPL',$cpl)->first()->deskripsiCPL }}">{{ $cpl }}</td>
                        {{-- looping percpmk --}}
                        @foreach ($cpmkfixs as $cpmk)
                            @php
                                $rowspancpmk = $subcpmk_list->whereIn('kodeCPMK', $cpmk)->count();   
                                $sub=$subcpmk_list->whereIn('kodeCPMK', $cpmk);
                            @endphp
                            <td rowspan={{ $rowspancpmk }}>{{ $cpmk }}</td>
                            <td rowspan={{ $rowspancpmk }}>{{ $cpmk_list->where('kodeCPMK', $cpmk)->first()->deskripsiCPMK }}</td>
                            <td>{{ $sub->first()->kodeSubCPMK }} <br> {{ $sub->first()->deskripsiSubCPMK }}</td>
                            </tr>
                            @if ($sub->count() > 1)
                                @foreach ($sub->skip(1) as $item)
                                    <tr>
                                        <td>{{ $item->kodeSubCPMK }} <br> {{ $item->deskripsiSubCPMK }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        @endforeach
                    @endforeach
                @endforeach
            </tbody>
        </table>
        
    </div>
</body>

</html>
