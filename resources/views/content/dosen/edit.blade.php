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
                <form method="POST" action="{{ route('edit_rps.update_peran_dosen', ['nip'=>$detail->nip, 'kodeRPS'=>$kodeRPS, 'peranDosen'=>$detail->peranDosen]) }}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label>Dosen</label>
                        @error('nip')
                            <h6 style="color: #BF2C45">{{ $message }}</h6>
                        @enderror
                        <select name="nip" id='nip' class="form-select">
                            <option value="">-- Pilih Dosen --</option>
                            @foreach ($dosen as $item)
                                <option value="{{ $item->nip }}"{{ $item->nip ==  $detail->nip ? 'selected' : ''}}>{{ $item->nip }} -
                                    {{ $item->namaDosen }}</option>
                            @endforeach
                        </select>
                    </div>
    
                    <div class="form-group">
                            <label>Peran Dosen</label>
                            @error('peranDosen')
                                <p style="color: #BF2C45">{{ $message }}</p>
                            @enderror
                            <select name="peranDosen" id='peranDosen' class="form-select">
                                <option value="" selected disabled>-- Pilih Peran Dosen --
                                </option>
                                @php
                                    $options=["Dosen Pengembang RPS", "Koordinator BK", "Dosen Pengampu"];
                                @endphp
                            @foreach ($options as $item)
                                {{-- @foreach ($opsi as $sc) --}}
                                <option value="{{ $item }}" {{ $item ==  $detail->peranDosen ? 'selected' : ''}}>{{ $item }}</option>
                                {{-- @endforeach --}}
                            @endforeach
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