@extends('layout.dashboard')

@section('content')

<div class="content px-4">
    <div class="content px-4">
        <div class="card border" style="background-color: white">
            <div class="card-body" style="font-weight:600;">
                <h3>Minggu Rencana Pembelajaran Semester (RPS)</h3>
                <h6 style="font-weight: 400;"><b><i class="bi bi-quote"></i></b>Minggu RPS merupakan detail pembelajaran untuk setiap minggu dalam mata kuliah.<b
                        style="display:inline-block;transform: scaleX(-1)"><i class="bi bi-quote"></i></b></h6>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Minggu RPS</h6>
            </div>
            <div class="card-body" style="width: auto">
                <div class="col-sm-8">
                    <form method="post" action="{{ route('update_minggu_rps', ['minggu_rps_list' => $minggu_RPS->kodeMingguRPS]) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Kode Minggu RPS</label>
                            @error('kodeMingguRPS')
                                <h6 style="color: #BF2C45">{{ $message }}</h6>
                            @enderror
                            <input type="text" name="kodeMingguRPS" class="form-control" placeholder="Kode Minggu RPS" 
                            value="{{ old('kodeMingguRPS') ? old('kodeMingguRPS') : $minggu_RPS->kodeMingguRPS }}">
                        </div>
    
                        {{-- <div class="form-group">
                            <label>Kode Sub CPMK</label>
                            @error('kodeSubCPMK')
                                <h6 style="color: #BF2C45">{{ $message }}</h6>
                            @enderror
                            <input type="text" name="kodeSubCPMK" class="form-control" placeholder="kode Sub CPMK" value="Sub-CPMK0111">
                        </div> --}}

                        <div class="form-group">
                            <label>Kode Sub CPMK</label>
                            @error('kodeSubCPMK')
                            <h6 style="color: #BF2C45">{{ $message }}</h6>
                            @enderror
                            <select name="kodeSubCPMK" id='kodeSubCPMK' class="form-select">
                                @foreach($scpmk as $item)
                                    <option value="{{ $item->kodeSubCPMK }}">{{ $item->kodeSubCPMK }}</option>
                                @endforeach
                            </select>
                        </div>
    
                        <div class="form-group">
                            <label>Minggu RPS</label>
                            @error('mingguKe')
                                <h6 style="color: #BF2C45">{{ $message }}</h6>
                            @enderror
                            <input type="text" name="mingguKe" class="form-control" placeholder="Minggu RPS"
                            value="{{ old('mingguKe') ? old('mingguKe') : $minggu_RPS->mingguKe }}">
                        </div>
                        
                        <div class="form-group">
                            <label>Bentuk Pembelajaran</label>
                            @error('bentukPembelajaran')
                            <h6 style="color: #BF2C45">{{ $message }}</h6>
                            @enderror
                            <select name="bentukPembelajaran" id='bentukPembelajaran' class="form-select">
                                <option value="" selected disabled>-- Pilih Bentuk Pembelajaran --
                                </option>
                                <option value="1" @if ($minggu_RPS->bentukPembelajaran == 1) selected @endif>Luring</option>
                                <option value="0" @if ($minggu_RPS->bentukPembelajaran == 1) selected @endif>Daring</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Indikator Minggu RPS</label>
                            @error('indikatorMingguRPS')
                                <h6 style="color: #BF2C45">{{ $message }}</h6>
                            @enderror
                            <input type="text" name="indikatorMingguRPS" class="form-control" placeholder="Indikator Minggu RPS"
                            value="{{ old('indikatorMingguRPS') ? old('indikatorMingguRPS') : $minggu_RPS->indikatorMingguRPS }}">
                        </div>

                        <div class="form-group">
                            <label>Kriteria Minggu RPS</label>
                            @error('kriteriaMingguRPS')
                                <h6 style="color: #BF2C45">{{ $message }}</h6>
                            @enderror
                            <input type="text" name="kriteriaMingguRPS" class="form-control" placeholder="Kriteria Minggu RPS"
                            value="{{ old('kriteriaMingguRPS') ? old('kriteriaMingguRPS') : $minggu_RPS->kriteriaMingguRPS }}">
                        </div>

                        <div class="form-group">
                            <label>Deskripsi Pembelajaran</label>
                            @error('deskripsiPembelajaran')
                                <h6 style="color: #BF2C45">{{ $message }}</h6>
                            @enderror
                            <input type="text" name="deskripsiPembelajaran" class="form-control" placeholder="Deskripsi Pembelajaran"
                            value="{{ old('deskripsiPembelajaran') ? old('deskripsiPembelajaran') : $minggu_RPS->deskripsiPembelajaran }}">
                        </div>

                        <div class="form-group">
                            <label>Materi Pembelajaran</label>
                            @error('materiPembelajaran')
                                <h6 style="color: #BF2C45">{{ $message }}</h6>
                            @enderror
                            <input type="text" name="materiPembelajaran" class="form-control" placeholder="Materi Pembelajaran"
                            value="{{ old('materiPembelajaran') ? old('materiPembelajaran') : $minggu_RPS->materiPembelajaran }}">
                        </div>
    
                        <div class="form-group pt-4">
                            <button type="submit" name="submit" value="submit" id="submit" class="btn btn-dark btn-sm"><i
                                    class="fa fa-fw fa-plus-circle"></i>
                                Confirm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
        <br>
    
        <table class="table table-bordered" style="text-align: center">
            <thead style="background-color: lightgray">
                    <tr>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 5%">Kode Minggu RPS</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 5%">Kode Penilaian</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 5%">Kode SubCMPK</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 5%">Minggu Ke-</th>
                        <th class="align-middle" scope="col" colspan="1" style="width: 10%">Bentuk Pembelajaran</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Indikator Minggu RPS</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Kriteria Minggu RPS</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 20%">Deskripsi Pembelajaran</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Materi Pembelajaran</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Edit</th>
                        <th class="align-middle" scope="col" rowspan="2" style="width: 15%">Delete</th>
                    </tr>
            </thead>

            <tbody>
                @foreach ($minggu_rps_list as $minggu_rps)
                <tr>
                    <td scope="row">{{ $minggu_rps->kodeMingguRPS }}</td>
                    <td scope="row">kode penilaian</td>
                    <td scope="row">{{ $minggu_rps->kodeSubCPMK }}</td>
                    <td scope="row">{{ $minggu_rps->mingguKe }}</td>
                    @if ($minggu_rps->bentukPembelajaran == '1')
                    <td scope="row">{{ 'Luring' }}</td>
                    @else
                    <td scope="row">{{ 'Daring' }} </td>
                    @endif
                    <td scope="row">{{ $minggu_rps->indikatorMingguRPS }}</td>
                    <td scope="row">{{ $minggu_rps->kriteriaMingguRPS }}</td>
                    <td scope="row">{{ $minggu_rps->deskripsiPembelajaran }}</td>
                    <td scope="row">{{ $minggu_rps->materiPembelajaran }}</td>
                    <td scope="row" style="background-color: yellow;">
                        <a class="btn btn-primary"
                            href="{{ route('edit_minggu_rps', $minggu_rps->kodeMingguRPS) }}">Edit</a>
                    </td>
                    <td scope="row" style="background-color: yellow;">
                        <a class="btn btn-danger"
                            href="{{ route('delete_minggu_rps', $minggu_rps->kodeMingguRPS) }}">Delete</a>
                    </td>
                </tr>
                @endforeach
              </tbody>
        </table>
        
            </tbody>
        </table>
@endsection
