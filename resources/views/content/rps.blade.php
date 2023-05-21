@extends('layout.dashboard')

@section('content')

<div class="content px-4">
    <div class="content px-4">
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>Rencana Pembelajaran Semester (RPS)</h3>
                <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>RPS merupakan dokumen program pembelajaran yang dirancang untuk menghasilkan lulusan yang memiliki kemampuan sesuai CPL yang telah ditetapkan, sehingga harus dapat dijalankan oleh mahasiswa pada setiap tahapan belajar pada mata kuliah terkait.<b
                        style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b></h5>
            </div>
        </div>
        <div class="d-flex justify-content-end pt-2">
            <div class="pr-3">
                <a id="pdf" class="btn btn-outline-danger" href=" /dashboard/rps/exportExcel"><i
                        class="bi bi-file-earmark-pdf-fill"> </i>Export PDF</a>
            </div>
            <div>
                <a id="excel" class="btn btn-success" href="/dashboard/rps/exportExcel"><i
                        class="bi bi-file-earmark-excel"> </i>Export Excel</a>
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
