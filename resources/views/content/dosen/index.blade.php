@extends('layout.dashboard')

@section('content')
<div class="content px-4">
    @include('content.teknik_penilaian.button')
    <br><br>
    <div class="card border" style="background-color: white">
        <div class="card-body" style="font-weight:600;">
            <h3>Detail Peran Dosen</h3>
            <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Daftar Peran Dosen<b
                    style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b></h5>
        </div>
    </div>
    <div class="d-flex justify-content-start pt-2">
        <div>
            <a class="btn btn-primary" href="{{ route('edit_rps.edit_peran_dosen', ['kodeRPS' => $kodeRPS ]) }}"><i
                    class="bi bi-pencil-square">
                </i>Edit</a>
        </div>
    </div>
    <div class="d-flex mt-3">
        <table class="table table-bordered" style="text-align: center">
            <thead class="table" style="background-color: lightgray">
                <tr>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 5%">No</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 25%">Detail Peran</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 10%">NIP</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Nama Dosen</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">1</td>
                    <td scope="row">Pembuat RPS</td>
                    @if($pembuat)
                    <td scope="row">
                        {{$pembuat->nip}}
                    </td>
                    <td scope="row">
                        {{$pembuat->namaDosen}}
                    </td>
                    @else
                    <td scope="row">
                        -
                    </td>
                    <td scope="row">
                        -
                    </td>
                    @endif
                </tr>
                <tr>
                    <td scope="row">2</td>
                    <td scope="row">Pemeriksa RPS</td>
                    @if($pemeriksa)
                    <td scope="row">
                        {{$pemeriksa->nip}}
                    </td>
                    <td scope="row">
                        {{$pemeriksa->namaDosen}}
                    </td>
                    @else
                    <td scope="row">
                        -
                    </td>
                    <td scope="row">
                        -
                    </td>
                    @endif
                </tr>
                <tr>
                    <td scope="row">3</td>
                    <td scope="row">Persetujuan RPS</td>
                    @if($persetujuan)
                    <td scope="row">
                        {{$persetujuan->nip}}
                    </td>
                    <td scope="row">
                        {{$persetujuan->namaDosen}}
                    </td>
                    @else
                    <td scope="row">
                        -
                    </td>
                    <td scope="row">
                        -
                    </td>
                    @endif
                </tr>
                <tr>
                    <td scope="row">4</td>
                    <td scope="row">Pengampu MK</td>
                    @if($pengampu)
                    <td scope="row">
                        {{$pengampu->nip}}
                    </td>
                    <td scope="row">
                        {{$pengampu->namaDosen}}
                    </td>
                    {{-- @elseif($pengampu>1)
                        @foreach ($pengampu as $dosen)
                        <td scope="row">
                            {{$dosen->nip}}
                        </td>
                        <td scope="row">
                            {{$dosen->namaDosen}}
                        </td>
                        @endforeach --}}
                    @else
                    <td scope="row">
                        -
                    </td>
                    <td scope="row">
                        -
                    </td>
                    @endif
                </tr>
                <tr>
                    <td scope="row">5</td>
                    <td scope="row">Penanggung jawab MK</td>
                    @if($penanggung_jawab)
                    <td scope="row">
                        {{$penanggung_jawab->nip}}
                    </td>
                    <td scope="row">
                        {{$penanggung_jawab->namaDosen}}
                    </td>
                    @else
                    <td scope="row">
                        -
                    </td>
                    <td scope="row">
                        -
                    </td>
                    @endif
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
