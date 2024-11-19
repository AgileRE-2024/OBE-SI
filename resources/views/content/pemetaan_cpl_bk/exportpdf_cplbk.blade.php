<!DOCTYPE html>
<html>

<head>
    <title>{{ $judul }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: center;
            font-size: 10px;
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>

<body>
    <div>
        <table style="text-align: center; border: 1px inherit black solid;width:100%">
            <thead style="background-color: black; color: white">
                <tr>
                    <th scope="col" rowspan="2" style="width: 5%">No</th>
                    <th scope="col" rowspan="2" style="width: 10%">Kode BK</th>
                    <th scope="col" rowspan="2" style="width: 50%">Nama BK</th>
                    <th scope="col" colspan="{{ $list_cpl->count() }}">Bahan Kajian (CPL)</th>
                </tr>
                <tr>
                    @foreach ($list_cpl as $cpl)
                        <th scope="col">
                            <span data-bs-toggle="tooltip" data-bs-placement="bottom">{{ $cpl->kodeCPL }}</span>
                        </th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($list_bk as $bk)
                    <tr>
                        <th scope="row" @if ($detail_cpl_bk->where('kodeBK', '===', $bk->kodeBK)->count() == 0) style="background-color: yellow;" @endif>
                            {{ $loop->iteration }}</th>
                        <th scope="row" @if ($detail_cpl_bk->where('kodeBK', '===', $bk->kodeBK)->count() == 0) style="background-color: yellow;" @endif>
                            {{ $bk->kodeBK }}</th>
                        <th scope="row"
                            style="text-align: left; @if ($detail_cpl_bk->where('kodeBK', '===', $bk->kodeBK)->count() == 0) background-color: yellow; @endif">
                            {{ $bk->namaBK }}</th>
                        @foreach ($list_cpl as $cpl)
                            <td @if (
                                $detail_cpl_bk->where('kodeCPL', '===', $cpl->kodeCPL)->count() == 0 ||
                                    $detail_cpl_bk->where('kodeBK', '===', $bk->kodeBK)->count() == 0
                            ) style="background-color: yellow;" @endif>
                                <input type="checkbox" style="width: 25px; height: 25px; border: none; outline: none;"
                                    @if ($detail_cpl_bk->where('kodeBK', '===', $bk->kodeBK)->where('kodeCPL', '===', $cpl->kodeCPL)->count()) checked @endif>
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
