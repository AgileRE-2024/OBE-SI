<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabel Sub CPMK</title>
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
        Tabel Sub CPMK
    </div>

    <div class="table table-responsive w-100 d-block d-md-table">
        <table class="table" style="margin: auto; border: 1px inherit black solid; text-align: center">
            <thead style="background-color: black; color: white">
                <tr>
                    <th class="align-middle" scope="col" style="width: 5%">No</th>
                    <th class="align-middle" scope="col" style="width: 15%">Kode Sub CPMK</th>
                    <th class="align-middle" scope="col" style="width: 15%">Kode CPMK</th>
                    <th class="align-middle" scope="col" style="width: 45%">Deskripsi Sub CPMK</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subcpmks as $subcpmk)
                    <tr>
                        <td scope="row">
                            {{ $loop->iteration }}</td>
                        <td scope="row">
                            {{ $subcpmk->kodeSubCPMK }}
                        </td>
                        <td scope="row">
                            {{ $subcpmk->kodeCPMK }}
                        </td>
                        <td scope="row">
                            {{ $subcpmk->deskripsiSubCPMK }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
