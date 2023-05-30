@extends('layout.dashboard')

@section('content')
    <div class="content px-4">
        <div class="content px-4">
            <div class="card border" style="background-color: white">
                <div class="card-body" style="font-weight:600;">
                    <h3>Minggu Rencana Pembelajaran Semester (RPS)</h3>
                    <h6 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Minggu RPS merupakan detail pembelajaran
                        untuk setiap minggu dalam mata kuliah.<b style="display:inline-block;transform: scaleX(-1)"><i
                                class="bi bi-quote"></i></b></h6>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Minggu RPS</h6>
                </div>
                <div class="card-body" style="width: auto">
                    <div class="col-sm-8">
                        <form method="post" action="{{ route('store_minggu_rps') }}">
                            @csrf
                            @php
                                $rps = $rps_list->where('kodeRPS', 'RPS001')->first();
                                $mk = $mk_list->where('kodeMK',$rps->kodeMK)->first();
                                $list_cpmk = collect();
                                $uniqueIds = [];
                                
                                foreach ($mk->CPMK as $cpmk) {
                                    $kodeCPMK = $cpmk->kodeCPMK;
                                    $deskripsiCPMK = $cpmk->deskripsiCPMK;
                                
                                    if (!in_array($kodeCPMK, $uniqueIds)) {
                                        $uniqueIds[] = $kodeCPMK;
                                        $list_cpmk->push([
                                            'kodeCPMK' => $kodeCPMK,
                                            'deskripsiCPMK' => $deskripsiCPMK,
                                        ]);
                                    }
                                }
                                $list_kodeCPMK = $list_cpmk->pluck('kodeCPMK');
                            @endphp
                            {{-- Passing data rps ke controller --}}
                            <input type="hidden" name="kodeRPS" value={{ $rps->kodeRPS }} />

                            <div class="form-group">
                                <label>Kode Minggu RPS</label>
                                @error('kodeMingguRPS')
                                    <h6 style="color: #BF2C45">{{ $message }}</h6>
                                @enderror
                                <input type="text" name="kodeMingguRPS" class="form-control"
                                    placeholder="Kode Minggu RPS">
                            </div>

                            @php
                                $rps = $rps_list->where('kodeRPS', 'RPS001')->first();
                                $mk = $mk_list->where('kodeMK',$rps->kodeMK)->first();
                                $list_cpmk = collect();
                                $uniqueIds = [];
                                
                                foreach ($mk->CPMK as $cpmk) {
                                    $kodeCPMK = $cpmk->kodeCPMK;
                                    $deskripsiCPMK = $cpmk->deskripsiCPMK;
                                
                                    if (!in_array($kodeCPMK, $uniqueIds)) {
                                        $uniqueIds[] = $kodeCPMK;
                                        $list_cpmk->push([
                                            'kodeCPMK' => $kodeCPMK,
                                            'deskripsiCPMK' => $deskripsiCPMK,
                                        ]);
                                    }
                                }
                                $list_kodeCPMK = $list_cpmk->pluck('kodeCPMK');
                            @endphp

                            <div class="form-group">
                                <label>Sub CPMK</label>
                                @error('kodeSubCPMK')
                                    <h6 style="color: #BF2C45">{{ $message }}</h6>
                                @enderror
                                <select name="kodeSubCPMK" id='kodeSubCPMK' class="form-select">
                                    <option value="">-- Pilih Sub CMPK --</option>
                                    @foreach ($scpmk->whereIn('kodeCPMK', $list_kodeCPMK) as $item)
                                        <option value="{{ $item->kodeSubCPMK }}">{{ $item->kodeSubCPMK }} - {{ $item->deskripsiSubCPMK }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Minggu RPS (Contoh. 1)</label>
                                @error('mingguKe')
                                    <h6 style="color: #BF2C45">{{ $message }}</h6>
                                @enderror
                                <input type="text" name="mingguKe" class="form-control" placeholder="Minggu RPS">
                            </div>

                            <div class="form-group">
                                <label>Bentuk Pembelajaran</label>
                                @error('bentukPembelajaran')
                                    <h6 style="color: #BF2C45">{{ $message }}</h6>
                                @enderror
                                <select name="bentukPembelajaran" id='bentukPembelajaran' class="form-select">
                                    <option value="" selected disabled>-- Pilih Bentuk Pembelajaran --
                                    </option>
                                    <option value="1">Luring</option>
                                    <option value="0">Daring</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Indikator Minggu RPS</label>
                                @error('indikatorMingguRPS')
                                    <h6 style="color: #BF2C45">{{ $message }}</h6>
                                @enderror
                                <input type="text" name="indikatorMingguRPS" class="form-control"
                                    placeholder="Indikator Minggu RPS">
                            </div>
                            <div class="form-group">
                                <label>Kriteria Minggu RPS</label>
                                @error('kriteriaMingguRPS')
                                    <h6 style="color: #BF2C45">{{ $message }}</h6>
                                @enderror
                                <input type="text" name="kriteriaMingguRPS" class="form-control"
                                    placeholder="Kriteria Minggu RPS">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi Pembelajaran</label>
                                @error('deskripsiPembelajaran')
                                    <h6 style="color: #BF2C45">{{ $message }}</h6>
                                @enderror
                                <input type="text" name="deskripsiPembelajaran" class="form-control"
                                    placeholder="Deskripsi Pembelajaran">
                            </div>
                            <div class="form-group">
                                <label>Materi Pembelajaran</label>
                                @error('materiPembelajaran')
                                    <h6 style="color: #BF2C45">{{ $message }}</h6>
                                @enderror
                                <input type="text" name="materiPembelajaran" class="form-control"
                                    placeholder="Materi Pembelajaran">
                            </div>

                            <div class="form-group">
                                <label>Teknik Penilaian (Jika ada)</label>
                                <select name="kodePenilaian" id='kodePenilaian' class="form-select">
                                    <option value="">-- Pilih Teknik Penilaian --</option>
                                    @foreach ($teknik_penilaian_list->whereIn('kodeRPS', $rps->kodeRPS) as $item)
                                        <option value="{{ $item->kodePenilaian }}">{{ $item->kodePenilaian }} - {{ $item->teknikPenilaian }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group pt-4">
                                <button type="submit" name="submit" value="submit" id="submit"
                                    class="btn btn-dark btn-sm"><i class="fa fa-fw fa-plus-circle"></i>
                                    Tambah Minggu RPS</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <br>
            @php
                print($detail_rps_list);
            @endphp
            <table class="table table-bordered" style="text-align: center">
                <thead style="background-color: lightgray">
                    <tr>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 5%">Kode Minggu RPS</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 5%">Kode Penilaian</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 5%">Kode SubCMPK</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 5%">Minggu Ke-</th>
                        <th class="align-middle" scope="col" colspan="1" style="width: 10%">Bentuk Pembelajaran
                        </th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Indikator Minggu RPS
                        </th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Kriteria Minggu RPS
                        </th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 20%">Deskripsi Pembelajaran
                        </th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Materi Pembelajaran
                        </th>
                        </th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Teknik Penilaian
                        </th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Edit</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Delete</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($minggu_rps_list as $minggu_rps)
                        <tr>
                            <td scope="row">{{ $minggu_rps->kodeMingguRPS }}</td>
                            <td scope="row">kode penilaian</td>
                            <td scope="row">{{ $minggu_rps->kodeSubCPMK }}</td>
                            <td scope="row">{{ $minggu_rps->mingguKe }}</td>
                            @if ($minggu_rps->bentukPembelajaran == '1')
                                <td scope="row">{{ 'Luring' }}</td>
                            @else
                                <td scope="row">{{ 'Daring' }} </td>
                            @endif
                            <td scope="row">{{ $minggu_rps->indikatorMingguRPS }}</td>
                            <td scope="row">{{ $minggu_rps->kriteriaMingguRPS }}</td>
                            <td scope="row">{{ $minggu_rps->deskripsiPembelajaran }}</td>
                            <td scope="row">{{ $minggu_rps->materiPembelajaran }}</td>
                            <td scope="row">
                                {{ $a=$detail_rps_list->where('kodeRPS', $rps->kodeRPS)->where('kodeMingguRPS', $minggu_rps->kodeMingguRPS)->first()->kodePenilaian ?? '-' }}
                                <br>
                                {{ $teknik_penilaian_list->where('kodePenilaian', $a)->where('kodeRPS', $rps->kodeRPS)->first()->teknikPenilaian ?? '-' }}

                                {{-- {{ $teknik_penilaian['teknikPenilaian'] ?? '-' }} --}}
                            </td>
                            <td scope="row">
                                <a class="btn btn-primary"
                                    href="{{ route('edit_minggu_rps', $minggu_rps->kodeMingguRPS) }}">Edit</a>
                            </td>
                            <td scope="row">
                                <a class="btn btn-danger"
                                    href="{{ route('delete_minggu_rps', $minggu_rps->kodeMingguRPS) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            </tbody>
            </table>
        @endsection
