@extends('layout.dashboard')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah CPL Prodi</h6>
            {{-- <a href="/tambahpl" class="float-right btn btn-sm btn-dark"><i
        class="fa fa-fw fa-plus-circle"></i> Tambah PL</a> --}}
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form method="post" action="{{ route('kurikulum.data.store_cpl_prodi') }}">
                    @csrf
                    <div class="form-group">
                        <label>Kode CPL Prodi</label>
                        @error('kodeCPL')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror

                        {{-- <input type="text" name="kodeCPL" class="form-control" placeholder="Kode CPL Prodi"
                            pattern="[A-Z0-9]+" maxlength="10" minlength="4"
                            title="Harap masukkan huruf besar dan angka saja"
                            oninput="this.value = this.value.toUpperCase(); this.value = this.value.replace(/[^A-Z0-9]/g, '')"> --}}
                        <input type="text" name="kodeCPL" class="form-control"
                            placeholder="Kode CPL Prodi (Masukkan huruf besar dan angka saja))" pattern="[A-Z0-9-]+"
                            maxlength="10" minlength="4" title="Harap masukkan huruf besar dan angka saja"
                            oninput="updateInput(this);" value="LO-">
                    </div>

                    <div class="form-group">
                        <label>Deskripsi CPL Prodi</label>
                        @error('deskripsiCPL')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <textarea name="deskripsiCPL" rows="3" class="form-control" placeholder="Deskripsi CPL Prodi"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Referensi CPL Prodi</label>
                        @error('referensiCPL')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="referensiCPL" class="form-control" placeholder="Referensi CPL Prodi">
                    </div>

                    <div class="form-group pt-4">
                        <button type="submit" name="submit" value="submit" id="submit" class="btn btn-dark btn-sm"><i
                                class="fa fa-fw fa-plus-circle"></i>
                            Tambah CPL</button>
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
