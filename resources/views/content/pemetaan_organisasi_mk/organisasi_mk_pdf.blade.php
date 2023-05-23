<!DOCTYPE html>
<html>
<head>
	<title>Organisasi Mata Kuliah</title>
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
	<h1>Organisasi Mata Kuliah</h1>
	<table class="table table-bordered" style="text-align: center">
        <thead style="background-color: lightgray">
            <tr>
                <th class="align-middle">Semester</th>
                <th class="align-middle">Total SKS</th>
                <th class="align-middle">Total MK</th>
                <th class="align-middle" class="text-center">MK Wajib</th>
                <th class="align-middle">MK Pilihan</th>
                <th class="align-middle">MKWK</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data->sortByDesc('semester')->groupBy('semester') as $smt => $MKBysmt)
                <tr>
                    <td>{{ $smt }}</td>
                    <td>{{ $MKBysmt->sum('sks') }}</td>
                    <td>{{ $MKBysmt->count() }}</td>
                    <td>
                        @foreach($MKBysmt->where('kategoriMK', 1) as $product)
                            {{ $product->kodeMK }}
                            @if($loop->remaining > 0)
                                ,
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach($MKBysmt->where('kategoriMK', 2) as $product)
                            {{ $product->kodeMK }}
                            @if($loop->remaining > 0)
                                ,
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach($MKBysmt->where('kategoriMK', 3) as $product)
                            {{ $product->kodeMK }}
                            @if($loop->remaining > 0)
                                ,
                            @endif
                        @endforeach
                    </td>                    
                </tr>
            @endforeach
            <tr>
                <td>Total SKS</td>
                <td><b>{{ $data->sum('sks') }}</b></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
