<!DOCTYPE html>
<html>
    <head>
    <title>{{ $judul }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: center;
            font-size: 10px;
            border: 1px solid black;
            padding: 5px;
        }
    </style>
    </head>
    <body>
        <div class="content px-4">
            <div class="card border" style="background-color: white">
                <div class="card-body" style="font-weight:600;">
                    <h3>Teknik Penilaian Capaian Pembelajaran Mata Kuliah (CPMK)</h3>
                    <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>
                        Penentuan teknik penilaian CPMK perlu diperhatikan jenis mata kuliah yakni mata kuliah teori, 
                        mata kuliah praktikum dan mata kuliah praktek. Standar teknik penilaian didistribusikan 
                        sesuai dengan CPMK setiap mata kuliah<b style="display:inline-block;transform: scaleX(-1)"><i
                                class="bi bi-quote"></i></b></h5>
                </div>
            </div>
            <br>
            <table class="table table-bordered" style="text-align: center">
                <thead class="table" style="background-color: lightgray">
                    <tr>
                        <th class="align-middle" scope="col" style="width: 5%">No</th>
                        <th class="align-middle" scope="col" style="width: 10%">Kode CPL</th>
                        <th class="align-middle" scope="col" style="width: 10%">Kode MK</th>
                        <th class="align-middle" scope="col" style="width: 10%">Kode CPMK</th>
                        @foreach ($list_kolom as $tp)
                            <th scope="col">
                                {{-- <span itemid="{{ $tp }}"> --}}
                                    {{ $tp}}
                                {{-- </span> --}}
                                </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @php
                        $iteration=0;
                    @endphp
                    @foreach ($list_cpl as $cpl)
                    @foreach ($cpl->CPMK as $cpmk)
                    @foreach($cpmk->Mata_Kuliah as $mk)
                        <tr>
                            @php
                                $iteration++;
                            @endphp
                            <th scope="row">{{ $iteration }}</th>
                            <th scope="row" class="text-start"><span itemid="{{ $cpl->deskripsiCPL }}">{{ $cpl->kodeCPL }}</span></th>
                            <th scope="row" class="text-start"><span itemid="{{ $mk->namaMK }}"> {{ $mk->kodeMK  }}</span></th>
                            <th scope="row" class="text-start"><span itemid="{{ $cpmk->deskripsiCPMK }}"> {{ $cpmk->kodeCPMK  }}</span></th>
                            @foreach ($list_kolom as $tp)
                            @php
                                    $checked = false;
                                    foreach ($list_teknikpenilaian->where('teknikPenilaian', $tp) as $ltp) {
                                        foreach ($detail_rps->where('kodePenilaian',$ltp->kodePenilaian) as $minggu) {
                                            foreach ($list_minggurps->where('kodeMingguRPS',$minggu->kodeMingguRPS) as $subCpmks) {
                                                if($subCpmks->SubCPMK->CPMK) {
                                                    $checked = true;
                                                }
                                            }
                                        }
                                    }
                                @endphp
                                    <td><input type="checkbox" name="" id="" @if($checked) checked @endif disabled></td>
                            @endforeach
                        </tr>
                    @endforeach
                    @endforeach
                    @endforeach 
                </tbody>
            </table>
    
        </div>
    </body>
</html>