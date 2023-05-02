<!DOCTYPE html>
<html>
    <head>
    <title>{{ $judul }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: center;
            font-size: 10px;
            border: 1px solid black;
            padding: 5px;
        }
    </style>
    </head>
    <body>
    <div class="container-fluid">
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <center>Pemetaan Capaian Pembelajaran Lulusan (CPL) & Bahan Kadjian (BK)</center>
            </div>
        </div>
        <div class="table-responsive ">
            <table class="table table-bordered" style="text-align: center">
                <thead>
                    <tr>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 5%">No</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Kode BK</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 50%">Nama Bahan Kajian</th>
                    <th scope="col" colspan="{{ $list_cpl->count() }}">Capaian Pembelajaran Lulusan</th>
                    </tr>
                    <tr>
                        @foreach ($list_cpl as $cpl)
                        <th scope="col">
                            <span itemid="{{ $cpl->deskripsiCPL }}">
                                {{ $cpl->kodeCPL }}
                            </span>
                            {{-- <span data-bs-toggle="tooltip" data-bs-placement="bottom"
                                title="{{ $cpl->deskripsiCPL }}">{{ $cpl->kodeCPL }}</span> --}}
                            </th>
                    @endforeach
                </thead>
                <tbody>
                    @foreach ($list_bk as $bk)
                    <tr>
                        <th scope="row">
                            {{ $loop->iteration }}</th>
                        <th scope="row">
                            {{ $bk->kodeBK }}</th>
                        <th scope="row" class="text-start">
                            {{ $bk->namaBK }}</th>
                        @foreach ($list_cpl as $cpl)
                                <td>
                                    <input type="checkbox" disabled @if ($detail_cpl_bk->where('kodeBK', $bk->kodeBK)->count()) checked @endif>
                                </td>
                        @endforeach
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
    </body>
</html>