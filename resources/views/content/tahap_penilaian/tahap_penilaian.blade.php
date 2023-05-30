@extends('layout.dashboard')

@section('content')
    <div class="content px-4">
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>Mekanisme dan Tahap Penilaian</h3>
                <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>
                    Halaman Mekanisme dan Tahap Penilaian berisikan tahap
                    penilaian, teknik penilaian,
                    instrumen, kriteria dan bobot yang ditentukan oleh Program Studi berdasarkan mata
                    kuliah, CPL yang dititipkan pada matakuliah dan capaian pembelajaran mata kuliah
                    yang ditentukan. Pemilihan metode perhitungan dan bobot pencapaian CPL
                    dan CPMK ditentukan berdasarkan kebijakan Program Studi.<b
                        style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b></h5>
            </div>
        </div>
        <div class="d-flex justify-content-end pt-2">
            <div class="pr-3">
                <a id="exportPDF" class="btn btn-outline-danger"
                    href="#"><i class="bi bi-file-earmark-pdf-fill">
                    </i>Export PDF</a>
            </div>
            <div>
                <a id="exportExcel" class="btn btn-success"
                    href="#"><i class="bi bi-file-earmark-excel">
                    </i>Export
                    Excel</a>
            </div>
        </div>
        <br />
        <div class="form-group" style="display: flex; flex-direction: column;">
            <label>Tahun Pembelajaran</label>
            <select name="tahunAjaran" id="tahunAjaran" class="form-select" data-live-search="true"
                onchange="getTableDataByTahunAjaran(value)">
                <option value="" selected disabled>-------Pilih Tahun Ajaran-------
                </option>
                @foreach ($list_tahun_ajaran as $tahun_ajaran)
                    <option value="{{ $tahun_ajaran->tahunAjaran }}">{{ $tahun_ajaran->tahunAjaran }}</option>
                @endforeach
            </select>
        </div>

        <div id="tableData"></div>

    </div>

    <script>
        var exportPDF = document.getElementById('exportPDF');
        var exportExcel = document.getElementById('exportExcel');

        $(document).ready(function() {
            $('#tahunAjaran').select2({
                width: '265px'
            });

            // Cek apakah sudah ada opsi pada select yang terpilih sebelumnya
            var tahun_ajaran = document.getElementById('tahunAjaran');
            if(tahun_ajaran.value) {
                getTableDataByTahunAjaran(tahun_ajaran.value);
            } else {
                exportPDF.onclick = function() {
                errorPopup();
                return false;
            };

            exportExcel.onclick = function() {
                errorPopup();
                return false;
            };
            }
        });

        function errorPopup() {
            swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Silakan memilih tahun ajaran terlebih dahulu!',
                showConfirmButton: false,
                timer: 1000,
            });
        }

        function getTableDataByTahunAjaran(value) {
            $.get("{{ url(route('penilaian.tahap_penilaian.data_penilaian', [':tahun_ajaran'])) }}".replace(':tahun_ajaran',
                value), {}, function(data, status) {
                $('#tableData').html(data);
            });

            exportPDF.href = "{{ route('penilaian.tahap_penilaian.export', [':tahun_ajaran','pdf']) }}".replace(':tahun_ajaran', value);
            exportExcel.href = "{{ route('penilaian.tahap_penilaian.export', [':tahun_ajaran','excel']) }}".replace(':tahun_ajaran', value);

            exportPDF.onclick = function(){ return true;}
            exportExcel.onclick = function(){ return true;}
        }
    </script>
@endsection
