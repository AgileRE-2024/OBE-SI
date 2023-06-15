<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabel CPMK</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
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
        Tabel CPMK
    </div>

    <div class="table table-responsive w-100 d-block d-md-table">
        <table class="table" style="text-align: center; border: 1px inherit black solid">
            <thead style="background-color: black; color: white">
                <tr>
                    <th scope="col" style="width: 10%">No</th>
                    <th scope="col" style="width: 20%">Kode CPMK</th>
                    <th scope="col" style="width: 50%">Deskripsi CPMK</th>
                    <th scope="col" style="width: 20%">KodeCPL</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($cpmk as $list_cpmk)
                    <tr>
                        <td scope="row">
                            {{ $loop->iteration }}</td>
                        <td scope="row">
                            {{ $list_cpmk->kodeCPMK }}
                        </td>
                        <td scope="row">
                            {{ $list_cpmk->deskripsiCPMK }}
                        </td>
                        <td scope="row">
                            {{ $list_cpmk->kodeCPL }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
