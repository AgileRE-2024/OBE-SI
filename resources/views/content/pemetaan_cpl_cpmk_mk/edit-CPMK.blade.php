@extends('layout.dashboard')

@section('content')
    <form class="content px-4 pt-3" action="{{ route('kurikulum.pemetaan.cpl_cpmk_mk.cpmk.update', $cpmk) }}" method="POST">
        @if ($errors->has('deskripsiCPMK'))
            <div class="card border" style="background-color: #eda5ac">
                <div class="card-body" style="font-weight:600;">
                    Deskripsi CPMK harus diisi!
                </div>
            </div>
        @endif

        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>
                    Input Capaian Pembelajaran Mata Kuliah (CPMK) Berdasarkan Capaian Pembelajaran Lulusan (CPL)
                </h3>
                <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>
                    Capaian Pembelajaran Mata Kuliah (CPMK) merupakan hasil penurunan dari Capaian Pembelajaran Lulusan
                    (CPL) yang dibebankan pada Mata Kuliah (MK).
                    <b style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b>
                </h5>
            </div>
        </div>

        @csrf
        @method('PUT')
        <div class="form-input mb-4">
            <div class="form-group row my-4">
                <label for="kodeCPL" class="col-sm-2 col-form-label">Capaian Pembelajaran</label>
                <div class="col-sm-10">
                    <span type="text" readonly class="form-control-plaintext" name="kodeCPL" id="kodeCPL">
                        {{ $cpmk->CPL->kodeCPL }} - {{ $cpmk->CPL->deskripsiCPL }}
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi CPMK (Kode : {{ $cpmk->kodeCPMK }})</label>
                <textarea class="form-control" name="deskripsiCPMK" id="deskripsi" rows="3">{{ $cpmk->deskripsiCPMK }}</textarea>
            </div>
        </div>

        <div class="form-group my-4 pb-4 row">
            <label>Mata Kuliah yang terkait</label>
            @foreach ($mata_kuliah as $mk)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="mk[]" value="{{ $mk->kodeMK }}"
                        id="{{ $mk->kodeMK }}"
                        @foreach ($cpmk->Mata_Kuliah as $mk_checked)
                    @if ($mk_checked->kodeMK == $mk->kodeMK)
                        checked
                    @endif @endforeach>
                    <label class="form-check-label" for="{{ $mk->kodeMK }}">
                        {{ $mk->namaMK }}
                    </label>
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
@endsection
