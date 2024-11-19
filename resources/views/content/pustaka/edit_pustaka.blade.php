@extends('layout.dashboard')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Profil Lulusan</h6>
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form method="post" action="{{ route('kurikulum.data.update_pustaka', $pustaka->id_pustaka) }}">
                    @csrf
                    @method('put')

                    <div class="form-group">
                        <label>Judul</label>
                        @error('judul')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="judul" class="form-control" placeholder="Judul pustaka"
                            value="{{ old('judul') ? old('judul') : $pustaka->judul }}">
                    </div>

                    <div class="form-group">
                        <label>Nama Penulis</label>
                        @error('nama_penulis')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="nama_penulis" class="form-control" placeholder="Nama penulis pustaka"
                            value="{{ old('nama_penulis') ? old('nama_penulis') : $pustaka->nama_penulis }}">
                    </div>

                    <div class="form-group">
                        <label>Tahun</label>
                        @error('tahun')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="tahun" class="form-control" placeholder="Tahun pustaka"
                            value="{{ old('tahun') ? old('tahun') : $pustaka->tahun }}">
                    </div>

                    <div class="form-group">
                        <label>Penerbit</label>
                        @error('penerbit')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="penerbit" class="form-control" placeholder="Penerbit pustaka"
                            value="{{ old('penerbit') ? old('penerbit') : $pustaka->penerbit }}">
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
