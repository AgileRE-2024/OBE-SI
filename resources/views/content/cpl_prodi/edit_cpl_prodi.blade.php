@extends('layout.dashboard')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit CPL Prodi</h6>
            {{-- <a href="/tambahpl" class="float-right btn btn-sm btn-dark"><i
        class="fa fa-fw fa-plus-circle"></i> Tambah PL</a> --}}
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form method="post" action="{{ route('kurikulum.data.update_cpl_prodi', $cpl->kodeCPL) }}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label>Kode CPL Prodi</label>
                        @error('kodeCPL')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="kodeCPL" class="form-control"
                            placeholder="Kode CPL Prodi (Masukkan huruf besar dan angka saja))" pattern="[A-Z0-9-]+"
                            maxlength="10" minlength="4" title="Harap masukkan huruf besar dan angka saja"
                            oninput="updateInput(this);" value="{{ old('kodeCPL') ? old('kodeCPL') : $cpl->kodeCPL }}">
                    </div>

                    <div class="form-group">
                        <label for="cplLevel">Level</label>
                        <select name="cplLevel" class="form-control" id="cplLevel" onchange="toggleDescription()">
                            <option value="" disabled selected>Pilih Level</option>
                            @foreach ($levels as $level)
                                <option value="{{ old('cplLevel') ? old('cplLevel') : $level }}">{{ $level }}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="form-group">
                        <label for="deskripsiCPL">Deskripsi CPL Prodi</label>
                        <textarea name="deskripsiCPL" rows="3" class="form-control" placeholder="Deskripsi CPL Prodi" id="deskripsiCPL" disabled>{{ old('deskripsiCPL') ? old('deskripsiCPL') : $cpl->deskripsiCPL }}</textarea>
                        <p id="errorText" style="color: #BF2C45; display: none;">Deskripsi harus mengandung setidaknya satu kata kerja yang sesuai dengan level yang dipilih.</p>
                    </div>

                    <div class="form-group">
                        <label>Referensi CPL Prodi</label>
                        @error('referensiCPL')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="referensiCPL" class="form-control" placeholder="Referensi CPL Prodi"
                            value="{{ old('referensiCPL') ? old('referensiCPL') : $cpl->referensiCPL }}">
                    </div>

                    <div class="form-group pt-4">
                        <button type="submit" class="btn btn-dark btn-sm" id="submitButton" disabled><i
                                class="fa fa-fw fa-plus-circle"></i>Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
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

        const verbsByLevel = {
            "B-I Mengingat": ["pilih", "temukan", "tunjukkan", "ingat", "sebutkan", "apa", "siapa", "milih"],
            "B-II Memahami": ["klasifikasi", "bandingkan", "demonstrasi", "uraikan", "terangkan", "ringkas"],
            "B-III Menerapkan": ["terapkan", "bangun", "pilih", "buat", "rencanakan", "gunakan"],
            "B-IV Menganalisis": ["analisis", "klasifikasikan", "identifikasi", "teliti", "uraikan", "struktur"],
            "B-V Mengevaluasi": ["nilai", "evaluasi", "tentukan", "uji", "bandingkan", "kritik"],
            "B-VI Menciptakan": ["cipta", "desain", "rumuskan", "kembangkan", "susun", "prediksi"]
        };

        function updateInput(input) {
            input.value = input.value.toUpperCase().replace(/[^A-Z0-9-]/g, '');
        }

        function toggleDescription() {
            const dropdown = document.getElementById('cplLevel');
            const description = document.getElementById('deskripsiCPL');
            const submitButton = document.getElementById('submitButton');

            if (dropdown.value) {
                description.disabled = false;
                submitButton.disabled = false;
            } else {
                description.disabled = true;
                submitButton.disabled = true;
            }
        }

        document.getElementById('cplLevel').addEventListener('change', validateDescription);
        document.getElementById('deskripsiCPL').addEventListener('input', validateDescription);

        function validateDescription() {
            const level = document.getElementById('cplLevel').value;
            const description = document.getElementById('deskripsiCPL').value.toLowerCase();
            const submitButton = document.getElementById('submitButton');
            const errorText = document.getElementById('errorText');

            if (!level) return;

            const validVerbs = verbsByLevel[level];
            const hasValidVerb = validVerbs.some(verb => description.includes(verb));

            if (hasValidVerb) {
                errorText.style.display = 'none';
                submitButton.disabled = false;
            } else {
                errorText.style.display = 'block';
                submitButton.disabled = true;
            }
        }
    </script>
@endsection
