<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <style>
        #myCol {
            position: relative;
            display: inline-block;
        }

        .popup {
            display: none;
            position: absolute;
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1;
            right: 0;
        }

        #myCol:hover .popup {
            display: block;
        }
    </style>

    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/js/bootstrap-select.min.js"></script> --}}
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/css/multi-select-tag.css">
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>

    {{-- Template CSS --}}
    <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.css') }}">

    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    {{-- Template CSS --}}
    <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.css') }}">

    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/css/bootstrap-select.min.css" /> --}}

    {{-- SweetAlert2 JS --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    {{-- CKEDITOR5 --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
</head>

<body>
    @include('partials.sidebar')

    <div class="content-wrapper" style="background-color: white">

        @include('partials.header')

        {{-- Display alert --}}
        @if (session()->has('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Sukses!',
                    text: "{{ session('success') }}",
                    showConfirmButton: false,
                    timer: 1500,
                })
            </script>
        @endif

        @if (session()->has('error'))
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: "{{ session('error') }}",
                    showConfirmButton: false,
                    timer: 2500,
                })
            </script>
        @endif

        <!-- Main content -->
        <div class="content" style="padding-left: 20px; padding-bottom: 20px;">
            @yield('content')
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {
            $('#nip').change(function() {
                var selectedNip = $(this).val();
                $.get('/get-nama-dosen/' + selectedNip, function(response) {
                    // Isi field "Nama Dosen" dengan response yang diterima
                    $('#namaDosen').val(response.namaDosen);
                });
            });
        });
    </script>

    <script>
        // Mendapatkan nilai NIP saat dropdown dipilih
        $('#nip').change(function() {
            var nip = $(this).val();

            // Mengirim permintaan AJAX ke endpoint untuk mendapatkan Nama Dosen
            $.ajax({
                url: '/get-nama-dosen/' + nip,
                type: 'GET',
                success: function(response) {
                    // Mengisi nilai Nama Dosen pada input
                    $('#namaDosen').val(response);
                },
                error: function(xhr, status, error) {
                    // Menangani kesalahan jika terjadi
                    console.log(xhr.responseText);
                }
            });
        });
    </script>
    @yield('js')
</body>

</html>
