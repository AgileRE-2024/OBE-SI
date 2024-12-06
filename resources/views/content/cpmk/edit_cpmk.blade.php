@extends('layout.dashboard')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit CPMK</h6>
            {{-- <a href="/tambahpl" class="float-right btn btn-sm btn-dark"><i
    class="fa fa-fw fa-plus-circle"></i> Tambah PL</a> --}}
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form action="{{ route('kurikulum.data.update_cpmk', $old_cpmk->kodeCPMK) }}" method="POST">
                    @csrf
                    @method('put')

                    <div class="form-group">
                        <label for="kodeCPL">Kode CPL</label>
                        @error('kodeCPL')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <select name="kodeCPL" id="kodeCPL" class="form-select" onchange="onCplSelected(this)">
                            @foreach ($cplps as $cplp)
                                <option value="{{ $cplp->kodeCPL }}" level-limit="{{ $cplp->levelCPL }}"
                                    level-name="{{ optional($cplp->lo)->names }}"
                                    {{ old('kodeCPL', $old_cpmk->kodeCPL) == $cplp->kodeCPL ? 'selected' : '' }}>
                                    {{ $cplp->kodeCPL }} - {{ Illuminate\Support\Str::limit($cplp->deskripsiCPL, 40) }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="kodeCPMK">Kode CPMK</label>
                        @error('kodeCPMK')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" id="kodeCPMK" name="kodeCPMK" class="form-control"
                            placeholder="Kode CPMK (Masukkan huruf besar dan angka saja))" pattern="[A-Z0-9-]+"
                            maxlength="10" minlength="4" title="Harap masukkan huruf besar dan angka saja"
                            value="{{ old('kodeCPMK', $old_cpmk->kodeCPMK) }}" oninput="updateInput(this);">
                    </div>

                    <div class="form-group">
                        <label for="cplLevel">Level CPL</label>
                        <input type="text" id="cplLevel" name="cplLevel" class="form-control" disabled
                            value="{{ $old_cpmk->CPL->lo->names }}">
                    </div>

                    <div class="form-group">
                        <label for="levelCPMK">Level CPMK</label>
                        <select name="levelCPMK" class="form-control" id="levelCPMK" onchange="toggleDescription()">
                            @if ($old_cpmk->levelCPMK == null)
                                <option disabled selected>-- Pilih Level --</option>
                            @endif
                            @foreach ($los as $lo)
                                <option value="{{ $lo->id }}"
                                    {{ old('levelCPMK', $old_cpmk->levelCPMK) == $lo->id ? 'selected' : '' }}>
                                    {{ $lo->names }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="deskripsiCPMK">Deskripsi CPMK</label>
                        <textarea name="deskripsiCPMK" rows="3" class="form-control" placeholder="Deskripsi CPMK" id="deskripsiCPMK">{{ $old_cpmk->deskripsiCPMK }}</textarea>
                        <p id="errorText" style="color: #BF2C45; display: none;">Deskripsi harus mengandung setidaknya satu
                            kata kerja yang sesuai dengan level yang dipilih.</p>
                    </div>

                    <div class="form-group pt-4">
                        <button type="submit" name="submit" value="submit" id="submit" class="btn btn-dark btn-sm"><i
                                class="fa fa-fw fa-plus-circle"></i>
                            Edit CPMK</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        const verbsPerLevel = @json($verbsPerLevel);
    </script>

    <script src="{{ asset('assets/js/cpmk_validation.js') }}"></script>
@endsection
