@extends('layout.dashboard')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Bahan Kajian</h6>
            {{-- <a href="/tambahpl" class="float-right btn btn-sm btn-dark"><i
        class="fa fa-fw fa-plus-circle"></i> Tambah PL</a> --}}
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form method="post" action="{{ route('kurikulum.data.store_bahan_kajian') }}">
                    @csrf
                    <div class="form-group">
                        <label>Kode Bahan Kajian</label>
                        @error('kodeBK')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="kodeBK" class="form-control"
                            placeholder="Kode Bahan Kajian (Masukkan huruf besar dan angka saja))" pattern="[A-Z0-9-]+"
                            maxlength="10" minlength="4" title="Harap masukkan huruf besar dan angka saja"
                            oninput="updateInput(this);" value="BK">
                    </div>

                    <div class="form-group">
                        <label>Bahan Kajian</label>
                        @error('namaBK')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="namaBK" class="form-control" placeholder="Nama Bahan Kajian">
                    </div>

                    <div class="form-group">
                        <label>Kategori Bahan Kajian</label>
                        @error('kategoriBK')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <select name="kategoriBK" id='kategoriBK' class="form-select">
                            <option value="" selected disabled>-- Pilih Kategori BK --
                            </option>
                            <option value="1">Wajib</option>
                            <option value="0">Pilihan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Referensi</label>
                        @error('referensiBK')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="referensiBK" class="form-control" placeholder="Referensi Bahan Kajian">
                    </div>

                    <div class="form-group pt-4">
                        <button type="submit" name="submit" value="submit" id="submit" class="btn btn-dark btn-sm"><i
                                class="fa fa-fw fa-plus-circle"></i>
                            Tambah Bahan Kajian</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
