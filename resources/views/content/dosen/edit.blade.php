@extends('layout.dashboard')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Peran Dosen</h6>
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form method="POST" action="{{ route('edit_rps.update_peran_dosen', ['kodeRPS'=>$kodeRPS]) }}">
                    @csrf
                    @method('put')
                    <input type="hidden" name="dibuat_oleh" value="{{ $rps->dibuat_oleh }}">
                    <div class="form-group">
                        <label>Pemeriksa RPS</label>
                        @error('diperiksa_oleh')
                            <h6 style="color: #BF2C45">{{ $message }}</h6>
                        @enderror
                        <select name="diperiksa_oleh" id='diperiksa_oleh' class="form-select">
                            <option value="{{ $rps->diperiksa_oleh }}" disabled selected>-- Pilih Dosen --</option>
                            @foreach ($dosen as $item)
                                <option value="{{ $item->nip }}"{{ $item->nip ==  $rps->diperiksa_oleh ? 'selected' : ''}}>{{ $item->nip }} -
                                    {{ $item->namaDosen }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Persetujuan RPS</label>
                        @error('disetujui_oleh')
                            <h6 style="color: #BF2C45">{{ $message }}</h6>
                        @enderror
                        <select name="disetujui_oleh" id='disetujui_oleh' class="form-select">
                            <option value="" disabled selected>-- Pilih Dosen --</option>
                            @foreach ($dosen as $item)
                                <option value="{{ $item->nip }}"{{ $item->nip ==  $rps->disetujui_oleh ? 'selected' : ''}}>{{ $item->nip }} -
                                    {{ $item->namaDosen }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Pengampu Mata Kuliah</label>
                        @error('dosenPengampu')
                            <h6 style="color: #BF2C45">{{ $message }}</h6>
                        @enderror
                        <select name="dosenPengampu" id='dosenPengampu' class="form-select dosenPengampu" multiple="multiple">
                            {{-- <option value="" disabled selected>-- Pilih Dosen --</option> --}}
                            @foreach ($dosen as $item)
                                <option value="{{ $item->nip }}"{{ $item->nip ==  $rps->dosenPengampu ? 'selected' : ''}}>{{ $item->nip }} -
                                   {{ $item->namaDosen }}</option>
                                {{-- <option value="{{ $item->nip }}" @if (in_array($item->nip, old('dosenPengampu',[]))) selected="selected" @endif>
                                    {{ $item->nip }} - {{ $item->namaDosen }} --}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Penanggung Jawab Mata Kuliah</label>
                        @error('penanggungJawab')
                            <h6 style="color: #BF2C45">{{ $message }}</h6>
                        @enderror
                        <select name="penanggungJawab" id='penanggungJawab' class="form-select">
                            <option value="" disabled selected>-- Pilih Dosen --</option>
                            @foreach ($dosen as $item)
                                <option value="{{ $item->nip }}"{{ $item->nip ==  $rps->penanggungJawab ? 'selected' : ''}}>{{ $item->nip }} -
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

    <script>
        $('#dosenPengampu').select2({
            placeholder: "-- Pilih Dosen --",
            allowClear: true,
            multiple: true
        });
    </script>

    {{-- <script>
        $(document).ready(function() {
            // Select2 Multiple
            $('.dosenPengampu').select2({
                placeholder: "-- Pilih Dosen --",
                allowClear: true
            });

            $('#dosenPengampu').select2({
                ajax: {
                    url:"{{ route('get-dosenPengampu') }}",
                    processResults: function({
                        data
                    }) {
                        return{
                            results: $.map(data, function(item){
                                return{
                                    nip: item.nip
                                }
                            })
                        }
                    }
                }
            });
        });
    </script> --}}
    
@endsection