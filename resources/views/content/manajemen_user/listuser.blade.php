@extends('layout.dashboard')

@section('content')
    <div class="content px-4">
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>Manajemen User</h3>
                <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Daftar user yang terdapat di basis data<b
                        style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b></h5>
            </div>
        </div>
        {{-- @if (auth()->user()->role == 1)
            <div class="d-flex justify-content-start pt-2">
                <div>
                    <a class="btn btn-dark" href="{{ route('kurikulum.data.add_cpl_prodi') }}"><i class="bi bi-plus-square">
                        </i>Tambah</a>
                </div>
            </div>
        @endif --}}
        {{-- <div class="d-flex justify-content-end pt-2">
            <div class="pr-3">
                <a class="btn btn-outline-danger" href="{{ route('kurikulum.data.export_cpl_prodi', ['pdf']) }}"><i
                        class="bi bi-file-earmark-pdf-fill"> </i>Export PDF</a>
            </div>
            <div>
                <a class="btn btn-success" href="{{ route('kurikulum.data.export_cpl_prodi', ['excel']) }}"><i
                        class="bi bi-file-earmark-excel"> </i>Export Excel</a>
            </div>
        </div> --}}
        <br>
        <div class="d-flex">
            <table class="table table-bordered" style="text-align: center">
                <thead class="table" style="background-color: lightgray">
                    <tr>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 5%">No</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 15%">NIP
                        </th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Nama</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Jabatan</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Role</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Email</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Status</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Edit</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td scope="row">
                            {{ $loop->iteration }} </td>
                        <td scope="row">
                            {{ $user->nip }}</td>
                        <td scope="row">
                            {{ $user->namaDosen }}</td>
                        <td scope="row">
                            {{ $user->jabatanDosen }}
                        </td>
                        <td scope="row">
                            {{ $user->role }}
                        </td>
                        <td scope="row">
                            {{ $user->email }}
                        </td>
                        <td scope="row">
                            {{ $user->status }}
                        </td>
                        <td scope="row">
                            {{-- @if (auth()->user()->role == 1) --}}
                            <a class="btn btn-primary" href="{{ Route('editUser',['nip' => $user->nip]) }}">Edit</a>
                            {{-- @endif --}}
                        </td>
                        <td scope="row">
                            {{-- @if (auth()->user()->role == 1) --}}
                            <form action="{{ Route('deleteUser',['nip' => $user->nip]) }}" method="POST">
                                <button class="btn btn-danger" href="">Delete</button>
                                @method('delete')
                                @csrf
                            </form>
                            {{-- @endif --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
