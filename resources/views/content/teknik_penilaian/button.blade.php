<div class="d-flex justify-content-start pt-2">

    <div>
        <a class="btn btn-danger" href="{{ route('edit_rps.teknik_penilaian', ['kodeRPS' => $kodeRPS]) }}" style="margin-right:7pt"><i
                class="bi bi-ui-checks"> </i>Teknik Penilaian</a>
    </div>
    <div>
        <a class="btn btn-warning" href="{{ route('edit_rps.teknik_penilaian', ['kodeRPS' => $kodeRPS]) }}" style="margin-right:7pt"><i
                class="bi bi-ui-checks"> </i>Peran Dosen</a>
    </div>
    <div>
        <a class="btn btn-success" href="{{ route('edit_rps.minggu_rps') }}" style="margin-right:7pt"><i
                class="bi bi-ui-checks"> </i>Rencana Pembelajaran</a>
    </div>
    <div>
        <a class="btn btn-primary" href="{{ route('edit_rps.rps_show') }}"><i
                class="bi bi-file-earmark-bar-graph"> </i>RPS</a>
    </div>
</div>