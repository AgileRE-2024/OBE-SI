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
                            @foreach ($cplp as $list_cplp)
                                <option value="{{ $list_cplp->kodeCPL }}" data-level="{{ $list_cplp->levelCPL }}">
                                    {{ $list_cplp->kodeCPL }} -
                                    {{ Illuminate\Support\Str::limit($list_cplp->deskripsiCPL, 40) }}
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
                            oninput="updateInput(this);">
                    </div>

                    <div class="form-group">
                        <label for="cplLevel">Level CPL</label>
                        <input type="text" id="cplLevel" name="cplLevel" class="form-control" pattern="[A-Z0-9-]+"
                            maxlength="10" minlength="4" disabled value="Level CPL">
                    </div>

                    <div class="form-group">
                        <label for="cplLevel">Level CPMK</label>
                        <select name="levelCPL" class="form-control" id="cplLevel" onchange="toggleDescription()">
                            <option disabled selected>-- Pilih Level --</option>
                            @foreach ($levels as $level)
                                <option value="{{ $level }}">{{ $level }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Deskripsi CPMK</label>
                        @error('deskripsi')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <textarea name="deskripsi" row="3" class="form-control" placeholder="Deskripsi CPMK"></textarea>
                    </div>

                    <div class="form-group pt-4">
                        <button type="submit" name="submit" value="submit" id="submit" class="btn btn-dark btn-sm"><i
                                class="fa fa-fw fa-plus-circle"></i>
                            Tambah CPMK</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function onCplSelected(selectElement) {
            const selectedOption = selectElement.options[selectElement.selectedIndex];
            const levelCPL = selectedOption.getAttribute('data-level');
            const cplLevelInput = document.getElementById('cplLevel');
            cplLevelInput.value = levelCPL || ''; // Set the levelCPL value or clear if not set
        }

        function updateInput(input) {
            var uppercaseValue = input.value.toUpperCase().replace(/[^A-Z0-9-]/g, '');

            // Terapkan validasi minlength secara manual jika diperlukan
            if (uppercaseValue.length >= 4) {
                input.setCustomValidity('');
            } else {
                input.setCustomValidity('Panjang minimal adalah 4 karakter');
            }

            input.value = uppercaseValue;
        }
    </script>
@endsection
