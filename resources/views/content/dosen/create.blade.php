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
                <form method="POST" action="{{ route('edit_rps.store_peran_dosen', ['kodeRPS' => $kodeRPS]) }}">
                    @csrf
                    {{-- <div class="form-group">
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
                </div> --}}
                    <div class="form-group">
                        <label>Dosen</label>
                        @error('nip')
                            <h6 style="color: #BF2C45">{{ $message }}</h6>
                        @enderror
                        <select name="nip" id='nip' class="form-select">
                            <option value="">-- Pilih Dosen --</option>
                            @foreach ($dosen as $item)
                                <option value="{{ $item->nip }}">{{ $item->nip }} -
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
                            <option value="Dosen Pengembang RPS">Dosen Pengembang RPS</option>
                            <option value="Koordinator BK">Koordinator BK</option>
                            <option value="Dosen Pengampu">Dosen Pengampu</option>
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
