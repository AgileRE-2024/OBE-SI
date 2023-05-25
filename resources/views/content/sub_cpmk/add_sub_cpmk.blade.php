@extends('layout.dashboard')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Sub CPMK</h6>
            {{-- <a href="/tambahpl" class="float-right btn btn-sm btn-dark"><i
    class="fa fa-fw fa-plus-circle"></i> Tambah PL</a> --}}
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form action="{{ route('kurikulum.data.store_sub_cpmk') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Kode Sub CPMK</label>
                        @error('kodeSubCPMK')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <input type="text" name="kodeSubCPMK" class="form-control" placeholder="Kode Sub CPMK">
                    </div>

                    <div class="form-group">
                        <label>Deskripsi Sub CPMK</label>
                        @error('deskripsiSubCPMK')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <textarea name="deskripsiSubCPMK" row="3" class="form-control" placeholder="Deskripsi Mata Kuliah"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Kode CPMK</label>
                        @error('kodeCPMK')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <select name="kodeCPMK" class="form-control">
                            <option value="" selected disabled>-- Pilih CPMK --</option>
                            @foreach ($cpmks as $cpmk)
                                <option value="{{ $cpmk->kodeCPMK }}">
                                    {{ $cpmk->kodeCPMK }} - {{ $cpmk->deskripsiCPMK }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group pt-4">
                        <button type="submit" name="submit" value="submit" id="submit" class="btn btn-dark btn-sm"><i
                                class="fa fa-fw fa-plus-circle"></i>
                            Tambah Sub CPMK</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
