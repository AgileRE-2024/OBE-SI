@extends('layout.dashboard')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create User</h6>
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form action="{{ route('storeUser') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>NIP</label>
                        <input type="text" name="nip" class="form-control" placeholder="NIP" value="">
                        @error('nip')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="password" class="form-control" placeholder="password" value="">
                        @error('password')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="namaDosen" class="form-control" placeholder="Nama Lengkap"
                            value="">
                        @error('namaDosen')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Program Studi</label>
                        <select name="prodi" id='prodi' class="form-select">
                            <option value="" disabled selected>-- Program Studi --</option>
                            @foreach ($prodi as $prod)
                                <option value="{{ $prod->namaProdi }}">{{ $prod->namaProdi }}</option>
                            @endforeach
                        </select>
                        @error('prodi')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" name="jabatanDosen" class="form-control" placeholder="Jabatan">
                        @error('jabatanDosen')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Role</label>
                        <select name="role" id='role' class="form-select">
                            <option value="" disabled selected>-- Role --</option>
                            <option value="0">Dosen</option>
                            <option value="1">Kurikulum</option>
                            <option value="2">Admin</option>
                            <option value="3">Dosen dan Kurikulum</option>
                        </select>
                        @error('role')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Email" value="">
                        @error('email')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" id='status' class="form-select">
                            <option value="" disabled selected>-- Status --</option>
                            <option value="Aktif Bekerja">Aktif Bekerja</option>
                            <option value="Aktif Mengajar">Aktif Mengajar</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>
                        @error('status')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group pt-4">
                        <button type="submit" name="submit" value="submit" id="submit" class="btn btn-dark btn-sm"><i
                                class="fa fa-fw fa-plus-circle"></i>
                            Simpan User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
