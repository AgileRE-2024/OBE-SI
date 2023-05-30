<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabel Mata Kuliah</title>
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
        Tabel Mata Kuliah
    </div>

    <div>
        <table style="text-align: center; border: 1px inherit black solid">
            <thead style="background-color: black; color: white">
                <tr>
                    <th scope="col" style="width: 5%">No</th>
                    <th scope="col" style="width: 10%">Kode Mata Kuliah</th>
                    <th scope="col" style="width: 10%">Nama Mata Kuliah</th>
                    <th scope="col" colspan="2" style="width: 20%">
                        Prasyarat
                    </th>
                    <th scope="col" style="width: 10%">Jenis Mata Kuliah</th>
                    <th scope="col" style="width: 10%">Kategori Mata Kuliah
                    </th>
                    <th scope="col" style="width: 10%">SKS Mata Kuliah</th>
                    <th scope="col" style="width: 10%">Semester Mata Kuliah
                    </th>
                    <th scope="col" style="width: 50%">Deskripsi Mata Kuliah
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($mks as $mk)
                    <tr>
                        <td scope="row">
                            {{ $loop->iteration }}</td>
                        <td scope="row">
                            {{ $mk->kodeMK }}
                        </td>
                        <td scope="row">
                            {{ $mk->namaMK }}
                        </td>
                        <td scope="row" style="width:10%">
                            @if ($mk->mat_kodeMK)
                                {{ $mk->mat_kodeMK }}
                            @else
                                {{ '-' }}
                            @endif
                        </td>
                        <td scope="row" style="width:10%">
                            {{ $mk->prasyaratTambahan }}
                        </td>
                        <td scope="row">
                            @if ($mk->jenisMK == '1')
                                {{ 'Teori' }}
                            @elseif ($mk->jenisMK == '2')
                                {{ 'Praktikum' }}
                            @elseif ($mk->jenisMK == '3')
                                {{ 'Praktikum Lapangan' }}
                            @endif
                        </td>
                        <td scope="row">
                            @if ($mk->kategoriMK == '1')
                                {{ 'Wajib' }}
                            @else
                                {{ 'Pilihan' }}
                            @endif
                        </td>
                        <td scope="row">
                            {{ $mk->sks }}
                        </td>
                        <td scope="row">
                            {{ $mk->semester }}
                        </td>
                        <td scope="row">
                            {{ $mk->deskripsiMK }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
