<div class="d-flex justify-content-start pt-2">
    <div>
        <a class="btn btn-warning" href="{{ route('edit_rps.mata_kuliah', ['kodeRPS' => $kodeRPS]) }}"
            style="margin-right:7pt"><i class="bi bi-ui-checks"> </i>Mata Kuliah</a>
    </div>
    <div>
        <a class="btn btn-warning" href="{{ route('edit_rps.peran_dosen', ['kodeRPS' => $kodeRPS, 'kodeMK' => $mata_kuliah->kodeMK]) }}"
            style="margin-right:7pt"><i class="bi bi-ui-checks"> </i>Peran Dosen</a>
    </div>
    <div>
        <a id="rencana" class="btn btn-warning" href="{{ route('edit_rps.minggu_rps', ['kodeRPS' => $kodeRPS, 'kodeMK' => $mata_kuliah->kodeMK]) }}"
            style="margin-right:7pt"><i class="bi bi-ui-checks"> </i>Rencana Pembelajaran</a>
    </div>
    <div>
        <a class="btn btn-warning" href="{{ route('edit_rps.teknik_penilaian', ['kodeRPS' => $kodeRPS, 'kodeMK' => $mata_kuliah->kodeMK]) }}"
            style="margin-right:7pt"><i class="bi bi-ui-checks"> </i>Teknik Penilaian</a>
    </div>
    <div>
        <a id="rpss" class="btn btn-success" href="{{ route('edit_rps.tampilRPS', ['kodeRPS' => $kodeRPS, 'kodeMK' => $mata_kuliah->kodeMK]) }}">
            <i class="bi bi-file-earmark-bar-graph"> </i>RPS
        </a>
    </div>
</div>