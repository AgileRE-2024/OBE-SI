@extends('layout.dashboard')

@section('content')
    <div class="content px-4 pt-3">
        <div class="card border" style="background-color: rgb(197, 197, 197)">
            <div class="card-body" style="font-weight:600;">
                Matriks Capaian Pembelajaran Lulusan (CPL) & Profil Lulusan (PL)
            </div>
        </div>
        <div class="d-flex">
            <form method="POST" action="{{ route('kurikulum.pemetaan.update_pemetaan_cpl_pl') }}">
                @csrf
                @method('put')
                <table class="table table-bordered" style="text-align: center">
                    <thead>
                        <tr>
                            <th class="align-middle" scope="col" rowspan="2" style="width: 5%">No</th>
                            <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Kode CPL</th>
                            <th class="align-middle" scope="col" rowspan="2" style="width: 50%">CPL</th>
                            <th scope="col" colspan="{{ $pl_list->count() }}">Profil Lulusan (PL)</th>
                        </tr>
                        <tr>
                            @foreach ($pl_list as $pl)
                                <th scope="col">{{ $pl->kodePL }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cpl_list as $cpl)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <th scope="row">{{ $cpl->kodeCPL }}</th>
                                <th scope="row" class="text-start">{{ $cpl->deskripsiCPL }}</th>
                                @foreach ($pl_list as $pl)
                                    <td><input type="checkbox"
                                            id="checkbox_{{ $cpl->kodeCPL }}-{{ $pl->kodePL }}"
                                            name="checkbox_{{ $cpl->kodeCPL }}-{{ $pl->kodePL }}"
                                            value="{{ $cpl->kodeCPL }}&{{ $pl->kodePL }}" style="width:26px;height:26px;"
                                            @if ($pemetaan->where('kodeCPL', '===', $cpl->kodeCPL)->where('kodePL', '===', $pl->kodePL)->count()) checked @endif>
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-end">
                    <!-- Button trigger modal -->
                    <button type="button" id="modalTrigger" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Simpan
                    </button>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg-danger">
                                <h5 class="modal-title" id="staticBackdropLabel">Peringatan!!</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                    style="background-color:white"></button>
                            </div>
                            <div class="modal-body">
                                Apakah yakin akan menyimpan perubahan?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" id="submitButton" class="btn btn-success">Simpan Perubahan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div style="padding-left: 20px; max-width: 350px;">
                <table class="table table-bordered" style="text-align: center">
                    <thead>
                        <tr>
                            <th class="align-middle" scope="col" rowspan="2">Kode PL</th>
                            <th class="align-middle" scope="col" rowspan="2" style="width: 80%">Profil Lulusan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pl_list as $pl)
                        <tr>
                            <th scope="row">{{ $pl->kodePL }}</th>
                            <td scope="row" class="text-start">{{ $pl->deskripsiPL }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
