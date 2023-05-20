@extends('layout.dashboard')

@section('content')
    {{-- Ini contoh form mata Kuliah --}}

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Mata Kuliah</h6>
            {{-- <a href="/tambahpl" class="float-right btn btn-sm btn-dark"><i
    class="fa fa-fw fa-plus-circle"></i> Tambah PL</a> --}}
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form action="#" method="POST">
                    @csrf

                    {{-- Ini yang type Text --}}
                    <div class="form-group">
                        <label>Kode Mata Kuliah</label>
                        @error('kodeMK')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <input type="text" name="kodeMK" class="form-control" placeholder="Kode Mata Kuliah">
                    </div>

                    {{-- Type Text --}}
                    <div class="form-group">
                        <label>Mata Kuliah</label>
                        @error('namaBK')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <input type="text" name="namaMK" class="form-control" placeholder="Nama Mata Kuliah">
                    </div>

                    {{-- Type Textarea --}}
                    <div class="form-group">
                        <label>Deskripsi Mata Kuliah</label>
                        @error('deskripsi')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <textarea name="deskripsi" row="3" class="form-control" placeholder="Deskripsi Mata Kuliah"></textarea>
                    </div>

                    {{-- Type Select (Dropdown) --}}
                    <div class="form-group">
                        <label>Kategori Mata Kuliah</label>
                        @error('kategoriMK')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <select name="kategoriMK" id='kategoriMK' class="form-select">
                            <option value="" selected disabled>-- Pilih Kategori MK --
                            </option>
                            <option value="1">Wajib</option>
                            <option value="2">Pilihan</option>
                        </select>
                    </div>

                    {{-- Type Select (Dropdown) --}}
                    <div class="form-group">
                        <label>Jenis Mata Kuliah</label>
                        @error('jenisMK')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <select name="jenisMK" id='jenisMK' class="form-select">
                            <option value="" selected disabled>-- Pilih Jenis MK --</option>
                            <option value="1">Teori</option>
                            <option value="2">Praktikum</option>
                            <option value="3">Praktek</option>
                        </select>
                    </div>

                    {{-- Type Select (Dropdown) --}}
                    <div class="form-group">
                        <label>Semester</label>
                        @error('semester')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <select name="semester" id='semester' class="form-select">
                            <option value="" selected disabled>-- Pilih Semester --</option>
                            @for ($i = 1; $i <= 8; $i++)
                                <option value="{{ $i }}">
                                    {{ $i }}</option>
                            @endfor
                        </select>
                    </div>

                    {{-- Type Number --}}
                    <div class="form-group">
                        <label>SKS</label>
                        @error('sks')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <input type="number" name="sks" class="form-control" placeholder="SKS Mata Kuliah">
                    </div>

                    {{-- Type Select (Dropdown) --}}
                    <div class="form-group">
                        <label>Prasyarat Mata Kuliah</label>
                        @error('mat_kodeMK')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <select name="mat_kodeMK" class="form-control">
                            <option value="" selected disabled>-- Pilih MK Prasyarat --</option>
                            @foreach ($mks as $mk)
                                <option value="{{ $mk->kodeMK }}">
                                    {{ $mk->namaMK }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Type Textarea --}}
                    <div class="form-group">
                        <label>Prasyarat Tambahan</label>
                        @error('prasyarat_tambahan')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
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
