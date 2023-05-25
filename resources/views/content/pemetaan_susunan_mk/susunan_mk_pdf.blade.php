<!DOCTYPE html>
<html>
<head>
	<title>Susunan Mata Kuliah</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			text-align: left;
			padding: 8px;
			border-bottom: 1px solid #ddd;
		}
		th {
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>
	<h1>Susunan Mata Kuliah</h1>
	<table class="table table-bordered" style="text-align: center">
        <thead style="background-color: lightgray">
            <tr>
                <th>Kode MK</th>
                <th>Nama MK</th>
                <th>BK</th>
                <th>SKS</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $p)
            <tr>
                <td>{{ $p->kodeMK }}</td>
                <td>{{ $p->namaMK }}</td>
                <td>
                    @foreach ($p->Bahan_Kajian as $bk)
                        <div>
                            <span data-namabk="{{ $bk->namaBK }}">
                                {{ $bk->kodeBK }}
                            </span>
                        </div>
                    @endforeach
                </td>
                <td>{{ $p->sks }}</td>
                @for($i = 1; $i <= 8; $i++)
                    <td>
                        @if(strpos($p->semester, strval($i)) !== false)
                        <div class="d-flex justify-content-center">
                            <div class="form-check">
                                <input style="width:26px;height:26px;" class="form-check-input" type="checkbox" checked>
                            </div>
                        </div>
                        @else
                        <div class="d-flex justify-content-center">
                            <div class="form-check">
                                <input style="width:26px;height:26px;" class="form-check-input" type="checkbox">
                            </div>
                        </div>
                        @endif
                    </td>
                @endfor
                <td>
                    @if ($p->kategoriMK == 1)
                        {{ 'Wajib' }}
                    @elseif ($p->kategoriMK == 2)
                        {{ 'Pilihan' }}
                    @else
                        {{ 'MKWK' }}
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
