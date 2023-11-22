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
                    <h6 class="m-0 font-weight-bold text-primary">Edit Minggu RPS</h6>
                </div>
                <div class="card-body" style="width: auto">
                    <div class="col-sm-8">
                        <form method="post" action="{{ route('edit_rps.update_minggu_rps', ['kodeMingguRPS' => $kodeMingguRPS, 'kodeRPS'=>$kodeRPS]) }}">
                            @csrf
                            @method('put')
                            {{-- @php
                                $rps = $rps_list->where('kodeRPS', $kodeRPS)->first();
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
                            @endphp --}}

                            <div class="form-group">
                                <label>Kode Minggu RPS</label>
                                @error('kodeMingguRPS')
                                    <h6 style="color: #BF2C45">{{ $message }}</h6>
                                @enderror
                                {{-- <input type="hidden" name="kodeMingguRPS" class="form-control"
                                    placeholder="Kode Minggu RPS" value="{{ old('kodeMingguRPS') ? old('kodeMingguRPS') : $minggu_rps->kodeMingguRPS }}"> --}}
                                    <input type="hidden" name="kodeMingguRPS" class="form-control"
                                    placeholder="Kode Minggu RPS" value="{{ $kodeMingguRPS }}">
                            </div>

                            {{-- @php
                                $rps = $rps_list->where('kodeRPS', $kodeRPS)->first();
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
                                $options=$scpmk->whereIn('kodeCPMK', $list_kodeCPMK)->pluck('kodeSubCPMK');
                                $subcpmk=$scpmk->whereIn('kodeCPMK', $list_kodeCPMK);
                                $detail=$detail_rps_list->where('kodeRPS', $rps->kodeRPS)->where('kodeMingguRPS', $minggu_rps->kodeMingguRPS)->first();
                            @endphp --}}

                            <div class="form-group">
                                <label>Sub CPMK</label>
                                @error('kodeSubCPMK')
                                    <h6 style="color: #BF2C45">{{ $message }}</h6>
                                @enderror
                                <select name="kodeSubCPMK" id='kodeSubCPMK' class="form-select">
                                    <option value="">-- Pilih Sub CMPK --</option>
                                    @foreach ($scpmk as $item)
                                        {{-- <option value="{{ $item }}" {{ $item ==  $minggu_rps->kodeSubCPMK ? 'selected' : ''}}>{{ $item }} - {{ $subcpmk[$loop->index]->deskripsiSubCPMK }}</option> --}}
                                        <option value="{{ $item }}" {{ $item ==  $minggu_rps->kodeSubCPMK ? 'selected' : ''}}>{{ $item }} - {{ $subcpmk[$loop->index]->deskripsiSubCPMK }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Minggu RPS (Contoh. 1)</label>
                                @error('mingguKe')
                                    <h6 style="color: #BF2C45">{{ $message }}</h6>
                                @enderror
                                <input type="text" name="mingguKe" class="form-control" placeholder="Minggu RPS" value="{{ $minggu_rps->mingguKe }}">
                            </div>

                            <div class="form-group">
                                <label>Bentuk Pembelajaran</label>
                                @error('bentukPembelajaran')
                                    <h6 style="color: #BF2C45">{{ $message }}</h6>
                                @enderror
                                <select name="bentukPembelajaran" id='bentukPembelajaran' class="form-select">
                                    <option value="" selected disabled>-- Pilih Bentuk Pembelajaran --</option>
                                    @php
                                        $options=['1','0'];
                                        $opsi=['Luring','Daring']
                                    @endphp
                                    @foreach ($options as $item)
                                        {{-- @foreach ($opsi as $sc) --}}
                                        <option value="{{ $item }}" {{ $item ==  $minggu_rps->bentukPembelajaran ? 'selected' : ''}}>{{ $opsi[$loop->index] }}</option>
                                        {{-- @endforeach --}}
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Indikator Minggu RPS</label>
                                @error('indikatorMingguRPS')
                                    <h6 style="color: #BF2C45">{{ $message }}</h6>
                                @enderror
                                <textarea  rows="3" name="indikatorMingguRPS" class="form-control" 
                                placeholder="Indikator Minggu RPS" value="{{ $minggu_rps->indikatorMingguRPS }}">{{ old('indikatorPembelajaran') ? old('indikatorPembelajaran') : $minggu_rps->indikatorMingguRPS }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Kriteria Minggu RPS</label>
                                @error('kriteriaMingguRPS')
                                    <h6 style="color: #BF2C45">{{ $message }}</h6>
                                @enderror
                                <input type="text" name="kriteriaMingguRPS" class="form-control"
                                    placeholder="Kriteria Minggu RPS" value="{{ $minggu_rps->kriteriaMingguRPS }}">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi Pembelajaran</label>
                                @error('deskripsiPembelajaran')
                                    <h6 style="color: #BF2C45">{{ $message }}</h6>
                                @enderror
                                <textarea  rows="3"  name="deskripsiPembelajaran" class="form-control"
                                    placeholder="Deskripsi Pembelajaran" value="{{ $minggu_rps->deskripsiPembelajaran }}">{{ old('deskripsiPembelajaran') ? old('deskripsiPembelajaran') : $minggu_rps->deskripsiPembelajaran }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Materi Pembelajaran</label>
                                @error('materiPembelajaran')
                                    <h6 style="color: #BF2C45">{{ $message }}</h6>
                                @enderror
                                <input type="text" name="materiPembelajaran" class="form-control"
                                    placeholder="Materi Pembelajaran" value="{{ $minggu_rps->materiPembelajaran }}">
                            </div>

                            <div class="form-group">
                                <label>Teknik Penilaian (Jika ada)</label>
                                <select name="kodePenilaian" id='kodePenilaian' class="form-select">
                                    <option value=''>-- Pilih Teknik Penilaian --</option>
                                    {{-- @if ($detail->kodePenilaian)
                                    <option value='null'>AKU</option>
                                        
                                    @endif --}}
                                    @foreach ($teknik_penilaian_list->whereIn('kodeRPS', $rps->kodeRPS) as $item)
                                        {{-- @foreach ($subcpmk as $sc) --}}
                                        <option value="{{ $item->kodePenilaian }}" {{ $item->kodePenilaian ==  ($detail->kodePenilaian ?? '-') ? 'selected' : ''}}>{{ $item->kodePenilaian }} - {{ $item->teknikPenilaian }}</option>
                                        {{-- @endforeach --}}
                                    @endforeach
                                    {{-- @foreach ($teknik_penilaian_list->whereIn('kodeRPS', $rps->kodeRPS) as $item)
                                        @if ($item->kodePenilaian === $minggu_rps->kodePenilaian)
                                            <option value="{{ $item->kodePenilaian }}" {{ $item ==  $minggu_rps->kodePenilaian ? 'selected' : ''}}>{{ $item->kodePenilaian }} - {{ $item->teknikPenilaian }}</option>
                                        @else
                                            <option value="{{ $item->kodePenilaian }}">{{ $item->kodePenilaian }} - {{ $item->teknikPenilaian }}</option>
                                        @endif
                                    @endforeach --}}
                                </select>
                            </div>

                            <div class="form-group pt-4">
                                <button type="submit" name="submit" value="submit" id="confirm"
                                    class="btn btn-dark btn-sm"><i class="fa fa-fw fa-plus-circle"></i>
                                    Confirm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
        @endsection
