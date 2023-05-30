@extends('layout.dashboard')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Peran Dosen</h6>
            {{-- <a href="/tambahpl" class="float-right btn btn-sm btn-dark"><i
            class="fa fa-fw fa-plus-circle"></i> Tambah PL</a> --}}
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form method="POST" action={{ route('edit_rps.update_peran_dosen',[$data->nip,$data->kodeRPS,$data->peranDosen]) }}>
                    @csrf
                    @method('put')
                    {{-- @php
    $list_nip = collect();
    $uniqueIds = [];

    foreach ($details as $detail) {
        $user = $detail->users; // Mengambil entitas User dari relasi

        if ($user && isset($user->nip)) {
            $nip = $user->nip;
            $namaDosen = $user->namaDosen;

            if (!in_array($nip, $uniqueIds)) {
                $uniqueIds[] = $nip;
                $list_nip->push([
                    'nip' => $nip,
                    'namaDosen' => $namaDosen,
                ]);
            }
        }
    }
    $list_nips = $list_nip->pluck('nip');
@endphp --}}




                <div class="form-group">
                    <label>NIP Dosen</label>
                    @error('nip')
                        <h6 style="color: #BF2C45">{{ $message }}</h6>
                    @enderror
                    {{-- <select name="nip" id='nip' class="form-select">
                        <option value="{{ $data->nip }}" >{{ $data->nip }} - {{ $data->namaDosen }}</option>
                    </select> --}}
                    <input value="{{ $data->nip }} - {{ $data->namaDosen }}" type="text" name="nip" id="nip" class="form-control" readonly>
                </div>
                    {{-- <div class="form-group">
                        <label>Nama Dosen</label>
                        <input type="text" name="namaDosen" id="namaDosen" class="form-control" readonly>
                    </div> --}}
                    {{-- @php
    $list_kodeRPS = collect();
    $uniqueIds = [];

    foreach ($details as $detail) {
        $rps = $detail->rpss; // Mengambil entitas User dari relasi

        if ($rps && isset($rps->kodeRPS)) {
            $kodeRPS = $rps->kodeRPS;

            if (!in_array($kodeRPS, $uniqueIds)) {
                $uniqueIds[] = $kodeRPS;
                $list_kodeRPS->push([
                    'kodeRPS' => $kodeRPS,
                ]);
            }
        }
    }
    $list_kodeRPSs = $list_kodeRPS->pluck('kodeRPS');
@endphp --}}
                <div class="form-group">
                    <label>Kode RPS</label>
                    @error('kodeRPS')
                        <h6 style="color: #BF2C45">{{ $message }}</h6>
                    @enderror
                    {{-- <select name="kodeRPS" id='kodeRPS' class="form-select">
                        <option value="">-- Pilih Kode RPS --</option>
                        @foreach ($rpss->whereIn('kodeRPS', $list_kodeRPSs) as $item)
                            <option value="{{ $item->kodeRPS }}">{{ $item->kodeRPS }}</option>
                        @endforeach
                    </select> --}}
                    <input value="{{ $data->kodeRPS }}" type="text" name="kodeRPS" id="kodeRPS" class="form-control" readonly>
                </div>
                    {{-- <div class="form-group">
                        <label>Detail Peran</label>
                        @error('peranDosen')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <textarea name="peranDosen" row="3" class="form-control" placeholder="Detail Peran">{{ old('peranDosen') ? old('peranDosen') : $detail->peranDosen }}</textarea>
                    </div> --}}
                    <div class="form-group">
                        <label>Detail Peran</label>
                        @error('peranDosen')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <select name="peranDosen" id='peranDosen' class="form-select">
                            <option value="" selected disabled>-- Pilih Peran Dosen --
                            </option>
                            {{-- @if ($data->peranDosen=='1')
                                <option value="1" {{ $data->peranDosen === '1' ? 'selected' : '' }}>Dosen Pengembang RPS</option>

                            @elseif ($data->peranDosen=='2')
                                <option value="2" {{ $data->peranDosen === '2' ? 'selected' : '' }}>Koordinator BK</option>
                            
                            @else
                                <option value="3" {{ $data->peranDosen === '3' ? 'selected' : '' }}>Dosen Pengampu</option>
                                
                            @endif --}}
                            <option value="1" {{ $data->peranDosen === '1' ? 'selected' : '' }}>Dosen Pengembang RPS</option>
                            <option value="2" {{ $data->peranDosen === '2' ? 'selected' : '' }}>Koordinator BK</option>
                            <option value="3" {{ $data->peranDosen === '3' ? 'selected' : '' }}>Dosen Pengampu</option>
                        </select>
                    </div>

                    <div class="form-group pt-4">
                        <button type="submit" name="submit" value="submit" id="submit" class="btn btn-dark btn-sm"><i
                                class="fa fa-fw fa-plus-circle"></i>
                            Confirm</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>

   
    
    
    
@endsection