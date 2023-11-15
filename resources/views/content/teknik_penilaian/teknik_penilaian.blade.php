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
            <a class="btn btn-primary" href="{{ route('edit_rps.add_teknik_penilaian', ['kodeRPS' => $kodeRPS ]) }}"><i
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
        <h5 style="font-weight: 400;">Lorem ipsum dolor sit amet consectetur,
            adipisicing elit. Maxime explicabo neque possimus quibusdam temporibus, a velit officiis magni expedita.
            Nobis, facere odio veritatis nesciunt recusandae hic cumque provident adipisci voluptas.</h5>
    </div>
</div>
@endsection
