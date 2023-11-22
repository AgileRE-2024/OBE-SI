@extends('layout.dashboard')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
            {{-- <a href="/tambahpl" class="float-right btn btn-sm btn-dark"><i
    class="fa fa-fw fa-plus-circle"></i> Tambah PL</a> --}}
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form action="{{ route('updateUser',['nip' => $user->nip]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>NIP</label>
                        <input type="text" name="nip" class="form-control" placeholder="NIP" value="{{ old('nip') ? old('nip') : $user->nip }}" >
                        @error('nip')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Nama Lengkap</label>

                        <input type="text" name="namaDosen" class="form-control" placeholder="Nama Lengkap" value="{{ old('namaDosen') ? old('namaDosen') : $user->namaDosen }}">
                        @error('namaDosen')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" value="{{ old('Jabatan') ? old('Jabatan') : $user->jabatanDosen }}">
                        @error('jabatan')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                   </div>

                    <div class="form-group">
                        <label>Role</label>
                        <select name="role" id='role' class="form-select">
                            <option value="" disabled>-- Role --</option>
                            <option value="0" @if(old('role', $user->role) == "0") selected @endif>Dosen</option>
                            <option value="1" @if(old('role', $user->role) == "1") selected @endif>Kurikulum</option>
                            <option value="2" @if(old('role', $user->role) == "2") selected @endif>Dosen dan Kurikulum</option>
                            <option value="3" @if(old('role', $user->role) == "3") selected @endif>Admin</option>
                        </select>
                        @error('role')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') ? old('email') : $user->email }}">
                        @error('email')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" id='status' class="form-select">
                            <option value="" disabled>-- Status --</option>
                            <option value="Aktif Bekerja" @if(old('status', $user->status) == "Aktif Bekerja") selected @endif>Aktif Bekerja</option>
                            <option value="Aktif Mengajar" @if(old('status', $user->status) == "Aktif Mengajar") selected @endif>Aktif Mengajar</option>
                            <option value="Tidak Aktif" @if(old('status', $user->status) == "Tidak Aktif") selected @endif>Tidak Aktif</option>
                        </select>
                        @error('status')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                    </div>



                    <div class="form-group pt-4">
                        <button type="submit" name="submit" value="submit" id="submit" class="btn btn-dark btn-sm"><i
                                class="fa fa-fw fa-plus-circle"></i>
                            Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
