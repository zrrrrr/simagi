@extends('admin.layout')

@section('additionalcss')
<style>
.form-control {
  width: 100%;
}
</style>
@endsection

@section('location')
Dashboard
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header d-flex">
                    <div class="d-flex align-items-center mr-auto p-2">Data Peralatan Gardu Induk</div>  
                    <div class="p-2">            
                        <button type="button" class="btn btn-flat btn-info" data-toggle="modal" data-target="#modal-data-peralatan">
                            Tambah
                        </button>
                    </div>            
                </div>
                <div class="card-body">
                    <?php $i = 1; ?>
                    @if(!$peralatan_gi_list->isEmpty())
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Peralatan</th>
                                <th>Kategori Peralatan</th>
                                <th>Lokasi Peralatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($peralatan_gi_list as $alat)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$alat->nama_peralatan}}</td>
                                <td>{{$alat->kategori_peralatan}}</td>
                                <td>{{$alat->id_gardu_induk}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                    @else
                        <p>Tidak ada data.</p>
                    @endif
                </div>
            </div>

            <div class="card">
                <div class="card-header d-flex">
                    <div class="d-flex align-items-center mr-auto p-2">Data Nama Gardu Induk</div>  
                    <div class="p-2">            
                        <button type="button" class="btn btn-flat btn-info" data-toggle="modal" data-target="#modal-default">
                            Tambah
                        </button>
                    </div>            
                </div>
                <div class="card-body">
                    <?php $j = 1; ?>
                    @if(!$nama_gi_list->isEmpty())
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Gardu Induk</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($nama_gi_list as $namagi)
                            <tr>
                                <td>{{$j++}}</td>
                                <td>{{$namagi->nama_gardu}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                    @else
                        <p>Tidak ada data.</p>
                    @endif
                </div>                
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header d-flex">
                    <div class="d-flex align-items-center mr-auto p-2">Data Kategori Peralatan</div>  
                    <div class="p-2">            
                        <button type="button" class="btn btn-flat btn-info" data-toggle="modal" data-target="#modal-default">
                            Tambah
                        </button>
                    </div>            
                </div>
                <div class="card-body">
                    <?php $k = 1; ?>
                    @if(!$kategori_alat_list->isEmpty())
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kategori Peralatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kategori_alat_list as $katalat)
                            <tr>
                                <td>{{$k++}}</td>
                                <td>{{$katalat->kategori_peralatan}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                    @else
                        <p>Tidak ada data.</p>
                    @endif
                </div>                
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="modal-data-peralatan">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Tambah Data Peralatan</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{ url('dataPeralatanGI') }}">
             {{ csrf_field() }}   
             <div class="d-flex justify-content-start">
                <div class="d-flex mr-auto align-items-center">Nama Peralatan</div>
                <div class="p-2 d-flex align-items-center">:</div>
                <div class="p-2">
                    <input type="text" name="nama_peralatan" class="form-control" style="text-transform: uppercase" placeholder="CB 150 KV" value="{{ old('nama_peralatan') }}">
                </div>
                @if($errors->has('nama_peralatan'))
                  <span style="color:red">{{ $errors->first('nama_peralatan') }}</span>
                @endif
            </div>
            <div class="d-flex justify-content-start">
                <div class="d-flex mr-auto align-items-center">Kategori Peralatan</div>
                <div class="p-2 d-flex align-items-center">:</div>
                <div class="p-2">
                    <input type="text" name="kategori_peralatan" class="form-control" style="text-transform: uppercase" placeholder="ALAT UKUR" value="{{ old('kategori_peralatan') }}">
                </div>
                @if($errors->has('kategori_peralatan'))
                  <span style="color:red">{{ $errors->first('kategori_peralatan') }}</span>
                @endif
            </div>
            <div class="d-flex justify-content-start">
                <div class="d-flex mr-auto align-items-center">Lokasi Peralatan</div>
                <div class="p-2 d-flex align-items-center">:</div>
                <div class="p-2">
                    <input type="text" name="id_gardu_induk" class="form-control" style="text-transform: uppercase" placeholder="GI GLUGUR" value="{{ old('id_gardu_induk') }}">
                </div>
                @if($errors->has('id_gardu_induk'))
                  <span style="color:red">{{ $errors->first('id_gardu_induk') }}</span>
                @endif
            </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-flat btn-info">Simpan</button>
        </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection

