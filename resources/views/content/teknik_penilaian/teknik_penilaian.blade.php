@extends('layout.dashboard')

@section('content')
    <div class="content px-4">
        @include('content.teknik_penilaian.button')
        <br><br>
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>Teknik Penilaian</h3>
                <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Kriteria penilaian dan deskripsi komponen
                    penilaian RPS<b style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b></h5>
            </div>
        </div>
        @if (session('warning'))
            <div class="alert alert-danger">
                {{ session('warning') }}
            </div>
        @endif

        <div class="card border" style="background-color: white">
            <div class="card-body">
                <h5>Kriteria Penilaian</h5>
                <h6 style="font-weight:400;">Penilaian yang diberikan berdasarkan kriteria berikut:</h6>
                <p></p>
                <h6 style="font-weight:400;">Nilai akhir diperoleh melalui rumus</h6>
                <h6 style="font-weight:400;">
                    @if ($rps->KomponenPenilaian)
                        @foreach ($rps->KomponenPenilaian as $item)
                            @php
                                $totalBobot = 0;
                            @endphp
                            @foreach ($rps->Minggu_RPS as $minggu)
                                @if ($minggu->id_komponen_penilaian == $item->id_komponen_penilaian)
                                    @php
                                        $totalBobot += $minggu->bobot_nilai;
                                    @endphp
                                @endif
                            @endforeach
                            {{ $item->nama_komponen_penilaian }} ({{ $totalBobot }}%)
                            @if (!$loop->last)
                                +
                            @endif
                        @endforeach
                    @endif
                </h6>
            </div>
        </div>

        <div class="card border" style="background-color: white">
            <div class="card-body">
                <h5>Deskripsi Komponen Penilaian</h5>
                @if ($rps->detail_penilaian)
                    <h6 style="font-weight:400;">{!! $rps->detail_penilaian !!}</h6>
                @else
                    <h6 style="font-weight:400;">Belum ada data</h6>
                @endif
            </div>
            <div class="card-body">
                <div>
                    <a class="btn btn-primary"
                        href="{{ route('edit_rps.edit_teknik_penilaian', ['kodeRPS' => $kodeRPS]) }}"><i
                            class="bi bi-pencil-square">
                        </i>Edit</a>
                </div>
            </div>
        </div>
    </div>
@endsection
