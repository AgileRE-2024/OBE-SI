@extends('layout.dashboard')

@section('content')
<div class="content px-4">
    @include('content.teknik_penilaian.button')
    <br><br>
    <div class="card border" style="background-color: white">
        <div class="card-body" style="font-weight:600;">
            <h3>Teknik Penilaian</h3>
            <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Standar teknik penilaian RPS<b
                    style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b></h5>
        </div>
    </div>
    <div class="d-flex justify-content-start pt-2">
        <div>
            <a class="btn btn-primary" href="{{ route('edit_rps.edit_teknik_penilaian', ['kodeRPS' => $kodeRPS ]) }}"><i
                    class="bi bi-pencil-square">
                </i>Edit</a>
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
<div class="card border" style="background-color: white">
    <div class="card-body" style="font-weight:600;">
    @if($rps->detail_penilaian)
        <h5 style="font-weight: 400;">{{ $rps->detail_penilaian }}</h5>
    @else
        <h5 style="font-weight: 400;">Belum ada data</h5>
        @endif
    </div>
</div>
@endsection
