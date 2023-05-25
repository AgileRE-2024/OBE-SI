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
                <form action="{{ route('kurikulum.data.update_cpl_dikti', $cpl->kodeCPLSN) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label>Kode CPL SN Dikti</label>
                        @error('kodeCPLSN')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="kodeCPLSN" class="form-control" placeholder="Kode CPL SN Dikti"
                            value="{{ old('kodeCPLSN') ? old('kodeCPLSN') : $cpl->kodeCPLSN }}">
                    </div>

                    <div class="form-group">
                        <label>Deskripsi CPL SN Dikti</label>
                        @error('deskripsiSN')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <textarea name="deskripsiSN" row="3" class="form-control" placeholder="Deskripsi CPL SN Dikti">{{ old('deskripsiSN') ? old('deskripsiSN') : $cpl->deskripsiSN }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Sumber</label>
                        @error('sumberSN')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="sumberSN" class="form-control" placeholder="Sumber CPL SN Dikti"
                            value="{{ old('sumberSN') ? old('sumberSN') : $cpl->sumberSN }}">
                    </div>

                    <div class="form-group">
                        <label>Kategori CPL SN Dikti</label>
                        @error('kategoriSN')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <select name="kategoriSN" id='kategoriSN' class="form-select">
                            <option value="" selected disabled>-- Pilih Kategori CPL --
                            </option>
                            <option value="1" @if ($cpl->kategoriSN == 1) selected @endif>Wajib</option>
                            <option value="2" @if ($cpl->kategoriSN == 2) selected @endif>Pilihan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Jenis CPL SN Dikti</label>
                        @error('jenisSN')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <select name="jenisSN" id='jenisSN' class="form-select">
                            <option value="" selected disabled>-- Pilih Jenis CPL --</option>
                            <option value="Sikap" @if ($cpl->jenisSN == 'Sikap') selected @endif>Sikap</option>
                            <option value="Keterampilan Umum" @if ($cpl->jenisSN == 'Keterampilan Umum') selected @endif>Keterampilan
                                Umum</option>
                            <option value="Keterampilan Khusus" @if ($cpl->jenisSN == 'Keterampilan Khusus') selected @endif>
                                Keterampilan Khusus</option>
                            <option value="Pengetahuan" @if ($cpl->jenisSN == 'Pengetahuan') selected @endif>Pengetahuan
                            </option>
                        </select>
                    </div>

                    <div class="form-group pt-4">
                        <button type="submit" name="submit" value="submit" id="submit" class="btn btn-dark btn-sm"><i
                                class="fa fa-fw fa-plus-circle"></i>
                            Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
