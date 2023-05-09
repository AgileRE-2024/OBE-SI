
@extends('layout.dashboard')

@section('content')
    <div class="content px-4">
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>Matriks Capaian pembelajaran (CPL) Bahan Kajian (BK) & Mata Kuliah (MK)</h3>
                <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Pemetaan CPL terhadap BK dilakukan untuk menunjukan turunan dari capaian pembelajaran ke
                    beberapa bahan kajian. Pemetaan BK terhadap MK dilakukan untuk menunjukan turunan dari bahan kajian ke
                    beberapa mata kuliah. Sehingga ketiga komponen tersebut akan mempengaruhi  penentuan SKS.<b
                        style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b></h5>
            </div>
        </div>
        <br>

        

          

        <div class="row">
            <div class="card mt-5" style="padding: 2rem">
              <div class="card-body">
                <div class="mt-2" style="padding-left : 7rem">
                  <label class="switch">
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" role="switch" id="toggle-button" checked>
                      <label class="form-check-label" for="flexSwitchCheckChecked">CPL sebagai Header</label>
                    </div>
                  </label>
                </div>
                <div class="container">
                  <div id="table1" class="table-container">
                    <table class="table table-hover rounded table-bordered mb-0">
                      <thead class="table-secondary">
                        <tr class="text-center">
                          <th scope="col"></th>
                          @foreach ($bk_list as $bk)
                          <th scope="col" data-toggle="tooltip" data-placement="top" title="{{ $bk->namaBK }}">{{ $bk->kodeBK }}</th>
                          @endforeach
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($cpl_list as $cpl)
                        <tr class="text-center">
                          <th scope="row" data-toggle="tooltip" data-placement="top" title="{{ $cpl->deskripsiCPL}}">{{ $cpl->kodeCPL }}</th>
                          @foreach ($bk_list as $bk)
                          <td>
                            @if ($pemetaan2->where('kodeBK', $bk->kodeBK)->where('kodeCPL', $cpl->kodeCPL)->count() != 0)
                            @foreach ($pemetaan1->where('kodeBK', $bk->kodeBK) as $pemetaanbkmk)
                            {{ $pemetaanbkmk->kodeMK }}
                            @endforeach
                            @endif
                          </td>
                          @endforeach
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
          
                  <div id="table2" class="table-container" style="display: none;">
                    <table class="table table-hover rounded table-bordered mb-0">
                      <thead class="table-secondary">
                        <tr class="text-center">
                          <th scope="col"></th>
                          @foreach ($cpl_list as $cpl)
                          <th scope="col" data-toggle="tooltip" data-placement="top" title="{{ $cpl->deskripsiCPL }}">{{  $cpl->kodeCPL}}</th>
                          @endforeach
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($bk_list as $bk)
                        <tr class="text-center">
                          <th scope="row" data-toggle="tooltip" data-placement="top" title="{{ $bk->namaBK}}">{{ $bk->kodeBK }}</th>
                          @foreach ($cpl_list as $cpl)
                          <td>
                            @if ($pemetaan2->where('kodeCPL', $cpl->kodeCPL)->where('kodeBK', $bk->kodeBK)->count() != 0)
                            @foreach ($pemetaan1->where('kodeBK', $bk->kodeBK) as $pemetaanbkmk)
                            {{ $pemetaanbkmk->kodeMK }}
                            @endforeach
                            @endif
                          </td>
                          @endforeach
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
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

    <script>
    const toggleButton = document.getElementById('toggle-button');
    const table1 = document.getElementById('table1');
    const table2 = document.getElementById('table2');
  
    toggleButton.addEventListener('change', () => {
      if (toggleButton.checked) {
        table1.style.display = 'none';
        table2.style.display = 'block';
      } else {
        table1.style.display = 'block';
        table2.style.display = 'none';
      }
    });
  </script>
    
@endsection
