@extends('adminbackend')
@section('css')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
<link rel="stylesheet" href="{{asset('assets/backend/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
@endsection

@section('js')
    	<script src="{{asset('assets/backend/vendor/datatables.net/js/jquery.dataTables.js')}}"></script>
		<script src="{{asset('assets/backend/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
@endsection

   @section('content')   
    <div class="row">
                <div class="col-lg-12">
                    {{-- <center><img src="assets/backend/img/netkrom.jpg" width="20%"></center> --}}
                <center><a><h3 style="color:black">Data Ikan Hias</a></h3></center>
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
                           <section class="page-content container-fluid">
						    <div class="row">
							<div class="col-12">
							<div class="card">
							<div class="card-body">
							<div id="bs4-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                      <div class="row"><div class="col-sm-12 col-md-6">
                        <div class="dataTables_length" id="bs4-table_length">
                          <label>Show <select name="bs4-table_length" aria-controls="bs4-table" class="form-control form-control-sm">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                          </select> entries</label></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                          <div id="bs4-table_filter" class="dataTables_filter">
                            <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="bs4-table">
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="row"><div class="col-sm-12">
                        <table id="bs4-table" class="table table-striped table-bordered dataTable" style="width: 100%;" role="grid" aria-describedby="bs4-table_info">
					<thead>
                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="bs4-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 54px;">Name</th>
                          <th class="sorting" tabindex="0" aria-controls="bs4-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 80px;">Nama Ikan</th>
                          <th class="sorting" tabindex="0" aria-controls="bs4-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 100px;">Kategori Ikan</th>
                          <th class="sorting" tabindex="0" aria-controls="bs4-table" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 90px;">Jenis Ikan</th>
                          <th class="sorting" tabindex="0" aria-controls="bs4-table" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 90px;">Foto</th>
                          <th class="sorting" tabindex="0" aria-controls="bs4-table" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 100px;">Harga Ikan</th></tr>
                    </thead>
                     <tbody>	
                        @php $no =1; @endphp
                        @foreach($ikan as $data)
								<tr role="row" class="odd">
										<td class="sorting_1">{{ $no++ }}</td>
											<td>{{ $data->nama_ikan }}</td>
											<td>{{$data->kategori_ikan}}</td>
											<td>{{$data->jenis_ikan}}</td>
											<td><img src="{{asset('assets/img/ikan/' .$data->foto. '')}}"
                                                     style="width:120px; height:120px;" alt="Foto"></td>
                                            <td>{{ $data->harga_ikan }}</td>       
                        <td><a href="{{ route('ikan.edit', $data->id) }}" class="fa  fa-edit"></a></td>
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
                        </tbody>
                    @endforeach
                    </table>
                </div>
            </center>
        </div>
         </div>
                </div>
    </div>
					
                <div class="row"><div class="col-sm-12 col-md-5">
                </div>
                <div class="col-sm-12 col-md-7">
                  <div class="dataTables_paginate paging_simple_numbers" id="bs4-table_paginate">
                    <ul class="pagination">
                    <li class="paginate_button page-item previous disabled" id="bs4-table_previous">
                      <a href="#" aria-controls="bs4-table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                    </li>
                      <li class="paginate_button page-item active">
                        <a href="#" aria-controls="bs4-table" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                      </li>
                      <li class="paginate_button page-item ">
                        <a href="#" aria-controls="bs4-table" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                      </li>
                      <li class="paginate_button page-item ">
                        <a href="#" aria-controls="bs4-table" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                      </li>
                      <li class="paginate_button page-item ">
                        <a href="#" aria-controls="bs4-table" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                      </li>
                      <li class="paginate_button page-item ">
                        <a href="#" aria-controls="bs4-table" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                      </li>
                      <li class="paginate_button page-item ">
                        <a href="#" aria-controls="bs4-table" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                      </li>
                      <li class="paginate_button page-item next" id="bs4-table_next">
                        <a href="#" aria-controls="bs4-table" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
	       </div>
		  </div>
		 </div>
	    </div>
       </section>
                  
@endsection
	            