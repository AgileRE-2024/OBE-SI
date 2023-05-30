@extends('layout.dashboard')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Teknik Penilaian</h6>
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form method="post" action="{{ route('edit_rps.update_teknik_penilaian', $tp->kodePenilaian) }}">
                    @csrf
                    @method('put')
                    {{-- <div class="form-group">
                        <label>Kode Teknik Penilaian</label>
                        @error('kodePenilaian')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <input type="text" name="kodePenilaian" class="form-control" placeholder="Kode Teknik Penilaian"
                            value="{{ old('kodePenilaian') ? old('kodePenilaian') : $tp->kodePenilaian }}">
                    </div> --}}

                    <div class="form-group">
                        <label>Teknik Penilaian</label>
                        @error('teknikPenilaian')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <input type="text" name="teknikPenilaian" class="form-control" placeholder="Teknik Penilaian"
                            value="{{ old('teknikPenilaian') ? old('teknikPenilaian') : $tp->teknikPenilaian }}">
                    </div>
                    <div class="form-group">
                        <label>Bobot Penilaian</label>
                        @error('bobotPenilaian')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <input type="text" name="bobotPenilaian" class="form-control" placeholder="Bobot Penilaian"
                            value="{{ old('bobotPenilaian') ? old('bobotPenilaian') : $tp->bobotPenilaian }}">
                    </div>
                    <div class="form-group">
                        <label>Kriteria Penilaian</label>
                        @error('kriteriaPenilaian')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <input type="text" name="kriteriaPenilaian" class="form-control" placeholder="Kriteria Penilaian"
                            value="{{ old('kriteriaPenilaian') ? old('kriteriaPenilaian') : $tp->kriteriaPenilaian }}">
                    </div>

                    <div class="form-group">
                        <label>Tahap Penilaian</label>
                        @error('tahapPenilaian')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <select name="tahapPenilaian" id='tahapPenilaian' class="form-select">
                        @php
                            $options = ['Awal Semester', 'Tengah Semester','Akhir Semester',];
                        @endphp 
                            @foreach ($options as $option)
                                <option value="{{ $option }}" {{ $option == $tp->kodePenilaian ? 'selected' : '' }}>
                                    {{ $option }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Instrumen Penilaian</label>
                        @error('instrumenPenilaian')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <input type="text" name="instrumenPenilaian" class="form-control" placeholder="instrumen Penilaian"
                            value="{{ old('instrumenPenilaian') ? old('instrumenPenilaian') : $tp->instrumenPenilaian }}">
                    </div>
                    <div class="form-group">
                        <label>Kode RPS</label>
                        @error('kodeRPS')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <input type="text" name="kodeRPS" class="form-control" placeholder="kodeRPS" value={{ $tp->kodeRPS }}>
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

