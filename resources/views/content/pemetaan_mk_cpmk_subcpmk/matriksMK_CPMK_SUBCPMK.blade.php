
@extends('layout.dashboard')

@section('content')
    <div class="content px-4">
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>Matriks Capaian pembelajaran (CPL) Bahan Kajian (BK) & Mata Kuliah (MK)</h3>
                <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Sub-CPMK merupakan rumusan kemampuan akhir yang direncanakan pada tiap tahap pembelajaran yang bersifat spesifik dan dapat diukur, serta didemonstrasikan pada akhir proses pembelajaran. Sub-CPMK dirumuskan dari CPMK yang diharapkan secara akumulatif berkontribusi terhadap pencapaian CPL.<b
                        style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b></h5>
            </div>
        </div>
        <div class="d-flex justify-content-end pt-2">
            <div class="pr-3">
                <a id="pdf" class="btn btn-outline-danger" href="{{ route('kurikulum.pemetaan.export_mk-cpmk-subcpmk', ['pdf']) }}"><i
                        class="bi bi-file-earmark-pdf-fill"> </i>Export PDF</a>
            </div>
            <div>
                <a id="excel" class="btn btn-success" href="{{ route('kurikulum.pemetaan.export_mk-cpmk-subcpmk', ['excel']) }}"><i
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
                @foreach ($mk_list as $mk)
                    {{-- Mencari relasi dari mk --}}
                    @php
                        $list_relasi_mk=$detailmkcpmk_list->where('kodeMK', $mk->kodeMK);
                        $list_kode_cpmk=array();
                    @endphp
                    {{-- Menyimpan kode CPMK yang berelasi --}}
                    @foreach ($list_relasi_mk as $lrm)
                        @php
                            array_push($list_kode_cpmk, $lrm->kodeCPMK);
                        @endphp
                    @endforeach
                    {{-- List CPMK hasil filter 1 --}}
                    @php
                        $cpmk_filter1=$cpmk_list->whereIn('kodeCPMK', $list_kode_cpmk)->groupBy('kodeCPL');
                        $counterCPMK=$cpmk_list->whereIn('kodeCPMK', $list_kode_cpmk)->groupBy('kodeCPL')->count();
                        $rowspanCPL=array();
                        $subPerCPL=array();
                        $cpmk_filter2=array();
                    @endphp
                    {{-- Hitung rowspan untuk MK --}}
                    @php
                        $rowspanMK=$subcpmk_list->whereIn('kodeCPMK', $list_kode_cpmk)->count();
                    @endphp
                    {{-- CPMK untuk menghitung--}}
                        @php
                            $wakil_cpmk_filter2=$cpmk_list->whereIn('kodeCPMK', $list_kode_cpmk)->keyBy('kodeCPL');
                        @endphp
                    <tr>
                        <th rowspan={{ $rowspanMK }}><span itemid="{{ $mk->namaMK }}">{{ $mk->kodeMK }}</th>
                    {{-- Hitung rowspan untuk setiap CPL --}}
                    @foreach ($wakil_cpmk_filter2 as $wakil)
                            @php
                                $g=0; //ini rowspan CPL
                            @endphp
                        @foreach ($cpmk_list->whereIn('kodeCPMK', $list_kode_cpmk) as $cpmk)
                            {{-- List CPMK per MK dan CPL --}}
                            @php
                                $a=0;
                            @endphp
                            @if ($cpmk->kodeCPL == $wakil->kodeCPL)
                                @php
                                    $b=$subcpmk_list->where('kodeCPMK', $cpmk->kodeCPMK)->count();
                                    $c=$subcpmk_list->where('kodeCPMK', $cpmk->kodeCPMK);
                                    $a=$a+$b;
                                    array_push($cpmk_filter2, $cpmk->kodeCPMK); 
                                @endphp
                            @endif
                            @php
                                $g=$g+$a; //ini rowspan CPL
                            @endphp
                        @endforeach
                        <td rowspan={{ $g }}>{{ $wakil->kodeCPL }}</td>    
                        @foreach ($cpmk_list->whereIn('kodeCPMK', $list_kode_cpmk) as $cpmk)
                            {{-- List CPMK per MK dan CPL --}}
                            @php
                                $a=0;
                            @endphp
                            @if ($cpmk->kodeCPL == $wakil->kodeCPL)
                                @php
                                    $d=$cpmk->kodeCPL;
                                    $e=$cpmk->kodeCPMK;
                                    $f=$cpmk->deskripsiCPMK;
                                    $b=$subcpmk_list->where('kodeCPMK', $cpmk->kodeCPMK)->count();
                                    $c=$subcpmk_list->where('kodeCPMK', $cpmk->kodeCPMK);
                                    $a=$a+$b;
                                    array_push($cpmk_filter2, $cpmk->kodeCPMK); 
                                @endphp
                                
                                <td rowspan={{ $a }}>{{ $e }}</td>
                                <td rowspan={{ $a }}>{{ $f }}</td>
                                <td>{{ $c->first()->kodeSubCPMK }} <br> {{ $c->first()->deskripsiSubCPMK }}</td>
                                </tr>
                                @if ($a>1)
                                    @for ($i = 1; $i < $a; $i++)
                                        <tr>
                                            <td>{{ $c->get($i)->kodeSubCPMK }} <br> {{ $c->get($i)->deskripsiSubCPMK }}</td>
                                        </tr>
                                    @endfor
                                @endif
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
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    
@endsection
