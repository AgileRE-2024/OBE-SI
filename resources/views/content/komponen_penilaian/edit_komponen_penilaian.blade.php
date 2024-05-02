@extends('layout.dashboard')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Komponen Penilaian</h6>
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form method="post" action="{{ route('edit_rps.update_komponen_penilaian', ['id_komponen_penilaian' => $komponen_penilaian->id_komponen_penilaian, 'kodeRPS' => $kodeRPS]) }}">
                    @csrf
                    @method('put')

                    <div class="form-group">
                        <label>Nama Komponen Penilaian</label>
                        @error('nama_komponen_penilaian')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="nama_komponen_penilaian" class="form-control" placeholder="Nama komponen penilaian"   value="{{ old('nama_komponen_penilaian') ? old('nama_komponen_penilaian') : $komponen_penilaian->nama_komponen_penilaian }}">
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
