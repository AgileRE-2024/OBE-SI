@extends('layout.dashboard')

@section('content')

<div class="content px-4">
    <div class="card border" style="background-color: white">
        <div class="card-body" style="font-weight:600;">
            <h3>Edit Kata Kerja Level LO</h3>
            <form action="{{ route('kurikulum.data.store_learning_outcome') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="level_lo">Level LO</label>
                    <select class="form-control" id="level_lo" name="level_lo" required>
                        @foreach ($levels as $level)
                            @if ($old_level->level_lo == $level)
                                <option selected value="{{ $level }}">{{ $level }}</option>
                            @else
                                <option value="{{ $level }}">{{ $level }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="kata_kerja">Kata Kerja</label>
                    <input type="text" class="form-control" id="kata_kerja" name="kata_kerja" value="{{ $old_level->kata_kerja }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>

@endsection
