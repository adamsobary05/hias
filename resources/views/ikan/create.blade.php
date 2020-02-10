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
            <div class="col-lg-10">
                <div>
                    <div class="card-header">Tambah Data Ikan</div>
                    <div class="card-body">
                    <form action="{{ route('ikan.store') }}" method="post" enctype="multipart/form-data">
                               {{ csrf_field() }}
                                    
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <input type="text"  name="nama_ikan" class="form-control" placeholder="Nama Ikan">
                                        </div>
                                     </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                       <select name="id_kategori" id="" class="form-control">
                                          @foreach ($kategori as $item)
                                       <option value="{{$item->id }}">{{$item->kategori_ikan}}</option>
                                          @endforeach
                                       </select>
                                        </div>
                                    </div>
                                   
                                </div>
                            
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <input type="text"  name="jenis_ikan" class="form-control" placeholder="Jenis Ikan">
                                        </div>                              
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <input type="text"  name="harga_ikan" class="form-control uang" placeholder="Harga Ikan">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="keterangan">Keterangan</label>
                                        <textarea name="keterangan" id="" cols="30" rows="10" class="form-control" style="resize:none"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="foto">Gambar Ikan</label>
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
