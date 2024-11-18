@extends('layout.dashboard')

@section('content')

<div class="content px-4">
    <div class="card border" style="background-color: white">
        <div class="card-body" style="font-weight:600;">
            <h3>Tambah Kata Kerja Level LO</h3>
            <form action="{{ route('kurikulum.data.store_learning_outcome') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="kode">Kode</label>
                    <select class="form-control" id="level_LO" name="level_LO" required onchange="updateCognitiveLevel()">
                        <option value="">Pilih Kode</option>
                        <option value="LO-1">LO-1</option>
                        <option value="LO-2">LO-2</option>
                        <option value="LO-3">LO-3</option>
                        <option value="LO-4">LO-4</option>
                        <option value="LO-5">LO-5</option>
                        <option value="LO-6">LO-6</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="cognitive_level">Cognitive Level</label>
                    <input type="text" class="form-control" id="cognitive_level" name="cognitive_level" required readonly>
                </div>
                <div class="form-group">
                    <label for="kata_kerja">Kata Kerja</label>
                    <input type="text" class="form-control" id="kata_kerja" name="kata_kerja" required>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>

<script>
    function updateCognitiveLevel() {
        var kode = document.getElementById('level_LO').value;
        var cognitiveLevel = document.getElementById('cognitive_level');

        switch(kode) {
            case 'LO-1':
                cognitiveLevel.value = 'Remembering';
                break;
            case 'LO-2':
                cognitiveLevel.value = 'Understanding';
                break;
            case 'LO-3':
                cognitiveLevel.value = 'Applying';
                break;
            case 'LO-4':
                cognitiveLevel.value = 'Analyzing';
                break;
            case 'LO-5':
                cognitiveLevel.value = 'Evaluating';
                break;
            case 'LO-6':
                cognitiveLevel.value = 'Creating';
                break;
            default:
                cognitiveLevel.value = '';
                break;
        }
    }
</script>

@endsection