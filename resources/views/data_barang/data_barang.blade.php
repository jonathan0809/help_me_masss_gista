@extends('layouts.admin') 
@section('content')  

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class="fa fa-folder-o icon-title"></i> Data Barang

    <a class="btn btn-primary btn-social pull-right" href="/beranda_admin/form_tambah_barang" title="Tambah Data" data-toggle="tooltip">
      <i class="fa fa-plus"></i> Tambah
    </a>
  </h1>

</section>

<!-- Main content -->
<section class="content">
   @if(session('sukses'))
    <div class="alert alert-success  alert-dismissable" role="alert" >
      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
      {{(session('sukses'))}}
    </div>
    @endif
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-body">
          <!-- tampilan tabel barang -->
          <table id="example1" class="table table-bordered table-striped table-hover">
            <!-- tampilan tabel header -->
            <thead>
              <tr>
                <th class="center" width="30px">No.</th>
                <th class="center">Ukuran</th>
                <th class="center">Tipe</th>
                <th class="center">Warna</th>
                <th class="center">Harga Modal</th>
                <th class="center">Harga Jual</th>
                <th class="center">Nama Agen</th>
                <th class="center">Aksi</th>
              </tr>
            </thead>
            <!-- tampilan tabel body -->
       
              @php $no = 1; @endphp
              @foreach ($data_barang as $data)
              <tr>
              <td align="center">{{$no++}}</td>
              <td>{{$data->ukuran->ukuran}}</td>  
              <td>{{$data->tipe->tipe }}</td>
              <td>{{$data->warna->warna}}</td>
              <td>Rp {{number_format($data->harga_modal,0,'.','.')}}</td>
              <td> Rp {{number_format($data->harga_jual,0,'.','.')}}</td> 
              <td>{{$data->agen->agen}}</td>
              <td>
                <a href="/beranda_admin/edit_barang/{{$data->id}}" class="btn btn-warning btn-sm">Edit</a>
                <a href="/hapus_barang/{{$data->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')">Hapus</a></td> 
              </tr>
            @endforeach
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->
</section>

@endsection

