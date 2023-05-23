@extends('layout.dashboard')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Bahan Kajian</h6>
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form method="post" action="{{ route('kurikulum.data.update_bahan_kajian', $bk->kodeBK) }}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label>Kode Bahan Kajian</label>
                        @error('kodeBK')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <input type="text" name="kodeBK" class="form-control" placeholder="Kode Bahan Kajian"
                            value="{{ old('kodeBK') ? old('kodeBK') : $bk->kodeBK }}">
                    </div>

                    <div class="form-group">
                        <label>Bahan Kajian</label>
                        @error('namaBK')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <input type="text" name="namaBK" class="form-control" placeholder="Nama Bahan Kajian"
                            value="{{ old('namaBK') ? old('namaBK') : $bk->namaBK }}">
                    </div>

                    <div class="form-group">
                        <label>Kategori Bahan Kajian</label>
                        @error('kategoriBK')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <select name="kategoriBK" id='kategoriBK' class="form-select">
                            <option value="" selected disabled>-- Pilih Kategori BK --
                            </option>
                            <option value="1" @if ($bk->kategoriBK == 1) selected @endif>Wajib</option>
                            <option value="0" @if ($bk->kategoriBK == 0) selected @endif>Pilihan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Referensi</label>
                        @error('referensiBK')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <input type="text" name="referensiBK" class="form-control" placeholder="Referensi Bahan Kajian"
                            value="{{ old('referensiBK') ? old('referensiBK') : $bk->referensiBK }}">
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
