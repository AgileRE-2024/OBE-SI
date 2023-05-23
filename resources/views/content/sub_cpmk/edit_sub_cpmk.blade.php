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
                <form method="post" action="{{ route('kurikulum.data.update_sub_cpmk', $subcpmk->kodeSubCPMK) }}">
                    @csrf
                    @method('put')

                    <div class="form-group">
                        <label>Kode Sub CPMK</label>
                        @error('kodeSubCPMK')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <input type="text" name="kodeSubCPMK" class="form-control" placeholder="Kode Sub CPMK"
                            value="{{ old('kodeSubCPMK') ? old('kodeSubCPMK') : $subcpmk->kodeSubCPMK }}">
                    </div>

                    <div class="form-group">
                        <label>Deskripsi Sub CPMK</label>
                        @error('deskripsiSubCPMK')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <textarea name="deskripsiSubCPMK" row="3" class="form-control" placeholder="Deskripsi Mata Kuliah">{{ old('deskripsiSubCPMK') ? old('deskripsiSubCPMK') : $subcpmk->deskripsiSubCPMK }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Kode CPMK</label>
                        @error('kodeCPMK')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <select name="kodeCPMK" class="form-control">
                            <option value="" selected disabled>-- Pilih CPMK --</option>
                            @foreach ($cpmks as $cpmk)
                                <option value="{{ $cpmk->kodeCPMK }}" @if ($subcpmk->kodeCPMK == $cpmk->kodeCPMK) selected @endif>
                                    {{ $cpmk->kodeCPMK }} - {{ $cpmk->deskripsiCPMK }}</option>
                            @endforeach
                        </select>
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