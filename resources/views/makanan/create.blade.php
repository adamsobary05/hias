@extends('adminbackend')
@section('css')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
	{{-- <style>
	.content{
		background-image:url("{{ asset('backend/assets/img/avatars/background.jpg') }}");
		background-size: 100%;
	}
	</style> --}}
@endsection

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div>
                    <div class="card-header">Tambah Data makanan</div>
                    <div class="card-body">
                    <form action="{{ route('makanan.store') }}" method="post" enctype="multipart/form-data">
                               {{ csrf_field() }}            
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <input type="text"  name="nama_makanan" class="form-control" placeholder="Nama Makanan">
                                        </div>                              
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <input type="text"  name="harga_makanan" class="form-control uang" placeholder="Harga">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 form-group">
                                        <label for="deskripsi">Keterangan</label>
                                        <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control" style="resize:none"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="foto">Gambar Makanan</label>
                                        <input class="form-control 
                                        @error('foto') is-invalid @enderror" type="file" 
                                        name="foto" id="" required>    
                                    </div>    
                                </div>    
                                
    
                            <button type="submit" class="btn btn-outline-info btn-rounded btn-block">
                                Simpan Data
                            </button>
                            
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>
@endsection
