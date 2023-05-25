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
                <a id="exportPDF" class="btn btn-outline-danger" href="{{ route('kurikulum.pemetaan.export_cpl_pl', ['pdf']) }}"><i
                        class="bi bi-file-earmark-pdf-fill"> </i>Export PDF</a>
            </div>
            <div>
                <a id="exportExcel" class="btn btn-success" href="{{ route('kurikulum.pemetaan.export_cpl_pl', ['excel']) }}"><i
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
                                <span itemid="{{ $pl->deskripsiPL }}">
                                    {{ $pl->kodePL }}
                                </span>
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
            @if(auth()->user()->role==1)
            <div class="d-flex justify-content-end">
                <button id="submitbutton" class="btn btn-success">
                    Simpan
                </button>
            </div>
            @endif

    </div>

    </form>

    </div>

    <style>
        /* Style the tooltip */
        span[itemid] {
            position: relative;
            cursor: pointer;
            /* display: inline-block; */
        }

        span[itemid]:hover::after {
            content: attr(itemid);
            /* overflow: hidden; */
            /* text-overflow: ellipsis; */
            word-wrap: break-word;
            /* membuat kata wrap ketika teks melebihi lebar elemen */
            word-break: break-all;
            /* memaksa kata dipisahkan ketika melebihi lebar elemen */
            width: 350px;
            height: auto;
            background-color: #1F2F4D;
            color: white;
            padding: 9px;
            border-radius: 5px;
            position: absolute;
            top: 35px;
            /* bottom: -100px; */
            /* left: 2%; */
            transform: translateX(-88%);
            /* white-space: nowrap; */
            z-index: 1;
            opacity: 1;
            /* transition: opacity 3s; */
            /* transition: opacity 0.3s ease, visibility 0s linear 0.3s; */

        }

        span[itemid]:hover::before {
            content: "";
            border-style: solid;
            border-width: 0 8px 8px 8px;
            border-color: transparent transparent #1F2F4D transparent;
            position: absolute;
            top: 28px;
            left: 50%;
            transform: translateX(-50%);
            bottom: calc(100% + 10px);
            /* transition: opacity 0.3s ease, visibility 0s linear 0.3s; */
        }
    </style>

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
