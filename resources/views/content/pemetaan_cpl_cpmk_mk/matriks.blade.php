@extends('layout.dashboard')

@section('content')
    <div class="content px-4 pt-3">
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>
                    Matriks Capaian Pembelajaran Lulusan (CPL) - Capaian Pembelajaran Mata Kuliah (CPMK) - Mata Kuliah (MK)
                </h3>
                <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Pemetaan Pembelajaran Lulusan (CPL),
                    Capaian Pembelajaran Mata Kuliah (CPMK), dan Mata Kuliah (MK) dilakukan untuk menunjukkan keterhubungan
                    antara ketiganya. Untuk menambahkan Capaian Pembelajaran Mata Kuliah (CPMK) baru dapat dengan menekan
                    Capaian Pembelajaran Lulusan (CPL) terkait. Untuk menambahkan Mata Kuliah (MK) atau mengubah Capaian
                    Pembelajaran Lulusan (CPL) dapat dengan menekan Capaian Pembelajaran Mata Kuliah (CPMK) terkait.
                    <b style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b>
                </h5>
            </div>
        </div>

        <div class="d-flex mt-5" style="overflow: auto; width: 100%; max-height: calc(100vh - 4rem);">
            <table class="table" style="table-layout: fixed">
                <thead style="position: sticky; background-color: #fff; z-index: 2; top: 0;">
                    <tr>
                        <th class="align-middle" scope="col" rowspan="2"
                            style="width: 240px; position: sticky; background-color: #fff; z-index: 1; left: 0;">
                            Mata Kuliah
                        </th>
                        <th class="align-middle" colspan="{{ sizeof($cpl) }}"
                            style="width: calc(100px * {{ sizeof($cpl) }}); text-align: center;">CPL</th>
                    </tr>
                    <tr>
                        @foreach ($cpl as $item)
                            <th class="align-middle" style="width: 200px" data-toggle="tooltip"
                                title="{{ $item->deskripsiCPL }}">
                                {{ $item->kodeCPL }}
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    {{-- @for ($x = 0; $x < 10; $x++) --}}
                    @foreach ($mk as $matkul)
                        <tr>
                            <td scope="row" style="position: sticky; background-color: #fff; z-index: 1; left: 0;">
                                <span style="font-weight:600;">[{{ $matkul->kodeMK }}]</span>
                                {{ $matkul->namaMK }}
                            </td>
                            @foreach ($cpl as $item)
                                @php
                                    $value = [];
                                    $i = 0;
                                    foreach ($matkul->CPMK as $CPMKfromMK) {
                                        if ($CPMKfromMK->CPL == $item) {
                                            $value[$i] = $CPMKfromMK;
                                            $i++;
                                        }
                                    }
                                @endphp

                                <td>
                                    @for ($i = 0; $i < sizeof($value); $i++)
                                        <span data-toggle="tooltip" title="{{ $value[$i]->deskripsiCPMK }}">
                                            {{ $value[$i]->kodeCPMK }}
                                        </span>
                                    @endfor
                                </td>

                                @php
                                    $value = [];
                                @endphp
                            @endforeach
                        </tr>
                    @endforeach
                    {{-- @endfor --}}
                </tbody>
            </table>
        </div>
    </div>
@endsection
