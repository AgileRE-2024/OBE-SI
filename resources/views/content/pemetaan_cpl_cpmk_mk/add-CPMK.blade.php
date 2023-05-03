@extends('layout.dashboard')

@section('content')
    <form class="content px-4 pt-3" action="{{ route('kurikulum.pemetaan.cpl_cpmk_mk.cpmk.store') }}" method="POST">
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
        <div class="form-input mb-4">
            <div class="form-group row my-4">
                <label for="kodeCPL" class="col-sm-2 col-form-label">Capaian Pembelajaran</label>
                <div class="col-sm-10">
                    <span type="text" class="form-control-plaintext">
                        {{ $cpl->kodeCPL }} - {{ $cpl->deskripsiCPL }}
                    </span>
                    <input type="hidden" readonly class="form-control-plaintext" name="kodeCPL" id="kodeCPL"
                        value="{{ $cpl->kodeCPL }}">
                </div>
            </div>
            <div class="form-group">
                <label for="deskripsi-{{ $nextID }}">Deskripsi CPMK (Kode : {{ $nextID }})</label>
                <textarea class="form-control" name="deskripsiCPMK" id="deskripsi-{{ $nextID }}" rows="3"></textarea>
            </div>
        </div>
        <textarea class="visually-hidden" name="deskripsi"></textarea>
        <span class="btn btn-secondary" id="addField" data-lastid="{{ $nextID }}">Tambah field CPMK</span>
        <button type="submit" class="btn btn-primary" id="submitCPMK">Kirim</button>
    </form>

    <div class="content px-4 pt-5 mt-5">
        <h4 class="mt-5">CPMK yang telah ditambahkan pada CPL {{ $cpl->kodeCPL }}</h4>
        <table class="table">
            <thead>
                <tr>
                    <th class="align-middle" scope="col" style="width: 10%">ID CPMK</th>
                    <th class="align-middle" scope="col" style="width: 90%">Deskripsi CPMK</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listedCpmk as $item)
                    <tr>
                        <td scope="row">{{ $item->kodeCPMK }}</td>
                        <td>{{ $item->deskripsiCPMK }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('js')
    <script>
        // handle dynamic field CPMK
        $('#addField').click(e => {
            numID = parseInt(e.currentTarget.dataset.lastid.substring(4)) + 1;
            newID = "CPMK" + String(numID).padStart(3, '0');
            e.currentTarget.dataset.lastid = newID;
            label = document.createElement('label');
            label.setAttribute('for', 'deskripsi-' + newID);
            label.innerText = 'Deskripsi CPMK (Kode : ' + newID + ')';
            textarea = document.createElement('textarea');
            textarea.setAttribute('class', 'form-control');
            textarea.setAttribute('name', 'deskripsiCPMK');
            textarea.setAttribute('id', 'deskripsi-' + newID);
            textarea.setAttribute('rows', '3');
            newField = document.createElement('div');
            newField.setAttribute('class', 'form-group');
            newField.append(label);
            newField.append(textarea);
            $('.form-input').append(newField);
        })

        // handle 'deskripsi' value
        $('#submitCPMK').click(e => {
            e.preventDefault();

            let deskripsi = [];
            $('textarea[name="deskripsiCPMK"]').each(x => {
                desc = $('textarea[name="deskripsiCPMK"]')[x].value;
                deskripsi.push('"' + desc + '"')
            })
            deskripsi = deskripsi.join();
            $('.visually-hidden[name="deskripsi"]')[0].innerText = deskripsi;

            $('form.content')[0].submit();
        })
    </script>
@endsection
