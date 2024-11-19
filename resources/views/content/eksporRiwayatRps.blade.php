<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    {{-- Template CSS --}}
    <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.css') }}">

    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    {{-- Template CSS --}}
    <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.css') }}">

    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- SweetAlert2 JS --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    {{-- CKEDITOR5 --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>
        {{ $title }}
    </title>
    <style>
        @media print {
            @page {
                size: landscape;
            }
        }

        th,
        td {
            border: 1px solid black;
            font-size: 12px;
            font-family: 'Times New Roman', Times, serif;
            padding: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }
    </style>
</head>

<body>
    <div style="text-align:center">
        <h2 style="padding-bottom:5px;">
            DAFTAR RIWAYAT RPS
        </h2>
        {{ $date_time }}
    </div>
    <div style="font-weight:bold;padding-bottom:5px;">
        {{ $mk->namaMK }} - {{ $mk->kodeMK }}
    </div>
    <table class="table table-bordered" style="text-align: center">
        <thead style="background-color: lightgray">
            <tr>
                <th style="height: 40px;">Kode RPS</th>
                <th>Mata Kuliah</th>
                <th>Tahun</th>
                <th>Semester</th>
            </tr>
        </thead>
        @foreach ($rps_list as $rps)
            <tr>
                <td scope="row">{{ $rps->id_rps }}</td>
                <td scope="row">{{ $rps->Mata_Kuliah->namaMK }}</td>
                <td scope="row">{{ $rps->tahunAjaran }}</td>
                <td scope="row">{{ $rps->semester }}</td>
            </tr>
        @endforeach
    </table>
    <p style="float:right">
    </p>
</body>

</html>
