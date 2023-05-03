@extends('layout.dashboard')
@section('content')
    <div class="content px-4">
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>Matriks Organisasi Mata Kuliah</h3>
                <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Organisasi Mata Kuliah berfungsi untuk menampilkan hasil pemetaan pada halaman Susunan Mata Kuliah yang dikelompokkan berdasarkan semester dan jenis mata kuliah mencakup MK Wajib, MK Pilihan, dan MKWU.<b
                        style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b></h5>
            </div>
        </div>
        <div class="d-flex justify-content-end pt-2">
            <div class="pr-3">
                <a class="btn btn-outline-danger" href="{{ route('kurikulum.pemetaan.organisasi_mk.export.pdf') }}"><i
                        class="bi bi-file-earmark-pdf-fill"> </i>Export PDF</a>
            </div>
            <div>
                <a class="btn btn-success" href="{{ route('kurikulum.pemetaan.organisasi_mk.export.excel') }}"><i
                        class="bi bi-file-earmark-excel"> </i>Export Excel</a>
            </div>
        </div>
        <br>
        <table class="table table-bordered" style="text-align: center">
            <thead style="background-color: lightgray">
                <tr>
                    <th class="align-middle" width="90px">Semester</th>
                    <th class="align-middle" width="90px">Total SKS</th>
                    <th class="align-middle" width="90px">Total MK</th>
                    <th class="align-middle" width="90px">BK</th>
                    <th class="align-middle" class="text-center" width="500px">MK Wajib</th>
                    <th class="align-middle" width="200px">MK Pilihan</th>
                    <th class="align-middle" width="200px">MKWK</th>
                </tr>
            </thead>
            <tbody>
                @foreach($MK->sortByDesc('semester')->groupBy('semester') as $smt => $MKBysmt)
                    <tr>
                        <td>{{ $smt }}</td>
                        <td>{{ $MKBysmt->sum('sks') }}</td>
                        <td>{{ $MKBysmt->count() }}</td>
                        @foreach ($MKBysmt as $MKItem)
                            <td>
                                @foreach ($MKItem->Bahan_Kajian as $BK)
                                <div>
                                    <span data-namabk="{{ $BK->namaBK }}">
                                        {{ $BK->kodeBK }}
                                    </span>
                                </div>
                                @endforeach
                            </td>
                        @endforeach
                        <td>
                            @foreach($MKBysmt->where('kategoriMK', 1) as $product)
                                {{ $product->kodeMK }} {{ ":" }} {{ $product->namaMK }}<br>
                            @endforeach
                        </td>
                        <td>
                            @foreach($MKBysmt->where('kategoriMK', 2) as $product)
                                {{ $product->kodeMK }} {{ ":" }} {{ $product->namaMK }}<br>
                            @endforeach
                        </td>
                        <td>
                            @foreach($MKBysmt->where('kategoriMK', 3) as $product)
                                {{ $product->kodeMK }} {{ ":" }} {{ $product->namaMK }}<br>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td>Total SKS</td>
                    <td><b>{{ $MK->sum('sks') }}</b></td>
                </tr>
            </tbody>
        </table>        
    </div>

    <style>
    
        /* Style the tooltip */
        /* Style the tooltip */
         span[data-namabk] {
          position: relative;
          cursor: pointer;
          display: inline-block
          /* display: inline-block; */
        }
        
        span[data-namabk]:hover::after {
          content: attr(data-namabk);
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
        
        span[data-namabk]:hover::before {
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
@endsection