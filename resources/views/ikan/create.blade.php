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
        <div class="row">
            <div class="col-lg-10">
                <div>
                    <div class="card-header">Tambah Data Ikan</div>
                    <div class="card-body">
                    <form action="{{ route('ikan.store') }}" method="post" enctype="multipart/form-data">
                               {{ csrf_field() }}
                             <div class="form-row">
                                    <div class="col">
                                            <input type="text"  name="nama_ikan" class="form-control" placeholder="Nama Ikan">
                                    </div>
                                    <br><br>
                            <div class="col">
                                            <input type="text"  name="jenis_ikan" class="form-control" placeholder="Jenis Ikan">
                                        </div>
                                    </div>
                                        <div class="col">
                                            <input type="text"  name="harga_ikan" class="form-control" placeholder="Harga Ikan">
                                        </div>
                                    </div>
                            <button type="submit" class="btn btn-outline-info btn-rounded btn-block">
                                            Simpan Data
                                        </button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
