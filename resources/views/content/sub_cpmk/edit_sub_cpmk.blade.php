@extends('layout.dashboard')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Sub CPMK</h6>
            {{-- <a href="/tambahpl" class="float-right btn btn-sm btn-dark"><i
        class="fa fa-fw fa-plus-circle"></i> Tambah PL</a> --}}
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form method="post" action="{{ route('kurikulum.data.update_sub_cpmk', $subcpmk->kodeSubCPMK) }}">
                    @csrf
                    @method('put')

                    <div class="form-group">
                        <label>Kode CPMK</label>
                        @error('kodeCPMK')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <select name="kodeCPMK" class="form-select">
                            <option value="" selected disabled>-- Pilih CPMK --</option>
                            @foreach ($cpmks as $cpmk)
                                <option value="{{ $cpmk->kodeCPMK }}" @if ($subcpmk->kodeCPMK == $cpmk->kodeCPMK) selected @endif>
                                    {{ $cpmk->kodeCPMK }} - {{ Illuminate\Support\Str::limit($cpmk->deskripsiCPMK, 40) }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Kode Sub CPMK</label>
                        @error('kodeSubCPMK')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        {{-- <input type="text" name="kodeSubCPMK" class="form-control" placeholder="Kode Sub CPMK"
                            value="{{ old('kodeSubCPMK') ? old('kodeSubCPMK') : $subcpmk->kodeSubCPMK }}"
                            pattern="[A-Z0-9]+" minlength="4" maxlength="10"> --}}
                        <input type="text" name="kodeSubCPMK" class="form-control"
                            placeholder="Kode Sub CPMK (Masukkan huruf besar, huruf kecil, dan angka saja)"
                            pattern="[a-zA-Z0-9-]+" maxlength="12" minlength="4"
                            title="Harap masukkan huruf besar, huruf kecil, dan angka saja" oninput="updateInput(this);"
                            value="{{ old('kodeSubCPMK') ? old('kodeSubCPMK') : $subcpmk->kodeSubCPMK }}">
                    </div>

                    <div class="form-group">
                        <label>Deskripsi Sub CPMK</label>
                        @error('deskripsiSubCPMK')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <textarea name="deskripsiSubCPMK" row="3" class="form-control" placeholder="Deskripsi Mata Kuliah">{{ old('deskripsiSubCPMK') ? old('deskripsiSubCPMK') : $subcpmk->deskripsiSubCPMK }}</textarea>
                    </div>

                    <div class="form-group pt-4">
                        <button type="submit" name="submit" value="submit" id="submit" class="btn btn-dark btn-sm"><i
                                class="fa fa-fw fa-plus-circle"></i>
                            Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function updateInput(input) {
            var newValue = input.value.replace(/[^a-zA-Z0-9-]/g, '');

            // Terapkan validasi minlength secara manual jika diperlukan
            if (newValue.length >= 4) {
                input.setCustomValidity('');
            } else {
                input.setCustomValidity('Panjang minimal adalah 4 karakter');
            }

            input.value = newValue;
        }
    </script>
@endsection
