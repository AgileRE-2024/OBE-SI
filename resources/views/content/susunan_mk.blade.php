@extends('layout.dashboard')
@section('content')
    <div class="px-4">
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>Matriks Susunan Mata Kuliah</h3>
                <h5 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Susunan Mata Kuliah berisi pemetaan mata kuliah berdasarkan semesternya, disertai oleh data-data yang mengikuti. User dapat memilih dan melakukan edit pada data setiap mata kuliah berupa SKS, Semester, dan Keterangan.<b
                        style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b></h5>
                </div>
        </div>
        <div class="d-flex justify-content-end pt-2">
            <div class="pr-3">
                <a class="btn btn-outline-danger" href="{{ route('kurikulum.pemetaan.susunan_mk.export.pdf') }}"><i
                        class="bi bi-file-earmark-pdf-fill"> </i>Export PDF</a>
            </div>
            <div>
                <a class="btn btn-success" href="{{ route('kurikulum.pemetaan.susunan_mk.export.excel') }}"><i
                        class="bi bi-file-earmark-excel"> </i>Export Excel</a>
            </div>
        </div>
        <br>
        <div class="d-flex">
            <table class="table table-bordered" style="text-align: center">
                <thead style="background-color: lightgray">
                    <tr>
                        <th class="align-middle" width="100px">Kode MK</th>
                        <th class="align-middle" width="300px">Nama MK</th>
                        <th class="align-middle" width="180px">BK</th>
                        <th class="align-middle" width="90px">SKS</th>
                        <th class="align-middle" width="90px">1</th>
                        <th class="align-middle" width="90px">2</th>
                        <th class="align-middle" width="90px">3</th>
                        <th class="align-middle" width="90px">4</th>
                        <th class="align-middle" width="90px">5</th>
                        <th class="align-middle" width="90px">6</th>
                        <th class="align-middle" width="90px">7</th>
                        <th class="align-middle" width="90px">8</th>
                        <th class="align-middle" width="180px">Keterangan</th>
                        <th class="align-middle" width="90px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($MK as $p)
                    <tr>
                        <td>{{ $p->kodeMK }}</td>
                        <td>{{ $p->namaMK }}</td>
                        <td>
                            @foreach ($p->Bahan_Kajian as $bk)
                                <div>
                                    <span data-namabk="{{ $bk->namaBK }}">
                                        {{ $bk->kodeBK }}
                                    </span>
                                </div>
                            @endforeach
                        </td>
                        <td>{{ $p->sks }}</td>
                        @for($i = 1; $i <= 8; $i++)
                            <td>
                                @if(strpos($p->semester, strval($i)) !== false)
                                <div class="d-flex justify-content-center">
                                    <div class="form-check">
                                        <input style="width:26px;height:26px;" class="form-check-input" type="checkbox" checked disabled style="background-color: blue !important; border-color: blue !important;">
                                    </div>
                                </div>
                                @else
                                <div class="d-flex justify-content-center">
                                    <div class="form-check">
                                        <input style="width:26px;height:26px;" class="form-check-input" type="checkbox" disabled>
                                    </div>
                                </div>
                                @endif
                            </td>
                        @endfor
                        <td>
                            @if ($p->kategoriMK == 1)
                                {{ 'Wajib' }}
                            @elseif ($p->kategoriMK == 2)
                                {{ 'Pilihan' }}
                            @else
                                {{ 'MKWK' }}
                            @endif
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit{{ $p->kodeMK }}">
                                <i class="fa-solid fa-pen">Edit</i>
                            </button>
                        </td>
                    </tr>
                    <!-- Edit Modal -->
                    <div class="modal fade" id="edit{{ $p->kodeMK }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel">Edit MK</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ route('kurikulum.pemetaan.update_susunan_mk', $p->kodeMK) }}" class="myForm" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="kodeMK" value="{{ $p->kodeMK }}">
                                    <div class="modal-body">
                                        <p class="text-center">{{ $p->kodeMK }} {{ ':' }} {{ $p->namaMK }}</p>
                                        <div class="form-group">
                                            <label for="sks">SKS</label>
                                            <input type="number" min="1" max="6" class="form-control" id="sks" name="sks" value="{{ old('sks', $p->sks) }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="semester">Semester</label>
                                            <input type="number" min="1" max="6" class="form-control" id="semester" name="semester" value="{{ old('semester', $p->semester) }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="kategoriMK">Keterangan</label>
                                            <select class="form-control" id="kategoriMK" name="kategoriMK">
                                                <option value="1" {{ old('kategoriMK', $p->kategoriMK) == '1' ? 'selected' : '' }}>Wajib</option>
                                                <option value="2" {{ old('kategoriMK', $p->kategoriMK) == '2' ? 'selected' : '' }}>Pilihan</option>
                                                <option value="3" {{ old('kategoriMK', $p->kategoriMK) == '3' ? 'selected' : '' }}>MKWK</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <style>
    
    /* Style the tooltip */
    /* Style the tooltip */
     span[data-namabk] {
      position: relative;
      cursor: pointer;
      display: inline-block
      /* display: inline-block; */
    }
    
    span[data-namabk]:hover::after {
      content: attr(data-namabk);
      overflow: hidden;
      text-overflow: ellipsis;
      /* width: 200px; */
      background-color: #1F2F4D;
      color: white;
      padding: 9px;
      border-radius: 5px;
      position: absolute;
      bottom: -40px;
      left: 120%;
      transform: translateX(-50%);
      white-space: nowrap;
      z-index: 1;
      opacity: 1;
      /* transition: opacity 3s; */
      /* transition: opacity 0.3s ease, visibility 0s linear 0.3s; */
    
    }
    
    span[data-namabk]:hover::before {
      content: "";
      border-style: solid;
      border-width: 0 8px 8px 8px;
      border-color: transparent transparent #1F2F4D transparent;
      position: absolute;
      top: 12px;
      left: 80%;
      transform: translateX(-50%);
      bottom: calc(100% + 10px);
      /* transition: opacity 0.3s ease, visibility 0s linear 0.3s; */
    }
    
    </style>
    <script>
        const forms = document.querySelectorAll(".myForm");
        forms.forEach(form => {
            form.addEventListener("submit", function(event) {
                event.preventDefault(); // Prevent the default form submission behavior
    
                Swal.fire({
                    title: 'Peringatan',
                    text: "Apakah Anda ingin menyimpan perubahan ?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Simpan'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // If the user confirms, submit the form
                        form.submit();
                    }
                });
            });
        });
    </script>
@endsection