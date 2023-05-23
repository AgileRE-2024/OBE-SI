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
                <a class="btn btn-outline-danger" target="_blank" rel="noopener noreferrer"
                    href="{{ route('kurikulum.pemetaan.cpl_cpmk_mk.export') }}"><i class="bi bi-file-earmark-pdf-fill">
                    </i>Export
                    PDF</a>
            </div>
            <div>
                <a class="btn btn-success" target="_blank" rel="noopener noreferrer"
                    href="{{ route('kurikulum.pemetaan.cpl_cpmk_mk.export-excel') }}"><i class="bi bi-file-earmark-excel">
                    </i>Export Excel</a>
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
                        {{-- counting --}}
                        @php
                            for ($i = 0; $i < sizeof($cpl->Cpmk); $i++) {
                                $x = 0;
                                foreach ($cpl->Cpmk as $item) {
                                    if (sizeof($item->Mata_Kuliah) > 0) {
                                        $x = $x + sizeof($item->Mata_Kuliah);
                                    } else {
                                        $x = $x + 1;
                                    }
                                }
                            }
                        @endphp

                        @if (sizeof($cpl->Cpmk) > 0)
                            @for ($i = 0; $i < sizeof($cpl->Cpmk); $i++)
                                @if (sizeof($cpl->Cpmk[$i]->Mata_Kuliah) > 0)
                                    @for ($j = 0; $j < sizeof($cpl->Cpmk[$i]->Mata_Kuliah); $j++)
                                        {{-- normal. cpmk dan mk sudah terisi --}}
                                        <tr>
                                            @if ($i == 0 && $j == 0)
                                                <td scope="row" rowspan="{{ $x }}" style="cursor: pointer"
                                                    onclick="location.href='{{ route('kurikulum.pemetaan.cpl_cpmk_mk.add_cpmk', $cpl->kodeCPL) }}'"
                                                    data-toggle="tooltip" title="Tekan untuk menambahkan CPMK baru">
                                                    <span style="font-weight:600;">[{{ $cpl->kodeCPL }}]</span>
                                                    {{ $cpl->deskripsiCPL }}
                                                </td>
                                            @endif
                                            @if ($j == 0)
                                                <td rowspan="{{ sizeof($cpl->Cpmk[$i]->Mata_Kuliah) }}"
                                                    style="cursor: pointer"
                                                    onclick="location.href='{{ route('kurikulum.pemetaan.cpl_cpmk_mk.edit_cpmk', $cpl->Cpmk[$i]) }}'"
                                                    data-toggle="tooltip"
                                                    title="Tekan untuk mengubah CPMK atau memetakan dengan MK">
                                                    <span style="font-weight:600;">[{{ $cpl->Cpmk[$i]->kodeCPMK }}]</span>
                                                    {{ $cpl->Cpmk[$i]->deskripsiCPMK }}
                                                </td>
                                            @endif
                                            <td><span
                                                    style="font-weight:600;">[{{ $cpl->Cpmk[$i]->Mata_Kuliah[$j]->kodeMK }}]</span>
                                                {{ $cpl->Cpmk[$i]->Mata_Kuliah[$j]->namaMK }}
                                            </td>
                                        </tr>
                                    @endfor
                                @else
                                    {{-- agak normal. cpmk udah terisi, belum dipetakan dengan mk --}}
                                    <tr>
                                        @if ($i == 0)
                                            <td scope="row" rowspan="{{ sizeof($cpl->Cpmk) }}" style="cursor: pointer"
                                                onclick="location.href='{{ route('kurikulum.pemetaan.cpl_cpmk_mk.add_cpmk', $cpl->kodeCPL) }}'"
                                                data-toggle="tooltip" title="Tekan untuk menambahkan CPMK baru">
                                                <span style="font-weight:600;">[{{ $cpl->kodeCPL }}]</span>
                                                {{ $cpl->deskripsiCPL }}
                                            </td>
                                        @endif
                                        <td style="cursor: pointer"
                                            onclick="location.href='{{ route('kurikulum.pemetaan.cpl_cpmk_mk.edit_cpmk', $cpl->Cpmk[$i]) }}'"
                                            data-toggle="tooltip"
                                            title="Tekan untuk mengubah CPMK atau memetakan dengan MK">
                                            <span style="font-weight:600;">[{{ $cpl->Cpmk[$i]->kodeCPMK }}]</span>
                                            {{ $cpl->Cpmk[$i]->deskripsiCPMK }}
                                        </td>
                                        <td class="font-weight-light font-italic">Belum ada mata kuliah yang dipetakan</td>
                                    </tr>
                                @endif
                            @endfor
                        @else
                            {{-- gk normal blas. cpmk gada, mk gada --}}
                            <tr>
                                <td scope="row" style="cursor: pointer"
                                    onclick="location.href='{{ route('kurikulum.pemetaan.cpl_cpmk_mk.add_cpmk', $cpl->kodeCPL) }}'"
                                    data-toggle="tooltip" title="Tekan untuk menambahkan CPMK baru">
                                    <span style="font-weight:600;">[{{ $cpl->kodeCPL }}]</span>
                                    {{ $cpl->deskripsiCPL }}
                                </td>
                                <td class="font-weight-light font-italic">Belum ada CPMK yang ditambahkan</td>
                                <td class="font-weight-light font-italic">Belum ada mata kuliah yang dipetakan</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
