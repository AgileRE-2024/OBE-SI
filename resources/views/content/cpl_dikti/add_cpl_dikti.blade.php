@extends('layout.dashboard')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah CPL SN Dikti</h6>
            {{-- <a href="/tambahpl" class="float-right btn btn-sm btn-dark"><i
    class="fa fa-fw fa-plus-circle"></i> Tambah PL</a> --}}
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form action="{{ route('kurikulum.data.store_cpl_dikti') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Kode CPL SN Dikti</label>
                        @error('kodeCPLSN')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        {{-- <input type="text" name="kodeCPLSN" class="form-control" placeholder="Kode CPL SN Dikti"> --}}
                        <input type="text" name="kodeCPLSN" class="form-control"
                            placeholder="Kode CPL SN Dikti (Masukkan huruf besar dan angka saja))" pattern="[A-Z0-9-]+"
                            maxlength="10" minlength="4" title="Harap masukkan huruf besar dan angka saja"
                            oninput="updateInput(this);" value="CPL-">
                    </div>

                    <div class="form-group">
                        <label>Deskripsi CPL SN Dikti</label>
                        @error('deskripsiSN')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <textarea name="deskripsiSN" row="3" class="form-control" placeholder="Deskripsi CPL SN Dikti"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Sumber</label>
                        @error('sumberSN')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="sumberSN" class="form-control" placeholder="Sumber CPL SN Dikti">
                    </div>

                    <div class="form-group">
                        <label>Kategori CPL SN Dikti</label>
                        @error('kategoriSN')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <select name="kategoriSN" id='kategoriSN' class="form-select">
                            <option value="" selected disabled>-- Pilih Kategori CPL --
                            </option>
                            <option value="1">Wajib</option>
                            <option value="2">Pilihan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Jenis CPL SN Dikti</label>
                        @error('jenisSN')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <select name="jenisSN" id='jenisSN' class="form-select">
                            <option value="" selected disabled>-- Pilih Jenis CPL --</option>
                            <option value="Sikap">Sikap</option>
                            <option value="Keterampilan Umum">Keterampilan Umum</option>
                            <option value="Keterampilan Khusus">Keterampilan Khusus</option>
                            <option value="Pengetahuan">Pengetahuan</option>
                        </select>
                    </div>

                    <div class="form-group pt-4">
                        <button type="submit" name="submit" value="submit" id="submit" class="btn btn-dark btn-sm"><i
                                class="fa fa-fw fa-plus-circle"></i>
                            Tambah CPL SN Dikti</button>
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
