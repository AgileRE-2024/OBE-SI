@extends('layout.dashboard')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Dosen Pengampu MK</h6>
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
                    <div class="form-group pt-4">
                        <button type="submit" name="submit" value="submit" id="submit" class="btn btn-dark btn-sm"><i
                                class="fa fa-fw fa-plus-circle"></i>
                            Simpan</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>

   
    
    
    
@endsection