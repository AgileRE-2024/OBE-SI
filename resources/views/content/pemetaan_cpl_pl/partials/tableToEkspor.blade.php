<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pemetaan Capaian Pembelajaran Lulusan (CPL) & Profil Lulusan (PL)</title>
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
        Pemetaan Capaian Pembelajaran Lulusan (CPL) dan Profil Lulusan (PL)
    </div>
    <div>
        <table style="text-align: center; border: 1px inherit black solid">
            <thead style="background-color: black; color: white">
                <tr>
                    <th scope="col" rowspan="2" style="width: 5%">No</th>
                    <th scope="col" rowspan="2" style="width: 10%">Kode CPL</th>
                    <th scope="col" rowspan="2" style="width: 50%">CPL</th>
                    <th scope="col" colspan="{{ $pl_list->count() }}">Profil Lulusan (PL)</th>
                </tr>
                <tr>
                    @foreach ($pl_list as $pl)
                        <th scope="col">
                            <span data-bs-toggle="tooltip" data-bs-placement="bottom"
                                title="{{ $pl->deskripsiPL }}">{{ $pl->kodePL }}</span>
                        </th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($cpl_list as $cpl)
                    <tr>
                        <th scope="row" @if ($pemetaan->where('kodeCPL', '===', $cpl->kodeCPL)->count() == 0) style="background-color: yellow;" @endif>
                            {{ $loop->iteration }}</th>
                        <th scope="row" @if ($pemetaan->where('kodeCPL', '===', $cpl->kodeCPL)->count() == 0) style="background-color: yellow;" @endif>
                            {{ $cpl->kodeCPL }}</th>
                        <th scope="row"
                            style="text-align: left; @if ($pemetaan->where('kodeCPL', '===', $cpl->kodeCPL)->count() == 0) background-color: yellow; @endif">
                            {{ $cpl->deskripsiCPL }}</th>
                        @foreach ($pl_list as $pl)
                            <td @if (
                                $pemetaan->where('kodePL', '===', $pl->kodePL)->count() == 0 ||
                                    $pemetaan->where('kodeCPL', '===', $cpl->kodeCPL)->count() == 0
                            ) style="background-color: yellow;" @endif>
                                <input type="checkbox" style="width: 25px; height: 25px; border: none; outline: none;"
                                    @if ($pemetaan->where('kodeCPL', '===', $cpl->kodeCPL)->where('kodePL', '===', $pl->kodePL)->count()) checked @endif>
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
