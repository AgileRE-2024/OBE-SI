@extends('layout.dashboard')

@section('content')
    <div class="content px-4 pt-3">
        <div class="card border" style="background-color: rgb(197, 197, 197)">
            <div class="card-body" style="font-weight:600;">
                Tabel Capaian Pembelajaran Lulusan (CPL) - Capaian Pembelajaran Mata Kuliah (CPMK) - Mata Kuliah (MK)
            </div>
        </div>
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
                                <tr>
                                    @if ($i == 0)
                                        <td scope="row" rowspan="{{ sizeof($cpl->Cpmk) }}" style="cursor: pointer"
                                            onclick="location.href='{{ route('kurikulum.pemetaan.cpl_cpmk_mk.add_cpmk', $cpl->kodeCPL) }}'"
                                            data-toggle="tooltip" title="Tekan untuk menambahkan CPMK baru">
                                            <span style="font-weight:600;">[{{ $cpl->kodeCPL }}]</span>
                                            {{ $cpl->deskripsiCPL }}
                                        </td>
                                    @endif
                                    <td rowspan="">
                                        <span style="font-weight:600;">[{{ $cpl->Cpmk[$i]->kodeCPMK }}]</span>
                                        {{ $cpl->Cpmk[$i]->deskripsiCPMK }}
                                    </td>
                                    <td><span style="font-weight:600;">[MK02]</span> MK-nya sama. Untuk memetakan bagian ini
                                        diperlukan pemetaan CPL-MK</td>
                                </tr>
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
