@extends('layout.dashboard')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Peran Dosen</h6>
            {{-- <a href="/tambahpl" class="float-right btn btn-sm btn-dark"><i
            class="fa fa-fw fa-plus-circle"></i> Tambah PL</a> --}}
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form method="POST" action="{{ route('dosen.store') }}">
                    @csrf
                    

                <div class="form-group">
                    <label>NIP</label>
                    @error('nip')
                        <h6 style="color: #BF2C45">{{ $message }}</h6>
                    @enderror
                    <select name="nip" id='nip' class="form-select">
                        <option value="">-- Pilih NIP --</option>
                        @foreach ($users as $item)
                            <option value="{{ $item->nip }}">{{ $item->nip }} - {{ $item->namaDosen }}</option>
                        @endforeach
                    </select>
                </div>
                    <div class="form-group">
                        <label>Nama Dosen</label>
                        <input type="text" name="namaDosen" id="namaDosen" class="form-control" readonly>
                    </div>

                <div class="form-group">
                    <label>Kode RPS</label>
                    @error('kodeRPS')
                        <h6 style="color: #BF2C45">{{ $message }}</h6>
                    @enderror
                    <select name="kodeRPS" id='kodeRPS' class="form-select">
                        <option value="">-- Pilih Kode RPS --</option>
                        @foreach ($rpss as $item)
                            <option value="{{ $item->kodeRPS }}">{{ $item->kodeRPS }}</option>
                        @endforeach
                    </select>
                </div>
                    <div class="form-group">
                        <label>Detail Peran</label>
                        @error('deskripsi')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <textarea name="deskripsi" row="3" class="form-control" placeholder="Detail Peran"></textarea>
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