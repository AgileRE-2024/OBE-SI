@extends('layout.dashboard')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Teknik Penilaian</h6>
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form method="post" action="{{ route('kurikulum.data.store_teknik_penilaian') }}">
                    @csrf
                    <div class="form-group">
                        <label>Kode Teknik Penilaian</label>
                        @error('kodePenilaian')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <input type="text" name="kodePenilaian" class="form-control" placeholder="Kode Teknik Penilaian">
                    </div>

                    <div class="form-group">
                        <label>Teknik Penilaian</label>
                        @error('teknikPenilaian')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <input type="text" name="teknikPenilaian" class="form-control" placeholder="Teknik Penilaian">
                    </div>

                    <div class="form-group">
                        <label>Bobot Penilaian</label>
                        @error('bobotPenilaian')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <input type="text" name="bobotPenilaian" class="form-control" placeholder="Bobot Penilaian">
                    </div>

                    <div class="form-group">
                        <label>Kriteria Penilaian</label>
                        @error('kriteriaPenilaian')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <input type="text" name="kriteriaPenilaian" class="form-control" placeholder="Kriteria Penilaian">
                    </div>
                    <div class="form-group">
                        <label>Tahap Penilaian</label>
                        @error('tahapPenilaian')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <select name="tahapPenilaian" id='tahapPenilaian' class="form-select">
                            <option value="" selected disabled>-- Pilih Tahap Penilaian --</option>
                            <option value="1">Awal Semester</option>
                            <option value="2">Tengah Semester</option>
                            <option value="3">Akhir Semester</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Instrumen Penilaian</label>
                        @error('instrumenPenilaian')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <input type="text" name="instrumenPenilaian" class="form-control" placeholder="Instrumen Penilaian">
                    </div>
                    
                    <div class="form-group">
                        <label>Kode RPS</label>
                        @error('kodeRPS')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <input type="text" name="kodeRPS" class="form-control" placeholder="Kode RPS"  value="RPS001">
                    </div>

                    <div class="form-group pt-4">
                        <button type="submit" name="submit" value="submit" id="submit" class="btn btn-dark btn-sm"><i
                                class="fa fa-fw fa-plus-circle"></i>
                            Tambah Teknik Penilaian</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection