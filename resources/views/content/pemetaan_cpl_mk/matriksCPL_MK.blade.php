@extends('layout.dashboard')

@section('content')
    <div class="content px-4">
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>Pemetaan Capaian Pembelajaran Lulusan (CPL) & Mata Kuliah (MK)</h3>
                <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>
                    Pemetaan CPL terhadap MK dilakukan untuk menunjukkan keterhubungan antara
                    mata kuliah terhadap CPL Program Studi.<b style="display:inline-block;transform: scaleX(-1)"><i
                            class="bi bi-quote"></i></b></h5>
            </div>
        </div>
        <div class="d-flex justify-content-end pt-2">
            <div class="pr-3">
                <a class="btn btn-outline-danger" id="exportPDFButton" href="{{ route ('kurikulum.pemetaan.cetakpdfcplmk') }}"><i class="bi bi-file-earmark-pdf-fill"> </i>Export PDF</a>
            </div>
            <div>
                <a class="btn btn-success" id="exportExcelButton" href="{{ route('kurikulum.pemetaan.cetakexcelcplmk') }}"><i class="bi bi-file-earmark-excel"> </i>Export Excel</a>
            </div>
        </div>
        <br>

        <table class="table table-bordered" style="text-align: center">
            <thead class="table" style="background-color: lightgray">
                <tr>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 5%">No</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Kode MK</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 50%">Nama Mata Kuliah</th>
                    <th scope="col" colspan="{{ $list_cpl->count() }}">Capaian Pembelajaran Lulusan</th>
                </tr>
                <tr>
                    @foreach ($list_cpl as $cpl)
                        <th scope="col">
                            <span itemid="{{ $cpl->deskripsiCPL }}">
                                {{ $cpl->kodeCPL }}
                            </span>
                            {{-- <span data-bs-toggle="tooltip" data-bs-placement="bottom"
                                title="{{ $cpl->deskripsiCPL }}">{{ $cpl->kodeCPL }}</span> --}}
                            </th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($list_mk as $mk)
                    @php
                        $isTrueArray = []; // Buat array untuk menyimpan status isTrue untuk setiap $cpmk
                    @endphp

                    <tr>
                        <th scope="row">
                            {{ $loop->iteration }}</th>
                        <th scope="row">
                            {{ $mk->kodeMK }}</th>
                        <th scope="row" class="text-start">
                            {{ $mk->namaMK }}</th>
                        @foreach ($list_cpl as $cpl)
                            @php
                                $isTrue = false;
                                foreach ($list_cpmk->where('kodeCPL', $cpl->kodeCPL) as $cpmk) {
                                    if ($detail_mk_cpmk->where('kodeMK', $mk->kodeMK)->where('kodeCPMK', $cpmk->kodeCPMK)->count()) {
                                        $isTrue = true;
                                        break;
                                    }
                                }
                                $isTrueArray[$cpl->kodeCPL] = $isTrue; // Simpan status isTrue ke dalam array
                            @endphp
                            <td>
                                <input type="checkbox" id="{{ $mk->kodeMK }}_{{ $cpl->kodeCPL }}" disabled @if ($isTrue) checked @endif>
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>

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
            word-wrap: break-word;
            /* membuat kata wrap ketika teks melebihi lebar elemen */
            word-break: break-all;
            /* memaksa kata dipisahkan ketika melebihi lebar elemen */
            width: 350px;
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



        input[type="checkbox"] {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border: 2px solid #ffffff;
            border-radius: 1px;
            width: 23px;
            height: 25px;
            outline: none;
            cursor: pointer;
            position: relative ;
        }
        input[type="checkbox"]:checked::before {
            content: "\2714";
            font-size: 14px;
            color: white;
            position: absolute;
            /* left: 2px; */
            /* top: 1px; */
        }

        input[type="checkbox"]:checked {
            background-color: white;
            border-color: #686565;
        }

        </style>
        <script>
        let getIdCheckbox = document.getElementById("color")
        changeColor = () => {
            if (getIdCheckbox.checked == true){
                document.getElementById("red").style.color = 'red'
                document.getElementById("green").style.color = 'green'
            }else {
                document.getElementById("red").style.color = 'white'
                document.getElementById("green").style.color = 'white'
            }
        }
    </script>
@endsection
