<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabel Bahan Kajian</title>
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
        Tabel Teknik Penilaian
    </div>
    <div class="d-flex">
        <table class="table table-bordered" style="text-align: center">
            <thead class="table" style="background-color: lightgray">
                <tr>
                    <th class="align-middle" scope="col"  style="width: 5%">No</th>
                    <th class="align-middle" scope="col"  style="width: 10%">Kode Penilaian</th>
                    <th class="align-middle" scope="col"  style="width: 10%">Kode RPS</th>
                    <th class="align-middle" scope="col"  style="width: 25%">Teknik Penilaian</th>
                    <th class="align-middle" scope="col"  style="width: 10%">Bobot Penilaian</th>
                    <th class="align-middle" scope="col"  style="width: 30%">Kriteria Penilaian</th>
                    <th class="align-middle" scope="col"  style="width: 30%">Tahap Penilaian</th>
                    <th class="align-middle" scope="col"  style="width: 30%">Instrumen Penilaian</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tps as $tp)
                    <tr>
                        <td scope="row">
                            {{ $loop->iteration }}</td>
                        <td scope="row">
                            {{ $tp->kodePenilaian }}
                        </td>
                        <td scope="row">
                            {{ $tp->kodeRPS }}
                        </td>
                        <td scope="row">
                            {{ $tp->teknikPenilaian }}
                        </td>
                        <td scope="row">
                            {{ $tp->bobotPenilaian }}
                        </td>
                        <td scope="row">
                            {{ $tp->kriteriaPenilaian }}
                        </td>
                        <td scope="row">
                            {{ $tp->tahapPenilaian }}
                        </td>
                        <td scope="row">
                            {{ $tp->instrumenPenilaian }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    
</body>

</html>