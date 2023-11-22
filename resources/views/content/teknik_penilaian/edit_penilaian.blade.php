@extends('layout.dashboard')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Teknik Penilaian</h6>
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form method="post" action="{{ route('edit_rps.update_teknik_penilaian', $kodeRPS) }}">
                    @csrf
                    @method('put')

                    <div class="form-group">
                        <label>Teknik Penilaian RPS</label>
                        @error('detail_penilaian')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <input type="text" name="detail_penilaian" class="form-control" placeholder="Teknik Penilaian"
                            value="{{ old('detail_penilaian') ? old('detail_penilaian') : $rps->detail_penilaian }}">
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

