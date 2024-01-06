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
                    <div class="form-group">
                        <label>Pembuat RPS</label>
                        @error('dibuat_oleh')
                            <h6 style="color: #BF2C45">{{ $message }}</h6>
                        @enderror
                        <select name="dibuat_oleh" id='dibuat_oleh' class="form-select">
                            <option value="{{ $rps->dibuat_oleh }}" disabled selected>-- Pilih Dosen --</option>
                            @foreach ($dosen as $item)
                                <option value="{{ $item->nip }}"{{ $item->nip ==  $rps->dibuat_oleh ? 'selected' : ''}}>{{ $item->nip }} -
                                    {{ $item->namaDosen }}</option>
                            @endforeach
                        </select>
                    </div>
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

                    <div id="dynamicAddRemove">
                        <div class="d-flex justify-content-between mb-2">
                            <label>Pengampu Mata Kuliah</label>
                            <button type="button" name="add" id="dynamic-ar" class="btn btn-success btn-sm"><i
                                    class="bi bi-plus-square"></i> Tambah</button>
                        </div>
                        <div class="form-group">
                            @error('dosenPengampu')
                            <h6 style="color: #BF2C45">{{ $message }}</h6>
                            @enderror
                            <select name="dosenPengampu[]" id="dosenPengampu" class="form-select mb-1">
                                <option value="" disabled selected>-- Pilih Dosen --</option>
                                @foreach ($dosen as $item)
                                <option value="{{ $item->nip }}"{{ $item->nip ==  $rps->dosenPengampu ? 'selected' : ''}}>{{ $item->nip }} -
                                    {{ $item->namaDosen }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- JavaScript -->
                    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                    <script
                        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js">
                    </script>

                    <script type="text/javascript">
                            var i = 0;
                            $("#dynamic-ar").click(function () {
                                ++i;
                                $("#dynamicAddRemove").append(
                                    '<div class="dynamic"><div class="d-flex justify-content-end"><button type="button" class="btn btn-outline-danger remove-input-field mb-2">Delete</button></div><td><select name="dosenPengampu[' + i + ']" id="dosenPengampu" class="form-select mb-1"><option value="" selected disabled>-- Pilih Dosen --</option>@foreach ($dosen as $item)<option value="{{ $item->nip }}"{{ $item->nip ==  $rps->dosenPengampu ? 'selected' : ''}}>{{ $item->nip }} - {{ $item->namaDosen }}</option>@endforeach</select></td></div>'
                                );
                            });
                            $(document).on('click', '.remove-input-field', function () {
                                $(this).parents('.dynamic').remove();
                            });

                        </script>
                    
                    {{-- <div class="form-group">
                        <label>Pengampu Mata Kuliah</label>
                        @error('dosenPengampu')
                            <h6 style="color: #BF2C45">{{ $message }}</h6>
                        @enderror
                        <select name="dosenPengampu" id='dosenPengampu' class="form-select">
                            <option value="" disabled selected>-- Pilih Dosen --</option>
                            @foreach ($dosen as $item)
                                <option value="{{ $item->nip }}"{{ $item->nip ==  $rps->dosenPengampu ? 'selected' : ''}}>{{ $item->nip }} -
                                   {{ $item->namaDosen }}</option>
                                {{-- <option value="{{ $item->nip }}" @if (in_array($item->nip, old('dosenPengampu',[]))) selected="selected" @endif>
                                    {{ $item->nip }} - {{ $item->namaDosen }} --}}
                                {{-- </option> --}}
                            {{-- @endforeach --}}
                        {{-- </select> --}}
                    {{-- </div> --}}
                    
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

    {{-- <script>
        $('#dosenPengampu').select2({
            placeholder: "-- Pilih Dosen --",
            allowClear: true,
            multiple: true
        });
    </script> --}}

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