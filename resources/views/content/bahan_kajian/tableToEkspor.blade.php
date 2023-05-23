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
        Tabel Bahan Kajian
    </div>

    <div class="table table-responsive w-100 d-block d-md-table">
        <table class="table" style="margin: auto; border: 1px inherit black solid; text-align: center">
            <thead style="background-color: black; color: white">
                <tr>
                    <th scope="col" style="width: 5%">No</th>
                    <th scope="col" style="width: 15%">Kode Bahan Kajian</th>
                    <th scope="col" style="width: 50%">Nama Bahan Kajian</th>
                    <th scope="col" style="width: 10%">Kategori Bahan Kajian</th>
                    <th scope="col" style="width: 50%">Referensi Bahan Kajian</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bks as $bk)
                    <tr>
                        <td scope="row">
                            {{ $loop->iteration }}</td>
                        <td scope="row">
                            {{ $bk->kodeBK }}
                        </td>
                        <td scope="row">
                            {{ $bk->namaBK }}
                        </td>
                        <td scope="row">
                            @if ($bk->kategoriBK == '1')
                                {{ 'Wajib' }}
                            @else
                                {{ 'Pilihan' }}
                            @endif
                        </td>
                        <td scope="row">
                            {{ $bk->referensiBK }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
