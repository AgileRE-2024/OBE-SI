@extends('layout.dashboard')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Prodi</h6>
            {{-- <a href="/tambahpl" class="float-right btn btn-sm btn-dark"><i
            class="fa fa-fw fa-plus-circle"></i> Tambah PL</a> --}}
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form method="post" action="{{-- {{ route('kurikulum.data.store_pl') }} --}}">
                    @csrf
                    <div class="form-group">
                        <label>Nama Prodi</label>
                        @error('namaProdi')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="namaProdi" class="form-control" placeholder="Nama Prodi">
                    </div>

                    <div class="form-group">
                        <label>Fakultas</label>
                        @error('fakultas')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="fakultas" class="form-control" placeholder="Fakultas">
                    </div>

                    <div class="form-group">
                        <label>Nama PT</label>
                        @error('namaPT')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="namaPT" class="form-control" placeholder="Nama PT">
                    </div>

                    <div class="form-group">
                        <label>Akreditasi</label>
                        @error('akreditasi')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="akreditasi" class="form-control" placeholder="Akreditasi">
                    </div> 

                    <div class="form-group">
                        <label>Jenjang Pendidikan</label>
                        @error('jenjangPendidikan')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="jenjangPendidikan" class="form-control" placeholder="Jenjang Pendidikan">
                    </div> 

                    <div class="form-group">
                        <label>Gelar Lulusan</label>
                        @error('gelarLulusan')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="gelarLulusan" class="form-control" placeholder="Gelar Lulusan">
                    </div> 

                    <div class="form-group">
                        <label>Visi</label>
                        @error('visi')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="visi" class="form-control" placeholder="Visi">
                    </div> 

                    <div class="form-group">
                        <label>Misi</label>
                        @error('misi')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="misi" class="form-control" placeholder="Misi">
                    </div> 

                    <div class="form-group">
                        <label>Tujuan</label>
                        @error('tujuan')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="tujuan" class="form-control" placeholder="Tujuan">
                    </div> 

                    <div class="form-group pt-4">
                        <button type="submit" name="submit" value="submit" id="submit" class="btn btn-dark btn-sm"><i
                                class="fa fa-fw fa-plus-circle"></i>
                            Tambah Prodi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
