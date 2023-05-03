@extends('layout.dashboard')

@section('content')
    <div class="content px-4">
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>Matriks Capaian Pembelajaran Lulusan (CPL) & Mata Kuliah (MK)</h3>
                <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Pemetaan CPL Program Studi terhadap PL
                    Pemetaan CPL terhadap MK dilakukan untuk menunjukkan keterhubungan antara
                    mata kuliah terhadap CPL Program Studi.<b style="display:inline-block;transform: scaleX(-1)"><i
                            class="bi bi-quote"></i></b></h5>
            </div>
        </div>
        <div class="d-flex justify-content-end pt-2">
            <div class="pr-3">
                <a class="btn btn-outline-danger" href="#"><i class="bi bi-file-earmark-pdf-fill"> </i>Export PDF</a>
            </div>
            <div>
                <a class="btn btn-success" href="#"><i class="bi bi-file-earmark-excel"> </i>Export Excel</a>
            </div>
        </div>
        <br>

        <table class="table table-bordered" style="text-align: center">
            <thead class="table" style="background-color: lightgray">
                <tr>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 5%">No</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Kode MK</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 50%">Nama</th>
                    <th scope="col" colspan="{{ $list_cpl->count() }}">CPL</th>
                </tr>
                <tr>
                    @foreach ($list_cpl as $cpl)
                        <th scope="col">
                            <span data-bs-toggle="tooltip" data-bs-placement="bottom"
                                title="{{ $cpl->deskripsiCPL }}">{{ $cpl->kodeCPL }}</span>
                        </th>
                    @endforeach
                </tr>
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
                            @foreach ($list_cpmk->where('kodeCPL', $cpl->kodeCPL) as $cpmk)
                                <td>
                                    <input type="checkbox" disabled @if ($detail_mk_cpmk->where('kodeMK', $mk->kodeMK)->where('kodeCPMK', $cpmk->kodeCPMK)->count()) checked @endif>
                                </td>
                            @endforeach
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection