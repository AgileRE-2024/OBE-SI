@extends('layout.dashboard')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah CPMK</h6>
            {{-- <a href="/tambahpl" class="float-right btn btn-sm btn-dark"><i
    class="fa fa-fw fa-plus-circle"></i> Tambah PL</a> --}}
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form action="{{ route('kurikulum.data.store_cpmk') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="kodeCPL">Kode CPL</label>
                        @error('kodeCPL')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <select name="kodeCPL" id="kodeCPL" class="form-select" onchange="onCplSelected(this)">
                            <option value="" selected disabled>-- Pilih CPL Prodi --</option>
                            @foreach ($cplps as $cplp)
                                <option value="{{ $cplp->kodeCPL }}" level-limit="{{ $cplp->levelCPL }}"
                                    level-name="{{ optional($cplp->lo)->names }}">
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
                        {{-- <input type="text" name="kodeCPMK" class="form-control" placeholder="Kode CPMK"
                            title="Misal CPMK001" pattern="[A-Z0-9]+" minlength="4" maxlength="10"> --}}
                        <input type="text" id="kodeCPMK" name="kodeCPMK" class="form-control"
                            placeholder="Kode CPMK (Masukkan huruf besar dan angka saja))" pattern="[A-Z0-9-]+"
                            maxlength="10" minlength="4" title="Harap masukkan huruf besar dan angka saja"
                            oninput="updateInput(this);" value="CPMK">
                    </div>

                    <div class="form-group">
                        <label for="cplLevel">Level CPL</label>
                        <input type="text" id="cplLevel" name="cplLevel" class="form-control" disabled
                            value="Level CPL">
                    </div>

                    <div class="form-group">
                        <label for="levelCPMK">Level CPMK</label>
                        <select name="levelCPMK" class="form-control" id="levelCPMK" disabled
                            onchange="toggleDescription()">
                            <option disabled selected>-- Pilih Level --</option>
                            @foreach ($los as $lo)
                                <option value="{{ $lo->id }}">{{ $lo->names }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="deskripsiCPMK">Deskripsi CPMK</label>
                        <textarea name="deskripsiCPMK" rows="3" class="form-control" placeholder="Deskripsi CPMK" id="deskripsiCPMK"
                            disabled></textarea>
                        <p id="errorText" style="color: #BF2C45; display: none;">Deskripsi harus mengandung setidaknya satu
                            kata kerja yang sesuai dengan level yang dipilih.</p>
                    </div>

                    <div class="form-group pt-4">
                        <button type="submit" class="btn btn-dark btn-sm" id="submitButton" disabled><i
                                class="fa fa-fw fa-plus-circle"></i>Tambah CPMK</button>
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
