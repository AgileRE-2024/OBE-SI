@extends('layout.dashboard')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Mata Kuliah</h6>
            {{-- <a href="/tambahpl" class="float-right btn btn-sm btn-dark"><i
    class="fa fa-fw fa-plus-circle"></i> Tambah PL</a> --}}
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form action="{{ route('kurikulum.data.store_mata_kuliah') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Kode Mata Kuliah</label>
                        @error('kodeMK')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="kodeMK" class="form-control" placeholder="Kode Mata Kuliah">
                    </div>

                    <div class="form-group">
                        <label>Mata Kuliah</label>
                        @error('namaMK')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="namaMK" class="form-control" placeholder="Nama Mata Kuliah">
                    </div>

                    <div class="form-group">
                        <label>Deskripsi Mata Kuliah</label>
                        @error('deskripsi')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <textarea name="deskripsi" row="3" class="form-control" placeholder="Deskripsi Mata Kuliah"></textarea>
                    </div>


                    <div class="form-group">
                        <label>Kategori Mata Kuliah</label>
                        @error('kategoriMK')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <select name="kategoriMK" id='kategoriMK' class="form-select">
                            <option value="" selected disabled>-- Pilih Kategori MK --
                            </option>
                            <option value="1">Wajib</option>
                            <option value="0">Pilihan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Jenis Mata Kuliah</label>
                        @error('jenisMK')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <select name="jenisMK" id='jenisMK' class="form-select">
                            <option value="" selected disabled>-- Pilih Jenis MK --</option>
                            <option value="1">Teori</option>
                            <option value="2">Praktikum</option>
                            <option value="3">Praktek</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Semester</label>
                        @error('semester')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <select name="semester" id='semester' class="form-select">
                            <option value="" selected disabled>-- Pilih Semester --</option>
                            @for ($i = 1; $i <= 8; $i++)
                                <option value="{{ $i }}">
                                    {{ $i }}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="form-group">
                        <label>SKS</label>
                        @error('sks')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="number" name="sks" class="form-control" placeholder="SKS Mata Kuliah">
                    </div>

                    <div class="form-group">
                        <label>Prasyarat Mata Kuliah</label>
                        @error('mat_kodeMK')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <select name="mat_kodeMK" class="form-control">
                            <option value="" selected disabled>-- Pilih MK Prasyarat --</option>
                            @foreach ($mks as $mk)
                                <option value="{{ $mk->kodeMK }}">
                                    {{ $mk->namaMK }}</option>
                            @endforeach
                            <option value="">Tidak ada Prasyarat</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Prasyarat Tambahan</label>
                        @error('prasyarat_tambahan')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <textarea name="prasyarat_tambahan" row="3" class="form-control" placeholder="Prasyarat Tambahan Mata Kuliah"></textarea>
                    </div>

                    <div class="form-group pt-4">
                        <button type="submit" name="submit" value="submit" id="submit" class="btn btn-dark btn-sm"><i
                                class="fa fa-fw fa-plus-circle"></i>
                            Tambah Mata Kuliah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
