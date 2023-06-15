<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabel CPL SN Dikti</title>
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
        Tabel Capaian Pembelajaran SN Dikti
    </div>

    <div class="table table-responsive w-100 d-block d-md-table">
        <table class="table" style="margin: auto; border: 1px inherit black solid; text-align: center">
            <thead style="background-color: black; color: white">
                <tr>
                    <th class="align-middle" scope="col" style="width: 5%">No</th>
                    <th class="align-middle" scope="col" style="width: 10%">Kode CPL SN-Dikti</th>
                    <th class="align-middle" scope="col" style="width: 50%">Deskripsi CPL SN-Dikti
                    </th>
                    <th class="align-middle" scope="col" style="width: 10%">Sumber CPL SN-Dikti</th>
                    <th class="align-middle" scope="col" style="width: 10%">Kategori CPL SN-Dikti</th>
                    <th class="align-middle" scope="col" style="width: 9%">Jenis CPL SN-Dikti</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cpls as $cpl)
                    <tr>
                        <td scope="row">
                            {{ $loop->iteration }}</td>
                        <td scope="row">
                            {{ $cpl->kodeCPLSN }}
                        </td>
                        <td scope="row">
                            {{ $cpl->deskripsiSN }}
                        </td>
                        <td scope="row">
                            {{ $cpl->sumberSN }}
                        </td>
                        <td scope="row">
                            @if ($cpl->kategoriSN == '1')
                                {{ 'Wajib' }}
                            @else
                                {{ 'Pilihan' }}
                            @endif
                        </td>
                        <td scope="row">
                            {{ $cpl->jenisSN }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
