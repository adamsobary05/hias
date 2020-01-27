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
                <div class="card-header">Menampilkan Data Ikan</div>
                <div class="card-body">
                       <div class="form-row">
                                    <div class="col">
                                        <label for="">Nama Ikan</label>
                                            <input type="text"  name="nama_ikan" value="{{ $ikan->nama_ikan }}" class="form-control" disabled>
                                    </div>
                                    <br><br>
                            <div class="col">
                                <label for="">Kategori Ikan</label>
                                               <input type="text"  name="kategori_ikan" value="{{ $ikan->kategori_ikan }}" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <br>
                                       <div class="form-row">
                                    <div class="col">
                                        <label for="">Jenis Ikan</label>
                                            <input type="text"  name="jenis_ikan" value="{{ $ikan->jenis_ikan }}" class="form-control" disabled>
                                    </div>
                                    <br><br>
                            <div class="col">
                                <label for="">Harga Ikan</label>
                                               <input type="number"  name="harga_ikan" value="{{ $ikan->harga_ikan }}" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <br>
                                    
    <div class="form-group">
        <a href="{{ url('/ikan') }}" class="btn btn-outline-info btn-rounded btn-block">Kembali</a>
    </div>
        </div>
            </div>
                </div>
                    </div>
                        </div>
                            @endsection
