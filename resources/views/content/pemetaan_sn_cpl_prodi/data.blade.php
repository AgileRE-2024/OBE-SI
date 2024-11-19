@extends('layout.dashboard')

@section('content')
    <div class="content px-4">
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>Matriks Capaian Pembelajaran Lulusan SN Dikti (CPLSN Dikti) & Capaian Pembelajaran Lulusan Prodi (CPL
                    Prodi)</h3>
                <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Pemetaan CPL SN Dikti terhadap CPL Program
                    Studi dilakukan untuk memetakan
                    kesesuaian antara CPLSN Dikti yang ditetapkan terhadap CPL Program Studi. Satu atau lebih CPL SN Dikti
                    dapat digunakan untuk memenuhi satu atau lebih CPL Program Studi dan sebaliknya.<b
                        style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b></h5>
            </div>
        </div>
        <div class="d-flex justify-content-end pt-2">
            <div class="pr-3">
                <a id="exportPDF" class="btn btn-outline-danger" href="{{ route('kurikulum.pemetaan.export', ['pdf']) }}"><i
                        class="bi bi-file-earmark-pdf-fill"> </i>Export PDF</a>
            </div>
            <div>
                <a id="exportExcel" class="btn btn-success" href="{{ route('kurikulum.pemetaan.export', ['excel']) }}"><i
                        class="bi bi-file-earmark-excel"> </i>Export Excel</a>
            </div>
        </div><br>
        <div class="pt-2" class="d-flex">
            <form id="myForm" method="POST"
                action="{{ route('kurikulum.pemetaan.update_pemetaan_cpldikti_cplprodi') }}">
                @csrf
                @method('put')
                <table class="table table-bordered" style="text-align: center">
                    <thead style="background-color: lightgray">
                        <tr>
                            <th class="align-middle" scope="col" rowspan="2" style="width: 5% ; text-align: center">No
                            </th>
                            <th class="align-middle" scope="col" rowspan="2" style="width: 10% ; text-align: center">
                                Kode CPLSNDikti</th>
                            <th class="align-middle" scope="col" rowspan="2" style="width: 50% ; text-align: center">
                                CPLSNDikti</th>
                            <th scope="col" colspan="{{ $cplprodi_list->count() }}" style="text-align: center ">Capaian
                                Profil Lulusan Prodi</th>
                        </tr>
                        <tr>
                            @foreach ($cplprodi_list as $cplprod)
                                @if (in_array($cplprod->kodeCPL, $empty_prod))
                                    <div class="tooltip">
                                        <th scope="col" style="background-color: yellow">
                                            <span itemid="{{ $cplprod->deskripsiCPL }}">
                                                {{ $cplprod->kodeCPL }}
                                            </span>
                                        </th>
                                    </div>
                                @else
                                    <div class="tooltip">
                                        <th scope="col">
                                            <span itemid="{{ $cplprod->deskripsiCPL }}">
                                                {{ $cplprod->kodeCPL }}
                                            </span>
                                        </th>
                                    </div>
                                @endif
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $iter = 1;
                        @endphp
                        @foreach ($empty as $item)
                            <tr>
                                <th style="background-color: yellow;" scope="row">{{ $iter }}</th>
                                <th style="background-color: yellow;" scope="row"><span
                                        name="{{ $cpldikti_list->where('kodeCPLSN', '===', $item)->first()['deskripsiSN'] }}">{{ $cpldikti_list->where('kodeCPLSN', '===', $item)->first()['kodeCPLSN'] }}</span>
                                </th>
                                <th style="background-color: yellow;" scope="row" class="text-start">
                                    {{ $cpldikti_list->where('kodeCPLSN', '===', $item)->first()['deskripsiSN'] }}</th>
                                @foreach ($cplprodi_list as $cplprod)
                                    <td style="background-color: yellow;"><input type="checkbox"
                                            id="checkbox_{{ $cpldikti_list->where('kodeCPLSN', '===', $item)->first()['kodeCPLSN'] }}-{{ $cplprod->kodeCPL }}"
                                            name="checkbox_{{ $cpldikti_list->where('kodeCPLSN', '===', $item)->first()['kodeCPLSN'] }}-{{ $cplprod->kodeCPL }}"
                                            value="{{ $cpldikti_list->where('kodeCPLSN', '===', $item)->first()['kodeCPLSN'] }}&{{ $cplprod->kodeCPL }}"
                                            style="width:26px;height:26px;" @if ($pemetaan->where('kodeCPLSN', '===', $cpldikti_list->where('kodeCPLSN', '===', $item)->first()['kodeCPLSN'])->where('kodeCPL', '===', $cplprod->kodeCPL)->count()) checked @endif
                                            @if (auth()->user()->role == 0 || auth()->user()->role == 2) disabled @endif>
                                        {{-- <span id="{{$cpldikti_list->where('kodeCPLSN','===',$item)->first()["kodeCPLSN"] }}_{{ $cplprod->kodeCPL }}" class="checkmark"></span> --}}
                                    </td>
                                @endforeach
                                @php
                                    $iter = $iter + 1;
                                @endphp
                            </tr>
                        @endforeach

                        @foreach ($cpldikti_list as $cplsn)
                            @if (!in_array($cplsn->kodeCPLSN, $empty))
                                <tr>
                                    <th scope="row">{{ $iter }}</th>
                                    <th scope="row"><span
                                            name="{{ $cplsn->deskripsiSN }}">{{ $cplsn->kodeCPLSN }}</span></th>
                                    <th scope="row" class="text-start">{{ $cplsn->deskripsiSN }}</th>
                                    @foreach ($cplprodi_list as $cplprod)
                                        @if (in_array($cplprod->kodeCPL, $empty_prod))
                                            <td style="background-color: yellow"><input type="checkbox"
                                                    id="checkbox_{{ $cplsn->kodeCPLSN }}-{{ $cplprod->kodeCPL }}"
                                                    name="checkbox_{{ $cplsn->kodeCPLSN }}-{{ $cplprod->kodeCPL }}"
                                                    value="{{ $cplsn->kodeCPLSN }}&{{ $cplprod->kodeCPL }}"
                                                    style="width:26px;height:26px;"
                                                    @if ($pemetaan->where('kodeCPLSN', '===', $cplsn->kodeCPLSN)->where('kodeCPL', '===', $cplprod->kodeCPL)->count()) checked @endif
                                                    @if (auth()->user()->role == 0 || auth()->user()->role == 2) disabled @endif>
                                                {{-- <span id="{{$cplsn->kodeCPLSN}}_{{ $cplprod->kodeCPL }}" class="checkmark"></span> --}}
                                            </td>
                                        @else
                                            <td><input type="checkbox"
                                                    id="checkbox_{{ $cplsn->kodeCPLSN }}-{{ $cplprod->kodeCPL }}"
                                                    name="checkbox_{{ $cplsn->kodeCPLSN }}-{{ $cplprod->kodeCPL }}"
                                                    value="{{ $cplsn->kodeCPLSN }}&{{ $cplprod->kodeCPL }}"
                                                    style="width:26px;height:26px;"
                                                    @if ($pemetaan->where('kodeCPLSN', '===', $cplsn->kodeCPLSN)->where('kodeCPL', '===', $cplprod->kodeCPL)->count()) checked @endif
                                                    @if (auth()->user()->role == 0 || auth()->user()->role == 2) disabled @endif>
                                                {{-- <span id="{{$cplsn->kodeCPLSN}}_{{ $cplprod->kodeCPL }}" class="checkmark"></span> --}}
                                            </td>
                                        @endif
                                    @endforeach
                                </tr>
                                @php
                                    $iter = $iter + 1;
                                @endphp
                            @endif
                        @endforeach

                    </tbody>
                </table>
                @if (auth()->user()->role == 1 || auth()->user()->role == 3)
                    <button type="submit" class="btn btn-success" style="float: right">
                        Simpan
                    </button>
                @endif
            </form>
        </div>

    </div>

    <style>
        /* Style the tooltip */
        /* Style the tooltip */
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

                    // Display a success message after the form is submitted
                    Swal.fire(
                        'Success!',
                        'Perubahan telah tersimpan',
                        'success'
                    );
                }
            })
        });
    </script>
@endsection
