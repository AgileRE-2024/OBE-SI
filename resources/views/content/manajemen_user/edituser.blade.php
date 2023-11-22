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
                        {{-- @error('nip')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror --}}
                        <input type="text" name="nip" class="form-control" placeholder="NIP" value="">
                    </div>

                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        {{-- @error('name')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror --}}
                        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="">
                    </div>

                    <div class="form-group">
                        <label>Jabatan</label>
                        {{-- @error('jabatan')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror --}}
                        <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" value="">
                    </div>

                    <div class="form-group">
                        <label>Role</label>
                        @error('role')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <select name="jabatan" id='jabatan' class="form-select">
                            <option value="" selected disabled>-- Role --
                            </option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        {{-- @error('email')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror --}}
                        <input type="text" name="email" class="form-control" placeholder="Email" value="">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        {{-- @error('status')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror --}}
                        <input type="text" name="status" class="form-control" placeholder="Status" value="">
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
