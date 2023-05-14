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
        Pemetaan Bahan Kajian (BK) dan Mata Kuliah (MK)
    </div>
    <div>
        <table style="text-align: center; border: 1px inherit black solid;width:100%">
            <thead style="background-color: black; color: white">
                <tr>
                    <th scope="col" rowspan="2" style="width: 5%">No</th>
                    <th scope="col" rowspan="2" style="width: 10%">Kode MK</th>
                    <th scope="col" rowspan="2" style="width: 50%">Nama MK</th>
                    <th scope="col" colspan="{{ $bk_list->count() }}">Bahan Kajian (BK)</th>
                </tr>
                <tr>
                    @foreach ($bk_list as $bk)
                        <th scope="col">
                            <span data-bs-toggle="tooltip" data-bs-placement="bottom"
                                >{{ $bk->kodeBK }}</span>
                        </th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($mk_list as $mk)
                    <tr>
                        <th scope="row" @if ($pemetaan->where('kodeMK', '===', $mk->kodeMK)->count() == 0) style="background-color: yellow;" @endif>
                            {{ $loop->iteration }}</th>
                        <th scope="row" @if ($pemetaan->where('kodeMK', '===', $mk->kodeMK)->count() == 0) style="background-color: yellow;" @endif>
                            {{ $mk->kodeMK }}</th>
                        <th scope="row"
                            style="text-align: left; @if ($pemetaan->where('kodeMK', '===', $mk->kodeMK)->count() == 0) background-color: yellow; @endif">
                            {{ $mk->namaMK }}</th>
                        @foreach ($bk_list as $bk)
                            <td @if (
                                $pemetaan->where('kodeBK', '===', $bk->kodeBK)->count() == 0 ||
                                    $pemetaan->where('kodeMK', '===', $mk->kodeMK)->count() == 0) style="background-color: yellow;" @endif>
                                <input type="checkbox" style="width: 25px; height: 25px; border: none; outline: none;"
                                    @if ($pemetaan->where('kodeMK', '===', $mk->kodeMK)->where('kodeBK', '===', $bk->kodeBK)->count()) checked @endif>
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
