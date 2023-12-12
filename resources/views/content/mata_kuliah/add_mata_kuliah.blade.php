@extends('layout.dashboard')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Mata Kuliah</h6>
            {{-- <a href="/tambahpl" class="float-right btn btn-sm btn-dark"><i
    class="fa fa-fw fa-plus-circle"></i> Tambah PL</a> --}}
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form action="{{ route('kurikulum.data.store_mata_kuliah') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Program Studi</label>
                        @error('namaProdi')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <select name="namaProdi" id='namaProdi' class="form-select">
                            <option value="" selected disabled>-- Pilih Program Studi --</option>
                            @foreach($prodiList as $namaProdi)
                                <option value="{{ $namaProdi }}">{{ $namaProdi }}</option>
                            @endforeach
                            </option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Kode Mata Kuliah</label>
                        @error('kodeMK')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        {{-- <input type="text" name="kodeMK" class="form-control" placeholder="Kode Mata Kuliah"
                            pattern="[A-Za-z0-9]+" maxlength="4"> --}}
                        <input type="text" name="kodeMK" class="form-control"
                            placeholder="Kode Mata Kuliah (Masukkan huruf besar dan angka saja))" pattern="[A-Z0-9-]+"
                            maxlength="10" minlength="2" title="Harap masukkan huruf besar dan angka saja"
                            oninput="updateInput(this);">
                    </div>

                    <div class="form-group">
                        <label>Mata Kuliah</label>
                        @error('namaMK')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input maxlength="100" type="text" name="namaMK" class="form-control"
                            placeholder="Nama Mata Kuliah">
                    </div>

                    <div class="form-group">
                        <label>Deskripsi Mata Kuliah</label>
                        @error('deskripsi')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <textarea maxlength="100" name="deskripsi" id="editor_mk" row="3" class="form-control" placeholder="Deskripsi Mata Kuliah"></textarea>
                    
                    </div>

                    <div class="form-group">
                        <label>Kategori Mata Kuliah</label>
                        @error('kategoriMK')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <select name="kategoriMK" id='kategoriMK' class="form-select">
                            <option value="" selected disabled>-- Pilih Kategori MK --
                            </option>
                            <option value="1">Wajib</option>
                            <option value="0">Pilihan</option>
                            <option value="2">MKWK</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Jenis Mata Kuliah</label>
                        @error('jenisMK')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <select name="jenisMK" id='jenisMK' class="form-select">
                            <option value="" selected disabled>-- Pilih Jenis MK --</option>
                            <option value="1">Teori</option>
                            <option value="2">Praktikum</option>
                            <option value="3">Praktek</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Semester</label>
                        @error('semester')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <select name="semester" id='semester' class="form-select">
                            <option value="" selected disabled>-- Pilih Semester --</option>
                            @for ($i = 1; $i <= 8; $i++)
                                <option value="{{ $i }}">
                                    {{ $i }}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="form-group">
                        <label>SKS</label>
                        @error('sks')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="number" name="sks" class="form-control" placeholder="SKS Mata Kuliah"
                            min="0" max="4">
                    </div>

                    <div class="form-group">
                        <label>ECTS</label>
                        @error('ects')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <input type="text" name="ects" class="form-control" placeholder="ECTS Mata Kuliah"
                            pattern="[0-9]+(\.[0-9]+)?">
                    </div>

                    {{-- <div class="form-group">
                        <label>Prasyarat Mata Kuliah</label>
                        @error('mat_kodeMK')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <select name="mat_kodeMK" class="form-control">
                            <option value="" selected disabled>-- Pilih MK Prasyarat --</option>
                            @foreach ($mks as $mk)
                                <option value="{{ $mk->kodeMK }}">
                                    {{ $mk->namaMK }}</option>
                            @endforeach
                            <option value="">Tidak ada Prasyarat</option>
                        </select>
                    </div> --}}

                    <div id="dynamicAddRemove">
                        <div class="d-flex justify-content-between mb-2">
                            <label>Prasyarat Mata Kuliah</label>
                            <button type="button" name="add" id="dynamic-ar" class="btn btn-success btn-sm"><i
                                    class="bi bi-plus-square"></i> Tambah</button>
                        </div>
                        <div class="form-group">
                            @error('mat_kodeMK')
                            <h6 style="color: #BF2C45">{{ $message }}</h6>
                            @enderror
                            <select name="mat_kodeMK[]" id="mat_kodeMK" class="form-select mb-1">
                                {{-- <option value="" @if (!$mk->mat_kodeMK) selected @endif disabled>-- Pilih MK Prasyarat --</option> --}}
                                <option value="" disabled selected>-- Pilih MK Prasyarat --</option>
                                    @foreach ($mks as $mk)
                                    <option value="{{ $mk->kodeMK }}">
                                        {{ $mk->namaMK }}</option>
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
                                '<div class="dynamic"><div class="d-flex justify-content-end"><button type="button" class="btn btn-outline-danger remove-input-field mb-2">Delete</button></div><td><select name="mat_kodeMK[' + i + ']" id="judul_pustaka" class="form-select mb-1"><option value="" @if (!$mk->mat_kodeMK) selected @endif disabled>-- Pilih MKPrasyarat --</option>@foreach ($mks as $item)<option value="{{ $item->kodeMK }}" @if ($mk->mat_kodeMK == $item->kodeMK) selected @endif>{{ $item->namaMK }}</option>@endforeach</select></td></div>'
                            );
                        });
                        $(document).on('click', '.remove-input-field', function () {
                            $(this).parents('.dynamic').remove();
                        });

                    </script>

                    <div class="form-group">
                        <label>Prasyarat Tambahan</label>
                        @error('prasyarat_tambahan')
                            <p style="color: #BF2C45">{{ $message }}</p>
                        @enderror
                        <textarea name="prasyarat_tambahan" row="3" class="form-control" placeholder="Prasyarat Tambahan Mata Kuliah"></textarea>
                    </div>

                    <div class="form-group pt-4">
                        <button type="submit" name="submit" value="submit" id="submit" class="btn btn-dark btn-sm"><i
                                class="fa fa-fw fa-plus-circle"></i>
                            Tambah Mata Kuliah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor_mk' )
            
            )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection

<script>
    function updateInput(input) {
        var uppercaseValue = input.value.toUpperCase().replace(/[^A-Z0-9-]/g, '');

        // Terapkan validasi minlength secara manual jika diperlukan
        if (uppercaseValue.length >= 2) {
            input.setCustomValidity('');
        } else {
            input.setCustomValidity('Panjang minimal adalah 2 karakter');
        }

        input.value = uppercaseValue;
    }
</script>

