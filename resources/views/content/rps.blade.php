@extends('layout.dashboard')

@section('content')
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
            <a id="pdf" class="btn btn-outline-danger" href="/dashboard/rps/exportPdf"><i
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
                    <th class="align-middle" scope="col" rowspan="2" style="width: 5%">Minggu Ke-</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Kemampuan akhir tiap tahapan belajar (Sub-CPMK)</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Indikator</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Kriteria & Teknik</th>
                    <th class="align-middle" scope="col" colspan="2" style="width: 20%">Bentuk Pembelajaran Metode Pembelajaran Penugasan Mahasiswa [Estimasi Waktu]</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Materi Pembelajaran[Pustaka]</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Bobot Penilaian(%)</th>
                </tr>
        </thead>
        <tr style="background-color: lightgray" >
            <th>(1)</th>
            <th>(2)</th>
            <th>(3)</th>
            <th>(4)</th>
            <th>Luring(5)</th>
            <th>Daring(6)</th>
            <th>(7)</th>
            <th>(8)</th>
        </tr>
        <tbody>
            @foreach ($minggu_rps_list as $minggu_rps)
            <tr>
                <td scope="row">{{ $minggu_rps->mingguKe }}</td>
                <td scope="row">{{ $minggu_rps->kodeSubCPMK }}</td>
                <td scope="row">{{ $minggu_rps->indikatorMingguRPS }}</td>
                <td scope="row">{{ $minggu_rps->kriteriaMingguRPS }}</td>
                @if ($minggu_rps->bentukPembelajaran == '1')
                <td scope="row">{{ 'Luring' }}</td>
                <td></td>
                @else
                <td></td>
                <td scope="row">{{ 'Daring' }} </td>
                @endif
                <td scope="row">{{ $minggu_rps->materiPembelajaran }}</td>
            </tr>
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
