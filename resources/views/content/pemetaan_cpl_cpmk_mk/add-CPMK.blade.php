@extends('layout.dashboard')

@section('content')
    <form class="content px-4 pt-3" action="{{ route('kurikulum.pemetaan.cpl_cpmk_mk.cpmk.store') }}" method="POST">
        @if ($errors->has('kodeCPMK') && $errors->has('deskripsiCPMK'))
            <div class="card border" style="background-color: #eda5ac">
                <div class="card-body" style="font-weight:600;">
                    Kode CPMK dan Deskripsi CPMK harus diisi!
                </div>
            </div>
        @elseif ($errors->has('deskripsiCPMK'))
            <div class="card border" style="background-color: #eda5ac">
                <div class="card-body" style="font-weight:600;">
                    Deskripsi CPMK harus diisi!
                </div>
            </div>
        @elseif ($errors->has('kodeCPMK'))
            <div class="card border" style="background-color: #eda5ac">
                <div class="card-body" style="font-weight:600;">
                    Kode CPMK harus diisi!
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
            <div class="row">
                <div class="form-group col-2">
                    <label for="kode-1">Kode CPMK</label>
                    <input type="text" class="form-control" name="kodeCPMK" id="kode-1">
                </div>
                <div class="form-group col-10">
                    <label for="deskripsi-1">Deskripsi CPMK</label>
                    <textarea class="form-control" name="deskripsiCPMK" id="deskripsi-1" rows="3"></textarea>
                </div>
            </div>
        </div>
        <textarea class="visually-hidden" name="deskripsi"></textarea>
        <textarea class="visually-hidden" name="kode"></textarea>
        <button type="button" class="btn btn-secondary" id="addField" data-lastid="1">Tambah field CPMK</button>
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
            newID = parseInt(e.currentTarget.dataset.lastid) + 1;
            e.currentTarget.dataset.lastid = newID;

            label = document.createElement('label');
            label.setAttribute('for', 'kode-' + newID);
            label.innerText = 'Kode CPMK';
            input = document.createElement('input');
            input.setAttribute('type', 'text');
            input.setAttribute('class', 'form-control');
            input.setAttribute('name', 'kodeCPMK');
            input.setAttribute('id', 'kode-' + newID);
            input.setAttribute('rows', '3');
            codeField = document.createElement('div');
            codeField.setAttribute('class', 'form-group col-2');
            codeField.append(label);
            codeField.append(input);

            label = document.createElement('label');
            label.setAttribute('for', 'deskripsi-' + newID);
            label.innerText = 'Deskripsi CPMK';
            textarea = document.createElement('textarea');
            textarea.setAttribute('class', 'form-control');
            textarea.setAttribute('name', 'deskripsiCPMK');
            textarea.setAttribute('id', 'deskripsi-' + newID);
            textarea.setAttribute('rows', '3');
            descField = document.createElement('div');
            descField.setAttribute('class', 'form-group col-10');
            descField.append(label);
            descField.append(textarea);

            newField = document.createElement('div');
            newField.setAttribute('class', 'row');
            newField.append(codeField);
            newField.append(descField);
            $('.form-input').append(newField);
        })

        // handle 'deskripsi' value
        $('#submitCPMK').click(e => {
            e.preventDefault();

            let deskripsi = [];
            let kode = [];
            $('textarea[name="deskripsiCPMK"]').each(x => {
                code = $('input[name="kodeCPMK"]')[x].value;
                kode.push('"' + code + '"')
                desc = $('textarea[name="deskripsiCPMK"]')[x].value;
                deskripsi.push('"' + desc + '"')
            })
            deskripsi = deskripsi.join();
            $('.visually-hidden[name="deskripsi"]')[0].innerText = deskripsi;
            $('.visually-hidden[name="kode"]')[0].innerText = kode;

            $('form.content')[0].submit();
        })
    </script>
@endsection
