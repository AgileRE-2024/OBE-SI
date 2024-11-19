@extends('layout.dashboard')

@section('content')
    <form method="POST">
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
                        <th scope="col">
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
                                    $pemetaan->where('kodeCPL', '===', $cpl->kodeCPL)->count() == 0
                            ) style="background-color: yellow;" @endif><input
                                    type="checkbox" style="width: 25px; height: 25px;"
                                    id="checkbox_{{ $cpl->kodeCPL }}-{{ $pl->kodePL }}"
                                    onclick="updateTable('{{ $cpl->kodeCPL }}-{{ $pl->kodePL }}')"
                                    name="checkbox_{{ $cpl->kodeCPL }}-{{ $pl->kodePL }}"
                                    @if ($pemetaan->where('kodeCPL', '===', $cpl->kodeCPL)->where('kodePL', '===', $pl->kodePL)->count()) checked @endif>
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </form>
@endsection
