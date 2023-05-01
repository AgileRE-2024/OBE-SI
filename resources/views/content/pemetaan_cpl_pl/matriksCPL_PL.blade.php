@extends('layout.dashboard')

@section('content')
    <div class="content px-4">
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>Matriks Capaian Pembelajaran Lulusan (CPL) & Profil Lulusan (PL)</h3>
                <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Pemetaan CPL Program Studi terhadap PL
                    dilakukan untuk memetakan
                    kesesuaian antara CPL yang ditetapkan terhadap Profil Lulusan dari Program Studi. Satu atau lebih CPL
                    dapat digunakan untuk memenuhi satu atau lebih PL dan sebaliknya.<b
                        style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b></h5>
            </div>
        </div>
        <div class="d-flex justify-content-end pt-2">
            <div class="pr-3">
                <a class="btn btn-outline-danger" href="{{ route('kurikulum.pemetaan.export', ['pdf']) }}"><i
                        class="bi bi-file-earmark-pdf-fill"> </i>Export PDF</a>
            </div>
            <div>
                <a class="btn btn-success" href="{{ route('kurikulum.pemetaan.export', ['excel']) }}"><i
                        class="bi bi-file-earmark-excel"> </i>Export Excel</a>
            </div>
        </div>
        <br>
        <form method="POST" id="myForm" action="{{ route('kurikulum.pemetaan.update_pemetaan_cpl_pl') }}">
            @method('put')
            @csrf
            <table class="table table-bordered" style="text-align: center">
                <thead class="table" style="background-color: lightgray">
                    <tr>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 5%">No</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 10%">Kode CPL</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 50%">CPL</th>
                        <th scope="col" colspan="{{ $pl_list->count() }}">Profil Lulusan (PL)</th>
                    </tr>
                    <tr>
                        @foreach ($pl_list as $pl)
                            <th scope="col" @if ($pemetaan->where('kodePL', '===', $pl->kodePL)->count() == 0) style="background-color: yellow" @endif>
                                <span data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    title="{{ $pl->deskripsiPL }}">{{ $pl->kodePL }}</span>
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cpl_list as $cpl)
                        <tr>
                            <th scope="row" @if ($pemetaan->where('kodeCPL', '===', $cpl->kodeCPL)->count() == 0) style="background-color: yellow;" @endif>
                                {{ $loop->iteration }}</th>
                            <th scope="row" @if ($pemetaan->where('kodeCPL', '===', $cpl->kodeCPL)->count() == 0) style="background-color: yellow;" @endif>
                                {{ $cpl->kodeCPL }}</th>
                            <th scope="row" class="text-start"
                                @if ($pemetaan->where('kodeCPL', '===', $cpl->kodeCPL)->count() == 0) style="background-color: yellow;" @endif>
                                {{ $cpl->deskripsiCPL }}</th>
                            @foreach ($pl_list as $pl)
                                <td @if (
                                    $pemetaan->where('kodePL', '===', $pl->kodePL)->count() == 0 ||
                                        $pemetaan->where('kodeCPL', '===', $cpl->kodeCPL)->count() == 0) style="background-color: yellow;" @endif><input
                                        type="checkbox" style="width: 25px; height: 25px;"
                                        id="checkbox_{{ $cpl->kodeCPL }}-{{ $pl->kodePL }}"
                                        onclick="updateTable('{{ $cpl->kodeCPL }}-{{ $pl->kodePL }}')"
                                        name="checkbox_{{ $cpl->kodeCPL }}-{{ $pl->kodePL }}"
                                        value="{{ $cpl->kodeCPL }}&{{ $pl->kodePL }}"
                                        @if ($pemetaan->where('kodeCPL', '===', $cpl->kodeCPL)->where('kodePL', '===', $pl->kodePL)->count()) checked @endif>
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="d-flex justify-content-end">
                <button id="submitbutton" class="btn btn-success">
                    Simpan
                </button>
            </div>

            </div>

        </form>

    </div>

    <script>

        document.getElementById("myForm").addEventListener("submit", function(event) {
          event.preventDefault(); // Prevent the default form submission behavior

          Swal.fire({
            title: 'Peringatan',
            text: "Apakah Anda ingin menyimpan perubahan ?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Simpan'
          }).then((result) => {
            if (result.isConfirmed) {
              // If the user confirms, submit the form
              this.submit();
            }
          })
        });


        </script>
@endsection
