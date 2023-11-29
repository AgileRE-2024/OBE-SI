@extends('layout.dashboard')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Teknik Penilaian</h6>
        </div>
        <div class="card-body" style="width: auto">
            <div class="col-sm-8">
                <form method="post" action="{{ route('edit_rps.update_teknik_penilaian', $kodeRPS) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="form-group">
                        <label>Teknik Penilaian RPS</label>
                        @error('detail_penilaian')
                            <h1 style="color: #BF2C45">{{ $message }}</h1>
                        @enderror
                        <textarea name="detail_penilaian" id="editor" class="form-control" placeholder="Teknik Penilaian"
                            value="{{ old('detail_penilaian') ? old('detail_penilaian') : $rps->detail_penilaian }}">{{ old('detail_penilaian') ? old('detail_penilaian') : $rps->detail_penilaian }}</textarea>
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
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ),
            {
                ckfinder:{
                    uploadUrl:"{{ route('ckeditor.upload',['_token'=>csrf_token()]) }}",
                }
            }
            
            )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection

