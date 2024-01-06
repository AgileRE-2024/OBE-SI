@extends('layout.dashboard')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Media Pembelajaran</h6>
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form method="post" action="{{ route('kurikulum.data.store_media') }}">
                    @csrf
                    <div class="form-group">
                        <label>Nama Media Pembelajaran</label>
                        @error('nama_media')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="nama_media" class="form-control" placeholder="Nama media">
                    </div>

                    <div class="form-group">
                        <label>Deskripsi Media Pembelajaran</label>
                        @error('deskripsi_media')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="deskripsi_media" class="form-control" placeholder="Deskripsi">
                    </div>

                    <div class="form-group pt-4">
                        <button type="submit" name="submit" value="submit" id="submit" class="btn btn-dark btn-sm"><i
                                class="fa fa-fw fa-plus-circle"></i>
                            Tambah Media</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
