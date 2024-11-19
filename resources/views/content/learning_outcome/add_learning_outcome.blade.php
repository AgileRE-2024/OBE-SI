@extends('layout.dashboard')

@section('content')
    <div class="content px-4">
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>Tambah Kata Kerja Level LO</h3>
                <form action="{{ route('kurikulum.data.store_learning_outcome') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="level_lo">Level LO</label>
                        <select class="form-control" id="level_lo" name="level_lo" required>
                            <option value="">-- Pilih Level --</option>
                            @foreach ($levels as $level)
                                <option value="{{ $level }}">{{ $level }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kata_kerja">Kata Kerja</label>
                        <input type="text" name="kata_kerja" class="form-control">
                        @error('kata_kerja')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
@endsection
