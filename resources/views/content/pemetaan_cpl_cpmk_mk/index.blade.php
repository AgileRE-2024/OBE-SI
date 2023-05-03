@extends('layout.dashboard')

@section('content')
    <div class="content px-4 pt-3">
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>Tabel Capaian Pembelajaran Lulusan (CPL) - Capaian Pembelajaran Mata Kuliah (CPMK) - Mata Kuliah (MK)
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
        <div class="d-flex justify-content-end pt-2">
            <div class="pr-3">
                <a class="btn btn-outline-danger disabled" href="#"><i class="bi bi-file-earmark-pdf-fill"> </i>Export
                    PDF</a>
            </div>
            <div>
                <a class="btn btn-success disabled" href="#"><i class="bi bi-file-earmark-excel"> </i>Export Excel</a>
            </div>
        </div>
        <br>

        <div class="d-flex">
            <table class="table">
                <thead>
                    <tr>
                        <th class="align-middle" scope="col" style="width: 37%">Capaian Pembelajaran Lulusan</th>
                        <th class="align-middle" scope="col" style="width: 33%">Capaian Pembelajaran Mata Kuliah</th>
                        <th class="align-middle" scope="col" style="width: 30%">Mata Kuliah</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cpl as $cpl)
                        @if (sizeof($cpl->Cpmk) > 0)
                            @for ($i = 0; $i < sizeof($cpl->Cpmk); $i++)
                                @for ($j = 0; $j < sizeof($cpl->Cpmk[$i]->Mata_Kuliah); $j++)
                                    <tr>
                                        @if ($i == 0)
                                            <td scope="row" rowspan="{{ sizeof($cpl->Cpmk) }}" style="cursor: pointer"
                                                onclick="location.href='{{ route('kurikulum.pemetaan.cpl_cpmk_mk.add_cpmk', $cpl->kodeCPL) }}'"
                                                data-toggle="tooltip" title="Tekan untuk menambahkan CPMK baru">
                                                <span style="font-weight:600;">[{{ $cpl->kodeCPL }}]</span>
                                                {{ $cpl->deskripsiCPL }}
                                            </td>
                                        @endif
                                        <td rowspan="{{ sizeof($cpl->Cpmk[$i]->Mata_Kuliah) }}">
                                            <span style="font-weight:600;">[{{ $cpl->Cpmk[$i]->kodeCPMK }}]</span>
                                            {{ $cpl->Cpmk[$i]->deskripsiCPMK }}
                                        </td>
                                        <td><span
                                                style="font-weight:600;">[{{ $cpl->Cpmk[$i]->Mata_Kuliah[$j]->kodeMK }}]</span>
                                            {{ $cpl->Cpmk[$i]->Mata_Kuliah[$j]->namaMK }}
                                        </td>
                                    </tr>
                                @endfor
                            @endfor
                        @else
                            <tr>
                                <th scope="row">{{ $cpl->kodeCPL }}</th>
                                <td style="cursor: pointer"
                                    onclick="location.href='{{ route('kurikulum.pemetaan.cpl_cpmk_mk.add_cpmk', $cpl->kodeCPL) }}'"
                                    data-toggle="tooltip" title="Tekan untuk menambahkan CPMK baru">
                                    <span style="font-weight:600;">[{{ $cpl->Cpmk[$i]->kodeCPMK }}]</span>
                                    {{ $cpl->Cpmk[$i]->deskripsiCPMK }}
                                </td>
                                <td rowspan=""></td>
                                <td></td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
