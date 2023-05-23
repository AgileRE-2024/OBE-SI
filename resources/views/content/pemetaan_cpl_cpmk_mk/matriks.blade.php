@extends('layout.dashboard')

@section('content')
    <div class="content px-4 pt-3">
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>Tabel Capaian Pembelajaran Lulusan (CPL) - Capaian Pembelajaran Mata Kuliah (CPMK) - Mata Kuliah (MK)
                </h3>
                <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Pemetaan Pembelajaran Lulusan (CPL),
                    Capaian Pembelajaran Mata Kuliah (CPMK), dan Mata Kuliah (MK) dilakukan untuk menunjukkan keterhubungan
                    antara ketiganya. Untuk menambahkan Capaian Pembelajaran Mata Kuliah (CPMK) baru dapat dengan menekan
                    Capaian Pembelajaran Lulusan (CPL) terkait. Untuk menambahkan Mata Kuliah (MK) atau mengubah Capaian
                    Pembelajaran Lulusan (CPL) dapat dengan menekan Capaian Pembelajaran Mata Kuliah (CPMK) terkait.
                    <b style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b>
                </h5>
            </div>
        </div>

        <div class="d-flex">
            <table class="table">
                <thead>
                    <tr>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 37%">Mata Kuliah</th>
                        <th class="align-middle" scope="col" colspan="{{ sizeof($cpl) }}" style="width: 37%">CPL</th>
                    </tr>
                    <tr>
                        <th class="align-middle" scope="col" style="width: 37%">CPL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
