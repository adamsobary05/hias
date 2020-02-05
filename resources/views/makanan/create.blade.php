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
            <div class="col-lg-10">
                <div>
                    <div class="card-header">Tambah Data Ikan</div>
                    <div class="card-body">
                    <form action="{{ route('makanan.store') }}" method="post" enctype="multipart/form-data">
                               {{ csrf_field() }}
                                    
                                <div class="form-group">
                                        <label for="">Nama Makanan Ikan Hias</label>
                                        <input class="form-control 
                                        @error('nama_makanan') is-invalid @enderror" type="text" 
                                        name="nama_makanan" id="" required>
                                     </div>
                                      <div class="form-group">
                                        <label for="">Harga Makanan Ikan Hias</label>
                                        <input class="form-control 
                                        @error('harga_makanan') is-invalid @enderror" type="text" 
                                        name="harga_makanan" id="" required>
                                </div>

                               <div class="form-group">
                                        <label for="">Foto</label>
                                        <input class="form-control 
                                        @error('foto') is-invalid @enderror" type="file" 
                                        name="foto" id="" required>
                               </div>
                                
                                  <div class="form-group">
                                     <label for="">Deskripsi</label>
                                            <textarea class="form-control 
                                            @error('deskripsi') is-invalid @enderror"
                                            name="deskripsi" id="editor1" required>
                                            </textarea>

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
