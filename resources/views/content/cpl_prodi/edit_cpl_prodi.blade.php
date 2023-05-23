@extends('layout.dashboard')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit CPL Prodi</h6>
            {{-- <a href="/tambahpl" class="float-right btn btn-sm btn-dark"><i
        class="fa fa-fw fa-plus-circle"></i> Tambah PL</a> --}}
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form method="post" action="{{ route('kurikulum.data.update_cpl_prodi', $cpl->kodeCPL) }}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label>Kode CPL Prodi</label>
                        @error('kodeCPL')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="kodeCPL" class="form-control" placeholder="Kode CPL Prodi"
                            value="{{ old('kodeCPL') ? old('kodeCPL') : $cpl->kodeCPL }}">
                    </div>

                    <div class="form-group">
                        <label>Deskripsi CPL Prodi</label>
                        @error('deskripsiCPL')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <textarea name="deskripsiCPL" rows="3" class="form-control" placeholder="Deskripsi CPL Prodi">{{ old('deskripsiCPL') ? old('deskripsiCPL') : $cpl->deskripsiCPL }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Referensi CPL Prodi</label>
                        @error('referensiCPL')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="referensiCPL" class="form-control" placeholder="Referensi CPL Prodi"
                            value="{{ old('referensiCPL') ? old('referensiCPL') : $cpl->referensiCPL }}">
                    </div>

                    <div class="form-group pt-4">
                        <button type="submit" name="submit" value="submit" id="submit" class="btn btn-dark btn-sm"><i
                                class="fa fa-fw fa-plus-circle"></i>
                            Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection