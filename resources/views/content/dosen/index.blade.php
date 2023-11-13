@extends('layout.dashboard')

@section('content')
<div class="content px-4">
    @include('content.teknik_penilaian.button')
    <br><br>
    <div class="card border" style="background-color: white">
        <div class="card-body" style="font-weight:600;">
            <h3>Detail Peran Dosen</h3>
            <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Daftar Peran Dosen<b
                    style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b></h5>
        </div>
    </div>
    <div class="d-flex mt-3">
        <table class="table table-bordered" style="text-align: center">
            <thead class="table" style="background-color: lightgray">
                <tr>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 5%">No</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 25%">Detail Peran</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 10%">NIP</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Nama Dosen</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Edit</th>
                    <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">1</td>
                    <td scope="row">Pembuat RPS</td>
                    <td scope="row">
                        nip
                    </td>
                    <td scope="row">
                        nama dosen
                    </td>
                    <td scope="row">
                        <a class="btn btn-primary">Edit</a>
                    </td>
                    <td scope="row">
                        <a name="delete" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td scope="row">2</td>
                    <td scope="row">Pemeriksa RPS</td>
                    <td scope="row">
                        nip
                    </td>
                    <td scope="row">
                        nama dosen
                    </td>
                    <td scope="row">
                        <a class="btn btn-primary">Edit</a>
                    </td>
                    <td scope="row">
                        <a name="delete" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td scope="row">3</td>
                    <td scope="row">Persetujuan RPS</td>
                    <td scope="row">
                        nip
                    </td>
                    <td scope="row">
                        nama dosen
                    </td>
                    <td scope="row">
                        <a class="btn btn-primary">Edit</a>
                    </td>
                    <td scope="row">
                        <a name="delete" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td scope="row">4</td>
                    <td scope="row">Pengampu MK</td>
                    <td scope="row">
                        nip
                    </td>
                    <td scope="row">
                        nama dosen
                    </td>
                    <td scope="row">
                        <a class="btn btn-primary">Edit</a>
                    </td>
                    <td scope="row">
                        <a name="delete" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td scope="row">5</td>
                    <td scope="row">Penanggung jawab MK</td>
                    <td scope="row">
                        nip
                    </td>
                    <td scope="row">
                        nama dosen
                    </td>
                    <td scope="row">
                        <a class="btn btn-primary">Edit</a>
                    </td>
                    <td scope="row">
                        <a name="delete" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
