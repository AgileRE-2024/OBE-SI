@extends('layout.dashboard')

@section('content')
    <div class="content px-4">
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>Matriks Capaian Pembelajaran Lulusan (CPL) & Profil Lulusan (PL)</h3>
                <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Pemetaan CPL Program Studi terhadap PL dilakukan untuk memetakan
                    kesesuaian antara CPL yang ditetapkan terhadap Profil Lulusan dari Program Studi. Satu atau lebih CPL
                    dapat digunakan untuk memenuhi satu atau lebih PL dan sebaliknya.<b
                        style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b></h5>
            </div>
        </div>
        <div class="d-flex justify-content-end pt-2">
            <div class="pr-3">
                <a class="btn btn-outline-danger" href="{{ route('kurikulum.pemetaan.export', ['pdf']) }}"><i
                        class="bi bi-file-earmark-pdf-fill"> </i>Export PDF</a>
            </div>
            <div>
                <a class="btn btn-success" href="{{ route('kurikulum.pemetaan.export', ['excel']) }}"><i
                        class="bi bi-file-earmark-excel"> </i>Export Excel</a>
            </div>
        </div>
        <br>
        <div id="tableMatriksCplPl" class="pt-2"></div>
    </div>

    <script>
        $(document).ready(function() {
            readTable()
        });

        function readTable() {
            $.get("{{ url(route('kurikulum.pemetaan.table_cpl_pl')) }}", {}, function(data, status) {
                $("#tableMatriksCplPl").html(data);
            });
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        });

        function successAlert() {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: "Perubahan berhasil disimpan",
                showConfirmButton: false,
                timer: 1500,
            })
        }

        function updateTable(id) {
            $.ajax({
                type: 'post',
                url: "{{ url(route('kurikulum.pemetaan.update_pemetaan_cpl_pl')) }}",
                data: 'id=' + id,
                success: function(data) {
                    successAlert();
                    readTable();
                }
            })
        }
    </script>
@endsection
