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
                    <div class="card-header">Tambah Data Customer</div>
                    <div class="card-body">
                    <form action="{{ route('customer.store') }}" method="post" enctype="multipart/form-data">
                               {{ csrf_field() }}
                                    
                                <div class="form-group">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                        <input type="text"  name="nama" class="form-control" placeholder="Nama">
                                        </div>
                                     </div>
                                </div>
                            
                                <div class="form-group">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                        <input type="text"  name="no_telepon" class="form-control" placeholder="Nomor_Telepon">
                                        </div>                              
                                    </div>
                                    <div class="form-group">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                        <input type="text"  name="alamat" class="form-control uang" placeholder="Alamat">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                 <div class="col-md-10">
                                        <div class="form-group">
                                        <input type="text"  name="jenis_kelamin" class="form-control uang" placeholder="Jenis Kelamin">
                                        </div>
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