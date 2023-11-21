@extends('layout.dashboard')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Prodi</h6>
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form method="post" action="{{ route('manajemen.edit_prodi', $pd->id) }}">
                    @csrf
                    <div class="form-group">
                        <label>Nama Prodi</label>
                        @error('namaProdi')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="namaProdi" class="form-control" placeholder="Nama Prodi" value="{{ old('namaProdi') ?? $pd->namaProdi }}">
                    </div>

                    <div class="form-group">
                        <label>Fakultas</label>
                        @error('fakultas')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="fakultas" class="form-control" placeholder="Fakultas" value="{{ old('fakultas') ?? $pd->fakultas }}">
                    </div>

                    <div class="form-group">
                        <label>Nama PT</label>
                        @error('namaPT')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="namaPT" class="form-control" placeholder="Nama PT" value="{{ old('namaPT') ?? $pd->namaPT }}">
                    </div>

                    <div class="form-group">
                        <label>Akreditasi</label>
                        @error('akreditasi')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="akreditasi" class="form-control" placeholder="Akreditasi" value="{{ old('akreditasi') ?? $pd->akreditasi }}">
                    </div> 

                    <div class="form-group">
                        <label>Jenjang Pendidikan</label>
                        @error('jenjangPendidikan')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="jenjangPendidikan" class="form-control" placeholder="Jenjang Pendidikan" value="{{ old('jenjangPendidikan') ?? $pd->jenjangPendidikan }}">
                    </div> 

                    <div class="form-group">
                        <label>Gelar Lulusan</label>
                        @error('gelarLulusan')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="gelarLulusan" class="form-control" placeholder="Gelar Lulusan" value="{{ old('gelarLulusan') ?? $pd->gelarLulusan }}">
                    </div> 

                    <div class="form-group">
                        <label>Visi</label>
                        @error('visi')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="visi" class="form-control" placeholder="Visi" value="{{ old('visi') ?? $pd->visi }}">
                    </div> 

                    <div class="form-group">
                        <label>Misi</label>
                        @error('misi')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="misi" class="form-control" placeholder="Misi" value="{{ old('misi') ?? $pd->misi }}">
                    </div> 

                    <div class="form-group">
                        <label>Tujuan</label>
                        @error('tujuan')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="tujuan" class="form-control" placeholder="Tujuan" value="{{ old('tujuan') ?? $pd->tujuan }}">
                    </div> 

                    <div class="form-group pt-4">
                        <button type="submit" name="submit" value="submit" id="submit" class="btn btn-dark btn-sm"><i
                                class="fa fa-fw fa-plus-circle"></i>
                            Edit Prodi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
