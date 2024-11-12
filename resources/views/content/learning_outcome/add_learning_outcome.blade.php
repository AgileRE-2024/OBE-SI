@extends('layout.dashboard')

@section('content')

<div class="content px-4">
    <div class="card border" style="background-color: white">
        <div class="card-body" style="font-weight:600;">
            <h3>Tambah Level LO</h3>
            <form action="{{ route('kurikulum.data.store_learning_outcome') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="kode">Kode</label>
                    <input type="text" class="form-control" id="kode" name="kode" required>
                </div>
                <div class="form-group">
                    <label for="cognitive_level">Cognitive Level</label>
                    <input type="text" class="form-control" id="cognitive_level" name="cognitive_level" required>
                </div>
                <div class="form-group">
                    <label for="kata_kerja">Kata Kerja</label>
                    <input type="text" class="form-control" id="kata_kerja" name="kata_kerja" required>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>

@endsection