<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabel Profil Lulusan</title>
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
        Tabel Profil Lulusan
    </div>

    <div style="text-align: center;">
        <table class="table table-bordered" style="margin: auto; border: 1px inherit black solid">
            <thead style="background-color: black; color: white">
                <tr>
                    <th class="align-middle" scope="col" style="width: 5%">No</th>
                    <th class="align-middle" scope="col" style="width: 10%">Kode Profil Lulusan</th>
                    <th class="align-middle" scope="col" style="width: 50%">Deskripsi Profil Lulusan
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pls as $pl)
                    <tr>
                        <td scope="row">
                            {{ $loop->iteration }}</td>
                        <td scope="row">
                            {{ $pl->kodePL }}</td>
                        <td scope="row">
                            {{ $pl->deskripsiPL }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
