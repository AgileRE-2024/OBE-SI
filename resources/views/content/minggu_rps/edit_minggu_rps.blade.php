@extends('layout.dashboard')

@section('content')

    <div class="content px-4">
        <div class="content px-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Minggu RPS {{$minggu_rps->kodeMingguRPS}}</h6>
                </div>
                <div class="card-body" style="width: auto">
                    <div class="col-sm-8">
                        <form method="post" action="{{ route('edit_rps.update_minggu_rps', ['kodeMingguRPS' => $minggu_rps->kodeMingguRPS]) }}">
                            @csrf
                            @method('put')

                            <div class="form-group">
                                <label>Sub CPMK</label>
                                @error('kodeSubCPMK')
                                    <h6 style="color: #BF2C45">{{ $message }}</h6>
                                @enderror
                                <select name="kodeSubCPMK" id='kodeSubCPMK' class="form-select">
                                    <option value="">-- Pilih Sub CMPK --</option>
                                    @foreach ($scpmk as $item)
                                        <option value="{{ $item->kodeSubCPMK }}" {{ $item ==  $minggu_rps->kodeSubCPMK ? 'selected' : ''}}>{{ $scpmk[$loop->index]->kodeSubCPMK }} {{ $scpmk[$loop->index]->deskripsiSubCPMK }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Bahan Kajian</label>
                                @error('bahan_kajian')
                                    <h6 style="color: #BF2C45">{{ $message }}</h6>
                                @enderror
                                <textarea  rows="3" name="bahan_kajian" class="form-control"
                                    placeholder="Bahan Kajian" value="{{ $minggu_rps->bahan_kajian }}"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Bentuk Pembelajaran</label>
                                @error('bentukPembelajaran')
                                    <h6 style="color: #BF2C45">{{ $message }}</h6>
                                @enderror
                                <select name="temp_bentuk" id='bentukPembelajaran' class="form-select">
                                    <option value="" selected disabled>-- Pilih Bentuk Pembelajaran --</option>
                                    @php
                                        $options=['Kuliah, responsi, tutorial', 'Praktikum', 'Seminar']
                                    @endphp
                                    @foreach ($options as $item)
                                        <option value="{{ $item }}" {{ $item ==  $minggu_rps->bentukPembelajaran ? 'selected' : ''}}>{{ $options[$loop->index] }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Metode Pembelajaran</label>
                                @error('bentukPembelajaran')
                                    <h6 style="color: #BF2C45">{{ $message }}</h6>
                                @enderror
                                <select name="temp_metode" id='bentukPembelajaran' class="form-select">
                                    <option value="" selected disabled>-- Pilih Metode Pembelajaran --</option>
                                    @php
                                        $options=['Problem Based Learning', 'Project Based Learning', 'Case Based Learning']
                                    @endphp
                                    @foreach ($options as $item)
                                        <option value="{{ $item }}" {{ $item ==  $minggu_rps->bentukPembelajaran ? 'selected' : ''}}>{{ $options[$loop->index] }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Penugasan</label>
                                @error('penugasan')
                                    <h6 style="color: #BF2C45">{{ $message }}</h6>
                                @enderror
                                <textarea  rows="3" name="penugasan" class="form-control"
                                    placeholder="Penugasan" value="{{ $minggu_rps->penugasan }}"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Cara Pembelajaran</label>
                                @error('luring')
                                    <h6 style="color: #BF2C45">{{ $message }}</h6>
                                @enderror
                                <select name="luring" id='luring' class="form-select">
                                    <option value="" selected disabled>-- Pilih Cara Pembelajaran --</option>
                                    @php
                                        $options=[1, 0];
                                        $opsi=['Luring','Daring']
                                    @endphp
                                    @foreach ($options as $item)
                                        <option value="{{ $item }}" {{ $item ==  $minggu_rps->luring ? 'selected' : ''}}>{{ $opsi[$loop->index] }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Media Pembelajaran</label>
                                @error('temp_media')
                                    <h6 style="color: #BF2C45">{{ $message }}</h6>
                                @enderror
                                <select name="temp_media" id='temp_media' class="form-select">
                                    <option value="" selected disabled>-- Pilih Media Pembelajaran --</option>
                                    @php
                                        $options=['LMS', 'PPT', 'Studi Kasus']
                                    @endphp
                                    @foreach ($options as $item)
                                        <option value="{{ $item }}" {{ $item ==  $minggu_rps->temp_media ? 'selected' : ''}}>{{ $options[$loop->index] }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Waktu Pembelajaran</label>
                                @error('waktuPembelajaran')
                                    <h6 style="color: #BF2C45">{{ $message }}</h6>
                                @enderror
                                <textarea  rows="3" name="waktuPembelajaran" class="form-control" 
                                placeholder="Waktu Pembelajaran" value="{{ $minggu_rps->waktuPembelajaran }}">{{ old('indikatorPembelajaran') ? old('indikatorPembelajaran') : $minggu_rps->waktuPembelajaran }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Pengalaman Belajar</label>
                                @error('pengalaman_belajar')
                                    <h6 style="color: #BF2C45">{{ $message }}</h6>
                                @enderror
                                <textarea  rows="3" name="pengalaman_belajar" class="form-control" 
                                placeholder="Pengalaman Belajar" value="{{ $minggu_rps->pengalaman_belajar }}">{{ old('indikatorPembelajaran') ? old('indikatorPembelajaran') : $minggu_rps->pengalaman_belajar }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Kriteria Penilaian</label>
                                @error('temp_kriteria_penilaian')
                                    <h6 style="color: #BF2C45">{{ $message }}</h6>
                                @enderror
                                <select name="temp_kriteria_penilaian" id='temp_kriteria_penilaian' class="form-select">
                                    <option value="" selected disabled>-- Pilih Kriteria Penilaian --</option>
                                    @php
                                        $options=['Rubrik Holistik', 'Rubrik Analitik', 'Rubrik Skala Persepsi', 'CBT (Computer Based Test)']
                                    @endphp
                                    @foreach ($options as $item)
                                        <option value="{{ $item }}" {{ $item ==  $minggu_rps->temp_kriteria_penilaian ? 'selected' : ''}}>{{ $options[$loop->index] }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Bobot Nilai</label>
                                @error('bobot_nilai')
                                    <h6 style="color: #BF2C45">{{ $message }}</h6>
                                @enderror
                                <input type="text" name="bobot_nilai" class="form-control"
                                    placeholder="Bobot Nilai" value="{{ $minggu_rps->bobot_nilai }}">
                            </div>
                            <div class="form-group">
                                <label>Referensi</label>
                                @error('temp_referensi')
                                    <h6 style="color: #BF2C45">{{ $message }}</h6>
                                @enderror
                                <textarea  rows="3"  name="temp_referensi" class="form-control"
                                    placeholder="Referensi" value="{{ $minggu_rps->temp_referensi }}">{{ old('temp_referensi') ? old('temp_referensi') : $minggu_rps->temp_referensi }}</textarea>
                            </div>

                            <div class="form-group pt-4">
                                <button type="submit" name="submit" value="submit" id="confirm"
                                    class="btn btn-dark btn-sm"><i class="fa fa-fw fa-plus-circle"></i>
                                    Confirm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
        @endsection
