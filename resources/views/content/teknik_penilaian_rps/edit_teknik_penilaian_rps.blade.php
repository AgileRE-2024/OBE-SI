@extends('layout.dashboard')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Teknik Penilaian</h6>
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form method="post" action="{{ route('kurikulum.data.update_teknik', $teknik->id_teknik_penilaian) }}">
                    @csrf
                    @method('put')

                    <div class="form-group">
                        <label>Nama Teknik Penilaian</label>
                        @error('nama_teknik_penilaian')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="nama_teknik_penilaian" class="form-control" placeholder="Nama Teknik Penilaian"   value="{{ old('nama_teknik_penilaian') ? old('nama_teknik_penilaian') : $teknik->nama_teknik_penilaian }}">
                    </div>

                    <div class="form-group">
                        <label>Deskripsi Teknik Penilaian</label>
                        @error('deskripsi_teknik_penilaian')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="deskripsi_teknik_penilaian" class="form-control" placeholder="Deskripsi"  value="{{ old('deskripsi_teknik_penilaian') ? old('deskripsi_teknik_penilaian') : $teknik->deskripsi_teknik_penilaian }}">
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
