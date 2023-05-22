@extends('layout.dashboard')

@section('content')
    <div class="content px-4">
        <div class="card border" style="background-color: rgb(197, 197, 197)">
            <div class="card-body" style="font-weight:600;">
                <h3>Matriks Capaian Pembelajaran Lulusan SN Dikti (CPLSN Dikti) & Capaian Pembelajaran Lulusan Prodi (CPL Prodi)</h3>
                <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Pemetaan CPL SN Dikti terhadap CPL Program Studi dilakukan untuk memetakan
                    kesesuaian antara CPLSN Dikti yang ditetapkan terhadap CPL Program Studi. Satu atau lebih CPL SN Dikti
                    dapat digunakan untuk memenuhi satu atau lebih CPL Program Studi dan sebaliknya.<b
                        style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b></h5>
            </div>
        </div>
        <div class="d-flex justify-content-start pt-2">
            <div class="pr-3">
                <a class="btn btn-primary" href="{{ route('kurikulum.pemetaan.export', ['pdf']) }}"><i
                        class="bi bi-file-earmark-pdf-fill"> </i>Export PDF</a>
            </div>
            <div>
                <a class="btn btn-success" href="{{ route('kurikulum.pemetaan.export', ['excel']) }}"><i
                        class="bi bi-file-earmark-excel"> </i>Export Excel</a>
            </div>
        </div>
        <div id="tableMatriksCPLDiktiCPlProdi" class="pt-2">
            <form method="POST" action="{{ route('kurikulum.pemetaan.update_pemetaan_cpldikti_cplprodi') }}">
                @csrf
                @method('put')
                <table class="table table-bordered" style="text-align: center">
                    <thead>
                        <tr>
                            <th class="align-middle" scope="col" rowspan="2" style="width: 5% ; text-align: center">No</th>
                            <th class="align-middle" scope="col" rowspan="2" style="width: 10% ; text-align: center">Kode CPLSNDikti</th>
                            <th class="align-middle" scope="col" rowspan="2" style="width: 50% ; text-align: center">CPLSNDikti</th>
                            <th scope="col" colspan="{{ $cplprodi_list->count() }}" style="text-align: center ">Capaian Profil Lulusan Prodi</th>
                        </tr>
                        <tr>
                            @foreach ($cplprodi_list as $cplprod)
                            <th scope="col">
                                <span data-bs-toggle="tooltip" data-bs-placement="bottom"
                                title="{{ $cplprod->deskripsi }}">{{ $cplprod->kode_cplprodi }}</span>
                                @endforeach
                            </th> 
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cpldikti_list as $cpldik)
                            <tr>
                                <th scope="row" @if ($pemetaan->where('kode_cpldikti', '===', $cpldik->kode_cpldikti)->count() == 0) style="background-color: yellow;" @endif>
                                    {{ $loop->iteration }}</th>
                                <th scope="row" @if ($pemetaan->where('kode_cpldikti', '===', $cpldik->kode_cpldikti)->count() == 0) style="background-color: yellow;" @endif>
                                    {{ $cpldik->kode_cpldikti }}</th>
                                <th scope="row" class="text-start"
                                    @if ($pemetaan->where('kode_cpldikti', '===', $cpldik->kode_cpldikti)->count() == 0) style="background-color: yellow;" @endif>
                                    {{ $cpldik->deskripsi }}</th>
                                @foreach ($cplprodi_list as $cplprod)
                                <td @if (
                                    $pemetaan->where('kode_cplprodi', '===', $cplprod->kode_cplprodi)->count() == 0 ||
                                        $pemetaan->where('kode_cpldikti', '===', $cpldik->kode_cpldikti)->count() == 0) style="background-color: yellow;" @endif>
                                    <input type="checkbox"
                                        id="checkbox_{{ $cpldik->kode_cpldikti }}-{{ $cplprod->kode_cplprodi }}" 
                                        onclick="updateTable('{{ $cpldik->kode_cpldikti }}-{{ $cplprod->kode_cplprodi }}')"
                                        name="checkbox_{{ $cpldik->kode_cpldikti }}-{{ $cplprod->kode_cplprodi }}"
                                        value="{{ $cpldik->kode_cpldikti }}&{{ $cplprod->kode_cplprodi }}" style="width:26px;height:26px;"
                                        @if ($pemetaan->where('kode_cpldikti', '===', $cpldik->kode_cpldikti)->where('kode_cplprodi', '===', $cplprod->kode_cplprodi)->count()) checked @endif>
                                </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>  
                <button type="submit" class="btn btn-success" style="float: right">
                    Simpan
                </button>
            </form>
        </div>
        
    </div>
@endsection
