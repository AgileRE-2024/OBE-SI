@extends('layout.dashboard')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah CPMK</h6>
            {{-- <a href="/tambahpl" class="float-right btn btn-sm btn-dark"><i
    class="fa fa-fw fa-plus-circle"></i> Tambah PL</a> --}}
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form action="{{ route('kurikulum.data.update_cpmk', $cpmk->kodeCPMK) }}" method="POST">
                    @csrf
                    @method('put')

                    <div class="form-group">
                        <label>Kode CPL</label>
                        @error('kodeCPL')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <select name="kodeCPL" id="kodeCPL" class="form-select">
                            <option></option>
                            @foreach ($cplp as $list_cplp)
                                <option value="{{ $list_cplp->kodeCPL }}"
                                    {{ old('kodeCPL', $cpmk->kodeCPL) == $list_cplp->kodeCPL ? 'selected' : '' }}>
                                    {{ $list_cplp->kodeCPL }} {{ '-' }}
                                    {{ Illuminate\Support\Str::limit($list_cplp->deskripsiCPL, 40) }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Kode CPMK</label>
                        @error('kodeCPMK')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="kodeCPMK" class="form-control" placeholder="Kode CPMK"
                            value="{{ old('kodeCPMK', $cpmk->kodeCPMK) }}" pattern="[A-Z0-9]+" minlength="4"
                            maxlength="10">
                    </div>

                    <div class="form-group">
                        <label>Deskripsi CPMK</label>
                        @error('deskripsi')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <textarea name="deskripsi" row="3" class="form-control" placeholder="Deskripsi CPMK">{{ old('deskripsi', $cpmk->deskripsiCPMK) }}</textarea>
                    </div>

                    <div class="form-group pt-4">
                        <button type="submit" name="submit" value="submit" id="submit" class="btn btn-dark btn-sm"><i
                                class="fa fa-fw fa-plus-circle"></i>
                            Edit CPMK</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
