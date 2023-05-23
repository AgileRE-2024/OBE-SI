{{-- @extends('layout.dashboard')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Minggu RPS</h6>
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form method="post" action="{{ route('edit_rps.store_minggu_rps') }}">
                    @csrf
                    @php
                        $rps = $rps_list->where('kodeRPS', 'RPS001')->first();
                        $mk = $mk_list->where('kodeMK', $rps->kodeMK)->first();
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
                        <input type="text" name="kodeMingguRPS" class="form-control" placeholder="Kode Minggu RPS">
                    </div>

                    @php
                        $rps = $rps_list->where('kodeRPS', 'RPS001')->first();
                        $mk = $mk_list->where('kodeMK', $rps->kodeMK)->first();
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
                                <option value="{{ $item->kodeSubCPMK }}">{{ $item->kodeSubCPMK }} -
                                    {{ $item->deskripsiSubCPMK }}</option>
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
                                <option value="{{ $item->kodePenilaian }}">{{ $item->kodePenilaian }} -
                                    {{ $item->teknikPenilaian }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group pt-4">
                        <button type="submit" name="submit" value="submit" id="submit" class="btn btn-dark btn-sm"><i
                                class="fa fa-fw fa-plus-circle"></i>
                            Tambah Minggu RPS</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
