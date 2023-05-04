@extends('layout.dashboard')

@section('content')
    <div id="detail_teknisi_box" style="width:42%">
        <div>
            <div>
                <h4>
                    List CPL-SNDikti
                </h4>
            </div>
        </div>
        <hr>
        <a href="{{ route('kurikulum.data.add_cpl_dikti') }}">Tambah</a>

        @foreach (['Sikap', 'Keterampilan Umum', 'Keterampilan Khusus', 'Pengetahuan'] as $item)
            <div
                style="color:white;margin-top:20px;font-weight:normal;border-radius:8px;;padding:15px;text-align:center;font-weight:bold;background-color:#2c78bf">
                {{ $item }}
            </div>

            @foreach ($cpls as $cpl)
                @if ($cpl->jenisSN == $item)
                    <div
                        style="margin-bottom:10px;font-weight:normal;border-radius:8px;border:silver 1px solid;padding:15px">
                        <table>
                            <tr>
                                <td style="width:relative; padding-right:25px"">
                                    <a
                                        href="{{ route('kurikulum.data.show_cpl_dikti', [$cpl->kodeCPLSN]) }}">{{ $cpl->kodeCPLSN }}</a>
                                </td>
                                <td style=" width:relative;border-left:1px solid silver; padding-left:25px">
                                    {{ $cpl->deskripsiSN }}
                                </td>
                            </tr>
                        </table>
                    </div>
                @endif
            @endforeach
        @endforeach
    </div>
@endsection
