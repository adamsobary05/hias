@extends('adminbackend')
@section('css')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
<style>
	.content{
		background-image:url("{{ asset('backend/assets/img/avatars/background.jpg') }}");
		background-size: 100%;
	}
	</style>
@endsection

@section('js')
   <script src="{{asset('assets/backend/assets/vendor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('assets/backend/assets/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('assets/backend/assets/js/components/select2-init.js')}}"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>   
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <div class="card-header">Edit</div>
                <div class="card-body">
                    <form action="{{ route('makanan.update', $makanan->id) }}" method="post" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
   
                        <div class="form-group">
                                    <label>Nama Makanan Ikan Hias</label>
                                    <input type="text" class="form-control @error('nama_makanan') is-invalid @enderror"
                                                 name="judul" placeholder="{{ $makanan->nama_makanan }}" required>
                        </div>
    
                        <div class="form-group">
                                    <label>Harga Makanan Ikan Hias</label>
                                    <input type="text" class="form-control @error('harga_makanan') is-invalid @enderror"
                                                 name="judul" placeholder="{{ $makanan->harga_makanan }}" required> 
                        </div>

                        <div class="form-group">
                                    <label>Foto</label>
                                    @if(isset($makanan)&& $makanan->foto)
                        <p>
                                    <img src="{{ asset('assets/img/makanan/'.$makanan->foto.'')}}"
                                    style="margin-top:15px;margin-buttom:15px;
                                    max-height:100px; border:1px; border-color:black;">
                        </p>
                  @endif
                                    <input type="file" class="form-control
                                    @error('foto') is-invalid @enderror"
                                    name="foto" value="{{ $makanan->foto }}">  

                        <div class="from-group">
                                    <label>Deskripsi</label>
                                    <textarea id="editor1" class="form-control
                                    @error('deskripsi') is invalid @enderror"
                                    name="deskripsi" required>{{$makanan->deskripsi}}
                        </textarea>
                  </div>

                    <button type="submit" class="btn btn-outline-info btn-rounded btn-block">
                    Simpan Data
                    </button>
              <br>
                  <div class="form-group">
                              <a href="{{ url('/makanan') }}" class="btn btn-outline-info btn-rounded btn-block">Kembali</a>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
