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
                <center>Pemetaan Capaian Pembelajaran Lulusan (CPL) & Mata Kuliah (MK)</center>
            </div>
        </div>
        <div class="table-responsive ">
            <table class="table table-bordered" style="text-align: center; border: 1px inherit black solid">
                <thead style="background-color: black; color: white">
                    <tr>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 5%">No</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Kode MK</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 50%">Nama Mata Kuliah</th>
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
                    @foreach ($list_mk as $mk)
                    <tr>
                        <th scope="row">
                            {{ $loop->iteration }}</th>
                        <th scope="row">
                            {{ $mk->kodeMK }}</th>
                        <th scope="row" class="text-start">
                            {{ $mk->namaMK }}</th>
                            @foreach ($list_cpl as $cpl)
                            @php
                                $isTrue = false;
                                foreach ($list_cpmk->where('kodeCPL', $cpl->kodeCPL) as $cpmk) {
                                    if ($detail_mk_cpmk->where('kodeMK', $mk->kodeMK)->where('kodeCPMK', $cpmk->kodeCPMK)->count()) {
                                        $isTrue = true;
                                        break;
                                    }
                                }
                            @endphp
                                <td>
                                    <input type="checkbox" disabled @if ($isTrue) checked @endif>
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