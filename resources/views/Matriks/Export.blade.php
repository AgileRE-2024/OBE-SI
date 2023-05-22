<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pemetaan Capaian Pembelajaran Lulusan (CPL) & Profil Lulusan (PL)</title>
    <style>
        table {
            border-collapse: collapse;
        }

        thead tr th {
            border: 1px white solid !important;
        }

        th,
        td {
            border: 1px black solid;
        }
    </style>
</head>
<body>
    <div style="text-align: center; padding: 20px 0px 20px 0px; font-size: 24px; font-weight: bold;">
        Pemetaan Capaian Pembelajaran Lulusan SN Dikti(CPLSNDikti) dan Capaian Pembelajaran Lulusan Prodi (CPL)
    </div>
    <table class="table table-bordered" style="text-align: center">
        <thead style="background-color: black; color: white">
            <tr>
                <th class="align-middle" scope="col" rowspan="2" style="width: 5% ; text-align: center">No</th>
                <th class="align-middle" scope="col" rowspan="2" style="width: 10% ; text-align: center">Kode CPLSNDikti</th>
                <th class="align-middle" scope="col" rowspan="2" style="width: 50% ; text-align: center">CPLSNDikti</th>
                <th scope="col" colspan="{{ $cplprodi_list->count() }}" style="text-align: center ">Capaian Profil Lulusan Prodi</th>
            </tr>
            <tr>
                @foreach ($cplprodi_list as $cplprod)
                <th scope="col">
                    <span data-bs-toggle="tooltip" data-bs-placement="bottom" style="text-align: left"
                    title="{{ $cplprod->deskripsi }}">{{ $cplprod->kode_cplprodi }} </span>
                    @endforeach
                </th> 
            </tr>
        </thead>
        <tbody>
            @foreach ($cpldikti_list as $cpldik)
                <tr>
                    <th scope="row" @if ($pemetaan->where('kode_cpldikti', '===', $cpldik->kode_cpldikti)->count() == 0) style="background-color: yellow; " @endif>
                        {{ $loop->iteration }}</th>
                    <th scope="row" @if ($pemetaan->where('kode_cpldikti', '===', $cpldik->kode_cpldikti)->count() == 0) style="background-color: yellow; " @endif>
                        {{ $cpldik->kode_cpldikti }}</th>
                    <th scope="row"
                        @if ($pemetaan->where('kode_cpldikti', '===', $cpldik->kode_cpldikti)->count() == 0) style="background-color: yellow;" @endif>
                        {{ $cpldik->deskripsi }}</th>
                    @foreach ($cplprodi_list as $cplprod)
                    <td @if (
                        $pemetaan->where('kode_cplprodi', '===', $cplprod->kode_cplprodi)->count() == 0 ||
                            $pemetaan->where('kode_cpldikti', '===', $cpldik->kode_cpldikti)->count() == 0) style="background-color: yellow;" @endif>
                        <input type="checkbox" style="width: 25px; height: 25px; border: none; outline: none;"
                            @if ($pemetaan->where('kode_cpldikti', '===', $cpldik->kode_cpldikti)->where('kode_cplprodi', '===', $cplprod->kode_cplprodi)->count()) checked @endif>
                    </td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>