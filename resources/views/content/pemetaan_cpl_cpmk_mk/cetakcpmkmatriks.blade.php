<!DOCTYPE html>
<html>

<head>
    <title>PDF Report</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
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
    <table class="table" style="table-layout: fixed">
        <thead style="position: sticky; background-color: #fff; z-index: 2; top: 0;">
            <tr>
                <th class="align-middle" scope="col" rowspan="2"
                    style="width: 240px; position: sticky; background-color: #fff; z-index: 1; left: 0;">
                    Mata Kuliah
                </th>
                <th class="align-middle" colspan="{{ sizeof($cpl) }}"
                    style="width: calc(100px * {{ sizeof($cpl) }}); text-align: center;">CPL</th>
            </tr>
            <tr>
                @foreach ($cpl as $item)
                    <th class="align-middle" style="width: 200px" data-toggle="tooltip"
                        title="{{ $item->deskripsiCPL }}">
                        {{ $item->kodeCPL }}
                    </th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            {{-- @for ($x = 0; $x < 10; $x++) --}}
            @foreach ($mk as $matkul)
                <tr>
                    <td scope="row" style="position: sticky; background-color: #fff; z-index: 1; left: 0;">
                        <span style="font-weight:600;">[{{ $matkul->kodeMK }}]</span>
                        {{ $matkul->namaMK }}
                    </td>
                    @foreach ($cpl as $item)
                        @php
                            $value = [];
                            $i = 0;
                            foreach ($matkul->CPMK as $CPMKfromMK) {
                                if ($CPMKfromMK->CPL == $item) {
                                    $value[$i] = $CPMKfromMK;
                                    $i++;
                                }
                            }
                        @endphp
                        <td>
                            @for ($i = 0; $i < sizeof($value); $i++)
                                <span data-toggle="tooltip" title="{{ $value[$i]->deskripsiCPMK }}">
                                    {{ $value[$i]->kodeCPMK }}
                                </span>
                            @endfor
                        </td>

                        @php
                            $value = [];
                        @endphp
                    @endforeach
                </tr>
            @endforeach
            {{-- @endfor --}}
        </tbody>
    </table>
</body>

</html>
