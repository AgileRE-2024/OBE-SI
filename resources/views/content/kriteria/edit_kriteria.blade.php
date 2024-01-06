@extends('layout.dashboard')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Kriteria Penilaian</h6>
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form method="post" action="{{ route('kurikulum.data.update_kriteria', $kriteria->id_kriteria_penilaians) }}">
                    @csrf
                    @method('put')

                    <div class="form-group">
                        <label>Nama Kriteria Penilaian</label>
                        @error('nama_kriteria_penilaians')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="nama_kriteria_penilaians" class="form-control" placeholder="Nama kriteria penilaian"  value="{{ old('nama_kriteria_penilaians') ? old('nama_kriteria_penilaians') : $kriteria->nama_kriteria_penilaians }}">
                    </div>

                    <div class="form-group">
                        <label>Deskripsi Kriteria Penilaian</label>
                        @error('deskripsi_kriteria_penilaians')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="deskripsi_kriteria_penilaians" class="form-control" placeholder="Deskripsi"  value="{{ old('deskripsi_kriteria_penilaians') ? old('deskripsi_kriteria_penilaians') : $kriteria->deskripsi_kriteria_penilaians }}">
                    </div>
                    
                    <div class="form-group pt-4">
                        <button type="submit" name="submit" value="submit" id="submit" class="btn btn-dark btn-sm"><i
                                class="fa fa-fw fa-plus-circle"></i>
                            Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
