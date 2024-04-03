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
                    <form method="post"
                        action="{{ route('edit_rps.update_minggu_rps', ['kodeMingguRPS' => $minggu_rps->kodeMingguRPS]) }}">
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
                                <option value="{{ $item->kodeSubCPMK }}"
                                    {{ $item->kodeSubCPMK ==  $minggu_rps->kodeSubCPMK ? 'selected' : ''}}>
                                    {{ $scpmk[$loop->index]->kodeSubCPMK }} {{ $scpmk[$loop->index]->deskripsiSubCPMK }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Bahan Kajian</label>
                            @error('bahan_kajian')
                            <h6 style="color: #BF2C45">{{ $message }}</h6>
                            @enderror
                            <textarea rows="3" name="bahan_kajian" class="form-control" placeholder="Bahan Kajian"
                                value="{{ $minggu_rps->bahan_kajian }}">{{ old('bahan_kajian') ? old('bahan_kajian') : $minggu_rps->bahan_kajian }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Bentuk Pembelajaran</label>
                            @error('bentukPembelajaran')
                            <h6 style="color: #BF2C45">{{ $message }}</h6>
                            @enderror
                            <select name="id_bentuk" id='bentukPembelajaran' class="form-select">
                            <option value="" selected disabled>-- Pilih Bentuk Pembelajaran --</option>
                                @foreach ($bentuk as $item)
                                <option value="{{ $item->id_bentuk }}"
                                    {{ $item->id_bentuk ==  $minggu_rps->id_bentuk ? 'selected' : ''}}>
                                    {{ $item->nama_bentuk }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Metode Pembelajaran</label>
                            @error('metodePembelajaran')
                            <h6 style="color: #BF2C45">{{ $message }}</h6>
                            @enderror
                            @foreach ($metode as $item)
                                <div>
                                    <input type="checkbox" name="metode[]" value="{{ $item->id_metode }}">
                                    <label style="font-weight: normal;">{{ $item->nama_metode }}</label>
                                </div>
                            @endforeach
                        </div>

                        <div class="form-group">
                            <label>Penugasan</label>
                            @error('penugasan')
                            <h6 style="color: #BF2C45">{{ $message }}</h6>
                            @enderror
                            <textarea rows="3" name="penugasan" class="form-control" placeholder="Penugasan"
                                value="{{ $minggu_rps->penugasan }}">{{ old('penugasan') ? old('penugasan') : $minggu_rps->penugasan }}</textarea>
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
                                <option value="{{ $item }}"{{ ($minggu_rps->luring ?? 1) == $item ? 'selected' : '' }}>{{ $opsi[$loop->index] }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Media Pembelajaran</label>
                            @error('id_media')
                            <h6 style="color: #BF2C45">{{ $message }}</h6>
                            @enderror
                            <select name="id_media" id='id_media' class="form-select">
                                <option value="" selected disabled>-- Pilih Media Pembelajaran --</option>
                                @foreach ($media as $item)
                                <option value="{{ $item->id_media }}" {{ $item->id_media ==  $minggu_rps->id_media ? 'selected' : ''}}>
                                    {{ $item->nama_media }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Waktu Pembelajaran</label>
                            @error('waktuPembelajaran')
                            <h6 style="color: #BF2C45">{{ $message }}</h6>
                            @enderror
                            <textarea rows="3" name="waktuPembelajaran" class="form-control"
                                placeholder="Waktu Pembelajaran"
                                value="{{ $minggu_rps->waktuPembelajaran }}">{{ old('indikatorPembelajaran') ? old('indikatorPembelajaran') : $minggu_rps->waktuPembelajaran }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Pengalaman Belajar</label>
                            @error('pengalaman_belajar')
                            <h6 style="color: #BF2C45">{{ $message }}</h6>
                            @enderror
                            <textarea rows="3" name="pengalaman_belajar" class="form-control"
                                placeholder="Pengalaman Belajar"
                                value="{{ $minggu_rps->pengalaman_belajar }}">{{ old('pengalaman_belajar') ? old('pengalaman_belajar') : $minggu_rps->pengalaman_belajar }}</textarea>
                        </div>

                        {{-- <div class="form-group">
                            <label>Kriteria Penilaian</label>
                            @error('id_kriteria_penilaians')
                            <h6 style="color: #BF2C45">{{ $message }}</h6>
                            @enderror
                            <select name="id_kriteria_penilaians" id='id_kriteria_penilaians' class="form-select">
                                <option value="" selected disabled>-- Pilih Kriteria Penilaian --</option>
                                @foreach ($kriteria as $item)
                                <option value="{{ $item->id_kriteria_penilaians }}"
                                    {{ $item->id_kriteria_penilaians ==  $minggu_rps->id_kriteria_penilaians ? 'selected' : ''}}>
                                    {{ $item->nama_kriteria_penilaians }}</option>
                                @endforeach
                            </select>
                        </div> --}}

                        <div class="form-group">
                            <label>Bobot Nilai</label>
                            @error('bobot_nilai')
                            <h6 style="color: #BF2C45">{{ $message }}</h6>
                            @enderror
                            <input type="text" name="bobot_nilai" class="form-control" placeholder="Bobot Nilai"
                                value="{{ $minggu_rps->bobot_nilai }}">
                        </div>
                        <div id="dynamicAddRemove">
                            <div class="d-flex justify-content-between mb-2">
                                <label>Referensi</label>
                                <button type="button" name="add" id="dynamic-ar" class="btn btn-success btn-sm"><i
                                        class="bi bi-plus-square"></i> Tambah</button>
                            </div>
                            <div class="form-group">
                                @error('judul_pustaka')
                                <h6 style="color: #BF2C45">{{ $message }}</h6>
                                @enderror
                                <select name="pustaka[0][judul]" id="judul_pustaka" class="form-select mb-1">
                                    <option value="" selected disabled>-- Pilih Pustaka --</option>
                                    @foreach ($pustaka as $item)
                                    <option value="{{ $item->id_pustaka }}">{{ $item->judul }}</option>
                                    @endforeach
                                </select>
                                @error('referensi_pustaka')
                                <h6 style="color: #BF2C45">{{ $message }}</h6>
                                @enderror
                                <textarea rows="3" name="pustaka[0][referensi]" id="referensi_pustaka" class="form-control"
                                    placeholder="Keterangan Pustaka" value=""></textarea>
                            </div>
                        </div>


                        <!-- JavaScript -->
                        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                        <script
                            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js">
                        </script>
                        <script type="text/javascript">
                            var i = 0;
                            $("#dynamic-ar").click(function () {
                                ++i;
                                $("#dynamicAddRemove").append(
                                    '<div class="dynamic"><div class="d-flex justify-content-end"><button type="button" class="btn btn-outline-danger remove-input-field mb-2">Delete</button></div><td><select name="pustaka[' + i + '][judul]" id="judul_pustaka" class="form-select mb-1"><option value="" selected disabled>-- Pilih Pustaka --</option>@foreach ($pustaka as $item)<option value="{{ $item->id_pustaka }}">{{ $pustaka[$loop->index]->judul }}</option>@endforeach</select></td><td><textarea rows="3" name="pustaka[' + i + '][referensi]" class="form-control mb-3" placeholder="Keterangan Pustaka" value=""></textarea></td></div>'
                                );
                            });
                            $(document).on('click', '.remove-input-field', function () {
                                $(this).parents('.dynamic').remove();
                            });

                        </script>

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
