@extends('layout.dashboard')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Profil Lulusan</h6>
            {{-- <a href="/tambahpl" class="float-right btn btn-sm btn-dark"><i
            class="fa fa-fw fa-plus-circle"></i> Tambah PL</a> --}}
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form method="post" action="{{ route('kurikulum.data.update_pl', $pl->kodePL) }}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label>Kode Profil Lulusan (Kode PL)</label>
                        @error('kodePL')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror

                        <input type="text" name="kodePL" class="form-control"
                            placeholder="Kode Profil Lulusan (Masukkan huruf besar dan angka saja))" pattern="[A-Z0-9-]+"
                            maxlength="10" minlength="4" title="Harap masukkan huruf besar dan angka saja"
                            oninput="updateInput(this);" value="{{ old('kodePL') ? old('kodePL') : $pl->kodePL }}">
                    </div>

                    <div class="form-group">
                        <label>Deskripsi Profil Lulusan</label>
                        @error('deskripsiPL')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <textarea name="deskripsiPL" rows="3" class="form-control" placeholder="Deskripsi Profil Lulusan">{{ old('deskripsiPL') ? old('deskripsiPL') : $pl->deskripsiPL }}</textarea>
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
