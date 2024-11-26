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
                            oninput="updateInput(this);">
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

        function onCplSelected(selectElement) {
            const selectedOption = selectElement.options[selectElement.selectedIndex];
            const levelCPL = selectedOption.getAttribute('level-limit');
            const levelCPLName = selectedOption.getAttribute('level-name');
            const cplLevelInput = document.getElementById('cplLevel');
            const levelCPMKDropdown = document.getElementById('levelCPMK'); // Ensure this ID matches the dropdown

            // Update the displayed levelCPL
            cplLevelInput.value = levelCPLName || '';

            // Filter options in levelCPMK dropdown
            const levelCPLValue = parseInt(levelCPL, 10); // Convert to integer
            Array.from(levelCPMKDropdown.options).forEach(option => {
                const optionValue = parseInt(option.value, 10);
                if (!isNaN(optionValue) && optionValue > levelCPLValue) {
                    option.style.display = 'none'; // Hide options with higher IDs
                } else {
                    option.style.display = 'block'; // Show valid options
                }
            });

            levelCPMKDropdown.disabled = false; // Enable the dropdown

            // Reset the selected value if it becomes invalid
            if (levelCPMKDropdown.value && parseInt(levelCPMKDropdown.value, 10) > levelCPLValue) {
                levelCPMKDropdown.value = '';
            }
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

        function toggleDescription() {
            const dropdown = document.getElementById("cplLevel");
            const description = document.getElementById("deskripsiCPMK");
            const submitButton = document.getElementById("submitButton");

            if (dropdown.value) {
                description.disabled = false;
                submitButton.disabled = false;
            } else {
                description.disabled = true;
                submitButton.disabled = true;
            }
        }

        document
            .getElementById("levelCPMK")
            .addEventListener("change", validateDescription);
        document
            .getElementById("deskripsiCPMK")
            .addEventListener("input", validateDescription);

        function validateDescription() {
            const level = document.getElementById("levelCPMK").value;
            const description = document
                .getElementById("deskripsiCPMK")
                .value.toLowerCase();
            const submitButton = document.getElementById("submitButton");
            const errorText = document.getElementById("errorText");

            if (!level) return;

            const validVerbs = verbsPerLevel[level] || [];
            const hasValidVerb = validVerbs.some((verb) =>
                description.includes(verb.toLowerCase()),
            );

            if (hasValidVerb) {
                errorText.style.display = "none";
                submitButton.disabled = false;
            } else {
                errorText.style.display = "block";
                submitButton.disabled = true;
            }
        }
    </script>
@endsection
