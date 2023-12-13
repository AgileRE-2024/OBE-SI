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
    @if (auth()->user()->role == 0 || auth()->user()->role == 3)
    <div class="d-flex justify-content-start pt-2">
        <div>
            <a class="btn btn-primary" href="{{ route('edit_rps.edit_peran_dosen', ['kodeRPS' => $kodeRPS ]) }}"><i
                    class="bi bi-pencil-square">
                </i>Edit</a>
        </div>
    </div>
    @endif
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

                @if($pengampu)
                    @if(count($pengampu)==1)
                    <tr>
                        <td scope="row">4</td>
                        <td scope="row">Pengampu MK</td>
                        @if($pengampu[0]->nip == null)
                            <td scope="row"> - </td>
                            <td scope="row"> - </td>
                        @else
                            <td scope="row">
                                {{ $pengampu[0]->nip }}
                            </td>
                            <td scope="row">
                                {{ $pengampu[0]->User->namaDosen}}
                            </td>
                        @endif
                    </tr>
    
                    @else
                    <tr>
                        <td rowspan="{{ count($pengampu)+1 }}" scope="row" style="vertical-align : middle">4</td>
                        <td rowspan="{{ count($pengampu)+1 }}" scope="row" style="vertical-align : middle">Pengampu MK</td>
                   </tr>
                    @foreach ($pengampu as $dosen)
                        <tr>
                            <td scope="row">
                                {{$dosen->nip}}
                            </td>
                            <td scope="row">
                                {{ $dosen->User->namaDosen }}
                            </td>
                        </tr>
                    @endforeach
                    @endif

                @else
                {{-- Jika data sudah fix tanpa menggunakan migrasi awal, bagian di bawah tidak perlu --}}
                <tr>
                    <td scope="row">4</td>
                    <td scope="row">Pengampu MK</td>
                    <td scope="row"> - </td>
                    <td scope="row"> - </td>
                </tr>
                @endif

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
