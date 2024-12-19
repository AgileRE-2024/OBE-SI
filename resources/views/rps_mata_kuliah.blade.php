@extends('layout.dashboard')

@section('content')
    <div class="content px-4">
        @include('content.teknik_penilaian.button')
        <br><br>
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>Mata Kuliah</h3>
                <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Identitas mata kuliah RPP<b
                        style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b></h5>
            </div>
        </div>
        <br>
        @if (session('warning'))
            <div class="alert alert-danger">
                {{ session('warning') }}
            </div>
        @endif
        {{-- @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
</div>
@endif --}}
        <div class="d-flex mt-3">
            <table class="table table-bordered" style="text-align: left">
                {{-- <thead class="table" style="background-color: lightgray">
            <tr>
                <th class="align-middle" scope="col" rowspan="2" style="width: 5%">Identitas</th>
                <th class="align-middle" scope="col" rowspan="2" style="width: 25%">Value</th>
            </tr>
        </thead> --}}
                <tbody>
                    <tr>
                        <td scope="row">
                            Nama Mata Kuliah
                        </td>
                        <td scope="row">
                            {{ $mata_kuliah->namaMK }}
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">
                            Kode Mata Kuliah
                        </td>
                        <td scope="row">
                            {{ $mata_kuliah->kodeMK }}
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">
                            Beban Studi
                        </td>
                        <td scope="row">
                            <blade
                                if|(%24mata_kuliah-%3Esks)%20%7B%7B%2524mata_kuliah-%253Esks%7D%7D%20SKS%20%40endif%20%40if(%24mata_kuliah-%3Eects)%2F%20%7B%7B%2524mata_kuliah-%253Eects%7D%7D%20ECTS%20%40endif%0D>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">
                            Semester
                        </td>
                        <td scope="row">
                            {{ $mata_kuliah->semester }}
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">
                            Jurusan/Prodi
                        </td>
                        <td scope="row">
                            {{ $mata_kuliah->namaProdi }}
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">
                            CPL
                        </td>
                        <td scope="row">
                            @foreach ($list_cpl as $cpl)
                                <div class="col">
                                    {{ $cpl->kodeCPL }} {{ $cpl->deskripsiCPL }}
                                </div>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">
                            Capaian Pembelajaran Mata Kuliah (CPMK)
                        </td>
                        <td scope="row">
                            @foreach ($list_cpmk as $cpmk)
                                <div class="col">
                                    {{ $cpmk->kodeCPMK }} {{ $cpmk->deskripsiCPMK }}
                                </div>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">
                            Deskripsi Mata Kuliah
                        </td>
                        <td scope="row">
                            {!! $mata_kuliah->deskripsiMK !!}
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">
                            Prasyarat (bila ada)
                        </td>
                        <td scope="row">
                            @foreach ($list_prasyarat as $prasyarat)
                                <div class="col">
                                    {{ $prasyarat->kodeMK }} {{ $prasyarat->namaMK }}
                                </div>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">
                            Komponen Penilaian
                        </td>
                        <td scope="row">
                            <div class="table" style="display: flex; flex-direction: column;">
                                @foreach ($komponen_penilaian as $item)
                                    <div class="table-row mb-2" style="display: flex; border: none">
                                        <div class="table-cell mr-3">{{ $item->nama_komponen_penilaian }}</div>
                                        <div class="table-cell"><a
                                                href="{{ route('edit_rps.edit_komponen_penilaian', ['id_komponen_penilaian' => $item->id_komponen_penilaian, 'kodeRPS' => $kodeRPS]) }}"><i
                                                    class="bi bi-pencil-square"></a></i></div>
                                        <div class="table-cell"><a
                                                href="{{ route('edit_rps.delete_komponen_penilaian', ['id_komponen_penilaian' => $item->id_komponen_penilaian, 'kodeRPS' => $kodeRPS]) }}"><i
                                                    class="bi bi-trash-fill"></i></a></div>
                                    </div>
                                @endforeach
                                <div class="table-row mt-2" style="display: flex; border: none">
                                    <a href="{{ route('edit_rps.add_komponen_penilaian', ['kodeRPS' => $kodeRPS]) }}"
                                        class="btn btn-primary btn-sm">Tambah komponen penilaian</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endsection
