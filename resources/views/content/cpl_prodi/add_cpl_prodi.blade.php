@extends('layout.dashboard')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah CPL Prodi</h6>
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form method="post" action="{{ route('kurikulum.data.store_cpl_prodi') }}" id="cplForm">
                    @csrf
                    <div class="form-group">
                        <label for="kodeCPL">Kode CPL Prodi</label>
                        <input type="text" name="kodeCPL" class="form-control"
                               placeholder="Kode CPL Prodi (Masukkan huruf besar dan angka saja)" pattern="[A-Z0-9-]+"
                               maxlength="10" title="Harap masukkan huruf besar dan angka saja"
                               oninput="updateInput(this);" value="LO-">
                    </div>

                    <div class="form-group">
    <label for="cplLevel">Level</label>
    <select name="levelCPL" class="form-control" id="cplLevel" onchange="toggleDescription()">
        <option disabled selected>Pilih Level</option>
        @foreach ($levels as $level)
            <option value="{{ $level }}">{{ $level }}</option>
        @endforeach
    </select>
</div>

                    <div class="form-group">
                        <label for="deskripsiCPL">Deskripsi CPL Prodi</label>
                        <textarea name="deskripsiCPL" rows="3" class="form-control" placeholder="Deskripsi CPL Prodi" id="deskripsiCPL" disabled></textarea>
                        <p id="errorText" style="color: #BF2C45; display: none;">Deskripsi harus mengandung setidaknya satu kata kerja yang sesuai dengan level yang dipilih.</p>
                    </div>

                    <div class="form-group">
                        <label>Referensi CPL Prodi</label>
                        @error('referensiCPL')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="referensiCPL" class="form-control" placeholder="Referensi CPL Prodi">
                    </div>

                    <div class="form-group pt-4">
                        <button type="submit" class="btn btn-dark btn-sm" id="submitButton" disabled><i
                                class="fa fa-fw fa-plus-circle"></i>Tambah CPL</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const verbsByLevel = @json($verbsByLevel);

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

            const validVerbs = verbsByLevel[level] || [];
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
