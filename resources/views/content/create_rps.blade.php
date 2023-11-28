@extends('layout.dashboard')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Buat RPS</h6>
    </div>
    <div class="card-body" style="width: auto">
        <div class="col-sm-8">
            <form method="post" action="{{ route('rps_store') }}">
                @csrf

                <div class="form-group">
                    <label for="kodeMK">Mata Kuliah</label>
                    @error('kodeMK')
                    <h6 style="color: #BF2C45">{{ $message }}</h6>
                    @enderror
                    <select name="kodeMK" id='kodeMK' class="form-select">
                        <option value="">-- Pilih Mata Kuliah --</option>
                        @foreach ($mk_list as $mk)
                        <option value="{{ $mk->kodeMK }}">{{ $mk->kodeMK }} - {{ $mk->namaMK }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="tahunAjaran">Tahun Ajaran</label>
                    @error('tahunAjaran')
                    <h6 style="color: #BF2C45">
                        @if($message === 'The tahun ajaran and tahun ajaran must be different.')
                        Tahun ajaran harus berbeda pada mata kuliah yang sama.
                        @else
                        {{ $message }}
                        @endif
                    </h6>
                    @enderror
                    <input type="text" name="tahunAjaran" class="form-control" placeholder="Tahun Ajaran">
                </div>

                <div class="form-group">
                    <label for="semester">Semester</label>
                    @error('semester')
                    <h6 style="color: #BF2C45">
                        {{ $message }}
                    </h6>
                    @enderror
                    <input type="text" name="semester" class="form-control" placeholder="Semester">
                </div>

                <div class="form-group pt-4">
                    <button type="submit" name="submit" value="submit" id="submit" class="btn btn-dark btn-sm"><i
                            class="fa fa-fw fa-plus-circle"></i>
                        Buat RPS</button>
                </div>
            </form>
            {{-- @if (isset($message))
            <div class="alert alert-warning">
                {{ $message }}
        </div>
        @if ($message == "Data tidak ditemukan, Silakan buat RPS")
        <div class="pr-3">
            <a id="pdf" class="btn btn-outline-danger" href="{{ route('export_rps', ['pdf']) }}"><i
                    class="bi bi-file-earmark-pdf-fill"> </i>Buat RPS</a>
        </div>
        @endif
        @endif --}}
    </div>
</div>
</div>

@endsection
