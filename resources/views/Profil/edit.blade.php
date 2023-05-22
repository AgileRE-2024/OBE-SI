@extends('main')

@section('title', 'Profil Lulusan')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>SI-OBE</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">SI-OBE</a></li>
                    <li class="active">Edit</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">

    <div class="animated fadeIn">

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Edit Profil Lulusan</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('profil') }}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('profil/'.$profil->id) }}" method="post">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label>Kode</label>
                                <input type="text" name="Kode" class="form-control @error('Kode') is-invalid @enderror" value="{{ old('Kode', $profil->Kode) }}">
                                @error('Kode')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Profil</label>
                                <textarea name="Profil" class="form-control @error('Profil') is-invalid @enderror">{{ old('Profil', $profil->Profil) }}</textarea>
                                @error('Profil')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Deskripsi Profil</label>
                                <textarea name="Deskripsi_Profil" class="form-control @error('Deskripsi_Profil') is-invalid @enderror">{{ old('Deskripsi_Profil', $profil->Deskripsi_Profil) }}</textarea>
                                @error('Deskripsi_Profil')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>      

    </div>

</div>
@endsection