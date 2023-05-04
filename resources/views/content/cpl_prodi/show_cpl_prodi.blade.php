@extends('layout.dashboard')

@section('content')
    <table>
        <tr>
            <td style="width:relative; padding-right:25px"">
                {{ $cpl->kodeCPL }}
            </td>
            <td style=" width:relative;border-left:1px solid silver; padding-left:25px; padding-right:25px">
                {{ $cpl->referensiCPL }}
            </td>
            <td style=" width:relative;border-left:1px solid silver; padding-left:25px; padding-right:25px">
                {{ $cpl->deskripsiCPL }}
            </td>
        </tr>
    </table>
@endsection
