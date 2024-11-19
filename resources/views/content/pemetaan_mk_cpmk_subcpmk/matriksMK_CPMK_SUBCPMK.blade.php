@extends('layout.dashboard')

@section('content')
    <div class="content px-4">
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>Matriks MK - CPMK - SubCPMK</h3>
                <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Sub-CPMK merupakan rumusan kemampuan akhir
                    yang direncanakan pada tiap tahap pembelajaran yang bersifat spesifik dan dapat diukur, serta
                    didemonstrasikan pada akhir proses pembelajaran. Sub-CPMK dirumuskan dari CPMK yang diharapkan secara
                    akumulatif berkontribusi terhadap pencapaian CPL.<b style="display:inline-block;transform: scaleX(-1)"><i
                            class="bi bi-quote"></i></b></h5>
            </div>
        </div>
        <div class="d-flex justify-content-end pt-2">
            <div class="pr-3">
                <a id="pdf" class="btn btn-outline-danger"
                    href="{{ route('kurikulum.pemetaan.export_mk-cpmk-subcpmk', ['pdf']) }}"><i
                        class="bi bi-file-earmark-pdf-fill"> </i>Export PDF</a>
            </div>
            <div>
                <a id="excel" class="btn btn-success"
                    href="{{ route('kurikulum.pemetaan.export_mk-cpmk-subcpmk', ['excel']) }}"><i
                        class="bi bi-file-earmark-excel"> </i>Export Excel</a>
            </div>
        </div>
        <br>
        <table class="table table-bordered" style="text-align: center">
            <thead style="background-color: lightgray">
                <tr>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 10%">MK</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 10%">CPL</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 10%">CPMK</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 30%">Deskripsi CPMK</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 40%">Sub-CPMK</th>
                </tr>
            </thead>
            <tbody>
                @php
                    use Illuminate\Support\Str;
                    $mkpunyarelasi = $detailmkcpmk_list->pluck('kodeMK');
                    $mkfix = $mk_list->whereIn('kodeMK', $mkpunyarelasi);
                @endphp
                @foreach ($mkfix as $mk)
                    {{-- Cari rowspan mk --}}
                    @php
                        $cpmkfix = $detailmkcpmk_list->where('kodeMK', $mk->kodeMK)->pluck('kodeCPMK');
                        $rowspanmk = $subcpmk_list->whereIn('kodeCPMK', $cpmkfix)->count();
                    @endphp
                    {{-- Cari rowspan cpl --}}
                    @php
                        $cplfix = $cpmk_list->whereIn('kodeCPMK', $cpmkfix)->pluck('kodeCPL')->unique();
                        // $rowspanmk = $subcpmk_list->whereIn('kodeCPMK', $cpmkfix)->count();
                    @endphp
                    <tr>
                        <td rowspan={{ $rowspanmk }}><span itemid="{{ $mk->namaMK }}">{{ $mk->kodeMK }}</td>

                        {{-- looping percpl --}}
                        @foreach ($cplfix as $cpl)
                            @php
                                $cpmkfixs = $cpmk_list
                                    ->whereIn('kodeCPMK', $cpmkfix)
                                    ->whereIn('kodeCPL', $cpl)
                                    ->pluck('kodeCPMK');
                                $rowspancpl = $subcpmk_list->whereIn('kodeCPMK', $cpmkfixs)->count();

                            @endphp
                            <td rowspan={{ $rowspancpl }}><span
                                    itemid="{{ $cpl_list->where('kodeCPL', $cpl)->first()->deskripsiCPL }}">{{ $cpl }}
                            </td>
                            {{-- looping percpmk --}}
                            @foreach ($cpmkfixs as $cpmk)
                                @php
                                    $rowspancpmk = $subcpmk_list->whereIn('kodeCPMK', $cpmk)->count();
                                    $sub = $subcpmk_list->whereIn('kodeCPMK', $cpmk);
                                @endphp
                                <td rowspan={{ $rowspancpmk }}>{{ $cpmk }}</td>
                                <td rowspan={{ $rowspancpmk }}>
                                    {{ $cpmk_list->where('kodeCPMK', $cpmk)->first()->deskripsiCPMK }}</td>
                                <td>{{ $sub->first()->kodeSubCPMK }} <br> {{ $sub->first()->deskripsiSubCPMK }}</td>
                    </tr>
                    @if ($sub->count() > 1)
                        @foreach ($sub->skip(1) as $item)
                            <tr>
                                <td>{{ $item->kodeSubCPMK }} <br> {{ $item->deskripsiSubCPMK }}</td>
                            </tr>
                        @endforeach
                    @endif
                @endforeach
                @endforeach
                @endforeach
            </tbody>
        </table>
    </div>

    <style>
        /* Style the tooltip */
        /* Style the tooltip */
        span[itemid] {
            position: relative;
            cursor: pointer;
            /* display: inline-block; */
        }

        span[itemid]:hover::after {
            content: attr(itemid);
            overflow: hidden;
            text-overflow: ellipsis;
            /* width: 200px; */
            background-color: #1F2F4D;
            color: white;
            padding: 9px;
            border-radius: 5px;
            position: absolute;
            bottom: -40px;
            left: 120%;
            transform: translateX(-50%);
            white-space: nowrap;
            z-index: 1;
            opacity: 1;
            /* transition: opacity 3s; */
            /* transition: opacity 0.3s ease, visibility 0s linear 0.3s; */
        }

        span[itemid]:hover::before {
            content: "";
            border-style: solid;
            border-width: 0 8px 8px 8px;
            border-color: transparent transparent #1F2F4D transparent;
            position: absolute;
            top: 12px;
            left: 80%;
            transform: translateX(-50%);
            bottom: calc(100% + 10px);
            /* transition: opacity 0.3s ease, visibility 0s linear 0.3s; */
        }
    </style>

    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
@endsection
