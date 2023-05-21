@extends('layout.dashboard')

@section('content')

<div class="content px-4">
    <div class="content px-4">
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>Minggu Rencana Pembelajaran Semester (RPS)</h3>
                <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Minggu RPS merupakan detail pembelajaran untuk setiap minggu dalam mata kuliah..<b
                        style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b></h5>
            </div>
        </div>
        <br>
    
        <table class="table table-bordered" style="text-align: center">
            <thead style="background-color: lightgray">
                    <tr>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 5%">Kode Minggu RPS</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 5%">Kode Penilaian</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 5%">Kode SubCMPK</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 5%">Minggu Ke-</th>
                        <th class="align-middle" scope="col" colspan="1" style="width: 15%">Bentuk Pembelajaran</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Indikator Minggu RPS</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Kriteria Minggu RPS</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 20%">Deskripsi Pembelajaran</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Materi Pembelajaran</th>
                    </tr>
            </thead>

            <tbody>
                @foreach ($minggu_rps_list as $minggu_rps)
                <tr>
                    <td scope="row">{{ $minggu_rps->kodeMingguRPS }}</td>
                    <td scope="row">kode penilaian</td>
                    <td scope="row">{{ $minggu_rps->kodeSubCPMK }}</td>
                    <td scope="row">{{ $minggu_rps->mingguKe }}</td>
                    @if ($minggu_rps->bentukPembelajaran == '1')
                    <td scope="row">{{ 'Luring' }}</td>
                    @else
                    <td scope="row">{{ 'Daring' }} </td>
                    @endif
                    <td scope="row">{{ $minggu_rps->indikatorMingguRPS }}</td>
                    <td scope="row">{{ $minggu_rps->kriteriaMingguRPS }}</td>
                    <td scope="row">{{ $minggu_rps->deskripsiPembelajaran }}</td>
                    <td scope="row">{{ $minggu_rps->materiPembelajaran }}</td>
                </tr>
                @endforeach
              </tbody>
        </table>
        
            </tbody>
        </table>
        



@endsection
