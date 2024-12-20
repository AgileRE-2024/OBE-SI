@extends('layout.dashboard')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Sub CPMK</h6>
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form method="post" action="{{ route('kurikulum.data.update_sub_cpmk', $subcpmk->kodeSubCPMK) }}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="kodeCPMK">Kode CPMK</label>
                        @error('kodeCPMK')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <select name="kodeCPMK" id="kodeCPMK" class="form-select" onchange="onCPMKSelected(this)">
                            @foreach ($cpmks as $cpmk)
                                <option value="{{ $cpmk->kodeCPMK }}" level-limit="{{ $cpmk->levelCPMK }}"
                                    level-name="{{ optional($cpmk->lo)->names }}"
                                    {{ old('kodeCPL', $subcpmk->kodeSubCPMK) == $cpmk->kodeCPMK ? 'selected' : '' }}>
                                    {{ $cpmk->kodeCPMK }} - {{ Illuminate\Support\Str::limit($cpmk->deskripsiCPMK, 40) }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="kodeSubCPMK">Kode Sub CPMK</label>
                        @error('kodeSubCPMK')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="kodeSubCPMK" id="kodeSubCPMK" class="form-control"
                            placeholder="Kode Sub CPMK (Masukkan huruf besar, huruf kecil, dan angka saja)"
                            pattern="[a-zA-Z0-9-]+" maxlength="12" minlength="4"
                            title="Harap masukkan huruf besar, huruf kecil, dan angka saja" oninput="updateInput(this);"
                            value="{{ old('kodeSubCPMK', $subcpmk->kodeSubCPMK) }}">
                    </div>

                    <div class="form-group">
                        <label for="cplLevel">Level CPMK</label>
                        <input type="text" id="cplLevel" name="cplLevel" class="form-control" disabled
                            value="{{ optional($subcpmk->CPMK->lo)->names }}">
                    </div>

                    <div class="form-group">
                        <label for="levelSubCPMK">Level Sub CPMK</label>
                        <select name="levelSubCPMK" class="form-control" id="levelSubCPMK">
                            @if ($subcpmk->levelSubCPMK == null)
                                <option disabled selected>-- Pilih Level --</option>
                            @endif
                            @foreach ($los as $lo)
                                <option value="{{ $lo->id }}"
                                    {{ old('levelCPMK', $subcpmk->levelSubCPMK) == $lo->id ? 'selected' : '' }}>
                                    {{ $lo->names }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="deskripsiSubCPMK">Deskripsi Sub CPMK</label>
                        @error('deskripsiSubCPMK')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <textarea name="deskripsiSubCPMK" row="3" class="form-control" placeholder="Deskripsi Sub CPMK"
                            id="deskripsiSubCPMK">{{ $subcpmk->deskripsiSubCPMK }}</textarea>
                        <p id="errorText" style="color: #BF2C45; display: none;">Deskripsi harus mengandung setidaknya satu
                            kata kerja yang sesuai dengan level yang dipilih.</p>
                    </div>

                    <div class="form-group">
                        <label for="kriteriaPenilaian">Kriteria Penilaian</label>
                        @error('kriteriaPenilaian')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <textarea name="kriteriaPenilaian" row="3" class="form-control" placeholder="Kriteria Penilaian"
                            id="kriteriaPenilaian">{{ $subcpmk->kriteriaPenilaian }}</textarea>
                        <p id="errorKriteriaText" style="color: #BF2C45; display: none;">Kriteria harus mengandung
                            setidaknya satu kata kerja yang sesuai dengan level yang dipilih.</p>

                    </div>

                    <div class="form-group">
                        <label for="indikatorPenliaian">Indikator Penilaian</label>
                        @error('indikatorPenilaian')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <textarea name="indikatorPenilaian" row="3" class="form-control" placeholder="Indikator Penilaian"
                            id="indikatorPenilaian" disable>{{ $subcpmk->indikatorPenilaian }}</textarea>
                        <p id="errorIndikatorText" style="color: #BF2C45; display: none;">Indikator harus mengandung
                            setidaknya satu kata kerja yang sesuai dengan level yang dipilih.</p>

                    </div>

                    <div class="form-group pt-4">
                        <button type="submit" name="submit" value="submit" id="submitButton"
                            class="btn btn-dark btn-sm"><i class="fa fa-fw fa-plus-circle"></i>Edit Sub CPMK</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const verbsPerLevel = @json($verbsPerLevel);
    </script>

    <script src="{{ asset('assets/js/subcpmk_validation.js') }}"></script>
@endsection
