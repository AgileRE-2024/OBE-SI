<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pemetaan Capaian Pembelajaran Lulusan (CPL) Bahan Kajian (BK) dan Mata Kuliah (MK)</title>
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
        Pemetaan Capaian Pembelajaran Lulusan (CPL) Bahan Kajian (BK) dan Mata Kuliah (MK)
    </div>
    <div style="text-align: center; padding: 20px 0px 20px 90px;">
        <div class="container">
            <div id="table1" class="table-container">
                <table style="text-align: center; border: 1px inherit black solid">
                    <thead style="background-color: black; color: white">
                        <tr>
                            <th scope="col"></th>
                            @foreach ($bk_list as $bk)
                                <th scope="col" data-toggle="tooltip" data-placement="top" title="{{ $bk->namaBK }}">{{ $bk->kodeBK }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cpl_list as $cpl)
                            <tr class="text-center">
                                <th scope="row" data-toggle="tooltip" data-placement="top" title="{{ $cpl->deskripsiCPL}}">{{ $cpl->kodeCPL }}</th>
                                    @foreach ($bk_list as $bk)
                                        <td>
                                            @if ($pemetaan2->where('kodeBK', $bk->kodeBK)->where('kodeCPL', $cpl->kodeCPL)->count() != 0)
                                                @foreach ($pemetaan1->where('kodeBK', $bk->kodeBK) as $pemetaanbkmk)
                                                    {{ $pemetaanbkmk->kodeMK }}
                                                @endforeach
                                            @endif
                                        </td>
                                    @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <br><br><br>
            <div id="table2" class="table-container">
                <table style="text-align: center; border: 1px inherit black solid">
                    <thead style="background-color: black; color: white">
                        <tr>
                            <th scope="col"></th>
                            @foreach ($cpl_list as $cpl)
                                <th scope="col" data-toggle="tooltip" data-placement="top" title="{{ $cpl->deskripsiCPL }}">{{  $cpl->kodeCPL}}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bk_list as $bk)
                            <tr class="text-center">
                                <th scope="row" data-toggle="tooltip" data-placement="top" title="{{ $bk->namaBK}}">{{ $bk->kodeBK }}</th>
                                @foreach ($cpl_list as $cpl)
                                    <td>
                                        @if ($pemetaan2->where('kodeCPL', $cpl->kodeCPL)->where('kodeBK', $bk->kodeBK)->count() != 0)
                                            @foreach ($pemetaan1->where('kodeBK', $bk->kodeBK) as $pemetaanbkmk)
                                                {{ $pemetaanbkmk->kodeMK }}
                                            @endforeach
                                        @endif
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
    </div>
</body>

</html>
