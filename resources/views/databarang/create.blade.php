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
                    <div class="card-header">Tambah Data Barang</div>
                    <div class="card-body">
                    <form action="{{ route('databarang.store') }}" method="post" enctype="multipart/form-data">
                               {{ csrf_field() }}
                                    
                                <div class="form-group">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                        <input type="text"  name="nama_ikan" class="form-control" placeholder="Nama Ikan">
                                        </div>
                                     </div>
                                   <div class="col-md-10">
                                        <div class="form-group">
                                       <select name="id_kategori" id="" class="form-control">
                                          @foreach ($kategori as $item)
                                       <option value="{{$item->id }}">{{$item->kategori_ikan}}</option>
                                          @endforeach
                                       </select>
                                        </div>
                                    </div>
                                   
                                </div>
                            
                                <div class="form-group">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                        <input type="text"  name="nama_makanan" class="form-control" placeholder="Nama Makanan">
                                        </div>                              
                                    </div>
                                    <div class="form-group">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                        <input type="text"  name="stok_makanan" class="form-control uang" placeholder="Stok Makanan">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                 <div class="col-md-10">
                                        <div class="form-group">
                                        <input type="text"  name="total_pendapatan" class="form-control uang" placeholder="Total Pendapatan">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-md-10">
                                        <div class="form-group">
                                        <input type="text"  name="total_pengeluaran" class="form-control uang" placeholder="Total Pengeluaran">
                                        </div>
                                    </div>
                            <button type="submit" class="btn btn-outline-info btn-rounded btn-block">
                                Simpan Data
                            </button>
                            
                        </div>
                    </form>
                </div>
            </div>
@endsection