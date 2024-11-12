@extends('layout.dashboard')

@section('content')

<div class="content px-4">
    <div class="card border" style="background-color: white">
        <div class="card-body" style="font-weight:600;">
            <h3>LO (Learning Outcome)</h3>
            <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Daftar Level Learning Outcome beserta kata-kata kerja
                yang sesuai<b style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b></h5>
        </div>
    </div>
    @if (auth()->user()->role == 1 || auth()->user()->role == 3)
    <div class="d-flex justify-content-start pt-2">
        <div>
            <a class="btn btn-dark" href="{{ route('kurikulum.data.add_learning_outcome') }}"><i class="bi bi-plus-square">
                </i>Tambah</a>
        </div>
    </div>
    @endif
    <div class="d-flex justify-content-start pt-2">
        <table class="table table-bordered" style="text-align: center">
            <thead class="table" style="background-color: lightgray">
                <tr>
                    <th class="align-middle" scope="col" style="width: 5%">No</th>
                    <th class="align-middle" scope="col" style="width: 10%">Kode</th>
                    <th class="align-middle" scope="col" style="width: 20%">Cognitive Level</th>
                    <th class="align-middle" scope="col" style="width: 20%">Kata Kerja</th>
                    @if (auth()->user()->role == 1 || auth()->user()->role == 3)
                    <th class="align-middle" scope="col" style="width: 10%">Edit</th>
                    <th class="align-middle" scope="col" style="width: 10%">Delete</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($levels as $level)
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td scope="row">{{ $level->kode }}</td>
                    <td scope="row">{{ $level->cognitive_level }}</td>
                    <td scope="row">{{ $level->kata_kerja }}</td>
                    @if (auth()->user()->role == 1 || auth()->user()->role == 3)
                    <td scope="row">
                        <a class="btn btn-primary" href="{{ route('kurikulum.data.edit_learning_outcome', $level->kode) }}">Edit</a>
                    </td>
                    <td scope="row">
                        <form action="{{ route('kurikulum.data.delete_learning_outcome', $level->kode) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection