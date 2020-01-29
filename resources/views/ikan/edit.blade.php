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
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <div class="card-header">Perpanjang Kontrak ikan</div>
                <div class="card-body">
                    <form action="{{ route('ikan.update', $ikan->id) }}" method="post" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
   <div class="form-group">
        <label for="">Nama Ikan</label>
        <input class="form-control" value="{{ $ikan->nama_ikan }}" type="text" name="nama_ikan">
    </div>
    
      <div class="form-group">
        <label for="">Kategori Ikan</label>
        <input class="form-control" value="{{ $ikan->kategori_ikan }}" type="text" name="kategori_ikan">
    </div>

      <div class="form-group">
        <label for="">Jenis Ikan</label>
        <input class="form-control" value="{{ $ikan->jenis_ikan }}" type="text" name="jenis_ikan">
    </div>
    </div>
        
    <div class="form-group">
        <label for="">Harga Ikan</label>
        <input class="form-control" value="{{ $ikan->harga_ikan }}" type="text" name="harga_ikan">
    </div>

      <div class="row">
             <div class="col-md-4">
             <div class="form-group">
             <input class="form-control 
             @error('foto') is-invalid @enderror" type="file" 
             name="foto" id="" required>    
        </div>    

      <button type="submit" class="btn btn-outline-info btn-rounded btn-block">
              Simpan Data
      </button>
      @if (session('new'))
                        <div class="alert alert-info">
                            <b></b>{{ session('new') }}
                        </div>
                        @endif
<br>
    <div class="form-group">
        <a href="{{ url('/ikan') }}" class="btn btn-outline-info btn-rounded btn-block">Kembali</a>

        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
