@extends('admin.layout')

@section('additionalcss')
<style>
.container {
  padding: 5px;
}

.custom-heigh-table1{
   height: 100px; 
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
                    <table id="tabel-data-peralatan"
                    class="table table-striped table-bordered table-hover"
                    data-filter-control="true"
                    data-show-search-clear-button="true">
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
                                <td>{{$alat->data_kategori_peralatan->kategori_peralatan}}</td>
                                <td>{{$alat->data_nama_gardu_induk->nama_gardu}}</td>
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
                        <button type="button" class="btn btn-flat btn-info" data-toggle="modal" data-target="#modal-data-nama-gardu">
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
                    <div class="d-flex align-items-center mr-auto p-2">Tag Nama Peralatan</div>  
                    <div class="p-2">            
                        <button type="button" class="btn btn-flat btn-info" data-toggle="modal" data-target="#modal-data-tagnama-alat">
                            Tambah
                        </button>
                    </div>            
                </div>
                <div class="card-body">
                    @if(!$tagnama_alat_list->isEmpty())
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                            @foreach($tagnama_alat_list as $tagnamaalat)
                            <span class="badge badge-pill badge-dark">{{$tagnamaalat->tag_nama_alat}}</span>
                            @endforeach
                            </div>
                        </div>
                    </div>
                    @else
                        <p>Tidak ada data.</p>
                    @endif
                </div>                
            </div>

            <div class="card">
                <div class="card-header d-flex">
                    <div class="d-flex align-items-center mr-auto p-2">Data Kategori Peralatan</div>  
                    <div class="p-2">            
                        <button type="button" class="btn btn-flat btn-info" data-toggle="modal" data-target="#modal-data-kategori-peralatan">
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

            <div class="card">
                <div class="card-header d-flex">
                    <div class="d-flex align-items-center mr-auto p-2">Data Merk Peralatan</div>  
                    <div class="p-2">            
                        <button type="button" class="btn btn-flat btn-info" data-toggle="modal" data-target="#modal-data-merk-alat">
                            Tambah
                        </button>
                    </div>            
                </div>
                <div class="card-body">
                    <?php $l = 1; ?>
                    @if(!$merk_list->isEmpty())
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kategori Peralatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($merk_list as $merkalat)
                            <tr>
                                <td>{{$l++}}</td>
                                <td>{{$merkalat->nama_merk}}</td>
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
                    <div class="d-flex align-items-center mr-auto p-2">Daftar User</div>  
                    <div class="p-2">            
                        <button type="button" class="btn btn-flat btn-info" data-toggle="modal" data-target="#modal-tambah-user">
                            Tambah
                        </button>
                    </div>            
                </div>
                <div class="card-body">
                    <?php $l = 1; ?>
                    @if(!$user_list->isEmpty())
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover"
                                data-filter-control="true"
                                data-show-search-clear-button="true"
                                id="tabel-user" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama User</th>
                                <th>Username</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user_list as $listuser)
                            <tr>
                                <td>{{$l++}}</td>
                                <td>{{$listuser->name}}</td>
                                <td>{{$listuser->email}}</td>
                                <td></td>
                                <td>
                                <a href="" class="fas fa-user-edit" data-toggle="modal" data-target="#modal-edit-user"></a>
                                </td>
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
        <form method="post" action="{{ url('dataPeralatanGI') }}">
             {{ csrf_field() }}
        <div class="modal-header">
            <h4 class="modal-title">Tambah Data Peralatan</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">               
             <div class="container">
                <div class="row">
                    <div class="col-sm-4 form-group">Nama Peralatan</div>
                    <div class="col-sm-1">:</div>
                    <div class="col-lg-6 select2-purple">
                            <select class="select2" name="nama_peralatan" multiple="multiple" data-placeholder="Pilih Nama Alat" data-dropdown-css-class="select2-purple" style="width: 100%;" required>
                                <option value="">Pilih Nama Alat</option>
                                @foreach($tagnama_alat_list as $list_tag)
                                <option value="{{ $list_tag->tag_nama_alat }}">{{ $list_tag->tag_nama_alat }}</option>
                                @endforeach
                            </select>
                    </div>
                    @if($errors->has('nama_peralatan'))
                    <span style="color:red">{{ $errors->first('nama_peralatan') }}</span>
                    @endif
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">Kategori Peralatan</div>
                    <div class="col-sm-1">:</div>
                    <div class="col-lg-6">
                        <select class="form-control" name="id_kategori_peralatan" required>
                        <option value="">Pilih Kategori</option>
                        @foreach($kategori_alat_list as $list_kategori)
                        <option value="{{ $list_kategori->id }}">{{ $list_kategori->kategori_peralatan }}</option>
                        @endforeach
                        </select>
                    </div>
                    @if($errors->has('id_kategori_peralatan'))
                    <span style="color:red">{{ $errors->first('id_kategori_peralatan') }}</span>
                    @endif
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">Lokasi Peralatan</div>
                    <div class="col-sm-1">:</div>
                    <div class="col-lg-6">
                        <select class="form-control" name="id_gardu_induk" required>
                        <option value="">Pilih Gardu Induk</option>
                        @foreach($nama_gi_list as $list_gi)
                        <option value="{{ $list_gi->id }}">{{ $list_gi->nama_gardu }}</option>
                        @endforeach
                        </select>
                    </div>
                    @if($errors->has('id_gardu_induk'))
                    <span style="color:red">{{ $errors->first('id_gardu_induk') }}</span>
                    @endif
                </div>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-flat btn-info">Simpan</button>
        </div>
        </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="modal-data-tagnama-alat">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="{{ url('dataTagNamaAlat') }}">
            {{ csrf_field() }}
            <div class="modal-header">
                <h4 class="modal-title">Tambah Tag Nama Alat</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">                   
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">Tag Nama Peralatan</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-lg-6">
                            <input type="text" name="tag_nama_alat" class="form-control" placeholder="Contoh: CB 150 KV" value="{{ old('tag_nama_alat') }}" required>
                        </div>
                        @if($errors->has('tag_nama_alat'))
                        <span style="color:red">{{ $errors->first('tag_nama_alat') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-flat btn-info">Simpan</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="modal-data-nama-gardu">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="{{ url('dataNamaGardu') }}">
            {{ csrf_field() }}
            <div class="modal-header">
                <h4 class="modal-title">Tambah Gardu Induk</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">                   
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">Nama Gardu</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-lg-6">
                            <input type="text" name="nama_gardu" class="form-control" placeholder="Contoh: GI Contoh" value="{{ old('nama_gardu') }}" required>
                        </div>
                        @if($errors->has('nama_gardu'))
                        <span style="color:red">{{ $errors->first('nama_gardu') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-flat btn-info">Simpan</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="modal-data-kategori-peralatan">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="{{ url('dataKategoriPeralatan') }}">
            {{ csrf_field() }}
            <div class="modal-header">
                <h4 class="modal-title">Tambah Kategori Peralatan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">                   
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">Nama Kategori</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-lg-6">
                            <input type="text" name="kategori_peralatan" class="form-control" placeholder="Contoh: HV Aparatus" value="{{ old('kategori_peralatan') }}" required>
                        </div>
                        @if($errors->has('kategori_peralatan'))
                        <span style="color:red">{{ $errors->first('kategori_peralatan') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-flat btn-info">Simpan</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="modal-data-merk-alat">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="{{ url('dataMerkAlat') }}">
            {{ csrf_field() }}
            <div class="modal-header">
                <h4 class="modal-title">Tambah Merk Peralatan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">                   
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">Nama Merk Alat</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-lg-6">
                            <input type="text" name="nama_merk" class="form-control" placeholder="Contoh: Saiman" value="{{ old('nama_merk') }}" required>
                        </div>
                        @if($errors->has('nama_merk'))
                        <span style="color:red">{{ $errors->first('nama_merk') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-flat btn-info">Simpan</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="modal-tambah-user">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="modal-header">
                <h4 class="modal-title">Tambah User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">                   
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">Nama</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-lg-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Contoh: Admin Kece">
                        </div>
                        @if($errors->has('name'))
                        <span style="color:red">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">Username</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-lg-6">
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Contoh: admin.kece">
                        </div>
                        @if($errors->has('email'))
                        <span style="color:red">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">Password</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-lg-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        </div>
                        @if($errors->has('password'))
                        <span style="color:red">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">Confirm Password</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-lg-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-flat btn-info">Simpan</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->



@endsection

