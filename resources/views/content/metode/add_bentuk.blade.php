@extends('layout.dashboard')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Bentuk Pembelajaran</h6>
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form method="post" action="{{ route('kurikulum.data.store_bentuk') }}">
                    @csrf
                    <div class="form-group">
                        <label>Nama Bentuk Pembelajaran</label>
                        @error('nama_bentuk')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="nama_bentuk" class="form-control" placeholder="Nama bentuk">
                    </div>

                    <div class="form-group">
                        <label>Deskripsi Bentuk Pembelajaran</label>
                        @error('deskripsi_bentuk')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="deskripsi_bentuk" class="form-control" placeholder="Deskripsi">
                    </div>

                    <div class="form-group pt-4">
                        <button type="submit" name="submit" value="submit" id="submit" class="btn btn-dark btn-sm"><i
                                class="fa fa-fw fa-plus-circle"></i>
                            Tambah Bentuk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
