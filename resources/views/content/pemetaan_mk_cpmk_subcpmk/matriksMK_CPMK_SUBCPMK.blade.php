
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
                <a id="pdf" class="btn btn-outline-danger" href="/dashboard/kurikulum/pemetaan/mk-cpmk-subcpmk/exportPdf"><i
                        class="bi bi-file-earmark-pdf-fill"> </i>Export PDF</a>
            </div>
            <div>
                <a id="excel" class="btn btn-success" href="/dashboard/kurikulum/pemetaan/mk-cpmk-subcpmk/exportExcel"><i
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
                    @php
                        $counter = $detailmkcpmk_list->where('kodeMK', $mk->kodeMK)->count();
                        $cpmk = $detailmkcpmk_list->where('kodeMK', $mk->kodeMK);
                    @endphp
                    @for ($i = 0; $i < $counter; $i++)
                        <tr>
                            <td>{{ $cpmk[$i]->kodeCPMK }} <br> {{ $cpmk[$i]->deskripsiCPMK }}</td>
                        </tr>
                    @endfor
                @endforeach
                @foreach ($cpmk_list->where('kodeCPMK', ) as $cp)
                    @php
                        $counter = $subcpmk_list->where('kodeCPMK', $cp->kodeCPMK)->count();;
                    @endphp
                    <tr>
                        <th rowspan={{ $counter }}>LALA</th>
                        <td rowspan={{ $counter }}>{{ $cp->kodeCPL }}</td>
                        <td rowspan={{ $counter }}>{{ $cp->kodeCPMK }}</td>
                        <td rowspan={{ $counter }}>{{ $cp->deskripsiCPMK }}</td>
                        <td>{{ $subcpmk_list[0]->kodeSubCPMK }} <br> {{ $subcpmk_list[0]->deskripsiSubCPMK }}</td>
                    </tr>
                    @for ($i = 1; $i < $counter; $i++)
                        <td>{{ $subcpmk_list[$i]->kodeSubCPMK }} <br> {{ $subcpmk_list[$i]->deskripsiSubCPMK }}</td>
                    @endfor
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
