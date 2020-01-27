@extends('adminbackend')
@section('css')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@endsection

   @section('content')   
    <div class="row">
                <div class="col-lg-12">
                    {{-- <center><img src="assets/backend/img/netkrom.jpg" width="20%"></center> --}}
                <center><a><h3 style="color:black">Penjualan Ikan Hias</a></h3></center>
                </div>
            </div>
            <center>
                <body style="background-image: url(backend/assets/img/avatars/background.jpg); background-size:100%">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-15">
                <div style="background-color:transparent">
                    <br>
                    <center><a href="{{ route('ikan.create') }}" class="fa fa-plus-circle"></a></center>
                        <br>
                        <div class="table-responsive">
                            @if (session('pesan'))
                            <div class="alert alert-info">
                                <b></b>{{ session('pesan') }}
                            </div>
                            @endif
                            <table class="table">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Ikan</th>
                                    <th>Kategori Ikan</th>
                                    <th>Jenis Ikan</th>
                                    <th>Foto</th>
                                    <th>Harga Ikan </th>
                                    <th colspan="3" style="text-align: center;">Aksi</th>
                                </tr>
                    @php $no =1; @endphp
                  
                    @foreach($ikan as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->nama_ikan }}</td>
                        <td>{{ $data->kategori_ikan}}</td>
                        <td>{{ $data->jenis_ikan }}</td>
                        <td><img src="{{asset('assets/img/ikan/' .$data->foto. '')}}"
                        style="width:120px; height:120px;" alt="Foto"></td>
                        <td>{{ $data->harga_ikan }}</td>
                        <td><a href="{{ route('ikan.edit', $data->id) }}" class="fa  fa-edit"></a></td>
                        <td><a href="{{ route('ikan.show', $data->id) }}" class="fa fa-eye"></a></td>
                        <td><form action="{{ route('ikan.destroy', $data->id) }}" method="post">
                            {{ csrf_field() }}
                            @if (session('notif'))
                            <div class="alert alert-info">
                                <b></b>{{ session('notif') }}
                            </div>
                            @endif
                            <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="fa fa-trash"></button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
