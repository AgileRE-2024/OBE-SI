@extends('layout.dashboard')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Komponen Penilaian</h6>
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form method="post" action="{{ route('edit_rps.store_komponen_penilaian', ['kodeRPS' => $kodeRPS ]) }}">
                    @csrf
                    <div class="form-group">
                        <label>Nama Komponen Penilaian</label>
                        @error('nama_komponen_penilaian')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="nama_komponen_penilaian" class="form-control" placeholder="Nama komponen penilaian">
                    </div>

                    <div class="form-group pt-4">
                        <button type="submit" name="submit" value="submit" id="submit" class="btn btn-dark btn-sm"><i
                                class="fa fa-fw fa-plus-circle"></i>
                            Tambah komponen</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
