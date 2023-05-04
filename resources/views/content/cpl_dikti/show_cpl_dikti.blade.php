@extends('layout.dashboard')

@section('content')
    <table>
        <tr>
            <td style="width:relative; padding-right:25px"">
                {{ $cpl->kodeCPLSN }}
            </td>
            <td style=" width:relative;border-left:1px solid silver; padding-left:25px; padding-right:25px">
                {{ $cpl->deskripsiSN }}
            </td>
            <td style=" width:relative;border-left:1px solid silver; padding-left:25px; padding-right:25px">
                {{ $cpl->sumberSN }}
            </td>
            <td style=" width:relative;border-left:1px solid silver; padding-left:25px;  padding-right:25px">
                {{ $cpl->kategoriSN }}
            </td>
            <td style=" width:relative;border-left:1px solid silver; padding-left:25px; padding-right:25px">
                {{ $cpl->jenisSN }}
            </td>
        </tr>
    </table>
@endsection
