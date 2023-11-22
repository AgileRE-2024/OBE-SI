@extends('layout.dashboard')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Cari RPS</h6>
    </div>
    <div class="card-body" style="width: auto">
        <div class="col-sm-8">
            <form method="post" action="{{ route('processForm') }}">
                @csrf
                    <div class="form-group">
                        <label for="kodeMK">Mata Kuliah</label>
                    @error('kodeMK')
                        <h6 style="color: #BF2C45">{{ $message }}</h6>
                    @enderror
                    <select name="kodeMK" id='kodeMK' class="form-select">
                        <option value="">-- Pilih Mata Kuliah --</option>
                        @foreach ($mk_list as $mk)
                            <option value="{{ $mk->kodeMK }}">{{ $mk->kodeMK }} - {{ $mk->namaMK }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="tahunAjaran">Tahun Ajaran</label>
                    @error('tahunAjaran')
                        <h6 style="color: #BF2C45">{{ $message }}</h6>
                    @enderror
                    <input type="text" name="tahunAjaran" class="form-control"
                        placeholder="Tahun Ajaran">
                </div>

                <div class="form-group pt-4">
                    <button type="submit" name="submit" value="submit" id="submit"
                        class="btn btn-dark btn-sm"><i class="fa fa-fw fa-plus-circle"></i>
                        Cari RPS</button>
                </div>
                
            </form>
            
    @php
        $rps = $rps_list->where('kodeRPS', $kodeRPS)->first();
        // print($rps);
        $mk = $mk_list->where('kodeMK',$rps->kodeMK)->first();
        // print($mk);
        $bk_list=$mk->Bahan_Kajian;
        $counterBk = $mk->Bahan_Kajian->count();
    @endphp
    <div class="content px-4">
        <div class="content px-4">
            <div style="display: flex; justify-content: space-between;">
                <div>
                    @php
                        $currentYear = date('Y'); // Mengambil tahun saat ini
                    @endphp
                    @if ($tahunAjaran >= $currentYear)
                    @if (auth()->user()->role == 0)
                        <div class="pl-2">
                            <a id="edit" class="btn btn-warning" href="{{ route('edit_rps.teknik_penilaian', ['kodeRPS' => $rps->kodeRPS]) }}" style="float: left;"><i
                                    class="bi bi-pencil-square"></i> Edit RPS</a>
                        </div>
                    @endif
                    @endif
                </div>
                

                

                <div style="display: flex;">
                    <div style="margin-right: 10px;">
                        <a id="pdf" class="btn btn-outline-danger" href="{{ route('export_rps', ['type'=>'pdf', 'kodeRPS'=>$kodeRPS]) }}"><i
                                class="bi bi-file-earmark-pdf-fill"></i> Export PDF</a>
                    </div>
                    {{-- <div>
                        <a id="excel" class="btn btn-success" href="/dashboard/rps/exportExcel"><i
                                class="bi bi-file-earmark-excel"></i> Export Excel</a>
                    </div> --}}
                </div>
            </div>
            
            <br>
            <table class="table table-bordered" style="text-align: center">
                
                <thead style="background-color: lightgray">
                        <tr>
                            <th class="align-middle" scope="col" rowspan="3" colspan="1" style="width: 15%"><img src="{{ asset('unair.png') }}" width="75" height="75"></th>
                            <th class="align-middle" scope="col" rowspan="3" colspan="5" style="width: 70%">UNIVERSITAS AIRLANGGA<br>FAKULTAS SAINS DAN TEKNOLOGI<br>PRODI SISTEM INFORMASI</th>
                            <th class="align-middle" scope="col" rowspan="3" colspan="1" style="width: 15%">{{ $kodeRPS }}</th>
                        </tr>
                </thead>
                <tbody>
                    {{-- <h1>{{ $mk->with('Bahan_Kajian')->first()->namaBK }}</h1> --}}
                    <tr>
                        <th class="align-middle" scope="col" colspan="7" style="width: 100%">RENCANA PEMBELAJARAN SEMESTER</th>
                    </tr>
                    <tr>
                        <th class="align-middle"  rowspan="1" colspan="2" style="width: 25%">MATA KULIAH (MK)</th>
                        <th class="align-middle"  rowspan="1" style="width: 10%">KODE</th>
                        <th class="align-middle"  rowspan="1" style="width: 25%">Bahan Kajian (BK)</th>
                        <th class="align-middle"  rowspan="1" colspan="1" style="width: 15%">BOBOT (sks)</th>
                        <th class="align-middle"  rowspan="1" style="width: 10%">SEMESTER</th>
                        <th class="align-middle"  rowspan="1" style="width: 15%">Tanggal Penyusunan</th>
                    </tr>
                        @if ($counterBk == 1)
                        <tr>
                            <td class="align-middle"  rowspan={{ $counterBk  }} colspan="2" style="width: 25%">{{ $mk->namaMK }}
                            @if ($mk->jenisMK == 1)
                                <span>(Teori)</span>
                            @endif
                            @if ($mk->jenisMK == 2)
                                <span>(Praktikum)</span>
                            @endif
                            @if ($mk->jenisMK == 3)
                                <span>(Praktikum Lapangan)</span>
                            @endif
                        </td>
                            <td class="align-middle"  rowspan={{ $counterBk  }} style="width: 10%">{{ $mk->kodeMK }}</td>
                            <td class="align-middle"  rowspan="1" style="width: 25%">({{ $bk_list->first()->kodeBK }}) <br> {{ $bk_list->first()->namaBK }}</td>
                            <td class="align-middle"  rowspan={{ $counterBk  }} style="width: 15%">{{ $mk->sks }}</td>
                            <td class="align-middle"  rowspan={{ $counterBk  }} style="width: 10%">{{ $mk->semester }}</td>
                            <td class="align-middle"  rowspan={{ $counterBk  }} style="width: 15%">{{ $rps->created_at->format('d-m-Y') }}</td>
                        </tr>
                        @else
                        @for ($i = 0; $i < $counterBk; $i++)
                            @if ($i == 0)
                            <tr>
                            <td class="align-middle"  rowspan={{ $counterBk  }} colspan="2" style="width: 25%">{{ $mk->namaMK }}</td>
                            <td class="align-middle"  rowspan={{ $counterBk  }} style="width: 10%">{{ $mk->kodeMK }}</td>
                            <td class="align-middle"  rowspan="1" style="width: 25%">({{ $bk_list->first()->kodeBK }}) <br> {{ $bk_list->first()->namaBK }}</td>
                            <td class="align-middle"  rowspan={{ $counterBk  }} style="width: 15%">{{ $mk->sks }}</td>
                            <td class="align-middle"  rowspan={{ $counterBk  }} style="width: 10%">{{ $mk->semester }}</td>
                            <td class="align-middle"  rowspan={{ $counterBk  }} style="width: 15%">{{ $mk->created_at->format('d-m-Y') }}</td>
                            </tr>
                                @else
                                <tr>
                                    <td class="align-middle"  rowspan="1" style="width: 10%">({{ $bk_list->get($i)->kodeBK }}) <br> {{ $bk_list->get($i)->namaBK }}</td>
                                </tr>
                                @endif
                        @endfor
                        @endif

                        {{-- ini dosen --}}
                        @php
                            
                            // print($bk_list);
                        @endphp
                        <tr>
                            <th style="text-align: left;" colspan="2" rowspan="2" style="width: 25%">Pengesahan</th>
                            <th style="text-align: left;" colspan="2" >Dosen Pengembang RPS</th>
                            <th style="text-align: left;" colspan="1" >Koordinator BK</th>
                            <th style="text-align: left;" colspan="3" >Ka Prodi</th>
                        </tr>
                
                        <tr>
                            <td class="align-middle" colspan="2" style="width: 20%"><br><br>TTD<br>
                                @php
                                $dosen = $dosen_list->where('nip', optional($detail_peran_dosen_list->where('kodeRPS', $rps->kodeRPS)
                                    ->where('peranDosen', 'Dosen Pengembang RPS')->first())->nip)->first();
                                @endphp
                                @if ($dosen)
                                    {{ $dosen->namaDosen }}
                                @else
                                    <div class="alert alert-warning">
                                        Tambahkan Dosen Pengembang RPS
                                    </div>
                                @endif
                                
                            </td>
                            <td class="align-middle" colspan="1" style="width: 30%"><br><br>TTD<br>
                                @php
                                $dosen = $dosen_list->where('nip', optional($detail_peran_dosen_list->where('kodeRPS', $rps->kodeRPS)
                                    ->where('peranDosen', 'Koordinator BK')->first())->nip)->first();
                                @endphp
                        
                                @if ($dosen)
                                    {{ $dosen->namaDosen }}
                                @else
                                    <div class="alert alert-warning">
                                        Tambahkan Koordinator BK
                                    </div>
                                @endif
                            
                            </td>
                            <td class="align-middle" colspan="3" style="width: 25%"><br><br>TTD<br>{{ $dosen_list->where('nip','=',$rps->kps)->first()->namaDosen ?? '-'}}</td>
                        </tr>
                    @php
                        $list_cpl = collect();
                        $uniqueIds = [];

                        foreach ($mk->Bahan_Kajian as $bk) {
                            foreach ($bk->CPL_Prodi as $cpl) {
                                $kodeCPL = $cpl->kodeCPL;
                                $deskripsiCPL = $cpl->deskripsiCPL;

                                if (!in_array($kodeCPL, $uniqueIds)) {
                                    $uniqueIds[] = $kodeCPL;
                                    $list_cpl->push([
                                        'kodeCPL' => $kodeCPL,
                                        'deskripsiCPL' => $deskripsiCPL,
                                    ]);
                                }
                            }
                        }
                        $list_cpmk = collect();
                        $uniqueIds = [];

                        foreach ($mk->CPMK as $cpmk) {
                                $kodeCPMK = $cpmk->kodeCPMK;
                                $deskripsiCPMK = $cpmk->deskripsiCPMK;
                                $kodeCPL = $cpmk->kodeCPL;

                                if (!in_array($kodeCPMK, $uniqueIds)) {
                                    $uniqueIds[] = $kodeCPMK;
                                    $list_cpmk->push([
                                        'kodeCPMK' => $kodeCPMK,
                                        'deskripsiCPMK' => $deskripsiCPMK,
                                        'kodeCPL'=> $kodeCPL,
                                    ]);
                            }
                        }
                        $list_dosen_pengampu = $detail_peran_dosen_list->where('kodeRPS', $rps->kodeRPS)->where('peranDosen', 'Dosen Pengampu')->pluck('nip');
                        $list_minggu_rps = collect();
                        $uniqueIds = [];
                        foreach ($detail_rps_list->where('kodeRPS', '=', $rps->kodeRPS) as $dr) {
                                $kodeMingguRPS = $dr->kodeMingguRPS;
                                $kodePenilaian = $dr->kodePenilaian;
                                if (!in_array($kodeMingguRPS, $uniqueIds)) {
                                    $uniqueIds[] = $kodeMingguRPS;
                                    $list_minggu_rps->push([
                                        'kodeMingguRPS' => $kodeMingguRPS,
                                        'kodePenilaian' => $kodePenilaian,
                                    ]);
                            }
                        }
                        $list_kodeCPMK= $list_cpmk->pluck('kodeCPMK');
                        $list_kode_minggu_rps= $list_minggu_rps->pluck('kodeMingguRPS');
                        $list_kode_penilaian= $list_minggu_rps->pluck('kodePenilaian');
                        $list_kodeCPMK= $list_cpmk->pluck('kodeCPMK');
                        $list_subcpmk = $subcpmk_list->whereIn('kodeCPMK', $list_kodeCPMK);
                        // print('INI LHO'.$list_minggu_rps);
                        // print($dosen_list->where('nip','=',$rps->kps)->first());
                        // $list_dosen_pengampu=$dosen_list->where('nip', $detail_peran_dosen_list->where('kodeRPS', '=', $rps->kodeRPS)->where('peranDosen', '=', 'Dosen Pengampu'));
                        // print_r($list_minggu_rps);
                        $rowspanCP = 6;
                        $rowspanCP = $rowspanCP+$list_cpl->count()+$list_cpmk->count()+$list_subcpmk->count();
                    @endphp
                    <tr>
                        <th style="text-align: left;" rowspan={{ $rowspanCP }} colspan="1">Capaian Pembelajaran</th>
                    </tr>
                    <tr>
                        <th style="text-align: left;" rowspan="1" colspan="3">CPL-PRODI yang dibebankan pada MK</th>
                    </tr>
                    {{-- Looping CPL --}}
                    @foreach ($list_cpl as $cpl)
                    <tr>
                        <td style="text-align: left;" rowspan="1" colspan="1">{{ $cpl['kodeCPL'] }}</td>
                        <td style="text-align: left;" rowspan="1" colspan="6">{{ $cpl['deskripsiCPL'] }}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <th style="text-align: left;" rowspan="1" colspan="3">Capaian Pembelajaran Mata Kuliah (CPMK)</th>
                    </tr>
                    @foreach ($list_cpmk as $cpmk)
                    <tr>
                        <td style="text-align: left;" rowspan="1" colspan="1">{{ $cpmk['kodeCPMK'] }}</td>
                        <td style="text-align: left;" rowspan="1" colspan="6">{{ $cpmk['deskripsiCPMK'] }}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <th style="text-align: left;" rowspan="1" colspan="3">Kemampuan akhir tiap tahapan belajar (Sub-CPMK)</th>
                    </tr>
                    @foreach ($list_subcpmk as $subcpmk)
                    <tr>
                        <td style="text-align: left;" rowspan="1" colspan="1">{{ $subcpmk->kodeSubCPMK }}</td>
                        <td style="text-align: left;" rowspan="1" colspan="6">{{ $subcpmk->deskripsiSubCPMK }}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <th style="text-align: left;" rowspan="1" colspan="3">Korelasi CPMK terhadap Sub-CPMK</th>
                    </tr>
                    <tr>
                        <td style="text-align: left;" scope="col" rowspan="1" colspan="7">
                            <table>
                                <tr>
                                    <th colspan="2">Capaian Pembelajaran Mata Kuliah (CPMK)</th>
                                    <th class="align-middle" rowspan="2">CPL yang Didukung</th>
                                </tr>
                                <tr>
                                    <th>Kode CPMK</th>
                                    <th>Deskripsi CPMK</th>
                                </tr>
                                @foreach ($list_cpmk as $cpmk)
                                    <tr>
                                        <td>{{ $cpmk['kodeCPMK'] }}</td>
                                        <td>{{ $cpmk['deskripsiCPMK'] }}</td>
                                        <td>{{ $cpmk['kodeCPL'] }}</td>
                                    </tr>
                                @endforeach
                                
                            </table>
                            
                        </td>
                    </tr>
                    <tr>
                        <th style="text-align: left;" rowspan="1" colspan="1">Deskripsi singkat MK</th>
                        <td style="text-align: left;" rowspan="1" colspan="7">{{ $mk->deskripsiMK }}</td>
                    </tr>
                    {{-- <tr>
                        <th style="text-align: left;" rowspan="1" colspan="1">Bahan Kajian: Materi Pembelajaran</th>
                        <th style="text-align: left;" rowspan="1" colspan="7">...</th>
                    </tr> --}}
                    <tr>
                        <th style="text-align: left;" rowspan="1" colspan="1">Pustaka</th>
                        <td style="text-align: left;" rowspan="1" colspan="7">{{ $rps->pustaka }}</td>
                    </tr>
                    <tr>
                        <th style="text-align: left;" rowspan="1" colspan="1">Dosen Pengampu</th>
                        <td style="text-align: left;" rowspan="1" colspan="7"> 
                        @if (!$dosen_list)
                            <div class="alert alert-warning"><span>

                                Tambahkan Dosen Pengampu
                            </span>
                            </div>
                        @else
                            @foreach ($dosen_list->whereIn('nip', $list_dosen_pengampu) as $dosen)
                                <span>{{ $dosen->namaDosen }}, </span>
                            @endforeach
                        @endif
                        </td>
                    </tr>
                    <tr>
                        <th style="text-align: left;" rowspan="1" colspan="1">Mata Kuliah Prasyarat</th>
                        <td style="text-align: left;" rowspan="1" colspan="7">{{ $mk->mat_kodeMK ? $mk->mat_kodeMK : '-'}}</td>
                    </tr>
                    

                </tbody>
            </table>
            
            <table class="table table-bordered" style="text-align: center">
                <thead style="background-color: lightgray">
                        <tr>
                            <th class="align-middle" rowspan="2" style="width: 5%">Minggu Ke-</th>
                            <th class="align-middle" rowspan="2" style="width: 15%">Kemampuan akhir tiap tahapan belajar (Sub-CPMK)</th>
                            <th class="align-middle" rowspan="2" style="width: 10%">Indikator</th>
                            <th class="align-middle" rowspan="2" style="width: 10%">Kriteria & Teknik</th>
                            <th class="align-middle" colspan="2" style="width: 20%">Bentuk Pembelajaran Metode Pembelajaran Penugasan Mahasiswa [Estimasi Waktu]</th>
                            <th class="align-middle" rowspan="2" style="width: 10%">Materi Pembelajaran[Pustaka]</th>
                            <th class="align-middle" rowspan="2" style="width: 10%">Bobot Penilaian(%)</th>
                        </tr>
                </thead>
                <tr style="background-color: lightgray" >
                    <th>(1)</th>
                    <th>(2)</th>
                    <th>(3)</th>
                    <th>(4)</th>
                    <th>Luring(5)</th>
                    <th>Daring(6)</th>
                    <th>(7)</th>
                    <th>(8)</th>
                </tr>
                <tbody>
                    @foreach ($minggu_rps_list->whereIn('kodeMingguRPS', $list_kode_minggu_rps) as $minggu_rps)
                    <tr>
                        <td scope="row">{{ $minggu_rps->mingguKe }}</td>
                        <td scope="row">{{ $minggu_rps->kodeSubCPMK }}</td>
                        <td scope="row">{{ $minggu_rps->indikatorMingguRPS }}</td>
                        <td scope="row">{{ $minggu_rps->kriteriaMingguRPS }} <br> 
                            @if ( $list_kode_penilaian->get(($loop->iteration)-1)!=null)
                            [ {{ $list_kode_penilaian->get(($loop->iteration)-1) }} ] <br> {{ $teknik_penilaian_list->where('kodePenilaian', '=', $list_kode_penilaian->get(($loop->iteration)-1))->where('kodeRPS', '=', $rps->kodeRPS)->first()->teknikPenilaian }}</td>
                            @else
                            - </td>
                            @endif
                        @if ($minggu_rps->bentukPembelajaran == '1')
                        <td scope="row">{{ 'Luring' }}</td>
                        <td></td>
                        @else
                        <td></td>
                        <td scope="row">{{ 'Daring' }} </td>
                        @endif
                        <td scope="row">{{ $minggu_rps->materiPembelajaran }}</td>
                        <td scope="row">{{ $teknik_penilaian_list->where('kodePenilaian', '=', $list_kode_penilaian->get(($loop->iteration)-1))->where('kodeRPS', '=', $rps->kodeRPS)->first()->bobotPenilaian ?? '-' }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            

        </div>
    </div>
@else
    
@endif

    
            
            @if (isset($message))
            <div class="alert alert-warning">
                {{ $message }}
            </div>
            @if ($message == "Data tidak ditemukan, Silakan buat RPS")
            @if (auth()->user()->role == 0)
            <div class="pr-3">
                <a id="buatRPS" class="btn btn-outline-success" href="{{ route('rps_create') }}"><i
                        class="bi bi-pencil-square"> </i>Buat RPS</a>
            </div>
            @endif
            @endif
            @endif
        </div>
    </div>
</div>



@if(isset($message) && $message == "Data ditemukan")
    @php
        $rps = $rps_list->where('kodeRPS', $kodeRPS)->first();
        // print($rps);
        $mk = $mk_list->where('kodeMK',$rps->kodeMK)->first();
        // print($mk);
        $bk_list=$mk->Bahan_Kajian;
        $counterBk = $mk->Bahan_Kajian->count();
    @endphp
    <div class="content px-4">
        <div class="content px-4">
            <div style="display: flex; justify-content: space-between;">
                <div>
                    @php
                        $currentYear = date('Y'); // Mengambil tahun saat ini
                    @endphp
                    @if ($tahunAjaran >= $currentYear)
                    @if (auth()->user()->role == 0)
                        <div class="pl-2">
                            <a id="edit" class="btn btn-warning" href="{{ route('edit_rps.teknik_penilaian', ['kodeRPS' => $rps->kodeRPS]) }}" style="float: left;"><i
                                    class="bi bi-pencil-square"></i> Edit RPS</a>
                        </div>
                    @endif
                    @endif
                </div>
                

                

                <div style="display: flex;">
                    <div style="margin-right: 10px;">
                        <a id="pdf" class="btn btn-outline-danger" href="{{ route('export_rps', ['type'=>'pdf', 'kodeRPS'=>$kodeRPS]) }}"><i
                                class="bi bi-file-earmark-pdf-fill"></i> Export PDF</a>
                    </div>
                    {{-- <div>
                        <a id="excel" class="btn btn-success" href="/dashboard/rps/exportExcel"><i
                                class="bi bi-file-earmark-excel"></i> Export Excel</a>
                    </div> --}}
                </div>
            </div>
            
            <br>
            <table class="table table-bordered" style="text-align: center">
                
                <thead style="background-color: lightgray">
                        <tr>
                            <th class="align-middle" scope="col" rowspan="3" colspan="1" style="width: 15%"><img src="{{ asset('unair.png') }}" width="75" height="75"></th>
                            <th class="align-middle" scope="col" rowspan="3" colspan="5" style="width: 70%">UNIVERSITAS AIRLANGGA<br>FAKULTAS SAINS DAN TEKNOLOGI<br>PRODI SISTEM INFORMASI</th>
                            <th class="align-middle" scope="col" rowspan="3" colspan="1" style="width: 15%">{{ $kodeRPS }}</th>
                        </tr>
                </thead>
                <tbody>
                    {{-- <h1>{{ $mk->with('Bahan_Kajian')->first()->namaBK }}</h1> --}}
                    <tr>
                        <th class="align-middle" scope="col" colspan="7" style="width: 100%">RENCANA PEMBELAJARAN SEMESTER</th>
                    </tr>
                    <tr>
                        <th class="align-middle"  rowspan="1" colspan="2" style="width: 25%">MATA KULIAH (MK)</th>
                        <th class="align-middle"  rowspan="1" style="width: 10%">KODE</th>
                        <th class="align-middle"  rowspan="1" style="width: 25%">Bahan Kajian (BK)</th>
                        <th class="align-middle"  rowspan="1" colspan="1" style="width: 15%">BOBOT (sks)</th>
                        <th class="align-middle"  rowspan="1" style="width: 10%">SEMESTER</th>
                        <th class="align-middle"  rowspan="1" style="width: 15%">Tanggal Penyusunan</th>
                    </tr>
                        @if ($counterBk == 1)
                        <tr>
                            <td class="align-middle"  rowspan={{ $counterBk  }} colspan="2" style="width: 25%">{{ $mk->namaMK }}
                            @if ($mk->jenisMK == 1)
                                <span>(Teori)</span>
                            @endif
                            @if ($mk->jenisMK == 2)
                                <span>(Praktikum)</span>
                            @endif
                            @if ($mk->jenisMK == 3)
                                <span>(Praktikum Lapangan)</span>
                            @endif
                        </td>
                            <td class="align-middle"  rowspan={{ $counterBk  }} style="width: 10%">{{ $mk->kodeMK }}</td>
                            <td class="align-middle"  rowspan="1" style="width: 25%">({{ $bk_list->first()->kodeBK }}) <br> {{ $bk_list->first()->namaBK }}</td>
                            <td class="align-middle"  rowspan={{ $counterBk  }} style="width: 15%">{{ $mk->sks }}</td>
                            <td class="align-middle"  rowspan={{ $counterBk  }} style="width: 10%">{{ $mk->semester }}</td>
                            <td class="align-middle"  rowspan={{ $counterBk  }} style="width: 15%">{{ $rps->created_at->format('d-m-Y') }}</td>
                        </tr>
                        @else
                        @for ($i = 0; $i < $counterBk; $i++)
                            @if ($i == 0)
                            <tr>
                            <td class="align-middle"  rowspan={{ $counterBk  }} colspan="2" style="width: 25%">{{ $mk->namaMK }}</td>
                            <td class="align-middle"  rowspan={{ $counterBk  }} style="width: 10%">{{ $mk->kodeMK }}</td>
                            <td class="align-middle"  rowspan="1" style="width: 25%">({{ $bk_list->first()->kodeBK }}) <br> {{ $bk_list->first()->namaBK }}</td>
                            <td class="align-middle"  rowspan={{ $counterBk  }} style="width: 15%">{{ $mk->sks }}</td>
                            <td class="align-middle"  rowspan={{ $counterBk  }} style="width: 10%">{{ $mk->semester }}</td>
                            <td class="align-middle"  rowspan={{ $counterBk  }} style="width: 15%">{{ $mk->created_at->format('d-m-Y') }}</td>
                            </tr>
                                @else
                                <tr>
                                    <td class="align-middle"  rowspan="1" style="width: 10%">({{ $bk_list->get($i)->kodeBK }}) <br> {{ $bk_list->get($i)->namaBK }}</td>
                                </tr>
                                @endif
                        @endfor
                        @endif

                        {{-- ini dosen --}}
                        @php
                            
                            // print($bk_list);
                        @endphp
                        <tr>
                            <th style="text-align: left;" colspan="2" rowspan="2" style="width: 25%">Pengesahan</th>
                            <th style="text-align: left;" colspan="2" >Dosen Pengembang RPS</th>
                            <th style="text-align: left;" colspan="1" >Koordinator BK</th>
                            <th style="text-align: left;" colspan="3" >Ka Prodi</th>
                        </tr>
                
                        <tr>
                            <td class="align-middle" colspan="2" style="width: 20%"><br><br>TTD<br>
                                @php
                                $dosen = $dosen_list->where('nip', optional($detail_peran_dosen_list->where('kodeRPS', $rps->kodeRPS)
                                    ->where('peranDosen', 'Dosen Pengembang RPS')->first())->nip)->first();
                                @endphp
                                @if ($dosen)
                                    {{ $dosen->namaDosen }}
                                @else
                                    <div class="alert alert-warning">
                                        Tambahkan Dosen Pengembang RPS
                                    </div>
                                @endif
                                
                            </td>
                            <td class="align-middle" colspan="1" style="width: 30%"><br><br>TTD<br>
                                @php
                                $dosen = $dosen_list->where('nip', optional($detail_peran_dosen_list->where('kodeRPS', $rps->kodeRPS)
                                    ->where('peranDosen', 'Koordinator BK')->first())->nip)->first();
                                @endphp
                        
                                @if ($dosen)
                                    {{ $dosen->namaDosen }}
                                @else
                                    <div class="alert alert-warning">
                                        Tambahkan Koordinator BK
                                    </div>
                                @endif
                            
                            </td>
                            <td class="align-middle" colspan="3" style="width: 25%"><br><br>TTD<br>{{ $dosen_list->where('nip','=',$rps->kps)->first()->namaDosen ?? '-'}}</td>
                        </tr>
                    @php
                        $list_cpl = collect();
                        $uniqueIds = [];

                        foreach ($mk->Bahan_Kajian as $bk) {
                            foreach ($bk->CPL_Prodi as $cpl) {
                                $kodeCPL = $cpl->kodeCPL;
                                $deskripsiCPL = $cpl->deskripsiCPL;

                                if (!in_array($kodeCPL, $uniqueIds)) {
                                    $uniqueIds[] = $kodeCPL;
                                    $list_cpl->push([
                                        'kodeCPL' => $kodeCPL,
                                        'deskripsiCPL' => $deskripsiCPL,
                                    ]);
                                }
                            }
                        }
                        $list_cpmk = collect();
                        $uniqueIds = [];

                        foreach ($mk->CPMK as $cpmk) {
                                $kodeCPMK = $cpmk->kodeCPMK;
                                $deskripsiCPMK = $cpmk->deskripsiCPMK;
                                $kodeCPL = $cpmk->kodeCPL;

                                if (!in_array($kodeCPMK, $uniqueIds)) {
                                    $uniqueIds[] = $kodeCPMK;
                                    $list_cpmk->push([
                                        'kodeCPMK' => $kodeCPMK,
                                        'deskripsiCPMK' => $deskripsiCPMK,
                                        'kodeCPL'=> $kodeCPL,
                                    ]);
                            }
                        }
                        $list_dosen_pengampu = $detail_peran_dosen_list->where('kodeRPS', $rps->kodeRPS)->where('peranDosen', 'Dosen Pengampu')->pluck('nip');
                        $list_minggu_rps = collect();
                        $uniqueIds = [];
                        foreach ($detail_rps_list->where('kodeRPS', '=', $rps->kodeRPS) as $dr) {
                                $kodeMingguRPS = $dr->kodeMingguRPS;
                                $kodePenilaian = $dr->kodePenilaian;
                                if (!in_array($kodeMingguRPS, $uniqueIds)) {
                                    $uniqueIds[] = $kodeMingguRPS;
                                    $list_minggu_rps->push([
                                        'kodeMingguRPS' => $kodeMingguRPS,
                                        'kodePenilaian' => $kodePenilaian,
                                    ]);
                            }
                        }
                        $list_kodeCPMK= $list_cpmk->pluck('kodeCPMK');
                        $list_kode_minggu_rps= $list_minggu_rps->pluck('kodeMingguRPS');
                        $list_kode_penilaian= $list_minggu_rps->pluck('kodePenilaian');
                        $list_kodeCPMK= $list_cpmk->pluck('kodeCPMK');
                        $list_subcpmk = $subcpmk_list->whereIn('kodeCPMK', $list_kodeCPMK);
                        // print('INI LHO'.$list_minggu_rps);
                        // print($dosen_list->where('nip','=',$rps->kps)->first());
                        // $list_dosen_pengampu=$dosen_list->where('nip', $detail_peran_dosen_list->where('kodeRPS', '=', $rps->kodeRPS)->where('peranDosen', '=', 'Dosen Pengampu'));
                        // print_r($list_minggu_rps);
                        $rowspanCP = 6;
                        $rowspanCP = $rowspanCP+$list_cpl->count()+$list_cpmk->count()+$list_subcpmk->count();
                    @endphp
                    <tr>
                        <th style="text-align: left;" rowspan={{ $rowspanCP }} colspan="1">Capaian Pembelajaran</th>
                    </tr>
                    <tr>
                        <th style="text-align: left;" rowspan="1" colspan="3">CPL-PRODI yang dibebankan pada MK</th>
                    </tr>
                    {{-- Looping CPL --}}
                    @foreach ($list_cpl as $cpl)
                    <tr>
                        <td style="text-align: left;" rowspan="1" colspan="1">{{ $cpl['kodeCPL'] }}</td>
                        <td style="text-align: left;" rowspan="1" colspan="6">{{ $cpl['deskripsiCPL'] }}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <th style="text-align: left;" rowspan="1" colspan="3">Capaian Pembelajaran Mata Kuliah (CPMK)</th>
                    </tr>
                    @foreach ($list_cpmk as $cpmk)
                    <tr>
                        <td style="text-align: left;" rowspan="1" colspan="1">{{ $cpmk['kodeCPMK'] }}</td>
                        <td style="text-align: left;" rowspan="1" colspan="6">{{ $cpmk['deskripsiCPMK'] }}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <th style="text-align: left;" rowspan="1" colspan="3">Kemampuan akhir tiap tahapan belajar (Sub-CPMK)</th>
                    </tr>
                    @foreach ($list_subcpmk as $subcpmk)
                    <tr>
                        <td style="text-align: left;" rowspan="1" colspan="1">{{ $subcpmk->kodeSubCPMK }}</td>
                        <td style="text-align: left;" rowspan="1" colspan="6">{{ $subcpmk->deskripsiSubCPMK }}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <th style="text-align: left;" rowspan="1" colspan="3">Korelasi CPMK terhadap Sub-CPMK</th>
                    </tr>
                    <tr>
                        <td style="text-align: left;" scope="col" rowspan="1" colspan="7">
                            <table>
                                <tr>
                                    <th colspan="2">Capaian Pembelajaran Mata Kuliah (CPMK)</th>
                                    <th class="align-middle" rowspan="2">CPL yang Didukung</th>
                                </tr>
                                <tr>
                                    <th>Kode CPMK</th>
                                    <th>Deskripsi CPMK</th>
                                </tr>
                                @foreach ($list_cpmk as $cpmk)
                                    <tr>
                                        <td>{{ $cpmk['kodeCPMK'] }}</td>
                                        <td>{{ $cpmk['deskripsiCPMK'] }}</td>
                                        <td>{{ $cpmk['kodeCPL'] }}</td>
                                    </tr>
                                @endforeach
                                
                            </table>
                            
                        </td>
                    </tr>
                    <tr>
                        <th style="text-align: left;" rowspan="1" colspan="1">Deskripsi singkat MK</th>
                        <td style="text-align: left;" rowspan="1" colspan="7">{{ $mk->deskripsiMK }}</td>
                    </tr>
                    {{-- <tr>
                        <th style="text-align: left;" rowspan="1" colspan="1">Bahan Kajian: Materi Pembelajaran</th>
                        <th style="text-align: left;" rowspan="1" colspan="7">...</th>
                    </tr> --}}
                    <tr>
                        <th style="text-align: left;" rowspan="1" colspan="1">Pustaka</th>
                        <td style="text-align: left;" rowspan="1" colspan="7">{{ $rps->pustaka }}</td>
                    </tr>
                    <tr>
                        <th style="text-align: left;" rowspan="1" colspan="1">Dosen Pengampu</th>
                        <td style="text-align: left;" rowspan="1" colspan="7"> 
                        @if (!$dosen_list)
                            <div class="alert alert-warning"><span>

                                Tambahkan Dosen Pengampu
                            </span>
                            </div>
                        @else
                            @foreach ($dosen_list->whereIn('nip', $list_dosen_pengampu) as $dosen)
                                <span>{{ $dosen->namaDosen }}, </span>
                            @endforeach
                        @endif
                        </td>
                    </tr>
                    <tr>
                        <th style="text-align: left;" rowspan="1" colspan="1">Mata Kuliah Prasyarat</th>
                        <td style="text-align: left;" rowspan="1" colspan="7">{{ $mk->mat_kodeMK ? $mk->mat_kodeMK : '-'}}</td>
                    </tr>
                    

                </tbody>
            </table>
            
            <table class="table table-bordered" style="text-align: center">
                <thead style="background-color: lightgray">
                        <tr>
                            <th class="align-middle" rowspan="2" style="width: 5%">Minggu Ke-</th>
                            <th class="align-middle" rowspan="2" style="width: 15%">Kemampuan akhir tiap tahapan belajar (Sub-CPMK)</th>
                            <th class="align-middle" rowspan="2" style="width: 10%">Indikator</th>
                            <th class="align-middle" rowspan="2" style="width: 10%">Kriteria & Teknik</th>
                            <th class="align-middle" colspan="2" style="width: 20%">Bentuk Pembelajaran Metode Pembelajaran Penugasan Mahasiswa [Estimasi Waktu]</th>
                            <th class="align-middle" rowspan="2" style="width: 10%">Materi Pembelajaran[Pustaka]</th>
                            <th class="align-middle" rowspan="2" style="width: 10%">Bobot Penilaian(%)</th>
                        </tr>
                </thead>
                <tr style="background-color: lightgray" >
                    <th>(1)</th>
                    <th>(2)</th>
                    <th>(3)</th>
                    <th>(4)</th>
                    <th>Luring(5)</th>
                    <th>Daring(6)</th>
                    <th>(7)</th>
                    <th>(8)</th>
                </tr>
                <tbody>
                    @foreach ($minggu_rps_list->whereIn('kodeMingguRPS', $list_kode_minggu_rps) as $minggu_rps)
                    <tr>
                        <td scope="row">{{ $minggu_rps->mingguKe }}</td>
                        <td scope="row">{{ $minggu_rps->kodeSubCPMK }}</td>
                        <td scope="row">{{ $minggu_rps->indikatorMingguRPS }}</td>
                        <td scope="row">{{ $minggu_rps->kriteriaMingguRPS }} <br> 
                            @if ( $list_kode_penilaian->get(($loop->iteration)-1)!=null)
                            [ {{ $list_kode_penilaian->get(($loop->iteration)-1) }} ] <br> {{ $teknik_penilaian_list->where('kodePenilaian', '=', $list_kode_penilaian->get(($loop->iteration)-1))->where('kodeRPS', '=', $rps->kodeRPS)->first()->teknikPenilaian }}</td>
                            @else
                            - </td>
                            @endif
                        @if ($minggu_rps->bentukPembelajaran == '1')
                        <td scope="row">{{ 'Luring' }}</td>
                        <td></td>
                        @else
                        <td></td>
                        <td scope="row">{{ 'Daring' }} </td>
                        @endif
                        <td scope="row">{{ $minggu_rps->materiPembelajaran }}</td>
                        <td scope="row">{{ $teknik_penilaian_list->where('kodePenilaian', '=', $list_kode_penilaian->get(($loop->iteration)-1))->where('kodeRPS', '=', $rps->kodeRPS)->first()->bobotPenilaian ?? '-' }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            

        </div>
    </div>
@else
    
@endif



<script>
    $(document).ready(function () {
        // Saat dokumen siap, tambahkan event listener pada nav-link dengan class "nav-link"
        $(".nav-link").on("click", function () {
            // Hapus kelas "active" dari semua nav-link
            $(".nav-link").removeClass("active");
            // Tambahkan kelas "active" pada nav-link yang sedang diklik
            $(this).addClass("active");

            // Dapatkan ID tab yang sedang diklik
            var tabId = $(this).attr("href");
            // Sembunyikan semua tab konten
            $(".tab-pane").removeClass("show active");
            // Tampilkan tab konten yang sesuai dengan ID yang sedang diklik
            $(tabId).addClass("show active");
        });
    });
</script>
@endsection
