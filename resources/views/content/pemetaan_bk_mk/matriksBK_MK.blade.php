
@extends('layout.dashboard')

@section('content')
    <div class="content px-4">
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>Matriks Bahan Kajian (BK) & Mata Kuliah (MK)</h3>
                <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Pemetaan BK terhadap MK dilakukan untuk menunjukan turunan dari bahan kajian ke
                    beberapa mata kuliah. Bahan kajian dalam matakuliah akan mempengaruhi keluasan
                    MK yang akan mempengaruhi penentuan SKS.<b
                        style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b></h5>
            </div>
        </div>
        <div class="d-flex justify-content-end pt-2">
            <div class="pr-3">
                <a id="pdf" class="btn btn-outline-danger" href="/dashboard/kurikulum/pemetaan/bk-mk/exportPdf"><i
                        class="bi bi-file-earmark-pdf-fill"> </i>Export PDF</a>
            </div>
            <div>
                <a id="excel" class="btn btn-success" href="/dashboard/kurikulum/pemetaan/bk-mk/exportExcel"><i
                        class="bi bi-file-earmark-excel"> </i>Export Excel</a>
            </div>
        </div>
        <br>
        <div class="pt-2" class="d-flex">
            <form id ="myForm"method="POST" action="{{ route('kurikulum.pemetaan.update_pemetaan_bk_mk') }}">
                @csrf
                @method('put')
                <table class="table table-bordered table-responsive" style="text-align: center">
                    <thead style="background-color: lightgray">
                            <tr>
                                <th class="align-middle" scope="col" rowspan="2" style="width: 5%">No</th>
                                <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Kode MK</th>
                                <th class="align-middle" scope="col" rowspan="2" style="width: 50%">MK</th>
                                <th scope="col" colspan="{{ $bk_list->count() }}">Bahan Kajian (BK)</th>
                            </tr>
                            <tr>
                                @foreach ($bk_list as $bk)
                                @if (in_array($bk->kodeBK, $empty_bk))
                                <div class="tooltip">
                                    <th scope="col" style="background-color: yellow">
                                        <span itemid="{{ $bk->namaBK }}">
                                            {{ $bk->kodeBK }}
                                        </span>
                                    </th>
                                </div>
                                @else
                                <div class="tooltip">
                                    <th scope="col" >
                                        <span itemid="{{ $bk->namaBK }}">
                                            {{ $bk->kodeBK }}
                                        </span>
                                    </th>
                                </div>
                                @endif

                                @endforeach
                            </tr>

                    </thead>
                    <tbody>
                    @php
                        $iter = 1;
                    @endphp
                        @foreach ($empty as $item)
                            <tr>
                                <th style="background-color: yellow;" scope="row">{{ $iter }}</th>
                                <th style="background-color: yellow;" scope="row"><span name="{{ $mk_list->where('kodeMK','===',$item)->first()["namaMK"]}}">{{ $mk_list->where('kodeMK','===',$item)->first()["kodeMK"] }}</span></th>
                                <th  style="background-color: yellow;"  scope="row" class="text-start">{{ $mk_list->where('kodeMK','===',$item)->first()["namaMK"]}}</th>
                                @foreach ($bk_list as $bk)
                                    <td style="background-color: yellow;" ><input type="checkbox"
                                            id="checkbox_{{$mk_list->where('kodeMK','===',$item)->first()["kodeMK"]  }}-{{ $bk->kodeBK }}"
                                            name="checkbox_{{ $mk_list->where('kodeMK','===',$item)->first()["kodeMK"]  }}-{{ $bk->kodeBK }}"
                                            value="{{ $mk_list->where('kodeMK','===',$item)->first()["kodeMK"]  }}&{{ $bk->kodeBK }}"
                                            @if ($pemetaan->where('kodeMK', '===', $mk_list->where('kodeMK','===',$item)->first()["kodeMK"] )->where('kodeBK', '===', $bk->kodeBK)->count()) checked @endif @if (auth()->user()->role == 0 || auth()->user()->role == 2) disabled @endif style="width:26px;height:26px; @if (auth()->user()->role == 0 || auth()->user()->role == 2) width:26px;height:26px;background-color: blue !important; @endif">
                                            {{-- <span id="{{$mk_list->where('kodeMK','===',$item)->first()["kodeMK"] }}_{{ $bk->kodeBK }}" class="checkmark"></span> --}}
                                    </td>
                                @endforeach
                                @php
                                    $iter = $iter+1;
                                @endphp
                            </tr>

                        @endforeach

                        @foreach ($mk_list as $mk)
                        @if (!(in_array($mk->kodeMK, $empty)))
                        <tr>
                            <th scope="row">{{ $iter }}</th>
                            <th scope="row" ><span name="{{ $mk->namaMK }}">{{ $mk->kodeMK }}</span></th>
                            <th scope="row" class="text-start">{{ $mk->namaMK }}</th>
                            @foreach ($bk_list as $bk)
                                @if (in_array($bk->kodeBK, $empty_bk))
                                    <td style="background-color: yellow"><input type="checkbox"
                                        id="checkbox_{{ $mk->kodeMK }}-{{ $bk->kodeBK }}"
                                        name="checkbox_{{ $mk->kodeMK }}-{{ $bk->kodeBK }}"
                                        value="{{ $mk->kodeMK }}&{{ $bk->kodeBK }}"
                                        @if ($pemetaan->where('kodeMK', '===', $mk->kodeMK)->where('kodeBK', '===', $bk->kodeBK)->count()) checked @endif @if (auth()->user()->role == 0 || auth()->user()->role == 2) disabled @endif style="width:26px;height:26px; @if (auth()->user()->role == 0 || auth()->user()->role == 2) width:26px;height:26px;background-color: blue !important; @endif">
                                        {{-- <span id="{{$mk->kodeMK}}_{{ $bk->kodeBK }}" class="checkmark"></span> --}}
                                    </td>
                                @else
                                    <td ><input type="checkbox"
                                        id="checkbox_{{ $mk->kodeMK }}-{{ $bk->kodeBK }}"
                                        name="checkbox_{{ $mk->kodeMK }}-{{ $bk->kodeBK }}"
                                        value="{{ $mk->kodeMK }}&{{ $bk->kodeBK }}"
                                        @if ($pemetaan->where('kodeMK', '===', $mk->kodeMK)->where('kodeBK', '===', $bk->kodeBK)->count()) checked @endif @if (auth()->user()->role == 0 || auth()->user()->role == 2)  disabled @endif style="width:26px;height:26px; @if (auth()->user()->role == 0 || auth()->user()->role == 2) width:26px;height:26px;background-color: blue !important; @endif">
                                        {{-- <span id="{{$mk->kodeMK}}_{{ $bk->kodeBK }}" class="checkmark"></span> --}}
                                    </td>
                                @endif
                            @endforeach
                        </tr>
                        @php
                            $iter = $iter+1;
                        @endphp


                        @endif
                        @endforeach

                    </tbody>
                </table>
                @if (auth()->user()->role == 1 || auth()->user()->role == 3)
                <div class="d-flex justify-content-end">
                    <!-- Button trigger modal -->
                    {{-- <button type="button" id="buttonsimpan" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Simpan
                    </button> --}}
                    <button type="submit" id="submitbutton" class="btn btn-success" >
                        Simpan
                    </button>
                </div>
                @endif
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg-danger">
                                <h5 class="modal-title" id="staticBackdropLabel">Peringatan!!</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                    style="background-color:white"></button>
                            </div>
                            <div class="modal-body">
                                Apakah yakin akan menyimpan perubahan?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" id="submitButton" class="btn btn-success">Simpan Perubahan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            {{-- <div style="padding-left: 20px; max-width: 350px;">
                <table class="table table-bordered" style="text-align: center">
                    <thead>
                        <tr>
                            <th class="align-middle" scope="col" rowspan="2">Kode PL</th>
                            <th class="align-middle" scope="col" rowspan="2" style="width: 80%">Profil Lulusan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pl_list as $pl)
                        <tr>
                            <th scope="row">{{ $pl->kodePL }}</th>
                            <td scope="row" class="text-start">{{ $pl->deskripsiPL }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> --}}
        </div>
    </div>
    <style>

        /* Style the tooltip */
        span[itemid] {
            position: relative;
            cursor: pointer;
            /* display: inline-block; */
        }
        span[itemid]:hover::after {
            content: attr(itemid);
            /* overflow: hidden; */
            /* text-overflow: ellipsis; */
            /* word-wrap: break-word; */
            /* membuat kata wrap ketika teks melebihi lebar elemen */
            /* word-break: break-all; */
            /* memaksa kata dipisahkan ketika melebihi lebar elemen */
            width: auto;
            height: auto;
            background-color: #1F2F4D;
            color: white;
            padding: 9px;
            border-radius: 5px;
            position: absolute;
            top: 35px;
            /* bottom: -100px; */
            /* left: 2%; */
            transform: translateX(-88%);
            /* white-space: nowrap; */
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
            top: 28px;
            left: 50%;
            transform: translateX(-50%);
            bottom: calc(100% + 10px);
            /* transition: opacity 0.3s ease, visibility 0s linear 0.3s; */
        }

    </style>

    <script>

    document.getElementById("myForm").addEventListener("submit", function(event) {
      event.preventDefault(); // Prevent the default form submission behavior

      Swal.fire({
        title: 'Peringatan',
        text: "Apakah Anda ingin menyimpan perubahan ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Simpan'
      }).then((result) => {
        if (result.isConfirmed) {
          // If the user confirms, submit the form
          this.submit();

          // Display a success message after the form is submitted
          Swal.fire(
            'Success!',
            'Perubahan telah tersimpan',
            'success'
          );
        }
      })
    });


    </script>

@endsection
