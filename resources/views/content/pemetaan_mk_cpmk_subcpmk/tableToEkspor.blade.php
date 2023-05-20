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
        Tabel Pemetaan MK-CPMK-SUBCPMK
    </div>

    <div style="text-align: center;">
        <table style="margin: auto; border: 1px inherit black solid">
            <thead style="background-color: lightgray">
                <tr>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 10%">MK</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 10%">CPL</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 10%">CPMK</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 30%">Deskripsi CPMK</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 40%">Sub-CPMK</th>
                </tr>
        </thead>
        <tbody>
            @foreach ($mk_list as $mk)
                @php
                    $counter = $detailmkcpmk_list->where('kodeMK', $mk->kodeMK)->count(); //ini jumlah cpmk per mk
                    $cpmk = $detailmkcpmk_list->where('kodeMK', $mk->kodeMK); //ini list cpmk per mk
                @endphp
                @for ($i = 0; $i < $counter; $i++)
                    <tr>
                        <td>{{ $cpmk[$i]->kodeCPMK }} <br> {{ $cpmk[$i]->deskripsiCPMK }}</td>
                    </tr>
                @endfor
            @endforeach


            @foreach ($cpmk_list as $cp)
                @php
                    $counter = $subcpmk_list->where('kodeCPMK', $cp->kodeCPMK)->count();;
                @endphp
                <tr>
                    <th rowspan={{ $counter }}>LALA</th>
                    <td rowspan={{ $counter }}>{{ $cp->kodeCPL }}</td>
                    <td rowspan={{ $counter }}>{{ $cp->kodeCPMK }}</td>
                    <td rowspan={{ $counter }}>{{ $cp->deskripsiCPMK }}</td>
                    <td>{{ $subcpmk_list[0]->kodeSubCPMK }} <br> {{ $subcpmk_list[0]->deskripsiSubCPMK }}</td>
                </tr>
                @for ($i = 1; $i < $counter; $i++)
                    <td>{{ $subcpmk_list[$i]->kodeSubCPMK }} <br> {{ $subcpmk_list[$i]->deskripsiSubCPMK }}</td>
                @endfor
            @endforeach
          </tbody>
        </table>
    </div>
</body>

</html>